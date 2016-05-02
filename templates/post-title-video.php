<?php

$post_id = get_the_ID();
$video_id_youtube = get_post_custom_values('youtube_video_id');
$video_id_vimeo = get_post_custom_values('vimeo_video_id');

?>

<div class="banner__group">
	<div class="banner__carousel">
		<!-- Include hero image as background image in .banner -->
		<div class="banner banner--video" style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'large')[0]; ?>')">
			<div class="banner__overlay vertically--parent">
				<div class="vertically--child">
					<div class="container text-center">
						<!-- Article title -->
						<h1 class="banner__header text-center text-fancy"><?= the_title() ?></h1>
						<p class="title-little text-white-transparent text-shadow"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
						<!-- Article excerpt -->
						<p class="banner__description text-center text-medium hidden"><span class="text-fancy">by</span> <strong><?= get_the_author(); ?></strong></p>

						<?php if(!empty($video_id_youtube)) : ?>
						<div class="banner__video">
							<div class="embed-responsive embed-responsive-16by9 m-t-30">
								<iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/<?= $video_id_youtube ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<?php elseif(!empty($video_id_vimeo)) : ?>
						<div class="banner__video">
							<div class="embed-responsive embed-responsive-16by9 m-t-30">
								<iframe src="https://player.vimeo.com/video/<?= $video_id_vimeo ?>?title=0&byline=0&portrait=0&badge=0" class="embed-responsive-item" width="816" height="459" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
							</div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>