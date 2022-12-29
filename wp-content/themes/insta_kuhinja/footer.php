    <button class="scroll-to-top__wrapper">
        <i class="ri-arrow-up-s-line scroll-to-top"></i>
    </button>
    <!-- Footer -->
    <footer class="footer section">
        <div class="footer-container container">
            <div>
                <h2 class="title footer-title">Kategorije</h2>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/juhe')?>" class="list-link">Juhe</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/slana-jela')?>" class="list-link">Slana jela</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/slastice')?>" class="list-link">Slastice</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/smoothie')?>" class="list-link">Smoothie</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/snacks')?>" class="list-link">Snacks</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/category/tips-and-tricks')?>" class="list-link">Tips & Tricks</a>
                    </li>
                </ul>
            </div>
            <div>
                <h2 class="footer-title">Web linkovi</h2>
                <ul class="footer-list list">
                    <li class="list-item">
                        <a href="<?php echo site_url() ?>" class="list-link">Nasovna</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('/blog') ?>" class="list-link">Blog</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo get_post_type_archive_link('archive');?>" class="list-link">Arhiva</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('about') ?>" class="list-link">O Dragici</a>
                    </li>
                    <li class="list-item">
                        <a href="<?php echo site_url('contact') ?>" class="list-link">Kontakt</a>
                    </li>
                </ul>
            </div>
            <div>
                <a href="<?php echo site_url() ?>" class="logo-container">
                <img src="<?php echo get_theme_file_uri('./src/styles/images/logo/favicon.png') ?>"
                    alt="logo insta-kuhinja" class="logo-svg">
            </a>
                </a>
                <p class="company-description"><?php echo get_bloginfo( 'description' ); ?></p>
                <ul class="list social-media">
                    <li class="list-item">
                        <a title="instagram" target="_blank" href="https://www.instagram.com/insta_kuhinja/" class="list-link"><i class="ri-instagram-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a title="facebook" target="_blank" href="https://www.facebook.com/instakuhinja" class="list-link"><i class="ri-facebook-circle-line"></i></a>
                    </li>
                    <li class="list-item">
                        <a href="tel:+385919034490" class="list-link"><i class="ri-smartphone-fill"></i></i></a>
                    </li>
                    <li class="list-item">
                        <a href="#" class="list-link"><i class="ri-pinterest-line"></i></a>
                    </li>
                </ul>
                <span class="copyright-notice">&copy;<?php echo date('Y'); ?>
                    Insta_kuhinja. Web kreirao i uredio: <span class="creator-name">Boris Galac</span> .</span>
            </div>
        </div>
    </footer>
    <?php wp_footer() ?>
    </body>

    </html>