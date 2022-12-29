<?php
get_header();
?>

<main>
    <?php get_template_part('template-parts/content', 'banner') ?>
    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset blog-section">
        <div class="featured-articles-container container">
            <h2 class="featured-articles__heading"><?php the_category() ?></h2>
            <div class="featured-articles-container d-grid">
                <div class="featured-blog">
                    <?php get_template_part('template-parts/content', 'article') ?>
                </div>
                <!-- sidebar -->
            </div>
            <?php get_sidebar() ?>
            </div>          
        </div>
        </div>
    </section>

    <?php get_template_part('template-parts/content', 'newsletter') ?>              

</main>

<?php

get_footer();

?>

