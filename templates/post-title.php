<div class="banner__group">
	<div class="banner__carousel">
		<div class="banner" style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]; ?>')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container text-center">
						<!-- Article title -->
						<h1 class="banner__header text-center text-fancy"><?= the_title() ?></h1>
						<p class="title-little text-white-transparent text-shadow"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
						<!-- Article excerpt -->
						<p class="banner__description text-center text-medium hidden"><span class="text-fancy">by</span> <strong><?= get_the_author(); ?></strong></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>