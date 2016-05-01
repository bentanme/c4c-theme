<?php
/**
 *
 * Template for grid, to be replaced with content loop
 *
 */

// Get posts
$args = array(
	'posts_per_page' => 8,
	// 'post__in'  => get_option('sticky_posts'),
	'ignore_sticky_posts' => 1
);
$query = new WP_Query($args);
?>

<!-- <div class="posts-grid__shape"></div> -->
<div class="posts-grid section-block--white">
	<div class="container">
		<div class="row">
			<div class="col-md-12 padding--md">
				<div class="text-center">
					<h1 class="text-fancy text-blue-dark first">Mouth-watering entries</h1>
					<p class="text-grey title-little">Straight from the oven</p>
				</div>

				<div class="row p-t-30">
					<?php
					if($query->have_posts()) :
						while($query->have_posts()) :

							// Set post as current focus
							$query->the_post();

							// Get template
							get_template_part('templates/post-grid-article');

						endwhile;
					endif;
					?>
				</div>

				<!-- <p class="text-center"><a href="" class="btn btn-submit btn-primary btn-rounded">Discover more</a></p> -->
			</div>
		</div>
	</div>
</div>