<aside class="l-sidebar">
    <div class="l-sidebar-nav">
        <div class="l-side-categories">
        <?php $args = array('taxonomy' => 'category-blog' );?>
            <h3>Explore all Categories </h3>
            <?php $cats = get_categories();
            if($cats) : ?>
                <div class="l-categories">
                    <?php 
                        foreach($cats as $cat) { ?>
                            <a href="<?php echo get_tag_link($cat->term_id) ;?>" class="g-tag" title="<?php echo $cat->name ;?>"><?php echo $cat->name ;?></a>
                            <?php 
                        }
                    ;?>                 
                </div>
        <?php endif ;?>
        </div>
        <div class="l-side-tags">
            <h3>Explore all Tags </h3>
            <?php $args = array('taxonomy' => 'tag-blog' );
                $tags = get_tags();
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
     </div>
</aside>