<?php
session_start();
include_once("connect.php");

// ตรวจสอบการเชื่อมต่อฐานข้อมูล
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query ดึงข้อมูล
$sql = "SELECT pj_id, pj_project, pj_name, pj_num, pj_sname, pj_sid, 
        pj_subject, pj_chairman, pj_director, pj_teacher, pj_date, pj_time, pj_room FROM pjappoint";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LifeSure - Life Insurance Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Inter:slnt,wght@-10..0,100..900&display=swap" rel="stylesheet">

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
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<style>
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
        display: none;
        position: absolute;
    }

    .dropdown-submenu:hover .dropdown-menu {
        display: block;
    }
    .dropdown-submenu {
        position: relative;
    }

    /* ให้เมนูย่อย (Submenu) ขึ้นทางฝั่งซ้าย */
    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: auto;
        right: 100%;
        margin-top: -1px;
        display: none;
        position: absolute;
    }

    .dropdown-submenu:hover .dropdown-menu {
        display: block;
    }
    body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
}

.container {
    width: 80%;
    margin: auto;
    text-align: center;
}

h2 {
    margin-bottom: 20px;
}

.project-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

.project-table th, .project-table td {
    padding: 10px;
    text-align: center;
    border: 1px solid #ddd;
}

.project-table th {
    background-color:rgb(67, 93, 211);
    color: white;
}

.project-table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.project-table tr:hover {
    background-color: #ddd;
}

    
</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <div class="container-fluid topbar px-0 px-lg-4 bg-light py-2 d-none d-lg-block">
            <div class="container">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="https://shorturl.asia/Lw9xf" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div>
                            <div class="ps-3">
                                <div class="text-muted small"><i class="bi bi-emoji-laughing-fill text-primary me-2"></i>ยินดีต้อนรับคุณ <?=$_SESSION['sname'];?></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/bc.mbs.thailand"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                <img src="image/1.jpg" class="rounded-circle" width="80" height="80"> 
                        <h1 class="text-primary mb-0 text-primary me-2"></i>BC-DBIS</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-0 mx-lg-auto d-flex align-items-center">
        <a href="indexstudent.php" class="nav-item nav-link active">หน้าหลัก</a>
        <a href="contact-admin1.php" class="nav-item nav-link">ติดต่อแอดมิน</a>
        <a href="logout.php" class="nav-item nav-link">ออกจากระบบ</a>

</div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center bg-primary">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="btn bg-light border nput-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Project Information</h4>
        </div>
    </div>
    <!-- Header End -->
    <html lang="th">
<head>
    <meta charset="utf-8">
    <title>ตารางข้อมูลโครงการ</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Bootstrap & CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<br>
<div class="container">
    <h2>ตารางข้อมูลโครงการ</h2>

    <?php if ($result->num_rows > 0) : ?>
        <table class="project-table">
            <thead>
                <tr>
                   
                    <th>ชื่อโครงการ</th>
                    <th>รายชื่อนิสิต</th>
                    <th>รหัสนิสิต</th>
                    <th>รายวิชา</th>
                    <th>รายชื่ออาจารย์</th>
                    <th>คณะกรรมการ</th>
                    <th>วันสอบ</th>
                    <th>เวลาสอบ</th>
                    <th>ห้องสอบ</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        
                        <td><?= htmlspecialchars($row['pj_project']); ?></td>
                        <td><?= implode('<br>', array_filter([$row['pj_name'], $row['pj_sname']])); ?></td>
                        <td><?= implode('<br>', array_filter([$row['pj_num'], $row['pj_sid']])); ?></td>
                        <td><?= htmlspecialchars($row['pj_subject']); ?></td>
                        <td><?= implode('<br>', array_filter([$row['pj_chairman'], $row['pj_director'], $row['pj_teacher']])); ?></td>
                        <td>
                            <?php 
                            echo implode('<br>', array_filter(['ประธานกรรมการสอบ', 'กรรมการสอบ', 'อาจารย์ที่ปรึกษา']));
                            ?>
                        </td>
                        <td><?= htmlspecialchars($row['pj_date']); ?></td>
                        <td><?= htmlspecialchars($row['pj_time']); ?></td>
                        <td><?= htmlspecialchars($row['pj_room']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else : ?>
        <p>ไม่พบข้อมูลโครงการ</p>
    <?php endif; ?>
</div>
<br>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php $conn->close(); ?>

</body>
</html>


      <!-- Back to Top -->
      <a href="#" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>


<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>