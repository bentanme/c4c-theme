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
	  		<div class="vertically--parent match-height">
  				<div class="vertically--child">
		  			<!-- Social media icons -->
					<ul class="inline-block no-bullets social-media social-media--footer">
						<li><a href="" class="social-facebook"><i class="fi-social-facebook"></i></a></li>
						<li><a href="" class="social-instagram"><i class="fi-social-instagram"></i></a></li>
						<li><a href="" class="social-twitter"><i class="fi-social-twitter"></i></a></li>
						<li><a href="" class="social-youtube"><i class="fi-social-youtube"></i></a></li>
					</ul>
				</div>
			</div>
  		</div>
  		<div class="col-md-4 text-center padding-sm--sm">
  			<div class="vertically--parent match-height">
  				<div class="vertically--child">
		  			<!-- C4C footer logo -->
		  			<div class="">
		  				<a href="<?= site_url() ?>"><img src="<?= get_bloginfo('template_url') ?>/assets/images/c4c-logo--white.svg" class="img-responsive img-responsive-center"></a>
		  			</div>
	  			</div>
  			</div>
  		</div>
  		<div class="col-md-4 text-center padding-sm--sm">
  			<div class="vertically--parent match-height">
  				<div class="vertically--child">
		  			<!-- Footer menu -->
		  			<ul class="footer-menu">
		  				<li><a href="">About</a></li>
		  				<li><a href="">Contact</a></li>
		  				<li><a href="">Team</a></li>
		  			</ul>

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
