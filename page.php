<?php while (have_posts()) : the_post(); ?>
  <?php // get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php get_template_part('templates/newsletter-sign-up'); ?>
<?php get_template_part('templates/home-instagram'); ?>