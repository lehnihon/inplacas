<?php
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',                   20 );
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper',       10 );
remove_action( 'woocommerce_after_main_content',  'woocommerce_output_content_wrapper_end',   10 );
remove_action( 'woocommerce_after_shop_loop',     'woocommerce_pagination',                   10 );
remove_action( 'woocommerce_before_shop_loop',    'woocommerce_result_count',                 20 );
remove_action( 'woocommerce_before_shop_loop',    'woocommerce_catalog_ordering',             30 );
remove_action( 'woocommerce_single_product_summary',    'woocommerce_template_single_meta',  40 );
remove_action( 'woocommerce_after_single_product_summary',    'woocommerce_output_product_data_tabs',  10 );
remove_action( 'woocommerce_after_single_product_summary',    'woocommerce_output_related_products',  20 );
remove_action('woocommerce_after_shop_loop_item','woocommerce_template_loop_add_to_cart',10);
/*PRODUTOS*/
remove_action( 'woocommerce_shop_loop_item_title',    'woocommerce_template_loop_product_title', 10 );

add_action( 'woocommerce_before_main_content',    'lki_before_content',                10 );
add_action( 'woocommerce_after_main_content',     'lki_after_content',                 10 );
add_action( 'woocommerce_after_single_product',    'woocommerce_output_related_products',                20 );
add_action( 'wp', 'remove_sidebar' );
add_action( 'wp_footer', 'cart_update_qty_script' );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 6 );
add_action('woocommerce_after_single_product','woocommerce_description',10);
add_action('woocommerce_after_cart_totals','woocommerce_keep_buying',10);
add_filter( 'woocommerce_output_related_products_args', 'related_products_args' );
/*PRODUTOS*/
add_filter( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_title',5 );
add_filter( 'woocommerce_after_shop_loop_item', 'lki_after_shop_loop_item_button',5 );
