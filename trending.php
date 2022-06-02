<?php include 'partials/api-most-trending.php';?>
<?php $prefix = $arrmosttrending["data"]["LivePerformers"]["Data"];?>

    
<section class="most__viewed">

    <div class="related__profil">

        <h2>Top Live Gay Webcams</h2>

        <ul class="my-slider2">

            <?php

                foreach ($prefix as $key => $camgirlsprofil) { ?>

                    <li>

                        <a href="<?php echo home_url();?>/male-cam/<?php echo strtolower($camgirlsprofil['name']) ;?>" title="Model <?php echo $camgirlsprofil['name'];?>">

                            <div class="img__ctn">

                                <img src="<?php echo $camgirlsprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $camgirlsprofil['name'];?>"/>
                                
                                <p><?php echo $camgirlsprofil['name'];?></p>
                    
                            </div>

                        </a>

                    </li>

                <?php } ?>
        </ul>

        <div class="align-center cta-link">   
            <a href="<?php echo home_url();?>/male-cam/" class="btn main-color">Watch more Gay Porn videos</a>
        </div>

    </div>

</section>



