<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');


/*
 *   Register navigation menu starts here..
 */
add_action('init', 'register_theme_menus');
function register_theme_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'main-menu' => __('Main Menu'),
        )
    );
}

/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{
    register_sidebar(
        array(
            'name' => 'Home left sidebar',
            'id' => 'home_left_1',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="rounded">',
            'after_title' => '</h2>',
        )
    );
}
add_action('widgets_init', 'arphabet_widgets_init');

function my_add_excerpts_to_pages()
{
    add_post_type_support('page', 'excerpt');
}
add_action('init', 'my_add_excerpts_to_pages');
/**
 * Enqueue scripts and styles.
 */
function zywat_scripts()
{
    
    wp_enqueue_style('zywat-bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null, 'screen');
    wp_enqueue_style('zywat-googleapis', "https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap");
    wp_enqueue_style('zywat-animate.min', get_template_directory_uri() . '/css/animate.min.css', array(), null, 'screen');
    wp_enqueue_style('zywat-font-awesome.min', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null, 'screen');
  
    wp_enqueue_style('zywat-owl.carousel.min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), null, 'screen');
    wp_enqueue_style('zywat-swiper.min', get_template_directory_uri() . '/css/swiper.min.css', array(), null, 'screen');
    wp_enqueue_style('zywat-tab', get_template_directory_uri() . '/css/tab.css', array(), null, 'screen');
    wp_enqueue_style('zywat-aos', get_template_directory_uri() . '/css/aos.css', array(), null, 'screen');
    wp_enqueue_style('zywat-theme-style', get_template_directory_uri() . '/scss/theme-style.css', array(), null, 'screen');
    wp_enqueue_style('zywat-style', get_stylesheet_uri(), array(), null);
   


    wp_enqueue_script('zywat-jquery-3.6.1.min', get_template_directory_uri() . '/js/jquery-3.6.1.min.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-bootstrap.bundle.min', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-owl.carousel', get_template_directory_uri() . '/js/owl.carousel.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-smoothscroll.min', get_template_directory_uri() . '/js/smoothscroll.min.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-swiper.min', get_template_directory_uri() . '/js/swiper.min.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-aos', get_template_directory_uri() . '/js/aos.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-main-slider', get_template_directory_uri() . '/js/main-slider.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-jquery.magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.js', array('jquery'), null, true);
    wp_enqueue_script('zywat-theme-script', get_template_directory_uri() . '/js/theme-script.js', array('jquery'), null, true);


}
add_action('wp_enqueue_scripts', 'zywat_scripts');

/*uploading additional file types: upload_mimes filter */





 



