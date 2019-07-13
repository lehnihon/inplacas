<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package site
 */

?>
	</main>
	<div id="footer">
		<div id="footer-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row mb-md-4">
							<div class="col-md">
								<h5>Nossos Produtos</h5>
								<ul class="cat">
									<li><a href="http://in-placaslux.com.br/categoria-produto/incendio">Incêndio</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/rota-de-fuga">Rota de Fuga</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/complementar">Complementar</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/linha-15">Linha 15</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/linha-40">Linha 40</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/linha-60">Linha 60</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/epi">EPI</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/auto-extinguivel">Auto Extinguível</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/ingles">Inglês</a></li>
									<li><a href="http://in-placaslux.com.br/categoria-produto/diversas">Diversas</a></li>
								</ul>
							</div>
							<div class="col-md">
								<h5>Sobre nossa empresa</h5>
								<ul>
									<li><a href="#">Institucional</a></li>
									<li><a href="#">Política de Privacidade</a></li>
									<li><a href="#">Troca e Devolução</a></li>
									<li><a href="#">Atendimento e Loja Física</a></li>
								</ul>
							</div>
						</div>
						<div class="row">
							<div class="col-md">
								<h5>Vantagens in-placas</h5>
								<a href="#">Conheça as vantagens de ser <strong>Cliente Empresa</strong></a>
							</div>
							<div class="col-md">
								<h5>Leis e Normas</h5>
								<a href="#">Informações importantes para você</a>
							</div>
						</div>
					</div>
					<div class="col-md-4 acompanhe">
						<h5>Acompanhe a in-placas</h5>
						<a target="_blank" href="#">
							<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/redes1.jpg"; ?>" />
						</a>
						<a target="_blank" href="#">
							<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/redes2.jpg"; ?>" />
						</a>
						<a target="_blank" href="#">
							<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/redes3.jpg"; ?>" />
						</a>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div>
		<div id="footer-extra">
			<div class="container">
				<div class="row">
					<div class="col-md-4 text-left">
						<h5>Formas de Pagamento</h5>
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/formas-pgto.jpg"; ?>" />
					</div>
					<div class="col-md-4 text-left">
						<h5>Segurança</h5>
						<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/safe.jpg"; ?>" />
					</div>
					<div class="col-md-4 text-left">
						<h5>Televendas</h5>
						<span class="tel">11 5082-3705</span>
						<p>
							Horário de funcionamento:<br>
							Segunda à sexta-feira: 09h às 18h<br>
							Sábados 09h às 17h
						</p>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div>
		<div id="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<span>&copy; Copyright <?php echo date('Y') ?> in-placas sinalização fotoluminescentes</span>
						<a target="_blank" class="float-right" href="http://seimidigital.com.br/">
							<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/seimi.png"; ?>" />
						</a>
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		</div>
	</div><!-- #footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
