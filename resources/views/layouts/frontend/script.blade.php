	<!-- js -->
    <script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
		<!-- //js -->
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<!-- Custom-JavaScript-File-Links -->
		<!-- cart-js -->
		<script src="{{asset('frontend/js/minicart.min.js')}}"></script>
		<script>
			// Mini Cart
			paypal.minicart.render({
				action: '#'
			});

			if (~window.location.search.indexOf('reset=true')) {
				paypal.minicart.reset();
			}
		</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
		
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //cart-js -->
		<!-- script for responsive tabs -->
		<script src="{{asset('frontend/js/easy-responsive-tabs.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- //script for responsive tabs -->
		<!-- stats -->
		<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
		<!-- //stats -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function () {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->


		<!-- for bootstrap working -->
		<script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>


		<div id="v-w3layouts"></div>
		<script>(function (v, d, o, ai) { ai = d.createElement('script'); ai.defer = true; ai.async = true; ai.src = v.location.protocol + o; d.head.appendChild(ai); })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	
		<script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
		</script>
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<!-- Custom-JavaScript-File-Links -->
		<!-- cart-js -->
		<script src="{{asset('frontend/js/minicart.min.js')}}"></script>
		<script>
			// Mini Cart
			paypal.minicart.render({
				action: '#'
			});

			if (~window.location.search.indexOf('reset=true')) {
				paypal.minicart.reset();
			}
		</script>

		<!-- //cart-js -->
		<!---->
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [1000, 7000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			});//]]>  

		</script>
<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-149859901-1');
	</script>

	<script>
		window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
		ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
		ga('require', 'eventTracker');
		ga('require', 'outboundLinkTracker');
		ga('require', 'urlChangeTracker');
		ga('send', 'pageview');
	</script>
	<script async src='../../../../../../js/autotrack.js'></script>




	<script src="../../../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function () {
			if (typeof _bsa !== 'undefined' && _bsa) {
				// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149859901-1'></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-149859901-1');
	</script>

	<script>
		window.ga = window.ga || function () { (ga.q = ga.q || []).push(arguments) }; ga.l = +new Date;
		ga('create', 'UA-149859901-1', 'demo.w3layouts.com');
		ga('require', 'eventTracker');
		ga('require', 'outboundLinkTracker');
		ga('require', 'urlChangeTracker');
		ga('send', 'pageview');
	</script>
	<script async src='../../../../../../js/autotrack.js'></script>
		<!-- js -->
		<script type="text/javascript" src="{{asset('frontend/js/jquery-2.1.4.min.js')}}"></script>
		<!-- //js -->
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<!-- Custom-JavaScript-File-Links -->
		<!-- cart-js -->
		<script src="{{asset('frontend/js/minicart.min.js')}}"></script>
		<script>
			// Mini Cart
			paypal.minicart.render({
				action: '#'
			});

			if (~window.location.search.indexOf('reset=true')) {
				paypal.minicart.reset();
			}
		</script>

		<!-- //cart-js -->
		<!-- script for responsive tabs -->
		<script src="{{asset('frontend/js/easy-responsive-tabs.js')}}"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true,   // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- //script for responsive tabs -->
		<!-- stats -->
		<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
		<!-- //stats -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="{{asset('frontend/js/move-top.js')}}"></script>
		<script type="text/javascript" src="{{asset('frontend/js/jquery.easing.min.js')}}"></script>
		<script type="text/javascript">
			jQuery(document).ready(function ($) {
				$(".scroll").click(function (event) {
					event.preventDefault();
					$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
				});
			});
		</script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function () {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/

				$().UItoTop({ easingType: 'easeOutQuart' });

			});
		</script>
		<!-- //here ends scrolling icon -->


		<!-- for bootstrap working -->
		<script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>


		<div id="v-w3layouts"></div>
		<script>(function (v, d, o, ai) { ai = d.createElement('script'); ai.defer = true; ai.async = true; ai.src = v.location.protocol + o; d.head.appendChild(ai); })(window, document, '../../../../../../../a.vdo.ai/core/v-w3layouts/vdo.ai.js');</script>
	
		<script src="{{asset('frontend/js/responsiveslides.min.js')}}"></script>
		<script>
			// You can also use "$(window).load(function() {"
			$(function () {
				// Slideshow 4
				$("#slider3").responsiveSlides({
					auto: true,
					pager: true,
					nav: false,
					speed: 500,
					namespace: "callbacks",
					before: function () {
						$('.events').append("<li>before event fired.</li>");
					},
					after: function () {
						$('.events').append("<li>after event fired.</li>");
					}
				});
			});
		</script>
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<!-- Custom-JavaScript-File-Links -->
		<!-- cart-js -->
		<script src="{{asset('frontend/js/minicart.min.js')}}"></script>
		<script>
			// Mini Cart
			paypal.minicart.render({
				action: '#'
			});

			if (~window.location.search.indexOf('reset=true')) {
				paypal.minicart.reset();
			}
		</script>

		<!-- //cart-js -->
		<!---->
		<script type='text/javascript'>//<![CDATA[ 
			$(window).load(function () {
				$("#slider-range").slider({
					range: true,
					min: 0,
					max: 9000,
					values: [1000, 7000],
					slide: function (event, ui) {
						$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
					}
				});
				$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

			});//]]>  

		</script>



<!-- navber--->

<script src="{{asset('frontend/js/window.js')}}"></script>

<!-- Carousel -->
    <script src="{{asset('frontend/ap/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/ap/js/main.js')}}"></script>

<script>
    @if(Session::has('success'))
        toastr.success("{{ Session::get ('success')}}");
    @endif
</script>





