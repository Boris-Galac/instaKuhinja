<?php get_header() ?>

<main>
  <section class="banner">
      <img src="/wp-content\themes\insta_kuhinja\src\styles\images\archive.jpg" alt="banner image">
      <h1 class="banner__heading"><?php echo substr(get_the_archive_title(), strpos(get_the_archive_title(), ': ')+ 2); ?></h1>
  </section>
    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset archive-section">
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
            </div>
            
            <?php endif;   ?>
            
            
            <!-- sidebar -->
            
            <?php get_sidebar() ?>
            
            <!-- pagination -->
            
            <div class="pagination">            
                <div class="pagination__wrapper">
                    <?php 
                        echo paginate_links();
                        ?>
                </div>
            </div>
        </div>
        </div>
    </section>

    <?php get_template_part('template-parts/content', 'newsletter') ?>              

</main>

<?php get_footer() ?>