<?php 

// loading sources files
function insta_files(){
    wp_enqueue_script('swiper-js', get_theme_file_uri('./src/js/swiper-bundle.min.js'), array(), false, true);
    wp_enqueue_style('icon-remix', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css');
    wp_enqueue_style('swiper_styles', get_theme_file_uri('/src/styles/css/utilities/swiper-bundle.min.css'));
    wp_enqueue_script('main-js', get_theme_file_uri('src/js/main.js'), array(), false, true);
    wp_enqueue_style('main_css', get_theme_file_uri('dist/style.css'));
}

add_action('wp_enqueue_scripts', 'insta_files');

//// for title browser tab on which site we are
function blog_features(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('pageBanner', 1300, 400, true);
    add_image_size('thumbnailPost', 300, 300, true);
}

add_action('after_setup_theme', 'blog_features');

// activate html5 support

add_theme_support( 'html', array(
    'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'
));

//// sidebar widget

function widget_areas_function(){
    register_sidebar(
        array(
            'before_title'=>'',
            'after_title'=>'',
            'before_widget'=>'',
            'after_widget'=>'',
            'name'=>'Sidebar Widget One',
            'id'=> 'widget-1',
            'description'=> 'Sidebar Widget Area'
        ),
        register_sidebar(
            array(
                'before_title'=>'',
                'after_title'=>'',
                'before_widget'=>'',
                'after_widget'=>'',
                'name'=>'newsletter',
                'id'=> 'widget-2',
                'description'=> 'Newsletter Widget Area'
            ),
        ),
        register_sidebar(
            array(
                'before_title'=>'',
                'after_title'=>'',
                'before_widget'=>'',
                'after_widget'=>'',
                'name'=>'Instagram Feed',
                'id'=> 'widget-3',
                'description'=> 'Instagram Feed Carousel'
            ),
        )
    );
}

add_action('widgets_init', 'widget_areas_function');

/// function for checking if is blog's page

function is_blog () {
    return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type();
}


function get_slug(){
    $curr_slug = basename($_SERVER['REQUEST_URI']);  
    echo $curr_slug;
}

add_filter('wpcf7_autop_or_not', '__return_false');


add_filter( 'ai1wm_exclude_themes_from_export',
function ( $exclude_filters ) {
  $exclude_filters[] = 'insta_kuhinja/node_modules';
  return $exclude_filters;
} );