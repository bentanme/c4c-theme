// Instagram (@cooking4c)

(function($) {
	var feed = new Instafeed({
		get: 'user',
		userId: 1836165063,
		accessToken: '1836165063.b179d7b.581bba6dedaf4911b3725161d3f2885c',
		resolution: 'low_resolution',
		limit: 5,
		template: '<div class="instafeed__item instafeed--match-height"><a href="{{link}}"><img src="{{image}}" alt="Instagram photo @cooking4c" class="img-responsive img-responsive-center" /></a></div>',
		after: function() {
			// Force match height
			$('.instafeed--match-height').matchHeight();
			console.log('Instafeed done');
		}
	});

	feed.run();
})(jQuery);