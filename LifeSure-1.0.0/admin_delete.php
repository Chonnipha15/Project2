<?php
if(isset($_GET['a_id'])){
	include_once("connect.php");
	
	$sql="DELETE FROM adminn WHERE `adminn`.`a_id` = '{$_GET['a_id']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='admin.php';";
	echo "</script>";
	}
?>