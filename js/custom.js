(function($){
	$(document).ready(function() {
		
		
		
		
			$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
				$(this).toggleClass('open');
			});
			
			$('.carousel-inner .carousel-item:first-child').addClass('active');
			$('.carousel-indicators li:first-child').addClass('active');
			
			jQuery('.scroll-top').click(function(){
				jQuery('html').animate({'scrollTop' : '0px'}, 800);
				return false;
			});	
			
			$('.nav-bar a').click(function(){
				
				document.getElementById("myNav").style.width = "100%";
				
				$(this).fadeOut(500);
				
				
			});
			
			$('.closebtn').click(function(){
				
				document.getElementById("myNav").style.width = "0%";
				
				$('.nav-bar a').fadeIn(500);
				
			});
			
			
			
			
			
			
			$('.sharon-footer-3 h4').click(function(){
				
				document.getElementById("mySub").style.width = "100%";
				
				$(this).fadeOut(500);
				
				
			});
			
			$('.closeSub').click(function(){
				
				document.getElementById("mySub").style.width = "0%";
				
				$('.sharon-footer-3 h4').fadeIn(500);
				
			});
			
			
		var autoheight = $(window).height();
		
		$('.joinNewslatter').css('height',autoheight);
		
		
		
		
	
			// This will fire when document is ready:
			jQuery(window).resize(function() {
			// This will fire each time the window is resized:
			if(jQuery(window).width() >= 767) {
			jQuery(".col-top").insertBefore(".col-bottom");
			} else {
			jQuery(".col-bottom").insertBefore(".col-top");
			}
			}).resize(); // This will simulate a resize to trigger the initial run.

		
		
		
	});
})(jQuery);