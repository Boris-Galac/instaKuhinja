<?php get_header(); ?>

<!-- About Me -->
<main>
    <?php get_template_part('template-parts/content', 'banner'); ?>
    <div class="container">
        <section class="container">
            <div class="featured-articles-container d-grid">
                <div class="content" style="position: relative; height: 50vh;">
                    <h1 class="error__heading" data-name="error 404">Error 404</h1>
                </div>
                <?php get_sidebar() ?>
            </div>   
        </section>
    </div>
    <?php get_template_part('template-parts/content', 'newsletter') ?>              
</main>

<?php get_footer(); ?>