<?php
if ( ! function_exists( 'lki_before_content' ) ) {

	function lki_before_content() {
		?>
		<div id="primary">
			<div class="row">
				<?php
				get_sidebar();
				?>
				<div id="content" class="col-md-9">
					<div class="box">
		<?php
	}
}

if ( ! function_exists( 'lki_after_content' ) ) {
	function lki_after_content() {
		?>
					</div>
				</div>
			</div><!-- #primary -->
		</div>
		<?php
	}
}

if ( ! function_exists( 'remove_sidebar' ) ) {

	function remove_sidebar() {
		remove_action('woocommerce_sidebar','woocommerce_get_sidebar',10);
	}
}

if ( ! function_exists( 'related_products_args' ) ) {
	function related_products_args( $args ) {
		$args['posts_per_page'] = 3; // 3 related products
		$args['columns'] = 3; // arranged in 3 columns
		return $args;
	}
}

if ( ! function_exists( 'cart_update_qty_script' ) ) {
	function cart_update_qty_script() {
	    if (is_cart()) :
	    ?>
	    <script>
	        jQuery('div.woocommerce').on('change', '.quantity .qty', function(){
	            //console.log('clicked');
	            jQuery("[name='update_cart']").trigger("click"); 
	        });

	    </script>
	    <?php
	    endif;
	}
}

if ( ! function_exists( 'woocommerce_description' ) ) {
	function woocommerce_description() {
		global $post;

		the_content();
	}
}

if ( ! function_exists( 'woocommerce_keep_buying' ) ) {
	function woocommerce_keep_buying() {
	?>
		<div class="wc-keep-buying">
			<a class="btn btn-outline-secondary faa-parent" href="<?php echo home_url( '/' ); ?>">
			Continuar comprando
			</a>
		</div>
	<?php
	}
}


