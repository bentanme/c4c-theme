// Carousel
jQuery(document).ready(function($) {

	var slider = $('.banner__carousel');

	// console.log(viewport.is('sm'));

	slider.slick({
		infinite: true,
		fade: true,
		speed: 500,
		arrows: false
	});

	// Switch slider on click
	$('.banner__latest-panel ul a').click(function(e) {

		if($(window).width() >= 768){
			e.preventDefault();
			slider.slick('slickGoTo', $(this).data('index'));
		}

	});

	// Switch the highlight on slide change
	slider.on('beforeChange', function(event, slick, currentSlide, nextSlide) {

		$('.banner__latest-panel ul a').each(function(slideIndex) {

			if(slideIndex === nextSlide){
				$(this).addClass('active');
			}
			else {
				$(this).removeClass('active');
			}

		});
	});

});

var banner = {

	centreLatestContent: function() {
		jQuery(document).ready(function($) {

			// Centre the latest box
	        var panel_el = $('.banner__latest-panel');
	        var panel_height = panel_el.height();
	        var banner_height = $('.banner').height();

	        panel_el.css({'margin-top' : banner_height / 2 - panel_height / 2});
		});
	}

};