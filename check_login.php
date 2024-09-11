<?php session_start();
include "connect.php";
$username=($_POST["getusername"]);
$password=($_POST["getpassword"]);
$strSQL = "SELECT * FROM admin WHERE am_username ='$username' and am_password ='$password'";
$objQuery = mysqli_query($c,$strSQL);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if(!$objResult)
{
	//echo "Username and Password Incorrect!";
	$strSQL = "SELECT * FROM member WHERE mb_username ='$username' and mb_password ='$password'";
	$objQuery = mysqli_query($c,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

	$_SESSION["UserID"] = $objResult["mb_id"];

	header("location:index.php");
}
else
{
$_SESSION["UserID"] = $objResult["am_id"];
$_SESSION["Status"] = $objResult["am_status"];

session_write_close();

if($objResult["am_status"] == "admin")
{
	header("location:Project_admid/");
}

}
$c->close();
?>