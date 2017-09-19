(function($) {
	$('.menu').on('click', function(){
		$(this).find('.menu__list').addClass('menu--open');
	});

	$('.menu__list').on('click', function(){
		$(this).find('.menu__list').toggleClass('menu__list--open');
	});
});