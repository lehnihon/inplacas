( function( $ ) {
	$(function() {
	 $('.menu-open').on('click',function(){
      $("#myNav").toggleClass('overlay-hg');
      $("#nav-icon1").toggleClass('open');
      $(".menu-open").toggleClass('menup');
      $(this).toggleClass('menu-w');
    });
	});
} )( jQuery );