<?php get_header(); ?>

<?php if ( have_posts() ): ;?>  

    <?php while ( have_posts() ): the_post(); 


    global $post;
    $slug = $post->post_name; ?> 

<main role="main">
    <div class="container small">
    
        <div class="left-side">
            <div class="entry-ctn">
                <div class="entry">      
                <?php  
                $cats = get_the_category(); 

                if($cats) : ?>
                        <div class="l-category">
                            <?php 
                                foreach($cats as $cat) { ?>
                                    <a href="<?php echo get_tag_link($cat->term_id) ;?>" class="g-category" title="<?php echo $cat->name ;?>"><?php echo $cat->name ;?></a>
                                   <?php 
                                }
                            ;?>                 
                        </div>
                    <?php endif ;?>
                    <h1 class="u-line"><?php the_title()?></h1>
                    <?php 
                        $tags = get_the_tags(); 
                        if($tags) : ?>
                        <div class="l-tags">
                            <?php 
                                foreach($tags as $tag) { ?>
                                    <a href="<?php echo get_tag_link($tag->term_id) ;?>" class="g-tag" title="<?php echo $tag->name ;?>"><?php echo $tag->name ;?></a>
                                   <?php 
                                }
                            ;?>                                          
                        </div>
                    <?php endif ;?>
                </div>

                <div class="part-top">

                    <figure>
                        <?php the_post_thumbnail('large') ;?>
                    </figure>

                <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->

                </div>

        </div>

            <div class="cta-ctn">

            <?php 

                $cta = get_field('cta');
                $title = $cta['headline'];

                if($title) { ?>

                    <div class="cta-zone">

                        <h3><?php echo $cta['headline'];?></h3>

                        <a href="<?php echo $cta['tracking'];?>" class="btn"><?php echo $cta['button_name'];?></a>
                    </div>

                <?php } ;?>

                </div>


                <article role="article">
                    
                    <div class="article-content">
                        <?php the_content();?>

                    </div>
                    
                </article>
        

                <?php 

                $cta = get_field('cta');
                $title = $cta['headline'];

                if($title) { ?>

                    <div class="cta-zone">

                        <h3><?php echo $cta['headline'];?></h3>

                        <a href="<?php echo $cta['tracking'];?>" class="btn"><?php echo $cta['button_name'];?></a>
                    </div>

                <?php } ;?>

            </div>

            <div class="related-post">

            <?php

                $args = array( 'posts_per_page' => 3, 'orderby' => 'rand', 'post__not_in'=>array($post->ID) );

                $the_query = new WP_Query( $args );
            
                if ( $the_query->have_posts() ) : ?>

                <div class="listing-articles">

                    <h2 class="u-line">Related Posts</h2>

                    <ul class="cards-group">

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <li class="cards-ctn">

                            <a href="<?php the_permalink();?>" title="<?php the_title();?>">

                                <figure>
                                    <?php the_post_thumbnail('medium'); ?>
                                </figure>
                                
                                <div class="card-content">

                                    <h3><?php the_title();?></h3>

                                    <p><?php echo  wp_trim_words( get_the_content(), 30 );?></p>

                                </div>

                            </a>

                        </li>

                        <?php endwhile ;?>
                    </ul>

                </div>

                    <?php endif; ?>
                    
                </div>
                
            </div>
            
    </div>

    
              
</main>

<?php endwhile ;?>

<?php endif; ?>

<?php get_footer(); ?>