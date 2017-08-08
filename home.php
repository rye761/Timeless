<?php
get_header();
?>
<div class="container">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      ?>
        <article class="post">
          <h2><a class="title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <h3 class="post-info"><?php the_time('l, F j, Y'); ?></h3>
          <?php the_content(); ?>
        </article>
      <?php
    endwhile;
  endif;
  ?>
</div>
<?php
get_sidebar();
get_footer();
?>
