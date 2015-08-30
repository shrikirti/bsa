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
<title>Seeking an Job Portal Category Flat Bootstarp Resposive Website Template | Following :: w3layouts</title>
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
	        <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=""/></a>
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
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Search people</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Search"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
      <div class="col-sm-10 follow_left">
			<h3>Members Reviews</h3>
             <div class="follow_jobs">
			    <a href="network.php">
					<img src="images/f1.jpg" alt="" class="img-circle img-responsive">
					<div class="title">
						<h5>Financial Tools</h5>
						<p>Excellent</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Medina</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Gold Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>-->
					</div>
				</a>
				<a href="network.php">
					<div class="featured"></div>
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Ease of Use</h5>
						<p>Excellent</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Riyadh</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>BSA Representative</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>85,000</span>-->
					</div>
				</a>
				<a href="network.php">
					<img src="images/f3.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Deposit Schemes</h5>
						<p>Good</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Al Bahaha</span>
						<span class="type freelance"><i class="fa fa-clock-o"></i>Silver Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>60,000</span>-->
					</div>
				</a>
				<a href="network.php">
					<img src="images/f4.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Quick Response</h5>
						<p>Good</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Boston</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Gold Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>55,000</span>-->
					</div>
				</a>
				<a href="network.php">
					<div class="featured"></div>
					<img src="images/f1.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Savings Schemens</h5>
						<p>Average</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Makkah</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>BSA Representative</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>75,000</span>-->
					</div>
				</a>
				<a href="network.php" class="hidden-job">
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Banking Satisfaction</h5>
						<p>Excellent</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Medina</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Gold Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>45,000</span>-->
					</div>
				</a>
				<a href="network.php" class="hidden-job">
					<img src="images/f3.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Customer Care Response</h5>
						<p>Great</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Makkah</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>BSA Representative</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>85,000</span>-->
					</div>
				</a>
				<a href="network.php" class="hidden-job">
					<img src="images/f4.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Accessibility of Products</h5>
						<p>Good</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Al Riyadh</span>
						<span class="type freelance"><i class="fa fa-clock-o"></i>Silver Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>60,000</span>-->
					</div>
				</a>
				<a href="network.php" class="hidden-job">
					<img src="images/f1.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Financial Tools</h5>
						<p>Great</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Boston</span>
						<span class="type full-time"><i class="fa fa-clock-o"></i>Gold Member</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>55,000</span>-->
					</div>
				</a>
				<a href="network.php" class="hidden-job">
					<img src="images/f2.jpg" alt="" class="img-circle">
					<div class="title">
						<h5>Cutomer Care</h5>
						<p>Average</p>
					</div>
					<div class="data">
						<span class="city"><i class="fa fa-map-marker"></i>Makkah</span>
						<span class="type part-time"><i class="fa fa-clock-o"></i>BSA Representative</span>
						<!--<span class="sallary"><i class="fa fa-dollar"></i>75,000</span>-->
					</div>
				</a>
				<ul class="pagination">
					<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
					<li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
					<li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
			   </ul>
		    </div>
		</div>
		<div class="col-sm-2">
			<h4 class="m_1">Location</h4>
			<table class="table">
                    <tbody>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Riyadh
                            </td>
                            <td>
                                (10023)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Makkah
                            </td>
                            <td>
                                (2343)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Al Bahaha
                            </td>
                            <td>
                                (1223)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Medina
                            </td>
                            <td>
                                (121)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Tabuk
                            </td>
                            <td>
                                (1254)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Al Qasim
                            </td>
                            <td>
                                (1765)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Jizan
                            </td>
                            <td>
                                (2387)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Najran
                            </td>
                            <td>
                                (566)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Eastern Province
                            </td>
                            <td>
                                (3214)
                            </td>
                        </tr>
                </tbody>
             </table>
             <h4 class="m_1">Member type</h4>
             <table class="table">
                    <tbody>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Gold
                            </td>
                            <td>
                                (24993)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                Silver
                            </td>
                            <td>
                                (2341)
                            </td>
                        </tr>
                        <tr class="unread checked">
                            <td class="hidden-xs">
                                <input type="checkbox" class="checkbox">
                            </td>
                            <td class="hidden-xs">
                                BSA Representative
                            </td>
                            <td>
                                (28743)
                            </td>
                        </tr>
                        
                </tbody>
             </table>
		</div>
		<div class="clearfix"> </div>
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
</div>
</body>
</html>	