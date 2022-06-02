<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=603d10a86ac5460013735caf&product=sop' async='async'></script>


<?php wp_head(); ?>

<?php include 'partials/session.php';?>

</head>


    <body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQMMT6W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <?php if(is_front_page()): ?>

            <div class="shape__header">

                <div class="container-fluid">

                    <header class="head__master" role="header">

                        <div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo Gay Chat"/></a></div>

                        <nav role="navigation">

                        <?php wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'menu'
                        ) ); ?>

                        </nav>

                    </header>
                
                </div>

                <div class="container">

            
                <?php include 'partials/api-live-header.php';?>

                <?php $prefix = $arrmodellive["data"]["LivePerformers"]["Data"][0];?>
                        
                    <div class="live__feed">

                    
                    <div class="live__feed__title">

                        <h1>IGayChat.com – Hottest live gay porn cams show</h1>

                        <p>Welcome to IGayChat.com, where the hottest cam boys come to get naked and jerk off! 
                            Watch the hottest young studs get undressed, rub their balls and wiggle their juicy cocks 
                            in front of the webcam. We host a tremendous number of studs that comes from all walks of life.
                        </p>
                        <p> Young guys, older guys, skinny dudes, thick dudes, dominant men, submissive men. Basically, 
                            IGayChat offers something for all tastes and niches! If you want to interact LIVE on webcam 
                            with gorgeous men, IGayChat makes it happen.
                        </p>

                        <p>Are you into chatting with hot dudes on webcam? How about flirting with sexy cam dudes, 
                            sharing stories, maybe even hooking up your own webcam for a steamy session of mutual masturbation? 
                            Get ready to be blown away, not only by the quality of cam models waiting to please, but also by the 
                            breathtaking high resolution of our cameras.
                        </p>
                        <p>
                            Every second of the action is caught in HD quality! 
                            Crystal-clear footage of studly hunks showing off their bodies and cocks. It’s a dream cum true for gay porn fans, 
                            especially those who enjoy adult chats.
                        </p>

                        <h2 style="font-size: 1.25em; color: #fff;">Get Free Access to Live Cam & Chat</h2>

                        <div class="l-listing-cat" style="padding: 1.25em 0;">
                                <?php
                                    $args = array(
                                        'post_type' => 'camtags', 'posts_per_page' => -1,
                                        'post__not_in' => array( 2072  )
                                    );
                                    $query = new WP_Query( $args );
                                if ( $query->have_posts()) : ?> 
                                    <ul style="list-style: none; margin: 0; padding: 0; width: 100%; display: flex; flex-wrap: wrap; row-gap: 15px; column-gap: 5px; justify-content: left;">
                                        <?php while ($query->have_posts() ) : $query->the_post(); ?>
                                            <li>
                                                <a style="color: #52f1ec;
    padding: 5px 1em;
    transition: all .3s ease;
    text-transform: capitalize;
    font-size: 14px;
    border: 1px solid #52f1ec;
    border-radius: 15px;"
                                                    class="tracked" href="<?php the_permalink();?>" title="Live <?php the_title();?> Pornstars"><?php the_title();?></a>
                                            </li>
                                        <?php endwhile ;?>
                                            <li>
                                                <a style="color: #52f1ec;
                                                            padding: 5px 1em;
                                                            transition: all .3s ease;
                                                            text-transform: capitalize;
                                                            font-size: 14px;
                                                            border: 1px solid #52f1ec;
                                                            border-radius: 15px;" class="tracked" href="<?php echo home_url();?>/live-sex/">All tags</a>
                                            </li>
                                    </ul>
                                <?php endif ;?>
                        </div>

                        <a href="<?php echo home_url();?>/live-sex/" class="btn main-color">Online free gay chat rooms
                        <span class="arr_icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512.008 512.008" style="enable-background:new 0 0 512.008 512.008;" xml:space="preserve">
                                <path style="fill:#FF9800;" d="M306.219,45.796c-21.838-21.838-57.245-21.838-79.083,0s-21.838,57.245,0,79.083l77.781,77.803
                                H53.333C23.878,202.682,0,226.56,0,256.015c0,29.455,23.878,53.333,53.333,53.333h251.584l-77.781,77.781
                                c-21.838,21.838-21.838,57.245,0,79.083c21.838,21.838,57.245,21.838,79.083,0l202.667-202.667c4.164-4.165,4.164-10.917,0-15.083
                                L306.219,45.796z"/>
                                </svg>
                            </span>
                        </a>

                        </div>

                        <div class="feed_ctn">

                            <a href="https://jerkmate.com/cams/male?aff_id=3?aff_sub=CRA_999528218_IGCH_TXT&source=TS33-999528218" rel="nofollow" style="position: absolute; top: 0; right: 0; bottom: 0; left: 0; z-index: 1;"></a>

                            <div class="iframe_ctn">

                                <span class="live__green"></span>

                              <iframe src="https://www.jerkmatelive.com/blacklabel/pure/?name=<?php echo $prefix['name'];?>&performerid=<?php echo $prefix['performer_uid'];?>&volumelevel=0&lang=en&widescreen=true" scrolling="no" allow="autoplay"></iframe>      

                            </div>

                        </div>


                    </div>

                </div>                  

            </div><!--shape header home -->


        <?php else :?>

            <div class="top__header sticky">

                <div class="container-fluid">

                    <header class="head__master" role="header">

                        <div class="logo">
                            <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo Live teen porn"/></a></div>

                        <nav role="navigation">

                            <?php wp_nav_menu( array(
                            'theme_location' => 'main-menu',
                            'menu_class' => 'menu'
                            ) ); ?>

                        </nav>

                    </header>
                    
                </div>
                
            </div>

        <?php endif ;?>

        



    
        