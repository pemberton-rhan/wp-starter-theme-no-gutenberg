jQuery('#services-carousel').each(function () {
	const $outer    = jQuery(this);
	const $carousel = $outer.find('.carousel-wrapper');
	const $prev     = $outer.find('.carousel-arrows .arrow-prev');
	const $next     = $outer.find('.carousel-arrows .arrow-next');
	
	$carousel.slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1,
		arrows: true,
		prevArrow: $prev,
		nextArrow: $next,
		useTransform: true,
		cssEase: "cubic-bezier(0.17, 0.66, 0.34, 0.98)",
		speed: 1000,
	});
	
});
