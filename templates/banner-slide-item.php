<div class="banner" style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'full')[0]; ?>')">
	<div class="banner__overlay vertically--parent">
		<div class="vertically--child">
			<div class="container">
				<!-- Article title -->
				<h1 class="banner__header text-center--sm"><?= the_title(); ?></h1>
				<?php if(get_post_custom_values('tagline')) : ?>
				<!-- Article excerpt -->
				<p class="banner__description text-center--sm"><?= get_post_custom_values('tagline')[0]; ?></p>
				<?php endif; ?>
				<!-- Article CTA -->
				<p class="p-t-10 text-center--sm box-shadow">
					<a href="<?= the_permalink(); ?>" class="btn btn-md btn-submit btn-rounded btn-primary">Read on</a>
				</p>
			</div>
		</div>
	</div>
</div>