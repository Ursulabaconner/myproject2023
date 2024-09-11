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
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Product Add</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Add Product</strong> Here
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="admin_product_add2.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Product Name</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Name Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="pm_name" placeholder="Text" class="form-control">
                                                    <small class="form-text text-muted">This is a help text</small>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Select</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="pm_type" id="SelectLm" class="form-control-sm form-control" >
													 <option value="0" เลือกประเภทสินค้า </option>
													 <?php include "connect.php";
													 $sql="select * from produt_type";
													 $result = $c->query($sql);

													 while($rs=$result->fetch_assoc()) {
													 $id_type=$rs["pt_id"];
													 $name_type=$rs["pt_name"];
													 echo "<option value='$id_type'> $name_type</option>";
													 }
													 ?>
													 </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="textarea-input" class=" form-control-label">details</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <textarea name="pm_detail" id="textarea-input" rows="9" class="form-control"></textarea>
                                                </div>
                                            </div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Quantity Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="pm_qty" class="form-control">
                                                </div>
                                            </div>
											<div class="row form-group">
												<div class="col col-md-3">
													<label for="text-input" class="form-control-label">Price</label>
                                                </div>
												<div class="col-12 col-md-9">
													<input id="text-input" name="pm_price" type="text" class="form-control" aria-required="true" aria-invalid="false" value="100.00">
												</div>
											</div>
											<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Size Input</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="text-input" name="pm_size" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Picture</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="fileimg" class="form-control-file">
													<script>
													 var $imageupload = $('.imageupload');
													 $imageupload.imageupload();
													 </script>
                                                </div>
                                            </div>
											
											<div class="card-footer">
												<button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
												</button>
												<button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
												</button>
											</div>
                                        </form>
                                    </div>
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
