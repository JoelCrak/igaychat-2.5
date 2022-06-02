<?php include 'partials/api-call-top.php';?>
<?php $prefix = $arrtopthree["data"]["Performers"]["Data"];?>

<section>
    <div class="container">
        <h2 class="align-center">Watch the TOP 3 Male Cams Show</h2>
        <ul>

    <?php

        foreach ($prefix as $key => $camgirlsprofil) { ?>

            <li>

                <a href="<?php echo home_url();?>/male-cam/<?php echo strtolower($camgirlsprofil['name']) ;?>" title="Model <?php echo $camgirlsprofil['name'];?>">

                    <div class="img__ctn">

                        <img src="<?php echo $camgirlsprofil['profile_image_full_proxy_url'];?>" alt="<?php echo $camgirlsprofil['name'];?>"/>
                        
                        <h2><?php echo $camgirlsprofil['name'];?></h2>


                        <div class="img__info">
                            <p><?php echo $camgirlsprofil['tags'];?></p>
                        </div>

                    </div>

                </a>

            </li>

        <?php } ?>
    </ul>
    </div>
</section>