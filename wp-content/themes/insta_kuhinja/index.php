<?php
get_header();
?>

<main>
    <div class="banner">
        <img src="<?php echo get_theme_file_uri('./src/styles/images/banner-imgs/banner-blog.jpg'); ?>" alt="image banner"
            class="banner__img">
         <h1 class="banner__heading">Blogovi</h1>   
    </div>
    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset blog-section">
        <div class="featured-articles-container container">
            <h2 class="featured-articles__heading" data-name="blogovi">Svi blogovi</h2>
            <div class="featured-articles-container d-grid">
                <div class="featured-blog">
                    <?php
                if(have_posts()) :
                    while(have_posts()) :
                        the_post(); ?>
                <?php get_template_part('template-parts/content', 'blog') ?>
                
                <?php endwhile; wp_reset_query(); ?>
                <div class="pagination">            
                    <div class="pagination__wrapper">
                        <?php 
                            echo paginate_links();
                            ?>
                    </div>
                </div>
            </div>
            
            <?php endif; ?>
            
            
            <!-- sidebar -->
            
            <?php get_sidebar() ?>
            
            <!-- pagination -->
            
        </div>
        </div>
    </section>

    <?php get_template_part('template-parts/content', 'newsletter') ?>              

</main>

<?php

get_footer();

?>