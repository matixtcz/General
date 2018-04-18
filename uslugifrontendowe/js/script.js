
$(function() {
	$('.page a').click(function() {
		$('html, body').animate({
		scrollTop:$($(this).attr('href')).offset().top}, 1500, 'easeOutSine');
		event.preventDefault();
	});
});

var app = angular.module("myApp", []);