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
<title>Bank of Saudi Arabia | About</title>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/blue.css" rel="stylesheet" type="text/css" media="all" />
<!----font-Awesome----->
   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
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
			<a id="touch-menu" class="mobile-menu" href="#">Help and Support</a>
			<nav>
			<ul class="menu list-unstyled">
				<li><a href="#">Language: 
						<select class = "search">
							<option>EN</option>
							<option>Arabic</option>
						</select>
					</a>
				</li>
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
									<li><a href="underConstruction.php">Recurring Deposit</a></li></br>
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
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>				
				<li><a class="color7" href = "#">Welcome 
					<?php echo $_SESSION['login_user']
						?>!</a>
					<div class="dropdown">						
						<ul> 
							<li><a href="underConstruction.php">Inbox</a></li>
							<li><a href="sprofile.php">Profile</a></li>
							<li><a href="ServiceRequest.php">Service Request</a></li>
							<li><a href="../logout.php">Logout</a></li>
						</ul>
					</div>
			</li>
		 </ul>
	</div>
</div>
<div class="main_bg"><!-- start main -->
<div class="container">
	<div class="main_grid1">
		<h3 class="style pull-left">about us</h3>
		<ol class="breadcrumb pull-right">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">about us</li>
		</ol>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="main_btm1"><!-- start main_btm -->
<div class="container">
	<div class="main about span_of_3">
		<h3>There are many variations of passages of Lorem Ipsum available, </h3>
		<p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
		<div class="col-md-3 span1_of_3">
			<h4>why choose us?</h4>
			<ul class="list-unstyled nav_list">
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
				<li><a href="#">Nullam nec sapien eget metus</a></li>
				<li><a href="#">Curabitur pellentesque mauris tempor </a></li>
				<li><a href="#">Mauris dictum neque ornare nibh feugiat</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
				<li><a href="#">Nullam nec sapien eget metus</a></li>
				<li><a href="#">Curabitur pellentesque mauris tempor </a></li>
				<li><a href="#">Curabitur pellentesque mauris tempor </a></li>
				<li><a href="#">Mauris dictum neque ornare nibh feugiat</a></li>
				<li><a href="#">Lorem ipsum dolor sit amet, consectetur</a></li>
			</ul>
		</div>	
		<div class="col-md-6 span1_of_3">
			<h5>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,<span>randomised words which don't </span> look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </h5>
				<!-- start circle -->
				<ul class="list-unstyled circle_list">
					<li>
						<div class="safari chart">
						  <div class="tag">50%</div>
						</div>			
						<h4 class="style">meier</h4>			
					</li>
					<li>
						<div class="moz chart">
						  <div class="tag">75%</div>
						</div>			
						<h4 class="style">johnson</h4>			
					</li>
					<li>
						<div class="google chart">
						  <div class="tag">90%</div>
						</div>	
						<h4 class="style">junghanns</h4>					
					</li>
				</ul>
				<!-- end circle -->
		</div>	
		<div class="col-md-3 span1_of_3">
			<h4>what client's say ?</h4>
			<div class="clients1">
				<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos </p>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
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
			<span class="">Email:&nbsp;<a href="mailto:info@mycompany.com">info&#64;bankfofsaudiarabia.com</a></span>
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