<?php
if(isset($_GET['Aid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM academic WHERE `academic`.`A_id` = '{$_GET['Aid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='academic-admin.php';";
	echo "</script>";
	}
?>