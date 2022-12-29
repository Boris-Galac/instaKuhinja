<section class="banner">
    <figure>
        <?php
            if(get_field('image-banner')){ ?>
        <img src="<?php echo get_field('image-banner')['sizes']['pageBanner']; ?>" alt="image banner"
            class="banner__img">
            <?php } else if(has_post_thumbnail()){
                ?> <img src="<?php the_post_thumbnail_url('pageBanner') ?>" alt="thumbnail image"> <?php
                }?>
        <h1 class="banner__heading"><?php the_title() ?></h1>
    </figure>
</section>