'use strict';
jQuery(function($) {
	$(document).ready(function(){

		$('#open_nav,#close_nav').on('click',function(){
			$('#wraapper,#nav').toggleClass('show');
		});

		$(function() {
			$("#open_nav").click(function() {
				$("#overlay").fadeIn();
			});
			$("#close_nav").click(function() {
				$("#overlay").fadeOut();
			});
		});

		$(document).ready(function(){
	　      var x;
	　      $('#open_nav').click(function(){
	　　    x = $("#side").detach();
	　      });
	　      $('#close_nav').click(function(){
	　      $("#wrap").append(x);
	　      });
		});

		var scrollpos;
			$('#open_nav').on('click', function(){
				scrollpos = $(window).scrollTop();
				$('body').addClass('fixed').css({'top': -scrollpos});
				$('#open_nav').addClass('open');
			});
			$('#close_nav').on('click', function(){
				$('body').removeClass('fixed').css({'top': 0});
				window.scrollTo( 0 , scrollpos );
				$('#open_nav').removeClass('open');
	});

	});

});