<?php
if(isset($_GET['iid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM it WHERE `it`.`i_id` = '{$_GET['iid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='it-admin.php';";
	echo "</script>";
	}
?>