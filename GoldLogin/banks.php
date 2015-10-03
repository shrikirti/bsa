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
<title>Seeking an Job Portal Category Flat Bootstarp Resposive Website Template | Recruiters :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="summary.php"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Overview<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="summary.php">Summary</a></li>
			            <li><a href="calcy.php">My Profile</a></li>
		            </ul>
		        </li>
		        <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
			            <div class="row">
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a href="calcy.php">Bank Accounts</a></li>
						            <li><a href="calcy.php">Deposits</a></li>
						            <li><a href="calcy.php">Loan</a></li>
									<li><a href="calcy.php">Credit Card</a></li>
						            <li class="divider"></li>
						            <li><a href="calcy.php">E-Statement</a></li>
						        </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a href="calcy.php">Fund Transfer</a></li>
						            <li><a href="calcy.php">Bill Payment</a></li>
						            <li><a href="calcy.php">Manage Beneficiaries</a></li>
						            <li class="divider"></li>
						            <li><a href="calcy.php">Transaction Status</a></li>
					            </ul>
				            </div>
				            <div class="col-sm-4">
					            <ul class="multi-column-dropdown">
						            <li><a href="calcy.php">General Insurance</a></li>
						            <li><a href="calcy.php">Life Insurance</a></li>
						            <li class="divider"></li>
						            <li><a href="calcy.php">Insure Online</a></li>									
						            <li><a href="calcy.php">Invest Online</a></li>
					            </ul>
				            </div>
			            </div>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Exclusive Offerings<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="calcy.php">Financial Calculators</a></li>			            
			            <li><a href="calcy.php">Johara Account</a></li>
		            </ul>
		        </li>
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Service Requests<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="calcy.php">Profile Updates</a></li>
			            <li><a href="calcy.php">Bank Account</a></li>
			            <li><a href="calcy.php">DEMAT Account</a></li>
			            <li><a href="calcy.php">Credit Card</a></li>
			            <li><a href="calcy.php">Deposits</a></li>
		            </ul>
		        </li>
				<li><a href="network.php">My Network</a></li>
				<li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, <?php echo $_SESSION['name']?>!<b class="caret"></b></a>
		            <ul class="dropdown-menu">
			            <li><a href="calcy.php">My Profile</a></li>						
						<li><a href="../logout.php">Logout</a></li>
		            </ul>
		        </li>
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>
	
<div class="container">
    <div class="single">  
      <h2>Banks</h2>
      <div class="recruit_box">
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/1.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 1</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/2.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 2</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/3.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 3</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/4.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 4</h4>
	   </a></div>
	   <div class="clearfix"> </div>
	  </div>
	  <div class="recruit_box">
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/5.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 5</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/6.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 6</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/7.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 7</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/8.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 8</h4>
	   </a></div>
	   <div class="clearfix"> </div>
	  </div>
	  <div class="recruit_box">
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/9.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 9</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/10.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 10</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/11.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 11</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/12.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 12</h4>
	   </a></div>
	   <div class="clearfix"> </div>
	  </div>
	  <div class="recruit_box">
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/13.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 13</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/14.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 14</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/15.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 15</h4>
	   </a></div>
	   <div class="col-md-3 recruit"><a href="bank_detail.php">
	   	  <img src="images/16.jpg" class="img-responsive" alt=""/>
	   	  <h4>Bank 16</h4>
	   </a></div>
	   <div class="clearfix"> </div>
	  </div>
    </div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>About Us</h4>
			<ul class="f_list f_list1">
				<li><a href="index.php">History</a></li>
				<li><a href="login.php">Board of Directors</a></li>
				<li><a href="login.php">Blog</a></li>
				<li><a href="about.php">Forum</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.php">Policies</a></li>
				<li><a href="terms.php">Terms of use</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<li><a href="jobs.php">FAQs</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Twitter Widget</h4>
			<div class="footer-list">
			  <ul>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>We are a direct Bank!</h4>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Activate Your Network</h4>
			<p>With the networking facility at BSA, you can now connect to fellow members of BSA and avail exciting features.</p>
			<form>
				<input type="text" class="form-control" placeholder="Enter your email">
				<button type="button" class="btn red">Activate now!</button>
		    </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_bottom">	
  <div class="container">
	<div class="copy">
		<p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
  </div>

</body>
</html>	