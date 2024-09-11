<?php
 session_start();
 include "connect.php";
 date_default_timezone_set('Asia/Bangkok');
 $Total = 0;
 $SumTotal = 0;
 
 $namemb=$_POST["name_member"];
 $bankty=$_POST["bk_type"];

 $payodsum=$_POST["od_pay"];
 $odstatus=$_POST["od_status"];
 $memberid=$_POST["mbid"];
 //echo $payodsum;
 $fileimg= rand(1000,100000)."-".$_FILES['imgsily']['name'];
 $file_loc = $_FILES['imgsily']['tmp_name'];
 $file_size = $_FILES['imgsily']['size'];
 $file_type = $_FILES['imgsily']['type'];
 $folderimg="imgsily/";
 $filepath=$folderimg.$fileimg;
 move_uploaded_file($file_loc,$folderimg.$fileimg);
 
 if($bankty==0) {
	echo "<h3>error : กรุณาเลือกธนาคาร </h3>";
	exit();
	}
 if($fileimg=="") {
	echo "<h3>error : กรุณาอัพโหลดสลีฟ </h3>";
	exit();
	}
 
 $strOrderd = "INSERT INTO order_detail (od_name,mb_id,od_address,od_tel,od_email,od_date)VALUES
	('".$_POST["name_member"]."','".$memberid."','".$_POST["adderss_member"]."','".$_POST["phone_member"]."'
	,'".$_POST["email_member"]."','".date("Y-m-d H:i:s")."')";
 
 $objQuery1 = mysqli_query($c,$strOrderd);
 
 if(!$objQuery1)
 {
	 echo $c->error;
	 exit();
 }
 
 $strOrderID = mysqli_insert_id($c);
 
 $strStute = "INSERT INTO sily_img (od_id,mb_id,sily_name,bank,pay,paydate,sily_pic,status_sily)VALUES
	('".$strOrderID."','".$memberid."','".$_POST["name_member"]."','".$_POST["bk_type"]."','".$_POST["od_pay"]."'
	,'".date("Y-m-d H:i:s")."','".$filepath."','".$_POST["od_status"]."')";
 
 $objQuery2 = mysqli_query($c,$strStute);
 if(!$objQuery2)
 {
	 echo $c->error;
	 exit();
 }
 $strSilyID = mysqli_insert_id($c);
 
 for($i=0;$i<=(int)$_SESSION["intLine"];$i++)
 {
	if($_SESSION["strProductID"][$i] != "")
	{
	 $strSQL1 = "INSERT INTO order_qty (od_id,pm_id,qty)VALUES
	('".$strOrderID."','".$_SESSION["strProductID"][$i]."','".$_SESSION["strQty"][$i]."') ";
	 mysqli_query($c,$strSQL1);
	}
 }

 
 $orderstate = "INSERT INTO order_state (od_id,mb_id,cancelDate,confirmDate,orderDate,total_price,status)VALUES
	(".$strOrderID.",'".$memberid."','".date("")."','".date("Y-m-d H:i:s")."','".date("Y-m-d H:i:s")."'
	,'".$payodsum."','".$odstatus."')";
	
 
 $objQuery3 = mysqli_query($c,$orderstate);
 
 if(!$objQuery3)
 {
	 echo $c->error;
	 exit();
 }
  mysqli_close($c);
  

 //session_destroy();
 unset($_SESSION["intLine"],$_SESSION["strProductID"],$_SESSION["strQty"]);
 header("location:order_member.php?qty_id=".$strOrderID);
 ?>