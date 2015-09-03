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

<title>Bank of Saudi Arabia | Business Loan</title>
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
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>

<!----Login --->
<script>
	function login(loginType){
		if(loginType == "plogin"){
			document.loginForm.action = "plogin.php";
			return true;
		}else if(loginType == "clogin"){
			document.loginForm.action = "clogin.php";
			return true;
		}else{
			document.loginForm.action = "#";
			return false;
		}
		
	}
	
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
		<a id="touch-menu" class="mobile-menu" href="#">Help and Support</a>
		<nav>
		<ul class="menu list-unstyled">
			<li><a href="#">Language: <select class = "search">
					<option>EN</option>
					<option>Arabic</option>
				</select>
				</a></li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li> </a>&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li><a href="underConstruction.php">24X7 Help</a></li>
			<li><a href="underConstruction.php">Find ATMs</a></li>
			<li><a href="underConstruction.php">Sitemap</a></li>
			<li><a href="#">
				<form >
						<input type="text" value="" placeholder="search...">
						<span><i class="fa fa-search"></i></span>
				</form>
				</a>
			</li>

		</ul>
		</nav>
		<script src="js/menu.js" type="text/javascript"></script>
		</div>

		<div class="clearfix"></div>
	</div>

			<!-- start header menu -->
		<ul class="megamenu skyblue">
			<li><a class="color7" href="index.php">Home</a></li>
			<li class="grid"><a class="color7" href="#">Banking</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Personal Banking</h4>
								<ul>
									<li><a href="underConstruction.php">Savings Account</a></li></br>
									<li><a href="underConstruction.php">Current Account</a></li></br>
									<li><a href="underConstruction.php">Islamic Returns Account</a></li></br>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Corporate Banking</h4>
								<ul>
									<li><a href="underConstruction.php">Current Account</a></li></br>
									<li><a href="underConstruction.php">Currency Account</a></li></br>
									<li><a href="underConstruction.php">Islamic Finance</a></li></br>
									<li><a href="underConstruction.php">Investment Banking</a></li></br>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Business Banking</h4>
								<ul>
									<li><a href="underConstruction.php">Current Account</a></li></br>
									<li><a href="underConstruction.php">Currency Account</a></li></br>
									<li><a href="underConstruction.php">Islamic Finance</a></li></br>
									<li><a href="underConstruction.php">Investment Banking</a></li></br>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Treasury</h4>
								<ul>
									<li><a href="underConstruction.php">Term Deposit</a></li></br>
									<li><a href="wounderConstructionmen.php">Recurring Deposit</a></li></br>
								</ul>	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li class="active grid"><a class="color7" href="#">Cards</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Debit cards</h4>
								<ul>
									<li><a href="underConstruction.php">Titanium Visa Card</a></li></br>
									<li><a href="underConstruction.php">Coral MasterCard</a></li></br>
									<li><a href="underConstruction.php">Johara Card</a></li></br>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Credit cards</h4>
								<ul>
									<li><a href="underConstruction.php">Visa Titanium Card</a></li></br>
									<li><a href="underConstruction.php">Visa Signature Card</a></li></br>
									<li><a href="underConstruction.php">Visa Platinum Chip Card</a></li></br>
									<li><a href="underConstruction.php">MasterCard Gold</a></li></br>
									<li><a href="underConstruction.php">MasterCard platinum Chip</a></li></br>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Travel Cards</h4>
								<ul>
									<li><a href="underConstruction.php">Visa Travel Card</a></li></br>
								</ul>	
							</div>							
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color7" href="#">Services</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Loans</h4>
								<ul>
									<li><a href="Loan.php">Car Loan</a></li></br>
									<li><a href="Loan.php">Home Loan</a></li></br>
									<li><a href="Loan.php">Personal Loan</a></li></br>
									<li><a href="Loan.php">Education Loan</a></li></br>
									<li><a href="Loan.php">Working Capital Loan</a></li></br>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Financial Tools</h4>
								<ul>
									<li><a href="service.php">Loan Calculator</a></li></br>
									<li><a href="service.php">Mortgage Calculator</a></li></br>
									<li><a href="service.php">Savings Calculator</a></li></br>
									<li><a href="service.php">BTF Calculator</a></li></br>
									<li><a href="service.php">Cash advance Calculator</a></li></br>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Foreign Exchange</h4>
								<ul>
									<li><a href="underConstruction.php">SPOT</a></li></br>
									<li><a href="underConstruction.php">SWAP</a></li></br>
									<li><a href="underConstruction.php">Forward</a></li></br>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Check eligibility</h4>
								<ul>
									<li><a href="underConstruction.php">Accounts</a></li></br>
									<li><a href="underConstruction.php">Cards</a></li></br>
									<li><a href="underConstruction.php">Deposit</a></li></br>
									<li><a href="underConstruction.php">Loans</a></li></br>
									<li><a href="underConstruction.php">Investments</a></li></br>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Help us, Help you!</h4>
								<ul>
									<li><a href="videos.php">Demo Videos</a></li></br>
									<li><a href="underConstruction.php">FAQs</a></li></br>
									<li><a href="underConstruction.php">Our Security</a></li></br>
								</ul>	
							</div>						
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color7" href="contact.php">Contact</a>
					<div class="megapanel">
						<div class="row">
							<div class="col3">
								<div class="h_nav">
									<h4>Contact Us</h4>
								</div>
								<form class="contact" action = "requestReceived.php">
									<label for="name">Name</label>
									<input id="name" type="text"/>
									<label for="email">E-mail</label>
									<input id="email" type="text"/>
									<label for="message">Message</label>
									<textarea rows="8" id="message"></textarea>
									<input type="submit" value="Send"/>
								</form>
							</div>
							<div class="col3">
							</div>
						</div>
					</div>
				</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
				<li><a class="color7" href="service.php">Sign up</a></li>
				<li><a class="color7" href = "#">					
							<img class ="lock" src="images/icon-lock.png" height = "20" width ="20" alt=""/>
						&nbsp;Login
					</a>
					<div class="megapanel">
						<div class="row">

							<div class="col3">
								<div class="h_nav">
									<h4>Login</h4>
								</div>
								<form  name = "loginForm" class="contact" onSubmit =" return login(this.loginType.value);">
									</br>
									<input name = "loginType" id="type" type="radio" value = "plogin"/>
									<label for="personal">Personal</label></br>
									<input name = "loginType" id="type" type="radio" value = "clogin"/>									
									<label for="corporate">Corporate</label></br>
									<input type="submit" value="Login"/>
								</form>
							</div>
							<div class="col2">
								<div class="h_nav">
									<h4>New User?</h4>
									<ul>
										</br>Join us today for access to our financial tools, on-line chat, communities, forum and many more exciting facilities!
										</br>
										<form class="contact" action = "service.php" onSubmit = " return true">
											<input type="submit" value="Register"/>
										</form>
									</ul>
								</div>
							</div>
						</div>
					</div>
			</li>
		 </ul>
</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">Enter OTP (One Time Password)</h3>
		<ol class="breadcrumb pull-right">
		  
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm1 -->
<div class="container">
	<div class="main about span_of_3">
		
		<p class="para">
		An OTP for your service request verification has been sent to your registered mobile number: 
		<?php
			$displaynum = substr($_SESSION['mobile'],0,2)."****".substr($_SESSION['mobile'], 6);
			echo $displaynum;
		?>. Please enter it below to confirm your request.
		<form method="post" action="../AdminAccessOnly/GoldUserRegistration.php">
		<table>
			<tr>
				<td width = '100%' align = 'center'> <input type="text"   name = "otp" placeholder="OTP" required/></td>
			</tr>
			<tr>
				<td width = '80%' align = 'center'> <input type='submit' Value='Submit'> </td>
			</tr>
		</table>
		</form>
				
		
		</p>
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