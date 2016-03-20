<?php while (have_posts()) : the_post(); ?>

<?php get_template_part('templates/banner-title'); ?>

<div class="container">
  <div class="post row">
    <article class="post__content match-height">
      <?php the_content(); ?>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </article>
    <div class="post__sidebar match-height">
		<?php get_template_part('templates/sidebar'); ?>
    </div>
  </div>
</div>

  <article <?php post_class(); ?>>
<?php endwhile; ?>
