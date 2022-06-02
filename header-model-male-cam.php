<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1"/>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
<?php $model = get_query_var('male-cam'); 
if(!empty($model)):

include 'partials/profil-page-performers.php';

$profil = $arrprofilperformers["data"]["Performers"]["Data"][0];;?>

<title>Watch <?php echo $model .' gay sex cam model in live sex chat ';?> - <?php bloginfo(); ?></title>

<link rel="canonical" href="<?php echo home_url().'/male-cam/'.$model;?>/" />
<meta name="description" content="Enjoy gay male live cams starring studly models with big cocks! Perfect guys with nice bodies and flashy smiles. Oh, and they love to jerk off with YOU!"/>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:description" content="Discover <?php echo $model;?>'s cam show on <?php echo $profil['system_source_name_clean'] ;?>, a <?php echo $profil['age'] ;?> years old featured on <?php bloginfo(); ?>. Have a look at <?php echo $model;?>'s profile now!"/>
<meta property="og:url" content="<?php echo home_url().'/male-cam/'.$model;?>/"/>
<meta property="og:site_name" content="<?php bloginfo( 'charset' ); ?>"/>
<meta property="og:image" content="<?php echo $profil['profile_image_full_proxy_url'] ;?>"/>

<?php else: ?>

<title>	The Best Explicit Gay Male Live Cams - <?php bloginfo(); ?></title>
<link rel="canonical" href="<?php echo home_url().'/male-cam/'?>" />
<?php if(get_field('meta_description')): ?>
    <meta name="description" content="<?php the_field('meta_description');?>"/>
<?php endif;?>
<meta property="og:locale" content="en_US"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Real Gay Cam Models in Live Male Sex Chats - <?php bloginfo(); ?>"/>
<?php if(get_field('meta_description')): ?>
    <meta property="og:description" content="<?php the_field('meta_description');?>"/>
<?php endif;?>
<meta property="og:url" content="<?php echo home_url().'/male-cam/'?>"/>
<meta property="og:site_name" content="<?php bloginfo( 'charset' ); ?>"/>
<?php if(get_field('og_image')): ?>
    <meta property="og:image" content="<?php the_field('og_image');?>'"/>
<?php endif;?>


<?php endif;?>

<?php wp_head(); ?>

<?php include 'partials/session.php';?>

</head>

    <body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQMMT6W"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

        <div class="top__header <?= empty($model) ? 'sticky' : '';?>">

            <div class="container-fluid">

                <header class="head__master" role="header">

                    <div class="logo"><a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="logo Live teen porn"/></a></div>

                    <nav role="navigation">

                        <?php wp_nav_menu( array(
                        'theme_location' => 'main-menu',
                        'menu_class' => 'menu'
                        ) ); ?>

                    </nav>

                </header>

            </div>

         
          


    
        