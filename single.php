<?php get_header();?>
  <header class="headers">
      <?php the_post_thumbnail();?>
      <h1><?php the_title( );?>
  </header>
  <div class=" main-single">
    <div class="blog">
    <?php
  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="post">
    <?php the_content();?>
  </div>
  <?php endwhile;?>
  <?php endif;?>
  </div>
  </div>

  <?php get_footer();?>
