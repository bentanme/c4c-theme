<?php
/**
 *
 * This module is used on the bottom of the page above the footer.
 * Emails will be collected through a pre-existing email service
 * such as Campaign Montior or Mailchimp.
 *
 */
?>

<div class="section-block__shape section-block__shape--red"></div>
<div class="section-block section-block--newsletter newsletter-sign-up">
	<div class="container">
		<div class="row padding--lg padding-sm--sm">
			<div class="col-md-4">
				<div class="vertically--parent newsletter-match-height">
					<div class="vertically--child">
						<!-- Currently a placeholder image -->
						<img src="<?= get_bloginfo('template_url') ?>/assets/images/c4c-newsletter.svg" alt="Newsletter" class="img-responsive img-responsive-center" style="max-height:130px">
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="vertically--parent match-height text-center--sm">
					<div class="vertically--child">
						<p class="text-strong text-normal text-yellow-light">Join our delicious newsletter</p>
						<p class="text-fancy text-large text-yellow-light">Good food, good stories straight to your inbox</p>

						<!-- Connect this form to some newsletter SaaS client -->
						<form class="form-inline m-t-20" action="">
							<div class="form-group">
								<input type="text" class="form-control input-lg email-address" id="" placeholder="Your email address">
							</div>

							<button type="submit" class="btn btn-info btn-rounded btn-submit"><i class="fi-mail m-r-5"></i> Sign me up</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>