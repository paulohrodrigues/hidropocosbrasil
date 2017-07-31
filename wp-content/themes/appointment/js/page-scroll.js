/*
* Author: Appointment Theme
* Created by: Shahid (Scientech IT)
* Copyright (c) 2014 Appointment
* Date: 27 Dec, 2014
* http://www.webriti.com/demo/wp/appointment
*/

/*-- Page Scroll To Top Section ---------------*/
	jQuery(document).ready(function () {
	
		jQuery(window).scroll(function () {
			if (jQuery(this).scrollTop() > 100) {
				jQuery('.hc_scrollup').fadeIn();
			} else {
				jQuery('.hc_scrollup').fadeOut();
			}
		});
	
		jQuery('.hc_scrollup').click(function () {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 600);
			return false;
		});

		// jQuery('.contatos').click(function() {

		// 	alert($('.contatos').height());

	 //        $('html, body').animate({
	 //            scrollTop: $('.contatos').height()
	 //        }, 1500);
	 //        return false;
	 //    });
	
	});	


	