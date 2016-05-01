<?php
/**
 *
 * Template for article navigation at bottom of page
 *
 */

$next_post = get_previous_post();
$previous_post = get_next_post();

?>

<div class="post__navigation">
  <div class="row">
    <?php if($previous_post) : ?>
    <a href="<?= get_permalink($previous_post); ?>">
      <? // Grab the largest featured image ?>
      <div class="post__navigation__left pull-left <?= Roots\Sage\Extras\featured_image_position($previous_post->ID); ?>" style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id($previous_post->ID), 'large')[0]; ?>')">
        <div class="post__navigation__overlay match-height">
          <div class="vertically--parent match-height">
            <div class="vertically--child">
              <div class="post__navigation__label">
                Next up
              </div>
              <div class="post__navigation__title">
                <?= get_the_title($previous_post); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php endif; ?>
    <?php if($next_post) : ?>
    <a href="<?= get_permalink($next_post); ?>">
      <? // Grab the largest featured image ?>
      <div class="post__navigation__right pull-right <?= Roots\Sage\Extras\featured_image_position($next_post->ID); ?>" style="background-image: url('<?= wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), 'large')[0]; ?>')">
        <div class="post__navigation__overlay match-height">
          <div class="vertically--parent match-height">
            <div class="vertically--child">
              <div class="post__navigation__label">
                Previously
              </div>
              <div class="post__navigation__title">
                <?= get_the_title($next_post); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </a>
    <?php endif; ?>
  </div>
</div>