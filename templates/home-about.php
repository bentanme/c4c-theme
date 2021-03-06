<?php

/**
 *
 * About section for home page
 *
 */

?>

<div class="section-block section-block--yellow">
	<div class="container">
		<div class="row">
			<div class="col-md-6 padding--lg padding-sm--sm match-height">
				<div class="text-center padding-side--md">
					<a href="<?= get_permalink(get_page_by_path('about')); ?>"><img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/about-can.jpg" class="img-responsive img-responsive-center" alt="Cooking 4 Change can logo" style="max-height:400px;"></a>
				</div>
			</div>

			<div class="col-md-6">
				<div class="vertically--parent match-height text-center--sm padding--lg padding-sm--sm">
					<div class="vertically--child">
						<p class="title-little">About the cause</p>
						<h1 class="text-fancy text-black first text-center--sm">
							Cooking 4 Change
						</h1>

						<div class="text-normal padding--sm">
							<p>Dick and his mates had this crazy idea to get as many New Zealand celebrities together as they could, cook with them and put them all in a cookbook.</p>

							<p>When Dick and his team had the first project meeting a very important question was raised: How do we convince 101 famous kiwis to come on board and join the cause. Dick’s simple answer was: “Easy – we tell them Dick Frizzell is in the book!”</p>
						</div>

						<!-- Link to about page -->
						<p><a href="<?= get_permalink(get_page_by_path('about')); ?>" class="btn btn-submit btn-primary btn-rounded">And so it began</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>