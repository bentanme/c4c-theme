<?php while (have_posts()) : the_post(); ?>


<?php
  // Dish out the correct template

  if(has_post_format('video')) :
    get_template_part('templates/post-title-video');
  else :
    get_template_part('templates/post-title');
  endif;
?>

<div class="section-block--white">
  <div class="container">
    <div class="row <?php post_class(); ?>">
      <div class="post__container--page">
        <article class="post__content match-height-min-height">
          <?php the_content(); ?>
          <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
      		<?php get_template_part('templates/post-comments'); ?>
        </article>
        <div class="post__sidebar match-height-min-height hide">
        <?php // get_template_part('templates/sidebar'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('templates/post-navigation'); ?>

<?php endwhile; ?>
