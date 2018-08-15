$(document).ready(function () {

	//Side nav
	$('.sidenav').sidenav();
    
    $('.tap-target').tapTarget();


	// Change color on the nav bar
	$(window).scroll(function () {
		$('.carousel, .carousel-slider').css('opacity', 1 - $(window).scrollTop() / 250);
		//$('.card1').css('opacity', 1 - $(window).scrollTop() / $('.card1').height() / 2);


		if ($(window).scrollTop() > 105) {
			//$('nav').removeClass('white').addClass('primary').fadeIn(100);
			//$('#nav-underline').removeClass('white').addClass('secondary');
			$('.button-collapse').removeClass('black-text').addClass('white-text');
			$('#slide-out').removeClass('white').addClass('primary');
			$('.link').removeClass('black-text').addClass('white-text');
			$('#slide-out-top').removeClass('primary-light').addClass('primary-dark');
		} else {
			//$('nav').addClass('white').removeClass('primary').fadeIn(100);
			//$('#nav-underline').removeClass('secondary').addClass('white');
			$('.button-collapse').removeClass('white-text').addClass('black-text');
			$('#slide-out').removeClass('primary').addClass('white');
			$('.link').removeClass('white-text').addClass('black-text');
			$('#slide-out-top').removeClass('primary-dark').addClass('primary-light');
		}
	});


	if ($('.pushpin-demo-nav').length) {
		$('.pushpin-demo-nav').each(function() {
		  var $this = $(this);
		  var $target = $('#' + $(this).attr('data-target'));
		  $this.pushpin({
			top: $target.offset().top,
			bottom: $target.offset().top + $target.outerHeight() - $this.height()
		  });
		});
	  }

});
