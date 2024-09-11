<?php
 ob_start();
 session_start();
 include "connect.php";
 $strSQL = "SELECT * FROM member where mb_id='$Uid' ";
 $objQuery = mysqli_query($c,$strSQL);
 $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
 if(isset($_GET["Line"]))
 {
 $Line = $_GET["Line"];
 $objResult["mb_id"][$Line] = "";
 }
 header("location:pfmember.php");
 ?>