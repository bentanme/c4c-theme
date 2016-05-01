<?php
/**
 *
 * Template for article when being displayed as grid, e.g. like on home page
 *
 */

$is_video = has_post_format('video');

if(get_post_thumbnail_id(get_the_ID())) :
	$background_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'medium')[0];
else :
	$background_image_url = get_bloginfo('template_url') . "/assets/images/no-img-square.jpg";
endif;

?>

<a href="<?= get_the_permalink(); ?>">
	<div class="post-grid__article">
		<div class="post-grid__article__box">
			<div class="hero-image">
				<div class="hero-image__inset" style="background-image: url('<?= $background_image_url; ?>')">
					<? if($is_video) : ?>
					<div class="play-button-bg"><i class="fi-play play-button"></i></div>
					<? endif; ?>
				</div>
			</div>
			<div class="description">
				<h2>
					<?= get_the_title(); ?>
				</h2>
				<p><?= get_post_custom_values('tagline')[0]; ?></p>
				<div class="description__tags hide"><i class="fi-price-tag m-r-5"></i></div>

				<p class="title-little text-tiny text-grey"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
			</div>
		</div>
	</div>
</a>