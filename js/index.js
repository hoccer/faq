jQuery(function($) {
	
	$('.faq').click(function() {
		if($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$('.faq').removeClass('active');
			$(this).addClass('active');
		}
	});
	


	$('.faq').each(function() {
		if($(this).attr("class").match(/[\w-]*android[\w-]*/g)) {
			$(this).addClass('android');
		}
		if($(this).attr("class").match(/[\w-]*ios[\w-]*/g)) {
			$(this).addClass('ios');
		}
	});

	/* ==========================================================================
	   Code Highlight
	   ========================================================================== */

	function highlight() {
		$('pre code').each(function(i, e) {
		    hljs.highlightBlock(e)
		});
	}
	highlight();
	
	/* ==========================================================================
	   Responsive Videos
	   ========================================================================== */

	$('.post-content').fitVids();
	$('.post-video').fitVids();
	
});
