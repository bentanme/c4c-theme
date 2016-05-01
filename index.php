<?php use Roots\Sage\Titles; ?>

<div class="section-block--white section-block--border-bottom padding--xl">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<!-- <p class="title-little">You are currently viewing</p> -->
				<h1 class="text-fancy first"><?= Titles\title(); ?></h1>
        <? if(category_description()) : ?>
        <div class="title-little text-grey"><?= category_description(); ?></div>
        <? endif; ?>
			</div>
		</div>
	</div>
</div>

<div class="section-block--white">
  <div class="container">
    <div class="row">
      <div class="post__container match-height">
  		<?php while (have_posts()) : the_post(); ?>
  		  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  		<?php endwhile; ?>
      </div>
      <div class="post__sidebar match-height hide">
      <?php // get_template_part('templates/sidebar'); ?>
      </div>
    </div>
  </div>

  <?php get_template_part('templates/page', 'header'); ?>

  <?php if (!have_posts()) : ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12 padding--lg">
          <p class="text-center text-medium p-b-60">There are no posts here yet!</p>
        </div>
      </div>
    </div>
  <?php endif; ?>

  <?php while (have_posts()) : the_post(); ?>
    <?php // get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
  <?php endwhile; ?>

  <?php
  if(have_posts()) :
      get_template_part('templates/category-navigation');
  endif;
  ?>
</div>

<?php get_template_part('templates/newsletter-sign-up'); ?>
<?php get_template_part('templates/home-instagram'); ?>