<?php

// Get the sticky posts
$args = array(
	'posts_per_page' => 3,
	'post__in'  => get_option('sticky_posts'),
	'ignore_sticky_posts' => 1
);
$query = new WP_Query($args);

?>

<div class="banner__group">
	<div class="banner__carousel">
		<?php
		if($query->have_posts()) :
			while($query->have_posts()) :

				// Set post as current focus
				$query->the_post();

				// Get template
				get_template_part('templates/banner-slide-item');

			endwhile;
		endif;
		?>
	</div>

	<div class="panel panel-default banner__latest-panel col-md-4 col-lg-3">
		<div class="panel-heading">
			<h2 class="text-bold m-t-0 m-b-0 text-fancy">The latest</h2></span>
		</div>
		<div class="panel-body latest-panel">
			<ul>

				<?php
				if($query->have_posts()) :
					$iterator = 0;
					while($query->have_posts()) :

						// Set post as current focus
						$query->the_post();

						// Get template (used instead of get_template_part to gain access to variables)
						include(locate_template('templates/banner-nav-item.php'));

						// Increment
						$iterator++;

					endwhile;
				endif;
				?>
			</ul>
		</div>
	</div>

</div>