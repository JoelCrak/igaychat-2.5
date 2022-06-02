<?php /* Template Name: category */ get_header();?>

    <?php 
    global $post;
    $post_slug = $post->post_name;?>

    <main role="main">

        <?php include 'partials/api-category.php';?>

        <?php $arrcategorybyprofil = $arrcategorybyprofil["data"]["LivePerformers"]["Data"];?>

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
                    
                <ul>

            <?php

                foreach ($arrcategorybyprofil as $key => $camgirlsprofil) { ?>

                    <li>

                        <a href="<?php echo home_url();?>/male-cam/<?php echo strtolower($camgirlsprofil['name']) ;?>" title="Model <?php $camgirlsprofil['name'] ;?>">

                            <div class="img__ctn">

                                <span class="live__green"></span>

                                <img src="<?php echo $camgirlsprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $camgirlsprofil['name'];?>"/>
                                
                                <h2><?php echo $camgirlsprofil['name'];?></h2>

                            </div>

                        </a>

                    </li>

                <?php } ?>

                </ul>

                </div>

            </div>

        </section>

    </main>

</div>

<?php get_footer(); ?>