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
<title>Lookshop Bootstarp Website Template | Products :: w3layouts</title>
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
<link rel="stylesheet" href="css/etalage.css">
<script src="js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>
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
			<li class="user_desc"><a href="../logout.php">Logout</a></li>
		  </a>
		  <div class="clearfix"> </div>
	    </ul>
	    <div class="main-search">
	        <form action="#">
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
					<li class="active"><a href="index.php">Overview</a>
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
							<li><a href="transfer.php">Fund Transfer</a></li>
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
		<!-- 
		 <div class="shopping_cart">
		 	<ul class="shopping_cart_top">
			    <a href="#">
				   <li class="shop_left">Your cart</li>
				   <li class="shop_right"><img src="images/arrow1.png" alt=""/></li>
				    <div class="clearfix"></div>	
				</a>
			</ul>
			<ul class="shopping_bag">
			    <a href="#">
				   <li class="bag_left"><img src="images/bag.png" alt=""/></li>
				   <li class="bag_right"> 0 Items | $ 0</li>
				    <div class="clearfix"></div>	
				</a>
			</ul>		
		  </div>
		  -->
	      <div class="clearfix"></div>		   
      </div>
    </div>
  </div>
</div>
<ul class="breadcrumbs">
 <div class="container">
     <li class="home">
        <a href="index.php" title="Go to Home Page"><img src="images/home.png" alt=""/></a>&nbsp;
       &nbsp; <span>&gt;</span>
     </li>
     <li class="home">&nbsp;
         Women&nbsp;&nbsp;
         <span>&gt;</span>
     </li>
     <li class="home">
         &nbsp;Clothing&nbsp;&nbsp;
         <span>&gt;</span>
     </li>
     <li class="home">
         &nbsp;Blouses & Shirts&nbsp;&nbsp;
         <span>&gt;</span>
     </li>
     <li class="home">
         &nbsp;B.young&nbsp;&nbsp;
         <span>&gt;</span>
     </li>
     <li class="home">
         <span class="red"> &nbsp;Sofi Blouse&nbsp;&nbsp;</span>
     </li>
  </div>
</ul>
<div class="single_top">
	 <div class="container"> 
	      <div class="single_grid">
				<div class="grid images_3_of_2">					
						
					<!--
						<ul id="etalage">
							<li>
								<a href="optionallink.php">
									<img class="etalage_thumb_image" src="images/s7.jpg" class="img-responsive" />
									<img class="etalage_source_image" src="images/s7.jpg" class="img-responsive" title="" />
								</a>
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/s8.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/s8.jpg" class="img-responsive" title="" />
							</li>
							<li>
								<img class="etalage_thumb_image" src="images/s9.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/s9.jpg"class="img-responsive"  />
							</li>
						    <li>
								<img class="etalage_thumb_image" src="images/s10.jpg" class="img-responsive"  />
								<img class="etalage_source_image" src="images/s10.jpg"class="img-responsive"  />
							</li>
						</ul>
					-->
						 <div class="clearfix"></div>		
				  </div> 
				  
				  <div class="desc1 span_3_of_2">
				  	<ul class="back">
                	  <li><i class="back_arrow"> </i>Back to <a href="index.php">Overview</a></li>
                    </ul>
					<h1>Financial Tools Exclusively for you!</h1>
					<ul class="price_single">
					  <li class="head"><h2>Mortgage and Loan Calculator</h2></li>
					  <li class="head_desc"><a href="#">12 reviews</a><img src="images/review.png" alt=""/></li>
					  <div class="clearfix"></div>
					</ul>
					<p>
					Use Mortgage calculator to project expected interest rates monthly, semi-annually or annually. </br>
					Use Loan calculator to project expected interest rates monthly, semi-annually or annually.
					</p>
				     <!--
					 <div class="dropdown_top">
				       <div class="dropdown_left">
					     <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
	            			<option value="0">Select size</option>	
							<option value="1">M</option>
							<option value="2">L</option>
							<option value="3">XL </option>
							<option value="4">Fs</option>
							<option value="5">S </option>
							<option value="5"></option>
							<option value="5"></option>
			             </select>
			            </div>
			            <!--
						<ul class="color_list">
							<li><a href="#"> <span class="color1"> </span></a></li>
							<li><a href="#"> <span class="color2"> </span></a></li>
							<li><a href="#"> <span class="color3"> </span></a></li>
							<li><a href="#"> <span class="color4"> </span></a></li>
							<li><a href="#"> <span class="color5"> </span></a></li>
						</ul>
						 <div class="clearfix"></div>
			         </div>
					 -->
			         <a href="#" class="btn1 btn2 btn-primary1"><span>Generate E-Statement</span><img src="images/arrow_h.png" alt=""></a>
				</div>
          	    <div class="clearfix"></div>
          	   </div>

			<!--
			<ul class="menu">
				<li class="item1"><a href="#"><img src="images/product_arrow.png">Description</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item2"><a href="#"><img src="images/product_arrow.png">Additional information</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item3"><a href="#"><img src="images/product_arrow.png">Reviews (10)</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item4"><a href="#"><img src="images/product_arrow.png">Helpful Links</a>
					<ul>
					    <li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
				<li class="item5"><a href="#"><img src="images/product_arrow.png">Make A Gift</a>
					<ul>
						<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
						<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore</a></li>
						<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
					</ul>
				</li>
	 		</ul>
			-->
		</div>
		
		
       <!--  
   <div class="m_4"><span class="left_line2"> </span><p>Related Products</p><span class="right_line2"> </span></div>
	<div class="content_bottom">
          	<div class="container">
          		<ul class="grid1">
          		  <li>
					<div class="view view-first">
					  <img src="images/b1.jpg" class="img-responsive" alt="">
					  <div class="tab_desc">
			             <h3><a href="#">Feel Tank</a></h3>
						 <p>$59.95</p>
						 <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""></a>
					  </div>
					</div>
				  </li>
				  <li>
					<div class="view view-first">
					  <img src="images/b2.jpg" class="img-responsive" alt="">
					  <div class="tab_desc">
			             <h3><a href="#">Feel Tank</a></h3>
						 <p>$59.95</p>
						 <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""></a>
					  </div>
					</div>
					<div class="sale-box1"> </div>
				  </li>
				  <li>
					<div class="view view-first">
					  <img src="images/b3.jpg" class="img-responsive" alt="">
					  <div class="tab_desc">
			             <h3><a href="#">Feel Tank</a></h3>
						 <p>$59.95</p>
						 <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""></a>
					  </div>
					</div>
				  </li>
				  <li class="grid1_last">
					<div class="view view-first">
					  <img src="images/b4.jpg" class="img-responsive" alt="">
					  <div class="tab_desc">
			             <h3><a href="#">Feel Tank</a></h3>
						 <p>$59.95</p>
						 <a href="#" class="btn1 btn-primary1"><span>Add To Cart</span><img src="images/plus.png" alt=""></a>
					  </div>
					</div>
					<div class="sale-box1"> </div>
				  </li>
				  <div class="clearfix"> </div>
				</ul>
          	</div>
          </div>
      </div>

	  <div class="grid-2">
       	<div class="container">
       		<p>We accept<img src="images/paypal.png" class="img-responsive" alt="" align="middle" /></p>
       	</div>		
       </div>
	   -->
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