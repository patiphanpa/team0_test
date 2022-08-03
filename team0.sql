-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 01:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `team0`
--

-- --------------------------------------------------------

--
-- Table structure for table `pms_file`
--

CREATE TABLE `pms_file` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_task_id` int(11) NOT NULL,
  `file_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_file`
--

INSERT INTO `pms_file` (`file_id`, `file_name`, `file_task_id`, `file_date`) VALUES
(1, 'เก็บความต้องการ_26072022_91235715', 1, '2022-07-26'),
(2, 'เก็บความต้องการ_28072022_105638775', 3, '2022-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `pms_permission`
--

CREATE TABLE `pms_permission` (
  `per_id` int(11) NOT NULL,
  `per_pro_id` int(11) NOT NULL,
  `per_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_permission`
--

INSERT INTO `pms_permission` (`per_id`, `per_pro_id`, `per_user_id`) VALUES
(1, 1, 15),
(2, 1, 16),
(3, 1, 17),
(4, 1, 18),
(5, 2, 19),
(6, 2, 20),
(7, 2, 21);

-- --------------------------------------------------------

--
-- Table structure for table `pms_project`
--

CREATE TABLE `pms_project` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_customer` varchar(255) NOT NULL,
  `pro_contact` varchar(255) NOT NULL,
  `pro_detail` varchar(255) NOT NULL,
  `pro_status` varchar(255) NOT NULL,
  `pro_user_id` int(11) NOT NULL,
  `pro_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_project`
--

INSERT INTO `pms_project` (`pro_id`, `pro_name`, `pro_customer`, `pro_contact`, `pro_detail`, `pro_status`, `pro_user_id`, `pro_date`) VALUES
(1, 'Human Resource Management System', 'จันทรัตว์ แก้วมาลา', 'line: jantav.123', 'ระบบบริหารจัดการบุคลากรภายในบริษัท', 'กำลังดำเนินการ', 10, '2022-07-25'),
(2, 'ระบบจัดเก็บเอกสาร', 'ภูวเดช เลิศคุณวงส์', 'line: tame555', 'ระบบจัดเก็บเอกสารต่าง ๆ ในบริษัท', 'กำลังดำเนินการ', 14, '2022-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `pms_task`
--

CREATE TABLE `pms_task` (
  `task_id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_date` date NOT NULL,
  `task_detail` varchar(255) NOT NULL,
  `task_pro_id` int(11) NOT NULL,
  `task_user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_task`
--

INSERT INTO `pms_task` (`task_id`, `task_name`, `task_date`, `task_detail`, `task_pro_id`, `task_user_id`) VALUES
(1, 'เก็บความต้องการ', '2022-07-26', 'ลูกค้าต้องการระบบที่สามารถดูข้อมูลและจัดการพนักงานภายในบริษัทของตนได้', 1, 10),
(2, 'เก็บรักฉันไว้ในใจเธอก่อน', '2022-07-28', 'อะไรสักอย่าง', 1, 10),
(3, 'เก็บความต้องการ', '2022-07-28', 'ระบบต้องสามารถจัดเก็บเอกสารและเรียกดูได้', 2, 14);

-- --------------------------------------------------------

--
-- Table structure for table `pms_user`
--

CREATE TABLE `pms_user` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `user_tel` varchar(10) NOT NULL,
  `user_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pms_user`
--

INSERT INTO `pms_user` (`user_id`, `user_email`, `user_password`, `user_fullname`, `user_tel`, `user_level`) VALUES
(1, '63160248@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ปฏิภาณ ปั้นสง่า', '0912345678', 'ผู้ดูแลระบบ'),
(2, '63160018@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ธนพงศ์ หงษ์บิน', '0989340452', 'ผู้ดูแลระบบ'),
(3, '63160290@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ปวันรัตน์ ตั้งประเสริฐ', '0675340120', 'ผู้ดูแลระบบ'),
(4, '63160246@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'จิรเดช ป้อมใหญ่', '0860136623', 'ผู้ดูแลระบบ'),
(5, '63160239@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ณัฐกิตติ์ ชัยกล้าหาญ', '0927373262', 'ผู้ดูแลระบบ'),
(6, '63160258@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'มติมนต์ นรดี', '0912297285', 'ผู้ดูแลระบบ'),
(7, '63160234@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'กิติวัฒน์ อรุญวงษ์', '0835297285', 'ผู้ดูแลระบบ'),
(8, '63160238@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ณฐกร พงษ์สาริกิจ', '0978519188', 'ผู้ดูแลระบบ'),
(9, '63160265@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'สิรภัทร ตันเสวตวงษ์', '0870598760', 'ผู้ดูแลระบบ'),
(10, '63160999@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ขจรศักดิ์ ผักใบเขียว', '0810584731', 'หัวหน้าโครงการ'),
(11, '63160998@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'กิตติธร กิตติเตชะคุณ', '0838853168', 'พนักงาน'),
(12, '63160997@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'นวรัตน์ พาสกุล', '0822801109', 'พนักงาน'),
(13, '63160996@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'สุนิษา สุพรรณภาคิน', '0687025049', 'พนักงาน'),
(14, '63160995@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'พัฒนเดช พงศ์พิโรจ', '0848430664', 'หัวหน้าโครงการ'),
(15, '63160994@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'กัญญลักษณ์ โชคชัย', '0604274552', 'พนักงาน'),
(16, '63160993@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'พลภัทร พิจิตเจริญวงศ์', '0832438221', 'พนักงาน'),
(17, '63160992@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ยศพัฒน์ พิชิตชัย', '0617610871', 'พนักงาน'),
(18, '63160991@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'บวรวิทย์ คมปราชญ์', '0839386762', 'พนักงาน'),
(19, '63160990@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ปิยรมย์ พิจิตเจริญวงศ์', '0651338630', 'พนักงาน'),
(20, '63160989@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'กัญจนพร พงศ์พิไล', '0637237718', 'พนักงาน'),
(21, '63160988@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'พงษ์สิทธิ์ อุดมเสก', '0937237799', 'พนักงาน'),
(22, '63160987@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ธนภัทร เจริญผลวัฒนา', '0836949645', 'พนักงาน'),
(23, '63160986@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'นภัสสร จันทรพร', '0906219227', 'พนักงาน'),
(24, '63160985@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'คงเกียรติ จันทรทรัพย์', '0816804298', 'พนักงาน'),
(25, '63160984@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'สุชาดา พินิจนันท์', '0652864431', 'พนักงาน'),
(26, '63160983@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'นีรา ตันฑการุณ', '0647990546', 'พนักงาน'),
(27, '63160982@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ชนวรรณ อินทรประสาท', '0832157872', 'พนักงาน'),
(28, '63160981@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ธนาธง ธรรมวงศ์', '0988421765', 'พนักงาน'),
(29, '63160980@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'นันทิพร ประสานวงศ์', '0873347391', 'พนักงาน'),
(30, '63160979@go.buu.ac.th', 'f9194e73f9e9459e3450ea10a179cdf77aafa695beecd3b9344a98d111622243', 'ธีรญาณ พงษ์ธนาพัฒน์', '0841923769', 'พนักงาน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pms_file`
--
ALTER TABLE `pms_file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `pms_permission`
--
ALTER TABLE `pms_permission`
  ADD PRIMARY KEY (`per_id`);

--
-- Indexes for table `pms_project`
--
ALTER TABLE `pms_project`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `pms_task`
--
ALTER TABLE `pms_task`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `pms_user`
--
ALTER TABLE `pms_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pms_file`
--
ALTER TABLE `pms_file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pms_permission`
--
ALTER TABLE `pms_permission`
  MODIFY `per_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pms_project`
--
ALTER TABLE `pms_project`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pms_task`
--
ALTER TABLE `pms_task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pms_user`
--
ALTER TABLE `pms_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
