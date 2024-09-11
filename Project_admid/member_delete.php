<?php
$id_del=$_GET["id_del"];
$photo_del=$_GET["photo_del"];
include "connect.php";
$sql="delete from member where mb_id='$id_del'";
$result=$c->query($sql);
if($photo_del<>"") {
 $photo_del="imgMember/".$photo_del;
 if(file_exists($photo_del)) {
 unlink($photo_del);
 }
 }
if($result) { 
 header("location:admin_member.php");
}
else {echo "<h3> Error : ไม่สามารถลบสมาชิกได้ </h3>";
}
$c->close();
?>