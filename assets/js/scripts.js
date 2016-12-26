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
			}, 1000, "min-content-height");
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

	$rpi_slider = $('#recent-portfolio .slickslider');
	if (0 < $rpi_slider.length) {
		$rpi_slider.slick({
			// accessibility: true, // type:boolean, default:true, Enables tabbing and arrow key navigation
			// adaptiveHeight: false, // type:boolean, default:false, Enables adaptive height for single slide horizontal carousels.
			autoplay: true, // type:boolean, default:false, Enables Autoplay
			autoplaySpeed: 5000, // type:int(ms), default:3000, Autoplay Speed in milliseconds
			// arrows: true, // type:boolean, default:true, Prev/Next Arrows
			// asNavFor: null, // type:string, default:null, Set the slider to be the navigation of other slider (Class or ID Name)
			// appendArrows: $(element), // type:string, default:$(element), Change where the navigation arrows are attached (Selector, htmlString, Array, Element, jQuery object)
			// appendDots: $(element), // type:string, default:$(element), Change where the navigation dots are attached (Selector, htmlString, Array, Element, jQuery object)
			// prevArrow: , // type:string (html|jQuery selector) | object (DOM node|jQuery object), default:&lt;button type="button" class="slick-prev"&gt;Previous&lt;/button&g&lt;button type="button" class="slick-prev"&gt;Previous&lt;/button&gt;t;, Allows you to select a node or customize the HTML for the "Previous" arrow.
			// nextArrow: , // type:string (html|jQuery selector) | object (DOM node|jQuery object), default:&lt;button type="button" class="slick-next"&gt;Next&lt;/button&g&lt;button type="button" class="slick-next"&gt;Next&lt;/button&gt;t;, Allows you to select a node or customize the HTML for the "Next" arrow.
			centerMode: true, // type:boolean, default:false, Enables centered view with partial prev/next slides. Use with odd numbered slidesToShow counts.
			centerPadding: '40px', // type:string, default:'50px', Side padding when in center mode (px or %)
			// cssEase: 'ease', // type:string, default:'ease', CSS3 Animation Easing
			// customPaging: n/a, // type:function, default:n/a, Custom paging templates. See source for use example.
			dots: true, // type:boolean, default:false, Show dot indicators
			// dotsClass: 'slick-dots', // type:string, default:'slick-dots', Class for slide indicator dots container
			// draggable: true, // type:boolean, default:true, Enable mouse dragging
			// fade: false, // type:boolean, default:false, Enable fade
			// focusOnSelect: false, // type:boolean, default:false, Enable focus on selected element (click)
			// easing: 'linear', // type:string, default:'linear', Add easing for jQuery animate. Use with easing libraries or default easing methods
			// edgeFriction: 0.15, // type:integer, default:0.15, Resistance when swiping edges of non-infinite carousels
			// infinite: false, // type:boolean, default:true, Infinite loop sliding
			initialSlide: 1, // type:integer, default:0, Slide to start on
			// lazyLoad: 'ondemand', // type:string, default:'ondemand', Set lazy loading technique. Accepts 'ondemand' or 'progressive' To use lazy loading, set a data-lazy attribute on your img tags and leave off the src
			mobileFirst: true, // type:boolean, default:false, Responsive settings use mobile first calculation
			// pauseOnFocus: true, // type:boolean, default:true, Pause Autoplay On Focus
			// pauseOnHover: true, // type:boolean, default:true, Pause Autoplay On Hover
			// pauseOnDotsHover: false, // type:boolean, default:false, Pause Autoplay when a dot is hovered
			// respondTo: 'window', // type:string, default:'window', Width that responsive object responds to. Can be 'window', 'slider' or 'min' (the smaller of the two)
			// responsive: none, // type:object, default:none, Object containing breakpoints and settings objects (see demo). Enables settings sets at given screen width. Set settings to "unslick" instead of an object to disable slick at a given breakpoint.
			responsive: [
				{
					breakpoint: 640, // large up
					settings: {
						centerPadding: '20%',
					}
				},
				{
					breakpoint: 1200, // large up
					settings: {
						centerPadding: '33%',
					}
				},
			],
			// rows: 1, // type:int, default:1, Setting this to more than 1 initializes grid mode. Use slidesPerRow to set how many slides should be in each row.
			// slide: '', // type:element, default:'', Element query to use as slide
			// slidesPerRow: 1, // type:int, default:1, With grid mode intialized via the rows option, this sets how many slides are in each grid row. dver
			slidesToShow: 1, // type:int, default:1, # of slides to show
			// slidesToScroll: 1, // type:int, default:1, # of slides to scroll
			// speed: 300, // type:int(ms), default:300, Slide/Fade animation speed
			// swipe: true, // type:boolean, default:true, Enable swiping
			// swipeToSlide: false, // type:boolean, default:false, Allow users to drag or swipe directly to a slide irrespective of slidesToScroll
			// touchMove: true, // type:boolean, default:true, Enable slide motion with touch
			// touchThreshold: 5, // type:int, default:5, To advance slides, the user must swipe a length of (1/touchThreshold) * the width of the slider
			// useCSS: true, // type:boolean, default:true, Enable/Disable CSS Transitions
			// useTransform: true, // type:boolean, default:true, Enable/Disable CSS Transforms
			// variableWidth: false, // type:boolean, default:false, Variable width slides
			// vertical: false, // type:boolean, default:false, Vertical slide mode
			// verticalSwiping: false, // type:boolean, default:false, Vertical swipe mode
			// rtl: false, // type:boolean, default:false, Change the slider's direction to become right-to-left
			// waitForAnimate: true, // type:boolean, default:true, Ignores requests to advance the slide while animating
			// zIndex: 1000, // type:number, default:1000, Set the zIndex values for slides, useful for IE9 and lower
		});

		// function dstd_set_content_height_w_slider() {
		// 	$content_top = $content.offset().top;
		// 	$footer_height = jQuery('.footer').outerHeight();
		// 	$content_min_height = jQuery(window).outerHeight() - ( $content_top + $footer_height );

		// 	$content.css('min-height', ($content_min_height + $('#recent-portfolio').outerHeight()) );
		// 	console.log(($('#recent-portfolio').outerHeight()));
		// }
		// // On before slide change
		// $rpi_slider.on('setPosition', function(event, slick){
		// 	dstd_set_content_height_w_slider();
		// });
	}

});