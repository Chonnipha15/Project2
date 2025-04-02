<?php
	error_reporting(0);
	session_start();
	
	unset($_session['sname']);
	unset($_session['spassword']);
	
	session_destroy();
	echo "<script>";
	echo "window.location='./index.php';";
	echo "</script>";
?> 