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
					<?php
					// to change a session variable, just overwrite it
					//print_r($_SESSION);
					include "connect.php";
					$sql="select * from order_state order by od_id desc";
					$result = $c->query($sql);
					$number=$result->num_rows;
					$no=1;
					
					
					
					
					/*$Ckid = $objResult["od_id"];
					
					$strSQL1 = "SELECT * FROM order_state WHERE od_id = $Ckid ";
					$objQuery1 = mysqli_query($c,$strSQL1);
					$objResult1 = mysqli_fetch_array($objQuery1,MYSQLI_ASSOC);
					
					$stateCK = $objResult1["status"];*/
					
					?>
					
						<div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Order Deliver</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                            <select class="js-select2" name="property">
                                                <option selected="selected">All Properties</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            <select class="js-select2" name="time">
                                                <option selected="selected">Today</option>
                                                <option value="">3 Days</option>
                                                <option value="">1 Week</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                        <button class="au-btn-filter">
                                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                                    </div>
                                    <div class="table-data__tool-right">
									
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <!--<th>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </th>-->
												<th>orderID</th>
                                                <th>name</th>
                                                <th>email</th>
                                                <th>address</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>price</th>
                                                <th></th>
                                            </tr>
                                        </thead>
										<?php
										if($number<>0) {
											
											while($rs=$result->fetch_assoc()) {
												$id_order=$rs["od_id"];
												$id_status=$rs["status"];
												$price=$rs["total_price"];
												
												$strSQL = "SELECT * FROM order_detail WHERE od_id = $id_order ";
												$objQuery = mysqli_query($c,$strSQL);
												$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
												

												
												if($id_status == "Post"|| $id_status == "Wait"){
										?>
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <!--<td>
                                                    <label class="au-checkbox">
                                                        <input type="checkbox">
                                                        <span class="au-checkmark"></span>
                                                    </label>
                                                </td>-->
												<td><a href= 'admin_view_order.php?qty_id=<?php echo $id_order?>'><?php echo $id_order ?></a></td>
                                                <td><?=$objResult["od_name"];?></td>
                                                <td>
                                                    <span class="block-email"><?=$objResult["od_email"];?></span>
                                                </td>
                                                <td class="desc"><?=$objResult["od_address"]; ?></td>
                                                <td><?=$objResult["od_date"]; ?></td>
                                                <td>
												<?php
													if($id_status == "Post"){
												?>
													<span class="status--denied">Wait for confirm</span>
												<?php
													}else if($id_status == "Wait"){
												?>
													<span class="status--denied">Wait for Post</span>
												<?php
													}else if($id_status == "Compile"){
												?>
													<span class="status--process">Compile</span>
												<?php
													}
												?>
                                                </td>
                                                <td><?php echo $price ?></td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <?php
															if($id_status == "Wait" ){
														?>
														<button class="item" data-toggle="tooltip" data-placement="top" title="Deliver">
                                                            <a href="upload_Deliver.php?od_get_id=<?php echo $id_order?>"  class="zmdi zmdi-mail-send" ></a>
                                                        </button>
                                                        <?php
															}
														?>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Detail">
                                                            <a href="admin_view_order.php?qty_id=<?php echo $id_order?>" class="zmdi fa-file-text"></a>
                                                        </button>
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Cancer">
                                                            <a href="#" class="zmdi zmdi-delete"></a>
                                                        </button>
                                                       
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="spacer"></tr>
											<?php
												$no++;
												}else{
											$no++;	
											}
											}
											 ?>
                                        </tbody>
                                    </table>
									<?php
										$c->close();
										}
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
