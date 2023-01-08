<!DOCTYPE html>
<html <?php language_attributes();  ?>>

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KTLS9W8');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <meta name="description" content="Ovo je moj website/blog na kojem možete, nadam se, zadovoljiti svoje gurmanske odnosno kulinarske afinitete.">
    <meta name="google-site-verification" content="3DKrsbCUcm8dm9sLYAJMZ4tNRso7aVi2clbVBoalNGM" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KTLS9W8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header class="header" id="header">
        <nav class="navbar container">
            <a href="<?php echo site_url() ?>" class="logo-container">
                <img src="<?php echo get_theme_file_uri('./src/styles/images/logo/favicon.png') ?>"
                    alt="logo insta-kuhinja" class="logo-svg">
            </a>
            <div class="menu" id="menu">
                <ul class="list">
                    <li class="list-item">
                        <a href="<?php echo site_url() ?>" class="list-link <?php if(is_front_page()) echo 'current';  ?>">Naslovna</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/blog') ?>" class="list-link  <?php if(is_blog()) echo 'current';  ?>">Blogovi</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/instagram') ?>" class="list-link  <?php if(is_page('instagram')) echo 'current';  ?>">Instagram</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('contact') ?>" class="list-link  <?php if(is_home()) echo 'curent';  ?>">Kontakt</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('about') ?>" class="list-link  <?php if(is_page('about')) echo 'current';  ?>">O meni</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="#" class="list-link">Sign in</a>
                    </li>
                    <li class="list-item screen-lg-hidden">
                        <a href="#" class="list-link">Sign up</a>
                    </li>
                </ul>
            </div>
            <div class="list list-right">
                <button class="btn place-items-center" id="theme-toggle-btn">
                    <i class="ri-sun-line sun-icon"></i>
                    <i class="ri-moon-line moon-icon"></i>
                </button>
                <button class="btn place-items-center" id="search-icon">
                    <i class="ri-search-line"></i>
                </button>
                <button class="btn place-items-center screen-lg-hidden menu-toggle-icon" id="menu-toggle-icon">
                    <i class="ri-menu-3-line open-menu-icon"></i>
                    <i class="ri-close-line close-menu-icon"></i>
                </button>
                <a href="#" class="list-link screen-sm-hidden">Sign iinn</a>
                <a href="#" class="btn sign-up-btn fancy-border screen-sm-hidden">
                    <span>Sign up</span>
                </a>
            </div>
        </nav>
    </header>
    <!-- socials -->

    <div class="socials">
        <div class="socials__wrapper">
            <div class="instagram">
             <a target="_blank" href="https://www.instagram.com/insta_kuhinja/"><img src="<?php echo get_theme_file_uri('src/styles/images/facebook.svg')?>" alt="instagram"></a>        
            </div>
            <div class="facebook"><a href="https://www.facebook.com/instakuhinja" target="_blank"><img src="<?php echo get_theme_file_uri('src/styles/images/instagram.svg') ?>" alt="facebook"></a></div>
            <div class="gmail"><a href="mailto:dragana006@gmail.com"><img src="<?php echo get_theme_file_uri('src/styles/images/gmail.svg') ?>" alt="gmail"></a></div>
        </div>
    </div>
    <!-- Search -->
    <div class="search-form-container container" id="search-form-container">
        <div class="form-container-inner">
            <?php get_search_form() ?>
            <span class="form-note">Pritisni ESC za izlaz.</span>
        </div>
        <button class="btn form-close-btn place-items-center" id="form-close-btn">
            <i class="ri-close-line"></i>
        </button>
    </div>