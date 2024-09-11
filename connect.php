<?php
$host="localhost";
$username="root";
$pw="";
$dbname="ak-cosplay";
$c= new mysqli($host,$username,$pw,$dbname);
if(!$c) {
echo "<h3> Error :: ไม่สามารถเชื่อมต่อฐานข้อมูลได้ </h3>";
exit();
 }
?>