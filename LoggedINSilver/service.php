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

<title>Bank of Saudi Arabia | Services</title>
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
					<li><a href="Loan.php">Loans</a></li>
					<li><a href="#">Foreign Exchange</a>
						<ul class="list-unstyled">
							<li><a href="underConstruction.php">Spot</a></li>
							<li><a href="underConstruction.php">Swap</a></li>
							<li><a href="underConstruction.php">Forward</a></li>
						</ul>
					</li>
					<li class="activate"><a href="service.php">Financial Tools</a></li>
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
<div class="main_btm1"><!-- start main_btm1 -->
<div class="container">
	<div class="main about span_of_3">
		<h3> We have different type of financial tools to help you</h3>
		<p class="para">Calculate your goals right here and plan your future investment on the click of a button</p>
		<div class="clearfix"></div>
	</div>
</div>
</div>	
<div class="main_btm2"><!-- start main_btm2 -->
<div class="container">
<div class="pricing2"><!-- start pricing2 -->
	<h5></h5>
	<h6> </h6>
	<ul class="pricing_table list-unstyled" align = "center">

		<li class="price_block">
			<h3>Mortgage and Loan</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">EMI CALCULATOR</span>
				</div>				
			</div>
			<ul class="features list-unstyled">
				<!-- MORTGAGE LOAN CALCULATOR BEGIN -->
				<script type="text/javascript">
					mlcalc_default_calculator = 'loan';
					mlcalc_currency_code = '';
					mlcalc_amortization = 'year';
					mlcalc_purchase_price = '300,000';
					mlcalc_down_payment = '10';
					mlcalc_mortgage_term = '30';
					mlcalc_interest_rate = '4.5';
					mlcalc_property_tax = '3,000';
					mlcalc_property_insurance = '1,500';
					mlcalc_pmi = '0.52';
					mlcalc_loan_amount = '150,000';
					mlcalc_loan_term = '15';
				</script>
				<script type="text/javascript">
					if(typeof jQuery == "undefined")
					{
						document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));mlcalc_jquery_noconflict=1;
					};
				</script>
				<div style="font-weight:normal;
					font-size:9px;
					font-family:Tahoma;
					padding:0;
					margin:0;
					border:0;
					text-align:center;
					background:transparent;
					color:#EEEEEE;
					width:300px;
					text-align:right;
					padding-right:10px;" 
					id="mlcalcWidgetHolder">
					<script type="text/javascript">
						document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https://ssl.mlcalc.com' : 'http://cdn.mlcalc.com') + "/widget-wide.js' type='text/javascript'%3E%3C/script%3E"));
					</script>

				</div>
					<!-- MORTGAGE LOAN CALCULATOR END -->
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Download</a>
			</div>
		</li>

		<li class="price_block">
			<h3>View Trend</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">Mortgage Rates</span>
				</div>
			</div>
			<ul class="features list-unstyled">	
				<li align = "left">Check out the current trend in the United States for Mortagage rate via our tool. </li>
				<li align = "left">This can help you make your plan easily as per the trends.</li>
			</ul>
			<ul class="features list-unstyled">
				<!-- MORTGAGE RATES BEGIN -->
				<script type="text/javascript">if(typeof jQuery == "undefined"){document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));mlcalc_jquery_noconflict=1;};</script><div style="line-height:10px;font-weight:normal;font-size:9px;font-family:Tahoma;padding:0;margin:0;border:0;text-align:right;background:transparent;color:#EEEEEE;width:300px;padding-right:10px;" class="mlcalcRatesWidgetHolder" id="mlcalcRatesWidgetHolderXX"><script type="text/javascript">document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https://ssl.mlcalc.com' : 'http://cdn.mlcalc.com') + "/mortgage-rates/widget-wide.js' type='text/javascript'%3E%3C/script%3E"));</script>Powered by <a href="http://www.mlcalc.com/mortgage-rates/" style="font-weight:normal;font-size:9px;font-family:Tahoma;color:#EEEEEE;text-decoration:none;">Interest Rates</a></div>
				<!-- MORTGAGE RATES END -->
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Download</a>
			</div>
		</li>
		
		<li class="price_block">
			<h3>CALCULATOR</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">Savings Account</span>
				</div>
			</div>	
			<ul class="features list-unstyled">	
				<link rel="stylesheet" href="http://www.bankrate.com/free-content/css/bankrate-fcc-calculators.css" type="text/css"/>
					<div id="savingsCalheaderDiv" class="BankrateFCC_boxhead-container-small">
						<div id="savingsCaltitleDiv" class="BankrateFCC_boxhead"></div>
					</div><input id="savingsCal" type ="text" value="3,Arial,300" style="display:none" />
					<script language="Javascript" src="http://js.bankrate.com/free-calculators/free-simple-savings-calculator-widget.js" type="text/javascript">
					</script>
					<div id="savingsCalfooterDiv" class="BankrateFCC_footer-container small">
					</div>
					<script type="text/javascript"> savingsCalinit();</script>
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Download</a>
			</div>
		</li>
		
		<li class="price_block">
			<h3>Converter</h3>
			<div class="price">
				<div class="price_figure">
					<span class="price_number">Currency</span>
					<!---<span class="price_tenure">per month</span>--->
				</div>
			</div>
			<ul class="features list-unstyled">
						<!--Currency Converter widget by FreeCurrencyRates.com -->
						<style>
							.gcw_main2704519978{width:268px;font-family:Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;font-size:10.4px;border:#A6C9E2 1px solid;text-align:center;color:#000000;background-color:#FCFDFD;margin:0 auto;}
							.gcw_header2704519978{margin:4px;padding:5px;text-align:center;border:#4297D7 1px solid;background-color:#5C9CCC;}
							#ccw_cnhfybwf2704519978{text-decoration:none;color:#FFFFFF;font-size:13px;font-weight:bold;}
							.gcw_input2704519978{color:#2E6E9E;font-weight:bold;background-color:#FCFDFD;border:#C5DBEC 1px solid;text-align:center;padding:2px 0;margin:1px 0;display:inline;font-size:11px;}
							.gcw_select2704519978{color:#000;display:inline;}
							#gcw_date2704519978{font-size:10px;color:#2E6E9E;}
						</style>
						<div class='gcw_main2704519978'><div class='gcw_header2704519978'></div><div id='gcw_rates2704519978'></div><script src='http://www.freecurrencyrates.com/converter-widget?source=Yahoo%20Finance&width=268&currs=SAR,INR,USD,GBP,AED,QAR,KWD,ILS,YER&precision=3&language=en&flags=1&currchangable=1&firstrowvalue=1&id=2704519978' charset='UTF-8'></script></div>
						<!--End of Currency Converter widget by FreeCurrencyRates.com -->
			
			</ul>
			<div class="pricing_btn">
				<a class="action_button popup-with-zoom-anim" href="#small-dialog">Download</a>
			</div>
		</li>
		
		<div class="clearfix"></div>
	</ul>
	<ul class="skeleton pricing_table list-unstyled" style="margin-top: 100px; overflow: hidden;">
		<li class="label" style="margin: 0 none;">ul.pricing_table</li>
		<li class="price_block">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="pricing_btn">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<li class="price_block" style="opacity: 0.5;">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="footer">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<li class="price_block" style="opacity: 0.25;">
			<span class="label">li.price_block</span>
			<h3><span class="label">h3</span></h3>
			<div class="price">
				<span class="label">div.price</span>
				<div class="price_figure">
					<span class="label">div.price_figure</span>
					<span class="price_number">
						<span class="label">span.price_number</span>
					</span>
					<span class="price_tenure">
						<span class="label">span.price_tenure</span>
					</span>
				</div>
			</div>
			<ul class="features list-unstyled">
				<li class="label">ul.features</li>
				<br /><br /><br />
			</ul>
			<div class="pricing_btn">
				<span class="label">div.pricing_btn</span>
			</div>
		</li>
		<div class="clear"></div>
	</ul>
	<div class="clear"></div>
	</div><!-- end pricing2 -->
	<div class="cursual"><!--  start cursual  -->
		<h4>our happy clients<span class="line"></span></h4>
	</div>
	<div id="owl-demo" class="owl-carousel"><!----start-img-cursual---->
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c4.png" alt="Lazy Owl Image">
			</div>
		</div>	
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c3.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c1.png" alt="Lazy Owl Image">
			</div>
		</div>
		<div class="item">
			<div class="cau_left">
				<img class="lazyOwl" data-src="images/c2.png" alt="Lazy Owl Image">
			</div>
		</div>
	</div><!----//End-img-cursual---->
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
			<p class="link"><span>&#169; All rights reserved | Powered by&nbsp;<a href="http://www.mlcalc.com/">Mortgage Calculator</a> | Template by&nbsp;<a href="http://w3layouts.com/"> Quick Works Inc.</a></span></p>
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