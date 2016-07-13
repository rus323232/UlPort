jQuery(document).ready(function($) {
	owl=$('.photo-carousel');
	owl.owlCarousel({
        singleItem: true,
        navigation: true,
        navigationText: ['˂','˃'],
		autoPlay: false,
		slideSpeed: 1500,
		callbacks: true,
	});
});