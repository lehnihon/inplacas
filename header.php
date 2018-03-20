<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
<script>

new WOW().init();
</script>
</head>

<body>
<div id="page">
	<header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-top.png"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<ul class="cart-item clearfix">
							<li class="cart">
								<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/header-carrinho.png"; ?>" alt="" />
							</li>
							<li class="number">
								<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
									<?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
								</a>
							</li>
						</ul>
					</div>					
				</div>
			</div>
		</nav>
	</header>
	<main>
