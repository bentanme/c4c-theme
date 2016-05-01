<?php
/**
 *
 * This module is used on the bottom of the page above the footer.
 * Emails will be collected through a pre-existing email service
 * such as Campaign Montior or Mailchimp.
 *
 */
?>

<div class="section-block section-block--newsletter newsletter-sign-up">
	<div class="container">
		<div class="row padding--md padding-sm--sm">
			<div class="col-md-12">
				<div class="vertically--parent match-height text-center--sm">
					<div class="vertically--child text-center">
						<p class="title-little">Our delicious newsletter</p>
						<h2 class="text-fancy text-yellow-light first">Good food and stories to your inbox</h2>

						<!-- Connect this form to some newsletter SaaS client -->
						<form class="form-inline m-t-20" action="">
							<div class="form-group hidden">
								<input type="text" class="form-control input-lg email-address" id="" placeholder="Your email address">
							</div>

							<button type="button" class="btn btn-info btn-rounded btn-submit" data-toggle="modal" data-target="#newsletterModal"><i class="fi-mail icon m-r-5"></i> Join our newsletter</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="newsletterModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<h1 class="modal-title text-center text-fancy text-blue-dark">Subscribe</h1>

						<img src="<?php echo get_bloginfo('template_url'); ?>/assets/images/about-hero.png" class="img-responsive img-responsive-center m-t-10 m-b-10" style="max-height:150px" alt="Cooking 4 Change Can logo">

						<p class="text-medium text-center">Delicious recipes and heartwarming stories delivered fresh straight to your inbox.</p>

						<hr />

						<form action="//cooking4change1.createsend.com/t/d/s/kddtki/" method="post" role="form" class="form-inline text-center m-t-30" id="newsletter_form">

							<div class="alert" style="display:none"></div>

							<div class="newsletter_form__content">
								<div class="form-group">
									<input type="text" class="form-control input-lg" name="cm-kddtki-kddtki" placeholder="Your email address">
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Sign me up</button>
								</div>

								<div class="p-t-10">
									<hr />

									<p class="text-tiny text-center">We completely respect your privacy. You can always unsubscribe at any time.</p>
								</div>
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
(function($){
	$(function(){
	    $('form#newsletter_form').submit(function(e) {
	        e.preventDefault();

	        $('#newsletter_form .alert').fadeOut();

	        // Get button element
	        var button_el = $(this).find('button');

	        // Disable button
	        button_el.attr('disabled', true);

	        $.getJSON(
	        this.action + "?callback=?",
	        $(this).serialize(),

	        function(data) {
	            if (data.Status === 400) {
	                $('#newsletter_form .alert').addClass("alert-warning");
	                $('#newsletter_form .alert').removeClass("alert-info");
	                $('#newsletter_form .alert').fadeIn().html(data.Message);
	            } else {
	                $('#newsletter_form .alert').removeClass("alert-warning");
	                $('#newsletter_form .alert').addClass("alert-info");
	                $('#newsletter_form .alert').fadeIn().html("Thanks, you're now signed up!");
	                $('.newsletter_form__content').hide();
	            }

	            // Enable button
	            button_el.attr('disabled', false);
	        });

	    });
	});
})(jQuery);
</script>