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
    <title>Cart | AK-cosplay</title>
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
								<li><a href="showall_order.php"><i class="fa fa-crosshairs"></i> เช็คสินค้า</a></li>
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
				  <li><a href="index.php">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<?php
				
				//print_r($_SESSION);
				
				if(!isset($_SESSION["intLine"]))
				{
					echo "ยังไม่มีสินค้าในตะกร้า";
					exit();
				}
				
				include "connect.php";
			?>
			<form class="table-responsive cart_info" action="update_cart.php" method="post">
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
						for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
						{
						if($_SESSION["strProductID"][$i] != "")
						{
						$strSQL = "SELECT * FROM productmaster WHERE pm_id = '".$_SESSION["strProductID"][$i]."' ";
						$objQuery = mysqli_query($c,$strSQL);
						$objResult = $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
						$Total = $_SESSION["strQty"][$i] * $objResult["pm_price"];
						$SumTotal = $SumTotal + $Total;
					?>
					<tbody>
						<tr class="productinfo ">
							<td class="cart_product col-sm-3">
								<a ><img src="../Project_admid/<?php echo $objResult["pm_img"];?>" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a><?=$objResult["pm_name"];?></a></h4>
								<p><?=$objResult["pm_detail"];?></p>
								<p>Size <?=$objResult["pm_size"];?></p>
							</td>
							<td class="cart_price">
								<p><?=$objResult["pm_price"];?></p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<!--<a class="cart_quantity_up" > + </a>-->
									<input class="cart_quantity_input" min="1" type="number" name="txtQty<?php echo $i;?>" value="<?php echo $_SESSION["strQty"][$i];?>" autocomplete="off" size="1">
									<!--<a class="cart_quantity_down" > - </a>-->
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?php echo number_format($Total,2);?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="delete.php?Line=<?=$i;?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
						}
						}
						?>
					</tbody>
				</table>
			
			<div class="col-sm-6 ">
				<h2 class="col-sm-3 cart_total_price ">Total all</h2>
				<p class="col-sm-2 cart_total_price"><?php echo number_format($SumTotal,2);?></p>
				<a class="btn btn-default update" type="submit" href="index.php">Add order</a>
				<input class="btn btn-default update" type="submit" value="Refresh">
			</div>
			</form>
			<?php
				if($SumTotal > 0)
				{
			?>  
			<div class="col-sm-12 ">
				<a class="btn btn-default check_out" href="confirm.php">Confirm</a>
			</div>
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