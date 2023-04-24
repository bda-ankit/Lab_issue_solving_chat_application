-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2021 at 10:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lab_issue_solving`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_photo` varchar(500) NOT NULL,
  `admin_mail` varchar(30) NOT NULL,
  `admin_number` varchar(10) NOT NULL,
  `admin_enrol` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL,
  `root_admin` varchar(3) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`admin_id`, `admin_fname`, `admin_lname`, `admin_photo`, `admin_mail`, `admin_number`, `admin_enrol`, `admin_pass`, `root_admin`, `login`) VALUES
(1, 'maharsh', 'patel', 'admin.jpg', 'maharsh2017@gmail.com', '7041477686', 'a_1', '12345678', '1', '0'),
(2, 'jaymin', 'nirmal', 'lab_adm.jpg', 'nirmalamit19@gnu.ac.in', '1234567890', 'a_2', '12345678', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logs`
--

CREATE TABLE `admin_logs` (
  `admin_log_id` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `admin_loging_date` date NOT NULL,
  `admin_loging_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_sub`
--

CREATE TABLE `admin_sub` (
  `admin_sub_id` int(11) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sem_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_sub`
--

INSERT INTO `admin_sub` (`admin_sub_id`, `admin_id`, `sub_id`, `course_id`, `sem_id`) VALUES
(1, '2', '1', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `chat_fac_admin`
--

CREATE TABLE `chat_fac_admin` (
  `chat_f_a_id` int(11) NOT NULL,
  `msg_sender` varchar(10) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `fac_id` varchar(10) NOT NULL,
  `msg_type` varchar(10) NOT NULL,
  `chat_msg` varchar(500) NOT NULL,
  `seen` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_fac_admin`
--

INSERT INTO `chat_fac_admin` (`chat_f_a_id`, `msg_sender`, `admin_id`, `fac_id`, `msg_type`, `chat_msg`, `seen`, `date`, `time`) VALUES
(14, 'f', '2', '1', 'm', 'hi', '0', '2021-05-06', '17:49:34'),
(15, 'a', '2', '1', 'm', 'hi', '0', '2021-05-06', '17:49:38'),
(16, 'a', '1', '1', 'm', 'hi', '0', '2021-05-06', '18:25:43'),
(17, 'f', '1', '1', 'm', 'hi', '0', '2021-05-06', '18:25:46'),
(18, 'f', '2', '1', 'm', 'Heet has some error regarding xampp can u pls resolve it', '0', '2021-05-06', '16:45:26'),
(19, 'f', '1', '1', 'm', 'Faculty module has some glitch in it. Please check it', '0', '2021-05-06', '16:47:12'),
(20, 'a', '2', '1', 'm', 'okay', '0', '2021-05-06', '16:54:07'),
(21, 'a', '1', '1', 'm', 'okay, I will check it', '0', '2021-05-06', '20:44:03'),
(22, 'f', '2', '1', 'm', 'there are some issues in sofware', '0', '2021-05-06', '21:45:13');

-- --------------------------------------------------------

--
-- Table structure for table `chat_stu_admin`
--

CREATE TABLE `chat_stu_admin` (
  `chat_a_id` int(11) NOT NULL,
  `msg_sender` varchar(10) NOT NULL,
  `admin_id` varchar(10) NOT NULL,
  `stu_id` varchar(10) NOT NULL,
  `msg_type` varchar(10) NOT NULL,
  `chat_msg` varchar(500) NOT NULL,
  `seen` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_stu_admin`
--

INSERT INTO `chat_stu_admin` (`chat_a_id`, `msg_sender`, `admin_id`, `stu_id`, `msg_type`, `chat_msg`, `seen`, `date`, `time`) VALUES
(9, 'a', '2', '4', 'm', 'hi', '0', '2021-05-06', '17:57:22'),
(10, 's', '2', '4', 'm', 'hi', '0', '2021-05-06', '17:58:04'),
(11, 'a', '2', '2', 'm', 'hi', '0', '2021-05-06', '18:02:22'),
(12, 's', '2', '2', 'm', 'hi', '0', '2021-05-06', '18:02:29'),
(13, 'a', '1', '2', 'm', 'hi', '0', '2021-05-06', '18:16:21'),
(14, 's', '1', '2', 'm', 'hi', '0', '2021-05-06', '18:16:26'),
(15, 'a', '1', '4', 'm', 'hi', '0', '2021-05-06', '18:22:15'),
(16, 's', '1', '4', 'm', 'hi', '0', '2021-05-06', '18:22:23'),
(17, 's', '2', '2', 'm', 'My xampp isnt working there is some error regarding the ports. Can u please check it', '0', '2021-05-06', '16:42:10'),
(18, 's', '1', '2', 'm', 'Student module has some glitch in it. Please check it', '0', '2021-05-06', '16:46:22'),
(19, 'a', '2', '2', 'm', 'okay', '0', '2021-05-06', '16:52:53'),
(20, 'a', '1', '2', 'm', 'ok i will check that', '0', '2021-05-06', '21:46:32');

-- --------------------------------------------------------

--
-- Table structure for table `chat_stu_fac`
--

CREATE TABLE `chat_stu_fac` (
  `chat_f_id` int(11) NOT NULL,
  `msg_sender` varchar(10) NOT NULL,
  `fac_id` varchar(10) NOT NULL,
  `stu_id` varchar(10) NOT NULL,
  `msg_type` varchar(10) NOT NULL,
  `chat_msg` varchar(500) NOT NULL,
  `seen` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_stu_fac`
--

INSERT INTO `chat_stu_fac` (`chat_f_id`, `msg_sender`, `fac_id`, `stu_id`, `msg_type`, `chat_msg`, `seen`, `date`, `time`) VALUES
(77, 's', '1', '2', 'm', 'hi', '0', '2021-05-06', '18:46:23'),
(78, 's', '1', '2', 'm', 'Sir, i have error in my practical 7 can u pls check it', '0', '2021-05-06', '16:36:06'),
(79, 's', '1', '4', 'm', 'hello sir, i have some doubt regarding practical 5', '0', '2021-05-06', '16:37:54'),
(80, 'f', '1', '2', 'm', 'okay will check it', '0', '2021-05-06', '16:55:12'),
(81, 'f', '1', '4', 'm', 'okay', '0', '2021-05-06', '16:55:21'),
(82, 's', '1', '4', 'm', 'hello sir, i have problem', '0', '2021-05-06', '21:43:26'),
(83, 'f', '1', '4', 'm', 'what is it ?', '0', '2021-05-06', '21:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(20) NOT NULL,
  `total_sem` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`course_id`, `course_name`, `total_sem`) VALUES
(1, 'it', '8'),
(2, 'cse', '8');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE `faculty_details` (
  `fac_id` int(11) NOT NULL,
  `fac_fname` varchar(20) NOT NULL,
  `fac_lname` varchar(20) NOT NULL,
  `fac_photo` varchar(500) NOT NULL,
  `fac_mail` varchar(30) NOT NULL,
  `fac_number` varchar(10) NOT NULL,
  `fac_pass` varchar(30) NOT NULL,
  `fac_enrol` varchar(30) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`fac_id`, `fac_fname`, `fac_lname`, `fac_photo`, `fac_mail`, `fac_number`, `fac_pass`, `fac_enrol`, `login`) VALUES
(1, 'kunal', 'garud', 'kunal.jpg', 'kdg01@ganpatuniversity.ac.in', '2134567890', '12345678', 'f_1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_logs`
--

CREATE TABLE `faculty_logs` (
  `fac_log_id` int(11) NOT NULL,
  `fac_id` varchar(10) NOT NULL,
  `fac_loging_date` date NOT NULL,
  `fac_loging_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_logs`
--

INSERT INTO `faculty_logs` (`fac_log_id`, `fac_id`, `fac_loging_date`, `fac_loging_time`) VALUES
(1, '1', '2021-02-02', '14:04:23'),
(2, '1', '2021-02-05', '12:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_sub`
--

CREATE TABLE `faculty_sub` (
  `fac_sub_id` int(11) NOT NULL,
  `fac_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_sub`
--

INSERT INTO `faculty_sub` (`fac_sub_id`, `fac_id`, `sub_id`, `course_id`) VALUES
(1, '1', '1', '2'),
(2, '1', '2', '2'),
(3, '1', '3', '2'),
(4, '1', '4', '2'),
(5, '1', '5', '2'),
(6, '1', '6', '2'),
(7, '1', '7', '2');

-- --------------------------------------------------------

--
-- Table structure for table `room_data`
--

CREATE TABLE `room_data` (
  `room_data_id` int(11) NOT NULL,
  `room_master_id` varchar(10) NOT NULL,
  `stu_id` varchar(10) DEFAULT NULL,
  `fac_id` varchar(10) DEFAULT NULL,
  `week_day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `end_time` time DEFAULT NULL,
  `join_leave` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_data`
--

INSERT INTO `room_data` (`room_data_id`, `room_master_id`, `stu_id`, `fac_id`, `week_day`, `date`, `time`, `end_time`, `join_leave`) VALUES
(169, '1', '', '1', 'Thursday', '2021-05-06', '21:41:51', '21:47:23', '0'),
(170, '1', '2', '', 'Thursday', '2021-05-06', '21:42:18', '21:47:05', '0'),
(171, '1', '4', '', 'Thursday', '2021-05-06', '21:42:35', '21:47:16', '0');

-- --------------------------------------------------------

--
-- Table structure for table `room_master`
--

CREATE TABLE `room_master` (
  `room_master_id` int(11) NOT NULL,
  `room_number` varchar(50) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sem_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `room_start` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_master`
--

INSERT INTO `room_master` (`room_master_id`, `room_number`, `course_id`, `sem_id`, `sub_id`, `room_start`) VALUES
(1, 'php_123', '2', '4', '1', '0'),
(2, 'python_123', '2', '4', '2', '0'),
(3, 'mm_123', '2', '4', '3', '0'),
(4, 'pp_123', '2', '4', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sem_master`
--

CREATE TABLE `sem_master` (
  `sem_id` int(11) NOT NULL,
  `sem_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_master`
--

INSERT INTO `sem_master` (`sem_id`, `sem_number`) VALUES
(2, '1'),
(3, '2'),
(4, '3'),
(7, '4'),
(8, '5'),
(9, '6'),
(10, '7'),
(11, '8');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `stu_id` int(11) NOT NULL,
  `stu_fname` varchar(20) NOT NULL,
  `stu_lname` varchar(20) NOT NULL,
  `stu_photo` varchar(500) NOT NULL,
  `stu_number` varchar(10) NOT NULL,
  `stu_mail` varchar(30) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sem_id` varchar(10) NOT NULL,
  `stu_pass` varchar(30) NOT NULL,
  `stu_enrol` varchar(30) NOT NULL,
  `login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`stu_id`, `stu_fname`, `stu_lname`, `stu_photo`, `stu_number`, `stu_mail`, `course_id`, `sem_id`, `stu_pass`, `stu_enrol`, `login`) VALUES
(2, 'heet', 'bodara', 'heet.png', '0987654321', 'maharshpatel19@gnu.ac.in', '2', '4', '123456789', 's_1', '0'),
(4, 'hetvi', 'patel', 'hetvi.jpg', '5432167890', 'hetvipatel19@gnu.ac.in', '2', '4', '12345678', 's_2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `student_logs`
--

CREATE TABLE `student_logs` (
  `stu_log_id` int(11) NOT NULL,
  `stu_id` varchar(10) NOT NULL,
  `stu_loging_date` date NOT NULL,
  `stu_loging_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subject_master`
--

CREATE TABLE `subject_master` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(20) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sem_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_master`
--

INSERT INTO `subject_master` (`sub_id`, `sub_name`, `course_id`, `sem_id`) VALUES
(1, 'php', '2', '4'),
(2, 'python', '2', '4'),
(3, 'MM', '2', '4'),
(4, 'OS', '2', '4'),
(5, 'PS', '2', '4'),
(6, 'AD', '2', '4'),
(7, 'WAD', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `time_table_id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `sem_id` varchar(10) NOT NULL,
  `sub_id` varchar(10) NOT NULL,
  `week_day` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `duration` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`time_table_id`, `course_id`, `sem_id`, `sub_id`, `week_day`, `time`, `duration`) VALUES
(1, '2', '4', '1', 'Thursday', '11:00:00', '60'),
(2, '2', '4', '2', 'Thursday', '12:00:00', '60'),
(3, '2', '4', '5', 'Thursday', '09:00:00', '60'),
(4, '2', '4', '3', 'Thursday', '10:00:00', '60');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_logs`
--
ALTER TABLE `admin_logs`
  ADD PRIMARY KEY (`admin_log_id`);

--
-- Indexes for table `admin_sub`
--
ALTER TABLE `admin_sub`
  ADD PRIMARY KEY (`admin_sub_id`);

--
-- Indexes for table `chat_fac_admin`
--
ALTER TABLE `chat_fac_admin`
  ADD PRIMARY KEY (`chat_f_a_id`);

--
-- Indexes for table `chat_stu_admin`
--
ALTER TABLE `chat_stu_admin`
  ADD PRIMARY KEY (`chat_a_id`);

--
-- Indexes for table `chat_stu_fac`
--
ALTER TABLE `chat_stu_fac`
  ADD PRIMARY KEY (`chat_f_id`);

--
-- Indexes for table `course_table`
--
ALTER TABLE `course_table`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `faculty_details`
--
ALTER TABLE `faculty_details`
  ADD PRIMARY KEY (`fac_id`);

--
-- Indexes for table `faculty_logs`
--
ALTER TABLE `faculty_logs`
  ADD PRIMARY KEY (`fac_log_id`);

--
-- Indexes for table `faculty_sub`
--
ALTER TABLE `faculty_sub`
  ADD PRIMARY KEY (`fac_sub_id`);

--
-- Indexes for table `room_data`
--
ALTER TABLE `room_data`
  ADD PRIMARY KEY (`room_data_id`);

--
-- Indexes for table `room_master`
--
ALTER TABLE `room_master`
  ADD PRIMARY KEY (`room_master_id`);

--
-- Indexes for table `sem_master`
--
ALTER TABLE `sem_master`
  ADD PRIMARY KEY (`sem_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`stu_id`);

--
-- Indexes for table `student_logs`
--
ALTER TABLE `student_logs`
  ADD PRIMARY KEY (`stu_log_id`);

--
-- Indexes for table `subject_master`
--
ALTER TABLE `subject_master`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`time_table_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_logs`
--
ALTER TABLE `admin_logs`
  MODIFY `admin_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_sub`
--
ALTER TABLE `admin_sub`
  MODIFY `admin_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_fac_admin`
--
ALTER TABLE `chat_fac_admin`
  MODIFY `chat_f_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chat_stu_admin`
--
ALTER TABLE `chat_stu_admin`
  MODIFY `chat_a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `chat_stu_fac`
--
ALTER TABLE `chat_stu_fac`
  MODIFY `chat_f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `course_table`
--
ALTER TABLE `course_table`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_details`
--
ALTER TABLE `faculty_details`
  MODIFY `fac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty_logs`
--
ALTER TABLE `faculty_logs`
  MODIFY `fac_log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_sub`
--
ALTER TABLE `faculty_sub`
  MODIFY `fac_sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_data`
--
ALTER TABLE `room_data`
  MODIFY `room_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `room_master`
--
ALTER TABLE `room_master`
  MODIFY `room_master_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sem_master`
--
ALTER TABLE `sem_master`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `stu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_logs`
--
ALTER TABLE `student_logs`
  MODIFY `stu_log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_master`
--
ALTER TABLE `subject_master`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `time_table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
