-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 13, 2025 at 11:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bc`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic`
--

CREATE TABLE `academic` (
  `A_id` int(11) NOT NULL,
  `A_name` varchar(200) NOT NULL,
  `A_detail` varchar(5000) NOT NULL,
  `A_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic`
--

INSERT INTO `academic` (`A_id`, `A_name`, `A_detail`, `A_img`) VALUES
(3, 'คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เข้าร่วมหารือการพัฒนาความร่วมมือระหว่างประเทศกับ Gaunxi Minzu University ในการและเปลี่ยนนิสิตระหว่าง 2 สถาบัน ทั้งในรูปแบบหลักสูตรระยะสั้น Summer Camp และร', 'เมื่อวันที่ 16 มีนาคม 2568  ผู้ช่วยศาสตราจารย์ ดร.พันคม ศรีบุญลือ รองคณบดีฝ่ายบริหารและแผนพัฒนาองค์กร และ อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ ผู้ช่วยคณบดีฝ่ายพัฒนานิสิตและนวัตกรรม คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เข้าร่วมหารือการพัฒนาความร่วมมือระหว่างประเทศกับ Gaunxi Minzu University ในการและเปลี่ยนนิสิตระหว่าง 2 สถาบัน ทั้งในรูปแบบหลักสูตรระยะสั้น Summer Camp และรูปแบบ 1 ภาคการศึกษา Exchange Student การจัดทำหลักสูตรร่วมกันแบบ 2+2 และ 3+1 การแลกเปลี่ยนบุคคลากร และความร่วมมือทางการวิจัยระหว่างทั้ง 2 สถาบัน ณ นครหนานหนิง เขตปกครองตนเองกว่างซีจ้วง สาธารณรัฐประชาชนจีน', 'imagenew/A3.jpg'),
(4, 'คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เข้าร่วมโครงการ MSU International Alumni ครั้งที่ 3', 'เมื่อวันที่ 16 มีนาคม 2568 ผู้ช่วยศาสตราจารย์ ดร.พันคม ศรีบุญลือ รองคณบดีฝ่ายบริหารและแผนพัฒนาองค์กร และ อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ ผู้ช่วยคณบดีฝ่ายพัฒนานิสิตและนวัตกรรม คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เข้าร่วมโครงการ MSU International Alumni ครั้งที่ 3  โดยมี รองศาสตราจารย์ ดร.ประยุกต์ ศรีวิไล ผู้รักษาราชการแทนอธิการบดีมหาวิทยาลัยมหาสารคาม เป็นประธานเปิดงาน พร้อมด้วยผู้แทนจากมหาวิทยาลัยชนชาติกว่างซีและสถาบันขงจื่อ มหาวิทยาลัยมหาสารคาม เข้าร่วมพิธีเปิด โครงการนี้เสริมสร้างเครือข่ายศิษย์เก่านานาชาติ และ พัฒนาความร่วมมือทางวิชาการ กับมหาวิทยาลัยพันธมิตร มีศิษย์เก่าเข้าร่วมเพื่อแลกเปลี่ยนความรู้และประสบการณ์ พร้อมทั้งรับฟังการบรรยายพิเศษเกี่ยวกับวิสัยทัศน์ของมหาวิทยาลัยมหาสารคามสู่ความเป็นเลิศระดับเอเชียและรับฟังการเสวนาหัวข้อ \"ร่วมสร้างเครือข่ายการศึกษานานาชาติ: ความพร้อมของคณะต่างๆ ในการพัฒนานิสิตสู่ระดับโลก\" ณ โรงแรม Vienna International Hotel (Nanning Guangxi University Zoo Metro Station) นครหนานหนิง เขตปกครองตนเองกว่างซีจ้วง สาธารณรัฐประชาชนจีน', 'imagenew/A4.jpg'),
(5, 'โครงการอบรมเชิงปฏิบัติการการจัดทําหลักสูตรตามแนวทาง ASEAN University Network Quality Assurance (AUN-QA)', 'เมื่อระหว่างวันที่ 13 – 15 มีนาคม 2568 ฝ่ายวิชาการและพัฒนาคุณภาพการศึกษา คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ได้จัดโครงการอบรมเชิงปฏิบัติการการจัดทําหลักสูตรตามแนวทาง ASEAN University Network Quality Assurance (AUN-QA) คณะการบัญชีและการจัดการ  ณ โรงแรมเซ็นทารา อุดรธานี โดยได้รับเกียรติจาก รองศาสตราจารย์ ดร.จรวย สาวิถีคณบดีคณะการบัญชีและการจัดการ  เป็นประธานเปิดโครงการฯ และ ผู้ช่วยศาสตราจารย์ ดร.ศรัญญา รักสงฆ์ รองคณบดีฝ่ายวิชาการและพัฒนาคุณภาพการศึกษา กล่าวรายงาน\r\nการอบรมในครั้งนี้มีวัตถุประสงค์เพื่อให้อาจารย์ผู้รับผิดชอบหลักสูตร ในหลักสูตรที่ครบวงรอบการปรับปรุงและหลักสูตรใหม่ โดยมุ่งเน้นให้มีการพัฒนาหลักสูตรแนวใหม่โดยใช้นวัตกรรมการเรียนรู้ที่ทันสมัยและการบูรณาการหลักสูตรของคณะร่วมกัน เพื่อให้มีความทันสมัยสอดคล้องกับความต้องการของผู้เรียนและผู้ใช้บัณฑิตและยังมีการส่งเสริมให้คณาจารย์มีการผลิตตำรา สื่อหรือนวัตกรรมการเรียนรู้ การพัฒนารูปแบบการจัดการเรียนการสอน อีกทั้ง สามารถพัฒนาหลักสูตรให้สอดคล้องกับเกณฑ์มาตรฐาน หลักสูตร AUN-QA\r\nทั้งนี้โครงการฯ ได้รับเกียรติจากวิทยากร โดย ผู้ช่วยศาสตราจารย์ ดร.จินดาพร จํารัสเลิศลักษณ์  ผู้อํานวยการสํานักศึกษาทั่วไป มหาวิทยาลัยมหาสารคาม', 'imagenew/A5.jpg'),
(6, 'โครงการเตรียมความพร้อมนิสิตเพื่อเข้าร่วมการแข่งขันทักษะทางวิชาการ เพื่อนำเสนอในงานประชุมวิชาการระดับชาติและระดับนานาชาติ “การประชุมวิชาการระดับชาติ วิทยาศาสตร์ เทคโนโลยีและนวัตกรรม ครั้งที่ 5', 'เมื่อวันที่ 8 มีนาคม 2567 สาขาวิชาคอมพิวเตอร์ธุรกิจ คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ได้จัดโครงการเตรียมความพร้อมนิสิตเพื่อเข้าร่วมการแข่งขันทักษะทางวิชาการ เพื่อนำเสนอในงานประชุมวิชาการระดับชาติและระดับนานาชาติ “การประชุมวิชาการระดับชาติ วิทยาศาสตร์ เทคโนโลยีและนวัตกรรม ครั้งที่ 5 ณ ห้องสตูดิโอ Acc.Biz. 306 อาคารคณะการบัญชีและการจัดการ ในการนี้ นิสิตสาขาวิชาคอมพิวเตอร์ธุรกิจได้ร่วมส่งผลงานของนิสิตในระดับปริญญาตรีเข้าร่วมการแข่งขันนำเสนอในงานการประชุมวิชาการระดับชาติ วิทยาศาสตร์ เทคโนโลยีและนวัตกรรม ครั้งที่ 5 จัดโดย มหาวิทยาลัยแม่โจ้ จังหวัดเชียงใหม่ จำนวน 6 ผลงาน ซึ่งจะจัดขึ้นในวันที่ 28 มีนาคม 2567 \r\nการจัดโครงการในครั้งนี้ มีวัตถุประสงค์เพื่อเป็นการเตรียมความพร้อมในการให้นิสิตเข้าแข่งขันทักษะทางวิชาการ ซึ่งมีความจำเป็นที่นิสิตจะต้องมีทักษะ มีความเชี่ยวชาญในการนำเสนอผลงาน รวมทั้งเทคนิคต่างๆ ในการนำเสนอทางด้านวิชาการ การใช้เทคโนโลยี การฝึกฝนเพื่อให้เกิดความชำนาญการ สามารถถ่ายทอดผลงานและนำเสนอผลงานผ่านการประชุมวิชาการระดับชาติ รวมทั้งเป็นการสร้างชื่อเสียงให้กับคณะการบัญชีและการจัดการต่อไป', 'imagenew/A6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(200) NOT NULL,
  `a_email` text NOT NULL,
  `a_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`a_id`, `a_name`, `a_email`, `a_password`) VALUES
(1, 'admin', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'admin2', 'admin2@msu.ac.th', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'ชนม์นิภา', 'admin15@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE `committee` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_department` varchar(255) DEFAULT NULL,
  `c_email` varchar(255) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `c_created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committee_appointment`
--

CREATE TABLE `committee_appointment` (
  `appointment_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `term_start` date NOT NULL,
  `term_end` date DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `committee_roles`
--

CREATE TABLE `committee_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE `it` (
  `i_id` int(11) NOT NULL,
  `i_name` varchar(200) NOT NULL,
  `i_detail` varchar(5000) NOT NULL,
  `i_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`i_id`, `i_name`, `i_detail`, `i_img`) VALUES
(2, '12 คอร์สฟรี สายไอทีtt', ' ยิ่งเรียนรู้เยอะ ยิ่งได้เปรียบ! ใครอยากอัปสกิล #สายDev ห้ามพลาด ล่าสุด One More Course ไปเจอแพลตฟอร์มปังๆ สำหรับชาวสาย Tech. อย่าง  ‘BorntoDev’ ซึ่งเค้าได้จัดทำคอร์สเรียนฟรีแบบ Open Access ไม่ว่าจะเขียนโปรแกรม, เครื่องมือ AI, กราฟิกดีไซน์, Excel หรือทักษะไอทีต่างๆ ก็มีให้เลือกเรียนครบ ถ่ายทอดความรู้จากผู้เชี่ยวชาญเฉพาะสาย exclusive สุดๆ ?.ใครที่สนใจอยากอัปสกิลตัวเองเพื่อต่อยอดหรือเพิ่มโอกาสก้าวหน้าในสายงาน รีบตามไปเช็กข้อมูลกันด่วนๆ~ ?.? 1. Essential SQL for Everyone ?2. Introduction to JavaScript ?3. Fundamental Web Dev with HTML5 & CSS3 ?4. ChatGPT for Developers ?5. Web App Development with Node.js & Express ?6. Excel for Everyone ?7. Go Programming Language ?8. Get started with TypeScript ?9. Fundamentals of Graphic Design ?10. Basic IOS Development with Swift ?11. Building LINE Chatbot with ChatGPT & Gemini ?12. Introduction to Quantum Computing.? ศึกษารายละเอียดที่นี่เลย https://www.dek-d.com/activity/66170/ .#OneMoreCourse #คอร์สฟรี #เรียนฟรี #คอร์สออนไลน์ #เรียนออนไลน์ #คอร์สสายDev #BorntoDev #OpenAccess #SQL #JavaScript #HTML5 #CSS3 #ChatGPT #Node.js #Express #Excel #Golang #TypeScript #Graphic #iOS #Swift #LineChatbot #Gemini #QuantumComputing_______________________??ไม่อยากพลาดข่าวสารคอร์สเรียนดีๆ อย่าลืมติดตามทุกช่องทางของ One More Course by Dek-D- เข้าร่วมกลุ่ม One More Course: https://www.facebook.com/groups/423496262370169- Instagram: @tornokandcourse- X: @tornokandcourse- TikTok: @tornokandcourse.☎️ ติดต่อลงข่าวประชาสัมพันธ์กับ Dek-D สามารถ inbox เข้ามาที่เพจได้เลยครับ', 'imagenew/i1.jpg'),
(4, 'NAC2025 เจาะลึกทุกเทรนด์ AI ที่คุณไม่ควรพลาด', '📢 NAC2025 เจาะลึกทุกเทรนด์ AI ที่คุณไม่ควรพลาด!\r\n🚀 เปิดโลกนวัตกรรมและเทคโนโลยี AI ที่จะพลิกโฉมอนาคตของไทย 🇹🇭\r\n📅 26-28 มีนาคม 2568\r\n📍 อุทยานวิทยาศาสตร์ประเทศไทย จ.ปทุมธานี', 'imagenew/i3.jpg'),
(5, 'รวม 6 คอร์สเรียนฟรี มีใบประกาศ จาก Google ', 'เก่งขึ้นแน่นอน!! รวม 6 คอร์สเรียนฟรี มีใบประกาศ จาก Google \r\n📚 วันนี้ติดโปรพาเปิดพิกัด 6 คอร์สเรียนฟรีจาก Google เกี่ยวกับทักษะอาชีพที่กำลังมาแรงในระดับเริ่มต้น ไม่ว่าจะเป็น UX Design, Digital Marketing, Data Analytics และอื่น ๆ อีกมากมาย ที่สำคัญคือเรียนฟรี แถมยังได้ใบประกาศหลังเรียนจบอีกด้วย ใครอยากเพิ่มทักษะใหม่ ๆ บอกเลยว่าห้ามพลาดดดดดดด\r\n#คอร์สเรียนฟรี \r\n#Google \r\n#คอร์สเรียนอาชีพ \r\n#ทักษะ \r\n#tidpro', 'imagenew/i4.jpg'),
(6, 'โครงการ AI & IoTs Summit 2025 ครั้งที่ 7', 'พบกับหัวข้อที่น่าสนใจ “อาทิ”\r\n•Create a Strategic Roadmap to Scale Enterprise-Wide AI Deployment\r\n•From Generative AI to Agentic AI: Driving the Next Evolution\r\n•Next-Gen Healthcare : Transforming Patient Care with AI & IoT Innovation\r\n•Real-Time Decision with Edge AIoT: Transforming New Applications (Use Case Discussion)\r\n•The Next Industrial Wave with Dynamic Convergence of 5G, AI and IoT\r\n•Thailand AI-Governance Standpoint: Framework, Importance, Issue, Way Forward\r\n•The Next Breakthrough Future Trends : Quantum AI\r\n•Collaborative Intelligence: Human and AI are Joining Force\r\n•Revolutionizing Customer Experience with Generative AI & IoT: Opportunity & Risk\r\n.\r\n🔒 โครงการ Privacy & Security 2025 ครั้งที่ 6 \r\n•Aligning Privacy & Security Investments to Business Value\r\n•Cybersecurity Strategies in a Net-Zero World\r\n•The Future of Cybersecurity: AI, Quantum and Beyond\r\n•Demystifying Identity-First and Zero-Trust Strategies\r\n•AI and Data Privacy: Balancing Innovation and Protection\r\n•Privacy Challenges in the Age of 5G and Next-Gen Connectivity\r\n•Ransomware Resilience: The Role of Cyber Insurance and Incident Recovery\r\n•Unified Cloud Security: Simplifying Protection Across Hybrid Environments\r\n.\r\n📆 วันที่ 28 - 29 พฤษภาคม 2568\r\n🏦 โรงแรมเดอะเบอร์เคลีย์ ประตูน้ำ', 'imagenew/i5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `L_id` int(11) NOT NULL,
  `L_img` varchar(200) NOT NULL,
  `L_name` varchar(200) NOT NULL,
  `L_tal` text NOT NULL,
  `L_email` varchar(50) NOT NULL,
  `L_teaching` varchar(500) NOT NULL,
  `L_exper` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`L_id`, `L_img`, `L_name`, `L_tal`, `L_email`, `L_teaching`, `L_exper`) VALUES
(1, 'image1/1.jpg', 'รศ.ดร.จรวย สาวิถี', '081-3697087', 'charuay.s@msu.ac.th', 'ระดับปริญญาตรี1. Business Data Communications and Computer Networks2. Computer Technology and Operating System3. Computer Security System for Business4. Business Computer and Information Technology5. Management Information System6. e-Commerce Security7. Computer Networks Security System for Business8. Information Technology Project 1, 2ระดับปริญญาโท1. e-Commerce2. Management Information System3. Strategic Information System Management4. Introduction to Data Communicat', 'ระดับปริญญาบัตรปี 2555 Doctor of Philosophy (Computer Science) , Magadh University, India.ปี 2541 วิทยาศาสตรมหาบัณฑิต (วิทยาการคอมพิวเตอร์) มหาวิทยาลัยรังสิต.ปี 2532 ครุศาสตรบัณฑิต (คอมพิวเตอร์ศึกษา) วิทยาลัยครูจันทรเกษม.ระดับวุฒิบัตรปี 2567 Mini Master (HR Management) คณะเศรษฐศาสตร์ จุฬาลงกรณ์มหาวิทยาลัย.ปี 2566 Mini MBA (Business Management in Digital Era) วิทยาลัยการจัดการ มหาวิทยาลัยมหิดล.ปี 2548 Advance Diploma (Software Engineering) , National Institute of Computer Technology'),
(10, 'image1/5.jpg', 'รศ.ดร.กิตติพล วิแสง', '086-6393870', 'kittipol.w@acc.msu.ac.th', '-', 'Electrical and Computer Engineering, Ph.D., MSU\r\n'),
(11, 'image1/6.jpg', 'รศ.ดร.เกรียงศักดิ์ จันทีนอก', '089-1512023', 'kriangsak.c@acc.msu.ac.th', '1. Introduction to computer in Business\r\n2. Data Communication\r\n3. Pascal Programming\r\n4. Business Computer and Information Technology\r\n5. Office Automation\r\n6. Business Programming1\r\n7. Business Programming2\r\n8. System Analysis and Design\r\n9. Multimedia Teachnology in Business\r\n10. Business Ethics\r\n11.E-Commerce\r\n12.E-Business for Logistic and Supply Chain Management\r\n13.Programming Logic in Business\r\n14.Internet Marketing\r\n15.Internet Programming', 'บธ.บ. (คอมพิวเตอร์ธุรกิจ) มหาวิทยาลัยมหาสารคาม\r\nวท.ม.(ธุรกรรมอิเล็กทรอนิกส์) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี\r\nปร.ด.(การจัดการการตลาด) มหาวิทยาลัยมหาสารคาม'),
(12, 'image1/7.jpg', 'ผศ.ดร.มณีรัตน์ วงษ์ซิ้ม', '086-8722722', 'manirath.w@acc.msu.ac.th', '-', '2012: PhD. Information Science, University of South Australia\r\n2002- 2004: M.S. Computer Science\r\n2000-2002: BB.A Business Computer'),
(13, 'image1/8.jpg', 'ผศ.ดร.นิพจน์พัทธ์ เมืองโคตร', '089-6183455', 'nipotepat.m@acc.msu.ac.th', '0904101 Business Computer and Information Technology\r\n0904322 Electronics Commerce\r\n0904103 Data Structure and Algorithms', 'Ph.D. (Computer Science Consortium English Program); ปร.ด. (วิทยาการคอมพิวเตอร์ หลักสูตรภาษาอังกฤษ), มหาวิทยาลัยขอนแก่น, 2017'),
(14, 'image1/9.jpg', 'อ.ดร.เอกชัย แน่นอุดร', '-', 'ekkachai.n(at)mbs.msu.ac.th', 'ระดับปริญญาเอก\r\n- 0908504: Smart City Platform\r\nระดับปริญญาโท\r\n- 0908036: Internet of Things (IoT) for Smart City\r\n- 0904513: Business Software Development\r\n- 0904542: Emerging Technologies for Digital Business and Information Systems\r\nระดับปริญญาตรี\r\n- Internet Programming\r\n- Wireless and Mobile Communication in Business\r\n- Internet of Things\r\n- E-Business\r\n- E-Commerce\r\n- Web Analysis and Design\r\n- Business Programming 2\r\n- Computer Technology and Operating System\r\n- Introduction to Computer i', 'ปริญญาเอก\r\nวิทยาการสารสนเทศดุษฎีบัณฑิต สาขาเทคโนโลยีสารสนเทศ,\r\nวส.ด.(เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีสุรนารี\r\n\r\nปริญญาโท\r\nวท.ม.(เทคโนโลยีสารสนเทศ) มหาวิทยาลัยขอนแก่น\r\n\r\nปริญญาตรี\r\nบธ.บ.(คอมพิวเตอร์ธุรกิจ) มหาวิทยาลัยมหาสารคาม'),
(15, 'image1/10.jpg', 'อ.ดร.ยงยุทธ รัชตเวชกุล', '043-754333', 'yongyut.r@msu.ac.th', '0012 001 การประยุกต์ใช้ เทคโนโลยีสารสนเทศ (Information Technology Applications)\r\n0901 306 การประยุกต์โปรแกรมสำเร็จรูปทางการบัญชี (Accounting Software Applications)\r\n0903 212 ระบบสารสนเทศเพื่อการจัดการ (Management Information System)\r\n0904 101 คอมพิวเตอร์และเทคโนโลยีสารสนเทศธุรกิจ(Business Computer and Information Technology)\r\n0904 203 การจัดการระบบฐานข้อมูลทางธุรกิจ(Business Database Management System)\r\n0904 204 การวิเคราะห์และออกแบบระบบสารสนเทศทางธุรกิจ(Analysis and Design for Business Informat', 'ปริญญาเอก\r\nวิทยาการสารสนเทศดุษฎีบัณฑิต (เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีสุรนารี\r\n\r\nปริญญาโท\r\nวิทยาศาสตรมหาบัณฑิต (เทคโนโลยีสารสนเทศ ) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง\r\n\r\nปริญญาตรี\r\nวิทยาศาสตรบัณฑิต (การจัดการเทคโนโลยีสารสนเทศและการสื่อสาร) มหาวิทยาลัยสุโขทัยธรรมาธิราช\r\nวิทยาศาสตรบัณฑิต (เทคโนโลยีสารสนเทศธุรกิจ) มหาวิทยาลัยสุโขทัยธรรมาธิราช\r\nศึกษาศาสตรบัณฑิต (เทคโนโลยีและสื่อสารการศึกษา) มหาวิทยาลัยสุโขทัยธรรมาธิราช\r\nเทคโนโลยีบัณฑิต (เทคโนโลยีสารสนเทศธุรกิจ) มหาวิทยาลัยสุโขทั'),
(16, 'image1/11.jpg', 'อ.ดร.ณัฐกานต์ ชุติมารังสรรค์', '085-7448800', 'nattakarn.b@acc.msu.ac.th', '- Business Programming1\r\n- Business Programming2\r\n- Study on Appropriateness and Procurement of Information Technology\r\n- Analysis and Design for Business Information System\r\n- Advanced Analysis and Design for Business Information System\r\n- Business Computer Information Technology\r\n- Business Information Technology Management\r\n- Business Information Technology Project 1\r\n- Business Information Technology Project 2\r\n- Accounting Information System', 'ปร.ด.(เทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ\r\nวท.ม.(เทคโนโลยีการจัดการระบบสารสนเทศ) มหาวิทยาลัยมหิดล\r\nวท.บ.(สถิติ) มหาวิทยาลัยธรรมศาสตร์'),
(17, 'image1/12.jpg', 'อ.ดร.ณัฐอาภา สัจจวาที', '081-0581116', 'natarpha.s@mbs.msu.ac.th', '- Introduction to Computer Programming in Business\r\n- Business Programming 1\r\n- Computer Technology and Operating System\r\n- Business Computer and Information Technology\r\n- Business Information Technology Management\r\n- Business Computer Project\r\n- Introduction to Business\r\n- Management and Organizational Behavior\r\n- Digital Literacy and Life for Transformation\r\n- Digital Office Software Application', 'ปร.ด.(การจัดการ) มหาวิทยาลัยมหาสารคาม\r\nวท.บ.(วิทยาการคอมพิวเตอร์) มหาวิทยาลัยเชียงใหม่\r\nวท.ม.(เทคโนโลยีสารสนเทศ) สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง\r\n\r\nผ่านการประเมินสมรรถนะของบุคคลตามมาตรฐานอาชีพ สาขาวิชาชีพอุตสาหกรรมดิจิทัล สาขาซอฟต์แวร์และการประยุกต์ อาชีพนักพัฒนาระบบ ระดับ 4\r\nความเชี่ยวชาญ :\r\n1. การจัดการเทคโนโลยีสารสนเทศ (Information Technology Management)\r\n2. การถ่ายทอดเทคโนโลยี (Technology Transfer)\r\n3. การตลาดดิจิทัล (Digital Marketing)\r\n4. คุณภาพของข้อมูล (Information Quality'),
(18, 'image1/13.jpg', 'อ.ดร.สมหมาย ขันทอง', '0-4375-4321, 0-4375-4333 to 3434', 'sommai.k@acc.msu.ac.th', '- Business Programming 2\r\n- Multimedia Technology for Business Application\r\n- Business Computer and Information Technology\r\n- Business Data Communication and Computer Network\r\n- Computer Security System for Business\r\n- Special Topic in Business Information Technology', 'Ph.D (Information System) University of Technology Malaysia (UTM)'),
(19, 'image1/14.jpg', 'อ.ดร.อนุพงศ์ สุขประเสริฐ', '-', 'anupong.s@acc.msu.ac.th', 'ระดับปริญญาตรี\r\n1. Programming Logic in Business\r\n2. Introduction to Computer Programming in Business\r\n3. Business Computer and Information Technology\r\n4. Business Statistics\r\n5. Development and Application of Database\r\n6. Data Warehouse and Data Mining\r\n7. Business Database Management System\r\n8. Database Implementation\r\n9. Data Analytics Foundations for Business\r\n10. Decision Support System\r\n11. Logical Thinking Based Problem Solving\r\n12. Business and Information Technology Project 1\r\n13. Busin', 'ปริญญาเอก\r\nสถาบันการศึกษา : School of Computing, Faculty of Engineering, Universiti Teknologi Malaysia, Malaysia.\r\nวุฒิการศึกษา : Doctor of Philosophy\r\nสาขาวิชา : Computer Science\r\nปีที่เข้าศึกษา : 2554 ปีที่จบการศึกษา 2563\r\n\r\nปริญญาโท\r\nสถาบันการศึกษา : คณะพาณิชยศาสตร์และการบัญชี จุฬาลงกรณ์มหาวิทยาลัย\r\nวุฒิการศึกษา : วิทยาศาสตรมหาบัณฑิต\r\nสาขาวิชา : เทคโนโลยีสารสนเทศทางธุรกิจ แขนงวิชาสถิติสารสนเทศ\r\nปีที่เข้าศึกษา : 2549 ปีที่จบการศึกษา : 2551\r\n\r\nปริญญาตรี\r\nสถาบันการศึกษา : คณะวิทยาศาสตร์ มหาวิทยา'),
(20, 'image1/15.jpg', 'อ.ดร.อิทธิพล เอี่ยมภูงา', '081-668-6404', ' itthiphol.e@msu.ac.th, itthiphol.e@mbs.msu.ac.th', '- Implementing and Developing Cloud Computing Applications\r\n- Enterprise Resource Planning Software Applications\r\n- Database Implementation (Oracle)\r\n- Business Programming 2\r\n- Wireless and Mobile Communication in Business\r\n- Business Database Management System\r\n- Business and Information Technology Project 1-2', '- Ph.D Information Technology Management,Faculty of Engineering, Mahidol University\r\n\r\n- M.Sc. (Information Technology) ,King Mongkut\'s University of Technology Thonburi\r\n\r\n- B.B.A(Business Computer),Faculty of Accountancy and Management,Mahasarakham University'),
(21, 'image1/16.jpg', 'อ.ดร.อริศาพัชร สุทธิดี', '-', 'arisaphat.s@msu.ac.th', '- เทคโนโลยีคอมพิวเตอร์และระบบปฏิบัติการ(Computer Technology and Operating System)\r\n- คอมพิวเตอร์และเทคโนโลยีสารสนเทศธุรกิจ(Business Computer and Information Technology)\r\n- การเขียนโปรแกรมบนอินเตอร์เน็ต(Internet Programming)\r\n- การตลาดบนอินเตอร์เน็ต (Internet Marketing)', '- Ph.D. in Information Systems\r\nNova Southeastern University, Florida USA.\r\n- M.S.(Applied Statistics and Information Technology, Major Computer Science)\r\nSchool of Applied Statistics, National Institute of Development Administration(NIDA).\r\n- B.B.A.(Business Computer)\r\nFaculty of Accountancy and Management, Mahasarakham University.'),
(22, 'image1/17.jpg', 'อ.ดร.สมโภช ทองน้ำเที่ยง', '081-4111142', 'sompoch.t@acc.msu.ac.th, sompoch.t@mbs.msu.ac.th, ', '- 0904 101 Business Computer and Information Technology\r\n- 0103 280 Introduction to Business Computer\r\n- 0904 312 Computer Security System for Business\r\n- 0904 312 Computer Network Security System for Business\r\n- 0904 202 Computer Technology and Operating System\r\n- 0904 402 Business Information Technology Project 1\r\n- 0904 403 Business Information Technology Project 2', '- วท.ม. (วิศวกรรมเครือข่าย) มหาวิทยาลัยเทคโนโลยีมหานคร\r\n- บธ.บ. (คอมพิวเตอร์ธุรกิจ) มหาวิทยาลัยมหาสารคาม'),
(23, 'image1/18.jpg', 'อ.ศิริลักษณ์ ไกยวินิจ', '083-7308879', 'sirilak.k@acc.msu.ac.th', '1. Introduction to computer in Business\r\n2. Business Programming 1\r\n3. Business Programming 2\r\n4. Business Computer and Information Technology\r\n5. Office Automation\r\n6. Analysis and Design for Business Information System\r\n7. Business Database Management System\r\n8. Advanced Analysis and Design for Business Information System\r\n9. Introduction to Computer Programming in Business\r\n10. Case Study\r\n11. One Program One Community\r\n12. Business Information Technology Project 1\r\n13. Business Information T', 'M.Sc.(Information Technology) King Mongkut'),
(24, 'image1/19.jpg', 'อ.ประภาภรณ์ ชุบสุวรรณ', '-', 'prapaporn.c@mbs.msu.ac.th, prapaporn07@hotmail.com', '-', 'ปริญญาโท\r\nคอ.ม.(คอมพิวเตอร์และเทคโนโลยีสารสนเทศ) มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี\r\nปริญญาตรี\r\nค.บ.(คอมพิวเตอร์ศึกษา) สถาบันราชภัฎจันทรเกษม'),
(25, 'image1/20.jpg', 'อ.เลอศักดิ์ โพธิ์ทอง', '08-15747776', 'lersak.p@acc.msu.ac.th', '- Finance and Banking for Electronic Commerce\r\n- E-Commerce\r\n- Computer Technology and Operating System\r\n- Computer Security System for Business\r\n- Web Analysis and Design\r\n- Internet Programming\r\n- Development and Application of Database\r\n- Business Computer and Information Technology\r\n- Multimedia Technology for Business Application\r\n- Business and Information Technology Project 1\r\n- Business and Information Technology Project 2\r\n- Electronic Commerce Project 1\r\n- Electronic Commerce Project 2', 'MBA (Business Analytics) Nova Southestern University, USA\r\nM.Sc. (E-Business), School of Information Technology, King Mongkut\'s University of Technology Thonburi.\r\nB.B.A. (Business Computer), Faculty of Accountancy and Management, Mahasarakham University.'),
(26, 'image1/21.jpg', 'อ.ปวรปรัชญ์ หงสากล', '-', 'pawornprat.h@mbs.msu.ac.th', '- User Experience/User Interface Design and Development\r\n- Digital Literacy and Life for Transformation\r\n- Digital Content and Media\r\n- Electronic Logistics and Supply Chain Management\r\n- Internet Programming\r\n- Business Computer and Information Technology\r\n- Business Database Management System\r\n- Business Data Communication and Computer Network\r\n- Electronic Business\r\n- Electronic Business Management\r\n- Electronic Commerce\r\n- Finance and Banking for Electronics Commerce\r\n- Business and Informat', 'M.Sc. (E-Business), School of Information Technology, King Mongkut\'s University of Technology Thonburi.\r\nB.B.A. (Business Computer), Faculty of Accountancy and Management, Mahasarakham University.'),
(27, 'image1/22.jpg', 'อ.เมธาพร อบทอง', '-', 'mehtabhorn.o@mbs.msu.ac.th', '- Introduction to Computer Programming in Business\r\n- Business Programming 1\r\n- Business Programming 2\r\n- Business Computer and Information Technology\r\n- Electronic Business\r\n- Mobile Programming and Wireless Components in Business\r\n- Business Information Technology Project 1\r\n- Business Information Technology Project 2', 'M.Sc. (Computer Science) Khon Kaen University\r\nM.B.A. (Business Information Technology Management) Mahasarakham University');

-- --------------------------------------------------------

--
-- Table structure for table `mesage`
--

CREATE TABLE `mesage` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `m_email` text NOT NULL,
  `m_phone` text NOT NULL,
  `m_status` text NOT NULL,
  `m_message` text NOT NULL,
  `m_subject` text NOT NULL,
  `m_intification` enum('unread','read') DEFAULT 'unread'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mesage`
--

INSERT INTO `mesage` (`m_id`, `m_name`, `m_email`, `m_phone`, `m_status`, `m_message`, `m_subject`, `m_intification`) VALUES
(1, 'กมลเนตร', 'kamolneatseechai@gmail.com', '0650958329', 'student', '555555555', 'ไม่สามารถลงทะเบียนได้', 'read'),
(2, 'นิลเนตร', 'kamolneatseechai@gmail.com', '0650958329', 'student', '333333333', 'ไม่สามารถลงทะเบียนได้', 'read'),
(3, 'กมลเนตร', 'kamolneatseechai@gmail.com', '0650958329', 'student', '*989845', 'ไม่สามารถลงทะเบียนได้', 'read'),
(4, 'นิลเนตร', 'chonnipha@gmail.com', '0650958329', 'lecturer', '55555', 'ไม่สามารถลงทะเบียนได้', 'read'),
(6, 'พิกุล', '65010912606@msu.ac.th', '0650958329', 'student', 'ช่วยส่งวิธีลงทะเบียน', 'ไม่สามารถลงทะเบียนได้', 'read'),
(7, 'กมลเนตร', 'kamolneatseechai@gmail.com', '0650958329', 'lecturer', '23265415', 'ไม่สามารถลงทะเบียนได้', 'read'),
(8, 'ชนม์นิภา', '65010912584@msu.ac.th', '678900-', 'student', 'dfghjkl;', 'wsdv', 'read'),
(9, 'sdfg', '65010912584@msu.ac.th', 'aswedrftgyhujk', 'lecturer', 'asdefghjk', 'wsedrftgyh', 'read'),
(10, 'sdfg', '65010912584@msu.ac.th', '678900-', 'lecturer', 'zsdfgbhnjm,.', 'wsdv', 'read'),
(11, 'ชนม์นิภา', '65010912584@msu.ac.th', '0913711440', 'student', 'edufhedgera', 'wsdv', 'read'),
(12, 'dfghuji', '65010912584@msu.ac.th', 'ertyu', 'student', 'erty67u8i', 'ertyu', 'unread');

-- --------------------------------------------------------

--
-- Table structure for table `new`
--

CREATE TABLE `new` (
  `n_id` int(4) NOT NULL,
  `n_name` varchar(200) NOT NULL,
  `n_detail` varchar(2000) NOT NULL,
  `n_date` date NOT NULL,
  `n_picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new`
--

INSERT INTO `new` (`n_id`, `n_name`, `n_detail`, `n_date`, `n_picture`) VALUES
(1, 'เปิดรับสมัครนิสิตใหม่ คณะการบัญชีและการจัดการ', 'เปิดรับสมัครนิสิตใหม่ คณะการบัญชีและการจัดการระดับปริญญาตรี เทียบเข้า ประจำปีการศึกษา 2568 (สำหรับผู้ที่สำเร็จการศึกษาระดับประกาศนียบัตรวิชาชีพชั้นสูง (ปวส.) หรือ เทียบเท่า)✅เปิดรับสมัคร วันที่ 10 ม.ค. 2568 ถึง วันที่ 23 พ.ค. 2568?หลักสูตรบัญชีบัณฑิต (บช.บ.)      ?หลักสูตรบริหารธุรกิจบัณฑิต (บธ.บ.)    - สาขาวิชาการตลาด                      - สาขาวิชาการจัดการสมัยใหม่        - สาขาวิชาคอมพิวเตอร์ธุรกิจ    รายละเอียดการสมัคร (ประเภทโควตา) https://drive.google.com/.../125SbeItZdhkynXd1YPi.../view...รายละเอียดการสมัคร (ประเภทสอบคัดเลือก)https://drive.google.com/.../1YFRadVmDIVaDAJVz74h.../view...?สมัครเรียนได้ที่1.สมัครด้วยตนเอง ผู้สมัครแต่งกายด้วยชุดสุภาพ สมัครด้วยตนเอง ณ ห้อง ACC.BIZ.102  อาคาร ACC.BIZ. คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม2.สมัครออนไลน์ได้ที่ https://mbs.msu.ac.th/app2568?สอบถามรายละเอียดการรับสมัครเพิ่มเติมได้ที่ เบอร์โทร 043-754423 หรือ 043-719800 ต่อ 5634(สมัครออนไลน์ได้ตลอด 24 ชั่วโมง(ยกเว้นวันสุดท้ายของการสมัคร คือ วันที่ 23 พฤษภาคม 2568 ระบบรับสมัครออนไลน์จะปิดระบบเวลา 16.30 น.)', '2025-02-16', 'imagenew/1.jpg'),
(2, 'ขอความร่วมมือบัณฑิต มหาบัณฑิต และดุษฎีบัณฑิต ปีการศึกษา 2566 – 2567 ตอบแบบสอบถาม', 'ขอให้บัณฑิต มหาบัณฑิต และดุษฎีบัณฑิต ปีการศึกษา 2566 – 2567? ตอบแบบสำรวจภาวะการมีงานทำของบัณฑิตที่ https://survey.msu.ac.thให้แล้วเสร็จภายใน วันที่ 31 มกราคม 2568☎️ หากมีปัญหาในการใช้งานระบบ ติดต่อ กองแผนงาน สำนักงานอธิการบดี มหาวิทยาลัยมหาสารคาม(ข้อมูลจาก : กองแผนงาน)', '2025-02-16', 'imagenew/2.jpg'),
(7, 'ร่วมแสดงความยินดีกับหลักสูตรบริหารธุรกิจบัณฑิต (คอมพิวเตอร์ธุรกิจ) และบริหารธุรกิจบัณฑิต (ธุรกิจดิจิทัลและระบบสารสนเทศ) คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม ', 'ด้วยผลงานวิชาการอันโดดเด่นในการประชุม The 13th Asia Undergraduate Conference on Computing (AUCC 2025) ซึ่งจัดขึ้นระหว่างวันที่ 19-21 กุมภาพันธ์ 2568 ณ มหาวิทยาลัยราชภัฏอุตรดิตถ์ โดยมีสถาบันการศึกษาชั้นนำกว่า 32 แห่งทั่วประเทศเข้าร่วมในการแข่งขันครั้งนี้ นิสิตของเราได้รับรางวัลจากการนำเสนอบทความวิจัยและโปสเตอร์รวม 15 รางวัล จาก 15 ผลงานที่เข้าร่วมแข่งขัน ได้แก่\r\n🏆 รางวัลการนำเสนอบทความวิจัยแบบบรรยาย (Oral Presentation)\r\n🏅ระดับดีเยี่ยม (Excellent) - 5 รางวัล\r\n🎗️การพัฒนาระบบสารสนเทศการขายหน้าร้านวัสดุก่อสร้าง (กรณีศึกษา: หจก. เค.พี. วัสดุ จ.สุรินทร์)\r\n🔹ผู้นำเสนอ: นายจตุพล วงค์พุทธา\r\n🔸อาจารย์ที่ปรึกษา: ผู้ช่วยศาสตราจารย์ ดร.เกรียงศักดิ์ จันทีนอก\r\n🎗️การเปรียบเทียบประสิทธิภาพของตัวแบบสำหรับคัดกรองผู้ป่วยโรคมะเร็งเต้านม\r\n🔹ผู้นำเสนอ: นายยศภัทร ศรีโม๊ะ และนางสาวศิรินภา พรมโสภา\r\n🔸อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ\r\n🎗️การพยากรณ์เบี้ยประกันภัยรับรวมของบริษัทประกันชีวิตในประเทศไทย ด้วยเทคนิคการทำเหมืองข้อมูล\r\n🔹ผู้นำเสนอ: นางสาวอรนันท์ สำรวล และนางสาวอุบลวรรณ วิเศษรัตน์\r\n🔸อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ\r\n🎗️การพยากรณ์มูลค่าส่งออกอุตสาหกรรมยานยนต์ของประเทศไทยด้วยเทคนิคเหมืองข้อมูล\r\n🔹ผู้นำเสนอ: นางสาวดลนภา จีบงูเหลือม และนางสาวสุจิตรตา กุมผัน\r\n🔸อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ\r\n🎗️การออกแบบระบบยืนยันตัวตนและการสร้างผู้ใช้ Active Directory แบบอัตโนมัติ โดยใช้ RPA: UiPath\r\n🔹ผู้นำเสนอ: นางสาวบุษปรัชต์ บุราไกร นางสาวจีราภร ปานกุลพานิชย์ และ นายสรวิชญ์ ปัญญา \r\n🔸อาจารย์ที่ปรึกษา: อาจารย์ ดร.อิทธิพล เอี่ยมภูงา\r\n🏅ระดับดีมาก (Very Good) - 5 รางวัล\r\n🎗️การเปรียบเทียบประสิทธิภาพของตัวแบบสำหรับการคัดกรองผู้ป่วยโรคถุงน้ำในรังไข่หลายใบ\r\n🔹ผู้นำเสนอ: นายกฤษณพล พูลกลาง และนางสาวปิ่นปรากรม ทับทิม\r\n🔸อาจารย์ที่ปรึกษา: อาจารย์ ดร.อนุพงศ์ สุขประเสริฐ\r\n🎗️ระบบสารสนเทศสำหรับประเมินสุขภาพ INNOHEALTH กรณีศึกษา: วิทยาลัยสาธารณสุขสิรินธร จังหวัดขอนแก่น\r\n🔹ผู้นำเสนอ: นางสาวจิดาภา ภูมิทอง และนางสาวสมสวัสดิ์ ปีบกระโทก\r\n🔸อาจารย์ที่ปรึกษา: ผู้ช่วยศาสตราจารย์ ดร.เกรียงศักดิ์ จันทีนอก\r\n🎗️การพัฒนาแอปพลิเคชันบนมือถือ : กรณีศึกษาระบบเช่าชุดรับปริญญา-ช่างแต่งหน้า-ช่างภาพ\r\n🔹ผู้นำ', '2025-03-31', 'imagenew/7.jpg'),
(8, 'บุคลากรทีมวิศวกรผู้เชี่ยวชาญจากสำนักงานโยธาธิการและผังเมืองจังหวัดมหาสารคาม ลงพื้นที่ตรวจสอบอาคารบริหารธุรกิจสิรินธร ', 'อาคาร 11 ชั้น คณะการบัญชีและการจัดการ มหาวิทยาลัยมหาสารคาม เพื่อประเมินผลกระทบจากเหตุการณ์แผ่นดินไหวเมื่อวันที่ 28 มีนาคม 2568 ที่ผ่านมา \r\nทีมตรวจสอบได้ดำเนินการประเมินความเสียหายทางโครงสร้าง ทั้งในส่วนของฐานราก เสา คาน และพื้นอาคาร รวมถึงการแตกร้าวของผนังและวัสดุตกแต่ง เบื้องต้นได้ตรวจสอบอาคารและระบบต่างๆ แล้วพบว่าโครงสร้างอาคารมั่นคงแข็งแรง ไม่พบจุดเสี่ยงที่กระทบต่อความปลอดภัย โครงสร้างทั้งหมดปลอดภัยสามารถใช้งานได้ปกติ', '2025-03-31', 'imagenew/8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `P_id` int(11) NOT NULL,
  `P_name` varchar(200) NOT NULL,
  `P_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`P_id`, `P_name`, `P_link`) VALUES
(2, 'การพัฒนาระบบบริการการแพทย์ฉุกเฉินสำหรับผู้ป่วยฉุกเฉินวิกฤตสุขภาพจิตแบบไร้รอยต่อและบูรณาการในประเทศไทย', 'https://kb.hsri.or.th/dspace/handle/11228/5894');

-- --------------------------------------------------------

--
-- Table structure for table `pjappoint`
--

CREATE TABLE `pjappoint` (
  `pj_id` int(7) NOT NULL,
  `pj_project` text NOT NULL,
  `pj_name` text NOT NULL,
  `pj_num` text NOT NULL,
  `pj_sname` text NOT NULL,
  `pj_sid` text NOT NULL,
  `pj_subject` text NOT NULL,
  `pj_chairman` text NOT NULL,
  `pj_director` text NOT NULL,
  `pj_teacher` text NOT NULL,
  `pj_date` date NOT NULL,
  `pj_time` time NOT NULL,
  `pj_room` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pjappoint`
--

INSERT INTO `pjappoint` (`pj_id`, `pj_project`, `pj_name`, `pj_num`, `pj_sname`, `pj_sid`, `pj_subject`, `pj_chairman`, `pj_director`, `pj_teacher`, `pj_date`, `pj_time`, `pj_room`) VALUES
(3, 'โครงงานพัฒนาระบบสหกิจ', 'กมลเนตร', '65010912578', 'ชนม์นิภา', '65010912584', 'cloud', 'อ.ดร.เอกชัย แน่นอุดร', 'อ.ดร.อิทธิพล เอี่ยมภูงา', 'charuay', '2025-03-29', '13:30:00', 'accbiz306'),
(4, 'โครงงานระบบจองห้องพัก', 'นิลเนตร', '65010912601', 'พิกุล', '65010912606', 'cloud', 'อ.ดร.อิทธิพล เอี่ยมภูงา', 'อ.ดร.เอกชัย แน่นอุดร', 'charuay', '2025-03-29', '08:30:00', 'accbiz306');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `p_phone` varchar(10) NOT NULL,
  `p_email` varchar(500) NOT NULL,
  `p_idstudent` varchar(11) NOT NULL,
  `p_subject` varchar(200) NOT NULL,
  `p_file` longblob NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `t_id` int(11) NOT NULL,
  `s_id` int(4) NOT NULL,
  `p_status` varchar(255) DEFAULT 'รอดำเนินการ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `p_phone`, `p_email`, `p_idstudent`, `p_subject`, `p_file`, `created_at`, `t_id`, `s_id`, `p_status`) VALUES
(59, 'นางสาวกมลเนตร ศรีชัย', '0650958329', '65010912578@msu.ac.th', '65010912578', 'การดำเนินการและการพัฒนาโปรแกรมบนคอมพิวเตอร์', 0x75706c6f6164732f70726f6a6563745f313734333432383733322e706466, '2025-03-31', 1, 30, 'รอดำเนินการ'),
(61, 'นางสาวชนม์นิภา แฝงเมืองคุก', '0913711440', '65010912584@msu.ac.th', '65010912584', 'ระบบความปลอดภัยในคอมพิวเตอร์สำหรับงานธุรกิจ', 0x75706c6f6164732f70726f6a6563745f313734333432383934392e706466, '2025-03-31', 3, 31, 'รอดำเนินการ'),
(62, 'นางสาวกชกร ดอนปากเพ็ง', '0610681175', '65010912577@msu.ac.th', '65010912577', 'ระบบความปลอดภัยในคอมพิวเตอร์สำหรับงานธุรกิจ', 0x75706c6f6164732f70726f6a6563745f313734333432393033372e706466, '2025-03-31', 3, 102, 'รอดำเนินการ'),
(63, 'นางสาวกรพิน ภิรมย์', '0617690227', '65010912579@msu.ac.th', '65010912579', 'การดำเนินการและการพัฒนาโปรแกรมบนคอมพิวเตอร์', 0x75706c6f6164732f70726f6a6563745f313734333432393131362e706466, '2025-03-31', 1, 103, 'รอดำเนินการ'),
(64, 'นางสาวพิกุล สัตย์ไธสง', '0629592023', '65010912606@msu.ac.th', '65010912606', 'ระบบความปลอดภัยในคอมพิวเตอร์สำหรับงานธุรกิจ', 0x75706c6f6164732f70726f6a6563745f313734333432393234382e706466, '2025-03-31', 3, 104, 'รอดำเนินการ'),
(65, 'นางสาวนิลเนตร อินพรหมมา', '0930807176', '65010912601@msu.ac.th', '65010912601', 'การดำเนินการและการพัฒนาโปรแกรมบนคอมพิวเตอร์', 0x75706c6f6164732f70726f6a6563745f313734333432393333382e706466, '2025-03-31', 1, 105, 'อนุมัติ'),
(66, 'ชนม์นิภา แฝงเมืองคุก', '0913711440', '65010912584@msu.ac.th', '65010912584', 'didiowjafwiefj', 0x75706c6f6164732f70726f6a6563745f313735323339373633342e706466, '2025-07-13', 1, 31, 'อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(4) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `s_email` text NOT NULL,
  `s_password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_email`, `s_password`) VALUES
(30, 'กมลเนตร ศรีชัย', '65010912578@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(31, 'ชนม์นิภา แฝงเมืองคุก', '65010912584@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(102, 'กชกร ดอนปากเพ็ง', '65010912577@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(103, 'กรพิน ภิรมย์', '65010912579@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(104, 'พิกุล สัตย์ไธสง', '65010912606@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(105, 'นิลเนตร อินพรหมมา', '65010912601@msu.ac.th', '81dc9bdb52d04dc20036dbd8313ed055'),
(106, 'plai', '66010912584@msu.ac.th', 'e10adc3949ba59abbe56e057f20f883e'),
(107, 'nunew', '65010912515@msu.ac.th', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(200) NOT NULL,
  `t_email` text NOT NULL,
  `t_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`t_id`, `t_name`, `t_email`, `t_password`) VALUES
(1, 'อ.ดร.อิทธิพล เอี่ยมภูงา', 'itthiphol.e@mbs.msu.ac.th', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'รองศาสตราจารย์ ดร.จรวย สาวิถี', 'charuay.s@mbs.msu.ac.th', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `work`
--

CREATE TABLE `work` (
  `w_id` int(11) NOT NULL,
  `w_name` varchar(200) NOT NULL,
  `w_detail` varchar(5000) NOT NULL,
  `w_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `work`
--

INSERT INTO `work` (`w_id`, `w_name`, `w_detail`, `w_img`) VALUES
(1, 'KBTG. รับสมัคร Business Analyst หลายตำแหน่ง\'', 'Hot Jobs Alert at KBTG โอกาสดีๆ สำหรับใครที่อยากเป็นส่วนหนึ่งในการพัฒนาเทคโนโลยีการเงินเพื่อรองรับลูกค้าทั่วประเทศและทั้งภูมิภาค ตอนนี้ KBTG กำลังเปิดรับสมัครตำแหน่ง Software Engineer, Business Analyst และ Data Engineer มาเสริมทัพในโปรเจคต่างๆ.ดูรายละเอียดและส่ง CV ได้ที่ www.kbtg.tech/career.#KBTG #KBTGCareer #Fintech #BeyondBanking #WeAreHiring', 'imagenew/w1.jpg'),
(2, 'คอราไลน์เปิดรับนักศึกษาฝึกงานกับ Coraline Internship Program 2025', 'สำหรับน้อง ๆ นิสิต นักศึกษาที่กำลังมองหาประสบการณ์การทำงานจริงในด้านเทคโนโลยี และ Big Data พลาดไม่ได้กับ #CoralineInternshipProgram2025 ที่เปิดโอกาสในการทำงานร่วมกับทีมผู้เชี่ยวชาญที่มีประสบการณ์ในการทำงานจริงจากหลายโครงการ\r\n.\r\n✅สมัครได้ตั้งแต่วันนี้ - 14 กุมภาพันธ์ 2568\r\nสนใจสมัคร คลิ๊กเลย: https://forms.gle/RVxvoYgufxzXWBNm7\r\n.\r\nตำแหน่งที่เปิดรับ\r\n- Data Scientist\r\n- Software Engineer\r\n- Data Engineer\r\n.\r\n⭐️ สำหรับนิสิตนักศึกษาชั้นปีที่ 3-4 หรือนิสิตนักศึกษาปริญญาโท \r\n⭐️ ทำงานแบบ Work from home พร้อมได้รับเบี้ยเลี้ยง\r\n.\r\n📢 ระยะเวลาฝึกงาน: พฤษภาคม - ตุลาคม 2568\r\n🕓 เวลาทำงาน: จันทร์ - ศุกร์ 9.00 - 18.00น.\r\n.\r\nสอบถามข้อมูลเพิ่มเติม \r\n📞 094-440-7451\r\n💬 career@coraline.co.th\r\n.\r\n#Coraline\r\n#lifeatcoraline\r\n#coralianway\r\n#Careers\r\n#Jobs\r\n#Recruitment\r\n#Recruit\r\n#internship', 'imagenew/w2.jpg'),
(5, 'ศูนย์ขับเคลื่อนงานนวัตกรรมเพื่อความเป็นเลิศ\r\n\r\n', 'รับสมัครงาน ตำแหน่ง Business Development', 'imagenew/w3.jpg'),
(6, 'รับสมัครงานตำแหน่ง \r\n1.นักวิชาการคอมพิวเตอร์ \r\n2.นิสิตฝึกงานตำแหน่ง นักพัฒนาเว็บ', 'ประกาศรับสมัครบุคคลเพื่อคัดเลือกเข้าปฏิบัติงานลูกจ้างชั่วคราวรายวัน ตำแหน่ง นักวิชาการคอมพิวเตอร์ โรงพยาบาลโนนคูน', 'imagenew/w4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic`
--
ALTER TABLE `academic`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `committee`
--
ALTER TABLE `committee`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Indexes for table `committee_appointment`
--
ALTER TABLE `committee_appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `committee_roles`
--
ALTER TABLE `committee_roles`
  ADD PRIMARY KEY (`role_id`),
  ADD UNIQUE KEY `role_name` (`role_name`);

--
-- Indexes for table `it`
--
ALTER TABLE `it`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `mesage`
--
ALTER TABLE `mesage`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`P_id`);

--
-- Indexes for table `pjappoint`
--
ALTER TABLE `pjappoint`
  ADD PRIMARY KEY (`pj_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `work`
--
ALTER TABLE `work`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic`
--
ALTER TABLE `academic`
  MODIFY `A_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `committee`
--
ALTER TABLE `committee`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committee_appointment`
--
ALTER TABLE `committee_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `committee_roles`
--
ALTER TABLE `committee_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `it`
--
ALTER TABLE `it`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `L_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mesage`
--
ALTER TABLE `mesage`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `new`
--
ALTER TABLE `new`
  MODIFY `n_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `P_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pjappoint`
--
ALTER TABLE `pjappoint`
  MODIFY `pj_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `work`
--
ALTER TABLE `work`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `committee_appointment`
--
ALTER TABLE `committee_appointment`
  ADD CONSTRAINT `committee_appointment_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `committee` (`c_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
