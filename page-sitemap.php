
<?php

/* Template Name: sitemap */

get_header(); ?>

<?php get_template_part('trending'); ?>

<div id="primary" class="sitemap-content">
  <div id="content" role="main">

  

&emsp;

    <div class="rowsite">
        <div class="columnsite">
        <div class="colcenter">
                <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', 'page' ); ?>

                <!--Pages-->     
                <h2 id="sitemap-pages">Pages</h2>
                    <ul>
                        <?php 
                            wp_list_pages( array( 
                                    'exclude' => '1387',
                                    'title_li' => '',
                                )
                            );
                        ?>
                    </ul>

                <!--Tags-->        
                <h2 id="sitemap-posts-tags">Gay cam categories</h2>
                    <?php
                        $tags = get_tags(array( 
                        // 'exclude' => '',
                            )
                        );
                    if ($tags) { ?>
                        <ul>
                            <?php foreach ($tags as $tag) { ?>
                                <li class="tag-id-<?php echo $tag->term_id ?>"><a href="<?php echo get_tag_link( $tag->term_id );?>"><?php echo $tag->name ?></a></li>
                            <?php } ?>
                        </ul>
                    <? } ?>        

                <!--Categories--> 
                <h2 id="sitemap-posts-categories">Categories</h2>
                    <ul>
                        <?php wp_list_categories( array(
                            'title_li' => '',
                            'show_count' => false,
                        //  'exclude'    => array(),
                        ) ); ?> 
                    </ul>
            </div>        
        </div>

            <div class="columnsite">
                    <!--blog--> 
                <div class="colcenter">    
                    <h2 id="sitemap-posts">Gay sex blog</h2>
                        <ul>
                            <?php 
                                $postsArgs = array(
                                    'post_type' => 'post',
                                    'posts_per_page'=>'-1',
                                    // 'post__not_in' => array(), 
                                );
                                $postsLoop = new WP_Query( $postsArgs );
                                while ( $postsLoop->have_posts() ) {
                                $postsLoop->the_post();
                                ?>
                                    <li <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php } wp_reset_query(); ?>
                        </ul>

                    <!--Our Work--> 
                    <h2 id="sitemap-our-work"></h2>
                        <ul>
                            <?php 
                                $postsArgs = array(
                                    'post_type' => 'our-work',
                                    'posts_per_page'=>'-1',
                                    //'post__not_in' => array(), 
                                );
                                $postsLoop = new WP_Query( $postsArgs );
                                while ( $postsLoop->have_posts() ) {
                                    $postsLoop->the_post();
                            ?>
                                <li <?php post_class(); ?>><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                            <?php } wp_reset_query(); ?>
                        </ul>        
                    
                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>

    </div>    

  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>