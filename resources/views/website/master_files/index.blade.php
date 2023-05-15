
<!DOCTYPE html>
<html lang="en">
<head>
    <title>KeyapBazar | @yield('title')</title>
	<meta charset="utf-8">
    <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
    <meta name="author" content="keyapBazar">
    <meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->

    <link rel="shortcut icon" href="ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Roboto:400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="{{ asset('/')}}website/css/bootstrap/css/bootstrap.min.css">
	<link href="{{ asset('/')}}website/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="{{asset('/')}}website/js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('/')}}website/js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="{{ asset('/')}}website/css/themecss/lib.css" rel="stylesheet">
	<link href="{{asset('/')}}website/js/jquery-ui/jquery-ui.min.css" rel="stylesheet">

	<!-- Theme CSS
	============================================ -->
   	<link href="{{ asset('/')}}website/css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="{{ asset('/')}}website/css/themecss/so-categories.css" rel="stylesheet">
	<link href="{{ asset('/')}}website/css/themecss/so-listing-tabs.css" rel="stylesheet">
	<!-- <link href="{{ asset('/')}}website/css/themecss/slider.css" rel="stylesheet"> -->
	<link id="color_scheme" href="{{ asset('/')}}website/css/home5.css" rel="stylesheet">
	<link href="{{ asset('/')}}website/css/responsive.css" rel="stylesheet">
</head>

<body class="common-home res layout-home5">
    <div id="wrapper" class="wrapper-full banners-effect-7">

		@yield('navbar')

		<!-- Main Container  -->
		<main id="content" class="page-main">
			<!-- Block Spotlight1  -->
			<div class="so-spotlight1 ">
				<div class="container">
					<div class="row">
						@yield('slider');
						@yield('ads_banner');
					</div>
				</div>
			</div>

		    @yield('promotion_banner')

			<div class="so-spotlight3">
				<div class="container">
					<div class="row">
						<div class="col-md-9 col-sm-8 col-xs-12">

							@yield('hot_deals')

							@yield('mobile_tablet')

                            @yield('electiornics')

						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							@yield('best_deals')
							<!-- Mod Blog -->

							<!-- End Mod -->
							<!-- Banner -->
							<div class="block-banner-right hidden-xs">
						    	<div class="static-image-home-right banners"><div><a title="Static Image" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/img-static-right.png" alt="Static Image"></a></div></div>
						    </div>
							<!-- //End Banner -->
							<!-- Banner -->
							<div class="block-banner-right hidden-xs">
						    	<div class="static-image-home-right banners"><div><a title="Static Image" href="#"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/banner/1-h10.jpg" alt="Static Image"></a></div></div>
						    </div>
							<!-- //End Banner -->
						</div>
					</div>
				</div>
			</div>

			<!--Block Spotlight4  -->
			<div class="so-spotlight4">
				<div class="container">
					<div class="block-brand">
						<div class="brand-slider">
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/2.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/3.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/4.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/5.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/2.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/3.jpg" alt="img">
								</a>
							</div>
							<div class="item-manu">
								<a href="#" title="Link">
									<img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/brands/9.jpg" alt="img">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</main >
		<!-- //Main Container -->

		<script type="text/javascript"><!--
			var $typeheader = 'header-home5';
			//-->
		</script>
		<!-- Footer Container -->
		<footer class="footer-container typefooter-1">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="module social_block col-md-3 col-sm-12 col-xs-12" >
								<ul class="social-block ">
									<li class="facebook"><a class="_blank" href="https://www.facebook.com/MagenTech" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a class="_blank" href="https://twitter.com/smartaddons" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li class="rss"><a class="_blank" href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
									<li class="google_plus"><a class="_blank" href="https://plus.google.com/u/0/+Smartaddons/posts" target="_blank"><i class="fa  fa-google-plus"></i></a></li>
									<li class="pinterest"><a class="_blank" href="https://www.pinterest.com/smartaddons/" target="_blank"><i class="fa fa-pinterest"></i></a></li>
								</ul>
							</div>
							<div class="module news-letter col-md-9 col-sm-12 col-xs-12">
								<div class="newsletter">
									<div class="title-block">
										<div class="page-heading">SIGN UP FOR OUR NEWSLETTER</div>
										<div class="pre-text">
											Duis at ante non massa consectetur iaculis id non tellus
										</div>
									</div>
									<div class="block_content">
										<form method="post" name="signup" id="signup" class="btn-group form-inline signup">
											<div class="form-group required send-mail">
												<div class="input-box">
													<input type="email" placeholder="Your email address..." value="" class="form-control" id="txtemail" name="txtemail" size="55">
												</div>
												<div class="subcribe">
													<button class="btn btn-default btn-lg" type="submit" onclick="return subscribe_newsletter();" name="submit">
														Subscribe						</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Center -->
			<div class="footer-center">
				<div class="container content">
					<div class="row">
						<!-- Box Info -->
						<div class="col-md-3 col-sm-6 col-xs-12 collapsed-block footer-links box-footer">
							<div class="module ">
								<div class="content-block-footer">
									<div class="footer-logo">
										<a href="home5.html"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/logos/theme_logo.png" title="Your Store" alt="Your Store" /></a>
									</div>
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
								</div>
							</div>
						</div>
						<!-- Box Accout -->
						<div class="col-md-3 col-sm-6 box-account box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">My Account</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">Brands</a></li>
										<li><a href="#">Gift Certificates</a></li>
										<li><a href="#">Affiliates</a></li>
										<li><a href="#">Specials</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Box Infomation -->
						<div class="col-md-3 col-sm-6 box-information box-footer">
							<div class="module clearfix">
								<h3 class="modtitle">Information</h3>
								<div class="modcontent">
									<ul class="menu">
										<li><a href="#">About Us</a></li>
										<li><a href="#">FAQ</a></li>
										<li><a href="#">Pricing Tables</a></li>
										<li><a href="#">Terms And Conditions</a></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Box About -->
						<div class="col-md-3  col-sm-6 collapsed-block box-footer">
							<div class="module ">
								<h3 class="modtitle">About Us</h3>
								<div class="modcontent">
									<ul class="contact-address">
										<li><span class="fa fa-home"></span> My Company, 42 avenue des Champs</li>
										<li><span class="fa fa-envelope"></span> Email: <a href="#"> sales@yourcompany.com</a></li>
										<li><span class="fa fa-phone">&nbsp;</span> Phone 1: 0123456789</li>
									</ul>
									<ul class="payment-method">
										<li><a title="Payment Method" href="#"><img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/payment/payment-1.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/payment/payment-2.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/payment/payment-3.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/payment/payment-4.png" alt="Payment"></a></li>
										<li><a title="Payment Method" href="#"><img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/demo/cms/payment/payment-5.png" alt="Payment"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- FOOTER BOTTOM -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
						KeyapBazar © 2017 - 2023. All Rights Reserved.
						</div>
						<div class="back-to-top"><i class="fa fa-angle-up"></i><span> Top </span></div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //end Footer Container -->

    </div>
	<!-- Social widgets -->
	<section class="social-widgets visible-lg">
		<ul class="items">
			<li class="item item-01 facebook"> <a href="php/facebook.php?account=envato" class="tab-icon"><span class="fa fa-facebook"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>FACEBOOK</h5>
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/lazy-loader.gif"  alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-02 twitter"> <a href="php/twitter.php?account_twitter=envato" class="tab-icon"><span class="fa fa-twitter"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>TWITTER FEEDS</h5>
					</div>
					<div class="loading">
						<img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/lazy-loader.gif" alt="loader">
					</div>
				</div>
			</li>
			<li class="item item-03 youtube"> <a href="php/youtubevideo.php?account_video=PY2RLgTmiZY" class="tab-icon"><span class="fa fa-youtube"></span></a>
				<div class="tab-content">
					<div class="title">
						<h5>YouTube</h5>
					</div>
					<div class="loading"> <img class="lazyload ajaxloader" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/lazy-loader.gif"alt="loader"></div>
				</div>
			</li>
		</ul>
	</section>	<!-- End Social widgets -->

	<!-- Cpanel Block -->
	<div id="sp-cpanel_btn" class="isDown visible-lg">
		<i class="fa fa-cog fa-spin"></i>
	</div>
	<div id="sp-cpanel" class="sp-delay">
		<h2 class="sp-cpanel-title"> Demo Options <span class="sp-cpanel-close"> <i class="fa fa-times"> </i></span></h2>
		<div id="sp-cpanel_settings">
			<div class="panel-group">
				<label>Color Scheme</label>
				<div class="group-schemes" >
					<a data-scheme="default" title="Orange"  data-toggle="tooltip" class="item_scheme selected"><span style="background: #ea3a3c;"></span></a>
					<a data-scheme="blue" title="Blue"  data-toggle="tooltip" class="item_scheme"><span style="background: #5f87d1;"></span></a>
					<a data-scheme="orange"  title="Orange"  data-toggle="tooltip" class="item_scheme"><span style="background: #F4A137;"></span></a>
					<a data-scheme="cyan" title="Cyan"  data-toggle="tooltip" class="item_scheme"><span style="background: #009688;"></span></a>
					<a data-scheme="green" title="Green" data-toggle="tooltip" class="item_scheme "><span style="background: #20bc5a;"></span></a>

				 </div>
			</div>

			<div class="panel-group ">
				<label>Header style</label>
				<div class="group-boxed">
					<select id="change_header_type" name="cpheaderstype" class="form-control" onchange="headerTypeChange(this.value);">
						<option value="header-home1" >Header 1</option>
						<option value="header-home2" >Header 2</option>
						<option value="header-home3" >Header 3</option>
						<option value="header-home4" >Header 4</option>
						<option value="header-home5" >Header 5</option>
						<option value="header-home6" >Header 6</option>
						<option value="header-home7" >Header 7</option>
						<option value="header-home8" >Header 8</option>
						<option value="header-home9" >Header 9</option>
						<option value="header-home10" >Header 10</option>
					</select>
				</div>
			</div>


			<div class="panel-group ">
				<label>Layout Box</label>
				<div class="group-boxed">
					<select id="cp-layoutbox" name="cplayoutbox" class="form-control" onchange="changeLayoutBox(this.value);">
						<option value="full">Wide</option>
						<option value="boxed">Boxed</option>
						<option value="iframed">Iframed</option>
						<option value="rounded">Rounded</option>
					</select>
				</div>
			</div>

			<div class="panel-group">
				<label>Body Image</label>

				<div class="group-pattern">
					<div data-pattern="28"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/28.png" alt="pattern 28"></div>
					<div data-pattern="29"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/29.png" alt="pattern 29"></div>
					<div data-pattern="30"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/30.png" alt="pattern 30"></div>
					<div data-pattern="31"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/31.png" alt="pattern 31"></div>
					<div data-pattern="32"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/32.png" alt="pattern 32"></div>
					<div data-pattern="33"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/33.png" alt="pattern 33"></div>
					<div data-pattern="34"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/34.png" alt="pattern 34"></div>
					<div data-pattern="35"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/35.png" alt="pattern 35"></div>
					<div data-pattern="36"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/36.png" alt="pattern 36"></div>
					<div data-pattern="37"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/37.png" alt="pattern 37"></div>
					<div data-pattern="38"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/38.png" alt="pattern 38"></div>
					<div data-pattern="39"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/39.png" alt="pattern 39"></div>
					<div data-pattern="40"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/40.png" alt="pattern 40"></div>
					<div data-pattern="41"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/41.png" alt="pattern 41"></div>
					<div data-pattern="42"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/42.png" alt="pattern 42"></div>
					<div data-pattern="43"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/43.png" alt="pattern 43"></div>
					<div data-pattern="44"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/44.png" alt="pattern 44"></div>
					<div data-pattern="45"  class="img-pattern"><img class="lazyload" data-sizes="auto" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="{{asset('/')}}website/image/theme/patterns/45.png" alt="pattern 45"></div>
				</div>
				<p class="label-sm">Background only applies for Boxed,Framed, Rounded Layout</p>
			</div>

			<div class="reset-group">
				<a href="home5.html" class="btn btn-success " onclick="ResetAll()">Reset</a>
			</div>

		</div>
	</div>

	<link rel='stylesheet' property='stylesheet'  href='{{ asset('/') }}website/css/themecss/cpanel.css' type='text/css' media='all' />

	<!-- Preloading Screen -->
	<div id="loader-wrapper">
		<div id="loader"></div>
		<div class="loader-section section-left"></div>
		<div class="loader-section section-right"></div>
	 </div>
	<!-- End Preloading Screen -->

	<!-- Include Libs & Plugins
	============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="{{asset('/')}}website/js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/libs.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/jquery-ui/jquery-ui.min.js"></script>


	<!-- Theme files
	============================================ -->
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/application.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/toppanel.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/so_megamenu.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/addtocart.js"></script>

	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/accordion.js"></script>
	<script type="text/javascript" src="{{asset('/')}}website/js/themejs/cpanel.js"></script>
</body>

</html>
