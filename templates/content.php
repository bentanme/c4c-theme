<?php

// This is the template for content shown in the 
// category list pages

$is_video = has_post_format('video');

?>

<article>

	<div class="text-center m-b-30">
		<h2 class="text-brush text-wtf m-b-10 m-t-0">
		<? if($is_video) : ?>
		<div class="play-button-bg"><i class="fi-play play-button"></i></div>
		<? endif; ?>
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="title-little text-grey"><time class="updated" datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time></p>
	</div>


	<div class="post__content <?php post_class(); ?>">

		<?php if(has_post_thumbnail()) : ?>
		<div class="hero">
			<a href="<?php the_permalink(); ?>"><?= the_post_thumbnail() ?></a>
		</div>
		<?php endif; ?>

		<p><?= get_the_excerpt(); ?></p>
	</div>


	<div class="text-center m-t-50">
		<hr />
		<a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm m-t--60">Read entry</a>
	</div>

</article>
