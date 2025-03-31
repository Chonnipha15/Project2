<?php
	$host = "localhost";
	$usr = "root";
	$pwd =  "";
	$db = "bc";

	$conn = mysqli_connect($host,$usr,$pwd,$db) or die ("เชื่อมต่อผ่านข้อมูลไม่ได้");
	mysqli_select_db($conn , "bc") or die ("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8");
?>