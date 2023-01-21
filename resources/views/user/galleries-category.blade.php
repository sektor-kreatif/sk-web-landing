<!DOCTYPE html>

<!--
	Template:   Tank - Creative Portfolio Showcase HTML Website Template
	Author:     Themetorium
	URL:        https://themetorium.net/
-->

<html lang="en">
	<head>

		<!-- Title -->
		<title>Porfolio Carousel Overlay | Tank - Creative Portfolio Showcase HTML Website Template by Themetorium</title>

		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="description" content="Download Tank - Creative Portfolio Showcase HTML Website Template that comes with rich features and well-commented code. Made by Themetorium.">
		<meta name="author" content="themetorium.net">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Favicon (http://www.favicon-generator.org/) -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!-- Google Analytics - Global site tag (gtag.js) -->
		<!-- Paste your Google Anaytics code here. -->

		<!-- Google fonts (https://www.google.com/fonts) -->
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <!-- Body font -->
		<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet"> <!-- Secondary/Alter font -->

		<!-- Libs and Plugins CSS -->
		<link rel="stylesheet" href="assets/vendor/normalize/normalize.min.css"> <!-- Normalize CSS (https://necolas.github.io/normalize.css/) -->
		<link rel="stylesheet" href="assets/vendor/fontawesome/css/fontawesome-all.min.css"> <!-- Font Icons CSS (https://fontawesome.com) Free version! -->
		<link rel="stylesheet" href="assets/vendor/swiper/css/swiper-bundle.min.css"> <!-- Swiper CSS (https://swiperjs.com/) -->
		<link rel="stylesheet" href="assets/vendor/lightgallery/css/lightgallery.min.css"> <!-- lightGallery CSS (http://sachinchoolur.github.io/lightGallery) -->

		<!-- Template master CSS -->
		<link rel="stylesheet" href="assets/css/helper.css">
		<link rel="stylesheet" href="assets/css/theme.css">

	</head>


	<!-- ===========
	///// Body /////
	================
	* Use class "tt-boxed" to enable page boxed layout globally (affects all elements containing class "tt-wrap").
	* Use class "tt-smooth-scroll" to enable page smooth scrolling.
	* Use class "tt-transition" to enable page transitions.
	* Use class "tt-magic-cursor" to enable magic cursor.
	-->
	<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">


		<!-- *************************************
		*********** Begin body inner *************
		************************************** -->
		<main id="body-inner">

			<!-- Begin page transition (do not remove!!!)
			=========================== -->
			<div id="page-transition">
				<div class="ptr-overlay"></div>
				<div class="ptr-preloader">
					<div class="ptr-prel-content">
						<!-- Hint: You may need to change the img height and opacity to match your logo type. You can do this from the "theme.css" file (find: ".ptr-prel-image"). -->
						<img src="assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
					</div> <!-- /.ptr-prel-content -->
				</div> <!-- /.ptr-preloader -->
			</div>
			<!-- End page transition -->

			<!-- Begin magic cursor
			======================== -->
			<div id="magic-cursor">
				<div id="ball"></div>
			</div>
			<!-- End magic cursor -->

			<!-- Begin noise background -->
			<div class="bg-noise"></div>
			<!-- End noise background -->


			<!-- *****************************************
			*********** Begin scroll container ***********
			****************************************** -->
			<div id="scroll-container">

				<!-- ===================
				///// Begin header /////
				========================
				* Use class "tt-header-fixed" to set header to fixed position.
				-->
				<header id="tt-header" class="tt-header-fixed">
					<div class="tt-header-inner"> <!-- add/remove class "tt-wrap" to enable/disable element boxed layout (class "tt-boxed" is required in <body> tag!). Note: additionally you can use prepared helper class "max-width-*" to add custom width to "tt-wrap". Example: "max-width-1500" (class "tt-wrap" is still required!). More info about helper classes can be found in the file "helper.css". -->

						<div class="tt-header-col">

							<!-- Begin logo
							================ -->
							<div class="tt-logo">
								<a href="index.html">
									<!-- Hint: You may need to change the img height to match your logo type. You can do this from the "theme.css" file (find: ".tt-logo img"). -->
									<img src="assets/img/logo-light.png" class="tt-logo-light magnetic-item" alt="Logo"> <!-- logo light -->
									<img src="assets/img/logo-dark.png" class="tt-logo-dark magnetic-item" alt="Logo"> <!-- logo dark -->
								</a>
							</div>
							<!-- End logo -->

						</div> <!-- /.tt-header-col -->

						<div class="tt-header-col">

							<!-- Begin overlay menu toggle button -->
							<div id="tt-ol-menu-toggle-btn-wrap">
								<div class="tt-ol-menu-toggle-btn-text">
									<span class="text-menu" data-hover="Open">Menu</span>
									<span class="text-close">Close</span>
								</div>
								<div class="tt-ol-menu-toggle-btn-holder">
									<a href="#" class="tt-ol-menu-toggle-btn magnetic-item"><span></span></a>
								</div>
							</div>
							<!-- End overlay menu toggle button -->

							<!-- Begin overlay menu
							========================
							* Use class "tt-ol-menu-center" to align menu to center.
							* Use class "tt-ol-menu-count" to enable menu counter.
							-->
							<nav class="tt-overlay-menu tt-ol-menu-center tt-ol-menu-count">
								<div class="tt-ol-menu-holder">
									<div class="tt-ol-menu-inner tt-wrap">
										<div class="tt-ol-menu-content">

											<!-- Begin menu list -->
											<ul class="tt-ol-menu-list">

												<!-- <li><a href="">Single Link</a></li> -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Home</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<li><a href="landing-page-1.html">Landing Page v.1</a></li>
															<li><a href="landing-page-2.html">Landing Page v.2</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap active">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Portfolio</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Portfolio List</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-list-classic.html">List Classic</a></li>
																		<li><a href="portfolio-list-overlay.html">List Overlay</a></li>
																		<li><a href="portfolio-list-compact.html">List Compact</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Portfolio Grid</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-grid-creative-1.html">Grid Creative v.1</a></li>
																		<li><a href="portfolio-grid-creative-2.html">Grid Creative v.2</a></li>
																		<li><a href="portfolio-grid-modern.html">Grid Modern</a></li>
																		<li><a href="portfolio-grid-classic.html">Grid Classic</a></li>
																		<li><a href="portfolio-grid-portrait-mode.html">Portrait Mode</a></li>
																		<li><a href="portfolio-one-column.html">One Column</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap active">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Slider &amp; Carousel</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="portfolio-fullscreen-slider.html">Fullscreen Slider</a></li>
																		<li class="active"><a href="portfolio-carousel-overlay.html">Carousel Overlay</a></li>
																		<li><a href="portfolio-carousel-center.html">Carousel Center</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<li><a href="portfolio-interactive.html">Interactive</a></li>
															<li><a href="portfolio-interactive-compact.html">Interactive Compact</a></li>
															<li><a href="elements-classic-menu.html">Classic Menu</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">About</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<li><a href="about-us.html">About Us</a></li>
															<li><a href="about-me.html">About Me</a></li>

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Blog</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Blog List</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="blog-interactive.html">Interactive List</a></li>
																		<li><a href="blog-list.html">Compact List</a></li>
																		<li><a href="blog-classic.html">Classic List</a></li>
																		<li><a href="blog-classic-sidebar.html">Classic Sidebar</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Blog Post</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="blog-post.html">Single Post</a></li>
																		<li><a href="blog-post-classic-sidebar.html">Classic Sidebar</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<!-- Begin submenu (submenu master)
												==================================== -->
												<li class="tt-ol-submenu-wrap">
													<div class="tt-ol-submenu-trigger">
														<a href="#">Shop</a>
														<div class="tt-ol-submenu-caret-wrap">
															<div class="tt-ol-submenu-caret magnetic-item"></div>
														</div> <!-- /.tt-ol-submenu-caret-wrap -->
													</div> <!-- /.tt-ol-submenu-trigger -->
													<div class="tt-ol-submenu">
														<ul class="tt-ol-submenu-list">

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Product Lists</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="shop-list.html">Sliding Sidebar</a></li>
																		<li><a href="shop-list-classic.html">Classic Sidebar</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Product Pages</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="shop-single.html">Product Page</a></li>
																		<li><a href="shop-single-simple.html">Simple Product Page</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">Product Ordering</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="shop-cart.html">Shopping Cart</a></li>
																		<li><a href="shop-checkout.html">Checkout</a></li>
																		<li><a href="shop-order-details.html">Order Details</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

															<!-- Begin submenu
															=================== -->
															<li class="tt-ol-submenu-wrap">
																<div class="tt-ol-submenu-trigger">
																	<a href="#" class="tt-ol-submenu-link">More Pages</a>
																	<div class="tt-ol-submenu-caret-wrap">
																		<div class="tt-ol-submenu-caret magnetic-item"></div>
																	</div> <!-- /.tt-ol-submenu-caret-wrap -->
																</div> <!-- /.tt-ol-submenu-trigger -->
																<div class="tt-ol-submenu">
																	<ul class="tt-ol-submenu-list">

																		<li><a href="shop-wishlist.html">Wishlist</a></li>
																		<li><a href="shop-login.html">Login Page</a></li>
																		<li><a href="shop-register.html">Register Account</a></li>
																		<li><a href="shop-reset-password.html">Reset Password</a></li>

																	</ul> <!-- /.tt-ol-submenu-list -->
																</div> <!-- /.tt-ol-submenu -->
															</li>
															<!-- End submenu -->

														</ul> <!-- /.tt-ol-submenu-list -->
													</div> <!-- /.tt-ol-submenu -->
												</li>
												<!-- End submenu (sub-master) -->

												<li><a href="contact.html">Contact</a></li>

											</ul>
											<!-- End menu list -->

										</div> <!-- /.tt-ol-menu-content -->
									</div> <!-- /.tt-ol-menu-inner -->
								</div> <!-- /.tt-ol-menu-holder -->

								<!-- Begin noise background -->
								<div class="bg-noise"></div>
								<!-- End noise background -->

							</nav>
							<!-- End overlay menu -->

						</div> <!-- /.header-col -->
					</div> <!-- /.header-inner -->
				</header>
				<!-- End header -->


				<!-- *************************************
				*********** Begin content wrap ***********
				************************************** -->
				<div id="content-wrap">


					<!-- *************************************
					*********** Begin page content ***********
					************************************** -->
					<div id="page-content">


						<!-- ======================================================
						///// Begin portfolio carousel (full screen carousel) /////
						===========================================================
						* Use class "pc-scale-down" to enable scale down animation on click (data-simulate-touch attribute must be enabled).
						* Use class "cursor-drag-mouse-down" to enable cursor drag style on mouse down (data-simulate-touch attribute must be enabled).
						* Use class "pci-hover" to enable item hover effect.
						* Use class "pci-caption-center" to set caption position.
						* Use class "pci-caption-stroke" to enable caption title stroke style.
						* Available data attributes:
								data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
								data-mousewheel="true"................(true/false)
								data-keyboard="true"..................(true/false)
								data-simulate-touch="true"............(true/false)
								data-grab-cursor="true"...............(true/false)
								data-pagination-type="fraction".......(bullets/fraction/progressbar)
						-->
						<div class="tt-portfolio-carousel pci-hover pci-caption-stroke cursor-drag-mouse-down pc-scale-down" data-simulate-touch="true" data-mousewheel="true" data-keyboard="true" data-grab-cursor="true" data-pagination-type="fraction">

							<!-- Begin swiper container -->
							<div class="swiper">

								<!-- Begin swiper wrapper (required) -->
								<div class="swiper-wrapper">

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-1.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-1.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Victorian<br class="hide-from-sm"> Girls</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">People</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Victorian<br class="hide-from-sm"> Girls</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">People</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-2.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-2.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Smithy</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Creative</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Smithy</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Creative</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-3.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<video class="tt-pci-video" loop muted preload="metadata" poster="assets/vids/fashion-week.jpg">
													<source src="assets/vids/fashion-week.mp4" type="video/mp4">
													<source src="assets/vids/fashion-week.webm" type="video/webm">
												</video>
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Fashion<br class="hide-from-sm"> Week</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">People</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Fashion<br class="hide-from-sm"> Week</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">People</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-4.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-3.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Mystery<br class="hide-from-sm"> Forest</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Nature</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Mystery<br class="hide-from-sm"> Forest</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Nature</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-5.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-4.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Red<br class="hide-from-sm"> Package</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Branding</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Red<br class="hide-from-sm"> Package</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Branding</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-6.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-5.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Studio<br class="hide-from-sm"> Shoot</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">People</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Studio<br class="hide-from-sm"> Shoot</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">People</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-7.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-6.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Breaking<br class="hide-from-sm"> Wave</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Nature</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Breaking<br class="hide-from-sm"> Wave</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Nature</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-8.html" class="tt-portfolio-carousel-item pci-image-is-light" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-4">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-7.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Wall<br class="hide-from-sm"> Lamp</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Branding</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Wall<br class="hide-from-sm"> Lamp</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Branding</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

									<!-- Begin swiper slide
									======================== -->
									<div class="swiper-slide">

										<!-- Begin portfolio carousel item
										===================================
										* Use class "pci-image-is-light" if needed, it makes the caption visible better (useful if you use light image). No effect on smaller screens!
										-->
										<a href="single-project-9.html" class="tt-portfolio-carousel-item" data-cursor="View<br>Project">

											<!-- Use class "cover-opacity-*" to set an image overlay if needed. For example "cover-opacity-2". More info in the file "helper.css". -->
											<figure class="tt-pci-image-wrap cover-opacity-2">
												<img class="tt-pci-image swiper-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/portfolio/carousel/portf-carousel-8.jpg" alt="Image">
											</figure> <!-- /.tt-pci-image-wrap -->

											<div class="tt-pci-caption-front">
												<div class="tt-pci-caption">
													<div class="tt-pci-caption-inner">
														<h2 class="tt-pci-title">Elegant<br class="hide-from-sm"> Stoves</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
														<div class="tt-pci-categories">
															<div class="tt-pci-category">Creative</div>
															<!-- <div class="tt-pci-category">Varia</div> -->
														</div> <!-- /.tt-pci-categories -->
													</div> <!-- /.tt-pci-caption-inner -->
												</div> <!-- /.tt-pci-caption -->
											</div> <!-- /.tt-pci-caption-front -->

											<div class="tt-pci-caption tt-pci-caption-back">
												<div class="tt-pci-caption-inner">
													<h2 class="tt-pci-title">Elegant<br class="hide-from-sm"> Stoves</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
													<div class="tt-pci-categories">
														<div class="tt-pci-category">Creative</div>
														<!-- <div class="tt-pci-category">Varia</div> -->
													</div> <!-- /.tt-pci-categories -->
												</div> <!-- /.tt-pci-caption-inner -->
											</div> <!-- /.tt-pci-caption -->
										</a>
										<!-- End portfolio carousel item -->

									</div>
									<!-- End swiper slide -->

								</div>
								<!-- End swiper wrapper -->

							</div>
							<!-- End swiper container -->

							<!-- Begin portfolio carousel navigation
							========================================= -->
							<div class="tt-pc-navigation tt-swiper-nav">
								<div class="tt-pc-nav-prev">
									<div class="tt-pc-arrow tt-pc-arrow-prev magnetic-item"></div>
								</div>
								<div class="tt-pc-nav-next">
									<div class="tt-pc-arrow tt-pc-arrow-next magnetic-item"></div>
								</div>
								<div class="tt-pc-pagination"></div>
							</div>
							<!-- End portfolio carousel navigation -->

						</div>
						<!-- End portfolio carousel -->


					</div>
					<!-- End page content -->


					<!-- ======================
					///// Begin tt-footer /////
					=========================== -->
					<footer id="tt-footer" class="footer-absolute">
						<div class="tt-footer-inner">

							<!-- Begin footer column
							========================= -->
							<div class="footer-col tt-align-center-left">
								<div class="footer-col-inner">

									<!-- You can use whatever button or link here -->
									<div class="tt-btn tt-btn-link">
										<a href="contact.html" data-hover="Get in Touch">Get in Touch</a>
									</div>

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

							<!-- Begin footer column
							========================= -->
							<div class="footer-col tt-align-center-right">
								<div class="footer-col-inner">

									<div class="footer-social">
										<div class="footer-social-text"><span>Follow</span><i class="fas fa-share-alt"></i></div>
										<div class="social-buttons">
											<ul>
												<li><a href="https://www.facebook.com/themetorium" class="magnetic-item" target="_blank" rel="noopener">Fb.</a></li>
												<li><a href="https://twitter.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Tw.</a></li>
												<li><a href="https://www.youtube.com/" class="magnetic-item" target="_blank" rel="noopener">Yt.</a></li>
												<li><a href="https://dribbble.com/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Dr.</a></li>
												<li><a href="https://www.behance.net/Themetorium" class="magnetic-item" target="_blank" rel="noopener">Be.</a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div> <!-- /.footer-social -->

								</div> <!-- /.footer-col-inner -->
							</div>
							<!-- Begin footer column -->

						</div> <!-- /.tt-section-inner -->
					</footer>
					<!-- End tt-footer -->


				</div>
				<!-- End content wrap -->

			</div>
			<!-- End scroll container -->


		</main>
		<!-- End body inner -->




		<!-- ====================
		///// Scripts below /////
		===================== -->

		<!-- Core JS -->
		<script src="assets/vendor/jquery/jquery.min.js"></script> <!-- jquery JS (https://jquery.com) -->

		<!-- Libs and Plugins JS -->
		<script src="assets/vendor/gsap/gsap.min.js"></script> <!-- GSAP JS (https://greensock.com/gsap/) -->
		<script src="assets/vendor/gsap/ScrollToPlugin.min.js"></script> <!-- GSAP ScrollToPlugin JS (https://greensock.com/scrolltoplugin/) -->
		<script src="assets/vendor/gsap/ScrollTrigger.min.js"></script> <!-- GSAP ScrollTrigger JS (https://greensock.com/scrolltrigger/) -->

		<script src="assets/vendor/smooth-scrollbar.js"></script> <!-- Smooth Scrollbar JS (https://github.com/idiotWu/smooth-scrollbar/) -->
		<script src="assets/vendor/swiper/js/swiper-bundle.min.js"></script> <!-- Swiper JS (https://swiperjs.com/) -->
		<script src="assets/vendor/isotope/imagesloaded.pkgd.min.js"></script> <!-- imagesloaded JS (more info: https://imagesloaded.desandro.com/) -->
		<script src="assets/vendor/isotope/isotope.pkgd.min.js"></script> <!-- Isotope JS (http://isotope.metafizzy.co) -->
		<script src="assets/vendor/isotope/packery-mode.pkgd.min.js"></script> <!-- Isotope Packery Mode JS (https://isotope.metafizzy.co/layout-modes/packery.html) -->
		<script src="assets/vendor/lightgallery/js/lightgallery-all.min.js"></script> <!-- lightGallery Plugins JS (http://sachinchoolur.github.io/lightGallery) -->
		<script src="assets/vendor/jquery.mousewheel.min.js"></script> <!-- A jQuery plugin that adds cross browser mouse wheel support (https://github.com/jquery/jquery-mousewheel) -->

		<!-- Theme master JS -->
		<script src="assets/js/theme.js"></script>



	</body>

</html>
