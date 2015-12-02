<?php

function theme_styles() {

	wp_enqueue_style('bootsrap_css', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('main_css', get_template_directory_uri() . '/style.css');
	wp_enqueue_style('custom_css', get_template_directory_uri() . '/css/custom.css');
	wp_enqueue_style('woo_css', get_template_directory_uri() . '/css/woo.css');
	wp_enqueue_style('source_sans_pro_font_css', 'https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,900,300,200');
	wp_enqueue_style('lato_font_css', 'https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900');
}
add_action('wp_enqueue_scripts', 'theme_styles');

function theme_js() {

	global $wp_scripts;

	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js', '', '', false);
	wp_register_script('html5_shiv', 'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false);

	$wp_scripts->add_data('html5_shiv', 'conditional', 'lt IE 9');
	$wp_scripts->add_data('respond_js', 'conditional', 'lt IE 9');


	wp_enqueue_script('bootstrap_js',get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true);
	wp_enqueue_script('theme_js',get_template_directory_uri() . '/js/app.js', array('jquery', 'bootstrap_js'), '', true);
}

add_action('wp_enqueue_scripts', 'theme_js');

add_theme_support( 'menus' );

function register_theme_menus() {

	register_nav_menus (
		array(
			'header-menu'  => __( 'Header Menu'),
			'shop-menu' => __('Shop Menu'),
			)
		);
}

add_action( 'init', 'register_theme_menus');



function create_widget ($name, $id, $description) {

	register_sidebar(array(
		'name' => __( $name ),
		'id' => $id,
		'description' => __( $description ),
		'before_widget' => '<div  class="widget">',
		'after_widget' => '</div',
		'before_title' => '<h3>',
		'after_tile' => '</h3>'

		));
}


create_widget('Page Sidebar', 'blog', 'Display on the side of the pages with a sidebar' );


add_theme_support( 'post-thumbnails' ); 

// woocommerces fuctions

remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

add_action( 'after_setup_theme', 'woocommerce_support' );

function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action('sc_footer', 'sc_footer_cart_link');

function sc_footer_cart_link() {
	
	global $woocommerce;

	if ( (sizeof( $woocommerce->cart->cart_contents) > 0) && ( !is_cart() && !is_checkout() ) ) :
		echo '<a class="btn alt" href="' . $woocommerce->cart->get_cart_url() . '" title="' . __( 'Checkout' ) . '">' . __( 'Cart' ) . '</a>';
		echo '<a class="btn" href="' . $woocommerce->cart->get_checkout_url() . '" title="' . __( 'Checkout' ) . '">' . __( 'Checkout' ) . '</a>';
	endif;

}


function sc_custom_billing_fields( $fields = array() ) {

unset( $fields['billing_company']);

return $fields;

}

add_filter('woocommerce_billing_fields', 'sc_custom_billing_fields' );























