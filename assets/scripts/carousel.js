// Carousel
jQuery(document).ready(function($) {

	var slider = $('.banner__carousel');

	slider.slick({
		infinite: true,
		fade: true,
		speed: 500,
		arrows: false
	});

	// Switch slider on click
	$('.banner__latest-panel ul a').click(function(e) {

		e.preventDefault();
		slider.slick('slickGoTo', $(this).data('index'));

	});

	// Switch the highlight on slide change
	slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

		$('.banner__latest-panel ul a').each(function(slideIndex) {

			if(slideIndex === nextSlide)
				$(this).addClass('active');
			else
				$(this).removeClass('active');

		})
	});

});

