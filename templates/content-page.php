<?php use Roots\Sage\Titles; ?>

<div class="section-block--yellow padding--xl">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="text-fancy first m-b-0"><?= Titles\title(); ?></h1>
			</div>
		</div>
	</div>
</div>

<div class="section-block--white">
	<div class="container">
		<div class="post row <?php post_class(); ?>">
			<div class="post__container--page">
				<article class="post__content post__content--page">
					<?php the_content(); ?>
				</article>
			</div>
		</div>
	</div>
</div>