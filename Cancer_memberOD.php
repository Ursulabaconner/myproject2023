<?php
 session_start();
 include "connect.php";
 date_default_timezone_set('Asia/Bangkok');
 $date=date('Y-m-d H:i:s');
 $id_update=$_GET["od_get_id"];
 $number=$_POST["getnumberRefund"];
 $statusBC ="Refund";
 
 $strSQL = "SELECT * FROM order_detail WHERE od_id =  $id_update ";
 $objQuery = mysqli_query($c,$strSQL);
 $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

 $strOrderd = "INSERT INTO refund_order (mb_id,od_id,number_refund,bank_name)VALUES
	('".$objResult["mb_id"]."','".$objResult["od_id"]."','".$number."','".$_POST["getbankRefund"]."')";
 
 $objQuery = mysqli_query($c,$strOrderd);
 
 if(!$objQuery)
 {
	 echo $c->error;
	 exit();
 }

 $silyStute = "update sily_img set status_sily='$statusBC' where od_id='$id_update' ";
 $objQuery2 = mysqli_query($c,$silyStute);
	if(!$objQuery2)
{
	echo $c->error;
	exit();
}
 
 $odStute1 = "update order_state set status='$statusBC',cancelDate='$date' where od_id='$id_update' ";
 $objQuery4 = mysqli_query($c,$odStute1);
 if(!$objQuery4)
 {
	echo $c->error;
	exit();
 }
	
 mysqli_close($c);
 header("location:order_member.php?qty_id=$id_update");
 ?>