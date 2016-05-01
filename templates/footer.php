<?php 
	/**
	 *
	 * Footer template
	 *
	 */
?>

<footer class="section-block footer">
  <div class="container">
  	<div class="row">
  		<div class="col-md-4 text-center padding-sm--sm">
	  		<div class="match-height vertically--parent">
	  			<div class="vertically--child">
		  			<!-- Social media icons -->
					<ul class="inline-block no-bullets social-media social-media--footer">
						<?php get_template_part('templates/social-media-icons'); ?>
					</ul>
				</div>
			</div>
  		</div>
  		<div class="col-md-4 text-center padding-sm--sm">
  			<div class="match-height vertically--parent">
	  			<!-- C4C footer logo -->
	  			<div class="vertically--child">
	  				<a href="<?= site_url() ?>"><img src="<?= get_bloginfo('template_url') ?>/assets/images/c4c-logo--white.svg" class="img-responsive img-responsive-center"></a>
	  			</div>
  			</div>
  		</div>
  		<div class="col-md-4 text-center padding-sm--sm">
  			<div class="text-small match-height vertically--parent">
  				<div class="vertically--child">
		  			<!-- Footer menu -->
		  			<?php
			        if (has_nav_menu('footer_navigation')) :
			          wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'footer-menu']);
			        endif;
			        ?>

		  			<!-- Copyright jargon -->
		  			<div class="footer-copyright">
		  				<p>&copy; <?= date('Y'); ?> Cooking 4 Change</p>
		  			</div>
	  			</div>
  			</div>
  		</div>
  	</div>
  </div>
</footer>
