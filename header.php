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
	<div id="header">
		<div id="topo">
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro logo" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo.jpg"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<div class="topo-menu row justify-content-end">
							<div class="col-md-auto"><a href="#">Sobre a In Placas</a></div>
							<div class="col-md-auto"><a href="<?php echo home_url( '/minha-conta' ); ?>">Minha Conta / Cadastre-se</a></div>
							<div class="col-md-auto"><a href="#">Atendimento</a></div>
						</div>
						<div class="topo-pesquisa row justify-content-end">
							<form role="search" method="get" class="search-form col-md-auto" action="<?php echo home_url( '/' ); ?>">
								<input type="search" class="search-input" placeholder="<?php echo esc_attr_x( 'Buscar Site', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
								<input type="image" class="search-submit" alt="Search"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/search.jpg"; ?>" />
							</form>
							<ul class="cart-item col-md-auto">
								<li class="cart">
									<img class="efeito-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/carrinho.jpg"; ?>" alt="" />
								</li>
								<li class="number">
									<a class="cart-contents" href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Ver o carrinho' ); ?>">
										<?php echo sprintf (_n( '%d item', '%d items', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md"><a href="#">Categoria 1</a></div>
					<div class="col-md"><a href="#">Categoria 2</a></div>
					<div class="col-md"><a href="#">Categoria 3</a></div>
					<div class="col-md"><a href="#">Categoria 4</a></div>
					<div class="col-md"><a href="#">Categoria 5</a></div>
					<div class="col-md"><a href="#">Categoria 6</a></div>
				</div>
			</div>
		</nav>
		<div id="menu">
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-auto"><a href="#">Leis e Normas</a></div>
					<div class="col-md-auto"><a href="<?php echo home_url( '/cliente-empresa' ); ?>">Conheça as vantagens de ser Cliente Empresa</a></div>
					<div class="col-md-auto"><a href="<?php echo home_url( '/seja-representante' ); ?>">Seja nosso representante</a></div>
				</div>
			</div>
		</div>
	</div>
  <div id="myNav" class="overlay">
    <!-- Overlay content -->
    <div class="overlay-content">
      <a href="#">Sobre a In Placas</a>
      <a href="#">Minha Conta / Cadastre-se</a>
      <a href="#">Atendimento</a>
      <a href="#">Leis e Normas</a>
      <a href="#">Cliente Empresa</a>
      <a href="#">Seja Nosso Representante</a>
    </div>
  </div>
  <div class="menu-open">
    <div id="nav-icon1">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
	<main>

