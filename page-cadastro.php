<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

	<div id="primary">
		<div class="row">
			<div id="content" class="col-md-12">
				<div class="pag-padrao">
				<h1>Criar cadastro</h1>
				<h2>Preencha todos os campos</h2>
  				<?php while ( have_posts() ) : the_post(); ?>

  					<?php the_content(); ?>

  				<?php endwhile; // End of the loop. ?>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
