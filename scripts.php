	<script type="text/javascript">
		jQuery(document).ready(function($) {


			$('.primary-desktop .header-logo-container, .primary-mobile .header-logo-container').attr('href', 'http://jevelin.shufflehound.com/hello/');

			function jevelin_settings() {
				if ($(window).width() < 600) {
					$('.sh-settings').hide();
				} else {
					$('.sh-settings').show();
				}
			}
			jevelin_settings();

			$(window).resize(function() {
				clearTimeout(window.resizedFinished2);
				window.resizedFinished2 = setTimeout(function() {
					jevelin_settings();
				}, 500);
			});

			$('.sh-settings-hide').on('click', function() {
				$('.sh-settings').toggleClass('sh-settings-active');
			});

			$(document).keyup(function(e) {
				if (e.keyCode == 27) {
					if ($('.sh-settings').hasClass('sh-settings-active')) {
						$('.sh-settings').removeClass('sh-settings-active');
					}
				}
			});

			jQuery('.form-submit #submit').on('click', function(event) {
				alert('This feature is disabled in our demo site. Sorry for any inconvenience.');
				event.preventDefault()
				event.stopPropagation()
				return false;
			});

		});
	</script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			"use strict";

			$(".sh-page-loader").fadeOut(500);
			$("body").css('overflow-y', 'visible').css('overflow-x', 'hidden');

			$(window).bind('beforeunload', function(e) {
				$('.sh-page-loader').fadeIn();
			});

		});
	</script>


	<style>
		.sh-page-loader {
			background-color: rgba(255, 255, 255, 0.98) !important;
		}
	</style>


	<style type="text/css">
		.sh-side-options {
			position: fixed;
			top: 0;
			bottom: 0;
			right: 0;
			z-index: 12345678902;
			transition: 0.3s all ease;
			transition: 0.2s all;
			padding: 0 0;
			width: 420px;
			transform: translateX(420px);
		}

		.sh-side-options.open {
			transform: translateX(0px);
			box-shadow: 0 0px 39px 10px rgba(0, 0, 0, 0.2);
		}

		.sh-side-options-container {
			position: absolute;
			top: 216px;
			left: -75px;
			width: 60px;
			background-color: rgba(255, 255, 2555, 1);
			border-radius: 5px;
			margin-right: 15px;
			box-shadow: -10px 0px 20px 2px rgba(0, 0, 0, .06);
		}


		.sh-side-options.sh-side-options-pages .sh-side-options-container {
			top: 150px;
		}



		.sh-side-options-item {
			display: block;
			text-align: center;
			margin: 0px;
			transition: 0.3s all ease-in-out;
			position: relative;
			padding: 7px;
			cursor: pointer;
		}

		.sh-side-options-item:not(:last-child) {
			border-bottom: 1px solid #f1f3fc;
		}

		.sh-side-options-item-container {
			border-radius: 4px;
			padding: 8px 0;
		}

		.sh-side-options-item:hover .sh-side-options-item-container,
		.sh-side-options-item:focus .sh-side-options-item-container,
		.sh-side-options.open .sh-side-options-item-trigger-demos .sh-side-options-item-container {
			background-color: #f3f5fd;
		}




		.sh-side-options-item i {
			font-size: 22px;
		}

		.sh-side-options-item:not(:hover):not(:focus) {
			color: #9396a5 !important;
		}

		.sh-side-options-item:hover .sh-side-options-hover {
			opacity: 1;
			transform: translateX(-97%);
		}

		.sh-side-options-hover {
			position: absolute;
			background-color: #ffffff;
			color: #32343d;
			padding: 20px 26px;
			transform: translateX(-70%);
			left: 0px;
			top: 0;
			bottom: 0;
			opacity: 0;
			transition: 0.2s all ease-in-out;
			z-index: -100;
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
			font-size: 13px;
			box-shadow: 0px 0px 20px 2px rgba(0, 0, 0, 0.08);
		}

		.sh-side-options-hover span {
			padding: 0px 3px;
		}

		@media (max-width: 700px) {

			.sh-side-options {
				width: 52px;
			}

			.sh-side-options-item {
				padding: 10px 0;
			}

			.sh-side-options-item i {
				font-size: 16px;
			}

		}

		@media (max-width: 600px) {

			.sh-side-options {
				display: none;
			}

		}

		@media (max-height: 500px) {
			.sh-side-options {
				top: 120px !important;
			}
		}


		.sh-side-options-item i {
			color: #9396a5 !important;
		}

		.sh-side-options.open .sh-side-options-item-trigger-demos i,
		.sh-side-options-item:hover i,
		.sh-side-options-item:focus i {
			color: #294cff !important;
		}



		/*
** Side Demos
*/
		.sh-side-demos-container {
			top: 0;
			left: 0;
			right: -17px;
			bottom: 0;
			position: absolute;
			overflow-y: scroll;
			background-color: #fff;
			background-repeat: no-repeat;
			background-position: right top;
			padding: 22px;
		}

		body.admin-bar .sh-side-demos-container {
			top: 32px;
		}


		/* Demos Text */
		.sh-side-demos-intro {
			text-align: center;
		}

		.sh-side-demos-intro-title {
			font-size: 24px;
			font-weight: 300;
			margin-top: 25px;
			margin-bottom: 15px;
		}

		.sh-side-demos-intro-title img {
			height: 24px;
			top: -6px;
			position: relative;
		}

		.sh-side-demos-intro-descr {
			max-width: 250px;
			margin: 0 auto;
			display: table;
			color: #838794;
		}



		/* Demos Close Button */
		.sh-side-demos-container-close {
			position: absolute;
			top: 22px;
			right: 22px;
			cursor: pointer;
		}

		.sh-side-demos-container-close i {
			color: #c5c5c5;
			font-size: 18px;
			transition: 0.3s all ease;
		}

		.sh-side-demos-container-close:hover i,
		.sh-side-demos-container-close:focus i {
			color: #7f7f7f;
		}


		/* Demo Items */
		.sh-side-demos-loop-container {
			position: relative;
			margin: 0 -10px;
			margin-top: 28px;
		}

		.sh-side-demos-item {
			display: inline-block;
			position: relative;
			margin-right: -4px;
			margin-bottom: 25px;
			width: 50%;
			padding: 0 10px;
			text-align: center;
			transition: .3s all ease;
			top: 0;
		}

		.sh-side-demos-item:hover {
			top: -4px;
		}

		.sh-side-demos-item .sh-image-lazy-loading {
			border-radius: 3px;
			box-shadow: 0 2px 20px 1px rgba(0, 0, 0, .1);
		}

		.sh-side-demos-item img {
			border-radius: 3px;
		}

		.sh-side-demos-item-name {
			font-size: 12px;
			color: #32343d;
			font-weight: 600;
			padding-top: 10px;
		}

		.sh-side-demos-item-tag {
			position: absolute !important;
			width: auto !important;
			height: auto !important;
			top: 4px;
			left: 6px;
			background-color: #ff5944;
			color: #fff;
			font-size: 9px;
			font-weight: 600;
			display: block;
			padding: 1px 9px;
			text-transform: capitalize;
			border-radius: 100px;
		}
	</style>

	<script type="text/javascript">
		jQuery(document).ready(function($) {

			$('.sh-side-options-item-trigger-demos').on('click', function() {
				$('.sh-side-options').css('transition', '0.3s all ease-in-out');

				if ($('.sh-side-options').hasClass('open')) {
					$('.sh-side-options').removeClass('open');
				} else {
					$('.sh-side-options .sh-side-demos-image').each(function() {
						$(this).attr('src', $(this).attr('data-src'));
					});
					$('.sh-side-options').addClass('open');
				}
			});

			$('.sh-side-demos-container-close').on('click', function() {
				$('.sh-side-options').css('transition', '0.3s all ease-in-out');
				$('.sh-side-options').removeClass('open');
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			"use strict";
		});
	</script>

	<script type="text/javascript" defer src="http://cdn.jevelin.shufflehound.com/blog1/wp-content/cache/autoptimize/11/js/autoptimize_0bec9b085ac5b2b19158f63a1dfa4c74.js"></script>