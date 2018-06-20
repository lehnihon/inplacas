<?php
get_header(); ?>
<div id="primary">
    <div class="row">
      <?php
        get_sidebar();
      ?>
      <div id="content" class="col-md-9">
        <div class="page-wrap">
          <div class="row text-left">
            <div class="col-md-12"><h1><?php printf( esc_html__( 'Resultados da procura por: %s', 'site' ), '<span>' . get_search_query() . '</span>' ); ?></h1></div><br><br>
            <?php while ( have_posts() ) : the_post(); ?>

              <div class="prods col-md-12">
                <a class="wrap" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
                </a>
              </div><br>

            <?php endwhile; // End of the loop. ?>
          </div>
        </div>
      </div>
    </div><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
