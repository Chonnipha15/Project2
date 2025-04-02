<?php
session_start();
unset($_SESSION['sid']);
unset($_SESSION['sname']);

echo "<script>";
echo "window.location = '..LifeSure-1.0.0/sign-in/index.php';";
echo "</script>";
?>