
$( document ).ready(function() {

	// nav easing
	$('a[href^="#"]').on('click',function(e){
	e.preventDefault();
	var target = this.hash,
	$target = $(target);
		if (typeof(jQuery($target).offset()) !== 'undefined') {
			$('html,body').stop().animate({
				'scrollTop': $target.offset().top
			}, 2000, 'swing', function(){
				window.location.hash = target;
			});	
		}
	});

	//scrolling functions
	$(document).scroll(function() {
		if ($(document).scrollTop() >= 50 ) {
			$('.arrow-down-main').addClass('fade-out');
		}
		else {
			$('.arrow-down-main').removeClass('fade-out');
		}
	});

	// play & pause banner video
	$('#banner-video').get(0).play();
	$('#play-pause-banner').addClass('is-playing');
	$('#play-pause-banner').removeClass('is-paused');
	var bannerPlaying = true;
	$('#play-pause-banner').click(function() {
		if (bannerPlaying) {
			$('#banner-video').get(0).pause();
			$('#play-pause-banner').addClass('is-paused');
			$('#play-pause-banner').removeClass('is-playing');
			bannerPlaying = false;
		}
		else {
			$('#banner-video').get(0).play();
			$('#play-pause-banner').addClass('is-playing');
			$('#play-pause-banner').removeClass('is-paused');
			bannerPlaying = true;
		}
	});

	// play & pause footer video
	$('#footer-video').get(0).play();
	$('#play-pause-footer').addClass('is-playing');
	$('#play-pause-footer').removeClass('is-paused');
	var footerPlaying = true;
	$('#play-pause-footer').click(function() {
		if (footerPlaying) {
			$('#footer-video').get(0).pause();
			$('#play-pause-footer').addClass('is-paused');
			$('#play-pause-footer').removeClass('is-playing');
			footerPlaying = false;
		}
		else {
			$('#footer-video').get(0).play();
			$('#play-pause-footer').addClass('is-playing');
			$('#play-pause-footer').removeClass('is-paused');
			footerPlaying = true;
		}
	});

	// reel

	$("#reel").on('ended', function() {
		$('#reel').addClass('nodisplay');
		$('#stop-reel').addClass('nodisplay');
		$('#btn-reel').removeClass('nodisplay');
		$('#play-pause-banner').removeClass('nodisplay');
		$('nav.main').removeClass('nodisplay');
	});


	$("#stop-reel").click(function() {
		$('#reel').addClass('nodisplay');
		$('#stop-reel').addClass('nodisplay');
		$('#reel').get(0).pause();
		$('#reel').get(0).currentTime = 0;
		$('#btn-reel').removeClass('nodisplay');
		$('#play-pause-banner').removeClass('nodisplay');
		$('nav.main').removeClass('nodisplay');
	});


	$('#btn-reel').click(function() {
		$('#reel').removeClass('nodisplay');
		$('#stop-reel').removeClass('nodisplay');
		$('#reel').get(0).play();
		$('#btn-reel').addClass('nodisplay');
		$('#play-pause-banner').addClass('nodisplay');
		$('nav.main').addClass('nodisplay');
	});

	// load slider
	$('.flexslider').flexslider({
		animation: "slide",
		slideshow: false,
	}); 

	$('.fancybox-media').fancybox({
		openEffect  : 'fade',
		closeEffect : 'fade',
		aspectRatio : true,
		autoDimensions : true,
		padding : '0',
		height : '576',
		width : '1024',
		helpers : {
	  		media : {}
		}
	});

	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		padding : '0',
	});
});

