(function($) {
	$(document).ready(function() {
  		console.log('loaded');
  		$('#menu').on('click', function(){
  			console.log('clicked');
  		})
		$('.menu').on('click', function(){
			$(this).find('.menu__list').addClass('menu--open');
		});

		$('.menu__list').on('click', function(){
			$(this).find('.menu__list').toggleClass('menu__list--open');
		});
	});
})(jquery);  		