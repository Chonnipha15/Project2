<?php
if(isset($_GET['Lid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM lecturer WHERE `lecturer`.`L_id` = '{$_GET['Lid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='lecturer.php';";
	echo "</script>";
	}
?>