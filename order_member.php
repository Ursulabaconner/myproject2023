<?php
 session_start();
 if((isset($_SESSION['UserID'])==''))
 {
 header("Location:login.php");
 exit();
 }
 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CheckOrder | AK-cosplay</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +7 77 77 77 777</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> ak-cosplay@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/AKcosplay05"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logoak-fix.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="pfmember.php"><i class="fa fa-user"></i> บัญชีผู้ใช้</a></li>
								<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> เช็คสินค้า</a></li>
								<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> ตะกร้าสินค้า </a></li>
								<li><a href="logout.php"><i class="fa fa-lock"></i>ออกจากระบบ</a></li>
								<li><a href="sign-up.php"><i class="fa fa-star"></i>สมัครสมาชิก</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.php">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.php">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<!--<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>-->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="showall_order.php">Order</a></li>
				  <li class="active">View Order</li>
				</ol>
			</div>
			<?php
				include "connect.php";	
				//print_r($_SESSION);
				$strSQL = "SELECT * FROM order_detail WHERE od_id = '".$_GET["qty_id"]."' ";
				$objQuery = mysqli_query($c,$strSQL);
				$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
				
				$strSQL4 = "SELECT * FROM sily_img WHERE od_id = '".$_GET["qty_id"]."' ";
				$objQuery4 = mysqli_query($c,$strSQL4);
				$objResult4 = mysqli_fetch_array($objQuery4,MYSQLI_ASSOC);
				
				$strSQL5 = "SELECT * FROM order_state WHERE od_id = '".$_GET["qty_id"]."' ";
				$objQuery5 = mysqli_query($c,$strSQL5);
				$objResult5 = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC);
				
				$strSQL6 = "SELECT * FROM check_order WHERE od_id = '".$_GET["qty_id"]."' ";
				$objQuery6 = mysqli_query($c,$strSQL6);
				$objResult6 = mysqli_fetch_array($objQuery6,MYSQLI_ASSOC);
			?>
			<div class="container">
				<div class="col-sm-4 col-sm-offset-2">
					<table width="304" border="1" class="table-responsive cart_info ">
					 <tr class="cart_menu">
					 <td width="71">OrderID</td>
					 <td width="217">
					 <?=$objResult["od_id"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td width="71">Name</td>
					 <td width="217">
					 <?=$objResult["od_name"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td>Address</td>
					 <td><?=$objResult["od_address"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td>Tel</td>
					 <td><?=$objResult["od_tel"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td>Email</td>
					 <td><?=$objResult["od_email"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td>Date</td>
					 <td><?=$objResult["od_date"];?></td>
					 </tr>
					 <tr class="cart_menu">
					 <td>Pay</td>
					 <td><?php echo number_format($objResult4["pay"],2);?></td>
					 </tr>
					<?php
					if($objResult5["status"] == "Cancer"){
					?>
					 <tr class="cart_menu">
					 <td>CancelDate</td>
					 <td><?=$objResult5["cancelDate"];?></td>
					 </tr>
					<?php
					}
					?>
					 <tr class="cart_menu">
					 <td>State Order</td>
					 <td><?=$objResult5["status"];?></td>
					 </tr>
					<?php
					if($objResult5["status"] == "Post"){
					?>
					 <tr class="cart_menu">
					 <td>Parcel Number</td>
					 <td><?=$objResult6["ck_parcel"];?></td>
					 </tr>
					<?php
					}
					?>
					 <tr class="cart_menu">
					 <td>State bile</td>
					 <td><?=$objResult4["status_sily"];?></td>
					 </tr>
					 </table>
					<div class="col-sm-3">
						<?php
							if($objResult5["status"] == "Refund" ){
						?>
						<a class="btn btn-default update" type="submit" href="Confirm_order.php?od_get_id=<?=$objResult["od_id"];?>">Confirm Refund</a>
						<?php
							}else if($objResult5["status"] == "Post" ){
						?>
						<a class="btn btn-default update" type="submit" href="Confirm_order.php?od_get_id=<?=$objResult["od_id"];?>">Confirm</a>
						<?php
							}
						?>
					</div>
				 </div>
				<?php
				if($objResult5["status"] == "Wait" ){
				?>
				<div class="col-sm-4 view-product">
					<h2>Sily</h2>
					<img src="<?php echo $objResult4["sily_pic"];?>" class="img-responsive" alt="" />
				</div>
				<?php
				}else if($objResult5["status"] == "Refund Done" ){
				?>
				<div class="col-sm-4 view-product">
					<h2>Sily Refund</h2>
					<img src="../Project_admid/<?php echo $objResult4["sily_pic"];?>" class="img-responsive" alt="" />
				</div>
				<?php
				}else if($objResult5["status"] == "Post" ){
				?>
				<div class="col-sm-4 view-product">
					<h2>Bile Parcel Number</h2>
					<img src="../Project_admid/<?php echo $objResult6["ck_img"];?>" class="img-responsive" alt="" />
				</div>
				<?php
				}
				?>
			</div>
			<br>
			<br>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image-wrapper">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<?php
					$Total = 0;
					$SumTotal = 0;
					$strSQL2 = "SELECT * FROM order_qty WHERE od_id = '".$_GET["qty_id"]."'";
					$objQuery2 = mysqli_query($c,$strSQL2);
					while($objResult2 = mysqli_fetch_array($objQuery2,MYSQLI_ASSOC))
						{
						$strSQL3 = "SELECT * FROM productmaster WHERE pm_id = '".$objResult2["pm_id"]."' ";
						$objQuery3 = mysqli_query($c,$strSQL3);
						$objResult3 = $objResult = mysqli_fetch_array($objQuery3,MYSQLI_ASSOC);
						$Total = $objResult2["qty"] * $objResult3["pm_price"];
						$SumTotal = $SumTotal + $Total;
						?>
					<tbody>
						<tr>
							<td class="cart_product productinfo col-sm-3">
								<a><img src="../Project_admid/<?php echo $objResult3["pm_img"];?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a><?=$objResult3["pm_name"];?></a></h4>
								<p><?=$objResult2["pm_id"];?></p>
							</td>
							<td class="cart_price">
								<p><?=$objResult3["pm_price"];?></p>
							</td>
							<td class="cart_price">
								<p><?=$objResult2["qty"];?></p>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($Total,2);?></p>
							</td>
							
						</tr>
						<?php
						}
						?>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Total</td>
										<td><span><?php echo number_format($SumTotal,2);?></span></td>
									</tr>
								</table>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<?php
					if($objResult5["status"] == "Wait"){
				?>
					<a class="btn btn-default update" type="submit" href="refund_order.php?od_get_id=<?=$_GET["qty_id"];?>" >Cancel and Refund?</a>
				<?php
					}
			
			mysqli_close($c);
			?>
		</div>
	</section> <!--/#cart_items-->
	
	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://www.themeum.com">Themeum</a></span></p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>