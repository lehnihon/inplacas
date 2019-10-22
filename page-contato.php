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
			<div id="content">
				<div class="pag-padrao col-md-6">
					<h1>Atendimento</h1>
					<h2>Utilize o formulário abaixo para entrar em contato com nossa equipe. 
						Sinta-se livre para tirar qualquer dúvida sobre nossos produtos.</h2>
							<?php while ( have_posts() ) : the_post(); ?>

								<?php the_content(); ?>

							<?php endwhile; // End of the loop. ?>
				</div>
				<div class="col-md-5 offset-md-1">
					<p>
						<strong>Horário de Atendimento:</strong><br>
						Segunda à Sexta: 9h às 18h
					</p>
					<p>
						<strong>Endereço:</strong><br>
						Rua Silveira Martins, 37 - Sala 93<br>
						Praça da Sé - São Paulo - SP
					</p>
					<p>
						<strong>Telefone:</strong><br>
						11 5082-3705
					</p>
				</div>
			</div>
		</div><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
