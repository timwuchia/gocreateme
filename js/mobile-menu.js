
var $mobileMenu = $('.menu-mobile-menu-container');
var $menuBtn = $('.menu-btn');

$menuBtn.click(function(){

	$menuBtn.toggleClass("animate");
	$mobileMenu.toggleClass('mobile-menu-show');
	$(".menu-btn-middle").slideToggle();
	 $('body').toggleClass('fixed-body');

});