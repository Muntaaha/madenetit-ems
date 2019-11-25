-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 07:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ems_madenetit`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(100) NOT NULL,
  `entry_date` date NOT NULL,
  `exit_date` date DEFAULT NULL,
  `entry_time` time(6) NOT NULL,
  `exit_time` time(6) DEFAULT NULL,
  `Employee_Name` varchar(200) NOT NULL,
  `Employee_ID` int(100) NOT NULL,
  `ActiveMode` int(11) NOT NULL,
  `ReqTime` time DEFAULT NULL,
  `ReqDate` date DEFAULT NULL,
  `ReqStatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `entry_date`, `exit_date`, `entry_time`, `exit_time`, `Employee_Name`, `Employee_ID`, `ActiveMode`, `ReqTime`, `ReqDate`, `ReqStatus`) VALUES
(1, '2019-04-13', NULL, '03:16:12.000000', NULL, 'Arif', 78789966, 0, NULL, NULL, NULL),
(2, '2019-04-13', NULL, '03:16:40.000000', NULL, 'Arif', 78789966, 0, NULL, NULL, NULL),
(3, '2019-04-13', NULL, '03:21:50.000000', NULL, 'Arif', 78789966, 0, NULL, NULL, NULL),
(4, '2019-04-13', NULL, '03:26:06.000000', NULL, 'Arif', 78789966, 0, NULL, NULL, NULL),
(5, '2019-04-13', NULL, '03:28:01.000000', NULL, 'Arif', 78789966, 0, NULL, NULL, NULL),
(6, '2019-04-13', NULL, '03:39:53.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(7, '2019-04-13', NULL, '03:39:58.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(8, '2019-04-13', NULL, '03:57:55.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(9, '2019-04-13', NULL, '03:57:58.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(10, '2019-04-13', NULL, '04:04:01.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(11, '2019-04-13', NULL, '04:04:03.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(12, '2019-04-13', NULL, '04:09:20.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(13, '2019-04-13', NULL, '04:09:22.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(14, '2019-04-13', NULL, '04:09:25.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(15, '2019-04-13', NULL, '04:09:26.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(16, '2019-04-13', NULL, '04:28:14.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(17, '2019-04-13', NULL, '04:28:22.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(18, '2019-04-13', NULL, '04:29:56.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(19, '2019-04-13', NULL, '04:31:11.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(20, '2019-04-13', '2019-04-13', '05:51:46.000000', '06:31:19.000000', 'Arif', 78789966, 0, NULL, NULL, NULL),
(21, '2019-04-13', '2019-04-13', '06:32:12.000000', '06:32:20.000000', 'Arif', 78789966, 0, NULL, NULL, NULL),
(22, '2019-04-13', NULL, '10:25:14.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(23, '2019-04-13', NULL, '10:25:32.000000', NULL, 'Muntaaha', 11225566, 1, NULL, NULL, NULL),
(24, '2019-04-14', NULL, '06:35:16.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(25, '2019-04-14', NULL, '06:35:44.000000', NULL, 'Muntaaha', 11225566, 1, NULL, NULL, NULL),
(26, '2019-04-15', NULL, '10:30:07.000000', NULL, 'Muntaaha', 11225566, 1, NULL, NULL, NULL),
(27, '2019-04-15', NULL, '10:41:37.000000', NULL, 'Muntaaha', 11225566, 1, NULL, NULL, NULL),
(28, '2019-04-23', NULL, '11:26:42.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(29, '2019-04-23', NULL, '11:26:46.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(30, '2019-04-23', NULL, '11:30:17.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(31, '2019-04-23', NULL, '11:30:35.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(32, '2019-04-23', NULL, '11:46:05.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(33, '2019-04-23', NULL, '11:46:10.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(34, '2019-04-23', NULL, '11:55:45.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(35, '2019-04-23', NULL, '11:55:48.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(36, '2019-04-23', NULL, '12:04:33.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(37, '2019-04-23', NULL, '12:04:54.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(38, '2019-04-23', NULL, '12:14:06.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(39, '2019-04-23', NULL, '12:14:16.000000', NULL, 'Kaium', 77668844, 1, NULL, NULL, NULL),
(40, '2019-04-23', NULL, '12:21:10.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL),
(41, '2019-04-23', NULL, '12:21:12.000000', NULL, 'Arif', 78789966, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE `block` (
  `block_id` int(11) NOT NULL,
  `Employee_ID` int(8) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(3) NOT NULL,
  `to_user` int(8) NOT NULL,
  `from_user` int(8) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `chat_message` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `status` tinyint(1) NOT NULL,
  `unread_msg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user`, `from_user`, `time`, `chat_message`, `status`, `unread_msg`) VALUES
(1, 11225566, 0, '2019-04-23 07:30:14', 'hello', 0, 0),
(2, 11225566, 0, '2019-04-23 07:30:14', 'hi', 0, 0),
(3, 78789966, 11225566, '2019-04-10 01:12:33', 'hello\n', 0, 0),
(4, 78789966, 11225566, '2019-04-10 01:12:33', 'hey\n', 0, 0),
(5, 11225566, 0, '2019-04-23 07:30:14', 'how are you', 0, 0),
(6, 11225566, 0, '2019-04-23 07:30:14', '', 0, 0),
(7, 78789966, 11225566, '2019-04-10 01:12:33', 'hola', 0, 0),
(8, 11225566, 0, '2019-04-23 07:30:14', 'hii\n\n', 0, 0),
(9, 78789966, 11225566, '2019-04-10 01:12:33', 'your id is fin now', 0, 0),
(10, 11225566, 78789966, '2019-04-10 01:12:21', '', 0, 0),
(11, 11225566, 78789966, '2019-04-10 01:12:21', 'okk good \nhave fun', 0, 0),
(12, 78789966, 11225566, '2019-04-10 01:12:33', '??', 0, 0),
(13, 11225566, 78789966, '2019-04-10 01:12:21', '\n', 0, 0),
(14, 78789966, 11225566, '2019-04-10 01:12:33', '', 0, 0),
(15, 11225566, 78789966, '2019-04-10 02:05:39', '', 0, 0),
(16, 11225566, 78789966, '2019-04-10 02:05:39', '', 0, 0),
(17, 11225566, 78789966, '2019-04-10 02:05:39', 'Muntu', 0, 0),
(18, 78789966, 11225566, '2019-04-10 02:06:00', 'yes\n', 0, 0),
(19, 78789966, 11225566, '2019-04-10 02:06:00', 'what r u doing ?\n', 0, 0),
(20, 11225566, 78789966, '2019-04-10 02:06:53', '', 0, 0),
(21, 78789966, 11225566, '2019-04-10 02:07:16', 'nothing\n', 0, 0),
(22, 11225566, 78789966, '2019-04-10 02:10:58', '', 0, 0),
(23, 78789966, 11225566, '2019-04-10 02:23:35', 'hi\n', 0, 0),
(24, 11225566, 78789966, '2019-04-10 02:23:47', 'hello\n\n', 0, 0),
(25, 78789966, 11225566, '2019-04-10 02:57:47', ':)\n', 0, 0),
(26, 78789966, 11225566, '2019-04-10 02:57:47', ':)\n', 0, 0),
(27, 78789966, 11225566, '2019-04-10 02:57:47', ':)\n', 0, 0),
(28, 78789966, 11225566, '2019-04-10 02:57:47', ':)\n', 0, 0),
(29, 11225566, 78789966, '2019-04-27 00:33:23', '😒😒😒', 1, 0),
(30, 78789966, 11225566, '2019-04-10 03:02:29', '🤣🤣🤣', 0, 0),
(31, 0, 11225566, '2019-04-10 22:07:40', 'hello\n', 0, 0),
(32, 0, 11225566, '2019-04-10 22:07:40', 'anybody there?', 0, 0),
(33, 0, 78789966, '2019-04-10 03:57:28', 'no \nget out', 1, 0),
(34, 0, 11225566, '2019-04-10 22:07:40', 'okk\n', 0, 0),
(35, 0, 78789966, '2019-04-10 03:58:02', '?', 1, 0),
(36, 11225566, 78789966, '2019-04-12 23:50:44', 'Hi Muntaaha ', 0, 0),
(37, 11225566, 0, '2019-04-23 07:30:14', 'Hi Muntaaha', 0, 0),
(38, 11225566, 0, '2019-04-23 07:30:14', 'Hello Muntaaha', 0, 0),
(39, 11225566, 0, '2019-04-23 07:30:14', 'hi muntaaha', 0, 0),
(40, 11225566, 78789966, '2019-04-12 23:50:44', 'Hello', 0, 0),
(41, 11225566, 78789966, '2019-04-12 23:50:44', 'hi', 0, 0),
(42, 11225566, 78789966, '2019-04-12 23:50:44', 'Where are you', 0, 0),
(43, 78789966, 11225566, '2019-04-12 23:51:00', 'okk it\'s working \n\n', 0, 0),
(44, 11225566, 78789966, '2019-04-14 08:59:11', 'Hello Muntaaha\n', 0, 0),
(45, 78789966, 11225566, '2019-04-14 09:00:04', '🤣🤣🤣🤣🤣😁😁😋hiii\n\n', 0, 0),
(46, 78789966, 11225566, '2019-04-15 04:47:35', 'Hello', 0, 0),
(47, 11225566, 78789966, '2019-04-15 04:47:47', 'Hi\n\n', 0, 0),
(48, 77668844, 11225566, '2019-04-20 04:17:23', 'Hello\n\n', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `complaint_id` int(100) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `complaint_from` varchar(200) NOT NULL,
  `complaint_subject` varchar(250) NOT NULL,
  `complaint_body` longtext NOT NULL,
  `unread_complaint` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`complaint_id`, `emp_name`, `complaint_from`, `complaint_subject`, `complaint_body`, `unread_complaint`) VALUES
(1, '', '', 'About Internet', 'Arif is late today									', 'y'),
(2, '', '', 'About Internet', 'We talked to you about that project, please take a look on that', 'y'),
(3, '', '', 'Hello', 'Hi', 'y'),
(4, '', '', 'About Muntaaha', 'Muntaaha is not been working 											\r\n											', 'y'),
(5, 'Kaium Khan', '', 'About Work', 'He is unfair about ratings									', 'y'),
(6, 'Kaium Khan', 'Arif Ahmed', 'About Work', 'He is unfair about ratings									', 'y'),
(7, 'Kaium Khan', 'Arif Ahmed', 'About Work', 'He is unfair about ratings									', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `Employee_Name` varchar(250) NOT NULL,
  `Employee_ID` int(8) NOT NULL,
  `entry_time` time NOT NULL,
  `exit_time` time DEFAULT NULL,
  `entry_date` date NOT NULL,
  `exit_date` date DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `login_id` int(11) NOT NULL,
  `Active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_attendance`
--

INSERT INTO `employee_attendance` (`Employee_Name`, `Employee_ID`, `entry_time`, `exit_time`, `entry_date`, `exit_date`, `status`, `login_id`, `Active`) VALUES
('Arif', 78789966, '00:17:06', '11:07:00', '2019-04-23', '2019-04-23', 'ON TIME', 1, 0),
('Muntaaha', 11225566, '00:22:15', NULL, '0000-00-00', NULL, 'ON TIME', 2, 1),
('Muntaaha', 11225566, '00:22:36', NULL, '0000-00-00', NULL, 'ON TIME', 3, 1),
('Muntaaha', 11225566, '00:27:17', NULL, '0000-00-00', NULL, 'ON TIME', 4, 1),
('Muntaaha', 11225566, '00:30:29', NULL, '0000-00-00', NULL, 'ON TIME', 5, 1),
('Muntaaha', 11225566, '00:30:47', NULL, '0000-00-00', NULL, 'ON TIME', 6, 1),
('Muntaaha', 11225566, '01:29:11', '09:32:26', '0000-00-00', '2019-04-24', 'ON TIME', 7, 0),
('Arif', 78789966, '00:00:00', NULL, '0000-00-00', NULL, 'ON TIME', 8, 1),
('Arif', 78789966, '00:00:00', '00:00:00', '0000-00-00', '2019-04-24', 'ON TIME', 9, 0),
('Arif', 78789966, '00:00:00', '00:00:00', '0000-00-00', '2019-04-24', 'ON TIME', 10, 0),
('Arif', 78789966, '09:31:53', '09:32:00', '2019-04-24', '2019-04-24', 'ON TIME', 11, 0),
('Muntaaha', 11225566, '09:47:22', '09:48:01', '2019-04-24', '2019-04-24', 'ON TIME', 12, 0),
('Muntaaha', 11225566, '09:48:10', NULL, '2019-04-24', NULL, 'ON TIME', 13, 1),
('Muntaaha', 11225566, '09:48:30', NULL, '2019-04-24', NULL, 'LATE', 14, 1),
('Muntaaha', 11225566, '09:49:05', '09:49:07', '2019-04-24', '2019-04-24', 'ON TIME', 15, 0),
('Muntaaha', 11225566, '09:50:15', '09:50:18', '2019-04-24', '2019-04-24', 'ON TIME', 16, 0),
('Arif', 78789966, '11:21:13', '11:21:32', '2019-04-24', '2019-04-24', 'ON TIME', 17, 0),
('Muntaaha', 11225566, '11:21:22', '11:21:40', '2019-04-24', '2019-04-24', 'ON TIME', 18, 0),
('Arif', 78789966, '10:02:41', '10:03:01', '2019-04-26', '2019-04-26', 'ON TIME', 19, 0),
('Arif', 78789966, '10:03:30', '10:03:32', '2019-04-26', '2019-04-26', 'ON TIME', 20, 0),
('Arif Ahmed', 78789966, '09:11:22', '09:11:23', '2019-04-27', '2019-04-27', 'ON TIME', 21, 0),
('Arif Ahmed', 78789966, '13:58:08', '13:58:09', '2019-04-27', '2019-04-27', 'ON TIME', 22, 0),
('Arif Ahmed', 78789966, '13:58:47', '13:58:48', '2019-04-27', '2019-04-27', 'ON TIME', 23, 0),
('Muntaaha Rahman', 11225566, '13:59:57', '13:59:58', '2019-04-27', '2019-04-27', 'ON TIME', 24, 0),
('Muntaaha Rahman', 11225566, '13:59:59', '20:00:00', '2019-04-27', '2019-04-27', 'ON TIME', 25, 0),
('Arif Ahmed', 78789966, '14:13:27', '19:13:28', '2019-04-27', '2019-04-27', 'LATE', 26, 0),
('Muntaaha Rahman', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 27, 0),
('Robi Neowaz', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 28, 0),
('Tania Akter', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 29, 0),
('Kaium Khan Piyash', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 30, 0),
('Sifat Ahmed', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 31, 0),
('Siyam Hossain', 11225566, '14:14:12', '20:14:13', '2019-04-27', '2019-04-27', 'LATE', 32, 0),
('Muntaaha Rahman', 11225566, '14:56:59', '14:57:06', '2019-04-27', '2019-04-27', 'LATE', 33, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_last_activity`
--

CREATE TABLE `employee_last_activity` (
  `Employee_last_activity_id` int(3) NOT NULL,
  `Employee_ID` int(8) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_registration`
--

CREATE TABLE `employee_registration` (
  `id` int(11) NOT NULL,
  `Employee_ID` int(8) NOT NULL,
  `Employee_Name` varchar(50) NOT NULL,
  `Employee_Designation` varchar(250) NOT NULL,
  `Employee_Level` int(10) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Employee_Gender` varchar(20) NOT NULL,
  `Employee_Mobile_No` bigint(20) NOT NULL,
  `Employee_Email` varchar(50) NOT NULL,
  `Employee_Address` varchar(500) NOT NULL,
  `status` varchar(10) NOT NULL,
  `BirthDate` date NOT NULL,
  `JoinDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Employee_Education_Experience` varchar(250) NOT NULL,
  `Department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_registration`
--

INSERT INTO `employee_registration` (`id`, `Employee_ID`, `Employee_Name`, `Employee_Designation`, `Employee_Level`, `Password`, `Employee_Gender`, `Employee_Mobile_No`, `Employee_Email`, `Employee_Address`, `status`, `BirthDate`, `JoinDate`, `Employee_Education_Experience`, `Department`) VALUES
(15, 11225566, 'Muntaaha Rahman', 'Intern', 8, '$2y$10$A', 'male', 1821729407, 'muntaaha.rahman3001@gmail.com', 'HS#12 ROAD #13 Sector # 7; Uttara Dhaka', 'Active', '0000-00-00', '2019-04-27 08:52:00', 'SSC - Uttara High School and College\r\nHSC - Uttara High School and College\r\nGraduation - IUBAT', ''),
(16, 77668844, 'Kaium Khan Piyash', 'Admin', 2, '$2y$10$c', 'male', 1646736363, 'kai@gmail.com', 'HS#14 ROAD #11 Sector # 3; Uttara Dhaka', 'Active', '0000-00-00', '2019-04-27 05:59:02', 'SSC -Milestone School and College\r\nHSC - Milestone School and College\r\nGraduation - IUB', ''),
(18, 78789966, 'Arif Ahmed', 'Project Manager', 3, '$2y$10$U', 'male', 1815296450, 'arif@gmail.com', 'House #13, Road # 3 Sector # 5 \r\nUttara Dhaka', 'Active', '0000-00-00', '2019-04-27 06:01:33', 'SSC 5(Kushtia Pilot School)\r\nHSC 5(Kushtia Pilot School)\r\nNSU 3.1', ''),
(28, 280192117, 'Tania Akter', 'Project Manager', 2, '$2y$10$8', 'female', 1815296450, 'tania@gmail.com', 'Sec 10, House 14, Road 12, Uttara Dhaka', '', '0000-00-00', '2019-04-27 07:19:23', 'SSC - Uttara High School and College HSC - Uttara High School and College Graduation - IUBAT', ''),
(29, 986899514, 'Robi Neowaz', 'Assistant Project Manager', 4, '$2y$10$D', 'male', 1546784329, 'robi_naowaz@gmail.com', 'Sec 10, House 14, Road 12, Uttara Dhaka', 'Active', '0000-00-00', '2019-04-27 08:27:26', 'SSC - Uttara High School and College HSC - Uttara High School and College Graduation - IUBAT', ''),
(30, 136957415, 'Sifat Ahmed', 'Junior PHP Developer', 6, '$2y$10$q', 'male', 1915296450, 'sifat_hossain@gmail.com', '\r\nHS#14 ROAD #11 Sector # 8; Uttara Dhaka', 'Active', '0000-00-00', '2019-04-27 07:18:57', 'SSC - Uttara High School and College\r\nHSC - Uttara High School and College\r\nGraduation - IUBAT\r\n', ''),
(31, 136957415, 'Siyam Hossain', 'Junior PHP Developer', 6, '$2y$LMN', 'male', 1915296450, 'siyam_ariyan@gmail.com', '\r\nHS#14 ROAD #11 Sector # 15; Uttara Dhaka', 'Active', '0000-00-00', '2019-04-27 07:17:51', 'SSC - Uttara High School and College\r\nHSC - Uttara High School and College\r\nGraduation - IUBAT\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`first_name`, `last_name`, `id`) VALUES
('Muntaaha', 'Rahman', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `Task_id` varchar(250) NOT NULL,
  `Task_Name` longtext NOT NULL,
  `Order_Id` varchar(20) NOT NULL,
  `worklist` varchar(250) NOT NULL,
  `Category` text NOT NULL,
  `Employee_Name` varchar(250) NOT NULL,
  `Employee_ID` int(8) NOT NULL,
  `Assignment_Date_Employee` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Submission_Date_Employee` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Submitting_Time` timestamp NULL DEFAULT NULL,
  `Discussion` longtext NOT NULL,
  `Rating` int(3) NOT NULL,
  `Task_Status` varchar(50) NOT NULL,
  `Assigned_By` varchar(250) NOT NULL,
  `unread_msg_num` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `Task_id`, `Task_Name`, `Order_Id`, `worklist`, `Category`, `Employee_Name`, `Employee_ID`, `Assignment_Date_Employee`, `Submission_Date_Employee`, `Submitting_Time`, `Discussion`, `Rating`, `Task_Status`, `Assigned_By`, `unread_msg_num`) VALUES
(15, '', 'BarPatrol', 'XRCIH-02', 'Complete all the sliders, Complete Home Page, Complete Menu, Complete Contact page, Complete Shop Page, Add Product Page', 'Wordpress', 'Kaium Khan Piyash', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-23 07:00:00', 'Complete this work at first ', 0, 'Cancelled', 'Prince', 'n'),
(16, '', 'WoodHouse ', 'XHGYT-09', 'Complete all the Banners, Complete Home Page, Complete GRID OPTION , Complete Contact page, Complete Shop Page, Add Product Page', 'Wordpress', 'Kaium Khan Piyash\r\n', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-20 07:00:00', 'Complete this work at Later', 0, 'Cancelled', 'Prince', 'n'),
(17, '', 'Allison ', 'XCMTG-09', 'Complete all the Animations, Complete Home Page, Complete Contact page, Complete About Page, ', 'Wordpress', 'Kaium Khan Piyash\r\n', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-20 07:00:00', 'Complete this flawlessly', 3, 'Completed', 'Prince', 'n'),
(18, '', 'CrossRoad Restaurant', 'XRTHG-07', 'Complete Header(Slider & Menu), Complete Home Page, Complete Contact page, Complete About Page', 'Wordpress', 'Kaium Khan Piyash\r\n', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-20 07:00:00', 'Complete this flawlessly', 3, 'Completed', 'Prince', 'n'),
(19, '', 'BarPatrol', 'XRCIH-02', 'Complete the slider of the barpatrol page , Complete the home page', 'Wordpress', 'Muntaaha Rahman', 0, '2019-04-20 04:07:04', '2019-04-20 07:00:00', NULL, 'Your Working Site : https://princechowdhury.com/muntaha/wp-admin\r\nComplete this work by the deadline\r\n', 0, 'Complete', 'Kaium Khan Piyash\r\n', 'y'),
(20, '', 'BarPatrol', 'XRCIH-02', 'Complete the Product page , Complete the Contact page', 'Wordpress', 'Arif Ahmed', 0, '2019-04-20 04:07:04', '2019-04-20 07:00:00', '2019-04-21 07:00:00', 'Your Working Site : https://princechowdhury.com/muntaha/wp-admin\r\n\r\nCreate 2 pages Barpatrol_Contact, barpatrol_product\r\n\r\nComplete this work by the deadline\r\n', 0, 'Completed', 'Kaium Khan Piyash\r\n', 'y'),
(21, '', 'BarPatrol', 'XRCIH-02', 'Design the SHop page dynamically \r\nwhen I add product, all must be in same design', 'Wordpress', 'Tania Akter', 0, '2019-04-20 04:07:04', '2019-04-20 07:00:00', NULL, 'Your Working Site : https://princechowdhury.com/muntaha/wp-admin\r\n\r\nCreate 2 pages Barpatrol_Contact, barpatrol_product\r\n\r\nComplete this work by the deadline\r\n', 0, 'Running', 'Kaium Khan Piyash\r\n', 'n'),
(22, '', 'WoodHouse', 'XHGYT-09', 'Design the SHop page dynamically \r\nwhen I add product, all must be in same design', 'Wordpress', 'Tania Akter', 0, '2019-04-20 04:07:04', '2019-04-20 07:00:00', NULL, 'Your Working Site : https://princechowdhury.com/muntaha/wp-admin\r\n\r\nCreate 2 pages Barpatrol_Contact, barpatrol_product\r\n\r\nComplete this work by the deadline\r\n', 0, 'Running', 'Kaium Khan Piyash\r\n', 'n'),
(23, '', 'WoodHouse ', 'XHGYT-09', 'Complete all the Banners, Complete Home Page, Complete GRID OPTION , Complete Contact page', 'Wordpress', 'Arif Ahmed', 0, '2019-04-20 03:54:53', '2019-04-20 07:00:00', NULL, 'Complete this work at before deadline', 0, 'Running', 'Kaium Khan Piyash\r\n', 'n'),
(24, '', 'CrossRoad Restaurant', 'XRTHG-07', 'Complete the Product page , Complete the Contact page', 'Wordpress', 'Arif Ahmed', 0, '2019-04-27 04:41:26', '2019-04-27 07:00:00', NULL, 'Must Complete', 0, 'Complete', 'Tania Akter', 'y'),
(25, '', 'CrossRoad Restaurant', 'XRTHG-07', 'Complete the Product page , Complete the Contact page', 'Wordpress', 'Siyam Hossain', 0, '2019-04-27 04:42:43', '2019-04-27 07:00:00', NULL, 'Must Complete', 0, 'Running', 'Tania Akter', 'n'),
(26, '', 'Alaxmi_Complex', 'OCGFT-678', 'Complete the slider, complete the home page', 'Wordpress', 'Siyam Hossain', 0, '2019-04-27 05:10:27', '2019-04-27 07:00:00', NULL, 'Try to Comeplete it by time \r\n', 0, 'Running', 'Prince', 'n'),
(27, '', 'Allison ', 'XCMTG-09', 'Complete all the Animations, Complete Home Page, ', 'Wordpress', 'Tania Akter\r\n', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', NULL, 'Complete this flawlessly', 0, 'Completed', 'Kaium Khan Piyash', 'n'),
(28, '', 'WoodHouse', 'XHGYT-09', 'Design the SHop page dynamically \r\nwhen I add product, all must be in same design', 'Wordpress', 'Robi Neowaz', 0, '2019-04-20 04:07:04', '2019-04-20 07:00:00', NULL, 'Your Working Site : https://princechowdhury.com/muntaha/wp-admin\r\n\r\nCreate 2 pages Barpatrol_Contact, barpatrol_product\r\n\r\nComplete this work by the deadline\r\n', 0, 'Running', 'Tania Akter', 'y'),
(29, '', 'CrossRoad Restaurant', 'XRTHG-07', 'Complete the Product page , Complete the Contact page, Complete the Shop Page', 'Wordpress', 'Robi Neowaz', 0, '2019-04-27 04:41:26', '2019-04-27 07:00:00', '2019-04-23 07:00:00', 'Must Complete', 0, 'Complete', 'Tania Akter', 'y'),
(30, '', 'BarPatrol', 'XRCIH-02', 'Complete Contact page, Complete Shop Page, Add Product Page', 'Wordpress', 'Robi Neowaz', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-23 07:00:00', 'Complete this work at first ', 0, 'Completed', 'Prince', 'n'),
(31, '', 'BarPatrol', 'XRCIH-02', 'Complete all the sliders, Complete Home Page, Complete Menu, Complete Contact page, Complete Shop Page, Add Product Page', 'Wordpress', 'Muntaaha Rahman', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-23 07:00:00', 'Complete this work at first ', 0, 'Completed', 'Prince', 'n'),
(32, '', 'WoodHouse ', 'XHGYT-09', 'Complete all the Banners, Complete Home Page, Complete GRID OPTION , Complete Contact page, Complete Shop Page, Add Product Page', 'Wordpress', 'Muntaaha Rahman', 0, '2019-04-20 03:54:53', '2019-04-21 07:00:00', '2019-04-25 07:00:00', 'Complete this work at Later', 0, 'Running', 'Prince', 'n'),
(33, '', 'Take OUT', 'OKJHY-78', 'complete the home page, Complete the slider', 'Wordpress', 'Muntaaha Rahman', 0, '2019-04-27 08:53:44', '2019-04-28 07:00:00', NULL, 'Task must be done', 0, 'Running', 'Prince', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `work_category`
--

CREATE TABLE `work_category` (
  `work_category_id` int(11) NOT NULL,
  `work_category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `work_category`
--

INSERT INTO `work_category` (`work_category_id`, `work_category`) VALUES
(1, 'Wordpress'),
(2, 'JQuery Animation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`block_id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `employee_last_activity`
--
ALTER TABLE `employee_last_activity`
  ADD PRIMARY KEY (`Employee_last_activity_id`);

--
-- Indexes for table `employee_registration`
--
ALTER TABLE `employee_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_category`
--
ALTER TABLE `work_category`
  ADD PRIMARY KEY (`work_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `block`
--
ALTER TABLE `block`
  MODIFY `block_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `complaint_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee_last_activity`
--
ALTER TABLE `employee_last_activity`
  MODIFY `Employee_last_activity_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_registration`
--
ALTER TABLE `employee_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `work_category`
--
ALTER TABLE `work_category`
  MODIFY `work_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
