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
          <h3 class="post-info"><?php the_time(get_option('date_format')); ?></h3>
          <?php the_content(__('Continue Reading').'&rarr;'); ?>
        </article>
      <?php
    endwhile;
  endif;
  ?>
</div>
<div class="navigation-links">
  <?php echo paginate_links(); ?>
</div>
<?php
get_sidebar();
get_footer();
?>
