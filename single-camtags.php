<?php 

get_header();


    global $post;
    $post_slug = $post->post_name;
    $condition = '';
    $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1; 
    $h1 = get_field('title_camtag');
    ?>


    <main role="main">

     <?php  include 'partials/api-category.php';

        $allmodels = $arrcategorybyprofil["data"]["LivePerformers"]["Data"]; ?>

        <section class="l-live-model all__models related__profil mp">

            <div class="container">
            
                <div class="l-pagination-model">
                    <?php// modelbycategory_pagination($gender, $condition) ;?>
                </div>

                <?php if($onlinemodels !== 0) { ?>

                                        
                <div class="l-header">
                <div class="breadcrumb"><?php get_breadcrumb($nameModel, $slug); ?></div>
                    <h1><?php if (empty($h1)) { echo ' Chat with ' . $onlinemodels. ' Live gay '. $post_slug . ' boys '; } else { echo $h1; } ?></h1>
                    <div class="subtitle">
                        <p style="font-size: 1.8em; margin: 0 1vw 0 0;font-weight: 700;"><?php// echo $onlinemodels; ?></p>
                        <!-- <h2 style="margin:0;">Live Webcam Models Now</h2> -->
                    </div>
                </div>

                <ul>

                    <?php

                    foreach ($allmodels as $key => $modelprofil) { ?>

                        <li>

                            <a data-layer='{"eventCategory":"tag","eventAction":"link","eventLabel":"<?php echo $modelprofil['name'];?>"}' class="tracked" href="<?php echo home_url();?>/male-cam/<?php echo strtolower($modelprofil['name']) ;?>/" title="<?php echo $modelprofil['name'];?> Cam Boy">

                                <div class="img__ctn">
                                    
                                    <img src="<?php echo $modelprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $modelprofil['name'];?>"/>
                                    
                                    <p><?php echo $modelprofil['name'];?></p>

                                </div>

                            </a>

                        </li>

                    <?php } ?>

                </ul>
                
                <?php } else { ?>

                    <div class="l-header">
                        <h1><?php if (empty($h1)) { echo 'Chat with ' . $post_slug . ' cam boys'; } else { echo $h1; } ?></h1>
                        <h2>There are no gay <strong> <?php echo $post_slug; ?></strong> models live at the moment </h2>
                    </div>

                    <ul class="offline">

                        <?php

                        $offlineModels = $Performers["data"]["Performers"]["Data"];

                        foreach ($offlineModels as $key => $modeloff) { ?>

                            <li>

                                <a class="tracked" href="<?php echo home_url();?>/male-cam/<?php echo strtolower($modeloff['name']) ;?>/" title="<?php echo $modeloff['name'];?> Cam Boy">

                                    <div class="img__ctn off">
                                        
                                        <img src="<?php echo $modeloff['profile_image_full_proxy_url'];?>" alt="<?php echo $modeloff['name'];?>"/>
                                        
                                        <p><?php echo $modeloff['name'];?></p>

                                    </div>

                                </a>

                            </li>

                        <?php } ?>

                    </ul>

                    <section class="tags most__viewed" style="padding: 1em 0;">
                        <h2>Similar sex cam categories</h2>

                        <div class="l-listing-cat" style="padding: 1.25em 0;">
                                    <?php
                                        $args = array(
                                            'post_type' => 'camtags', 'posts_per_page' => -1,
                                            'post__not_in' => array( 559,556,477,476,473  )
                                        );
                                        $query = new WP_Query( $args );
                                    if ( $query->have_posts()) : ?> 
                                        <ul class="my-slider" style="list-style: none;
                                        justify-content: center;
                                        margin: 0px;
                                        padding: 0px;
                                        width: 100%;
                                        display: flex;
                                        flex-wrap: nowrap;
                                        transform: translate3d(-44.2308%, 0px, 0px);">
                                            <?php while ($query->have_posts() ) : $query->the_post(); ?>
                                                <li style="width:fit-content;">
                                                    <a style="    color: #1a284e;
                                                    padding: 5px 1em;
                                                    transition: all .3s ease;
                                                    text-transform: capitalize;
                                                    font-size: 14px;
                                                    border: 1px solid #213055;
                                                    border-radius: 15px;"
                                                        class="tracked" href="<?php the_permalink();?>" title="Live <?php the_title();?> Pornstars"><?php the_title();?></a>
                                                </li>
                                            <?php endwhile ;?>
                                        </ul>
                                    <?php endif ;?>
                        </div>
                    </section>
 
                    <h2>Live cams you could love too</h2>

                    <ul>

                        <?php

                        $models = $emptyTagModels["data"]["LivePerformers"]["Data"];
                        
                        foreach ($models as $key => $modelprofil) { ?>

                            <li>

                                <a data-layer='{"eventCategory":"tag","eventAction":"link","eventLabel":"<?php echo $modelprofil['name'];?>"}' class="tracked" href="<?php echo home_url();?>/male-cam/<?php echo strtolower($modelprofil['name']) ;?>/" title="<?php echo $modelprofil['name'];?> Cam Boy">

                                    <div class="img__ctn">
                                        <img src="<?php echo $modelprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $modelprofil['name'];?>"/>
                                        
                                        <p><?php echo $modelprofil['name'];?></p>

                                    </div>

                                </a>

                            </li>

                        <?php } ?>

                    </ul>

                <?php } ?>

            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post();
                   
                    if ($paged == 1){ ?>
                    
                        <article><?php the_content();?></article>

                    <?php } elseif ($paged >= 1) {
                        
                    } else { ?>
                        <article><?php the_content();?></article>
                    <?php }
                    
                endwhile;
        
            endif;?>
    
            </div>



        </section>


    </main>



<?php get_footer(); ?>