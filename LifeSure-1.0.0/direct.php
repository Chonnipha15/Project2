<?php
session_start(); 
include_once("connect.php");
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Reply'])) {
    // รับค่า ID ของข้อความที่ต้องการอัปเดต
    $rp_id = $_POST['rp_id'];
    
    // อัปเดตสถานะเป็น "read"
    $sql_update = "UPDATE mesage SET m_intification = 'read' WHERE m_id = '$rp_id'";
    if (mysqli_query($conn, $sql_update)) {
        // หากอัปเดตสำเร็จ สามารถแสดงข้อความแจ้งเตือนหรือรีเฟรชหน้า
        echo "สถานะข้อความได้ถูกอัปเดตเป็น 'อ่านแล้ว'.";
    } else {
        echo "เกิดข้อผิดพลาดในการอัปเดตสถานะข้อความ.";
    }
    
}

?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LifeSure - Life Insurance Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@100..1000&family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="lib/animate/animate.min.css"/>
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        .service-icon i {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <img src="image/1.jpg" class="rounded-circle" width="80" height="80"> 
                <h1 class="text-primary mb-0 text-primary me-2">BC-DBIS</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-0 mx-lg-auto d-flex align-items-center">
                        <a href="indexadmin.php" class="nav-item nav-link active">หน้าหลัก</a>
                        <div class="service-icon p-3">
                            <a href="direct.php">
                                <i class="bi bi-bell fa-2x"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <center>
        <h1>Direct-Message</h1>
        <br>
        <div class="container border">
            <table id="myTable" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th width="12%">Name</th>
                        <th width="15%">Email</th>
                        <th width="12%">Phone</th>
                        <th width="11%">Status</th>
                        <th width="14%">Subject</th>
                        <th width="14%">Message</th>
                        <th width="14%">ตอบกลับข้อความ</th>
                        <th width="12%">สถานะข้อความ</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                include_once('connect.php');

                if (isset($_SESSION['m_id']) && !empty($_SESSION['m_id'])) {
                    $m_id = mysqli_real_escape_string($conn, $_SESSION['m_id']);
                    $sql = "SELECT * FROM `mesage` WHERE `m_id` = '$m_id' ORDER BY `m_id` DESC";
                } else {
                    $sql = "SELECT * FROM `mesage` ORDER BY `m_id` DESC";
                }

                $rs = mysqli_query($conn, $sql);
                if (!$rs) {
                    die("Error in SQL Query: " . mysqli_error($conn)); // เช็ค error ของ SQL
                }

                while ($data = mysqli_fetch_array($rs)) {
                    // ตรวจสอบสถานะของข้อความ
                    $status = $data['m_intification']; // หรือ $data['m_status'] ขึ้นอยู่กับว่าคุณใช้คอลัมน์ไหน
                    $button_class = ($status == 'read') ? 'btn btn-sm btn-success' : 'btn btn-sm btn-primary'; // ปรับปุ่มให้เป็นสีเขียวเมื่ออ่านแล้ว
                ?>
                    <tr>
                        <td><?= htmlspecialchars($data['m_name']); ?></td>
                        <td><?= htmlspecialchars($data['m_email']); ?></td>
                        <td><?= htmlspecialchars($data['m_phone']); ?></td> 
                        <td><?= htmlspecialchars($data['m_status']); ?></td>
                        <td><?= htmlspecialchars($data['m_subject']); ?></td>
                        <td><?= htmlspecialchars($data['m_message']); ?></td>
                        <td>
                            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?= $data['m_email']; ?>&su=ตอบกลับจากแอดมินเพจBC-DBIT" 
                               class="btn btn-sm btn-primary" target="_blank">ตอบกลับ</a>
                        </td>
                        <td>
                            <form action="direct.php" method="POST" style="display:inline;">
                                <input type="hidden" name="rp_id" value="<?= $data['m_id']; ?>" />
                                <button type="submit" name="Reply" class="<?= $button_class ?>">อ่านแล้ว</button> <!-- ใช้คลาสตามสถานะ -->
                            </form>
                        </td>
                    </tr>
                <?php
                }
                mysqli_close($conn);
                ?>
                </tbody>
            </table>
        </div>
        <br>
    </center>
</body>
</html>

