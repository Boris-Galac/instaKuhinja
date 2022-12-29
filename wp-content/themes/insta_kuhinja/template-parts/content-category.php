 <!-- Featured articles -->
    <!-- Featured articles -->
    <section class="featured-articles section section-header-offset">
        <div class="container">
            <h2 class="featured-articles__heading" data-name="Blog articles">Blog articles</h2>
            <!-- main showcase blogs -->
            <div class="featured-articles-container d-grid">
            <div class="featured-content d-grid">
                <?php
$args = array(
    'post_type' => 'category',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            // 'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'your-cat-slug'
        )
     )
);
$query = new WP_Query($args);
                if($query->have_posts()){
                 while($query->have_posts()){
                    $query->the_post(); ?>
                        <?php get_template_part('template-parts/content', 'blog') ?>
                <?php   } wp_reset_postdata(); 
            }?>
            </div>

            <!-- sidebar -->
            <?php get_sidebar() ?>
           </div>
        </div>
    </section>

<!-- Newsletter -->
<section class="newsletter section">
     <div class="container">
         <h2 class="title section-title" data-name="Newsletter">Newsletter</h2>
         <div class="form-container-inner">
             <h6 class="title newsletter-title">Subscribe to Blog</h6>
             <p class="newsletter-description">Lorem ipsum dolor sit amet consectetur adipisicing quaerat
                 dignissimos.</p>
             <form class="form">
                 <input class="form-input" type="text" placeholder="Enter your email address">
                 <button class="btn form-btn" type="submit">
                     <i class="ri-mail-send-line"></i>
                 </button>
             </form>
         </div>
     </div>
 </section>