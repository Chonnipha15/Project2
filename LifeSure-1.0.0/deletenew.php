<?php
if(isset($_GET['nid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM new WHERE `new`.`n_id` = '{$_GET['nid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='new-admin.php';";
	echo "</script>";
	}
?>