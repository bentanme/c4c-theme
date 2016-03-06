<div class="banner__group">
	<div class="banner__carousel">

		<!-- Banner 1 (repeating element) -->
		<!-- Include hero image as background image in .banner -->
		<div class="banner" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/mini-blueberry-galettes-8w.jpg')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container">
						<!-- Article title -->
						<h1 class="banner__header text-center--sm text-fancy">Blueberry muffins</h1>
						<!-- Article excerpt -->
						<p class="banner__description text-center--sm">Delicious warm and blue</p>
						<!-- Article CTA -->
						<p class="p-t-10 text-center--sm box-shadow">
							<a href="#link-to-article" class="btn btn-md btn-submit btn-rounded btn-primary action-arrow--after">See more</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Banner 1 -->

		<!-- Banner 2 (repeating element) -->
		<div class="banner" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/chinese-sausage-potato-salad-2.jpg')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container">
						<h1 class="banner__header text-center--sm text-fancy">Lemon curd pie</h1>
						<p class="banner__description text-center--sm">Lemony and curdy</p>
						<p class="p-t-10 text-center--sm box-shadow">
							<a href="#link-to-article" class="btn btn-md btn-submit btn-rounded btn-primary action-arrow--after">See more</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Banner 2 -->

		<!-- Banner 3 (repeating element) -->
		<div class="banner" style="background-image: url('<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/tomato-basil-burrata-pasta-6w1.jpg')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container">
						<h1 class="banner__header text-center--sm text-fancy">Ostrich on toast</h1>
						<p class="banner__description text-center--sm">Ostrich with a bready twist</p>
						<p class="p-t-10 text-center--sm box-shadow">
							<a href="#link-to-article" class="btn btn-md btn-submit btn-rounded btn-primary action-arrow--after">See more</a>
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /Banner 3 -->
	</div>

	<div class="panel panel-default banner__latest-panel col-md-4 col-lg-3">
		<div class="panel-heading">
			<h2 class="text-bold m-t-0 m-b-0 text-fancy">The latest</h2></span>
		</div>
		<div class="panel-body">
			<ul>
				<!--
				Item 1:
				Always set the class to active for the first one
				-->
				<a href="#" class="active" data-index="0">
					<li>
						<div class="media">
							<div class="vertically--parent">
								<div class="media-left">
									<!-- Article hero image (use xs size if possible) -->
									<img class="media-object img-circle" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/thumbnails/t1.jpg" alt="Dish thumbnail">
								</div>
								<div class="media-body vertically--child">
									<!-- Aritcle title -->
									<h4 class="media-heading">Blueberry muffins</h4>
									<!-- Article description -->
									<p class="description">Delicious warm and blue</p>
								</div>
							</div>
						</div>
					</li>
				</a>

				<!-- Item 2 -->
				<a href="#" data-index="1">
					<li>
						<div class="media">
							<div class="vertically--parent">
								<div class="media-left">
									<img class="media-object img-circle" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/thumbnails/t2.jpg" alt="Dish thumbnail">
								</div>
								<div class="media-body vertically--child">
									<h4 class="media-heading">Lemon curd pie</h4>
									<p class="description">Lemony and curdy</p>
								</div>
							</div>
						</div>
					</li>
				</a>

				<!-- Item 3 -->
				<a href="#" data-index="2">
					<li>
						<div class="media">
							<div class="vertically--parent">
								<div class="media-left">
									<img class="media-object img-circle" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/photos/thumbnails/t3.jpg" alt="Dish thumbnail">
								</div>
								<div class="media-body vertically--child">
									<h4 class="media-heading">Ostrich on toast</h4>
									<p class="description">Ostrich with a bready twist</p>
								</div>
							</div>
						</div>
					</li>
				</a>
			</ul>
		</div>
	</div>

</div>