<?php get_header();?>

    <?php 
    global $post;
    $post_slug = $post->post_name;?>

    <main role="main">

        <section class="all__models bycategory">

            <div class="container related__profil">

                <h1><?php the_title();?></h1>

                <div class="listing__inner">

                    <div class="cat__intro__listing">
                    
                        <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;
                
                    endif;?>
                                    
                    </div>
             

                </div>

            </div>

        </section>

    </main>

</div>

<?php get_footer(); ?>