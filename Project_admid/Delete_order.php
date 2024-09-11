<?php
	session_start();
	$id_del=$_GET["id_del"];
	include "connect.php";
	$sql1="delete from order_detail where od_id='$id_del'";
	$result1=$c->query($sql1);
	
	$sql1="delete from order_qty where od_id='$id_del'";
	$result1=$c->query($sql1);
	
	$sql1="delete from order_state where od_id='$id_del'";
	$result1=$c->query($sql1);
	
	$sql1="delete from sily_img where od_id='$id_del'";
	$result1=$c->query($sql1);
	/*if($result) { echo "<h3> Deleta type be completed </h3>";
	echo "[ <a href=show_type.php>back to show Type?</a> ] ";
	}
	else {echo "<h3> Error : Deleta type not be completed </h3>";
	}*/
	
	$c->close();
	header("location:order_cancer.php");
?>