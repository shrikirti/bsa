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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdn.mlcalc.com/widget-api.js"></script>

<title>Bank of Saudi Arabia | Loan</title>
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
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Owl Carousel Assets -->
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
		<script>
			$(document).ready(function() {

				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});

			});
		</script>
		<!-- //Owl Carousel Assets -->
<!-- start circle -->
<script>
(function($){
	$.fn.percentPie = function(options){

		var settings = $.extend({
			width: 100,
			trackColor: "EEEEEE",
			barColor: "E2534B",
			barWeight: 30,
			startPercent: 0,
			endPercent: 1,
			fps: 60
		}, options);

		this.css({
			width: settings.width,
			height: settings.width
		});

		var	that = this,
			hoverPolice = false,
			canvasWidth = settings.width,
			canvasHeight = canvasWidth,
			id = $('canvas').length,
			canvasElement = $('<canvas id="'+ id +'" width="' + canvasWidth + '" height="' + canvasHeight + '"></canvas>'),
			canvas = canvasElement.get(0).getContext("2d"),
			centerX = canvasWidth/2,
			centerY = canvasHeight/2,
			radius = settings.width/2 - settings.barWeight/2;
			counterClockwise = false,
			fps = 1000 / settings.fps,
			update = .01;
			this.angle = settings.startPercent;

		this.drawArc = function(startAngle, percentFilled, color){
			var drawingArc = true;
			canvas.beginPath();
			canvas.arc(centerX, centerY, radius, (Math.PI/180)*(startAngle * 360 - 90), (Math.PI/180)*(percentFilled * 360 - 90), counterClockwise);
			canvas.strokeStyle = color;
			canvas.lineWidth = settings.barWeight;
			canvas.stroke();
			drawingArc = false;
		}

		this.fillChart = function(stop){
			var loop = setInterval(function(){
				hoverPolice = true;
				canvas.clearRect(0, 0, canvasWidth, canvasHeight);

				that.drawArc(0, 360, settings.trackColor);
				that.angle += update;
				that.drawArc(settings.startPercent, that.angle, settings.barColor);

				if(that.angle > stop){
					clearInterval(loop);
					hoverPolice = false;
				}
			}, fps);
		}

		this.mouseover(function(){
			if(hoverPolice == false){
				that.angle = settings.startPercent;
				that.fillChart(settings.endPercent);
			}
		});

		this.fillChart(settings.endPercent);
		this.append(canvasElement);
		return this;
	}
}(jQuery));

$(document).ready(function() {

	$('.google').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .9,
		fps: 60
	});
  
  $('.moz').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "76C7C0",
		barWeight: 20,
		endPercent: .75,
		fps: 60
	});
  
  $('.safari').percentPie({
		width: 100,
		trackColor: "E2534B",
		barColor: "#76C7C0",
		barWeight: 20,
		endPercent: .5,
		fps: 60
	});
    
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
				<li class="activate"><a href="Loan.php">Loans</a></li>
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
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Loans</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Services</li>
		  <li class="active">Loans</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm1 -->
<div class="container">
	<div class="main about span_of_3">
		<h3>Loans</h3>
		<p class="para">Loans make it easy</p>
		<div class="col-md-3 span1_of_3">
			<h4>Loans</h4>
			<ul class="list-unstyled nav_list">
				<li><a href="homeLoan.php">Home Loan</a></li>
				<li><a href="personalLoan.php">Personal Loan</a></li>
				<li><a href="carLoan.php">Car Loan</a></li>
				<li><a href="WorkCapitalLoan.php">Work Capital Loan </a></li>
				<li><a href="EducationLoan.php">Education Loan</a></li>
				<li><a href="service.php">Calculate EMIs on loans</a></li>
			</ul>
		</div>	
		<div class="col-md-3 span1_of_3">
			<h4>Loans</h4>
			<div class="clients1">
				<p>We offer different loans at a much better interest.</p>
			</div>
		</div>
		<div class="clearfix"></div>
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