<?php
get_header();
?>

<main>
  <section class="banner">
    <img src="<?php echo get_theme_file_uri('./src/styles/images/search.jpg'); ?>" alt="image banner"
        class="banner__img">
    <h1 class="banner__heading">Pretraži</h1>
  </section>

    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset">
        <div class="container">
            <h2 class="title section-title" data-name="Search Results">Rezultati pretraživanja</h2>
            <!-- main showcase blogs -->
            <div class="blog-feed d-grid">
                <div class="inner-blog-wrapper">
                    <!-- wp query loop -->
                    <?php
                    if(have_posts()){
                     while(have_posts()){
                        the_post(); ?>
                            <?php get_template_part('template-parts/content', 'blog') ?>
                    <?php   } wp_reset_postdata(); 
                } else { ?>
                    <h2 class="no-results">no results found...</h2>
              <?php } ?> 
                </div>
            
            <!-- sidebar -->
            <?php get_sidebar() ?>
        </div>
        </div>
    </section>

    <?php get_template_part('template-parts/content', 'newsletter') ?>              

</main>

<?php

get_footer();

?>