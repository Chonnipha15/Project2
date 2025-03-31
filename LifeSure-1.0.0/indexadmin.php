<?php
    session_start();
    include_once("connect.php");
    
    $sql = "SELECT COUNT(*) AS unread_count FROM mesage WHERE m_intification = 'unread'"; // คำสั่ง SQL
    $result = $conn->query($sql); // รันคำสั่ง SQL
    $row = $result->fetch_assoc(); // ดึงข้อมูลมา
    $unread_count = $row['unread_count']; // จำนวนข้อความที่ยังไม่ได้อ่าน
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
     <style>
        .service-icon i {
    font-size: 16px;
}
        </style>
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
                    <div class="col-lg-8 text-center text-lg-start mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="https://shorturl.asia/Lw9xf" class="text-muted small"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
                            </div>
                            <div class="ps-3">
                                <div class="text-muted small"><i class="bi bi-emoji-laughing-fill text-primary me-2"></i>ยินดีต้อนรับคุณ <?=$_SESSION['aname'];?></div>
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
        <a href="indexadmin.php" class="nav-item nav-link active">หน้าหลัก</a>
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ข่าวสาร</a>
            <div class="dropdown-menu">
                <a href="new-admin.php" class="dropdown-item">ข่าวสาร</a>
                <a href="work-admin.php" class="dropdown-item">ประชาสัมพันธ์ตำแหน่งงาน</a>
                <a href="it-admin.php" class="dropdown-item">บทความ/ข่าวสารทางไอที</a>
                <a href="academic-admin.php" class="dropdown-item">ประชุมวิชาการ</a>
            </div>
        </div>
        <a href="performance-admin.php" class="nav-item nav-link">ผลงานนิสิต</a>
        <a href="logout.php" class="nav-item nav-link">ออกจากระบบ</a>
        <div class="service-icon p-3">
    <a href="direct.php">
        <i class="bi bi-bell fa-2x">
            <?php if ($unread_count > 0): ?>
                <span class="badge bg-danger"><?= $unread_count ?></span> <!-- แสดงจำนวนข้อความ -->
            <?php endif; ?>
        </i>
    </a>
</div>




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


        <!-- Carousel Start -->
        <div class="header-carousel owl-carousel">
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-7 animated fadeInLeft">
                                <div class="text-sm-center text-md-start">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To MBS</h4>
                                    <h1 class="display-1 text-white mb-4">BUSINESS COMPUTER</h1>
                                    <h4 class="text-white">->สาขาคอมพิวเตอร์ธุรกิจ</h4>
                                    <p class="mb-5 fs-5">มุ่งผลิตบัณฑิตให้มีความรอบรู้ทางด้านบริหารธุรกิจและคอมพิวเตอร์ธุรกิจ เพื่อให้ก้าวทันต่อการ
                                    เปลี่ยนแปลงของเทคโนโลยี และสามารถเลือกใช้เทคโนโลยีสารสนเทศได้อย่างมีประสิทธิภาพ ตลอดจนการ
                                    พัฒนาระบบงานเทคโนโลยีสารสนเทศให้เป็นประโยชน์ต่อองค์กรธุรกิจสังคมและประเทศชาติ

                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-5 animated fadeInRight">
                                <div class="calrousel-img" style="object-fit: cover;">
                                    <img src="image/b1.jpg" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-carousel-item bg-primary">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                            <div class="col-lg-5 animated fadeInLeft">
                                <div class="calrousel-img">
                                    <img src="image/b2.jpg" class="img-fluid w-100" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7 animated fadeInRight">
                                <div class="text-sm-center text-md-end">
                                    <h4 class="text-white text-uppercase fw-bold mb-4">Welcome To MBS</h4>
                                    <h1 class="display-1 text-white mb-4">Digital Business and Information Systems 
                                    </h1>
                                    <h4 class="text-white">->สาขาวิชาธุรกิจดิจิทัลและระบบสารสนเทศ</h4>
                                    <p class="mb-5 fs-5">มุ่งให้มีความรู้ความเข้าใจในกระบวนการสร้างและประยุกต์ใช้ความรู้ใหม่ทางธุรกิจดิจิทัล
                                        และระบบสารสนเทศ โดยเนนความเป็นสากลด้านหลักการและแนวคิดของธุรกิจดิจิทัลและระบบสารสนเทศ
                                        เพื่อการพัฒนางานและสังคม

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Service Start -->
        <style>
    /* ปรับขนาดรูปภาพให้เท่ากัน */
    .service-img img {
        height: 200px; /* ปรับความสูงของภาพ */
        object-fit: cover; /* ให้ภาพพอดีกับขนาดโดยไม่ผิดสัดส่วน */
    }
    /* ปรับให้ทุก card มีขนาดเท่ากัน */
    .service-item {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    /* ทำให้เนื้อหาเต็มพื้นที่และปุ่มอยู่ด้านล่าง */
    .service-content {
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    .service-content-inner {
        flex-grow: 1;
    }
</style>
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h1 class="display-4 mb-4">WELCOME TO ADMIN</h1>
                </div>
            <!-- ข้อมูลอาจารย์ -->
                <div class="row g-4 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item h-100">
                            <div class="service-img">
                                <img src="image/a1.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="bi bi-file-earmark-person fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4 d-flex flex-column">
                                <div class="service-content-inner ">
                                    <p class="d-inline-block h4 mb-4">Lecturer</p>
                                    <p class="mb-4">ข้อมูลอาจารย์ประจำสาขา</p><br><br>
                                    <a class=" w-100 btn btn-primary rounded-pill py-2 px-4 mt-auto " href="lecturer.php">รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ข้อมูลนิสิต -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item h-100">
                            <div class="service-img">
                                <img src="image/a2.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="bi bi-people-fill fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4 d-flex flex-column">
                                <div class="service-content-inner">
                                    <p class="d-inline-block h4 mb-4">Student</p>
                                    <p class="mb-4">นิสิตสาขาคอมพิวเตอร์ธุรกิจและนิสิตสาขาธุรกิจดิจิทัลและระบบสารสนเทศ</p>
                                    <a class="w-100 btn btn-primary rounded-pill py-2 px-4 mt-auto" href="student.php">รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- ข้อมูลการส่งโปรเจค -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item h-100">
                            <div class="service-img">
                                <img src="image/a3.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="bi bi-chat-square-text-fill fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4 d-flex flex-column">
                                <div class="service-content-inner">
                                    <p class="d-inline-block h4 mb-4">Project</p>
                                    <p class="mb-4">ข้อมูลการส่งโปรเจคของนิสิต</p><br><br>
                                    <a class="w-100 btn btn-primary rounded-pill py-2 px-4 mt-auto" href="projectadmin.php">รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                 <!-- ข้อมูลแอดมิน -->
                    <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="service-item h-100">
                            <div class="service-img">
                                <img src="image/a4.jpg" class="img-fluid rounded-top w-100" alt="">
                                <div class="service-icon p-3">
                                    <i class="bi bi-person-circle fa-2x"></i>
                                </div>
                            </div>
                            <div class="service-content p-4 d-flex flex-column">
                                <div class="service-content-inner">
                                    <p class="d-inline-block h4 mb-4">Admin</p>
                                    <p class="mb-4">ข้อมูลแอดมิน ผู้ดูแลเว็บไซต์</p><br><br>
                                    <a class="w-100 btn btn-primary rounded-pill py-2 px-4 mt-auto" href="admin.php">รายละเอียด</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

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