<div class="l-menu-select">
    <div class="l-menu-cat">
        <h3>Explore all Categories</h3>
        <?php $cats = get_categories(); ?>
        <form>
            <input class="chosen-value-cat" type="text" value="" placeholder="Select a Category">
                <ul class="value-list-cat">
                <?php if($cats) : ?>
                <?php 
                    foreach($cats as $cat) { ?>
                        <li><a href="<?php echo get_tag_link($cat->term_id) ;?>"title="<?php echo $cat->name ;?>"><?php echo $cat->name ;?></a></li>
                        <?php
                    }
                ;?>                 
                <?php endif ;?>
                </ul>
        </form>
    </div>
    <div class="l-menu-tag">
        <h3>Explore all Tags </h3>
        <?php $tags = get_tags();?>
            <form>
                <input class="chosen-value-tag" type="text" value="" placeholder="Select a Tag">
                <ul class="value-list-tag">
            <?php if($tags) : ?>
                    <?php 
                        foreach($tags as $tag) { ?>
                            <li><a href="<?php echo get_tag_link($tag->term_id) ;?>" title="<?php echo $tag->name ;?>"><?php echo $tag->name ;?></a></li>
                            <?php 
                        }
                    ;?>                 
                </ul>
            </form>
        <?php endif ;?>
    </div>
</div>