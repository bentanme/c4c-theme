<?php 
	/**
	 *
	 * Footer template
	 *
	 */
?>

<footer class="section-block footer">
  <div class="container">
  	<div class="col-md-12 text-center">
  		<!-- Social media icons -->
		<ul class="inline-block no-bullets social-media">
			<li><a href="" class="social-facebook"><i class="fi-social-facebook"></i></a></li>
			<li><a href="" class="social-instagram"><i class="fi-social-instagram"></i></a></li>
			<li><a href="" class="social-twitter"><i class="fi-social-twitter"></i></a></li>
			<li><a href="" class="social-youtube"><i class="fi-social-youtube"></i></a></li>
		</ul>

		<!-- C4C footer logo -->
		<div class="m-t-30 m-b-30">
			<a href="<?= site_url() ?>"><img src="<?= get_bloginfo('template_url') ?>/assets/images/c4c-logo--white.svg" class="img-responsive img-responsive-center"></a>
		</div>

		<!-- Footer menu -->
		<ul class="inline-block no-bullets m-t-30 footer-menu">
			<li><a href="">About</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="">Team</a></li>
		</ul>

		<!-- Copyright jargon -->
		<div class="text-strong text-uppercase text-letter-spacing">
			<p>&copy; Copyright <?= date('Y'); ?> Cooking 4 Change</p>
		</div>
  	</div>
  </div>
</footer>
