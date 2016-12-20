jQuery(document).ready(function($) {

	// Wait for resize event to finish
	var waitForFinalEvent = (function () {
		var timers = {};
		return function (callback, ms, uniqueId) {
			if (!uniqueId) {
				uniqueId = "Don't call this twice without a uniqueId";
			}
			if (timers[uniqueId]) {
				clearTimeout (timers[uniqueId]);
			}
			timers[uniqueId] = setTimeout(callback, ms);
		};
	})();

	/* Make sure footer is always on the bottom by forcing the #content height */
	$content = jQuery('#content');

	if (0 < $content.length) {

		function dstd_set_content_height() {
			$content_top = $content.offset().top;
			$footer_height = jQuery('.footer').outerHeight();
			$content_min_height = jQuery(window).outerHeight() - ( $content_top + $footer_height );

			$content.css('min-height', $content_min_height );
		}
		dstd_set_content_height();

		// Now, after the window is done resizing, set the contents min-height again
		jQuery(window).resize(function () {
			waitForFinalEvent(function(){
				dstd_set_content_height();
			}, 500, "min-content-height");
		});
	}

	/* Smooth Scrolling */
	jQuery('a[href*="#"]:not([href^="#panel"]):not([class*="label"])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {

			var target = jQuery(this.hash);
			target = target.length ? target : jQuery('[name=\"' + this.hash.slice(1) +'\"]');
			if (target.length) {
				jQuery('html,body').animate({
					scrollTop: target.offset().top
				}, 1000);
			return false;
			}
		}
	});

});