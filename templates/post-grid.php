<?php 
	/**
	 *
	 * Template for grid, to be replaced with content loop
	 *
	 */
?>

<div class="posts-grid__shape"></div>
<div class="posts-grid">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding--md">
				<h1 class="text-fancy text-center first text-super">Mouth-watering entries</h1>

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

				<p class="text-center"><a href="" class="btn btn-submit btn-primary btn-rounded action-arrow">View more</a></p>
			</div>
		</div>
	</div>
</div>