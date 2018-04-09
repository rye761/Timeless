<?php
get_header();
?>
<div class="container">
  <?php
  if (have_posts()) :
    while (have_posts()) :
      the_post();
      ?>
        <article class="singular-post">
          <h2>
            <p class="title" href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              <?php
                edit_post_link('<img class="edit-icon" src="'
                .get_template_directory_uri().'/img/edit.svg" alt="Edit This">');
              ?>
            </p>
          </h2>
          <?php if (is_single()): ?>
          <h3 class="post-info"><?php the_time(get_option('date_format')); ?></h3>
          <?php endif; ?>
          <?php $singlecolumn = (count(explode(" ", get_the_content())) < 200) ? 'single-column' : '';
          if (has_post_thumbnail()):
            the_post_thumbnail('large');
          endif; ?>
          <div class="singular-post-content <?php echo $singlecolumn ?>">
            <?php the_content(); ?>
          </div>
        </article>
      <?php
    endwhile;
  endif;
  ?>
</div>
<?php
wp_link_pages(
  [
    'before' => '<div class="navigation-links">',
    'after' => '</div>'
  ]
);
?>
<div class="container">
  <?php
  if (comments_open() || get_comments_number()):
    comments_template();
  endif; ?>
</div>
<?php
get_sidebar();
get_footer();
?>
