<?php
 session_start();
 include "connect.php";
 date_default_timezone_set('Asia/Bangkok');
 $date=date('Y-m-d H:i:s');
 $id_update=$_GET["od_get_id"];
 $statusDV ="Post";
 $statusDE ="Done";
 $parcel=$_POST["parcel_NB"];
 
 $fileimg= rand(1000,100000)."-".$_FILES['fileimg']['name'];
 $file_loc = $_FILES['fileimg']['tmp_name'];
 $file_size = $_FILES['fileimg']['size'];
 $file_type = $_FILES['fileimg']['type'];
 $folderimg="imgslied/";
 $filepath=$folderimg.$fileimg;
 move_uploaded_file($file_loc,$folderimg.$fileimg);
 
 $strSQL = "SELECT * FROM order_detail WHERE od_id = $id_update ";
 $objQ = mysqli_query($c,$strSQL);
 $objResult = mysqli_fetch_array($objQ,MYSQLI_ASSOC);
 
 $strSQL1 = "SELECT * FROM order_state WHERE od_id = $id_update ";
 $objQ1 = mysqli_query($c,$strSQL1);
 $objResult1 = mysqli_fetch_array($objQ1,MYSQLI_ASSOC);
 
 $strSQL2 = "SELECT * FROM sily_img WHERE od_id = $id_update ";
 $objQ2 = mysqli_query($c,$strSQL2);
 $objResult2 = mysqli_fetch_array($objQ2,MYSQLI_ASSOC);
 
 $strck = "INSERT INTO check_order (ck_name,md_id,od_id,ck_price,ck_img,ck_state,ck_date,ck_parcel)VALUES
	('".$objResult["od_name"]."','".$objResult["mb_id"]."','".$objResult["od_id"]."','".$objResult2["pay"]."'
	,'".$filepath."','".$objResult1["status"]."','".date("Y-m-d H:i:s")."','".$parcel."')";
	
$objck = mysqli_query($c,$strck);
 
 if(!$objck)
 {
	 echo $c->error;
	 exit();
 }
 
 $odStute = "update order_state set status='$statusDV',confirmDate='$date' where od_id='$id_update' ";
 $objQuery1 = mysqli_query($c,$odStute);
 if(!$objQuery1)
 {
	 echo $c->error;
	 exit();
 }
 
 $silyStute = "update sily_img set status_sily='$statusDE' where od_id='$id_update' ";
 $objQuery2 = mysqli_query($c,$silyStute);
 if(!$objQuery2)
 {
	 echo $c->error;
	 exit();
 }
 $strSilyID = mysqli_insert_id($c);
 
 

  mysqli_close($c);
 header("location:order_deliver.php?qty_id=$id_update");
 ?>