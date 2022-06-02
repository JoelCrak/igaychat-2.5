<?php 

function wp_base_style() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script('jqueryui', 'https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js', array(), null, true);
    wp_enqueue_script('slider', 'https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', array(), null, true);
    wp_enqueue_script('script', get_template_directory_uri() .'/assets/script.js', array('jquery'), null, true);
}

add_action( 'wp_enqueue_scripts', 'wp_base_style' );


register_nav_menus(array(
    'main-menu' => __('Main Menu', 'ltp')
));

add_action('template_redirect','remove_wpseo'); 

function remove_wpseo(){

    if (is_page(8)) { 

        global $wpseo_front;

        remove_action( 'wp_head', '_wp_render_title_tag', 1 );

        if(defined($wpseo_front)){
            remove_action('wp_head',array($wpseo_front,'head'),1);
        }
        else {
            $wp_thing = WPSEO_Frontend::get_instance();
            remove_action('wp_head',array($wp_thing,'head'),1);
        }
    }
}


add_action( 'customize_register' , 'token' );

function token( $wp_customize ) {

    $wp_customize->add_setting('api-tk');

	$wp_customize->add_section( 
        'liveporn_body_options', 
        array(
            'title'       => __( 'API', 'livepornteen' ),
            'priority'    => 100,
            'capability'  => 'edit_theme_options',
        ) 
    );

  
    $wp_customize->add_control( 'api-token-id', array(
        'type' => 'text',
        'section' => 'liveporn_body_options',
        'label' => 'API Token',
        'settings' => 'api-tk',
      ) );
    
}

function get_token() {

    $token= get_theme_mod('api-tk');

    return $token;
}

function graphql_query(string $endpoint, string $query, ?string $token = null): array
{

    $headers = ['Content-Type: application/json'];
    if (null !== $token) {
        $headers[] = "Authorization: bearer $token";   
    }
    if (false === $data = @file_get_contents($endpoint, false, stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => $headers,
            'content' => json_encode(['query' => $query]),
        ]
    ]))) {
        $error = error_get_last();
        throw new \ErrorException($error['message'], $error['type']);
    }

   return json_decode($data, true);
}

    
function custom_rewrite_tag() {
    add_rewrite_tag('%male-cam%', '([^&]+)');
  }
  add_action('init', 'custom_rewrite_tag', 10, 0);

  function custom_rewrite_rule() {
    add_rewrite_rule('^male-cam/([^/]*)/?','index.php?page_id=1424&male-cam=$matches[1]','top');
  }
  add_action('init', 'custom_rewrite_rule', 10, 0);

  add_theme_support( 'post-thumbnails' );
  add_theme_support( 'title-tag' );

function igc_wp_pagination()
{
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

function create_posttype() {
 
    register_post_type( 'camtags',
        array(
            'labels' => array(
                'name' => __( 'Cam Tags' ),
                'singular_name' => __( 'Cam tag' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'live-sex'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-admin-users',
            'menu_position' => 20,
            'supports'  => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt','custom-fields','page-attributes' ),
        )
    );

}

add_action( 'init', 'create_posttype' );

function modelbycategory_pagination($gender, $condition) {
    $token="05f499b0-0c73-11ea-accc-3f30849a8bc1";
    $query = '{
        LivePerformers(
            token: "'.get_token().'"
            filters: [
                    {key: "system_source_name_clean", value:"streamate", condition:EQUAL}
                    { key: "gender", condition: CONTAIN, value: "'.$gender.'" }
                    '.$condition.'
            ]
          ) {
            Pager {
              total
            }
        }
    }';

    $result =  graphql_query('https://api.camshq.info', $query, $token);
    $totalStreamate = $result["data"]["LivePerformers"]["Pager"]["total"]; 

    $big = 999999999; // need an unlikely integer
    $modelperpage =  round($totalStreamate / 60) ;
	$currentpage = get_query_var('paged');
	  
     if ($totalStreamate>60){

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' =>  $modelperpage -1,
            'prev_next' => False,
    
        ) );
    }

}


add_action( 'wp_head', function(){
	if( is_page('1424')) {
		remove_all_actions( 'rank_math/head' );
		add_action( 'wp_head', '_wp_render_title_tag', 2 );
	}
}, 1 );

/**
 * Register theme support for Rank Math breadcrumbs
 */
add_theme_support( 'rank-math-breadcrumbs' );

/*
* Test breacrumb
*/
function get_breadcrumb($name, $slug) {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '"> Home';
		echo "</a> » ";

        if(is_page_template('page-model.php')) {
        echo '<a href="';
        echo the_permalink();
        echo '">';
        echo ucwords($slug);
        echo "</a>";
        echo " » " . $name;
        }
		elseif (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}