<?php get_header(); ?>

<main role="main">

    <div class="container">

       <?php   
        $term = get_queried_object(); 	
		if(get_field('title', $term)) : ?>
			<h1 class="u-line"><?php the_field('title',  $term); ?></h1>
		<?php else: ?>
			<h1 class="u-line"><?php the_title(); ?></h1>
		<?php endif ;?>

        <?php get_template_part('partials/mobile-select') ;?>

        <div class="tag-group">

            <div class="listing-articles">
       
            <?php if ( have_posts() ): ;?>  

            <ul class="cards-group">

                <?php while ( have_posts() ): the_post(); ?> 

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
				
			<div class="category-description">
				<?php echo category_description(); ?>
			</div>
         </div>

    <?php get_template_part('partials/aside-categories') ;?>

    </div>
</div>

</main>


<?php get_footer();?>