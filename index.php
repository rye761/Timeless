<?php
get_header();
if (have_posts()) :
  while (have_posts()) :
    the_post();
    ?>
    <article class="post">
      <?php the_content(); ?>
    </article>
    <?php
  endwhile;
endif;
get_sidebar();
get_footer();
?>
