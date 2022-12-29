<aside class="sidebar d-grid">
    <?php get_search_form() ?>
    <div class="row">
        <h3 class="title featured-content-title">Kategorije</h3>
        <?php dynamic_sidebar('widget-1'); ?>
    </div>
    <div class="sidebar__archive row">
    <h3 class="title featured-content-title">Arhiva</h3>
    <ul>
    <?php  wp_get_archives(array(
        'type'=>'monthly',
        'show_post_count'=>true,
        'format'=>'html',
    )); ?>
    </ul>
    </div>
    <div class="row">
        <h3 class="title featured-content-title">Nedavni blogovi</h3>
        <ul class="recent-post-list d-grid">
        <?php
            $args = array(
                'post_type'=>'post',
                'posts_per_page'=>3
            );
            $the_query = new WP_Query($args);
            if($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="recent-post-item">          
                    <article class="recent-post">
                    <div class="recent-post__header">
                        <div class="recent-post__thumbnail">
                            <a href="<?php the_permalink() ?>">
                            <img src="
                            <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail_url();
                            }else{
                                echo get_theme_file_uri('src/styles/images/default-blog-img.png');
                            }
                            ?>
                            " alt="post image">
                            </a>
                        </div>
                    </div>
                    <div class="recent-post__body">
                        <h3><?php the_title() ?></h3>
                        <div class="recent-post__meta">
                            <div class="recent-post__category">
                                <?php echo get_the_category_list(', ');?>
                            </div>
                            <div class="recent-post__comments">
                                <a href="<?php the_permalink() ?>"><?php comments_number() ?></a>
                            </div>
                        </div>
                        <p class="recent-post__text"><?php echo wp_trim_words(get_the_content(), 9) ?><a class="link--continure-reading" href="<?php the_permalink() ?>">Vidi Više</a></p>
                    </div>
                </article>
              </li>
              <?php 
            endwhile; ?>
                </ul>
            <?php endif;
        ?>
        <a href="<?php echo site_url('/blog') ?>" class="view-all-btn">Ostali blogovi</a>
    </div>
</aside>