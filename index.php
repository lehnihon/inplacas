<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>
<main>
  <div id="home">
    <div class="banner container">
    	<div class="row wow fadeIn">
    	    <div class="col-md">
            <?php 
            echo do_shortcode('[smartslider3 slider=3]');
            ?>
          </div>
      </div>
    </div>
    <div class="publicidade container">
      <div class="row wow fadeIn">
          <div class="col-md">
            <?php 
            echo do_shortcode('[smartslider3 slider=4]');
            ?>
          </div>
          <div class="col-md">
            <?php 
            echo do_shortcode('[smartslider3 slider=5]');
            ?>
          </div>
          <div class="col-md">
            <?php 
            echo do_shortcode('[smartslider3 slider=6]');
            ?>
          </div>
      </div>
    </div>
    <div class="prods container">
      <div class="row wow fadeIn">
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 8,  'orderby' => 'rand' );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
          global $product;
          $price = $product->get_price_html();
        ?>
        <div class="col-md-3 prod">
          <a class="wrap" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('home-thumb', array(
              'class' => "e-cinza img-responsive",
            )); ?>
            <div class="preco">
              <?php echo $price ?>
            </div>
            <div class="botao">Comprar</div>
          </a>
        </div>
        <?php
        endwhile;
        ?>
      </div>
    </div>
    <div class="news">
      <div class="container">
        <div class="row">
          <div class="col-md-4"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/news.jpg"; ?>" /></div>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="Nome" name="">
          </div>
          <div class="col-md-3">
            <input type="text" class="form-control" placeholder="E-mail" name="">
          </div>
          <div class="col-md-2">
            <div class="botao">Enviar</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="prods container paddtop">
      <div class="row wow fadeIn">
        <?php
        $args = array( 'post_type' => 'product', 'posts_per_page' => 4,  'orderby' => 'rand' );
        $loop = new WP_Query( $args );

        while ( $loop->have_posts() ) : $loop->the_post();
          global $product;
          $price = $product->get_price_html();
        ?>
        <div class="col-md-3 prod">
          <a class="wrap" href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail('home-thumb', array(
              'class' => "e-cinza img-responsive",
            )); ?>
            <div class="preco">
              <?php echo $price ?>
            </div>
            <div class="botao">Comprar</div>
          </a>
        </div>
        <?php
        endwhile;
        ?>
      </div>
    </div>
</main>
<?php get_footer(); ?>
