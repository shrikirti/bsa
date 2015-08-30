<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<?php 
session_start();
      if($_SESSION['logged_in']!="true"){
		header("Location: ../LoggedOut.html");
	}		
?>

<html>
<head>
<title>Bank of Saudi Arabia | Demo Videos</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/menu.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/fliplightbox.min.js"></script>
		<script type="text/javascript">
			$('body').flipLightBox()
		</script>
		<script type="text/javascript" src="js/jquery.easing.min.js"></script>
		<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
		<script type="text/javascript">
			$(function() {

				var filterList = {

					init : function() {

						// MixItUp plugin
						// http://mixitup.io
						$('#portfoliolist').mixitup({
							targetSelector : '.portfolio',
							filterSelector : '.filter',
							effects : ['fade'],
							easing : 'snap',
							// call the hover effect
							onMixEnd : filterList.hoverEffect()
						});

					},

					hoverEffect : function() {

						// Simple parallax effect
						$('#portfoliolist .portfolio').hover(function() {
							$(this).find('.label').stop().animate({
								bottom : 0
							}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({
								top : -30
							}, 500, 'easeOutQuad');
						}, function() {
							$(this).find('.label').stop().animate({
								bottom : -40
							}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({
								top : 0
							}, 300, 'easeOutQuad');
						});

					}
				};

				// Run the show!
				filterList.init();

			});
		</script>
<!-- start light_box -->
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" media="screen" />
<!--
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
-->
<script type="text/javascript" src="js/jquery.fancybox-1.2.1.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$("div.fancyDemo a").fancybox();
		});
	</script>

</head>
<body>
<div class="header_bg">
<div class="container">
	<div class="header">
		<div class="logo">
			<a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>
		<div class="h_menu">
			<div class="header_head">
				<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
				<nav>
					<ul class="menu list-unstyled">
						<li><a href="underConstruction.php">24X7 Help</a></li>
						<li><a href="underConstruction.php">Sitemap</a></li>
						<li><a href="underConstruction.php">Search box</a></li>
					</ul>
				</nav>
				<script src="js/menu.js" type="text/javascript"></script>

				<div class="clearfix"></div>
			</div>
		<a id="touch-menu" class="mobile-menu" href="#">Menu</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="index.php">HOME</a></li>
			<li><a href="#">Banking</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="#">Personal</a>
				<ul class="list-unstyled">
						<li><a href="underConstruction.php">Savings Account</a></li>
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Islamic Return Account</a></li>
					</ul>
				</li>
				<li><a href="#">Corporate</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Currency Account</a></li>
						<li><a href="underConstruction.php">Islamic Finance</a></li>
						<li><a href="underConstruction.php">Investment Banking</a></li>
					</ul>
				</li>
				<li><a href="#">Business</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Currency Account</a></li>
						<li><a href="underConstruction.php">Islamic Finance</a></li>
						<li><a href="underConstruction.php">Investment Banking</a></li>
					</ul>
				</li>
			</ul>
			</li>
			<li><a href="#">Cards</a>
				<ul class="sub-menu list-unstyled">
					<li><a href="#">Debit Cards</a>
						<ul class="list-unstyled">
							<li><a href="underConstruction.php">Titanium Debit Card</a></li>
							<li><a href="underConstruction.php">Johara Card</a></li>
						</ul>
					</li>
					<li><a href="#">Credit Cards</a>
						<ul class="list-unstyled">
							<li><a href="underConstruction.php">Visa Signature Card</a></li>
							<li><a href="underConstruction.php">Visa Platinum Card</a></li>
							<li><a href="underConstruction.php">Mastercard Platinum</a></li>
							<li><a href="underConstruction.php">Mastercard Gold</a></li>
						</ul>
					</li>					
				</ul>
			</li>
			<li><a href="#">Services</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="#">Treasury</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Term Deposit</a></li>
						<li><a href="underConstruction.php">Recurring Deposit</a></li>
					</ul>
				</li>
				<li><a href="Loan.php">Loans</a></li>
				<li><a href="#">Foreign Exchange</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Spot</a></li>
						<li><a href="underConstruction.php">Swap</a></li>
						<li><a href="underConstruction.php">Forward</a></li>
					</ul>
				</li>
				<li><a href="service.php">Financial Tools</a></li>
			</ul>
			</li>
			<li><a href="underConstruction.php">CONTACT</a></li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li></a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li></a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li></a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li></a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li></a>&nbsp;&nbsp;&nbsp;&nbsp</li>
			<li><a href="#"> Welcome XYZ! </a>
				<ul class="list-unstyled">
					<li><a href="#">Inbox</a></li>
					<li><a href="#">Profile</a></li>
					<li><a href="#">Service Request</a></li>
					<li><a href="..\LoggedOut.html">Logout</a></li>
					
				</ul>
			</li>
		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="portfolio_main">
						<ul id="filters" class="clearfix">
							<li>
								<span class="filter active" data-filter="app card icon web">All</span>
							</li>
							<li>
								<span class="filter" data-filter="app  icon">Accounts</span>
							</li>
							<li>
								<span class="filter" data-filter="card ">Cards</span>
							</li>
							<li>
								<span class="filter" data-filter="icon app card ">Loans</span>
							</li>
							<li>
								<span class="filter" data-filter="web card icon">Web</span>
							</li>
						</ul>
						<div id="portfoliolist">
							<div class="portfolio logo1" data-cat="logo">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s1.jpg"><img src="images/s1.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Accounts</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio app" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s2.jpg"><img src="images/s2.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Web</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio web" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s3.jpg"><img src="images/s3.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Web</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s4.jpg"><img src="images/s4.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Cards</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio app" data-cat="app">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s5.jpg"><img src="images/s5.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Loans</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="web">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s6.jpg"><img src="images/s6.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Web</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio card" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s7.jpg"><img src="images/s7.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Cards</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
							<div class="portfolio logo1" data-cat="card">
								<div class="portfolio-wrapper">
									<div class="fancyDemo">
										<a rel="group" title="" href="images/s8.jpg"><img src="images/s8.jpg" alt=""class="img-responsive"/></a>
									</div>
									<div class="label">
										<div class="label-text">
											<span class="text-category">Cards</span>
										</div>
										<div class="label-bg"></div>
									</div>
								</div>
							</div>
						</div>
			<div class="clearfix"></div>
			<ul class="pagination">
			  <li><a href="#">Prev</a></li>
			  <li><a href="#">1</a></li>
			  <li><a href="#">2</a></li>
			  <li><a href="#">3</a></li>
			  <li class="cau_hide"><a href="#">4</a></li>
			  <li class="cau_hide"><a href="#">5</a></li>
			  <li class="cau_hide"><a href="#">6</a></li>
			  <li class="cau_hide"><a href="#">7</a></li>
			  <li><a href="#">Next</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="footer_bg"><!-- start footer -->
<div class="container">
	<div class="footer">
		<div class="col-md-4 footer1_of_3">
			<div class="f_logo">
				<a href="index.php"><img src="images/logo.png" alt=""/></a>
			</div>		
			<p class="f_para">We are a direct Bank</p>
			<p>Phone:&nbsp;<span>(00) 222 666 444</span></p>
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info&#64;bankofsaudiarabia.com</a></span>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>About Us</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">History</a></li>
				<li><a href="#">Board of Directors</a></li>
				<li><a href="#">Policies</a></li>
				<li><a href="#">FAQs</a></li>
			</ul>
		</div>
		<div class="col-md-2 footer1_of_3">
			<h4>Community</h4>
			<ul class="list-unstyled f_list">
				<li><a href="#">Blog</a></li>
				<li><a href="#">Forum</a></li>
			</ul>
		</div>
		<div class="col-md-4 footer_of_3">
			<h4>from the <span>blog</span></h4>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.php"><img src="images/blog_pic1.jpg" alt="" class="img-responsive"/></a>	
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.php"><p>First Post</p></a>
					<span>26, November 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="blog_list">
				<div class="col-md-3 f_pic">
					<a href="blog.php"><img src="images/blog_pic2.jpg" alt="" class="img-responsive"/></a>
				</div>
				<div class="col-md-9 f_text">
					<a href="blog.php"><p>Second Post</p></a>
					<span>17, December 2014</span>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="footer1_bg"><!-- start footer1 -->
<div class="container">
	<div class="footer1">
		<div class="copy pull-left">
			<p class="link"><span>&#169; All rights reserved | Template by&nbsp;<a href="http://w3layouts.com/"> Quick Works Inc.</a></span></p>
		</div>
		<div class="soc_icons pull-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-rss"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</body>
</html>