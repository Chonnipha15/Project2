<?php
if(isset($_GET['sid'])){
	include_once("connect.php");
	
	$sql="DELETE FROM student WHERE `student`.`s_id` = '{$_GET['sid']}' ";
	mysqli_query($conn,$sql) or die ("ลบข้อมูลไม่สำเร็จ");
	echo "<script>";
	echo "window.location='student.php';";
	echo "</script>";
	}
?>