<!-- Always set the class to active for the first one -->
<a href="<?= the_permalink(); ?>" class="<? echo ($iterator === 0) ? 'active' : null; ?>" data-index="<?= $iterator; ?>">
	<li>
		<div class="media">
			<div class="vertically--parent">
				<div class="media-left">
					<!-- Article hero image (use xs size if possible) -->
					<? if(get_post_thumbnail_id(get_the_ID())) : ?>
					<img class="media-object img-circle" src="<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'thumbnail')[0]; ?>" alt="<?= the_title(); ?> thumbnail">
					<? else : ?>
					<img class="media-object img-circle" src="<?php echo get_bloginfo('template_url'); ?>/assets/images/no-img-square.jpg" alt="<?= the_title(); ?> thumbnail">
					<? endif; ?>
				</div>
				<div class="media-body vertically--child">
					<h4 class="media-heading"><?= the_title(); ?></h4>
					<p class="description"><?= get_post_custom_values('tagline')[0]; ?></p>
				</div>
			</div>
		</div>
	</li>
</a>