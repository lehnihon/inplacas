<?php
get_header(); ?>
<div id="primary">
  <div class="row">
    <?php
    get_sidebar();
    ?>
    <div id="content" class="col-md-9">
      <div class="box">
        <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', 'single' ); ?>

        <?php endwhile; // End of the loop. ?>
      </div>
    </div>
  </div><!-- #primary -->
</div>


<?php get_footer(); ?>
