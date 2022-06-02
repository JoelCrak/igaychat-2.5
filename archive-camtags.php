<?php 

/* Template Name: Archive Tags */ 

get_header();

    $page_id = 2096;  //Page LH ID 1814
    $page_data = get_page($page_id); 
    $title = $page_data->post_title; 
    $content = $page_data->post_content;?>

    <main role="main">

        <div class="container">

            <h1><?php echo $title; ?></h1>

            <div class="list-tags">
                <h2>Chat with men uncensored gay chat rooms</h2>
                <?php
                    $args = array(
                        'post_type' => 'camtags', 'posts_per_page' => -1, 'order'  => 'ASC', 'orderby' => 'rand'
                    );
                    $query = new WP_Query( $args );
                if ( $query->have_posts()) : ?> 
                    <ul>
                        <?php while ($query->have_posts() ) : $query->the_post(); ?>
                           
                            <li>
                                <a data-layer='{"eventCategory":"archive_tags","eventAction":"link","eventLabel":"Tag-<?php the_title();?>"}' class="tracked" href="<?php the_permalink();?>" title="<?php the_title();?> Webcam Models">
                                    <h3><?php the_title();?></h3>
                                    <p><?php the_field('title_camtag');?></p>
                                </a>
                            </li>

                        <?php endwhile ;?>
                    </ul>
                <?php endif ;?>
            </div>

            <?php  echo $content;  ?>

        </div>

    </main>


