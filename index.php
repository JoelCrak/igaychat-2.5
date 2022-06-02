<?php get_header();?>

    <div class="container">


    <h1>Gay Porn Blog</h1>

    <?php get_template_part('partials/mobile-select') ;?>

    <div class="blog-group">

    <div class="listing-articles">
        <?php 

            $args = array( 'posts_per_page' => 12, 'orderby' => 'date', 'paged' => $paged );

            $the_query = new WP_Query( $args );
            
            if ( $the_query->have_posts() ) : ?>

            <ul class="cards-group">

                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li class="cards-ctn">

                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">

                        <figure>
                            <?php the_post_thumbnail('large'); ?>
                        </figure>
                        
                        <div class="card-content">

                            <h3><?php the_title();?></h3>

                            <p><?php echo  wp_trim_words( get_the_content(), 20 );?></p>

                        </div>

                    </a>

                </li>

                <?php endwhile ;?>
            </ul>

            <?php endif; ?>

            <div class="pagination">
                    <?php igc_wp_pagination(); ?>
            </div>
        </div>

        <?php get_template_part('partials/aside-categories') ;?>

        </div>

    </div>


<?php get_footer();?>