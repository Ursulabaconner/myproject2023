<?php
 ob_start();
 session_start();
 if(isset($_GET["Line"]))
 {
 $Line = $_GET["Line"];
 $_SESSION["strProductID"][$Line] = "";
 $_SESSION["strQty"][$Line] = "";
 }
 if(($_GET["Line"])== 0 )
 {
 unset($_SESSION["intLine"],$_SESSION["strProductID"],$_SESSION["strQty"]);
 }
 
 header("location:cart.php");
 ?>