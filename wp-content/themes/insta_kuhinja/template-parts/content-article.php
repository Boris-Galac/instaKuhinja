<div class="blog-post-container container">
    <div class="blog-post-data">
        <div class="article-data">
            <div>
                <span class="article-data-tag">
                    <? the_time('F j, Y') ?>
                </span>
                <span class="article-data-spacer"></span>
                <span class="article-data-tag"><?php the_category() ?></span>
    
                <?php
                if(has_tag() && is_singular()){
                    echo get_the_tag_list(
                        '<div class="tags-wrapper">#<span class="tag">',
                        '</span>#<span class="tag">',
                        '</span></div>',
                        get_queried_object_id())
                    ?>
                <?php
            }  ?>
            </div>
            <div>
                <a class="link--continure-reading" href="<?php the_permalink()?>"><?php comments_number() ?></a>
            </div>
        </div>
        
        <?php the_content() ?>
    </div>
    <?php comments_template() ?>

</div>
