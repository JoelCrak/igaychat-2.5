<?php include 'partials/api-most-category.php';?>

<?php $prefix = $arrmostviewed["data"]["LivePerformers"]["Data"];?>
    
<section class="most__viewed">

    <div class="related__profil">

        <h2>Live Sex Chat with Latino Male</h2>

        <ul class="my-slider">

            <?php

                foreach ($prefix as $key => $camgirlsprofil) { ?>

                    <li>

                        <a href="<?php echo home_url();?>/male-cam/<?php echo strtolower($camgirlsprofil['name']) ;?>" title="Watch the <?php echo $camgirlsprofil['name'];?>'s gay cam show'">

                            <div class="img__ctn">

                                <img src="<?php echo $camgirlsprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $camgirlsprofil['name'];?>"/>
                                
                                <p><?php echo $camgirlsprofil['name'];?></p>

                            </div>

                        </a>

                    </li>

                <?php } ?>
        </ul>

    </div>

</section>
