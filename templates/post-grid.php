<?php 
/**
 *
 * Template for grid, to be replaced with content loop
 *
 */
?>

<!-- <div class="posts-grid__shape"></div> -->
<div class="posts-grid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding--md">
				<div class="text-center">
					<h1 class="text-fancy text-super text-blue-dark first">Mouth-watering entries</h1>
					<p class="text-grey title-little">Straight from the oven</p>
				</div>

				<div class="row m-t-30 m-b-30">
					<!-- If post is video, use video template -->
					<?php get_template_part('templates/post-grid-video'); ?>
					<!-- If post is article, use article template -->
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
					<?php get_template_part('templates/post-grid-article'); ?>
				</div>

				<p class="text-center"><a href="" class="btn btn-submit btn-primary btn-rounded">Give me more</a></p>
			</div>
		</div>
	</div>
</div>