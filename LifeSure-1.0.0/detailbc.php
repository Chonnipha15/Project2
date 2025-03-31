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
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        
    

        <style>
/* สไตล์ของ .service */
.service {
    background: linear-gradient(to right, #b3cde0, #e0f7fa); 
    padding: 120px 0;
}

.row {
    display: flex;
    flex-wrap: wrap; 
    justify-content: space-between; 
    align-items: stretch; 
}
.service-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: #fff;
    border-radius: 20px;
    height: 100%; 
    box-sizing: border-box;
}

.service-item img {
    width: 100%;
    height: 250px;
    object-fit: cover; 
}

.service-icon {
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
}

.service-content a {
    color: #007bff;
}

.btn-primary {
    background: linear-gradient(to right,rgb(198, 135, 39), #ff5722);
    border-color: #ff5722;
    padding: 8px 10px;
    border-radius: 20px;
    display: block;
    text-align: center;
    margin-top: 10px;
}
.carousel-inner img {
        width: 60%; 
        margin: auto;
}
.curriculum-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    overflow: hidden;
}

.curriculum-table thead {
    background-color:rgb(70, 206, 73);
    color: white;
}

.curriculum-table th, .curriculum-table td {
    border: 1px solid #7f8c8d;
    padding: 12px 16px;
    text-align: left;
}

.curriculum-table th {
    text-transform: uppercase;
}

.curriculum-table tbody tr:nth-child(odd) {
    background-color: #ecf0f1;
}

.curriculum-table tbody tr:nth-child(even) {
    background-color: #ffffff;
}

.curriculum-table tbody tr:last-child {
    font-weight: bold;
    background-color:rgb(69, 193, 83);
    color: white;
}

.curriculum-table tbody tr td:first-child {
    font-weight: bold;
}

.curriculum-table tbody tr:hover {
    background-color:rgb(148, 248, 164);
    transition: background-color 0.3s ease;
}
.section-title {
        font-size: 25px; 
        font-weight: 300; 
}
.curriculum-table {
    margin-left: 30%; 
    margin-right: 30%; 
}
.curriculum-table {
    width: 78%; 
    margin: 0 auto; 
    
}
.section-title {
    margin-left: 12%; 
}
strong {
    margin-left: 12%; 
}
ul {
    margin-left: 16%; 
}
.section-title1 {
    margin-left: 17%; 
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
                                <a href="https://shorturl.asia/Lw9xf" class="text-muted small" style="text-decoration: none;"><i class="fas fa-map-marker-alt text-primary me-2"></i>Find A Location</a>
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
                        <h1 class="text-primary mb-0"></i>BC-DBIS</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav mx-0 mx-lg-auto d-flex align-items-center">
        <a href="index.php" class="nav-item nav-link active">หน้าหลัก</a>
        
        <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ข่าวสาร</a>
            <div class="dropdown-menu">
                <a href="feature.html" class="dropdown-item">ประชาสัมพันธ์ตำแหน่งงาน</a>
                <a href="team.html" class="dropdown-item">บทความ/ข่าวสารทางไอที</a>
                <a href="testimonial.html" class="dropdown-item">ข้อมูลสหกิจ</a>
                <a href="FAQ.html" class="dropdown-item">ประชุมวิชาการ</a>
            </div>
        </div>
        <a href="blog.html" class="nav-item nav-link">ผลงานนิสิต</a>
        <a href="contact.html" class="nav-item nav-link">ติดต่อแอดมิน</a>
    </div>
</div>

<div class="btn-group" role="group">
    <a class="nav-link active-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-person-circle">Sign-in</i>
    </a>
         <ul class="dropdown-menu">
      	  <li>
    		<li><a class="dropdown-item" href="login.php">นิสิต</a></li>
        <li><a class="dropdown-item" href="login1.php">อาจารย์</a></li>
            <li><a class="dropdown-item" href="login2.php">แอดมิน</a></li>
        </ul>
  
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
        <!-- Topbar End -->

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
        <div class="container-fluid bg-breadcrumb" style="background-image:  url('img/1.jpg');; background-size: cover; background-position: center; background-repeat: no-repeat; padding: 50px 0;">
        <div class="container text-center py-5" style="max-width: 900px; background-color: rgba(169, 169, 169, 0.48);">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Business Computer BC</h4>
        <h6 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">สาขาคอมพิวเตอร์ธุรกิจ</h6> 
    </div>
</div>

        <!-- Header End -->

     <!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">มหาวิทยาลัยมหาสารคาม คณะการบัญชีและการจัดการ</h4>
            <h1 class="display-4 mb-4">Bachelor of Business Administration</h1>
            <p class="mb-0">
            บริหารธุรกิจบัณฑิต (คอมพิวเตอร์ธุรกิจ) หรือ บธ.บ. (คอมพิวเตอร์ธุรกิจ) | Bachelor of Business Administration or (Business Computer) B.B.A. (Business Computer)</p>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Service Item 1 -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/2.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3" style="background: linear-gradient(to right, #ffcc00, #ff6600);">
    <i class="fa fa-university fa-2x" style="color: #ffffff;"></i>
</div>

                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                        <a href="#" class="d-inline-block h4 mb-4" style="text-decoration: none;">ความสำคัญสาขา</a>
                            <p class="mb-4">
                            เป็นหลักสูตรที่มุ่งผลิตบัณฑิตให้มีความรู้ความชำนาญทางด้านคอมพิวเตอร์และเทคโนโลยีสารสนเทศ
                            โดยเน้นการศึกษาควบคู่กับการฝึกทักษะสู่ภาคปฏิบัติจริงกับอุปกรณ์ในห้องปฏิบัติการที่ทันสมัย ผลิตบัณฑิตให้
                            สามารถสร้างระบบและจัดการข้อมูลในรูปแบบดิจิทัล ประยุกต์เทคโนโลยีสมัยใหม่กับงานธุรกิจ
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Item 2 -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/3.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3" style="background: linear-gradient(to right, #ffcc00, #ff6600);">
                            <i class="fa fa-heart fa-2x" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4" style="text-decoration: none;">ปรัชญาสาขา</a>
                            <p class="mb-4">
                            มุ่งผลิตบัณฑิตให้มีความรอบรู้ทางด้านบริหารธุรกิจและคอมพิวเตอร์ธุรกิจ เพื่อให้ก้าวทันต่อการเปลี่ยนแปลงของเทคโนโลยี 
                            สามารถเลือกใช้เทคโนโลยีสารสนเทศได้อย่างมีประสิทธิภาพ สร้างสรรค์นวัตกรรมใหม่ 
                            ตลอดจนการพัฒนาระบบงานเทคโนโลยีสารสนเทศให้เป็นประโยชน์ต่อองค์กรธุรกิจ สังคมและประเทศชาติ
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/4.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3" style="background: linear-gradient(to right, #ffcc00, #ff6600);">
                            <i class="fa fa-book fa-2x" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4" style="text-decoration: none;">รายละเอียดหลักสูตรสาขา</a>
                            <style>
                                .pre-line {
                                    white-space: pre-line;
                                }
                            </style>
                            <p class="pre-line mb-4">วัตถุประสงค์ของหลักสูตร   
                            1. มีความรู้ความเข้าใจวิทยาการคอมพิวเตอร์
                            2. มีความรู้ทั้งภาคทฤษฎีและภาคปฏิบัติ เน้นความรู้และทักษะด้านวิชาการ
                            3. มีความสามารถในการคิดวิเคราะห์
                            4. มีความสามารถประยุกต์ใช้ความรู้
                            5. มีคุณธรรม จริยธรรม และจิตสำนึกไปใช้ในการดำเนินธุรกิจ
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service Item 4 -->
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/5.jpg" class="img-fluid rounded-top w-100" alt="">
                        <div class="service-icon p-3" style="background: linear-gradient(to right, #ffcc00, #ff6600);">
                            <i class="fa fa-user-graduate fa-2x" style="color: #ffffff;"></i>
                        </div>
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4" style="text-decoration: none;">อาชีพหลังสำเร็จการศึกษา</a>
                            <p class="mb-4">นักพัฒนาโปรแกรม เว็บไซต์ แอปพลิเคชัน นักวิเคราะห์ข้อมูล นักวิจัย นักวิชาการด้านคอมพิวเตอร์ ผู้ดูแลระบบคอมพิวเตอร์และระบบเครือข่าย 
                            ผู้ดูแลด้านเทคนิค (IT Support) ผู้ดูแลระบบฐานข้อมูล ผู้ประกอบการอิสระ เจ้าของธุรกิจส่วนตัว นักทดสอบซอฟต์แวร์(Software Tester)
                            วิศวกรซอฟต์แวร์ นักพัฒนาระบบเครือข่าย  
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><br>
<!-- Service End -->

        <!--สร้างตาราง-->
        <div class="container">
        <h1 class="title">หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ</h1>
        <h2 class="subtitle">(หลักสูตรปรับปรุง พ.ศ. 2566)</h2><br>

        <div class="info">
            <p><strong>ชื่อสถาบันอุดมศึกษา:</strong> มหาวิทยาลัยมหาสารคาม</p>
            <p><strong>วิทยาเขต/คณะ/ภาควิชา:</strong> คณะการบัญชีและการจัดการ</p>
        </div><br>

        <h2 class="section-title">รหัสและชื่อหลักสูตร</h2>
        <div class="program-info">
            <p><strong>ชื่อภาษาไทย:</strong> หลักสูตรบริหารธุรกิจบัณฑิต สาขาวิชาคอมพิวเตอร์ธุรกิจ</p>
            <p><strong>ชื่อภาษาอังกฤษ:</strong> Bachelor of Business Administration Program in Business Computer</p>
        </div><br>

        <h2 class="section-title">ชื่อปริญญาและสาขาวิชา</h2>
        <div class="degree-info">
            <p><strong>ภาษาไทย (ชื่อเต็ม):</strong> บริหารธุรกิจบัณฑิต (คอมพิวเตอร์ธุรกิจ)</p>
            <p><strong>ภาษาไทย (ชื่อย่อ):</strong> บธ.บ. (คอมพิวเตอร์ธุรกิจ)</p>
            <p><strong>ภาษาอังกฤษ (ชื่อเต็ม):</strong> Bachelor of Business Administration (Business Computer)</p>
            <p><strong>ภาษาอังกฤษ (ชื่อย่อ):</strong> B.B.A. (Business Computer)</p>
        </div><br>

        <h2 class="section-title">โครงสร้างหลักสูตร</h2>
        <table class="curriculum-table">
            <thead>
                <tr>
                    <th>หมวดวิชา</th>
                    <th>เกณฑ์มาตรฐานหลักสูตร (หน่วยกิต)</th>
                    <th>โปรแกรมปกติ (หน่วยกิต)</th>
                    <th>โปรแกรมสหกิจศึกษา (หน่วยกิต)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>หมวดวิชาศึกษาทั่วไป</td>
                    <td>ไม่น้อยกว่า 30</td>
                    <td>ไม่น้อยกว่า 30</td>
                    <td>ไม่น้อยกว่า 30</td>
                </tr>
                <tr>
                    <td>หมวดวิชาเฉพาะ</td>
                    <td>ไม่น้อยกว่า 72</td>
                    <td>ไม่น้อยกว่า 94</td>
                    <td>ไม่น้อยกว่า 94</td>
                </tr>
                <tr>
                    <td> - กลุ่มวิชาแกน</td>
                    <td>-</td>
                    <td>45</td>
                    <td>45</td>
                </tr>
                <tr>
                    <td> - กลุ่มวิชาเอก</td>
                    <td>-</td>
                    <td>49</td>
                    <td>49</td>
                </tr>
                <tr>
                    <td>   - วิชาเอกบังคับ</td>
                    <td>-</td>
                    <td>34</td>
                    <td>34</td>
                </tr>
                <tr>
                    <td>   - วิชาเอกเลือก</td>
                    <td>-</td>
                    <td>15</td>
                    <td>15</td>
                </tr>
                <tr>
                    <td>หมวดวิชาเลือกเสรี</td>
                    <td>ไม่น้อยกว่า 6</td>
                    <td>ไม่น้อยกว่า 6</td>
                    <td>ไม่น้อยกว่า 6</td>
                </tr>
                <tr>
                    <td>หมวดประสบการณ์ภาคสนาม</td>
                    <td>ไม่ระบุ</td>
                    <td>ไม่น้อยกว่า 2 (ไม่น้อยกว่า 300 ชั่วโมง) (ไม่นับหน่วยกิต)</td>
                    <td>ไม่น้อยกว่า 9 (ไม่น้อยกว่า 4 เดือน) (ไม่นับหน่วยกิต)</td>
                </tr>
                <tr>
                    <td><strong>รวมหน่วยกิตทั้งหมด</strong></td>
                    <td>ไม่น้อยกว่า 120</td>
                    <td>ไม่น้อยกว่า 130</td>
                    <td>ไม่น้อยกว่า 130</td>
                </tr>
            </tbody>
        </table>

    </div><br>
    <br>


</style>
    <h2 class="section-title1">คุณสมบัติของผู้เข้าศึกษา</h2>
        <div class="admission-criteria">
            <ul>
                <li>สำเร็จการศึกษาระดับมัธยมศึกษาตอนปลาย หรือประกาศนียบัตรวิชาชีพ (ปวช.) หรือเทียบเท่า ตามข้อบังคับมหาวิทยาลัยมหาสารคาม ว่าด้วยการศึกษาระดับปริญญาตรี </li>
                <li>สำเร็จการศึกษาระดับอนุปริญญา หรือประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) หรือเทียบเท่า ในสาขาคอมพิวเตอร์ธุรกิจ เทคโนโลยีสารสนเทศ หรือสาขาที่เกี่ยวข้อง</li>
                <li>กรณีมีคุณสมบัติอื่น ๆ คณะกรรมการบริหารหลักสูตรอาจพิจารณาให้สมัครเข้าศึกษาได้</li>
            </ul>
        </div><br>

        <h2 class="section-title1">วิธีการคัดเลือกผู้เข้าศึกษา</h2>
        <div class="selection-methods">
            <ul>
                <li>รับจากการสอบคัดเลือกผ่านสำนักงานคณะกรรมการการอุดมศึกษา</li>
                <li>รับจากการสอบคัดเลือกตรงของมหาวิทยาลัยมหาสารคาม</li>
                <li>เป็นไปตามระเบียบมหาวิทยาลัยมหาสารคาม ว่าด้วยการศึกษาระดับปริญญาตรี</li>
            </ul>
        </div>
    </div>

    <hr>

        <!-- Testimonial Start -->
        <div class="container-fluid testimonial pb-5">
            <div class="container pb-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">โรงเรียนบริหารธุรกิจแห่งมหาวิทยาลัยมหาสารคาม</h4>
                    <h1 class="display-4 mb-4">Mahasarakham Business School</h1>
                    <p class="mb-0">ความสำเร็จในสายงานไอทีไม่ได้ขึ้นอยู่กับความฉลาดเพียงอย่างเดียว แต่เกิดจาก ความพยายาม ความอดทน และการเรียนรู้อย่างต่อเนื่อง เทคโนโลยีเปลี่ยนแปลงอยู่ตลอดเวลา ผู้ที่พร้อมปรับตัวและเรียนรู้สิ่งใหม่ ๆ จะมีโอกาสเติบโตและประสบความสำเร็จมากกว่าผู้อื่น
                                อย่ากลัวที่จะล้มเหลว เพราะความล้มเหลวคือบทเรียนสำคัญที่จะทำให้คุณแข็งแกร่งขึ้น จงมองทุกอุปสรรคเป็นโอกาสในการพัฒนาตนเอง และอย่าหยุดที่จะฝันให้ยิ่งใหญ่ เพราะโลกของเทคโนโลยีนั้นไร้ขอบเขต
                    </p>
                </div>
         
              <!-- สไลด์โชว์ (Carousel) -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            
        <!-- จุด Indicator (จะถูกสร้างอัตโนมัติ) -->
        <div class="carousel-indicators" id="carouselIndicators"></div>
      <!-- ภาพสไลด์ -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/006.jpg" class="d-block" alt="Slide 1">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/007.jpg" class="d-block" alt="Slide 2">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/8.jpg" class="d-block" alt="Slide 3">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item ">
            <img src="img/009.jpg" class="d-block" alt="Slide 4">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/010.jpg" class="d-block" alt="Slide 5">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/011.jpg" class="d-block" alt="Slide 6">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/012.jpg" class="d-block" alt="Slide 7">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/013.jpg" class="d-block" alt="Slide 8">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/014.jpg" class="d-block" alt="Slide 9">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/015.jpg" class="d-block" alt="Slide 10">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/016.jpg" class="d-block" alt="Slide 11">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>

        <div class="carousel-item">
            <img src="img/017.jpg" class="d-block" alt="Slide 12">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/018.jpg" class="d-block" alt="Slide 13">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/27.jpg" class="d-block" alt="Slide 14">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/28.jpg" class="d-block" alt="Slide 15">
            <div class="carousel-caption d-none d-md-block">
            </div>
        </div>
        <div class="carousel-item">
                <img src="img/29.jpg" class="d-block" alt="Slide 16">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/31.jpg" class="d-block" alt="Slide 17">
                <div class="carousel-caption d-none d-md-block">
                </div>
            </div>
        
    </div>
</div><br>
<!--สิ้นสุดโค้ดรูปภาพสไลด์-->

<div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                    <div class="testimonial-item bg-light rounded">
                                    <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/40.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                        
                                <h4 class="text-dark mb-0"> 
                                <h4 class="text-dark mb-0"><i class="fas fa-book" style="color: #FFAE42; margin-right: 8px;  font-size: 120%;"></i> อาคาร Acc-bit
                                </h4>
                                <br>
                                    <p class="mb-0">เป็นอาคารที่นักศึกษาสาขาคอมพิวเตอร์และเทคโนโลยีสารสนเทศใช้เรียนรู้และฝึกปฏิบัติในห้องคอมพิวเตอร์ โดยมักจะมีเครื่องคอมพิวเตอร์ที่ทันสมัยและโปรแกรมต่าง ๆ ที่จำเป็นสำหรับการเรียนการสอน เพื่อให้นักศึกษาได้พัฒนาทักษะด้านเทคนิคและการเขียนโปรแกรมอย่างมีประสิทธิภาพ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/036.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0"> <i class="fas fa-building" style="color: #FFAE42; margin-right: 8px;  font-size: 120%;"></i>อาคารบริหารธุรกิจสิรินทร</h4>
                                    <br>
                                    <p class="mb-0">เป็นอาคารที่นักศึกษาทุกคนในคณะนั้นใช้สำหรับการเรียนการสอนและกิจกรรมต่าง ๆ ภายในอาคารจะมีห้องเรียน ห้องปฏิบัติการ และห้องประชุมที่รองรับการเรียนการสอนตามหลักสูตรที่เปิดสอน โดยมักจะมีสิ่งอำนวยความสะดวกต่าง ๆ เพื่อสนับสนุนการเรียนรู้และการทำงานร่วมกันของนักศึกษา
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/37.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0"><i class="fas fa-book-reader" class="fas fa-building" style="color: #FFAE42; margin-right: 8px;  font-size: 120%;"></br></i>ห้องMBS Co-working space</h4>
                                    <br>
                                    <p class="mb-0">พื้นที่ทำงานร่วมกันที่เปิดให้บุคคลหรือกลุ่มคนมาทำงานร่วมกันในสภาพแวดล้อมที่มีอุปกรณ์และสิ่งอำนวยความสะดวกครบครัน เช่น อินเทอร์เน็ตและโต๊ะทำงาน การจัดสรรพื้นที่ให้เป็นที่ร่วมมือระหว่างผู้คนที่มีความสนใจหรือโครงการที่คล้ายกัน
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/38.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0"><i class="fas fa-book" style="color: #FFAE42; margin-right: 8px;  font-size: 120%;"></i> ห้องวิชาการ ชั้น 1</h4>
                                    <br>
                                    <p class="mb-0">สำหรับการลงทะเบียนเรียน ประวัติการศึกษา และการขอเอกสารทางการศึกษา นอกจากนี้ยังเป็นศูนย์กลางในการให้คำปรึกษาเกี่ยวกับหลักสูตร การสำเร็จการศึกษา และข้อกำหนดทางวิชาการแก่นักศึกษาและบุคลากรภายในคณะ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded">
                        <div class="row g-0">
                            <div class="col-4  col-lg-4 col-xl-3">
                                <div class="h-100">
                                    <img src="img/39.jpg" class="img-fluid h-100 rounded" style="object-fit: cover;" alt="">
                                </div>
                            </div>
                            <div class="col-8 col-lg-8 col-xl-9">
                                <div class="d-flex flex-column my-auto text-start p-4">
                                    <h4 class="text-dark mb-0"><i class="fas fa-utensils" style="color: #FFAE42; margin-right: 8px;  font-size: 120%;"></i> โรงอาหารคณะการบัญชีและการจัดการ</h4>
                                    <br>
                                    <p class="mb-0">ให้บริการอาหารและเครื่องดื่มสำหรับนักศึกษา อาจารย์ และบุคลากร โดยมีร้านค้าหลากหลายประเภทในราคาย่อมเยา ตั้งอยู่ในบริเวณที่เข้าถึงง่าย เพื่ออำนวยความสะดวกในการรับประทานอาหารระหว่างวัน
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonial End -->

 <!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" style="background: linear-gradient(to right, #b3cde0,rgb(52, 179, 196))">
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
                    <div class="col-md-6 text-center text-md-end mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                    </div>
                    <div class="col-md-6 text-center text-md-start text-body">
                        <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                        <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                        <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                        Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom text-white" href="https://themewagon.com">ThemeWagon</a>
                    </div>
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

     <!-- สร้าง Indicator อัตโนมัติ (ปุ่มขีดๆเลื่อนใต้รูปอาจารย์) -->
     <script>
            document.addEventListener("DOMContentLoaded", function () {
                const carouselInner = document.querySelector("#carouselExampleCaptions .carousel-inner");
                const carouselIndicators = document.querySelector("#carouselIndicators");

                // สร้าง indicator ตามจำนวน carousel-item
                Array.from(carouselInner.children).forEach((item, index) => {
                    const button = document.createElement("button");
                    button.type = "button";
                    button.setAttribute("data-bs-target", "#carouselExampleCaptions");
                    button.setAttribute("data-bs-slide-to", index.toString());
                    if (index === 0) {
                        button.classList.add("active");
                    }
                    carouselIndicators.appendChild(button);
                });
            });

            // ใช้ JavaScript เริ่มต้นการเลื่อน
            var myCarousel = document.querySelector('#carouselExampleCaptions');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000,  // กำหนดเวลาเลื่อน
                ride: 'carousel' // เปิดการเลื่อนอัตโนมัติ
            });
        </script>
        <!-- JavaScript ของ Bootstrap (ต้องมีทั้ง Popper และ Bootstrap.bundle.js) -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        <!-- JavaScript สำหรับเปิด/ปิดภาพ -->
        <script>
            function openImage(src) {
                document.getElementById("modalImage").src = src;
                document.getElementById("imageModal").style.display = "flex";
            }

            function closeImage() {
                document.getElementById("imageModal").style.display = "none";
            }
        </script>
     </body>
</html>