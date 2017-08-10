<div class="comment-section">
  <?php
  if (have_comments()):
  ?>
    <ol class="comment-list">
      <?php
      wp_list_comments([
        'avatar_size' => 32,
        'style' => 'ol'
      ]);
      ?>
    </ol>
  <?php
  endif;

  comment_form();
  ?>
</div>
