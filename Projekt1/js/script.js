$(window).scroll(function() {
	if ($('.navbar').offset().top > 50) {
		$('.navbar-fixed-top').addClass('top-nav-collapse');
	} else {
		$('.navbar-fixed-top').removeClass('top-nav-collapse');
	}
});

$(function() {
	$('.page-scroll a').click(function() {
		$('html, body').animate({
		scrollTop:$($(this).attr('href')).offset().top}, 1500, 'easeOutSine');
		event.preventDefault();
	});
});

var app = angular.module("myApp", []);