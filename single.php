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

        <article id="post-<?php the_ID(); ?>" class="article-single">

            <?php the_content(); ?>

        </article><!-- #post-## -->

        <?php endwhile; // End of the loop. ?>
      </div>
    </div>
  </div><!-- #primary -->
</div>


<?php get_footer(); ?>
