<?php
session_start();  // เริ่มต้น session
include_once("connect.php");  // เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่าได้รับค่าพารามิเตอร์ p_id และ status หรือไม่
if (isset($_GET['p_id']) && isset($_GET['status'])) {
    // รับค่า p_id (ID ของโปรเจค) และ status (สถานะที่เลือก)
    $project_id = $_GET['p_id'];
    $status = $_GET['status'];

    // ตรวจสอบว่า status ที่ได้รับมีค่าถูกต้องหรือไม่
    $valid_status = ['อนุมัติ', 'ไม่อนุมัติ', 'รอดำเนินการ'];  // สถานะที่สามารถใช้ได้
    if (!in_array($status, $valid_status)) {
        echo "สถานะไม่ถูกต้อง!";
        exit();  // ออกจากการทำงานถ้าสถานะไม่ถูกต้อง
    }

    // อัปเดตสถานะในฐานข้อมูล
    $sql_update = "UPDATE project SET p_status = ? WHERE p_id = ?";
    $stmt = $conn->prepare($sql_update);
    $stmt->bind_param("si", $status, $project_id);  // 's' คือ string, 'i' คือ integer

    // ตรวจสอบการอัปเดตข้อมูล
    // ตรวจสอบการอัปเดตข้อมูล
    if ($stmt->execute()) {
        // ถ้าอัปเดตสำเร็จ, เปลี่ยนเส้นทางไปยังหน้าแสดงโปรเจค
        header("Location: sendprolecturer.php");  // เปลี่ยนเส้นทางไปยังหน้า sendprolecturer.php
        exit();  // หยุดการทำงานหลังจากการเปลี่ยนเส้นทาง
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดตสถานะ!";
    }
} else {
    // ถ้าไม่มีข้อมูล p_id หรือ status
    echo "ข้อมูลไม่ครบถ้วน!";
}
?>
