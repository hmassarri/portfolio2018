$(document).ready(function () {

	//Side nav
	$('.sidenav').sidenav();



	// Change color on the nav bar
	$(window).scroll(function () {
		$('.carousel, .carousel-slider').css('opacity', 1 - $(window).scrollTop() / 250);
		//$('.card1').css('opacity', 1 - $(window).scrollTop() / $('.card1').height() / 2);


		if ($(window).scrollTop() > 105) {
			$('nav').removeClass('primary-dark').addClass('clouds').fadeIn(100);
			//$('.brand-logo').removeClass('black-text').addClass('blue-text text-lighten-3');
			$('.link').removeClass('white-text').addClass('white-text');
			$('.button-collapse').removeClass('black-text').addClass('white-text');
			$('.side-nav').removeClass('white').addClass('pink accent-2');
			$('#nav-underline').removeClass('secondary-light').addClass('light-blue');
		} else {
			$('nav').addClass('primary-dark').removeClass('clouds').fadeIn(100);
			//$('.brand-logo').removeClass('blue-text text-lighten-3').addClass('black-text');
			$('.link').removeClass('white-text').addClass('white-text');
			$('.button-collapse').removeClass('white-text').addClass('black-text');
			$('.side-nav').removeClass('pink accent-2').addClass('white');
			$('#nav-underline').removeClass('light-blue').addClass('secondary-light');
		}
	});

});
