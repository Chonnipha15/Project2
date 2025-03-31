<?php
include_once("connect.php");

// ดึงจำนวนข้อความที่ยังไม่ได้อ่าน
$sql = "SELECT COUNT(*) AS unread_count FROM mesage WHERE m_status = 'unread'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo $row['unread_count'];
?>

