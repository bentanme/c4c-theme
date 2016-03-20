<div class="banner__group">
	<div class="banner__carousel">

		<!-- Banner 1 (repeating element) -->
		<!-- Include hero image as background image in .banner -->
		<div class="banner" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/mini-blueberry-galettes-8w.jpg')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container">
						<!-- Article title -->
						<h1 class="banner__header text-center text-fancy"><?= the_title() ?></h1>
						<!-- Article excerpt -->
						<p class="banner__description text-center text-medium"><span class="text-fancy">by</span> <strong><?= get_the_author(); ?></strong></p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Banner 1 -->

	</div>
</div>