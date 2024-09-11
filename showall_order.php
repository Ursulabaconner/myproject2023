<?php
 session_start();
 if((isset($_SESSION['UserID'])==''))
 {
 header("Location:login.php");
 exit();
 }
 $Uid = ($_SESSION["UserID"]);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Show Order | AK-cosplay</title>
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
								<li><a href="pfmember.php" class="active">โปรไฟล์</a></li>
								<li><a href="showall_order.php">ออเดอร์</a></li>
								<li><a href="edit_profile.php?id_edit=<?php echo $Uid?>">เเก้ไขโปรไฟล์</a></li>
								<!--<li><a href="logout.php">ออกจากระบบ</a></li>-->
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
				  <li><a href="#">Home</a></li>
				  <li class="active">Order</li>
				</ol>
			</div>
			<?php
				/*if(!isset($_SESSION["intLine"]))
				{
					echo "ยังไม่มีออเดอร์";
					exit();
				}
				
				
				print_r($_SESSION);*/
			?>
			<form class="table-responsive cart_info" action="update_cart.php" method="post">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image-wrapper">Name/order id</td>
							<td class="description">Address</td>
							<td class="price">Tal</td>
							<td class="quantity">Email</td>
							<td class="total">DateOrder</td>
							<td class="total">State</td>
							<td class="total"></td>
							<td class="total"></td>
						</tr>
					</thead>
					<?php
					ini_set('display_errors', 1);
					error_reporting(~0);
					include "connect.php";
					
						$strSQL = "SELECT * FROM order_detail where mb_id =$Uid order by od_date desc";
						$objQuery = mysqli_query($c,$strSQL);
						//$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
						if(!$objQuery)
						{
						echo $c->error;
						exit();
						}
						
					while($objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
						{
						$id = $objResult["od_id"];
						$strSQL5 = "SELECT * FROM order_state where od_id =$id ";
						$objQuery5 = mysqli_query($c,$strSQL5);
						$objResult5 = mysqli_fetch_array($objQuery5,MYSQLI_ASSOC);				
					?>
					
					<tbody>
						<tr>
							<td class="cart_product ">
								<h4><a><?=$objResult["od_name"];?></a></h4>
								<p><?=$objResult["od_id"];?></p>
							</td>
							<td class="cart_description">
								<p><?=$objResult["od_address"];?></p>
								
							</td>
							<td class="cart_price">
								<p><?=$objResult["od_tel"];?></p>
							</td>
							<td class="cart_quantity">
								<p><?=$objResult["od_email"];?></p>
							</td>
							<td class="cart_total">
								<p><?=$objResult["od_date"];?></p>
							</td>
							<td class="cart_total">
								<p><?=$objResult5["status"];?></p>
							</td>
							<td class="cart_quantity">
								<a class="btn btn-default active" href="order_member.php?qty_id=<?php echo $objResult["od_id"];?>">view order</a>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="delete_order.php" > <i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</form>
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