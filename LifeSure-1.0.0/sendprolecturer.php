<?php
    session_start();
    include_once("connect.php");
?>
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
    </head>

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
    <div class="col-lg-8 d-flex justify-content-start align-items-center">
        <!-- ลิงก์ Find A Location และข้อความยินดีต้อนรับ -->
        <div class="d-flex">
            <div class="border-end border-primary pe-3">
                <a href="https://shorturl.asia/Lw9xf" class="text-muted small">
                    <i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location
                </a>
            </div>
            <div class="ps-3 text-muted small">
                <i class="bi bi-emoji-laughing-fill text-primary me-2"></i>ยินดีต้อนรับคุณ <?=$_SESSION['tname'];?>
            </div>
        </div>
    </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-flex justify-content-end">
                    <div class="d-flex border-end border-primary pe-3">
                        <a class="btn p-0 text-primary me-3" href="https://www.facebook.com/mbstogether"><i class="fab fa-facebook-f"></i></a>
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
        <a href="indexlec.php" class="nav-item nav-link active">หน้าหลัก</a>
        
        <a href="logout.php" class="nav-item nav-link">ออกจากระบบ</a>
    </div>
</div>
                        </div>
                    </div>
                        </a>
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

        <!-- Team Start -->
        

        <?php
include 'connect.php'; // เชื่อมต่อฐานข้อมูล
if (isset($_SESSION['tid'])) {
    $t_id = $_SESSION['tid'];
    $t_id = mysqli_real_escape_string($conn, $t_id);
}
$sql = "SELECT * FROM `project` WHERE t_id = '$t_id' ORDER BY p_id DESC";
$rs = mysqli_query($conn, $sql);
?>
<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-4">ข้อเสนอโปรเจคนิสิต</h1>
            <p class="mb-0">สาขาคอมพิวเตอร์ธุรกิจ และสาขาวิชาธุรกิจดิจิทัลและระบบสารสนเทศ</p>
        </div>
        <div class="row g-4">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="15%">ชื่อ-สกุล</th>
                        <th scope="col" width="15%">E-mail</th>
                        <th scope="col" width="15%">เบอร์โทร</th>
                        <th scope="col" width="15%">รหัสนิสิต</th>
                        <th scope="col" width="18%">ไฟล์โปรเจค</th>
                        <th scope="col" width="15%">วันที่ส่ง</th>
                        <th scope="col" width="14%">สถานะ</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    while($data = mysqli_fetch_array($rs)){
                    ?>
                    <tr>
                        <td width="35%" style="text-align: center; vertical-align: middle;"><?= $data['p_name']; ?></td>
                        <td width="20%" style="text-align: center; vertical-align: middle;"><?= $data['p_email']; ?></td>
                        <td width="35%" style="text-align: center; vertical-align: middle;"><?= $data['p_phone']; ?></td>
                        <td width="35%" style="text-align: center; vertical-align: middle;"><?= $data['p_idstudent']; ?></td>
                        <td width="20%" style="text-align: center; vertical-align: middle;">
                        <a href="<?= $data['p_file']; ?>" target="_blank"><?= $data['p_file']; ?></a>
                        </td>

                        <td width="25%" style="text-align: center; vertical-align: middle;"><?= $data['created_at']; ?></td>
                        <td width="25%" style="text-align: center; vertical-align: middle;">
                            <div class="d-flex gap-2 justify-content-center">
                                <!-- ปุ่มอนุมัติ -->
                                <button class="btn status-btn btn-success" onclick="changeStatus(<?= $data['p_id'] ?>, 'อนุมัติ')" <?= ($data['p_status'] == 'อนุมัติ') ? 'disabled' : ''; ?>>อนุมัติ</button>

                                <!-- ปุ่มไม่อนุมัติ -->
                                <button class="btn status-btn btn-danger" onclick="changeStatus(<?= $data['p_id'] ?>, 'ไม่อนุมัติ')" <?= ($data['p_status'] == 'ไม่อนุมัติ') ? 'disabled' : ''; ?>>ไม่อนุมัติ</button>

                                <!-- ปุ่มรอดำเนินการ -->
                                <button class="btn status-btn btn-warning" onclick="changeStatus(<?= $data['p_id'] ?>, 'รอดำเนินการ')" <?= ($data['p_status'] == 'รอดำเนินการ') ? 'disabled' : ''; ?>>รอดำเนินการ</button>
                            </div>
                        </td>
                    </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    /* ปรับขนาดของปุ่มให้เล็กลงอีก */
    .status-btn {
        width: auto; /* ปรับให้ความกว้างของปุ่มพอดีกับเนื้อหาภายใน */
        padding: 3px 10px; /* ปรับขนาดของปุ่มให้เล็กลงอีก */
        font-size: 12px; /* ลดขนาดตัวอักษร */
        transition: background-color 0.3s ease; /* ความนุ่มนวลในการเปลี่ยนแปลงสี */
    }

    .d-flex {
        display: flex;
        gap: 5px; /* ระยะห่างระหว่างปุ่ม */
        justify-content: center; /* จัดให้ปุ่มอยู่กลาง */
    }

    .status-btn:disabled {
        opacity: 0.6;
        pointer-events: none;
    }

    .status-btn:hover {
        opacity: 0.9;
    }

    .status-btn:focus {
        box-shadow: 0 0 5px 3px rgba(0, 123, 255, 0.5); /* ขอบแสงเมื่อเลือกปุ่ม */
    }

    .btn-success {
        background-color: #28a745; /* สีเขียวสำหรับอนุมัติ */
    }

    .btn-danger {
        background-color: #dc3545; /* สีแดงสำหรับไม่อนุมัติ */
    }

    .btn-warning {
        background-color: #ffc107; /* สีเหลืองสำหรับรอดำเนินการ */
    }
</style>


        <!-- Team End -->

         <!-- Footer Start -->
         <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-xl-9">
                        <div class="mb-5">
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-6 col-xl-5">
                                    <div class="footer-item">
                                        <a href="index.html" class="p-0">
                                            <h3 class="text-white"><i class="fab fa-slack me-3"></i>ติดตามข่าวสารได้ที่</h3>
                                            <!-- <img src="img/logo.png" alt="Logo"> -->
                                        </a>
                                       
                                        <div class="footer-btn d-flex">
                                            <a class="btn btn-md-square rounded-circle me-3" href="https://www.facebook.com/mbstogether"><i class="fab fa-facebook-f"></i></a>
                                
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-3">
                                    <div class="footer-item">
                                        <h4 class="text-white mb-4">Useful Links</h4>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Features</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ's</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                                        <a href="#"><i class="fas fa-angle-right me-2"></i> Contact</a>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4">
                                    <div class="footer-item">
                                        <h4 class="mb-4 text-white">กิจกรรม</h4>
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac1.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac1.jpg" data-lightbox="footerInstagram-1" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac2.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac2.jpg" data-lightbox="footerInstagram-2" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac3.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac3.jpg" data-lightbox="footerInstagram-3" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac4.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac4.jpg" data-lightbox="footerInstagram-4" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac5.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac5.jpg" data-lightbox="footerInstagram-5" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                           </div>
                                           <div class="col-4">
                                                <div class="footer-instagram rounded">
                                                    <img src="img/ac6.jpg" class="img-fluid w-100" alt="">
                                                    <div class="footer-search-icon">
                                                        <a href="img/ac6.jpg" data-lightbox="footerInstagram-6" class="my-auto"><i class="fas fa-link text-white"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pt-5" style="border-top: 1px solid rgba(255, 255, 255, 0.08);">
                            <div class="row g-0">
                                <div class="col-12">
                                    <div class="row g-4">
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Address</h4>
                                                    <p class="mb-0">คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม
ตำบลขามเรียง อำเภอกันทรวิชัย จังหวัดมหาสารคาม
44150</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fas fa-envelope fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Mail Us</h4>
                                                    <p class="mb-0">info@mbs.msu.ac.th</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-xl-4">
                                            <div class="d-flex">
                                                <div class="btn-xl-square bg-primary text-white rounded p-4 me-4">
                                                    <i class="fa fa-phone-alt fa-2x"></i>
                                                </div>
                                                <div>
                                                    <h4 class="text-white">Telephone</h4>
                                                    <p class="mb-0">(+012) 3456 7890</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Newsletter</h4>
                            <p class="text-white mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="position-relative rounded-pill mb-4">
                                <input class="form-control rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                <button type="button" class="btn btn-primary rounded-pill position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                            </div>
                            <div class="d-flex flex-shrink-0">
                                <div class="footer-btn">
                                    <a href="#" class="btn btn-lg-square rounded-circle position-relative wow tada" data-wow-delay=".9s">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                        <div class="position-absolute" style="top: 2px; right: 12px;">
                                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex flex-column ms-3 flex-shrink-0">
                                    <span>Call to Our Experts</span>
                                    <a href="tel:+ 0123 456 7890"><span class="text-white">Free: + 0123 456 7890</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    
                </div>
            </div>
        </div>
        <!-- Copyright End -->


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