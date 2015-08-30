<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Lookshop Bootstarp Website Template | Login :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:300,400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery.easydropdown.js"></script>
</head>
<body>
<div class="header">
   <div class="header_top">
    <div class="container">
	  <div class="header_top_left">
	  	<p>custom care : 0-888-23-5467</p>
	  </div>
	  <div class="header_top_right">
	  	<div class="lang_list">
			<select tabindex="4" class="dropdown">
				<option value="" class="label" value="">$ Us</option>
				<option value="1">Dollar</option>
				<option value="2">Euro</option>
			</select>
   		</div>
   		<ul class="header_user_info">
		  <a class="login" href="login.php">
			<i class="user"></i> 
			<li class="user_desc">My Account</li>
		  </a>
		  <div class="clearfix"> </div>
	    </ul>
	    <div class="main-search">
	        <form action="search.php">
	           <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
	            <input type="submit" value=""/>
	        </form>
	        <div class="close"><img src="images/close.png" /></div>
	    </div>
	    <div class="srch"><button></button></div>
	    <div class="clearfix"> </div>
		<script type="text/javascript">
	         $('.main-search').hide();
	        $('button').click(function (){
	            $('.main-search').show();
	            $('.main-search text').focus();
	        }
	        );
	        $('.close').click(function(){
	            $('.main-search').hide();
	        });
	    </script>
        </div>
	  <div class="clearfix"> </div>
	</div>
  </div>
  <div class="header_bottom">
	<div class="container">	 			
		<div class="logo">
		  <a href="index.php"><img src="images/logo.png" alt=""/></a>
		</div>	
		<div class="header_bottom_right">			
	        <div class="h_menu4"><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav">
					<li><a href="index.php">Overview</a>
						<ul>
							<li><a href="products.php">Summary</a></li>
							<li><a href="products.php">My Profile</a></li>
						</ul>
					</li>
					<li><a href="products.php">My Accounts</a>
						<ul>
							<li><a href="products.php">Bank Accounts</a></li>
							<li><a href="products.php">Deposits</a></li>
							<li><a href="products.php">Loans</a></li>
							<li><a href="products.php">Credit Cards</a></li>
							<li><a href="products.php">E-Statement</a></li>
						</ul>					
					</li>
					<li><a href="products.php">Payment & Transfer</a>
						<ul>
							<li class="active"><a href="transfer.php">Fund Transfer</a></li>
							<li><a href="products.php">Bill Payments</a></li>
							<li><a href="products.php">Manage Beneficiaries</a></li>
							<li><a href="products.php">Transaction Status</a></li>
						</ul>
					</li>
					<li><a href="products.php">Investment & Insurance</a>
						<ul>
							<li><a href="products.php">General Insurance</a></li>
							<li><a href="products.php">Life Insurance</a></li>
							<li><a href="products.php">Insure Online</a></li>
							<li><a href="products.php">Invest Online</a></li>
						</ul>
					</li>
					<li><a href="products.php">Exclusive Offerings</a>
						<ul>
							<li><a href="calculators.php">Financial Calculators</a></li>
							<li><a href="products.php">Johara Account</a></li>
						</ul>					
					</li>
					<li><a href="products.php">Service Requests</a></li>
				</ul>
				<script type="text/javascript" src="js/nav.js"></script>
	      </div><!-- end h_menu4 -->

	      <div class="clearfix"></div>		   
      </div>
    </div>
  </div>
</div>
<ul class="breadcrumbs">
 <div class="container">
     <li class="home">
        <a href="index.php" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;&nbsp;
        <span>&gt;</span>&nbsp;
     </li>
     <li class="home">
         Women&nbsp; 
         <span>&gt;</span>
     </li>
     <li class="home">
          <span class="red">&nbsp;Login&nbsp;</span>
     </li>
 </div>
</ul>
    <div class="contact">
      	<div class="container">
      	   <div class="account_grid">
			   <div class="col-md-6 login-left">
			  	 <h3>Add New Beneficiary</h3>
				 <p>By creating a beneficiary, you will be able to make transfer to that account. </br>
				 Please note that there is limited amount that you can transfer in the initial 24 hours after registering a beneficiary (not more than 20000 dinar).
				 After that, the maximum limit of amount eligible to be transferred is as per what your account type permits.</p>
				 <a class="acount-btn" href="register.php">Add</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>Transfer to a beneficiary</h3>
				<p>If you want to transfer to an existing beneficiary, enter the details.</p>
				<form>
				  <div>
					<span>Beneficiary name<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>Amount<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>Payment Type<label>*</label></span>
					<input type="text"> 
				  </div>
				  <div>
					<span>Date<label>*</label></span>
					<input type="date"> 
				  </div>
				  <div>
					<span>Transaction Password<label>*</label></span>
					<input type="text"> 
				  </div>
				  <!--<a class="forgot" href="#">Forgot Your Password?</a>-->
				  <input type="submit" value="Submit">
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
      	 </div>
      </div>
      <div class="grid-2">
       	<div class="container">
       		<p>We accept<img src="images/paypal.png" class="img-responsive" alt="" align="middle" /></p>
       	</div>
       </div>
       <div class="footer_top">
       	<div class="container">
       		<div class="col-sm-2 grid-3">
       			<h3>Customer Service</h3>
       			<ul class="footer_list">
       				<li><a href="contact.php">Contact</a></li>
       				<li><a href="#">FAQ</a></li>
       				<li><a href="#">Terms of payment</a></li>
       				<li><a href="#">Terms of sale</a></li>
       				<li><a href="#">Terms and conditions</a></li>
       				<li><a href="#">Returns and Refunds</a></li>
       			</ul>
       		</div>
       		<div class="col-sm-2 grid-3">
       			<h3>Information</h3>
       			<ul class="footer_list">
       				<li><a href="#">Affiliate</a></li>
       				<li><a href="#">Cookies</a></li>
       				<li><a href="#">How to Shop</a></li>
       				<li><a href="#">About Nelly</a></li>
       				<li><a href="#">Investor relations</a></li>
       			</ul>
       		</div>
       		<div class="col-sm-2 grid-3">
       			<h3>Campaigns</h3>
       			<ul class="footer_list">
       				<li><a href="#">Evening Dresses</a></li>
       				<li><a href="#">Makeup</a></li>
       				<li><a href="#">Fashion forward</a></li>
       				<li><a href="#">Training clothes</a></li>
       				<li><a href="#">Special Occasion Dresses</a></li>
       			</ul>
       		</div>
       		<div class="col-sm-2 grid-3">
       			<h3>Stores</h3>
       			<ul class="footer_list">
       				<li><a href="#">Paris</a></li>
       				<li><a href="#">New York</a></li>
       				<li><a href="#">London</a></li>
       				<li><a href="#">Madrid</a></li>
       				<li><a href="#">Tokio</a></li>
       			</ul>
       		</div>
       		<div class="col-sm-2 grid-3">
       			<h3>Social</h3>
       			<ul class="footer_social">
				  <li><a href="#"> <i class="tw1"> </i> </a></li>
				  <li><a href="#"> <i class="db1"> </i> </a></li>
				  <li><a href="#"> <i class="fb1"> </i></a></li>
				  <li><a href="#"> <i class="g1"> </i></a></li>
				  <li><a href="#"> <i class="thumb"> </i></a></li>
				  <li><a href="#"> <i class="vimeo"> </i></a></li>
				</ul>
       		</div>
       		<div class="col-sm-2">
       			<img src="images/secure.png" alt=""/>
       		</div>
       	</div>
       </div>
       <div class="footer_bottom">
       	<div class="container">
       		<div class="cssmenu">
				<ul>
					<li class="active"><a href="login.php">Privacy & Cookies</a></li> |
					<li><a href="checkout.php">Terms & Conditions</a></li> |
					<li><a href="checkout.php">Accessibility</a></li> |
					<li><a href="login.php">Store Directory</a></li> |
					<li><a href="register.php">About Us</a></li>
				</ul>
			</div>
			<div class="copy">
			    <p>&copy; 2014 Template by <a href="http://w3layouts.com" target="_blank">w3layouts</a></p>
		    </div>
		    <div class="clearfix"> </div>
       	</div>
       </div>
</body>
</html>		