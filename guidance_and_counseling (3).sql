-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2022 at 04:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidance_and_counseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) DEFAULT 0,
  `id_number` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `app_status` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `app_id`, `reason`, `status`, `date_accomplished`, `updated_at`, `id_number`) VALUES
(81, 74, 'bully', 'Completed', '2022-12-16', '2022-12-16 07:21:56', 2000245727),
(82, 74, 'bully', 'Completed', '2022-12-16', '2022-12-16 07:21:56', 2000245727);

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `ID` int(10) NOT NULL,
  `ARTICLECODE` varchar(15) NOT NULL,
  `TITLE` varchar(100) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `PICTURE` text NOT NULL,
  `DURATION` varchar(15) NOT NULL,
  `ART_STATUS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `ARTICLECODE`, `TITLE`, `DESCRIPTION`, `PICTURE`, `DURATION`, `ART_STATUS`) VALUES
(2, '221128-160540-4', 'Growth Mindset', 'There’s a fine line between instilling discipline through toughening acts and a fear of failure by punishing infractions. Unfortunately, most people can attest that this line has been blurred and that the notion of failure, while common, is often viewed not just as a negative but something to be ashamed of. In some cultures, around the world, it is treated as an extremely terrible thing. Children are taught to not just fear failure, but actively avoid it.', 'uploads/dec1.png', 'December', 'Active'),
(3, '221128-222651-4', 'Diversity, Equity, Inclusion', 'Diversity exists when you go above and beyond being aware of differences or accepting differences to the point of actively including people who are different from you. Diversity is learning from our differences to make the whole community a better place. It is a combination of our differences that shape our view of the world, our perspective and our approach.', 'uploads/dec2.png', 'December', 'Active'),
(4, '221129-144937-9', 'Self Care', 'have a significant impact on how we view ourselves.  Sometimes we look in the mirror and don’t like who we see.  It is important to remember that our reflection is two dimensional, we do not see the whole picture of ourselves, yet we are the ones who judge most harshly. The following article provides 3 strategies to help you strengthen your self-esteem.', 'uploads/dec3.jpg', 'December', 'Active'),
(6, '221214-145526-1', 'article a', 'abecd', 'uploads/article-1.png', 'December', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `section` varchar(150) NOT NULL,
  `app_id` int(20) NOT NULL,
  `session_date` date NOT NULL,
  `feedback_date` date NOT NULL,
  `action_taken` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_name`, `program`, `section`, `app_id`, `session_date`, `feedback_date`, `action_taken`, `remarks`, `updated_at`) VALUES
(1, 'hannah marie perez', 'BSIT', '3', 1, '2022-10-18', '2022-10-18', 'Feedback Action Taken1', 'Feedback Remarks1', '2022-10-18 15:06:29'),
(2, 'Josephine Bracken', 'BSIT', '4', 2, '2022-10-20', '2022-10-18', 'Feedback Action Taken2', 'Feedback Remarks2', '2022-10-18 15:08:51'),
(3, 'juan dela cruz', 'BSIT', '4', 3, '2022-10-21', '2022-10-18', 'Feedback Action Taken3', 'Feedback Remarks3', '2022-10-18 15:26:21'),
(4, 'jessica bernardo', 'BSIT', '4', 4, '2022-10-19', '2022-10-18', 'Feedback Action Taken4', 'Feedback Remarks4', '2022-10-18 15:55:06');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `ID` int(10) NOT NULL,
  `SY` varchar(30) NOT NULL,
  `SEM` varchar(30) NOT NULL,
  `QUARTER` varchar(30) NOT NULL,
  `FIRST` varchar(60) NOT NULL,
  `MIDDLE` varchar(60) NOT NULL,
  `LAST` varchar(60) NOT NULL,
  `STUDNUMBER` int(10) NOT NULL,
  `YEARLEVEL` varchar(30) NOT NULL,
  `PROGRAMSECTION` varchar(30) NOT NULL,
  `NICKNAME` varchar(60) NOT NULL,
  `NATIONALITY` varchar(60) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `CIVILSTATUS` varchar(30) NOT NULL,
  `RELIGION` varchar(60) NOT NULL,
  `DOB` varchar(30) NOT NULL,
  `MOBILE` varchar(30) NOT NULL,
  `EMAIL1` varchar(60) NOT NULL,
  `EMAIL2` varchar(60) NOT NULL,
  `HOMENUMBER` varchar(30) NOT NULL,
  `PRESENT` text NOT NULL,
  `PERMANENT` text NOT NULL,
  `PROVINCIAL` text NOT NULL,
  `MARRIED_FIRST` varchar(60) NOT NULL,
  `MARRIED_LAST` varchar(60) NOT NULL,
  `SPOUSE_AGE` int(3) NOT NULL,
  `WORK_STATUS` varchar(10) NOT NULL,
  `OCCUPATION` varchar(200) NOT NULL,
  `MARRIED_CONTACT` varchar(30) NOT NULL,
  `GUARDIAN_STATUS` varchar(30) NOT NULL,
  `GUARDIAN_NAME` varchar(100) NOT NULL,
  `GUARDIAN_ADDRESS` text NOT NULL,
  `GUARDIAN_CONTACT` varchar(30) NOT NULL,
  `GUARDIAN_EMERGENCY` varchar(30) NOT NULL,
  `GUARDIAN_OTHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_FATHERNAME` varchar(100) NOT NULL,
  `GUARDIAN_FATHERAGE` int(3) NOT NULL,
  `GUARDIAN_FATHERDOB` varchar(30) NOT NULL,
  `GUARDIAN_FATHERNATIONALITY` varchar(60) NOT NULL,
  `GUARDIAN_FATHERRELIGION` varchar(100) NOT NULL,
  `GUARDIAN_FATHEREDUCATIONAL` varchar(100) NOT NULL,
  `GUARDIAN_FATHEROCCUPATION` varchar(100) NOT NULL,
  `GUARDIAN_FATHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_FATHERCOMPANY` varchar(100) NOT NULL,
  `GUARDIAN_FATHERINCOME` double(10,2) NOT NULL,
  `GUARDIAN_MOTHERNAME` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERAGE` int(3) NOT NULL,
  `GUARDIAN_MOTHERDOB` varchar(30) NOT NULL,
  `GUARDIAN_MOTHERNATIONALITY` varchar(60) NOT NULL,
  `GUARDIAN_MOTHERRELIGION` varchar(100) NOT NULL,
  `GUARDIAN_MOTHEREDUCATIONAL` varchar(100) NOT NULL,
  `GUARDIAN_MOTHEROCCUPATION` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERCONTACT` varchar(30) NOT NULL,
  `GUARDIAN_MOTHERCOMPANY` varchar(100) NOT NULL,
  `GUARDIAN_MOTHERINCOME` double(10,2) NOT NULL,
  `SO1_NAME` varchar(100) NOT NULL,
  `SO1_AGE` int(3) NOT NULL,
  `SO1_GENDER` varchar(15) NOT NULL,
  `SO1_PROGOCCUP` varchar(100) NOT NULL,
  `SO1_SCHCOMP` varchar(100) NOT NULL,
  `SO2_NAME` varchar(100) NOT NULL,
  `SO2_AGE` int(3) NOT NULL,
  `SO2_GENDER` varchar(15) NOT NULL,
  `SO2_PROGOCCUP` varchar(100) NOT NULL,
  `SO2_SCHCOMP` varchar(100) NOT NULL,
  `SO3_NAME` varchar(100) NOT NULL,
  `SO3_AGE` int(3) NOT NULL,
  `SO3_GENDER` varchar(15) NOT NULL,
  `SO3_PROGOCCUP` varchar(100) NOT NULL,
  `SO3_SCHCOMP` varchar(100) NOT NULL,
  `SPORTS` varchar(100) NOT NULL,
  `HOBBIES` varchar(100) NOT NULL,
  `TALENTS` varchar(100) NOT NULL,
  `SOCIO` varchar(100) NOT NULL,
  `SCHOOL_ORGANIZATION` text NOT NULL,
  `WE1_COMPNAME` varchar(100) NOT NULL,
  `WE1_POSITION` varchar(100) NOT NULL,
  `WE1_DURATION` varchar(100) NOT NULL,
  `WE1_JOB` text NOT NULL,
  `WE2_COMPNAME` varchar(100) NOT NULL,
  `WE2_POSITION` varchar(100) NOT NULL,
  `WE2_DURATION` varchar(100) NOT NULL,
  `WE2_JOB` text NOT NULL,
  `WE3_COMPNAME` varchar(100) NOT NULL,
  `WE3_POSITION` varchar(100) NOT NULL,
  `WE3_DURATION` varchar(100) NOT NULL,
  `WE3_JOB` text NOT NULL,
  `DATE_INCREATED` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `SY`, `SEM`, `QUARTER`, `FIRST`, `MIDDLE`, `LAST`, `STUDNUMBER`, `YEARLEVEL`, `PROGRAMSECTION`, `NICKNAME`, `NATIONALITY`, `GENDER`, `CIVILSTATUS`, `RELIGION`, `DOB`, `MOBILE`, `EMAIL1`, `EMAIL2`, `HOMENUMBER`, `PRESENT`, `PERMANENT`, `PROVINCIAL`, `MARRIED_FIRST`, `MARRIED_LAST`, `SPOUSE_AGE`, `WORK_STATUS`, `OCCUPATION`, `MARRIED_CONTACT`, `GUARDIAN_STATUS`, `GUARDIAN_NAME`, `GUARDIAN_ADDRESS`, `GUARDIAN_CONTACT`, `GUARDIAN_EMERGENCY`, `GUARDIAN_OTHERCONTACT`, `GUARDIAN_FATHERNAME`, `GUARDIAN_FATHERAGE`, `GUARDIAN_FATHERDOB`, `GUARDIAN_FATHERNATIONALITY`, `GUARDIAN_FATHERRELIGION`, `GUARDIAN_FATHEREDUCATIONAL`, `GUARDIAN_FATHEROCCUPATION`, `GUARDIAN_FATHERCONTACT`, `GUARDIAN_FATHERCOMPANY`, `GUARDIAN_FATHERINCOME`, `GUARDIAN_MOTHERNAME`, `GUARDIAN_MOTHERAGE`, `GUARDIAN_MOTHERDOB`, `GUARDIAN_MOTHERNATIONALITY`, `GUARDIAN_MOTHERRELIGION`, `GUARDIAN_MOTHEREDUCATIONAL`, `GUARDIAN_MOTHEROCCUPATION`, `GUARDIAN_MOTHERCONTACT`, `GUARDIAN_MOTHERCOMPANY`, `GUARDIAN_MOTHERINCOME`, `SO1_NAME`, `SO1_AGE`, `SO1_GENDER`, `SO1_PROGOCCUP`, `SO1_SCHCOMP`, `SO2_NAME`, `SO2_AGE`, `SO2_GENDER`, `SO2_PROGOCCUP`, `SO2_SCHCOMP`, `SO3_NAME`, `SO3_AGE`, `SO3_GENDER`, `SO3_PROGOCCUP`, `SO3_SCHCOMP`, `SPORTS`, `HOBBIES`, `TALENTS`, `SOCIO`, `SCHOOL_ORGANIZATION`, `WE1_COMPNAME`, `WE1_POSITION`, `WE1_DURATION`, `WE1_JOB`, `WE2_COMPNAME`, `WE2_POSITION`, `WE2_DURATION`, `WE2_JOB`, `WE3_COMPNAME`, `WE3_POSITION`, `WE3_DURATION`, `WE3_JOB`, `DATE_INCREATED`) VALUES
(20, '2022', '1st semester', '', 'Rowella', 'Mallari', 'Bangeles', 2000245727, '', 'HUMMS', 'row', 'FILIPINO', 'Female', 'SINGLE', 'Roman Catholic', '2022-12-14', '09121312331', 'bangeles.245727@angeles.sti.edu.ph', '', '', '', '', '', '', '', 0, 'No', '', '', 'Married', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-16'),
(21, '2022', '1st semester', '', 'Marqueyza', 'Butic', 'Acub', 2000232823, '', 'MAWD', 'abby', 'FILIPINO', '', 'SINGLE', 'Roman Catholic', '2022-12-07', '09217112098', 'acub.232823@angeles.sti.edu.ph', '', '', '', '', '', '', '', 0, 'No', '', '', 'Married', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(50) NOT NULL,
  `user` varchar(300) NOT NULL,
  `user_id` bigint(100) NOT NULL,
  `action_made` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user`, `user_id`, `action_made`, `date_created`) VALUES
(1, 'Admin', 1001, 'Logged in the system', '2022-12-12 07:17:06'),
(2, 'Admin', 1001, 'Logged out', '2022-12-12 07:17:30'),
(3, 'Staff', 2000022222, 'Logged in the system', '2022-12-12 07:17:37'),
(4, 'Staff', 2000022222, 'Logged out', '2022-12-12 07:18:14'),
(5, 'Admin', 1001, 'Logged in the system', '2022-12-12 07:18:19'),
(6, 'Admin', 1001, 'Logged in the system', '2022-12-12 07:24:09'),
(7, 'Admin', 1001, 'Logged out', '2022-12-12 07:24:27'),
(8, 'Student', 2000011111, 'Logged in the system', '2022-12-12 07:24:33'),
(9, 'Student', 2000011111, 'Logged out', '2022-12-12 07:25:53'),
(10, 'Admin', 1001, 'Logged in the system', '2022-12-12 07:25:59'),
(11, 'Admin', 1001, 'Logged out', '2022-12-12 07:27:11'),
(12, 'Student', 2000245727, 'Logged in the system', '2022-12-12 07:27:28'),
(13, 'Student', 2000245727, 'Logged out', '2022-12-12 07:32:15'),
(14, 'Student', 2000011111, 'Logged in the system', '2022-12-12 07:32:24'),
(15, 'Student', 2000011111, 'Logged out', '2022-12-12 07:32:30'),
(16, 'Student', 2000011111, 'Logged in the system', '2022-12-12 08:17:17'),
(17, 'Student', 2000011111, 'Logged out', '2022-12-12 08:18:26'),
(18, 'Admin', 1001, 'Logged in the system', '2022-12-12 08:18:34'),
(19, 'Admin', 1001, 'Logged out', '2022-12-12 09:03:00'),
(20, 'Student', 2000011111, 'Logged in the system', '2022-12-12 09:03:06'),
(21, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:03:25'),
(22, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:04:23'),
(23, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:05:13'),
(24, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:34:54'),
(25, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:36:02'),
(26, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:37:53'),
(27, 'Student', 2000011111, 'Logged out', '2022-12-12 09:40:01'),
(28, 'Staff', 2000022222, 'Logged in the system', '2022-12-12 09:40:06'),
(29, 'Staff', 2000022222, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-12 09:40:25'),
(30, 'Staff', 2000022222, 'Logged out', '2022-12-12 09:44:43'),
(31, 'Admin', 1001, 'Logged in the system', '2022-12-12 09:44:48'),
(32, 'Admin', 1001, 'Logged out', '2022-12-12 10:03:32'),
(33, 'Admin', 1001, 'Logged in the system', '2022-12-12 10:03:46'),
(34, 'Admin', 1001, 'Logged out', '2022-12-12 10:07:06'),
(35, 'Admin', 1001, 'Logged in the system', '2022-12-12 10:10:36'),
(36, 'Admin', 1001, 'Logged in the system', '2022-12-12 12:38:47'),
(37, 'Admin', 1001, 'Logged out', '2022-12-12 12:40:18'),
(38, 'Student', 2000011111, 'Logged in the system', '2022-12-12 12:40:27'),
(39, 'Student', 2000011111, 'Logged out', '2022-12-12 13:36:20'),
(40, 'Admin', 1001, 'Logged in the system', '2022-12-12 13:36:27'),
(41, 'Admin', 1001, 'Logged in the system', '2022-12-12 17:26:09'),
(42, 'Admin', 1001, 'Logged out', '2022-12-12 17:50:06'),
(43, 'Student', 2000011111, 'Logged in the system', '2022-12-12 17:50:13'),
(44, 'Admin', 1001, 'Logged in the system', '2022-12-13 04:02:04'),
(45, 'Admin', 1001, 'Logged out', '2022-12-13 04:02:34'),
(46, 'Student', 2000011111, 'Logged in the system', '2022-12-13 04:02:41'),
(47, 'Student', 2000011111, 'Logged out', '2022-12-13 04:02:52'),
(48, 'Admin', 1001, 'Logged in the system', '2022-12-13 06:30:51'),
(49, 'Admin', 1001, 'Logged out', '2022-12-13 07:40:54'),
(50, 'Admin', 1001, 'Logged in the system', '2022-12-13 07:40:58'),
(51, 'Admin', 1001, 'Logged in the system', '2022-12-13 09:57:24'),
(52, 'Admin', 1001, 'Logged out', '2022-12-13 10:07:54'),
(53, 'Admin', 1001, 'Logged in the system', '2022-12-13 10:08:06'),
(54, 'Admin', 1001, 'Logged out', '2022-12-13 10:08:17'),
(55, 'Admin', 1001, 'Logged in the system', '2022-12-13 10:08:34'),
(56, 'Admin', 1001, 'Logged out', '2022-12-13 10:09:14'),
(57, 'Student', 2000011111, 'Logged in the system', '2022-12-13 10:09:30'),
(58, 'Student', 2000011111, 'Logged out', '2022-12-13 10:09:35'),
(59, 'Student', 2000266053, 'Logged in the system', '2022-12-13 10:11:09'),
(60, 'Student', 2000266053, 'Logged out', '2022-12-13 10:17:41'),
(61, 'Admin', 1001, 'Logged in the system', '2022-12-13 10:17:50'),
(62, 'Admin', 1001, 'Logged out', '2022-12-13 10:21:18'),
(63, 'Student', 2000011111, 'Logged in the system', '2022-12-13 10:21:27'),
(64, 'Student', 2000011111, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-13 10:28:38'),
(65, 'Student', 2000011111, 'Logged out', '2022-12-13 10:28:46'),
(66, 'Admin', 1001, 'Logged in the system', '2022-12-13 10:28:52'),
(67, 'Admin', 1001, 'Logged out', '2022-12-13 10:48:47'),
(68, 'Admin', 1001, 'Logged out', '2022-12-13 10:49:18'),
(69, 'Admin', 1001, 'Logged in the system', '2022-12-13 12:52:21'),
(70, 'Student', 2000011111, 'Logged in the system', '2022-12-13 14:48:23'),
(71, 'Student', 2000011111, 'Logged out', '2022-12-13 16:06:35'),
(72, 'Student', 2000011111, 'Logged in the system', '2022-12-13 16:06:39'),
(73, '', 2000011111, 'Individual Inventory Added by [ ID = 2000011111] student test', '2022-12-13 16:07:22'),
(74, '', 2000011111, 'Individual Inventory Added by [ ID = 2000011111] student test', '2022-12-13 16:08:57'),
(75, 'Student', 2000011111, 'Logged out', '2022-12-13 16:09:09'),
(76, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:10:01'),
(77, 'Admin', 1001, 'Logged out', '2022-12-13 16:11:42'),
(78, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:11:51'),
(79, 'Admin', 1001, 'Logged out', '2022-12-13 16:11:54'),
(80, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:12:36'),
(81, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:13:59'),
(82, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:14:12'),
(83, '', 2000245727, 'Individual Inventory Added by [ ID = 2000245727] ROWELLA BANGELES', '2022-12-13 16:15:12'),
(84, 'Admin', 1001, 'Logged out', '2022-12-13 16:15:19'),
(85, 'Admin', 1001, 'Logged in the system', '2022-12-13 16:15:24'),
(86, 'Admin', 1001, 'Logged out', '2022-12-13 16:20:50'),
(87, 'Admin', 1001, 'Logged out', '2022-12-14 07:08:59'),
(88, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:12:31'),
(89, 'Admin', 1001, 'Logged out', '2022-12-14 07:19:25'),
(90, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:19:41'),
(91, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:20:39'),
(92, ' Admin', 1001, 'Uploaded a student list batch file to the system', '2022-12-14 07:27:18'),
(93, ' Admin', 1001, 'Added a new offense on [ ID = 2000245727] ROWELLA BANGELES to the offense list', '2022-12-14 14:54:07'),
(94, 'Admin', 1001, 'Logged out', '2022-12-14 07:56:10'),
(95, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:56:44'),
(96, 'Admin', 1001, 'Logged out', '2022-12-14 07:57:27'),
(97, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:58:06'),
(98, 'Admin', 1001, 'Logged out', '2022-12-14 07:59:44'),
(99, 'Admin', 1001, 'Logged in the system', '2022-12-14 07:59:56'),
(100, '', 2000090161, 'Individual Inventory Added by [ ID = 2000090161] ervin doria', '2022-12-14 08:00:26'),
(101, 'Admin', 1001, 'Logged out', '2022-12-14 08:01:04'),
(102, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:01:35'),
(103, 'Admin', 1001, 'Logged out', '2022-12-14 08:01:49'),
(104, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:03:34'),
(105, '', 2000245727, 'Individual Inventory Added by [ ID = 2000245727] ROWELLA BANGELES', '2022-12-14 08:04:47'),
(106, 'Admin', 1001, 'Logged out', '2022-12-14 08:10:00'),
(107, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:10:13'),
(108, 'Admin', 1001, 'Logged out', '2022-12-14 08:10:42'),
(109, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:20:03'),
(110, 'Admin', 1001, 'Logged out', '2022-12-14 08:35:57'),
(111, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:37:49'),
(112, 'Admin', 1001, 'Logged out', '2022-12-14 08:38:11'),
(113, 'Admin', 1001, 'Logged in the system', '2022-12-14 08:38:30'),
(114, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 15:57:42'),
(115, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 16:05:52'),
(116, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 16:07:15'),
(117, ' Admin', 1001, 'Added a new offense on [ ID = 2000090161] ervin doria to the offense list', '2022-12-14 16:10:17'),
(118, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 16:10:47'),
(119, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 16:11:17'),
(120, ' Admin', 1001, 'Added a new offense on [ ID = 2000011111] student test to the offense list', '2022-12-14 16:12:43'),
(121, 'Admin', 1001, 'Logged out', '2022-12-14 09:12:57'),
(122, 'Admin', 1001, 'Logged in the system', '2022-12-14 09:13:05'),
(123, 'Admin', 1001, 'Logged out', '2022-12-14 09:18:27'),
(124, 'Admin', 1001, 'Logged in the system', '2022-12-14 09:19:21'),
(125, 'Admin', 1001, 'Logged out', '2022-12-14 10:09:34'),
(126, 'Admin', 1001, 'Logged in the system', '2022-12-14 10:09:42'),
(127, 'Student', 1001, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-14 10:10:15'),
(128, 'Admin', 1001, 'Logged out', '2022-12-14 10:10:24'),
(129, 'Admin', 1001, 'Logged in the system', '2022-12-14 10:10:30'),
(130, 'Admin', 1001, 'Logged in the system', '2022-12-14 10:17:19'),
(131, 'Admin', 1001, 'Logged out', '2022-12-14 10:42:18'),
(132, 'Admin', 1001, 'Logged in the system', '2022-12-14 10:42:38'),
(133, 'Admin', 1001, 'Logged out', '2022-12-14 10:43:52'),
(134, 'Admin', 1001, 'Logged in the system', '2022-12-14 10:44:04'),
(135, 'Admin', 1001, 'Logged in the system', '2022-12-14 11:13:51'),
(136, 'Admin', 1001, 'Logged out', '2022-12-14 11:32:26'),
(137, 'Admin', 1001, 'Logged in the system', '2022-12-14 11:32:36'),
(138, '', 2000090161, 'Individual Inventory Added by [ ID = 2000090161] ervin doria', '2022-12-14 11:33:33'),
(139, 'Student', 1001, 'Added a new referral [ ID = 196]   to the referral list', '2022-12-14 11:34:05'),
(140, 'Admin', 1001, 'Logged out', '2022-12-14 11:34:27'),
(141, 'Admin', 1001, 'Logged in the system', '2022-12-14 11:34:38'),
(142, 'Admin', 1001, 'Logged out', '2022-12-14 11:37:20'),
(143, 'Admin', 1001, 'Logged in the system', '2022-12-14 11:37:31'),
(144, 'Admin', 1001, 'Logged out', '2022-12-14 11:37:50'),
(145, 'Admin', 1001, 'Logged in the system', '2022-12-14 11:38:07'),
(146, 'Admin', 1001, 'Logged out', '2022-12-14 13:21:54'),
(147, 'Admin', 1001, 'Logged in the system', '2022-12-14 13:30:01'),
(148, 'Admin', 1001, 'Logged out', '2022-12-14 16:54:50'),
(149, 'Admin', 1001, 'Logged in the system', '2022-12-14 16:55:00'),
(150, 'Student', 1001, 'Added a new referral [ ID = 253]   to the referral list', '2022-12-14 16:55:32'),
(151, 'Admin', 1001, 'Logged out', '2022-12-14 16:55:38'),
(152, 'Admin', 1001, 'Logged in the system', '2022-12-14 17:05:17'),
(153, 'Admin', 1001, 'Logged out', '2022-12-14 17:37:07'),
(154, 'Admin', 1001, 'Logged in the system', '2022-12-14 17:37:17'),
(155, 'Student', 1001, 'Added a new referral [ ID = 256]   to the referral list', '2022-12-14 17:37:39'),
(156, 'Admin', 1001, 'Logged out', '2022-12-14 17:37:52'),
(157, 'Admin', 1001, 'Logged in the system', '2022-12-14 17:37:59'),
(158, '', 0, 'Logged in the system', '2022-12-15 06:02:41'),
(159, 'Student', 0, 'Added a new referral [ ID = 256]   to the referral list', '2022-12-15 06:03:21'),
(160, 'Student', 0, 'Added a new referral [ ID = 250]   to the referral list', '2022-12-15 06:03:47'),
(161, '', 0, 'Logged out', '2022-12-15 06:04:12'),
(162, 'Admin', 1001, 'Logged in the system', '2022-12-15 06:04:22'),
(163, 'Admin', 1001, 'Logged out', '2022-12-15 06:40:32'),
(164, 'Admin', 1001, 'Logged in the system', '2022-12-15 06:40:37'),
(165, 'Admin', 1001, 'Logged out', '2022-12-15 07:16:16'),
(166, 'Admin', 1001, 'Logged in the system', '2022-12-15 07:16:24'),
(167, 'Student', 1001, 'Added a new referral [ ID = 254]   to the referral list', '2022-12-15 07:17:10'),
(168, 'Admin', 1001, 'Logged out', '2022-12-15 07:17:25'),
(169, 'Admin', 1001, 'Logged in the system', '2022-12-15 07:17:35'),
(170, 'Admin', 1001, 'Logged in the system', '2022-12-15 07:27:24'),
(171, 'Admin', 1001, 'Logged out', '2022-12-15 09:18:58'),
(172, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:19:08'),
(173, 'Student', 1001, 'Added a new referral [ ID = 250]   to the referral list', '2022-12-15 09:20:39'),
(174, 'Admin', 1001, 'Logged out', '2022-12-15 09:20:43'),
(175, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:21:05'),
(176, 'Admin', 1001, 'Logged out', '2022-12-15 09:23:34'),
(177, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:23:43'),
(178, 'Student', 1001, 'Added a new referral [ ID = 250]   to the referral list', '2022-12-15 09:24:16'),
(179, 'Admin', 1001, 'Logged out', '2022-12-15 09:24:21'),
(180, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:24:28'),
(181, 'Admin', 1001, 'Logged out', '2022-12-15 09:29:41'),
(182, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:29:48'),
(183, 'Student', 1001, 'Added a new referral [ ID = 197]   to the referral list', '2022-12-15 09:30:36'),
(184, 'Admin', 1001, 'Logged out', '2022-12-15 09:30:39'),
(185, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:30:46'),
(186, 'Admin', 1001, 'Logged out', '2022-12-15 09:34:40'),
(187, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:34:50'),
(188, 'Student', 1001, 'Added a new referral [ ID = 262]   to the referral list', '2022-12-15 09:35:08'),
(189, 'Student', 1001, 'Added a new referral [ ID = 197]   to the referral list', '2022-12-15 09:35:29'),
(190, 'Admin', 1001, 'Logged out', '2022-12-15 09:35:37'),
(191, 'Admin', 1001, 'Logged in the system', '2022-12-15 09:35:42'),
(192, 'Admin', 1001, 'Logged in the system', '2022-12-15 11:51:52'),
(193, ' Admin', 1001, 'Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list', '2022-12-15 11:56:51'),
(194, ' Admin', 1001, 'Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list', '2022-12-15 11:56:55'),
(195, ' Admin', 1001, 'Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list', '2022-12-15 11:57:16'),
(196, ' Admin', 1001, 'Deleted the staff [ ID = 131311] Abigail Nazal in the staff list', '2022-12-15 11:57:20'),
(197, ' Admin', 1001, 'Deleted the staff [ ID = 2000022222] staff test in the staff list', '2022-12-15 11:57:24'),
(198, ' Admin', 1001, 'Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list', '2022-12-15 11:57:28'),
(199, ' Admin', 1001, 'Deleted the staff [ ID = 2000257868] CHRIS BENNAN in the staff list', '2022-12-15 11:57:50'),
(200, ' Admin', 1001, 'Deleted the staff [ ID = 2000251944] KATRINA KEATON in the staff list', '2022-12-15 11:57:54'),
(201, 'Admin', 1001, 'Logged out', '2022-12-15 11:59:09'),
(202, 'Guidance', 2000010001, 'Logged in the system', '2022-12-15 12:08:54'),
(203, ' Admin', 1001, 'Uploaded a student list batch file to the system', '2022-12-15 12:15:52'),
(204, ' Admin', 1001, 'Added a new student [ ID = 2000011111] ABIGAIL NAZAL to the students list', '2022-12-15 12:16:33'),
(205, ' Admin', 1001, 'Deleted the student [ ID = 2000011111] ABIGAIL NAZAL in the students list', '2022-12-15 12:17:01'),
(206, ' Admin', 1001, 'Added a new student [ ID = 21312421412123] Abigail Nazal to the students list', '2022-12-15 12:20:05'),
(207, ' Guidance Counselor', 1001, 'Uploaded a staff list batch file to the system', '2022-12-15 12:49:34'),
(208, ' Guidance Counselor', 1001, 'Uploaded a student list batch file to the system', '2022-12-15 13:05:03'),
(209, ' Admin', 1001, 'Deleted the student [ ID = 2000232816] Rina Elhym Acub in the students list', '2022-12-15 13:06:09'),
(210, ' Guidance Counselor', 1001, 'Uploaded a staff list batch file to the system', '2022-12-15 13:06:26'),
(211, ' Admin', 1001, 'Added a new student [ ID = 2000092923] Abigail Nazal to the students list', '2022-12-15 13:18:44'),
(212, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-15 20:20:13'),
(213, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-15 20:20:13'),
(214, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-15 20:20:21'),
(215, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-15 20:20:21'),
(216, ' Admin', 1001, 'Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list', '2022-12-15 20:33:32'),
(217, ' Admin', 1001, 'Updated the details of student [ ID = 2000092923] Abigail Nazal', '2022-12-15 13:53:28'),
(218, 'Guidance', 2000010001, 'Logged out', '2022-12-15 14:08:23'),
(219, 'Guidance', 2000010001, 'Logged in the system', '2022-12-15 14:08:52'),
(220, '', 2000092923, 'Individual Inventory Added by [ ID = 2000092923] Abigail Nazal', '2022-12-15 14:10:49'),
(221, 'Guidance', 1001, 'Logged in the system', '2022-12-15 14:11:45'),
(222, 'Student', 2000010001, 'Added a new referral [ ID = 324]   to the referral list', '2022-12-15 14:12:30'),
(223, 'Guidance', 2000010001, 'Logged out', '2022-12-15 14:24:43'),
(224, 'Guidance', 2000010001, 'Logged in the system', '2022-12-15 14:24:47'),
(225, 'Guidance', 2000010001, 'Logged out', '2022-12-15 14:24:50'),
(226, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 14:25:43'),
(227, 'Staff', 2000257868, 'Logged out', '2022-12-15 14:41:33'),
(228, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 14:41:40'),
(229, 'Staff', 2000257868, 'Logged out', '2022-12-15 14:41:59'),
(230, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 14:45:21'),
(231, 'Staff', 2000257868, 'Logged out', '2022-12-15 14:45:26'),
(232, 'Guidance', 1001, 'Logged in the system', '2022-12-15 14:53:06'),
(233, 'Guidance', 1001, 'Logged out', '2022-12-15 14:54:54'),
(234, 'Guidance', 1001, 'Logged in the system', '2022-12-15 14:54:59'),
(235, 'Guidance', 1001, 'Logged out', '2022-12-15 15:31:00'),
(236, 'Guidance', 1001, 'Logged in the system', '2022-12-15 15:31:12'),
(237, ' Admin', 1001, 'Added a new student [ ID = 20000123456] Jose Rizal to the students list', '2022-12-15 15:45:18'),
(238, 'Guidance', 1001, 'Logged out', '2022-12-15 15:45:27'),
(239, 'Guidance', 1001, 'Logged in the system', '2022-12-15 15:45:54'),
(240, 'Guidance', 1001, 'Logged in the system', '2022-12-15 15:46:13'),
(241, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-15 22:54:57'),
(242, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-15 22:54:57'),
(243, 'Guidance', 1001, 'Logged out', '2022-12-15 16:02:36'),
(244, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:03:08'),
(245, '', 2000245727, 'Individual Inventory Added by [ ID = 2000245727] Rowella Bangeles', '2022-12-15 16:16:40'),
(246, 'Guidance', 1001, 'Logged out', '2022-12-15 16:29:03'),
(247, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:29:08'),
(248, 'Guidance', 1001, 'Logged out', '2022-12-15 16:41:41'),
(249, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:42:10'),
(250, 'Guidance', 1001, 'Logged out', '2022-12-15 16:46:06'),
(251, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:46:10'),
(252, 'Guidance', 1001, 'Logged out', '2022-12-15 16:46:18'),
(253, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 16:46:24'),
(254, 'Staff', 2000257868, 'Logged out', '2022-12-15 16:55:58'),
(255, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:56:02'),
(256, 'Guidance', 1001, 'Logged out', '2022-12-15 16:56:52'),
(257, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:57:02'),
(258, 'Guidance', 1001, 'Logged out', '2022-12-15 16:57:08'),
(259, 'Guidance', 1001, 'Logged in the system', '2022-12-15 16:57:12'),
(260, ' Admin', 1001, 'Added a new staff [ ID = 131311] Abigail Nazal to the staff list', '2022-12-15 17:06:39'),
(261, ' Admin', 1001, 'Deleted the staff [ ID = 131311] Abigail Nazal in the staff list', '2022-12-15 17:06:47'),
(262, 'Guidance', 1001, 'Logged out', '2022-12-15 17:12:29'),
(263, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 17:12:34'),
(264, 'Staff', 2000257868, 'Logged out', '2022-12-15 17:20:48'),
(265, 'Guidance', 1001, 'Logged in the system', '2022-12-15 17:20:53'),
(266, 'Guidance', 1001, 'Logged out', '2022-12-15 17:21:32'),
(267, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 17:21:36'),
(268, 'Staff', 2000257868, 'Logged out', '2022-12-15 17:25:18'),
(269, 'Guidance', 1001, 'Logged in the system', '2022-12-15 17:25:22'),
(270, 'Guidance', 1001, 'Logged out', '2022-12-15 17:25:28'),
(271, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 17:25:32'),
(272, 'Staff', 2000257868, 'Logged out', '2022-12-15 18:33:15'),
(273, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 18:33:18'),
(274, 'Staff', 2000257868, 'Logged out', '2022-12-15 18:34:17'),
(275, 'Guidance', 1001, 'Logged in the system', '2022-12-15 18:34:23'),
(276, ' Admin', 1001, 'Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list', '2022-12-16 01:34:56'),
(277, ' Admin', 1001, 'Added a new offense on [ ID = 2000266053] Jezza Abog to the offense list', '2022-12-16 01:35:38'),
(278, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-16 01:36:19'),
(279, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-16 01:36:19'),
(280, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-16 01:36:24'),
(281, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-16 01:36:24'),
(282, 'Guidance', 1001, 'Logged in the system', '2022-12-15 21:10:23'),
(283, 'Guidance', 1001, 'Logged out', '2022-12-15 21:10:46'),
(284, 'Guidance', 1001, 'Logged in the system', '2022-12-15 21:10:50'),
(285, 'Guidance', 1001, 'Logged out', '2022-12-15 21:11:33'),
(286, 'Guidance', 1001, 'Logged in the system', '2022-12-15 21:14:41'),
(287, 'Guidance', 1001, 'Logged out', '2022-12-15 21:15:09'),
(288, 'Guidance', 1001, 'Logged in the system', '2022-12-15 21:15:15'),
(289, 'Student', 1001, 'Added a new referral [ ID = 322]   to the referral list', '2022-12-15 21:15:40'),
(290, 'Guidance', 1001, 'Logged out', '2022-12-15 21:16:26'),
(291, 'Guidance', 1001, 'Logged in the system', '2022-12-15 21:16:31'),
(292, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-16 04:21:01'),
(293, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-16 04:21:01'),
(294, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-16 04:21:49'),
(295, ' Admin', 1001, 'Error: Attemptedt to update the offense of [ ID = ]  ', '2022-12-16 04:21:49'),
(296, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-16 04:24:03'),
(297, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-16 04:26:38'),
(298, 'Guidance', 1001, 'Logged out', '2022-12-15 21:27:23'),
(299, 'Staff', 2000257868, 'Logged in the system', '2022-12-15 21:27:28'),
(300, 'Staff', 2000257868, 'Logged out', '2022-12-15 21:27:44'),
(301, 'Guidance', 1001, 'Logged in the system', '2022-12-16 00:45:58'),
(302, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:06:45'),
(303, 'Guidance', 1001, 'Logged out', '2022-12-16 01:06:56'),
(304, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:07:01'),
(305, 'Guidance', 1001, 'Logged out', '2022-12-16 01:07:19'),
(306, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:14:28'),
(307, 'Student', 1001, 'Added a new referral [ ID = 322]   to the referral list', '2022-12-16 01:17:35'),
(308, 'Guidance', 1001, 'Logged out', '2022-12-16 01:17:39'),
(309, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:18:04'),
(310, 'Guidance', 1001, 'Logged out', '2022-12-16 01:22:48'),
(311, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:22:56'),
(312, 'Student', 1001, 'Added a new referral [ ID = 329]   to the referral list', '2022-12-16 01:23:22'),
(313, 'Guidance', 1001, 'Logged out', '2022-12-16 01:23:26'),
(314, 'Guidance', 1001, 'Logged in the system', '2022-12-16 01:23:34'),
(315, ' Admin', 1001, 'Uploaded a staff list batch file to the system', '2022-12-16 03:08:18'),
(316, 'Guidance', 1001, 'Logged in the system', '2022-12-16 03:12:12'),
(317, 'Guidance', 1001, 'Logged out', '2022-12-16 03:56:04'),
(318, 'Guidance', 1001, 'Logged in the system', '2022-12-16 03:56:12'),
(319, 'Student', 1001, 'Added a new referral [ ID = 340]   to the referral list', '2022-12-16 04:08:46'),
(320, 'Guidance', 1001, 'Logged out', '2022-12-16 04:08:55'),
(321, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:09:00'),
(322, 'Guidance', 1001, 'Logged out', '2022-12-16 04:10:26'),
(323, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:10:32'),
(324, 'Student', 1001, 'Added a new referral [ ID = 322]   to the referral list', '2022-12-16 04:10:53'),
(325, 'Student', 1001, 'Added a new referral [ ID = 322]   to the referral list', '2022-12-16 04:11:22'),
(326, 'Student', 1001, 'Added a new referral [ ID = 348]   to the referral list', '2022-12-16 04:12:00'),
(327, 'Guidance', 1001, 'Logged out', '2022-12-16 04:16:43'),
(328, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:21:57'),
(329, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:21:59'),
(330, '', 0, 'Logged in the system', '2022-12-16 04:24:10'),
(331, 'Guidance', 1001, 'Logged out', '2022-12-16 04:24:59'),
(332, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:25:07'),
(333, 'Student', 1001, 'Added a new referral [ ID = 320]   to the referral list', '2022-12-16 04:28:28'),
(334, 'Guidance', 1001, 'Logged out', '2022-12-16 04:29:13'),
(335, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:29:19'),
(336, 'Student', 1001, 'Added a new referral [ ID = 320]   to the referral list', '2022-12-16 04:29:45'),
(337, 'Student', 1001, 'Added a new referral [ ID = 320]   to the referral list', '2022-12-16 04:30:31'),
(338, 'Guidance', 1001, 'Logged out', '2022-12-16 04:30:36'),
(339, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:30:41'),
(340, 'Guidance', 1001, 'Logged out', '2022-12-16 04:36:37'),
(341, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:37:00'),
(342, 'Guidance', 1001, 'Logged out', '2022-12-16 04:37:21'),
(343, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:38:52'),
(344, 'Guidance', 1001, 'Logged out', '2022-12-16 04:40:12'),
(345, 'Guidance', 1001, 'Logged in the system', '2022-12-16 04:40:40'),
(346, 'Guidance', 1001, 'Logged in the system', '2022-12-16 07:07:00'),
(347, ' Admin', 1001, 'Uploaded a staff list batch file to the system', '2022-12-16 07:08:57'),
(348, ' Guidance Counselor', 1001, 'Uploaded a student list batch file to the system', '2022-12-16 07:09:31'),
(349, 'Guidance', 1001, 'Logged out', '2022-12-16 07:12:44'),
(350, 'Guidance', 1001, 'Logged in the system', '2022-12-16 07:13:37'),
(351, '', 2000245727, 'Individual Inventory Added by [ ID = 2000245727] Rowella Bangeles', '2022-12-16 07:15:02'),
(352, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-16 07:26:50'),
(353, 'Guidance', 1001, 'Logged out', '2022-12-16 07:48:45'),
(354, 'Staff', 2000257868, 'Logged in the system', '2022-12-16 07:49:22'),
(355, 'Staff', 2000257868, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-16 07:52:11'),
(356, 'Staff', 2000257868, 'Logged out', '2022-12-16 07:52:32'),
(357, 'Guidance', 1001, 'Logged in the system', '2022-12-16 07:52:46'),
(358, 'Guidance', 1001, 'Logged in the system', '2022-12-16 08:10:57'),
(359, '', 2000232823, 'Individual Inventory Added by [ ID = 2000232823] Marqueyza Acub', '2022-12-16 08:11:27'),
(360, 'Guidance', 1001, 'Logged out', '2022-12-16 08:19:32'),
(361, 'Guidance', 1001, 'Logged in the system', '2022-12-16 08:19:58'),
(362, 'Guidance', 1001, 'Logged out', '2022-12-16 08:36:46'),
(363, 'Guidance', 1001, 'Logged in the system', '2022-12-16 08:37:13'),
(364, 'Guidance', 1001, 'Logged out', '2022-12-16 08:37:47');

-- --------------------------------------------------------

--
-- Table structure for table `offense_monitoring`
--

CREATE TABLE `offense_monitoring` (
  `id` int(11) NOT NULL,
  `student_id` varchar(150) NOT NULL,
  `stud_name` varchar(255) NOT NULL,
  `offense_type` varchar(255) NOT NULL,
  `description` varchar(300) NOT NULL,
  `date_created` date NOT NULL,
  `sanction` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offense_monitoring`
--

INSERT INTO `offense_monitoring` (`id`, `student_id`, `stud_name`, `offense_type`, `description`, `date_created`, `sanction`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(34, '2000232823', 'Marqueyza Acub', 'Major Offense A', 'Bullying a student', '2022-12-15', 'Clean toilet for 5 days', '2022-12-16', '2022-12-17', 'Active', '2022-12-15 20:26:38', '2022-12-16 04:27:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_appointment`
--

CREATE TABLE `personal_appointment` (
  `id` int(11) NOT NULL,
  `userid` int(100) NOT NULL DEFAULT 0,
  `timeslot` varchar(255) DEFAULT NULL,
  `timeslot_end` varchar(100) DEFAULT NULL,
  `information` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `app_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `refferals`
--

CREATE TABLE `refferals` (
  `ref_id` int(11) NOT NULL,
  `reffered_user` int(20) NOT NULL,
  `source` varchar(255) NOT NULL,
  `reffered_by` int(20) NOT NULL,
  `reffered_date` date NOT NULL,
  `nature` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `actions` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ref_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refferals`
--

INSERT INTO `refferals` (`ref_id`, `reffered_user`, `source`, `reffered_by`, `reffered_date`, `nature`, `reason`, `actions`, `remarks`, `ref_status`, `updated_at`) VALUES
(131, 357, 'Student', 355, '2022-12-16', ' Academic, Career,', 'Career problem', 'kinausap ko sya', 'Problematic', 'Pending', '2022-12-16 06:26:50'),
(132, 357, 'Staff', 349, '2022-12-16', ' Academic,', 'abc', 'abc', '', 'For Appointment', '2022-12-16 07:05:50');

-- --------------------------------------------------------

--
-- Table structure for table `refferals_nature`
--

CREATE TABLE `refferals_nature` (
  `ref_id2` int(11) NOT NULL,
  `reffered_user2` int(20) NOT NULL,
  `source2` varchar(255) NOT NULL,
  `reffered_by2` int(20) NOT NULL,
  `reffered_date2` date NOT NULL,
  `nature2` varchar(255) NOT NULL,
  `reason2` text NOT NULL,
  `actions2` text NOT NULL,
  `remarks2` varchar(255) NOT NULL,
  `ref_status2` varchar(255) NOT NULL,
  `updated_at2` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refferals_nature`
--

INSERT INTO `refferals_nature` (`ref_id2`, `reffered_user2`, `source2`, `reffered_by2`, `reffered_date2`, `nature2`, `reason2`, `actions2`, `remarks2`, `ref_status2`, `updated_at2`) VALUES
(32, 357, 'Student', 355, '2022-12-16', 'Academic', 'Career problem', 'kinausap ko sya', 'Problematic', 'Pending', '2022-12-16 06:26:49'),
(33, 357, 'Student', 355, '2022-12-16', 'Career', 'Career problem', 'kinausap ko sya', 'Problematic', 'Pending', '2022-12-16 06:26:49'),
(34, 357, 'Staff', 349, '2022-12-16', 'Academic', 'abc', 'abc', '', 'Pending', '2022-12-16 06:52:11');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `refferal_id` int(20) NOT NULL,
  `offense` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roles`) VALUES
(1, 'administrator'),
(2, 'staff'),
(3, 'student'),
(4, 'counselor');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `id` int(11) NOT NULL,
  `sender` int(255) NOT NULL DEFAULT 0,
  `reciever` int(255) NOT NULL DEFAULT 0,
  `text_sms` varchar(255) DEFAULT NULL,
  `seen_status` int(11) NOT NULL DEFAULT 0,
  `date_sent` datetime NOT NULL DEFAULT current_timestamp(),
  `group_sms` int(22) NOT NULL DEFAULT 0,
  `delete_status` int(100) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `sender`, `reciever`, `text_sms`, `seen_status`, `date_sent`, `group_sms`, `delete_status`) VALUES
(164, 1, 355, 'hi bangeles', 1, '2022-12-16 15:31:01', 355, 0),
(165, 355, 1, 'hi guidance counselor', 1, '2022-12-16 15:31:54', 355, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `id_number` int(20) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `department` varchar(50) NOT NULL,
  `dep_position` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `position` varchar(150) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `user_image` varchar(999) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `limit_app` int(100) NOT NULL DEFAULT 0,
  `sms_status` int(100) NOT NULL DEFAULT 0,
  `active_status` int(100) NOT NULL DEFAULT 0,
  `typing` int(11) NOT NULL DEFAULT 0,
  `inv_act` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `gender`, `date_of_birth`, `department`, `dep_position`, `program`, `level`, `position`, `status`, `user_image`, `email`, `password`, `role`, `updated_at`, `limit_app`, `sms_status`, `active_status`, `typing`, `inv_act`) VALUES
(1, 1001, 'Castor', 'Mary Faith', '', 'Angeles City', '09123456789', 'Female', NULL, '', 'Guidance Counselor', '', NULL, 'Guidance', '', NULL, 'maryfaith.castor@angeles.sti.edu', 'MFCastor', 1, '2022-12-16 00:16:26', 0, 1, 0, 0, 0),
(349, 2000257868, 'Bennan', 'Chris', '', 'PORAC', '09613688865', NULL, NULL, 'Academics', 'Instructor', '', NULL, 'Staff', 'Active', NULL, 'bennan.257868@angeles.sti.edu.ph', 'CB257868', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(350, 2000251944, 'Dela Cruz', 'Katrina', 'Womax', 'ANGELES', '09195591329', NULL, NULL, 'Academics', 'Kitchen Custodian', '', NULL, 'Staff', 'Active', NULL, 'delacruz.251944@angeles.sti.edu.ph', 'KDC251944', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(351, 2000224235, 'Guzman', 'Rhodes', 'Daniella', 'MAGALANG', '09195591329', NULL, NULL, 'Academics', 'Lab Custodian', '', NULL, 'Staff', 'Active', NULL, 'guzman.224235@angeles.sti.edu.ph', 'RG224235', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(352, 2000251942, 'Williams', 'Jane', 'George', '272 SINURA AVENUE ', '09195591329', NULL, NULL, 'Administrative', 'Administrative Officer', '', NULL, 'Staff', 'Active', NULL, 'williams.251942@angeles.sti.edu.ph', 'JW251942', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(353, 2000253423, 'Buna', 'David', 'Santos', '121 SAN SIMON, MABALACAT, PAMPANGA', '09195591329', NULL, NULL, 'Administrative', 'Registrar', '', NULL, 'Staff', 'Active', NULL, 'buna.253423@angeles.sti.edu.ph', 'DB253423', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(354, 2000432424, 'Parker', 'Kevin', '', '123 PAMPANG AVENUE BALIBAGO', '09195591329', NULL, NULL, 'Administrative', 'Record', '', NULL, 'Staff', 'Active', NULL, 'parker.432424@angeles.sti.edu.ph', 'KP432424', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(355, 2000245727, 'Bangeles', 'Rowella', 'Mallari', '213 sta ana st. angeles city', '09121312331', NULL, NULL, '', '', 'HUMMS', 'Grade 11', 'Student', 'Active', NULL, 'bangeles.245727@angeles.sti.edu.ph', 'RB245727', 3, '2022-12-16 07:21:56', 0, 0, 0, 0, 1),
(356, 2000258351, 'Baquiran', 'Charmaine', ' ', 'B11 L13 PHASE 4 COBAL  ST. MANSFIELD RESIDENCES STO DOMINGO, ANGELES CITY    ', '09123456789', NULL, NULL, '', '', 'CUART', 'Grade 11', 'Student', 'Active', NULL, 'baquiran.258351@angeles.sti.edu.ph', 'CB258351', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(357, 2000232823, 'Acub', 'Marqueyza', 'Butic', '03 LAURA ST. BRGY. LAKANDULA       MABALACAT CITY', '09217112098', NULL, NULL, '', '', 'MAWD', 'Grade 12', 'Student', 'Active', NULL, 'acub.232823@angeles.sti.edu.ph', 'MA232823', 3, '2022-12-16 07:14:04', 0, 0, 0, 0, 1),
(358, 2000232816, 'Acub', 'Rina Elhym', 'Butic', '03 LAURA ST. BRGY LAKANDULA       MABALACAT CITY', '09217238346', NULL, NULL, '', '', 'CCTECH', 'Grade 12', 'Student', 'Active', NULL, 'acub.232816@angeles.sti.edu.ph', 'REA232816', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(359, 2000257346, 'Abadies', 'Gefel', 'Nabor', 'BLK.8 LOT 16 SOLANA FRONTERA FLAMINGO ST. SAPALIBUTAD   ANGELES', '09269979985', NULL, NULL, '', '', 'BSTM', '1st Year', 'Student', 'Active', NULL, 'abadies.257346@angeles.sti.edu.ph', 'GA257346', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(360, 2000197721, 'Abasolo', 'Richard', 'Imperial', '34-24 SARITA ST. DIAMOND SUBD.     ANGELES CITY', '09199925436', NULL, NULL, '', '', 'BSTM', '3rd Year', 'Student', 'Active', NULL, 'abasolo.197721@angeles.sti.edu.ph', 'RA197721', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(361, 2000155605, 'Abasula', 'Criselda', 'Oloya', 'B45 L65 MAPAGMALASAKIT ST. FIESTA COMMUNITIES MANIBAUG PORAC PAMP.  ', '09261696596', NULL, NULL, '', '', 'BSTM', '3rd Year', 'Student', 'Active', NULL, 'abasula.155605@angeles.sti.edu.ph', 'CA155605', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(362, 2000273259, 'Abella', 'Ella Mae', 'Ongray', '13033 PERAS ST. DAU HOMESITE     MABALACAT', '09183593384', NULL, NULL, '', '', 'BSTM', '1st Year', 'Student', 'Active', NULL, 'abella.273259@angeles.sti.edu.ph', 'EMA273259', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(363, 2000266053, 'Abog', 'Jezza', 'Reyes', 'BLK. 19 LOT 13 17 ST MRC BRGY. MAWAQUE MABALACAT   ANGELES', '09475861724', NULL, NULL, '', '', 'BSTM', '1st Year', 'Student', 'Active', NULL, 'abog.266053@angeles.sti.edu.ph', 'JA266053', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(364, 2000109278, 'Acar', 'Mark Joseph', 'Damalia', '184 IPIL-IPIL PUROK 7 PULONG MARAGUL       ANGELES CITY', '09265333300', NULL, NULL, '', '', 'BSIT', '2nd Year', 'Student', 'Active', NULL, 'acar.109278@angeles.sti.edu.ph', 'MJA109278', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(365, 2000200086, 'Alan', 'Gerald', ' ', 'BLK 19 LOT 31 ANA ST. XEVERA BRGY TABUN     MABALACAT', '09303434579', NULL, NULL, '', '', 'BSBAOM', '3rd Year', 'Student', 'Active', NULL, 'alan.200086@angeles.sti.edu.ph', 'GA200086', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(366, 2000041648, 'Alonzo', 'Ruzzel Justin', ' ', '785 MABINI STREET PLARIDEL 1 MALABANIAS       ANGELES CITY', '09752434037', NULL, NULL, '', '', 'BSHM', '4th Year', 'Student', 'Active', NULL, 'alonzo.041648@angeles.sti.edu.ph', 'RJA041648', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(367, 2000083331, 'Anciano', 'Erica Mae', 'Sotero', 'JAOVIL       ANGELES CITY', '09355832215', NULL, NULL, '', '', 'BSHM', '3rd Year', 'Student', 'Active', NULL, 'anciano.083331@angeles.sti.edu.ph', 'EMA083331', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(368, 2000080306, 'Anore', 'Justine Andrielle', 'Ocampo', '31-14 SY OROSA ST. DIAMOND SUB. BALIBAGO   ANGELES CITY', '09167416756', NULL, NULL, '', '', 'BSHM', '3rd Year', 'Student', 'Active', NULL, 'anore.080306@angeles.sti.edu.ph', 'JAA080306', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_history`
--
ALTER TABLE `appointment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offense_monitoring`
--
ALTER TABLE `offense_monitoring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_appointment`
--
ALTER TABLE `personal_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refferals`
--
ALTER TABLE `refferals`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `user_id` (`reffered_user`);

--
-- Indexes for table `refferals_nature`
--
ALTER TABLE `refferals_nature`
  ADD PRIMARY KEY (`ref_id2`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `id_number` (`id_number`),
  ADD KEY `user-role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `appointment_history`
--
ALTER TABLE `appointment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `offense_monitoring`
--
ALTER TABLE `offense_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `personal_appointment`
--
ALTER TABLE `personal_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `refferals`
--
ALTER TABLE `refferals`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `refferals_nature`
--
ALTER TABLE `refferals_nature`
  MODIFY `ref_id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `refferals`
--
ALTER TABLE `refferals`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`reffered_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user-role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
