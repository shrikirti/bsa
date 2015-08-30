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
<title>Modus-Versus a bootstrap Website Template | Blog :: w3layouts</title>
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
			<li><a href="about.php">Banking</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="about.php">Personal</a>
				<ul class="list-unstyled">
						<li><a href="underConstruction.php">Savings Account</a></li>
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Islamic Return Account</a></li>
					</ul>
				</li>
				<li><a href="about.php">Corporate</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Currency Account</a></li>
						<li><a href="underConstruction.php">Islamic Finance</a></li>
						<li><a href="underConstruction.php">Investment Banking</a></li>
					</ul>
				</li>
				<li><a href="about.php">Business</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Current Account</a></li>
						<li><a href="underConstruction.php">Currency Account</a></li>
						<li><a href="underConstruction.php">Islamic Finance</a></li>
						<li><a href="underConstruction.php">Investment Banking</a></li>
					</ul>
				</li>
			</ul>
			</li>
			<li><a href="portfolio.php">Cards</a>
				<ul class="sub-menu list-unstyled">
					<li><a href="about.php">Debit Cards</a>
						<ul class="list-unstyled">
							<li><a href="underConstruction.php">Titanium Debit Card</a></li>
							<li><a href="underConstruction.php">Johara Card</a></li>
						</ul>
					</li>
					<li><a href="service.php">Credit Cards</a>
						<ul class="list-unstyled">
							<li><a href="underConstruction.php">Visa Signature Card</a></li>
							<li><a href="underConstruction.php">Visa Platinum Card</a></li>
							<li><a href="underConstruction.php">Mastercard Platinum</a></li>
							<li><a href="underConstruction.php">Mastercard Gold</a></li>
						</ul>
					</li>					
				</ul>
			</li>
			<li><a href="service.php">Services</a>
			<ul class="sub-menu list-unstyled">
				<li><a href="service.php">Treasury</a>
					<ul class="list-unstyled">
						<li><a href="underConstruction.php">Term Deposit</a></li>
						<li><a href="underConstruction.php">Recurring Deposit</a></li>
					</ul>
				</li>
				<li><a href="Loan.php">Loans</a></li>
				<li><a href="service.php">Foreign Exchange</a>
					<ul class="list-unstyled">
						<li><a href="service.php">Spot</a></li>
						<li><a href="service.php">Swap</a></li>
						<li><a href="service.php">Forward</a></li>
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
	<div class="blog"><!-- start blog -->
			<div class="blog_main col-md-9">
				<div class="blog_list">
					<div class="col-md-2 blog_date">
						<span class="date">may <p>24<p></p></span>
						<span class="icon_date"><i class="fa fa-laptop"></i> </span>
					</div>
					<div class="col-md-10 blog_left">
						<a href="single-page.php"><img src="images/blog-pic1.jpg" alt="" class="img-responsive"/></a>
						<h4><a href="single-page.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry </a></h4>
						<span>posted by <a href="#">Admin</a> in <a href="#">Wordpress</a> <a class="left" href="#"><i class="fa fa-comment"></i>Comments</a> <a class="left" href="#"><i class="fa fa-eye"></i>124 views</a></span>
						<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
						<div class="read_btn">
							<a href="single-page.php"><button class="btn">view more</button></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="blog_list">
					<div class="col-md-2 blog_date">
						<span class="date">Jun <p>17<p></p></span>
						<span class="icon_date"><i class="fa fa-laptop"></i> </span>
					</div>
					<div class="col-md-10 blog_left">
						<a href="single-page.php"><img src="images/blog-pic2.jpg" alt="" class="img-responsive"/></a>
						<h4><a href="single-page.php">Lorem Ipsum is simply dummy text of the printing and typesetting industry </a></h4>
						<span>posted by <a href="#">Admin</a> in <a href="#">Wordpress</a> <a class="left" href="#"><i class="fa fa-comment"></i>Comments</a> <a class="left" href="#"><i class="fa fa-eye"></i>124 views</a></span>
						<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing</p>
						<div class="read_btn">
							<a href="single-page.php"><button class="btn">view more</button></a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="col-md-3 blog_right">
				<h4>Ads 125 x 125</h4>
				<ul class="ads_nav list-unstyled">
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<li><a href="#"><img src="images/ads_pic.jpg" alt=""> </a></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="tag_nav list-unstyled">
					<h4>tags</h4>
						<li class="active"><a href="#">awesome</a></li>
						<li><a href="#">art</a></li>
						<li><a href="#">classic</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">wordpress</a></li>
						<li><a href="#">videos</a></li>
						<li><a href="#">standard</a></li>
						<li><a href="#">gaming</a></li>
						<li><a href="#">photo</a></li>
						<li><a href="#">music</a></li>
						<li><a href="#">data</a></li>
						<div class="clearfix"></div>
				</ul>
				<div class="news_letter">
					<h4>news letter</h4>
						<form>
							<input type="text" placeholder="Your email address">
							<input type="submit" value="subscribe">
						</form>
				</div>
			</div>
			<div class="clearfix"></div>
	</div><!-- end blog -->
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
</div>>
</body>
</html>