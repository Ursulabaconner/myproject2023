<?php
 session_start();
 include "connect.php";
 date_default_timezone_set('Asia/Bangkok');
 $date=date('Y-m-d H:i:s');
 $id_update=$_GET["od_get_id"];
 $statusDV ="Complete";

 $odStute = "update order_state set status='$statusDV',confirmDate='$date' where od_id='$id_update' ";
 $objQuery1 = mysqli_query($c,$odStute);
 if(!$objQuery1)
 {
	 echo $c->error;
	 exit();
 }
  mysqli_close($c);
 header("location:showall_order.php");
 ?>