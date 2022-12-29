<?php get_header(); ?>

<!-- About Me -->
<main>
    <?php get_template_part('template-parts/content', 'banner'); ?>
    <div class="container">
        <h2 class="featured-articles__heading" data-name="instagram shots">Instagram shots</h2>
        <section class="container">
            <div class="featured-articles-container d-grid">
                <div class="content">
    
                    <?php the_content() ?>
    
                </div>
                <?php get_sidebar() ?>
            </div>
            
        </section>

    </div>
    <?php get_template_part('template-parts/content', 'newsletter') ?>              
</main>

<?php get_footer(); ?>