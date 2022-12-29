<?php get_header(); ?>

<!-- About Me -->
<main>
    <?php get_template_part('template-parts/content', 'banner'); ?>
    <section class="container contact-container">
        <?php the_content() ?>
        <div class="personal-info">
            <div class="personal-info__avatar">
                <img src="<?php echo get_theme_file_uri('./src/styles/images/avatar.png') ?>" alt="Dragica">  
            </div>
            <h2 class="personal-info__author">Dragana Galac</h2>
            <p class="personal-info__text"><?php echo get_bloginfo('description') ?></p>
            <p class="personal-info__follow">Pratimo se na:</p>
            <div class="personal-info__socials">
                <div>
                    <div class="personal-info-social instagram">
                        <a target="_blank" href="https://www.instagram.com/insta_kuhinja/"><img src="<?php echo get_theme_file_uri('src/styles/images/facebook.svg')?>" alt="instagram" title="instagram"></a>  
                        <a class="link" href="https://www.instagram.com/insta_kuhinja/">https://www.instagram.com/insta_kuhinja/</a>      
                    </div>
                        <div class="personal-info-social facebook"><a href="https://www.facebook.com/instakuhinja" target="_blank"><img src="<?php echo get_theme_file_uri('src/styles/images/instagram.svg') ?>" alt="facebook" title="facebook"></a>
                        <a class="link" href="https://www.instagram.com/insta_kuhinja/">https://www.facebook.com/instakuhinja</a>   
                    </div>
                     <div class="personal-info-social gmail"><a href="mailto:dragana006@gmail.com"><img src="<?php echo get_theme_file_uri('src/styles/images/gmail.svg') ?>" alt="gmail" title="gmail"></a>
                     <a class="link" href="https://www.instagram.com/insta_kuhinja/">dragana006@gmail.com</a>   
                    </div>
                    </div>
                </div>
        </div>
    </section>
    <?php get_template_part('template-parts/content', 'newsletter') ?>              
</main>
<?php get_footer(); ?>