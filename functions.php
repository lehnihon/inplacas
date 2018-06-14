<?php
/**
 * site functions and definitions
 *
 * @package site
 */

if ( ! function_exists( 'site_setup' ) ) :
function site_setup() {
	add_image_size('home-thumb',600,600,true);
	add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );
}
endif; // site_setup
add_action( 'after_setup_theme', 'site_setup' );

/**
 * Enqueue scripts and styles.
 */
function site_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	wp_enqueue_style( 'style-animate', get_template_directory_uri() ."/node_modules/animate.css/animate.min.css" );
	wp_enqueue_script( 'script-jquery', get_template_directory_uri() .'/node_modules/jquery/dist/jquery.min.js');
	wp_enqueue_script( 'script-popper', get_template_directory_uri() .'/node_modules/popper.js/dist/umd/popper.min.js');
	wp_enqueue_script( 'script-bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js');
	wp_enqueue_script( 'script-wow', get_template_directory_uri() . '/node_modules/wowjs/dist/wow.min.js');
	wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/script.js',array(),false,true);
}

add_action( 'wp_enqueue_scripts', 'site_scripts' );

function cliente_empresa(){
  $current_user = wp_get_current_user();
  $current_user->roles;
  foreach($current_user->roles as $cli){
    if($cli == 'cliente_empresa')
      return true;
  }
  return false;
}

function add_cart_item_data( $cart_item_data, $product_id, $variation_id ) {
  $product = wc_get_product( $product_id );

  if(cliente_empresa()){
    $price = get_post_meta($product->id,'_text_field',true);
    if(empty($price))
      $price = get_post_meta($product->id,'_regular_price',true);
  }else{
    $price = get_post_meta($product->id,'_regular_price',true);
  }
  $cart_item_data['cliente_empresa']= $price;

  return $cart_item_data;
}
add_filter( 'woocommerce_add_cart_item_data', 'add_cart_item_data', 10, 3 );

function before_calculate_totals( $cart_obj ) {
  if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
    return;
  }
  // Iterate through each cart item
  foreach( $cart_obj->get_cart() as $key=>$value ) {
    if( isset( $value['cliente_empresa'] ) ) {
      $price = $value['cliente_empresa'];
      $value['data']->set_price( ( $price ) );
    }
  }
}
add_action( 'woocommerce_before_calculate_totals', 'before_calculate_totals', 10, 1 );


function sv_change_product_html( $price_html, $product ) {
  if(cliente_empresa()){
    $price = get_post_meta($product->id,'_text_field',true);
  }else{
    $price = get_post_meta($product->id,'_regular_price',true);
  }
  if(!empty($price))
  $price_html = '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">R$</span>'.$price.'</span>';  

  return $price_html;
}
add_filter( 'woocommerce_get_price_html', 'sv_change_product_html', 10, 2 );


function woo_add_custom_general_fields(){
  woocommerce_wp_text_input( 
    array( 
      'id'          => '_text_field', 
      'label'       => __( 'Preço empresa (R$)', 'woocommerce' ), 
      'placeholder' => '',
      'class' => 'short wc_input_price',
      'desc_tip'    => 'true'
    )
  );
}

function woo_add_custom_general_fields_save( $post_id ){
  $woocommerce_text_field = $_POST['_text_field'];
  if( !empty( $woocommerce_text_field ) )
    update_post_meta( $post_id, '_text_field', esc_attr( $woocommerce_text_field ) );
}

// Display Fields
add_action( 'woocommerce_product_options_general_product_data', 'woo_add_custom_general_fields' );

// Save Fields
add_action( 'woocommerce_process_product_meta', 'woo_add_custom_general_fields_save' );

/**
 * Load integration
 */
require 'inc/woocommerce-hooks.php';
require  'inc/woocommerce-functions.php';

