-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 10, 2021 at 12:04 PM
-- Server version: 5.7.33
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db20_006_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `borrow_back`
--

CREATE TABLE `borrow_back` (
  `borrow_back_id` int(100) NOT NULL,
  `user_id` int(50) NOT NULL,
  `borrow_back_purpose` text NOT NULL,
  `teacher_approve_id` varchar(50) DEFAULT NULL,
  `borrow_daytime` datetime NOT NULL,
  `back_daytime` datetime NOT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `approve_by_teacher_status` varchar(50) DEFAULT NULL,
  `borrow_status` varchar(50) DEFAULT NULL,
  `back_status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow_back`
--

INSERT INTO `borrow_back` (`borrow_back_id`, `user_id`, `borrow_back_purpose`, `teacher_approve_id`, `borrow_daytime`, `back_daytime`, `time_stamp`, `approve_by_teacher_status`, `borrow_status`, `back_status`) VALUES
(4, 3, 'เพื่อการศึกษา', 'E9400', '2021-09-26 00:00:00', '2021-09-28 03:00:00', '2021-09-27 15:02:05', 'ap1', NULL, NULL),
(5, 3, 'เพื่อทดลอง', 'E9400', '2021-09-14 00:00:00', '2021-09-14 00:00:00', '2021-09-27 15:02:05', 'ap2', 'bo1', NULL),
(6, 2, 'เพื่อสำหรับให้นิสิตเรียน', NULL, '2021-09-28 00:00:00', '2021-09-29 00:00:00', '2021-09-27 15:02:05', NULL, 'bo2', NULL),
(7, 2, 'ทำงาน', NULL, '2021-09-30 00:00:00', '2021-10-02 00:00:00', '2021-09-27 15:02:05', NULL, NULL, 'ba3'),
(8, 3, 'ทำโปรเจค', 'E9400', '2021-10-04 13:26:03', '2021-10-12 13:26:03', '2021-10-03 06:56:27', NULL, NULL, 'ba3');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_back_equipment_detail`
--

CREATE TABLE `borrow_back_equipment_detail` (
  `borrow_back_equipment_detail_id` int(11) NOT NULL,
  `borrow_back_id` int(100) NOT NULL,
  `equipment_detail_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `borrow_back_equipment_detail`
--

INSERT INTO `borrow_back_equipment_detail` (`borrow_back_equipment_detail_id`, `borrow_back_id`, `equipment_detail_id`) VALUES
(1, 4, 'CPE001'),
(2, 4, 'CPE002'),
(3, 4, 'CPE003'),
(4, 4, 'CPE006'),
(5, 5, 'CPE007'),
(6, 5, 'CPE008'),
(7, 6, 'CPE011'),
(8, 6, 'CPE012'),
(9, 6, 'CPE012'),
(10, 6, 'CPE013'),
(11, 7, 'CPE015'),
(12, 8, 'CPE001'),
(13, 8, 'CPE003'),
(14, 8, 'CPE004');

-- --------------------------------------------------------

--
-- Table structure for table `category_equipment`
--

CREATE TABLE `category_equipment` (
  `categoryequipment_id` int(100) NOT NULL,
  `categoryequipment_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_equipment`
--

INSERT INTO `category_equipment` (`categoryequipment_id`, `categoryequipment_name`) VALUES
(1, 'Hardware'),
(2, 'Network'),
(3, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(100) NOT NULL,
  `categoryequipment_id` int(50) NOT NULL,
  `equipment_name` text NOT NULL,
  `quantity_equipent` int(50) NOT NULL,
  `picture_equipment` longblob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `categoryequipment_id`, `equipment_name`, `quantity_equipent`, `picture_equipment`) VALUES
(11, 1, 'เครื่อง IOT', 20, NULL),
(12, 1, 'สายไฟ', 25, NULL),
(13, 2, 'เครื่อง router', 25, NULL),
(14, 2, 'เครื่อง switch', 23, NULL),
(15, 3, 'คอมพิวเตอร์', 50, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `equipment_detail`
--

CREATE TABLE `equipment_detail` (
  `equipment_detail_id` varchar(50) NOT NULL,
  `equipment_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `equipment_detail`
--

INSERT INTO `equipment_detail` (`equipment_detail_id`, `equipment_id`) VALUES
('CPE001', 11),
('CPE002', 11),
('CPE003', 12),
('CPE004', 13),
('CPE005', 13),
('CPE006', 13),
('CPE007', 14),
('CPE008', 14),
('CPE009', 14),
('CPE010', 15),
('CPE011', 15),
('CPE012', 15),
('CPE013', 15),
('CPE014', 15),
('CPE015', 15);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_id`) VALUES
('admin'),
('borrower'),
('student'),
('teacher');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` varchar(10) NOT NULL,
  `status_text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_text`) VALUES
('ap1', 'กำลังรออาจารย์อนุมัติ'),
('ba3', 'คืนอุปกรณ์'),
('ba1', 'ต้องการคืนอุปกรณ์'),
('ba2', 'นัดรับเเละกำลังตรวจสอบอุปกรณ์'),
('bo1', 'รับเรื่องเเละกำลังติดต่อเพื่อทำการยืม'),
('bo2', 'อยู่ระหว่างการยืม'),
('ap2', 'อาจารย์อนุมัติ'),
('ap3', 'อาจารย์ไม่อนุมัติ');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_approve`
--

CREATE TABLE `teacher_approve` (
  `teacher_approve_id` varchar(11) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teacher_approve`
--

INSERT INTO `teacher_approve` (`teacher_approve_id`, `user_id`) VALUES
('E9400', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` mediumtext NOT NULL,
  `user_surname` mediumtext NOT NULL,
  `user_id_student` int(255) DEFAULT NULL,
  `user_telephone` varchar(10) NOT NULL,
  `position_id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_surname`, `user_id_student`, `user_telephone`, `position_id`, `username`, `password`) VALUES
(1, 'admin', 'admin', NULL, 'admin', 'admin', 'admin11', 'admin22'),
(2, 'teacher', 'teacher', NULL, '0888888888', 'teacher', 'teacher11', 'teacher22'),
(3, 'student', 'student', 213214444, '0897412547', 'student', 'student11', 'student22'),
(4, 'borrower', 'borrower', NULL, '0866666666', 'borrower', 'borrower11', 'borrower22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `borrow_back`
--
ALTER TABLE `borrow_back`
  ADD PRIMARY KEY (`borrow_back_id`),
  ADD KEY `teacher_approve` (`teacher_approve_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `approve_by_teacher_status` (`approve_by_teacher_status`),
  ADD KEY `borrow_status` (`borrow_status`),
  ADD KEY `back_status` (`back_status`);

--
-- Indexes for table `borrow_back_equipment_detail`
--
ALTER TABLE `borrow_back_equipment_detail`
  ADD PRIMARY KEY (`borrow_back_equipment_detail_id`),
  ADD KEY `borrow_back_id` (`borrow_back_id`),
  ADD KEY `equipment_detail_id` (`equipment_detail_id`);

--
-- Indexes for table `category_equipment`
--
ALTER TABLE `category_equipment`
  ADD PRIMARY KEY (`categoryequipment_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`),
  ADD KEY `equipment_category` (`categoryequipment_id`);

--
-- Indexes for table `equipment_detail`
--
ALTER TABLE `equipment_detail`
  ADD PRIMARY KEY (`equipment_detail_id`),
  ADD KEY `equipment_id` (`equipment_id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `status_text` (`status_text`);

--
-- Indexes for table `teacher_approve`
--
ALTER TABLE `teacher_approve`
  ADD PRIMARY KEY (`teacher_approve_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `position` (`position_id`),
  ADD KEY `position_2` (`position_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `borrow_back`
--
ALTER TABLE `borrow_back`
  MODIFY `borrow_back_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `borrow_back_equipment_detail`
--
ALTER TABLE `borrow_back_equipment_detail`
  MODIFY `borrow_back_equipment_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category_equipment`
--
ALTER TABLE `category_equipment`
  MODIFY `categoryequipment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrow_back`
--
ALTER TABLE `borrow_back`
  ADD CONSTRAINT `borrow_back_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `borrow_back_ibfk_3` FOREIGN KEY (`teacher_approve_id`) REFERENCES `teacher_approve` (`teacher_approve_id`),
  ADD CONSTRAINT `borrow_back_ibfk_4` FOREIGN KEY (`approve_by_teacher_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `borrow_back_ibfk_5` FOREIGN KEY (`borrow_status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `borrow_back_ibfk_6` FOREIGN KEY (`back_status`) REFERENCES `status` (`status_id`);

--
-- Constraints for table `borrow_back_equipment_detail`
--
ALTER TABLE `borrow_back_equipment_detail`
  ADD CONSTRAINT `borrow_back_equipment_detail_ibfk_1` FOREIGN KEY (`borrow_back_id`) REFERENCES `borrow_back` (`borrow_back_id`),
  ADD CONSTRAINT `borrow_back_equipment_detail_ibfk_2` FOREIGN KEY (`equipment_detail_id`) REFERENCES `equipment_detail` (`equipment_detail_id`);

--
-- Constraints for table `equipment`
--
ALTER TABLE `equipment`
  ADD CONSTRAINT `equipment_ibfk_1` FOREIGN KEY (`categoryequipment_id`) REFERENCES `category_equipment` (`categoryequipment_id`);

--
-- Constraints for table `equipment_detail`
--
ALTER TABLE `equipment_detail`
  ADD CONSTRAINT `equipment_detail_ibfk_1` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`equipment_id`);

--
-- Constraints for table `teacher_approve`
--
ALTER TABLE `teacher_approve`
  ADD CONSTRAINT `teacher_approve_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
