<?php
 session_start();
 include "connect.php";
 date_default_timezone_set('Asia/Bangkok');
 $date=date('Y-m-d H:i:s');
 $id_update=$_GET["od_get_id"];
 /*$statusCC ="Cancer";*/
 $statusBC ="Refund complete";

 $fileimg= rand(1000,100000)."-".$_FILES['fileimg']['name'];
 $file_loc = $_FILES['fileimg']['tmp_name'];
 $file_size = $_FILES['fileimg']['size'];
 $file_type = $_FILES['fileimg']['type'];
 $folderimg="imgrefund/";
 $filepath=$folderimg.$fileimg;
 move_uploaded_file($file_loc,$folderimg.$fileimg);
 
 $odStute = "update order_state set status='$statusBC' where od_id='$id_update' ";
 $objQuery1 = mysqli_query($c,$odStute);
 if(!$objQuery1)
 {
	echo $c->error;
	exit();
 }
 
 $silyStute = "update sily_img set sily_pic='$filepath',status_sily='$statusBC' where od_id='$id_update' ";
 $objQuery2 = mysqli_query($c,$silyStute);
 if(!$objQuery2)
 {
	echo $c->error;
	exit();
 }
 
 /*$strSQL = "SELECT * FROM sily_img WHERE od_id = $id_update ";
 $objQuery = mysqli_query($c,$strSQL);
 $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
 
 //echo $objResult["status_sily"];
 if($objResult["status_sily"] == "Done"){
	$silyStute = "update sily_img set status_sily='$statusBC',sily_pic='$filepath' where od_id='$id_update' ";
	$objQuery2 = mysqli_query($c,$silyStute);
		if(!$objQuery2)
		{
			echo $c->error;
			exit();
		}
	$odStute1 = "update order_state set status='$statusBC' where od_id='$id_update' ";
	$objQuery4 = mysqli_query($c,$odStute1);
	if(!$objQuery4)
	{
	 echo $c->error;
	 exit();
	}
	
	}else if($objResult["status_sily"] == "Wait"){
	$silyStute1 = "update sily_img set status_sily='$statusCC',sily_pic='$filepath' where od_id='$id_update' ";
	$objQuery3 = mysqli_query($c,$silyStute1);
	if(!$objQuery3)
		{
			echo $c->error;
			exit();
		}
 }*/
 

 mysqli_close($c);
 header("location:order_cancer.php");
 ?>