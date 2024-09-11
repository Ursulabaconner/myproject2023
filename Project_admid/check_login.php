<?php session_start();
include "connect.php";
$username=mysqli_real_escape_string$_POST["am_username"];
$password=mysqli_real_escape_string$_POST["am_password"];
$strSQL = "SELECT * FROM admin WHERE musername ='$username' and mpassword ='$password'";
$objQuery = mysqli_query($c,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if(!$objResult)
{
echo "Username and Password Incorrect!";
}
else
{
$_SESSION["UserID"] = $objResult["am_id"];
$_SESSION["Status"] = $objResult["am_status"];

session_write_close();

if($objResult["status"] == "admin")
{
	header("location:Project_admid/admin_product.php");
}
else
{
header("location:index.php");
}
}
$c->close();
?>