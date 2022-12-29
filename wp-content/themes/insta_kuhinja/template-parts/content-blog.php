<div class="article featured-article featured-article-1">
                <a href="<?php the_permalink(); ?>">
                    <figure class="blogpost__thumbnail">
                    <?php if(has_post_thumbnail()){ ?>
                        <img src="<?php the_post_thumbnail_url();  ?>" alt="jelo">
                        <?php } else { 
                            ?>
                            <img src="<?php echo get_theme_file_uri('src/styles/images/default-blog-img.png') ?>" alt="default image">
                       <?php } ?>
                       </figure>
                    </a>
                    <span class="article-category"><?php echo get_the_category_list(', ') ?></span>
                    <div class="article-data-container">
                        <div class="article-data">
                            <span><?php the_time('F j, Y') ?></span>
                            <a class="link--continure-reading" href="<?php the_permalink()?>"><?php comments_number() ?></a>
                        </div>
                        <h3 class="title article-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                        <p class="article-text"><?php echo wp_strip_all_tags( get_the_content() ); ?></p>
                        <a class="link--continure-reading" href="<?php the_permalink() ?>">Vidi više...</a>
                    </div>
</div>