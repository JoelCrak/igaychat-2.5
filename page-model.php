<?php 

/* Template Name: model */ 

get_template_part( 'header-model' );
$model = get_query_var('male-cam');

if(!empty($model) ): 

    /* call live performers */    
    include 'partials/profil-page-liveperformers.php';

    $profilcam = $arrprofillive["data"]["LivePerformers"]["Data"][0];

    if(empty($profilcam)) {  

        /* call  performers */  
        include 'partials/profil-page-performers.php';

        $profilcam = $arrprofilperformers["data"]["Performers"]["Data"][0];   ($profilcam); }
		
		$status = "";

		if($profilcam['is_live'] == 1) {
			$status = "Live";
		} else {
			$status = "Offline";
	
	}
	?>

    <div class="container small">

            <div class="breadcrumb"><?php get_breadcrumb($nameModel, $slug ); ?></div>

            <div class="header__profil">
                
                <h1><?php echo $profilcam['name'] ;?></h1>

                <a href="https://jerkmate.com/cam/<?php echo strtolower($profilcam['name']) ;?>?aff_id=3&aff_sub=CRA_999528218_IGCH_TXT&source=TS33-999528218&aff_sub2=KW_<?php echo $profilcam['name'] ;?>;SZON_model;LOC_cta-top;RG_live&aff_sub3=Model_<?php echo $profilcam['name'] ;?>"  class="btn webcam"><?php get_template_part( 'partials/webcam' ); ?>start your webcam</a>          

            </div>

            <div class="feed_ctn">

                <div class="iframe_ctn">

                    <a href="https://jerkmate.com/cam/<?php echo strtolower($profilcam['name']) ;?>?aff_id=3&aff_sub=CRA_999528218_IGCH_TXT&source=TS33-999528218&aff_sub2=KW_<?php echo $profilcam['name'] ;?>;SZON_model;LOC_cta-player;RG_live&aff_sub3=Model_<?php echo $profilcam['name'] ;?>"style="position: absolute; top: 0; right: 0; bottom: 0; left: 0;"></a>

                    <?php if($profilcam['is_live'] == 1) { ?>
                        
                    <iframe src="<?php echo $profilcam['event_stream_url'] ;?>&volumelevel=0" scrolling="no" allow="autoplay" title=""></iframe>
                          
                    <?php }  else { ;?>
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/offline-camgirl.jpg" alt="Camgirl is actually offline" style="width: 100%; height: auto;"/>

                   <?php  } ?>
                
                </div>

            </div>
            
        </div>

    </div><!--profil header -->

     <main role="main ">

        <div class="container small">

            <div class="profil__ctn">

                <div class="description">

                    <h2>Description</h2>

                    <p><?php echo $profilcam['description'] ;?></p>

                    <h2>My expertise</h2>

                    <p><?php echo $profilcam['expertise'] ;?></p> 


                    <h2>What is turn me on</h2>

                    <p><?php echo $profilcam['turn_ons'] ;?></p>      

                </div>

                <div class="informations">

                    <ul>
                        <li><span>Age: </span><?php echo $profilcam['age'] ;?></li>
                        <li><span>Ethnicity: </span><?php echo $profilcam['ethnicity'] ;?></li>
                        <li><span>Language: </span><?php echo $profilcam['language'] ;?></li>
                        <li><span>Bust size: </span><?php echo $profilcam['bust_size'] ;?></li>
                        <li><span>Body type: </span><?php echo $profilcam['body_type'] ;?></li>
                        <li><span>Sexual pref: </span><?php echo $profilcam['sexual_preferences'] ;?></li>           
                    </ul> 

                    <a href="https://t.ajrkm.link/7oyq6a0sg?offer_id=6405&url_id=18292&aff_id=3&aff_sub=CRA_999528218_IGCH_TXT&source=TS33-999528218&aff_sub2=KW_<?php echo $status ;?>_BtnCreateAbove&aff_sub3=Model_<?php echo $profilcam['name'] ;?>" rel="nofollow" class="btn">Create your account</a>          
                </div>

            </div>


        <div class="related__profil">

            <?php
            $query = '
                query {
                    LivePerformers(
                    token: "'.get_token().'"
                    pager: { size: 10, page: 1 }
                    filters: [
                        {key: "system_source_name_clean", value:"streamate", condition:EQUAL},
                        { key: "gender", condition: EQUAL, value: "m" }        
                      ]
                    ) {
                    Data {
                        performer_uid
                        name
                        profile_image_full_proxy_url
                        is_live           
                    }
                }
            }';

            $relatedprofil = graphql_query('https://api.camshq.info', $query, $token);?>

            <?php $prefix = $relatedprofil["data"]["LivePerformers"]["Data"];?>

                <ul>

                <?php

                foreach ($prefix as $key => $camgirlsprofil) { ?>

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

        </div>

    </main>

    <?php else: ?>

    </div>

    <main role="main archive">

        <?php include 'partials/api-all-models-sitemap.php';?>

        <?php $allmodels = $allmodels["data"]["LivePerformers"]["Data"];?>

        <section class="all__models related__profil mp">

            <div class="container">
                
                <h1>The Best Explicit Gay Male Live Cams</h1>
                    
                <ul>

            <?php foreach ($allmodels as $key => $camgirlsprofil) { ?>

                        <li>

                            <a href="<?php echo home_url();?>/male-cam/<?php echo strtolower($camgirlsprofil['name']) ;?>" title="Model <?php echo $camgirlsprofil['name'];?>">
                              

                                <div class="img__ctn">

                                    <img src="<?php echo $camgirlsprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $camgirlsprofil['name'];?>"/>
                                    
                                    <h2><?php echo $camgirlsprofil['name'];?></h2>

                                </div>

                            </a>

                        </li>                        

                <?php } ?>

                </ul>

            <!--page content-->

            <section class="all__models bycategory">

                <div class="container related__profil">

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
            <!--page content end-->

            </div>

        </section>

    </main>

</div>

<?php endif;?>

<?php get_footer(); ?>