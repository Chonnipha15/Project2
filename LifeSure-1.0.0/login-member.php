<?php
session_start();
unset($_SESSION['sid']);
unset($_SESSION['sname']);

echo "<script>";
echo "window.location = '../sign-in/member.php';";
echo "</script>";
?>