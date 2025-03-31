<?php
if(isset($_GET['wid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM work WHERE `work`.`w_id` = '{$_GET['wid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='work-admin.php';";
	echo "</script>";
	}
?>