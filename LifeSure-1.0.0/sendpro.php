<?php
    session_start();
    include_once("connect.php");
    $sql1 = "SELECT * FROM `project`" ;
    $rs1 = mysqli_query($conn, $sql1);
    $data1 = mysqli_fetch_array($rs1);
    
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
    
</style>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
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
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid nav-bar px-0 px-lg-4 py-lg-0">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <img src="image/1.jpg" class="rounded-circle" width="80" height="80"> 
                    <h1 class="text-primary mb-0 text-primary me-2">BC-DBIS</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
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
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">SEND PROJECT</h4>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">SEND YOUR PROJECT</h4>
            </div>
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="contact-img d-flex justify-content-center">
                        <div class="contact-img-inner">
                            <img src="img/send1.jpg" class="img-fluid w-100"  alt="Image">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                    <h4 class="text-primary">กรอกข้อมูลโปรเจคของท่าน</h4>
                    <form method="post" action="" enctype="multipart/form-data" onsubmit="return validateForm()">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" name="name" required placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" name="email" required placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="tel" class="form-control border-0" id="phone" name="phone" required placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="student_id" name="student_id" required placeholder="Student ID">
                                    <label for="student_id">Student ID</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="subject" name="subject" required placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-floating">
                                    <select class="form-select border-0" id="teacher" name="teacher" required>
                                        <option value="" disabled selected></option>
                                        <?php
                                        include 'connect.php';
                                        $sql = "SELECT t_id, t_name FROM teacher";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<option value='" . htmlspecialchars($row["t_id"]) . "'>" . htmlspecialchars($row["t_name"]) . "</option>";
                                            }
                                        } else {
                                            echo "<option value='' disabled>ไม่มีข้อมูลอาจารย์</option>";
                                        }
                                        ?>
                                    </select>
                                    <label for="lecturer">Lecturer</label>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="pfile">แนบไฟล์โปรเจค (เฉพาะไฟล์ PDF)</label>
                                <input type="file" name="pfile" class="form-control" id="pfile" accept="application/pdf" required>    
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit" name="Submit">Send Project</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    
    <!-- Footer Start -->
    <div class="container-fluid py-5 bg-dark text-light footer">
        <div class="container">
            <div class="row align-items-center">
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include 'connect.php'; // เชื่อมต่อฐานข้อมูล

// ตรวจสอบว่า session สำหรับนักศึกษามีการตั้งค่าไว้หรือไม่
if (isset($_SESSION['sid'])) {
    $s_id = $_SESSION['sid']; // ใช้ session ที่เก็บ ID นักศึกษา
    $s_id = mysqli_real_escape_string($conn, $s_id); // ป้องกัน SQL Injection
} else {
    // ถ้า session ไม่มีค่า (ไม่ได้ล็อกอิน) ให้เปลี่ยนเส้นทางไปที่หน้าล็อกอิน
    header("Location: login.php");
    exit();
} 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $student_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $teacher = mysqli_real_escape_string($conn, $_POST['teacher']); // ส่วนนี้จะเอาไว้เก็บค่า t_id สำหรับ teacher

    if (isset($_FILES['pfile']) && $_FILES['pfile']['error'] == 0) {
        $file_name = $_FILES['pfile']['name'];
        $file_tmp = $_FILES['pfile']['tmp_name'];
        $file_size = $_FILES['pfile']['size'];
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

        $upload_dir = "uploads/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }

        $new_file_name = "project_" . time() . "." . $file_ext;
        $file_path = $upload_dir . $new_file_name;

        if ($file_ext != "pdf") {
            echo "<script>alert('โปรดอัปโหลดไฟล์ PDF เท่านั้น'); window.history.back();</script>";
            exit;
        }

        if ($file_size > 5 * 1024 * 1024) {
            echo "<script>alert('ขนาดไฟล์ไม่ควรเกิน 5MB'); window.history.back();</script>";
            exit;
        }

        if (move_uploaded_file($file_tmp, $file_path)) {
            // เพิ่มการบันทึก s_id ลงในฐานข้อมูล
            $stmt = $conn->prepare("INSERT INTO project (p_name, p_email, p_phone, p_idstudent, p_subject, p_file, t_id, s_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
            if ($stmt === false) {
                die("เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL: " . $conn->error);
            }

            // ใช้ bind_param สำหรับส่งค่าของ s_id, t_id ไปยังฐานข้อมูล
            $stmt->bind_param("ssssssii", $name, $email, $phone, $student_id, $subject, $file_path, $teacher, $s_id);

            if ($stmt->execute()) {
                echo "<script>alert('ส่งโปรเจคสำเร็จ'); window.location='sendpro.php';</script>";
            } else {
                echo "<script>alert('เกิดข้อผิดพลาดในการบันทึกข้อมูล'); window.history.back();</script>";
            }
            $stmt->close();
        } else {
            echo "<script>alert('เกิดข้อผิดพลาดในการอัปโหลดไฟล์'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('กรุณาแนบไฟล์ PDF'); window.history.back();</script>";
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
mysqli_close($conn); 
?>


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