<?php 

add_action( 'wp_enqueue_scripts', 'bnb_styles' );
add_action( 'wp_footer', 'bnb_footer' );
add_action('wp_enqueue_scripts', 'jquery_init');

function jquery_init() {
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}


function bnb_styles() {
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.min.css' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
	wp_enqueue_style( 'adaptive', get_template_directory_uri() . '/css/adaptive.css' );
	wp_enqueue_style( 'style', get_stylesheet_uri());
}

function bnb_footer() {
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), null, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.js', array('jquery'), null, true);
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
}


add_action('after_setup_theme', 'theme_register_nav_menu');

function theme_register_nav_menu() {
	register_nav_menu('header_top', 'Header top');
	register_nav_menu('header_middle', 'Header middle');
	register_nav_menu('header_bottom', 'Header bottom');
	register_nav_menu('footer_1', 'Footer 1');
	register_nav_menu('footer_2', 'Footer 2');
}



add_theme_support('custom-logo');

add_image_size( 'material-img', 9999, 350, false );

	
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
	add_theme_support( 'woocommerce' );
}


add_filter( 'excerpt_length', function(){
	return 70;
} );
add_filter('excerpt_more', function($more) {
	return '...';
});


/*woocomerce*/

add_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_desc', 15 );
	
function woocommerce_template_loop_desc() {
	the_excerpt();
}

/*remove_action ('woocommerce_product_tabs', 'woocommerce_default_product_tabs', 10 );*/
/*remove_action ('woocommerce_product_tabs', 'woocommerce_sort_product_tabs', 99 );*/
remove_action ('woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
remove_action ('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10 );
