
<!doctype html>
<html lang="en-gb" class="no-js">

<head>
	<title>
		@yield('title')
	</title>
	<!-- ***** meta ***** -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
	<meta name="keywords" content="" />
	<meta name="description" content="Ücretsiz Firma Rehberi" />

	<!-- ***** Favicons ***** -->	
	<link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}">
	<link rel="apple-touch-icon" href="{{ asset('assets/images/favicons/apple-touch-icon-57x57.png') }}">
	<link rel="apple-touch-icon" sizes="44x72" href="{{ asset('assets/images/favicons/apple-touch-icon-72x72.png') }}">
	<link rel="apple-touch-icon" sizes="70x114" href="{{ asset('assets/images/favicons/apple-touch-icon-114x114.png') }}">

	<!-- ***** Google Fonts ***** -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- ***** Addons Stylesheet ***** -->
	{{ HTML::style('assets/css/rev-settings.css'); }}
	{{ HTML::style('assets/css/bootstrap.css'); }}
	{{ HTML::style('assets/css/switcher.css'); }}
	{{ HTML::style('assets/css/icons-styles.css'); }}
	{{ HTML::style('assets/css/template.css'); }}
	{{ HTML::style('assets/css/lynch.css'); }}
	{{ HTML::style('assets/css/responsive-devices.css'); }}
	{{ HTML::style('assets/css/updates.css'); }}
	{{ HTML::style('assets/css/custom.css'); }}
	@yield('styles')
	
	<!-- JS 
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->

	{{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js') }}
	<script>window.jQuery || document.write('<script src="assets/js/jquery.min.js">\x3C/script>')</script>
</head>
<body class="">
<!-- start preloader -->
<!--<div id="preloader">
    <div id="status">&nbsp;</div>
</div>-->
<!-- end preloader -->

<div id="page-wrapper">
<header id="header" class="header1 header2 fillbg nav-down">
		<div id="panel">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<ul class="info-left reset-list">
							<li><span class="icon-location"></span><p>102580 Izmir Caddesi Monamo Sokak - Kızılay Ankara</p></li>
							<li><span class="icon-phone"></span><p>(850) 30 222 30</p></li>
							<li><span class="icon-envelope2"></span><p>info@firmabu.com</p></li>
							<li><span class="icon-skype"></span><p>/firmaBU</p></li>
						</ul>
					</div>
					<div class="col-sm-3">
						<ul class="info-right reset-list">
							<li class="ico-twitter animation">
								<a href="#">
									<span class="icon-twitter"></span>
								</a>
							</li>
							<li class="ico-facebook animation">
								<a href="#">
									<span class="icon-facebook"></span>
								</a>
							</li>
							<li class="ico-pinterest animation">
								<a href="#">
									<span class="icon-pinterest"></span>
								</a>
							</li>
							<li class="ico-instagram animation">
								<a href="#">
									<span class="icon-instagram"></span>
								</a>
							</li>
							<!--<li class="ico-dribbble animation">
								<a href="#">
									<span class="icon-dribbble"></span>
								</a>
							</li>-->
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="slide">
			<div class="container relative">
				<a href="#" class="btn-slide"><span class="icon-angle-up"></span></a>
			</div>
		</div><!-- end sliding panel -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="relative onlyh3">
						<div class="logo-container hasinfocard">
							<h1 id="logo">
								<a href="index.html">
									<div class="logo-default">
										<img src="{{ asset('assets/images-fb/firmabu-logo.png') }}" alt="Firma BU" style="margin-top: -20px;" class="img-responsive">
									</div>
									<div class="logo-white">
										<img src="assets/images/logo-white.png" alt="Firma Bu" title="" class="img-responsive">
									</div>
								</a>
							</h1><!-- end logo -->
							<div id="infocard">
								<div class="row">
									<div class="col-sm-5 center">
										<img src="{{ asset('') }}" alt="" class="mbottom20">
										<h2>Firma BU, Ücretsiz Firma Rehberi</h2>
									</div>
									<div class="col-sm-7">
										<p><span class="icon-phone"></span> 0 (850) 30 222 30</p>
										<p class="mbottom10"><span class="icon-envelope2 mright5"></span>Email: info@firmabu.com</p>
										<p><a href="">firmabu.com</a></p>
										<p class="mbottom30">102580 Izmir Caddesi Monamo Sokak - Kızılay Ankara</p>
										<ul class="info-social center reset-list">
											<li class="width100 mbottom10">
												<p>Sosyal Medya</p>
											</li>
											<li>
												<a href="#">	
													<span class="icon-facebook"></span>
												</a>
											</li>
											<li>
												<a href="#">	
													<span class="icon-twitter"></span>
												</a>
											</li>
											<li>
												<a href="#">	
													<span class="icon-dribbble"></span>
												</a>
											</li>
											<li>
												<a href="#">
													<span class="icon-pinterest"></span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- end infocard -->
						</div><!-- end logo-container -->
						<div id="cart">
							<span class="icon-cart">
							</span>
							<div class="cart-container">
								<ul class="reset-list">
									<li>
										<div class="cart-item">
											<img src="assets/images/cart-item.jpg" alt="">
											<h4>At vero eos</h4>
											<span class="tcolor">$45.00</span>
											<a href="#" class="remove-item icon-close"></a>
										</div>
									</li>
									<li>
										<!--<div class="cart-item">
											<img src="assets/mages/cart-item2.jpg" alt="">
											<h4>Et quidem</h4>
											<span class="tcolor">$85.00</span>
											<a href="#" class="remove-item icon-close"></a>
										</div>-->
									</li>
									<li>
										<div class="cart-item">
											<img src="assets/images/cart-item3.jpg" alt="">
											<h4>Temporibus</h4>
											<span class="tcolor">$45.00</span>
											<a href="#" class="remove-item icon-close"></a>
										</div>
									</li>
									<li class="total clearfix">
										<p class="fleft">Total</p>
										<p class="fright">$175.00</p>
									</li>
									<li class="checkout">
										<a href="#">Checkout</a>
									</li>
								</ul>
							</div>
						</div><!-- end cart -->
						<div class="searchPanel">
							<span class="icon-search3"></span>
							<form action="http://www.google.com/search" method="get" onsubmit="Gsitesearch(this)" target="_blank" class="searchForm">
								<input name="qfront" type="text" placeholder="sadece yazın ..." class="searchBox">
							</form>
						</div><!-- end searchPanel -->
						<div id="main-menu">
							<ul>
							    <li class="has-sub active">
							    	<a href="{{ URL::to('/') }}">Anasayfa</a>
							   		<!--
							   		<ul>
							   			<li>
							   			 	<a href="home-layout-1.html">Home Layout 1</a>
							   			</li>
							   			<li class="active">
							   			 	<a href="home-layout-2.html">Home Layout 2</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-3.html">Home Layout 3</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-4.html">Home Layout 4</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-5.html">Home Layout 5</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-6.html">Home Layout 6</a>
							   			</li>
							   		</ul>
							   		<ul class="second-submenu">
							   			<li>
							   			 	<a href="home-layout-7.html">Home Layout 7</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-8.html">Home Layout 8</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-9.html">Home Layout 9</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-10.html">Home Layout 10</a>
							   			</li>
							   			<li>
							   			 	<a href="one-page.html">One Page</a>
							   			</li>
							   			<li>
							   			 	<a href="full-page.html">Full Page</a>
							   			</li>
							   		</ul>
							   	-->
							    </li>
							    <li class="has-sub">
									<a href="#">Firma Ekle</a>
									<span class="new-item">Hemen</span>
									<ul>
										<li>
											<a href="{{ URL::to('Kayit') }}">Kayıt Ol</a>
										</li>
										<!--
										<li>
											<a href="boxed-slideshow.html">Boxed Slider</a>
										</li>
										<li>
											<a href="video-bg.html">Video Background</a>
										</li>
									-->
									</ul>
								</li>
							    <li class="has-sub">
							        <a href="#">Firmalar</a>
							        <!--<span class="new-item">New</span>-->
							        <ul>
							        	<li>
							         	    <a href="portfolio.html">Portfolio</a>
							            </li>
							            <li>
							         	    <a href="portfolio-simple.html">Portfolio Simple Layout</a>
							         	    <span class="new-item2">New</span>
							            </li>
							            <li>
											<a href="portfolio-full-width.html">Portfolio - Full Width</a>
										</li>
							            <li>
							         	    <a href="single-project.html">Single Project</a>
							            </li>
							        </ul>
							    </li>
							    <li>
								    <a href="#">Kategoriler</a>
								    <!--<span class="new-item">New</span>-->
								    <ul>
								   		<li>
										    <a href="blog.html">Blog Style 1</a>
										</li>
						                <li>
										    <a href="blog-2.html">Blog Style 2</a>
										</li>
										<li>
										    <a href="blog-3.html">Blog Style 3</a>
										</li>
										<li>
										    <a href="blog-4.html">Blog Style 4</a>
										</li>
										<li>
											<a href="blog-timeline.html">Timeline Blog</a>
										</li>
										<li>
											<a href="blog-masonry.html">Masonry Blog</a>
											<span class="new-item2">New</span>
										</li>
										<li>
											<a href="blog-masonry-full.html">Masonry Blog Full</a>
											<span class="new-item2">New</span>
										</li>
										<li>
										    <a href="blog-post.html">Blog Post Style 1</a>
										</li>
										<li>
										    <a href="blog-post-2.html">Blog Post Style 2</a>
										</li>
						            </ul>
							    </li>
							    <li class="has-sub">
							   	    <a href="#">Derecelendirme</a>
							   	    <span class="new-item">Puan Ver !</span>
							   	    <ul>
							   	   		<li> 
						  		   	   		<a href="full-width-page.html">Full Width</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="left-sidebar-page.html">Left Sidebar</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="right-sidebar-page.html">Right Sidebar</a>
						  		   	    </li>
							   	   		<li> 
						  		   	   		<a href="faq.html">FAQ</a>
						  		   	    </li>
							   	        <li>
						  		   	   	    <a href="testimonials.html">Testimonials</a>
						  		   	    </li>
							   	        <li> 
						  		   	   		<a href="features.html">Features</a>
						  		   	    </li>
							   	   	    <li> 
						  		   	   		<a href="text-page.html">Text Page</a>
						  		   	    </li>
						  		   	    <li> 
											<a href="our-office.html">Our Office</a>
										</li>
										<li> 
											<a href="about-us.html">About us</a>
										</li>
										<li> 
											<a href="timeline-page.html">Timeline Page</a>
										</li>
						  		   	</ul>
						  		   	<ul class="second-submenu">
						  		   		<li>
						  		   			<a href="clients.html">Clients</a>
						  		   		</li>
							   	   	    <li> 
						  		   	   	    <a href="team.html">Our Team</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="team-member.html">Team Member</a>
						  		   	    </li>
							   	        <li>
							   	       		<a href="pricing.html">Pricing</a>
							   	        </li>
							   	        <li>
							   	       	    <a href="404.html">404 Error Page</a>
							   	        </li>
							   	        <li> 
						  		   	   	    <a href="coming-soon.html">Coming Soon</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   	    <a href="maintenance-mode.html">Maintenance Mode</a>
						  		   	    </li>
						  		   	    <li>
									   	    <a href="contact.html">Contact Page</a>
									    </li>
									    <li> 
											<a href="sitemap.html">Sitemap</a>
										</li>
										<li> 
											<a href="product-launch.html">Product Launch</a>
										</li>
							   	    </ul>
							    </li>
							 
							    <li>
							   	    <a href="{{ URL::to('Giris') }}">Giriş</a>
							   	    <!--<span class="new-item">?</span>
							   	    <ul>
							   	        <li>
							   	   	   	    <a href="typography.html">Typography</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="page-header.html">Page Header</a>
							   	   	   	    <span class="new-item2">New</span>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="gallery.html">Gallery</a>
							   	   	    </li>
							   	   	    <li>
											<a href="services-box.html">Services Box</a>
										</li>
							   	   	    <li>
							   	   	   	    <a href="buttons.html">Buttons</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="progress-bars.html">Progress Bars &amp; Skill Meter</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="tabs.html">Tabs</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="google-maps.html">Google Maps</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="accordion.html">Accordion &amp; Toggles</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="callout-box.html">Custom Callout Box</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="laptop-slider.html">Laptop Slider</a>
							   	   	    </li>
							   	    </ul>-->
							   </li>
							</ul>
						</div><!-- end main menu -->
						<div id="dl-menu" class="dl-menuwrapper">
							<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							    <li class="has-sub active">
							    	<a href="index.html">Home</a>
							   		<ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							   			<li>
							   			 	<a href="home-layout-1.html">Home Layout 1</a>
							   			</li>
							   			<li class="active">
							   			 	<a href="home-layout-2.html">Home Layout 2</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-3.html">Home Layout 3</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-4.html">Home Layout 4</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-5.html">Home Layout 5</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-6.html">Home Layout 6</a>
							   			</li>
							   		</ul>
							   		<ul class="second-submenu dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							   			<li>
							   			 	<a href="home-layout-7.html">Home Layout 7</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-8.html">Home Layout 8</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-9.html">Home Layout 9</a>
							   			</li>
							   			<li>
							   			 	<a href="home-layout-10.html">Home Layout 10</a>
							   			</li>
							   			<li>
							   			 	<a href="one-page.html">One Page</a>
							   			</li>
							   			<li>
							   			 	<a href="full-page.html">Full Page</a>
							   			</li>
							   		</ul>
							    </li>
							    <li class="has-sub">
									<a href="#">Sliders</a>
									<ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
										<li>
											<a href="full-screen.html">Full Screen Slider</a>
										</li>
										<li>
											<a href="boxed-slideshow.html">Boxed Slider</a>
										</li>
										<li>
											<a href="video-bg.html">Video Background</a>
										</li>
									</ul>
								</li>
							    <li class="has-sub">
							        <a href="#">Portfolio</a>
							        <!--<span class="new-item">New</span>-->
							        <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							        	<li>
							         	    <a href="portfolio.html">Portfolio</a>
							            </li>
							            <li>
							         	    <a href="portfolio-simple.html">Portfolio Simple Layout</a>
							         	    <span class="new-item2">New</span>
							            </li>
							            <li>
											<a href="portfolio-full-width.html">Portfolio - Full Width</a>
										</li>
							            <li>
							         	    <a href="single-project.html">Single Project</a>
							            </li>
							        </ul>
							    </li>
							    <li>
								    <a href="#">Blog</a>
								    <!--<span class="new-item">New</span>-->
								    <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
								   		<li>
										    <a href="blog.html">Blog Style 1</a>
										</li>
						                <li>
										    <a href="blog-2.html">Blog Style 2</a>
										</li>
										<li>
										    <a href="blog-3.html">Blog Style 3</a>
										</li>
										<li>
										    <a href="blog-4.html">Blog Style 4</a>
										</li>
										<li>
											<a href="blog-timeline.html">Timeline Blog</a>
										</li>
										<li>
											<a href="blog-masonry.html">Masonry Blog</a>
											<span class="new-item2">New</span>
										</li>
										<li>
											<a href="blog-masonry-full.html">Masonry Blog Full</a>
											<span class="new-item2">New</span>
										</li>
										<li>
										    <a href="blog-post.html">Blog Post Style 1</a>
										</li>
										<li>
										    <a href="blog-post-2.html">Blog Post Style 2</a>
										</li>
						            </ul>
							    </li>
							    <li class="has-sub">
							   	    <a href="#">Pages</a>
							   	    <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							   	   		<li> 
						  		   	   		<a href="full-width-page.html">Full Width</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="left-sidebar-page.html">Left Sidebar</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="right-sidebar-page.html">Right Sidebar</a>
						  		   	    </li>
							   	   		<li> 
						  		   	   		<a href="faq.html">FAQ</a>
						  		   	    </li>
							   	        <li>
						  		   	   	    <a href="testimonials.html">Testimonials</a>
						  		   	    </li>
							   	        <li> 
						  		   	   		<a href="features.html">Features</a>
						  		   	    </li>
							   	   	    <li> 
						  		   	   		<a href="text-page.html">Text Page</a>
						  		   	    </li>
						  		   	    <li> 
											<a href="our-office.html">Our Office</a>
										</li>
										<li> 
											<a href="about-us.html">About us</a>
										</li>
										<li> 
											<a href="timeline-page.html">Timeline Page</a>
										</li>
						  		   	</ul>
						  		   	<ul class="second-submenu dl-submenu"><li class="dl-back"><a href="#">back</a></li>
						  		   		<li>
						  		   			<a href="clients.html">Clients</a>
						  		   		</li>
							   	   	    <li> 
						  		   	   	    <a href="team.html">Our Team</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   		<a href="team-member.html">Team Member</a>
						  		   	    </li>
							   	        <li>
							   	       		<a href="pricing.html">Pricing</a>
							   	        </li>
							   	        <li>
							   	       	    <a href="404.html">404 Error Page</a>
							   	        </li>
							   	        <li> 
						  		   	   	    <a href="coming-soon.html">Coming Soon</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   	    <a href="maintenance-mode.html">Maintenance Mode</a>
						  		   	    </li>
						  		   	    <li>
									   	    <a href="contact.html">Contact Page</a>
									    </li>
									    <li> 
											<a href="sitemap.html">Sitemap</a>
										</li>
										<li> 
											<a href="product-launch.html">Product Launch</a>
										</li>
							   	    </ul>
							    </li>
							    <li class="has-sub">
							   	    <a href="#">Shop</a>
							   	    <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							   	   	    <li>
							   			 	<a href="shop-home.html">Home Page</a>
							   		    </li><li>
							   		    </li><li>
						  		   	   	    <a href="product.html">Product Item</a>
						  		   	    </li>
							   	   	    <li> 
						  		   	   	    <a href="shopping-cart.html">Shopping Cart</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   	    <a href="shop-order-recieved.html">Order Confirmation</a>
						  		   	    </li>
						  		   	    <li> 
						  		   	   	    <a href="shop-account-login.html">My Account - Login</a>
						  		   	    </li>
							   	    </ul>
						        </li>
						        <li>
						       	    <a href="bootstrap.html">Features</a>
						       	    <!--<span class="new-item">New</span>-->
						       	    <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
						       	    	<li>
						       	    		<a href="builder/index.html">Page Builder</a>
						       	    		<span class="new-item2">New</span>
						       	    	</li>
						       	    	<li>
						       	    		<a href="gallery-1.html">Gallery 1 column</a>
						       	    	</li>
						       	    	<li>
						       	    		<a href="gallery-2.html">Gallery 2 column</a>
						       	    	</li>
						       	    	<li>
						       	    		<a href="gallery-3.html">Gallery 3 column</a>
						       	    	</li>
						       	    	<li>
						       	    		<a href="gallery-4.html">Gallery 4 column</a>
						       	    	</li>
						       	    </ul>
						        </li>
							    <li>
							   	    <a href="#">Shortcodes</a>
							   	    <!--<span class="new-item">New</span>-->
							   	    <ul class="dl-submenu"><li class="dl-back"><a href="#">back</a></li>
							   	        <li>
							   	   	   	    <a href="typography.html">Typography</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="page-header.html">Page Header</a>
							   	   	   	    <span class="new-item2">New</span>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="gallery.html">Gallery</a>
							   	   	    </li>
							   	   	    <li>
											<a href="services-box.html">Services Box</a>
										</li>
							   	   	    <li>
							   	   	   	    <a href="buttons.html">Buttons</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="progress-bars.html">Progress Bars &amp; Skill Meter</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="tabs.html">Tabs</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="google-maps.html">Google Maps</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="accordion.html">Accordion &amp; Toggles</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="callout-box.html">Custom Callout Box</a>
							   	   	    </li>
							   	   	    <li>
							   	   	   	    <a href="laptop-slider.html">Laptop Slider</a>
							   	   	    </li>
							   	    </ul>
							   </li>
							</ul></div><!-- end responsive menu -->
					</div>
				</div>
			</div>
		</div>
	</header>
	

   @yield('content')


	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 mbottom30">
					<a href="index.html">
						<img src="{{ asset('assets/images-fb/firmabu-logo.png') }}" alt="" class="default" />
						<img src="{{ asset('assets/images-fb/firmabu-logo.png') }}" alt="" class="only3" />
					</a>
					<p class="mtop30">Etiam accumsan tristique diam, nec mollis nulla. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
					<div class="social mtop25 mbottom30 clearfix">
						<ul class="reset-list">
							<li class="ico-twitter animation">
								<a href="#">
									<span class="icon-twitter"></span>
								</a>
							</li>
							<li class="ico-facebook animation">
								<a href="#">
									<span class="icon-facebook"></span>
								</a>
							</li>
							<li class="ico-google animation">
								<a href="#">
									<span class="icon-googleplus"></span>
								</a>
							</li>
							<li class="ico-pinterest animation">
								<a href="#">
									<span class="icon-pinterest"></span>
								</a>
							</li>
							<li class="ico-dribbble animation">
								<a href="#">
									<span class="icon-dribbble"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-3 mbottom30">
					<h3>From the Blog</h3>
					<ul class="footer-blog reset-list">
						<li>
							<a href="blog-post.html">
								<img src="assets/images/footer-img.jpg" alt=""/>
							</a>
							<p>Donec ullamcorper nulla non ms ac is</p>
							<p class="tcolor">June 22, 2013</p>
							<div class="clearfix mbottom20"></div>
						</li>
						<li>
							<a href="blog-post.html">
								<img src="assets/images/footer-img2.jpg" alt=""/>
							</a>
							<p>Donec ullamcorper nulla non ms ac is </p>
							<p class="tcolor">June 22, 2013</p>
							<div class="clearfix"></div>
						</li>	
					</ul>						
				</div>
				<div class="col-sm-3 mbottom30">
					<h3>Company</h3>
					<ul class="menu-list reset-list">
						<li>
							<a href="#">About Us</a>
						</li>
						<li>
							<a href="faq.html">FAQs</a>
						</li>
						<li>
							<a href="contact.html">Contact</a>
						</li>
						<li>
							<a href="#">Terms</a>
						</li>
						<li>
							<a href="#">Privacy</a>
						</li>
						<li>
							<a href="testimonials.html">Testimonials</a>
						</li>
					</ul>
				</div>
				<div class="col-sm-3">
					<h3>Newsletter Singup</h3>
					<div id="subscribe" class="footer-subscribe center mbottom10">
						<form action="http://lorthemes.us8.list-manage1.com/subscribe/post-json?u=42795504a248e486766e563b9&amp;id=f766078320&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="" required>
							<div style="position: absolute; left: -5000px;">
	                            <input type="text" name="b_9ed253451c5b914e9c34e388b_6e3ba686ba" value="">
	                        </div>
							<button class=" btn-sm btn-small" type="submit" name="subscribe" id="mc-embedded-subscribe"><span class="icon-envelope"></span></button>
						</form>	
						<div id="notification_container"></div>				
					</div>
					<p>By subscribing to our mailing list you will always be update with the latest news from us.</p>
				</div>
			</div>
		</div>
		<div class="bottom-footer">
				<div class="container">
					<div class="row ptop10">
						<div class="col-sm-6 col-xs-12 mbottom20">
							<p class="copyright">© 2014 - 2015 developed by <strong>LorThemes</strong>. All Rights Reserved</p>
						</div>
						<div class="col-sm-6 col-xs-12">
							<div class="social-buttons">
								<div class="facebook-button">
									<!-- Change this iframe with your own. -->
									<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvatoStudio&amp;width&amp;layout=button_count&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
								</div>
								<div class="twitter-button">
									<!-- Change data-via to your own. -->
									<a href="https://twitter.com/share" class="twitter-share-button" data-via="BogdanStw">Tweet</a>
									<script>
										!function(d,s,id){
										var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
										if(!d.getElementById(id)){
										js=d.createElement(s);
										js.id=id;
										js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
									</script>
								</div>
								<div class="google-button">
									<!-- Place this tag where you want the +1 button to render. -->
									<div class="g-plusone" data-size="medium"></div>
									<!-- Place this tag after the last +1 button tag. -->
									<script type="text/javascript">
										(function() {
										var po = document.createElement('script');
										po.type = 'text/javascript';
										po.async = true;
										po.src = 'https://apis.google.com/assets/js/plusone.js';
										var s = document.getElementsByTagName('script')[0];
										s.parentNode.insertBefore(po, s);
										}
										)();
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</footer>
	<!-- end footer -->
</div>
<p id="back-top">
	<a href="#top"><span class="icon-angle-up"></span></a>
</p>

	{{ HTML::script('assets/js/modernizr.custom.js') }}
	{{ HTML::script('assets/js/bootstrap.js') }}
	{{ HTML::script('assets/js/clean-js-plugins.js') }}
	{{ HTML::script('assets/js/cleanlab_script.js') }}
	{{ HTML::script('assets/js/bootstrap-select.js') }}
	{{ HTML::script('assets/js/evol.colorpicker.min.js') }}
	{{ HTML::script('assets/js/dmss.js') }}
	{{ HTML::script('assets/js/jquery.themepunch.plugins.min.js') }}
	{{ HTML::script('assets/js/jquery.themepunch.revolution.min.js') }}
	{{ HTML::script('assets/js/iCarousel/raphael-min.js') }}
	{{ HTML::script('assets/js/iCarousel/jquery.mousewheel.js') }}
	{{ HTML::script('assets/js/iCarousel/jquery.easing.1.3.js') }}
	{{ HTML::script('assets/js/iCarousel/icarousel.packed.js') }}

<script type="text/javascript"> 
	jQuery(document).ready(function() {
		/* Revolution Slider */
	    revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on",
		});

		$('#icarousel').iCarousel();
	});
</script>
<!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
<script>
	(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
	function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
	e=o.createElement(i);r=o.getElementsByTagName(i)[0];
	e.src='//www.google-analytics.com/analytics.js';
	r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
	ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
-->
</body>
</html>