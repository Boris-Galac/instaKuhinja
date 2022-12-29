<?php get_header(); ?>
<main>
    <!-- slider banner -->
    <?php echo get_template_part('template-parts/content', 'slider-banner') ?>

    <!-- Categories -->
    <section class="category-tags section">
        <div class="container">
            <h2 class="title section-title" data-name="kategorije">Kategorije</h2>
            
            <div class="category-tags-container d-grid">
                <a href="<?php echo site_url('category/slastice'); ?>" class="article">
                    <span class="tag-name">#Slastice</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/slastice.jpg') ?>" alt="sweeties"
                        class="article-image">
                </a>
                <a href="<?php echo site_url('category/juhe'); ?>" class="article">
                    <span class="tag-name">#Juhe</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/juhe.jpg') ?>" alt="soups"
                        class="article-image">
                </a>
                <a href="<?php echo site_url('category/tjestenine'); ?>" class="article">
                    <span class="tag-name">#Tjestenine</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/tjestenine.jpg') ?>" alt="pasta"
                        class="article-image">
                </a>
                <a href="<?php echo site_url('category/slana-jela'); ?>" class="article">
                    <span class="tag-name">#Slana jela</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/slana-jela.jpg') ?>" alt="salty"
                        class="article-image">
                </a>
                <a href="<?php echo site_url('category/smoothie'); ?>" class="article">
                    <span class="tag-name">#Smoothie</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/smoothie.jpg') ?>" alt="smoothie"
                        class="article-image">
                </a>
                <a href="<?php echo site_url('category/tips-and-tricks'); ?>" class="article">
                    <span class="tag-name">#Tips & Tricks</span>
                    <img src="<?php echo get_theme_file_uri('./src/styles/images/category/tips.jpg') ?>"
                        alt="tips and tricks" class="article-image">
                </a>
            </div>
        </div>
    </section>

    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset">
        <div class="container">
            <h2 class="title section-title" data-name="blogovi">Najnoviji blogovi</h2>
            <!-- main showcase blogs -->
            <div class="blog-feed d-grid">
                <div class="inner-blog-wrapper">
                    <!-- wp query loop -->
                    <?php
                    $the_query = new WP_Query(array(
                        'post_type'=>'post',
                        'posts_per_page'=> 4
                    ));
                    if($the_query->have_posts()){
                     while($the_query->have_posts()){
                        $the_query->the_post(); ?>
                            <?php get_template_part('template-parts/content', 'blog') ?>
                    <?php   } wp_reset_postdata(); 
                }?>
                <a class="rest-posts-btn" href="<?php echo site_url('blog') ?>">Ostali blogovi...</a>
                </div>
            
            <!-- sidebar -->
            <?php get_sidebar() ?>
        </div>
        </div>
    </section>

    <!-- instagram feed carousel -->
                <section class="instagram-feed">
                    <div class="container">
                        <h2 class="title section-title" data-name="instagram feed">Instagram feed</h2>
                        <?php dynamic_sidebar('widget-3'); ?>
                    </div>
                </section>

    <!-- Older posts -->
    <section class="older-posts section">
        <div class="container">
            <h2 class="title section-title" data-name="stariji blogovi">Stariji blogovi</h2>
            <div class="older-posts-grid-wrapper d-grid">
                <?php 
                    $oldPost = new WP_query(array(
                    'posts_per_page'=> 4,
                    'post_type'=>'post',
                    'supports'=> 'thumbnail',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'date_query' => array(
                           array(
                           'before' => '7 days ago',
                             )
                          )
                      
                ));

                    while($oldPost->have_posts()){
                        $oldPost->the_post() ?>


                <div class="article d-grid">
                    <a href="<?php the_permalink() ?>" class="older-posts-article-image-wrapper">
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
                    <div class="article-data-container">
                        <div class="article-data">
                            <span><?php the_time('F j, Y') ?></span>
                            <span class="article-data-spacer"></span>
                            <span>3 Min read</span>
                        </div>
                        <h3 class="title article-title"><?php the_title() ?></h3>
                        <p class="article-description"><?php echo wp_trim_words(get_the_content(), 18); ?>
                            <a class="link--continure-reading" href="<?php the_permalink(); ?>">Continue reading
                                &raquo;</a>
                        </p>
                    </div>
                </div>
                <?php
                    } wp_reset_postdata()
                 ?>

            </div>
            <div class="see-more-container">
                <a href="<?php echo site_url('blog') ?>" class="btn see-more-btn place-items-center">Vidi više<i
                        class="ri-arrow-right-s-line"></i></i></a>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/content', 'newsletter') ?>              
</main>

<?php get_footer() ?>