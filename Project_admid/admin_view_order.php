<!DOCTYPE html>
<?php
 session_start();
 if((isset($_SESSION['Status'])==''))
 {
 header("Location:../Project_end/login.php");
 exit();
 }
 include "connect.php";	
	$Uid = ($_SESSION["UserID"]);
	$strAdmin = "SELECT * FROM admin WHERE am_id = $Uid ";
	$objQueryAdmin = mysqli_query($c,$strAdmin);
	$objResultAdmin = mysqli_fetch_array($objQueryAdmin,MYSQLI_ASSOC);
							
 ?>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.php">
                            <img src="images/icon/logo-fix.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="admin_order.php">
                                <i class="fas fa-check-square"></i>Order</a>
                        </li>
						<li>
                            <a href="admin_product.php">
                                <i class="fas fa-archive"></i>Product</a>
                        </li>
                        <li>
                            <a href="admin_product_add.php">
                                <i class="fas fa-download"></i>Product Add</a>
                        </li>
                        <li>
                            <a href="form_type.php">
                                <i class="fas fa-folder"></i>Form Type add</a>
                        </li>
                        <li>
                            <a href="show_type.php">
                                <i class="fas fa-table"></i>show Type</a>
                        </li>
						<li>
                            <a href="admin_member.php">
                                <i class="fas fa-user"></i>User</a>
                        </li>
						<li>
                            <a href="order_deliver.php">
                                <i class="fas fa-truck"></i>Deliver</a>
                        </li>
						<li>
                            <a href="order_cancer.php">
                                <i class="fas fa-ban"></i>Cancer and Refund</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img src="images/icon/logo-fix.png" alt="Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="admin_order.php">
                                <i class="fas fa-check-square"></i>Order</a>
                        </li>
						<li>
                            <a href="admin_product.php">
                                <i class="fas fa-archive"></i>Product</a>
                        </li>
                        <li>
                            <a href="admin_product_add.php">
                                <i class="fas fa-download"></i>Product Add</a>
                        </li>
                        <li>
                            <a href="form_type.php">
                                <i class="fas fa-folder"></i>Form Type add</a>
                        </li>
                        <li>
                            <a href="show_type.php">
                                <i class="fas fa-table"></i>show Type</a>
                        </li>
						<li>
                            <a href="admin_member.php">
                                <i class="fas fa-user"></i>User</a>
                        </li>
						<li>
                            <a href="order_deliver.php">
                                <i class="fas fa-truck"></i>Deliver</a>
                        </li>
						<li>
                            <a href="order_cancer.php">
                                <i class="fas fa-ban"></i>Cancer and Refund</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login.html">Login</a>
                                </li>
                                <li>
                                    <a href="register.html">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass.html">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" role='search' action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
							
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzDgbPkonHsiIBPzYBJkwI-k3aR0AEEAcw8Q&usqp=CAU" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $objResultAdmin["am_firstName"];?> </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTzDgbPkonHsiIBPzYBJkwI-k3aR0AEEAcw8Q&usqp=CAU" alt="" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $objResultAdmin["am_firstName"];?> <?php echo $objResultAdmin["am_lastName"];?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $objResultAdmin["am_email"];?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout_admin.php">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
			
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
						<div class="row">
                            <div class="col-md-6">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Order</h3>
                                <div class="table-responsive table-responsive-data2">
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
										<table border="1" class="table table-data2">
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
										 <td>Date</td>
										 <td><?=$objResult4["paydate"];?></td>
										 </tr>
										 <tr class="cart_menu">
										 <td>State bile</td>
										 <td><?=$objResult4["status_sily"];?></td>
										 </tr>
										</table>
								</div>
							</div>
								<?php
								if($objResult5["status"] == "Wait" || $objResult5["status"] == "Refund"){
								?>
								<div class="col-sm-4 view-product">
									<h2>Sily</h2>
									<img src="../<?php echo $objResult4["sily_pic"];?>" class="img-responsive" alt="" />
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
								<div class="col-md-12">
									<table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!--<th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>-->
												<th>ProductID</th>
                                                <th>name</th>
                                                <th>qty</th>
                                                <th>price</th>
                                                <th></th>
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
                                            <tr class="tr-shadow">
                                                <!--<td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>-->
												<td><?=$objResult2["pm_id"];?></td>
												<td><h4><a><?=$objResult3["pm_name"];?></a></h4></td>
                                                <td><?=$objResult2["qty"];?></td>
                                                <td><?=$objResult3["pm_price"];?></td>
                                                <td>
												<a><img src="<?php echo $objResult3["pm_img"];?>" alt=""></a>
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
									<?php
										$c->close();
										
									?>	
                                </div>
                                <!-- END DATA TABLE -->
                        </div>
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
