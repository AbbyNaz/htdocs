-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 07:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

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
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `duration` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `title`, `description`, `duration`, `status`, `creation_date`) VALUES
(18, 'New Job Fair for Tourism Students', 'the job fair is located at the sm clark', 3, 'Active', '2022-12-27');

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
  `nature` varchar(500) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `app_status` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(255) NOT NULL,
  `app_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `timeslot`, `timeslot_end`, `date`, `user_type`, `ref_id`, `id_number`, `name`, `nature`, `subject`, `appointment_type`, `info`, `app_status`, `updated_at`, `meeting_link`, `app_by`) VALUES
(133, '11:00 am', NULL, '2022-12-29', 'Staff', 0, 2000253423, 'David Buna', '', 'test', 'Walk-in', 'test', 'for appointment', '2022-12-28 14:50:45', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `timeslot_end` varchar(100) NOT NULL,
  `date` varchar(150) NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) NOT NULL,
  `id_number` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nature` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `appointment_type` varchar(500) NOT NULL,
  `info` varchar(500) NOT NULL,
  `app_status` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `meeting_link` varchar(500) NOT NULL,
  `app_by` int(2) NOT NULL,
  `app_id` int(11) NOT NULL,
  `cancel_reason` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `timeslot`, `timeslot_end`, `date`, `user_type`, `ref_id`, `id_number`, `name`, `nature`, `subject`, `appointment_type`, `info`, `app_status`, `updated_at`, `meeting_link`, `app_by`, `app_id`, `cancel_reason`, `date_accomplished`) VALUES
(131, '9:00 am', '10:00 am', '2022-12-28', 'Student', 0, 2000245727, 'Bangeles, Rowella', 'Academic,Career,Personal', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 10:13:26', 'no link', 1, 122, 'sadasfasfaddsfd', '2022-12-28'),
(132, '9:00 am', '10:00 am', '2022-12-28', 'Student', 0, 2000245727, 'Bangeles, Rowella', 'Academic,Career,Personal', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 10:14:25', 'no link', 1, 123, 'just cancel', '2022-12-28'),
(133, '9:00 am', '10:00 am', '2022-12-28', 'Student', 0, 2000245727, 'Bangeles, Rowella', 'Academic,Career,Personal,Crisis', 'test', 'Walk-in', 'test', 'Completed', '2022-12-28 10:28:39', 'no link', 1, 125, '', '2022-12-28'),
(134, '9:00 am', '10:00 am', '2022-12-28', 'Student ', 154, 2000245727, 'Rowella Bangeles', 'Academic, Career, Personal, Crisis', 'test', 'Walk-in', 'test', 'Completed Referral', '2022-12-28 10:54:41', 'no link', 1, 126, '', '2022-12-28'),
(135, '9:00 am', '10:00 am', '2022-12-29', '', 0, 0, 'Rowella Bangeles', '', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 14:43:59', '', 0, 129, 'fffdfdfdfd', '2022-12-28'),
(136, '9:00 am', '10:00 am', '2022-12-29', 'Student', 0, 2000232823, 'Marqueyza Acub', '', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 13:51:57', '', 0, 127, 'sdfggdfg', '2022-12-28'),
(137, '9:00 am', '10:00 am', '2022-12-29', 'Student', 0, 2000245727, 'Rowella Bangeles', '', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 14:46:05', '', 0, 130, 'gfddgdfgfdgdfg', '2022-12-28'),
(138, '11:00 am', '2:00 pm', '2022-12-29', '', 0, 0, 'Rowella Bangeles', '', 'test', 'Walk-in', 'ASDSADSD', 'Cancelled', '2022-12-28 14:48:24', '', 0, 132, 'utrfkm jhyg', '2022-12-28'),
(139, '9:00 am', '10:00 am', '2022-12-29', 'Student', 0, 2000232823, 'Marqueyza Acub', '', 'test', 'Walk-in', 'test', 'Cancelled', '2022-12-28 14:46:04', '', 0, 128, 'just cancel', '2022-12-30');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`ID`, `ARTICLECODE`, `TITLE`, `DESCRIPTION`, `PICTURE`, `DURATION`, `ART_STATUS`) VALUES
(2, '221128-160540-4', 'Growth Mindset', 'There’s a fine line between instilling discipline through toughening acts and a fear of failure by punishing infractions. Unfortunately, most people can attest that this line has been blurred and that the notion of failure, while common, is often viewed not just as a negative but something to be ashamed of. In some cultures, around the world, it is treated as an extremely terrible thing. Children are taught to not just fear failure, but actively avoid it.', 'uploads/dec1.png', 'December', 'Active'),
(3, '221128-222651-4', 'Diversity, Equity, Inclusion', 'Diversity exists when you go above and beyond being aware of differences or accepting differences to the point of actively including people who are different from you. Diversity is learning from our differences to make the whole community a better place. It is a combination of our differences that shape our view of the world, our perspective and our approach.', 'uploads/dec2.png', 'December', 'Active'),
(4, '221129-144937-9', 'Self Care', 'have a significant impact on how we view ourselves.  Sometimes we look in the mirror and don’t like who we see.  It is important to remember that our reflection is two dimensional, we do not see the whole picture of ourselves, yet we are the ones who judge most harshly. The following article provides 3 strategies to help you strengthen your self-esteem.', 'uploads/dec3.jpg', 'December', 'Active'),
(6, '221214-145526-1', 'article a', 'abecd', 'uploads/article-1.png', 'December', 'Active'),
(7, '221222-012816-7', 'dadawd', 'dwadwadwa', 'uploads/article-1.png', 'January', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `autobackupdetails`
--

CREATE TABLE `autobackupdetails` (
  `UseAuto` int(10) NOT NULL DEFAULT 0,
  `Days` int(5) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `autobackupdetails`
--

INSERT INTO `autobackupdetails` (`UseAuto`, `Days`) VALUES
(1, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`ID`, `SY`, `SEM`, `QUARTER`, `FIRST`, `MIDDLE`, `LAST`, `STUDNUMBER`, `YEARLEVEL`, `PROGRAMSECTION`, `NICKNAME`, `NATIONALITY`, `GENDER`, `CIVILSTATUS`, `RELIGION`, `DOB`, `MOBILE`, `EMAIL1`, `EMAIL2`, `HOMENUMBER`, `PRESENT`, `PERMANENT`, `PROVINCIAL`, `MARRIED_FIRST`, `MARRIED_LAST`, `SPOUSE_AGE`, `WORK_STATUS`, `OCCUPATION`, `MARRIED_CONTACT`, `GUARDIAN_STATUS`, `GUARDIAN_NAME`, `GUARDIAN_ADDRESS`, `GUARDIAN_CONTACT`, `GUARDIAN_EMERGENCY`, `GUARDIAN_OTHERCONTACT`, `GUARDIAN_FATHERNAME`, `GUARDIAN_FATHERAGE`, `GUARDIAN_FATHERDOB`, `GUARDIAN_FATHERNATIONALITY`, `GUARDIAN_FATHERRELIGION`, `GUARDIAN_FATHEREDUCATIONAL`, `GUARDIAN_FATHEROCCUPATION`, `GUARDIAN_FATHERCONTACT`, `GUARDIAN_FATHERCOMPANY`, `GUARDIAN_FATHERINCOME`, `GUARDIAN_MOTHERNAME`, `GUARDIAN_MOTHERAGE`, `GUARDIAN_MOTHERDOB`, `GUARDIAN_MOTHERNATIONALITY`, `GUARDIAN_MOTHERRELIGION`, `GUARDIAN_MOTHEREDUCATIONAL`, `GUARDIAN_MOTHEROCCUPATION`, `GUARDIAN_MOTHERCONTACT`, `GUARDIAN_MOTHERCOMPANY`, `GUARDIAN_MOTHERINCOME`, `SO1_NAME`, `SO1_AGE`, `SO1_GENDER`, `SO1_PROGOCCUP`, `SO1_SCHCOMP`, `SO2_NAME`, `SO2_AGE`, `SO2_GENDER`, `SO2_PROGOCCUP`, `SO2_SCHCOMP`, `SO3_NAME`, `SO3_AGE`, `SO3_GENDER`, `SO3_PROGOCCUP`, `SO3_SCHCOMP`, `SPORTS`, `HOBBIES`, `TALENTS`, `SOCIO`, `SCHOOL_ORGANIZATION`, `WE1_COMPNAME`, `WE1_POSITION`, `WE1_DURATION`, `WE1_JOB`, `WE2_COMPNAME`, `WE2_POSITION`, `WE2_DURATION`, `WE2_JOB`, `WE3_COMPNAME`, `WE3_POSITION`, `WE3_DURATION`, `WE3_JOB`, `DATE_INCREATED`) VALUES
(20, '2022', '1st semester', '', 'Rowella', 'Mallari', 'Bangeles', 2000245727, '', 'HUMMS', 'row', 'FILIPINO', 'Female', 'SINGLE', 'Roman Catholic', '2022-12-14', '09121312331', 'bangeles.245727@angeles.sti.edu.ph', '', '', '', '', '', '', '', 0, 'No', '', '', 'Married', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-16'),
(21, '2022', '1st semester', '', 'Marqueyza', 'Butic', 'Acub', 2000232823, '', 'MAWD', 'abby', 'FILIPINO', '', 'SINGLE', 'Roman Catholic', '2022-12-07', '09217112098', 'acub.232823@angeles.sti.edu.ph', '', '', '', '', '', '', '', 0, 'No', '', '', 'Married', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-16'),
(22, '2022', '2nd semester', '', 'Abigail', 'Macales', 'Nazal', 2000092923, '', 'BSIT', 'abby', 'Filipino', 'Female', 'Single', 'Roman Catholic', '2000-09-04', '19182806421', 'Abbynazal4@gmail.com', 'Abbynazal4@gmail.com', '', 'Malabanias', '', '', '', '', 0, 'No', '', '', 'Married', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', '', '', '', 0.00, '', 0, '', '', '', '', 0, '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2022-12-27');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(364, 'Guidance', 1001, 'Logged out', '2022-12-16 08:37:47'),
(365, 'Admin', 1001, 'Logged out', '2022-12-19 15:27:06'),
(366, 'Guidance', 1001, 'Logged in the system', '2022-12-19 15:27:17'),
(367, 'Guidance', 1001, 'Logged out', '2022-12-19 17:43:39'),
(368, 'Guidance', 1001, 'Logged in the system', '2022-12-19 17:44:04'),
(369, 'Guidance', 1001, 'Logged in the system', '2022-12-19 17:45:36'),
(370, 'Guidance', 1001, 'Logged out', '2022-12-19 17:52:31'),
(371, 'Guidance', 1001, 'Logged in the system', '2022-12-19 17:52:33'),
(372, 'Guidance', 1001, 'Logged out', '2022-12-19 19:11:57'),
(373, 'Guidance', 1001, 'Logged in the system', '2022-12-20 05:11:19'),
(374, 'Guidance', 1001, 'Logged out', '2022-12-20 05:17:28'),
(375, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 05:18:12'),
(376, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 05:18:37'),
(377, 'Staff', 2000251944, 'Logged out', '2022-12-20 05:27:41'),
(378, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 05:27:46'),
(379, 'Staff', 2000251944, 'Logged out', '2022-12-20 05:27:50'),
(380, 'Guidance', 1001, 'Logged in the system', '2022-12-20 05:28:00'),
(381, 'Guidance', 1001, 'Logged in the system', '2022-12-20 06:48:03'),
(382, 'Guidance', 1001, 'Logged out', '2022-12-20 09:02:59'),
(383, 'Guidance', 1001, 'Logged in the system', '2022-12-20 09:03:06'),
(384, 'Guidance', 1001, 'Logged out', '2022-12-20 09:12:37'),
(385, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 09:12:43'),
(386, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 09:13:05'),
(387, 'Staff', 2000251944, 'Logged out', '2022-12-20 09:14:05'),
(388, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 09:14:18'),
(389, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 09:16:33'),
(390, 'Staff', 2000253423, 'Logged out', '2022-12-20 09:16:40'),
(391, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 09:16:43'),
(392, 'Staff', 2000253423, 'Logged out', '2022-12-20 09:20:06'),
(393, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 09:20:13'),
(394, 'Staff', 2000253423, 'Logged out', '2022-12-20 09:20:15'),
(395, 'Guidance', 1001, 'Logged in the system', '2022-12-20 09:20:23'),
(396, 'Guidance', 1001, 'Logged out', '2022-12-20 09:23:47'),
(397, 'Guidance', 1001, 'Logged in the system', '2022-12-20 09:24:13'),
(398, 'Guidance', 1001, 'Logged out', '2022-12-20 10:46:58'),
(399, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 10:47:19'),
(400, 'Staff', 2000251944, 'Logged out', '2022-12-20 11:56:08'),
(401, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 11:56:38'),
(402, 'Staff', 2000251944, 'Logged out', '2022-12-20 15:00:14'),
(403, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 15:00:18'),
(404, 'Staff', 2000251944, 'Logged out', '2022-12-20 15:03:50'),
(405, 'Staff', 2000251944, 'Logged in the system', '2022-12-20 15:03:57'),
(406, 'Staff', 2000251944, 'Logged out', '2022-12-20 15:04:00'),
(407, 'Guidance', 1001, 'Logged in the system', '2022-12-20 15:04:24'),
(408, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 22:08:51'),
(409, 'Guidance', 1001, 'Logged out', '2022-12-20 15:46:05'),
(410, 'Guidance', 1001, 'Logged in the system', '2022-12-20 15:46:08'),
(411, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:09:08'),
(412, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:09:51'),
(413, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:14:33'),
(414, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:21:04'),
(415, ' Admin', 1001, 'Added a new offense on [ ID = 2000258351] Charmaine Baquiran to the offense list', '2022-12-20 23:22:46'),
(416, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:23:51'),
(417, 'Guidance', 1001, 'Logged out', '2022-12-20 16:24:01'),
(418, 'Guidance', 1001, 'Logged in the system', '2022-12-20 16:24:37'),
(419, 'Guidance', 1001, 'Logged out', '2022-12-20 16:27:17'),
(420, 'Guidance', 1001, 'Logged in the system', '2022-12-20 16:27:25'),
(421, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:27:42'),
(422, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:28:30'),
(423, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:28:59'),
(424, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:29:55'),
(425, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-20 23:30:19'),
(426, 'Guidance', 1001, 'Logged out', '2022-12-20 16:30:32'),
(427, 'Guidance', 1001, 'Logged in the system', '2022-12-20 16:30:38'),
(428, 'Guidance', 1001, 'Logged out', '2022-12-20 16:37:29'),
(429, 'Guidance', 1001, 'Logged in the system', '2022-12-20 16:37:36'),
(430, 'Guidance', 1001, 'Logged out', '2022-12-20 16:46:31'),
(431, 'Guidance', 1001, 'Logged in the system', '2022-12-20 16:46:39'),
(432, 'Guidance', 1001, 'Logged out', '2022-12-20 17:06:32'),
(433, 'Guidance', 1001, 'Logged in the system', '2022-12-20 17:06:38'),
(434, 'Guidance', 1001, 'Logged out', '2022-12-20 17:17:02'),
(435, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:17:09'),
(436, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 17:19:28'),
(437, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 17:23:23'),
(438, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:23:30'),
(439, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:23:32'),
(440, 'Staff', 0, 'Error in adding a new referral [ ID = ]   to the referral list', '2022-12-20 17:25:24'),
(441, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:25:27'),
(442, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:25:30'),
(443, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:27:29'),
(444, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:27:41'),
(445, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:28:00'),
(446, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:28:03'),
(447, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:38:21'),
(448, 'Staff', 2000253423, 'Logged in the system', '2022-12-20 17:38:24'),
(449, 'Staff', 2000253423, 'Logged out', '2022-12-20 17:39:07'),
(450, 'Staff', 2000253423, 'Logged in the system', '2022-12-21 05:26:39'),
(451, 'Staff', 2000253423, 'Logged out', '2022-12-21 05:29:16'),
(452, 'Staff', 2000253423, 'Logged in the system', '2022-12-21 05:29:18'),
(453, 'Staff', 2000253423, 'Logged out', '2022-12-21 05:49:22'),
(454, 'Staff', 2000253423, 'Logged in the system', '2022-12-21 05:49:26'),
(455, 'Staff', 2000253423, 'Logged out', '2022-12-21 05:57:26'),
(456, 'Guidance', 1001, 'Logged in the system', '2022-12-21 05:57:33'),
(457, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-21 13:08:15'),
(458, 'Guidance', 1001, 'Logged out', '2022-12-21 16:36:15'),
(459, 'Guidance', 1001, 'Logged in the system', '2022-12-21 16:36:21'),
(460, 'Guidance', 1001, 'Logged out', '2022-12-21 16:39:06'),
(461, 'Staff', 2000257868, 'Logged in the system', '2022-12-21 16:39:53'),
(462, 'Staff', 2000257868, 'Logged out', '2022-12-21 16:42:43'),
(463, 'Guidance', 1001, 'Logged in the system', '2022-12-21 16:42:49'),
(464, 'Guidance', 1001, 'Logged out', '2022-12-21 16:47:33'),
(465, 'Staff', 2000257868, 'Logged in the system', '2022-12-21 16:47:38'),
(466, 'Staff', 2000257868, 'Logged out', '2022-12-21 17:03:51'),
(467, 'Staff', 2000257868, 'Logged in the system', '2022-12-21 17:03:58'),
(468, 'Staff', 2000257868, 'Logged out', '2022-12-21 17:04:03'),
(469, 'Staff', 2000257868, 'Logged in the system', '2022-12-21 17:04:08'),
(470, 'Guidance', 1001, 'Logged in the system', '2022-12-21 17:04:18'),
(471, 'Guidance', 1001, 'Logged out', '2022-12-21 17:04:38'),
(472, 'Guidance', 1001, 'Logged in the system', '2022-12-21 17:04:44'),
(473, 'Guidance', 1001, 'Logged out', '2022-12-21 17:20:59'),
(474, 'Staff', 2000257868, 'Logged in the system', '2022-12-21 17:21:06'),
(475, 'Staff', 2000257868, 'Logged out', '2022-12-21 18:00:00'),
(476, 'Guidance', 1001, 'Logged in the system', '2022-12-21 18:00:05'),
(477, ' Admin', 1001, 'Added a new announcement', '2022-12-21 18:17:07'),
(478, ' Admin', 1001, 'Added a new announcement', '2022-12-21 19:00:34'),
(479, ' Admin', 1001, 'Added a new announcement', '2022-12-21 19:07:58'),
(480, ' Admin', 1001, 'Added a new announcement', '2022-12-22 07:06:57'),
(481, ' Admin', 1001, 'Added a new announcement', '2022-12-22 07:52:40'),
(482, ' Admin', 1001, 'Added a new announcement', '2022-12-22 07:52:54'),
(483, ' Admin', 1001, 'Added a new announcement', '2022-12-22 08:40:17'),
(484, ' Admin', 1001, 'Updated an announcement', '2022-12-22 08:50:39'),
(485, ' Admin', 1001, 'Updated an announcement', '2022-12-22 08:50:56'),
(486, ' Admin', 1001, 'Updated an announcement', '2022-12-22 08:51:35'),
(487, ' Admin', 1001, 'Updated an announcement', '2022-12-22 08:51:46'),
(488, ' Admin', 1001, 'Added a new announcement', '2022-12-22 08:58:50'),
(489, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:11:05'),
(490, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:11:12'),
(491, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:11:20'),
(492, ' Admin', 1001, 'Error: Attempted to delete an announcement', '2022-12-22 09:11:24'),
(493, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:11:32'),
(494, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:11:47'),
(495, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:12:13'),
(496, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:12:25'),
(497, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:12:31'),
(498, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:26:18'),
(499, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:26:48'),
(500, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:27:57'),
(501, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:29:47'),
(502, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:30:43'),
(503, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:31:24'),
(504, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:33:28'),
(505, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:33:36'),
(506, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:34:12'),
(507, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:34:17'),
(508, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:34:28'),
(509, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:34:38'),
(510, ' Admin', 1001, 'Error: Attempted to delete an announcement', '2022-12-22 09:37:05'),
(511, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:39:01'),
(512, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:39:14'),
(513, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:40:12'),
(514, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:40:25'),
(515, ' Admin', 1001, 'Error: Attempted to delete an announcement', '2022-12-22 09:40:48'),
(516, ' Admin', 1001, 'Error: Attempted to delete an announcement', '2022-12-22 09:41:45'),
(517, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:42:50'),
(518, ' Admin', 1001, 'Deleted an announcement', '2022-12-22 09:42:53'),
(519, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:43:00'),
(520, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:43:15'),
(521, ' Admin', 1001, 'Deleted an announcement', '2022-12-22 09:43:43'),
(522, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:45:40'),
(523, ' Admin', 1001, 'Added a new announcement', '2022-12-22 09:46:34'),
(524, ' Admin', 1001, 'Updated an announcement', '2022-12-22 09:46:53'),
(525, 'Guidance', 1001, 'Logged out', '2022-12-22 09:51:46'),
(526, 'Guidance', 1001, 'Logged in the system', '2022-12-22 09:51:50'),
(527, 'Guidance', 1001, 'Logged out', '2022-12-22 09:51:53'),
(528, 'Guidance', 1001, 'Logged in the system', '2022-12-22 09:52:03'),
(529, 'Guidance', 1001, 'Logged out', '2022-12-22 09:57:30'),
(530, 'Guidance', 1001, 'Logged in the system', '2022-12-22 09:57:38'),
(531, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-22 16:57:56'),
(532, 'Guidance', 1001, 'Logged out', '2022-12-22 09:58:07'),
(533, 'Guidance', 1001, 'Logged in the system', '2022-12-22 09:58:12'),
(534, 'Guidance', 1001, 'Logged out', '2022-12-22 13:39:46'),
(535, 'Guidance', 1001, 'Logged in the system', '2022-12-22 13:39:55'),
(536, ' Admin', 1001, 'Added a new announcement', '2022-12-22 13:40:20'),
(537, ' Admin', 1001, 'Added a new announcement', '2022-12-22 13:40:44'),
(538, 'Guidance', 1001, 'Logged out', '2022-12-22 13:40:57'),
(539, 'Guidance', 1001, 'Logged in the system', '2022-12-22 13:41:06'),
(540, 'Guidance', 1001, 'Logged out', '2022-12-22 14:38:24'),
(541, 'Guidance', 1001, 'Logged in the system', '2022-12-22 14:38:43'),
(542, 'Guidance', 1001, 'Logged out', '2022-12-22 14:40:23'),
(543, 'Guidance', 1001, 'Logged in the system', '2022-12-22 14:40:30'),
(544, 'Guidance', 1001, 'Logged out', '2022-12-22 14:40:34'),
(545, 'Guidance', 1001, 'Logged in the system', '2022-12-22 14:40:42'),
(546, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:22:33'),
(547, 'Guidance', 1001, 'Logged out', '2022-12-22 15:27:12'),
(548, 'Staff', 2000251944, 'Logged in the system', '2022-12-22 15:27:22'),
(549, 'Staff', 2000251944, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:27:43'),
(550, 'Staff', 2000251944, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 15:30:43'),
(551, 'Staff', 2000251944, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:31:08'),
(552, 'Staff', 2000251944, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:32:14'),
(553, 'Staff', 2000251944, 'Logged out', '2022-12-22 15:32:19'),
(554, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:32:23'),
(555, 'Guidance', 1001, 'Logged out', '2022-12-22 15:35:05'),
(556, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:35:12'),
(557, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:35:25'),
(558, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:36:53'),
(559, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:37:32'),
(560, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:38:50'),
(561, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:41:41'),
(562, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 15:47:55'),
(563, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 15:48:34'),
(564, 'Guidance', 1001, 'Logged out', '2022-12-22 15:49:01'),
(565, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:49:07'),
(566, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-22 22:49:58'),
(567, 'Guidance', 1001, 'Logged out', '2022-12-22 15:50:02'),
(568, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:50:07'),
(569, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 15:51:38'),
(570, 'Guidance', 1001, 'Logged out', '2022-12-22 15:51:44'),
(571, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:51:52'),
(572, 'Guidance', 1001, 'Logged out', '2022-12-22 15:52:33'),
(573, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:52:38'),
(574, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 15:52:52'),
(575, 'Guidance', 1001, 'Logged out', '2022-12-22 15:53:35'),
(576, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:53:40'),
(577, 'Guidance', 1001, 'Logged out', '2022-12-22 15:54:18'),
(578, 'Staff', 2000253423, 'Logged in the system', '2022-12-22 15:54:24'),
(579, 'Staff', 2000253423, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-22 15:54:37'),
(580, 'Staff', 2000253423, 'Logged out', '2022-12-22 15:54:44'),
(581, 'Guidance', 1001, 'Logged in the system', '2022-12-22 15:54:51'),
(582, 'Guidance', 1001, 'Logged out', '2022-12-22 15:55:06'),
(583, 'Guidance', 1001, 'Logged in the system', '2022-12-22 16:01:28'),
(584, 'Guidance', 1001, 'Logged out', '2022-12-22 16:42:23'),
(585, 'Guidance', 1001, 'Logged in the system', '2022-12-22 16:42:29'),
(586, 'Guidance', 1001, 'Logged out', '2022-12-22 16:49:21'),
(587, 'Guidance', 1001, 'Logged in the system', '2022-12-22 16:49:27'),
(588, 'Guidance', 1001, 'Logged out', '2022-12-22 17:30:10'),
(589, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:30:17'),
(590, 'Guidance', 1001, 'Logged out', '2022-12-22 17:30:42'),
(591, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:39:05'),
(592, 'Guidance', 1001, 'Logged out', '2022-12-22 17:42:21'),
(593, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:42:28'),
(594, 'Guidance', 1001, 'Logged out', '2022-12-22 17:42:39'),
(595, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:42:44'),
(596, 'Guidance', 1001, 'Logged out', '2022-12-22 17:43:25'),
(597, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:43:31'),
(598, 'Guidance', 1001, 'Logged out', '2022-12-22 17:43:38'),
(599, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:43:46'),
(600, 'Guidance', 1001, 'Logged out', '2022-12-22 17:43:55'),
(601, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:44:05'),
(602, 'Guidance', 1001, 'Logged out', '2022-12-22 17:46:02'),
(603, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:46:09'),
(604, 'Guidance', 1001, 'Logged out', '2022-12-22 17:47:15'),
(605, 'Staff', 2000253423, 'Logged in the system', '2022-12-22 17:47:22'),
(606, 'Staff', 2000253423, 'Logged out', '2022-12-22 17:47:43'),
(607, 'Guidance', 1001, 'Logged in the system', '2022-12-22 17:47:50'),
(608, 'Guidance', 1001, 'Logged out', '2022-12-22 18:07:06'),
(609, 'Guidance', 1001, 'Logged in the system', '2022-12-22 18:07:12'),
(610, 'Guidance', 1001, 'Logged out', '2022-12-22 18:07:23'),
(611, 'Guidance', 1001, 'Logged in the system', '2022-12-22 18:07:28'),
(612, 'Guidance', 1001, 'Logged out', '2022-12-22 18:28:06'),
(613, 'Guidance', 1001, 'Logged in the system', '2022-12-22 18:28:18'),
(614, 'Guidance', 1001, 'Logged out', '2022-12-22 18:28:39'),
(615, 'Guidance', 1001, 'Logged in the system', '2022-12-22 18:28:45'),
(616, 'Guidance', 1001, 'Logged out', '2022-12-22 18:28:55'),
(617, 'Guidance', 1001, 'Logged in the system', '2022-12-22 18:30:53'),
(618, 'Guidance', 1001, 'Logged out', '2022-12-22 19:03:28'),
(619, 'Guidance', 1001, 'Logged in the system', '2022-12-22 19:03:32'),
(620, 'Guidance', 1001, 'Logged out', '2022-12-22 19:03:35'),
(621, 'Guidance', 1001, 'Logged in the system', '2022-12-22 19:03:40'),
(622, 'Student', 1001, 'Added a new referral [ ID = 356]   to the referral list', '2022-12-22 19:03:55'),
(623, 'Guidance', 1001, 'Logged out', '2022-12-22 19:04:07'),
(624, 'Guidance', 1001, 'Logged in the system', '2022-12-22 19:04:12'),
(625, 'Guidance', 1001, 'Logged out', '2022-12-22 19:22:50'),
(626, 'Guidance', 1001, 'Logged in the system', '2022-12-22 19:22:56'),
(627, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-22 19:23:26'),
(628, 'Guidance', 1001, 'Logged out', '2022-12-22 19:23:32'),
(629, 'Guidance', 1001, 'Logged in the system', '2022-12-22 19:23:37'),
(630, 'Guidance', 1001, 'Logged out', '2022-12-22 19:50:24'),
(631, 'Guidance', 1001, 'Logged in the system', '2022-12-23 08:09:17'),
(632, 'Guidance', 1001, 'Logged out', '2022-12-23 08:12:06'),
(633, 'Guidance', 1001, 'Logged in the system', '2022-12-23 08:12:13'),
(634, 'Guidance', 1001, 'Logged out', '2022-12-23 08:40:42'),
(635, 'Guidance', 1001, 'Logged in the system', '2022-12-23 08:41:05'),
(636, 'Guidance', 1001, 'Logged out', '2022-12-23 08:43:12'),
(637, 'Guidance', 1001, 'Logged in the system', '2022-12-23 08:43:22'),
(638, 'Guidance', 1001, 'Logged out', '2022-12-23 08:43:49'),
(639, 'Guidance', 1001, 'Logged in the system', '2022-12-23 08:43:54'),
(640, 'Guidance', 1001, 'Logged out', '2022-12-23 09:16:31'),
(641, 'Guidance', 1001, 'Logged in the system', '2022-12-23 09:16:52'),
(642, 'Guidance', 1001, 'Logged out', '2022-12-23 09:16:55'),
(643, 'Guidance', 1001, 'Logged in the system', '2022-12-23 09:23:02'),
(644, 'Guidance', 1001, 'Logged out', '2022-12-23 09:39:25'),
(645, 'Guidance', 1001, 'Logged in the system', '2022-12-23 09:39:55'),
(646, 'Guidance', 1001, 'Logged out', '2022-12-23 09:40:18'),
(647, 'Guidance', 1001, 'Logged in the system', '2022-12-23 09:40:24'),
(648, 'Guidance', 1001, 'Logged out', '2022-12-23 09:59:58'),
(649, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:00:05'),
(650, 'Guidance', 1001, 'Logged out', '2022-12-23 10:15:13'),
(651, 'Staff', 2000253423, 'Logged in the system', '2022-12-23 10:15:18'),
(652, 'Staff', 2000253423, 'Logged out', '2022-12-23 10:26:15'),
(653, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:26:20'),
(654, 'Guidance', 1001, 'Logged out', '2022-12-23 10:26:44'),
(655, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:26:46'),
(656, 'Guidance', 1001, 'Logged out', '2022-12-23 10:26:53'),
(657, 'Staff', 2000253423, 'Logged in the system', '2022-12-23 10:27:00'),
(658, 'Staff', 2000253423, 'Logged out', '2022-12-23 10:28:50'),
(659, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:28:57'),
(660, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 17:29:16'),
(661, 'Guidance', 1001, 'Logged out', '2022-12-23 10:29:47'),
(662, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:29:51'),
(663, 'Guidance', 1001, 'Logged out', '2022-12-23 10:30:58'),
(664, 'Guidance', 1001, 'Logged in the system', '2022-12-23 10:31:03'),
(665, ' Admin', 1001, 'Added a new staff [ ID = 1234334] Nick joshua montemayor to the staff list', '2022-12-23 11:02:48'),
(666, ' Admin', 1001, 'Deleted the staff [ ID = 1234334] Nick joshua montemayor in the staff list', '2022-12-23 11:03:06'),
(667, ' Admin', 1001, 'Added a new staff [ ID = 1234334] dasdasdas aaaaaasdfgk to the staff list', '2022-12-23 11:03:23');
INSERT INTO `logs` (`id`, `user`, `user_id`, `action_made`, `date_created`) VALUES
(668, ' Admin', 1001, 'Deleted the staff [ ID = 1234334] dasdasdas aaaaaasdfgk in the staff list', '2022-12-23 11:03:31'),
(669, ' Admin', 1001, 'Added a new staff [ ID = 1234334] dasdsdasd sadasd to the staff list', '2022-12-23 11:07:45'),
(670, ' Admin', 1001, 'Deleted the staff [ ID = 1234334] dasdsdasd sadasd in the staff list', '2022-12-23 11:09:36'),
(671, ' Admin', 1001, 'Added a new staff [ ID = adsdas] dasdasd sadasdsad to the staff list', '2022-12-23 11:09:52'),
(672, ' Admin', 1001, 'Updated the details of staff [ ID = 2000257868] Chris Bennan', '2022-12-23 12:12:43'),
(673, ' Admin', 1001, 'Updated the details of staff [ ID = 2000257868] Chris Bennan', '2022-12-23 12:12:56'),
(674, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-23 19:17:11'),
(675, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-23 19:17:29'),
(676, 'Guidance', 1001, 'Logged out', '2022-12-23 14:42:48'),
(677, 'Guidance', 1001, 'Logged in the system', '2022-12-23 14:44:11'),
(678, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:06:46'),
(679, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:07:24'),
(680, ' Admin', 1001, 'Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list', '2022-12-23 22:07:48'),
(681, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:08:05'),
(682, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:12:24'),
(683, 'Guidance', 1001, 'Logged out', '2022-12-23 15:12:35'),
(684, 'Guidance', 1001, 'Logged in the system', '2022-12-23 15:12:58'),
(685, 'Guidance', 1001, 'Logged out', '2022-12-23 15:27:52'),
(686, 'Guidance', 1001, 'Logged in the system', '2022-12-23 15:28:00'),
(687, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-23 22:28:17'),
(688, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:41:06'),
(689, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-23 22:41:21'),
(690, 'Guidance', 1001, 'Logged out', '2022-12-23 17:00:06'),
(691, 'Guidance', 1001, 'Logged in the system', '2022-12-23 17:00:10'),
(692, 'Guidance', 1001, 'Logged out', '2022-12-23 17:00:21'),
(693, 'Guidance', 1001, 'Logged in the system', '2022-12-23 17:00:26'),
(694, ' Admin', 1001, 'Updated an announcement', '2022-12-23 17:00:44'),
(695, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-24 00:10:45'),
(696, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-24 00:11:10'),
(697, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-24 00:11:37'),
(698, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-24 00:12:04'),
(699, ' Admin', 1001, 'Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list', '2022-12-24 00:12:36'),
(700, ' Admin', 1001, 'Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list', '2022-12-24 00:19:31'),
(701, 'Guidance', 1001, 'Logged out', '2022-12-23 17:40:02'),
(702, 'Guidance', 1001, 'Logged in the system', '2022-12-23 17:40:08'),
(703, 'Guidance', 1001, 'Logged out', '2022-12-23 17:44:19'),
(704, 'Staff', 2000257868, 'Logged in the system', '2022-12-23 17:44:29'),
(705, 'Staff', 2000257868, 'Logged out', '2022-12-23 17:59:01'),
(706, 'Guidance', 1001, 'Logged in the system', '2022-12-23 17:59:06'),
(707, 'Guidance', 1001, 'Logged out', '2022-12-23 18:04:03'),
(708, 'Guidance', 1001, 'Logged in the system', '2022-12-23 18:04:05'),
(709, 'Guidance', 1001, 'Logged in the system', '2022-12-24 06:42:33'),
(710, 'Guidance', 1001, 'Logged out', '2022-12-24 06:44:20'),
(711, 'Guidance', 1001, 'Logged in the system', '2022-12-24 06:45:36'),
(712, 'Guidance', 1001, 'Logged out', '2022-12-24 06:45:56'),
(713, 'Staff', 2000257868, 'Logged in the system', '2022-12-24 06:46:02'),
(714, 'Staff', 2000257868, 'Logged out', '2022-12-24 07:47:55'),
(715, 'Guidance', 1001, 'Logged in the system', '2022-12-24 17:54:59'),
(716, 'Guidance', 1001, 'Logged out', '2022-12-24 17:55:03'),
(717, 'Guidance', 1001, 'Logged in the system', '2022-12-24 17:55:33'),
(718, 'Guidance', 1001, 'Logged in the system', '2022-12-24 17:55:49'),
(719, 'Guidance', 1001, 'Logged out', '2022-12-24 17:56:40'),
(720, 'Guidance', 1001, 'Logged in the system', '2022-12-24 17:56:46'),
(721, 'Guidance', 1001, 'Logged out', '2022-12-24 17:57:05'),
(722, 'Guidance', 1001, 'Logged in the system', '2022-12-24 17:57:10'),
(723, 'Guidance', 1001, 'Logged in the system', '2022-12-25 12:30:09'),
(724, 'Guidance', 1001, 'Logged out', '2022-12-25 12:30:13'),
(725, 'Guidance', 1001, 'Logged in the system', '2022-12-25 12:30:17'),
(726, 'Guidance', 1001, 'Logged in the system', '2022-12-25 12:42:38'),
(727, 'Guidance', 1001, 'Logged out', '2022-12-25 13:08:03'),
(728, 'Guidance', 1001, 'Logged in the system', '2022-12-25 13:12:08'),
(729, 'Guidance', 1001, 'Logged out', '2022-12-25 13:17:26'),
(730, 'Guidance', 1001, 'Logged in the system', '2022-12-25 13:17:31'),
(731, 'Guidance', 1001, 'Logged out', '2022-12-25 13:51:53'),
(732, 'Guidance', 1001, 'Logged in the system', '2022-12-25 13:51:56'),
(733, 'Guidance', 1001, 'Logged in the system', '2022-12-25 15:03:44'),
(734, 'Guidance', 1001, 'Logged in the system', '2022-12-25 16:55:17'),
(735, 'Guidance', 1001, 'Logged in the system', '2022-12-26 10:44:23'),
(736, 'Guidance', 1001, 'Logged in the system', '2022-12-26 17:00:44'),
(737, 'Guidance', 1001, 'Logged out', '2022-12-26 17:23:17'),
(738, 'Guidance', 1001, 'Logged in the system', '2022-12-26 17:23:22'),
(739, 'Guidance', 1001, 'Logged in the system', '2022-12-26 17:31:20'),
(740, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:18:31'),
(741, ' Admin', 1001, 'Added a new offense on [ ID = 2000257346] Gefel Abadies to the offense list', '2022-12-27 09:19:56'),
(742, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-27 09:20:11'),
(743, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-27 09:20:24'),
(744, ' Admin', 1001, 'Added a new offense on [ ID = 2000257346] Gefel Abadies to the offense list', '2022-12-27 09:21:06'),
(745, ' Admin', 1001, 'Updated the offense of [ ID = ]  ', '2022-12-27 09:21:20'),
(746, 'Guidance', 1001, 'Logged out', '2022-12-27 02:21:43'),
(747, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:21:54'),
(748, ' Admin', 1001, 'Added a new student [ ID = 2000092923] Abigail Nazal to the students list', '2022-12-27 02:22:26'),
(749, 'Guidance', 1001, 'Logged out', '2022-12-27 02:28:46'),
(750, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:29:03'),
(751, 'Guidance', 1001, 'Logged out', '2022-12-27 02:29:06'),
(752, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:29:18'),
(753, '', 2000092923, 'Individual Inventory Added by [ ID = 2000092923] Abigail Nazal', '2022-12-27 02:33:51'),
(754, 'Guidance', 1001, 'Logged out', '2022-12-27 02:34:21'),
(755, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:34:48'),
(756, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-27 02:36:28'),
(757, 'Guidance', 1001, 'Logged out', '2022-12-27 02:36:42'),
(758, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:36:49'),
(759, 'Guidance', 1001, 'Logged out', '2022-12-27 02:37:38'),
(760, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:37:45'),
(761, 'Guidance', 1001, 'Logged out', '2022-12-27 02:37:50'),
(762, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:39:17'),
(763, 'Guidance', 1001, 'Logged out', '2022-12-27 02:39:26'),
(764, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:39:32'),
(765, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-27 02:41:32'),
(766, 'Guidance', 1001, 'Logged out', '2022-12-27 02:42:20'),
(767, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:42:25'),
(768, 'Guidance', 1001, 'Logged out', '2022-12-27 02:44:16'),
(769, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:44:21'),
(770, 'Guidance', 1001, 'Logged out', '2022-12-27 02:44:32'),
(771, 'Guidance', 1001, 'Logged in the system', '2022-12-27 02:44:36'),
(772, 'Guidance', 1001, 'Logged in the system', '2022-12-27 04:39:47'),
(773, 'Guidance', 1001, 'Logged out', '2022-12-27 04:39:57'),
(774, 'Guidance', 1001, 'Logged in the system', '2022-12-27 04:52:05'),
(775, ' Admin', 1001, 'Added a new offense on [ ID = 2000245727] Rowella Bangeles to the offense list', '2022-12-27 11:53:06'),
(776, ' Admin', 1001, 'Added a new announcement', '2022-12-27 04:53:55'),
(777, 'Guidance', 1001, 'Logged out', '2022-12-27 05:03:03'),
(778, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:03:08'),
(779, 'Guidance', 1001, 'Logged out', '2022-12-27 05:03:24'),
(780, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:03:30'),
(781, 'Guidance', 1001, 'Logged out', '2022-12-27 05:04:09'),
(782, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:04:14'),
(783, 'Guidance', 1001, 'Logged out', '2022-12-27 05:04:41'),
(784, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:04:46'),
(785, ' Admin', 1001, 'Added a new offense on [ ID = 2000092923] Abigail Nazal to the offense list', '2022-12-27 12:07:58'),
(786, 'Guidance', 1001, 'Logged out', '2022-12-27 05:09:57'),
(787, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:10:02'),
(788, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-27 05:11:08'),
(789, 'Guidance', 1001, 'Logged out', '2022-12-27 05:11:26'),
(790, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:11:30'),
(791, 'Guidance', 1001, 'Logged in the system', '2022-12-27 05:41:32'),
(792, 'Guidance', 1001, 'Logged in the system', '2022-12-27 08:09:28'),
(793, 'Guidance', 1001, 'Logged out', '2022-12-27 09:42:59'),
(794, 'Guidance', 1001, 'Logged in the system', '2022-12-27 09:43:02'),
(795, 'Guidance', 1001, 'Logged in the system', '2022-12-27 09:44:42'),
(796, 'Guidance', 1001, 'Logged in the system', '2022-12-27 10:49:06'),
(797, 'Guidance', 1001, 'Logged out', '2022-12-27 10:56:58'),
(798, 'Guidance', 1001, 'Logged in the system', '2022-12-27 10:57:41'),
(799, 'Guidance', 1001, 'Logged out', '2022-12-27 12:05:07'),
(800, 'Guidance', 1001, 'Logged in the system', '2022-12-27 12:05:11'),
(801, 'Guidance', 1001, 'Logged in the system', '2022-12-27 15:54:48'),
(802, 'Guidance', 1001, 'Logged out', '2022-12-27 16:35:58'),
(803, 'Staff', 2000257868, 'Logged in the system', '2022-12-27 16:36:24'),
(804, 'Staff', 2000257868, 'Logged out', '2022-12-27 16:39:26'),
(805, 'Staff', 2000257868, 'Logged in the system', '2022-12-27 16:39:31'),
(806, 'Staff', 2000257868, 'Logged out', '2022-12-27 16:40:13'),
(807, 'Staff', 2000257868, 'Logged in the system', '2022-12-27 16:41:02'),
(808, 'Staff', 2000257868, 'Logged out', '2022-12-27 16:41:46'),
(809, 'Guidance', 1001, 'Logged in the system', '2022-12-27 16:42:22'),
(810, 'Guidance', 1001, 'Logged out', '2022-12-27 17:52:33'),
(811, 'Guidance', 1001, 'Logged in the system', '2022-12-27 17:57:05'),
(812, 'Guidance', 1001, 'Logged in the system', '2022-12-28 07:05:14'),
(813, 'Guidance', 1001, 'Logged in the system', '2022-12-28 08:36:11'),
(814, 'Guidance', 1001, 'Logged out', '2022-12-28 09:22:09'),
(815, 'Guidance', 1001, 'Logged in the system', '2022-12-28 09:23:25'),
(816, 'Student', 1001, 'Added a new referral [ ID = 356]   to the referral list', '2022-12-28 09:23:55'),
(817, 'Guidance', 1001, 'Logged out', '2022-12-28 09:24:37'),
(818, 'Guidance', 1001, 'Logged in the system', '2022-12-28 09:25:26'),
(819, 'Guidance', 1001, 'Logged out', '2022-12-28 11:49:36'),
(820, 'Guidance', 1001, 'Logged in the system', '2022-12-28 11:49:58'),
(821, 'Student', 1001, 'Added a new referral [ ID = 355]   to the referral list', '2022-12-28 11:54:12'),
(822, 'Guidance', 1001, 'Logged out', '2022-12-28 11:54:22'),
(823, 'Guidance', 1001, 'Logged in the system', '2022-12-28 11:54:27'),
(824, 'Guidance', 1001, 'Logged out', '2022-12-28 11:55:17'),
(825, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 11:55:21'),
(826, 'Staff', 2000253423, 'Logged out', '2022-12-28 11:59:53'),
(827, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 11:59:57'),
(828, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:00:40'),
(829, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:00:49'),
(830, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:02:28'),
(831, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:02:33'),
(832, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:03:47'),
(833, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:03:56'),
(834, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:04:22'),
(835, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:04:26'),
(836, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:04:28'),
(837, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:05:01'),
(838, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:05:31'),
(839, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:06:29'),
(840, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 12:06:33'),
(841, 'Staff', 2000253423, 'Logged out', '2022-12-28 12:08:21'),
(842, 'Guidance', 1001, 'Logged in the system', '2022-12-28 12:08:26'),
(843, 'Guidance', 1001, 'Logged out', '2022-12-28 12:43:25'),
(844, 'Staff', 2000251944, 'Logged in the system', '2022-12-28 12:43:49'),
(845, 'Staff', 2000251944, 'Logged out', '2022-12-28 12:46:06'),
(846, 'Staff', 2000251944, 'Logged in the system', '2022-12-28 12:46:13'),
(847, 'Staff', 2000251944, 'Logged out', '2022-12-28 12:46:42'),
(848, 'Guidance', 1001, 'Logged in the system', '2022-12-28 12:46:48'),
(849, 'Guidance', 1001, 'Logged out', '2022-12-28 12:48:23'),
(850, 'Guidance', 1001, 'Logged in the system', '2022-12-28 12:48:27'),
(851, 'Student', 1001, 'Added a new referral [ ID = 357]   to the referral list', '2022-12-28 12:49:15'),
(852, 'Guidance', 1001, 'Logged out', '2022-12-28 12:49:28'),
(853, 'Guidance', 1001, 'Logged in the system', '2022-12-28 12:49:34'),
(854, 'Guidance', 1001, 'Logged out', '2022-12-28 14:50:19'),
(855, 'Guidance', 1001, 'Logged in the system', '2022-12-28 14:51:12'),
(856, 'Guidance', 1001, 'Logged out', '2022-12-28 14:51:24'),
(857, 'Guidance', 1001, 'Logged in the system', '2022-12-28 14:51:29'),
(858, 'Guidance', 1001, 'Logged out', '2022-12-28 15:00:21'),
(859, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 15:00:33'),
(860, 'Staff', 2000253423, 'Logged out', '2022-12-28 15:01:15'),
(861, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:01:21'),
(862, 'Guidance', 1001, 'Logged out', '2022-12-28 15:41:51'),
(863, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:41:57'),
(864, 'Guidance', 1001, 'Logged out', '2022-12-28 15:42:17'),
(865, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:42:23'),
(866, 'Guidance', 1001, 'Logged out', '2022-12-28 15:43:41'),
(867, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:43:47'),
(868, 'Guidance', 1001, 'Logged out', '2022-12-28 15:44:32'),
(869, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:44:38'),
(870, 'Guidance', 1001, 'Logged out', '2022-12-28 15:45:49'),
(871, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:45:54'),
(872, 'Guidance', 1001, 'Logged out', '2022-12-28 15:46:19'),
(873, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:46:40'),
(874, 'Guidance', 1001, 'Logged out', '2022-12-28 15:48:37'),
(875, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:49:00'),
(876, 'Guidance', 1001, 'Logged out', '2022-12-28 15:49:28'),
(877, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 15:49:38'),
(878, 'Staff', 2000253423, 'Logged out', '2022-12-28 15:50:12'),
(879, 'Guidance', 1001, 'Logged in the system', '2022-12-28 15:50:17'),
(880, 'Guidance', 1001, 'Logged out', '2022-12-28 16:49:53'),
(881, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 16:50:02'),
(882, 'Staff', 2000253423, 'Logged out', '2022-12-28 17:10:55'),
(883, 'Staff', 2000253423, 'Logged in the system', '2022-12-28 17:11:00'),
(884, 'Staff', 2000253423, 'Logged out', '2022-12-29 13:47:43'),
(885, 'Guidance', 1001, 'Logged in the system', '2022-12-29 13:48:46'),
(886, 'Guidance', 1001, 'Logged out', '2022-12-29 13:55:51'),
(887, 'Guidance', 1001, 'Logged in the system', '2022-12-29 13:56:00'),
(888, 'Guidance', 1001, 'Logged out', '2022-12-29 13:57:05'),
(889, 'Guidance', 1001, 'Logged in the system', '2022-12-29 13:57:10'),
(890, 'Guidance', 1001, 'Logged out', '2022-12-29 14:02:14'),
(891, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:02:31'),
(892, 'Guidance', 1001, 'Logged out', '2022-12-29 14:02:42'),
(893, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 14:02:46'),
(894, 'Staff', 2000253423, 'Logged out', '2022-12-29 14:03:19'),
(895, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:03:24'),
(896, ' Admin', 1001, 'Added a new offense on [ ID = 2000232823] Marqueyza Acub to the offense list', '2022-12-29 21:16:25'),
(897, 'Guidance', 1001, 'Logged out', '2022-12-29 14:17:25'),
(898, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:18:12'),
(899, 'Guidance', 1001, 'Logged out', '2022-12-29 14:18:27'),
(900, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 14:18:34'),
(901, 'Staff', 2000253423, 'Logged out', '2022-12-29 14:18:44'),
(902, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 14:21:24'),
(903, 'Staff', 2000253423, 'Logged out', '2022-12-29 14:28:12'),
(904, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:28:21'),
(905, 'Guidance', 1001, 'Logged out', '2022-12-29 14:50:08'),
(906, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:50:24'),
(907, 'Guidance', 1001, 'Logged out', '2022-12-29 14:51:26'),
(908, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:51:31'),
(909, 'Guidance', 1001, 'Logged out', '2022-12-29 14:55:02'),
(910, 'Guidance', 1001, 'Logged in the system', '2022-12-29 14:55:05'),
(911, 'Guidance', 1001, 'Logged out', '2022-12-29 15:06:36'),
(912, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:06:47'),
(913, 'Guidance', 1001, 'Logged out', '2022-12-29 15:06:59'),
(914, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:07:04'),
(915, 'Guidance', 1001, 'Logged out', '2022-12-29 15:21:28'),
(916, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:21:44'),
(917, 'Guidance', 1001, 'Logged out', '2022-12-29 15:22:00'),
(918, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:22:04'),
(919, 'Guidance', 1001, 'Logged out', '2022-12-29 15:22:12'),
(920, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:22:16'),
(921, 'Guidance', 1001, 'Logged out', '2022-12-29 15:32:23'),
(922, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:32:29'),
(923, 'Guidance', 1001, 'Logged out', '2022-12-29 15:32:45'),
(924, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:32:52'),
(925, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:41:40'),
(926, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:41:49'),
(927, 'Guidance', 1001, 'Logged out', '2022-12-29 15:42:14'),
(928, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:42:20'),
(929, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:43:18'),
(930, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:43:23'),
(931, 'Guidance', 1001, 'Logged out', '2022-12-29 15:47:04'),
(932, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:47:10'),
(933, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:48:28'),
(934, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:48:33'),
(935, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:48:39'),
(936, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:48:43'),
(937, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:48:49'),
(938, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:48:53'),
(939, 'Guidance', 1001, 'Logged out', '2022-12-29 15:49:13'),
(940, 'Guidance', 1001, 'Logged in the system', '2022-12-29 15:49:18'),
(941, 'Guidance', 1001, 'Logged out', '2022-12-29 15:53:19'),
(942, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 15:53:27'),
(943, 'Staff', 2000253423, 'Logged out', '2022-12-29 15:53:56'),
(944, 'Guidance', 1001, 'Logged in the system', '2022-12-29 16:21:00'),
(945, 'Guidance', 1001, 'Logged out', '2022-12-29 17:07:37'),
(946, 'Guidance', 1001, 'Logged in the system', '2022-12-29 17:07:47'),
(947, 'Guidance', 1001, 'Logged out', '2022-12-29 17:07:50'),
(948, 'Guidance', 1001, 'Logged in the system', '2022-12-29 17:07:54'),
(949, 'Guidance', 1001, 'Logged out', '2022-12-29 17:13:30'),
(950, 'Guidance', 1001, 'Logged in the system', '2022-12-29 17:13:36'),
(951, 'Guidance', 1001, 'Logged out', '2022-12-29 17:13:47'),
(952, 'Guidance', 1001, 'Logged in the system', '2022-12-29 17:13:55'),
(953, 'Guidance', 1001, 'Logged out', '2022-12-29 17:20:13'),
(954, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 17:20:22'),
(955, 'Staff', 2000253423, 'Logged out', '2022-12-29 17:28:00'),
(956, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 17:28:04'),
(957, 'Staff', 2000253423, 'Logged out', '2022-12-29 17:29:28'),
(958, 'Staff', 2000253423, 'Logged in the system', '2022-12-29 17:29:31'),
(959, 'Staff', 2000253423, 'Logged out', '2022-12-30 06:49:18'),
(960, 'Guidance', 1001, 'Logged in the system', '2022-12-30 06:49:38');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `from_user` int(20) NOT NULL,
  `to_user` int(20) NOT NULL,
  `Type` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `info_ID` int(11) NOT NULL,
  `isRead` int(1) NOT NULL,
  `notif_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `from_user`, `to_user`, `Type`, `info_ID`, `isRead`, `notif_date`) VALUES
(456, 2000232823, 1001, 'Reminder', 128, 1, '2022-12-29 20:55:43'),
(457, 1001, 2000232823, 'Reminder', 128, 1, '2022-12-29 20:55:43'),
(458, 2000253423, 1001, 'Reminder', 133, 1, '2022-12-29 20:55:43'),
(459, 1001, 2000253423, 'Reminder', 133, 1, '2022-12-29 20:55:43'),
(460, 1001, 2000232823, 'Offense', 78, 1, '2022-12-29 21:16:25');

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
  `sanction_info` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offense_monitoring`
--

INSERT INTO `offense_monitoring` (`id`, `student_id`, `stud_name`, `offense_type`, `description`, `date_created`, `sanction`, `start_date`, `end_date`, `sanction_info`, `status`, `created_at`, `updated_at`) VALUES
(71, '2000232823', 'Marqueyza Acub', 'Minor Offense', 'Bullying a student', '2022-12-23', 'Clean toilet for 3 days', '2022-12-24', '2022-12-25', 'Sanction Ended', 'Inactive', '2022-12-23 16:12:04', '2022-12-26 17:44:25'),
(72, '2000245727', 'Rowella Bangeles', 'Minor Offense', 'Bullying a student', '2022-12-23', 'Clean toilet for 3 days', '2022-12-20', '2022-12-23', 'Sanction Ended', 'Inactive', '2022-12-23 16:12:36', '2022-12-24 00:12:36'),
(73, '2000245727', 'Rowella Bangeles', 'Minor Offense', 'Bullying a student', '2022-12-23', 'Clean toilet for 5 days', '2022-12-18', '2022-12-21', 'Sanction Ended', 'Inactive', '2022-12-23 16:19:31', '2022-12-24 00:19:31'),
(74, '2000257346', 'Gefel Abadies', 'Major Offense A', 'Cheating', '2022-12-27', 'Suspended for 3 days', '2022-12-28', '2022-12-31', '2 days', 'Active', '2022-12-27 01:19:56', '2022-12-29 21:16:13'),
(75, '2000257346', 'Gefel Abadies', 'Minor Offense', 'Bullying a student', '2022-12-27', 'suspended for 3 days', '2022-12-24', '1970-01-01', 'Sanction Ended', 'Inactive', '2022-12-27 01:21:06', '2022-12-27 09:21:06'),
(76, '2000245727', 'Rowella Bangeles', 'Minor Offense', 'vaping around school premises', '2022-12-27', 'suspended for 3 days', '2022-12-16', '2022-12-22', 'Sanction Ended', 'Inactive', '2022-12-27 03:53:06', '2022-12-27 11:53:06'),
(77, '2000092923', 'Abigail Nazal', 'Minor Offense', 'Bullying a student', '2022-12-27', 'Clean toilet for 3 days', '2022-12-26', '2022-12-29', '', 'Active', '2022-12-27 04:07:58', '2022-12-29 21:16:13'),
(78, '2000232823', 'Marqueyza Acub', 'Major Offense B', 'nagtapon ng tae', '2022-12-29', 'linisin yung tae', '2022-12-28', '2022-12-31', '2 days', 'Active', '2022-12-29 13:16:25', '2022-12-29 21:16:25');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Cancel_Reason` varchar(200) DEFAULT NULL,
  `Cancel_Date` date DEFAULT NULL,
  `ref_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refferals`
--

INSERT INTO `refferals` (`ref_id`, `reffered_user`, `source`, `reffered_by`, `reffered_date`, `nature`, `reason`, `actions`, `remarks`, `Cancel_Reason`, `Cancel_Date`, `ref_status`, `updated_at`) VALUES
(150, 357, 'Student', 373, '2022-12-27', ' Academic, Career', 'di alam anong kukunin na course', 'kinausap ko sya', 'being problematic', NULL, NULL, 'Complete referral', '2022-12-27 04:12:39'),
(151, 355, 'Student', 373, '2022-12-27', ' Academic', 'Help ko po sya regarding with her academic course', 'nagusap kami ', 'di nakikinig', NULL, NULL, 'Cancelled referral', '2022-12-27 04:08:35'),
(152, 355, 'Student', 373, '2022-12-27', ' Academic', 'she is having a problem with her academics', 'kinausap ko sya', '', NULL, NULL, 'Cancelled referral', '2022-12-28 08:21:48'),
(153, 356, 'Student', 357, '2022-12-28', ' Academic, Career, Personal, Crisis', 'Wala lang', 'tapon', 'basura', NULL, NULL, 'Cancelled referral', '2022-12-28 08:55:21'),
(154, 355, 'Guidance Counselor', 357, '2022-12-28', 'Academic', 'dasdsasf', 'dasdsad', 'sadsadsa', NULL, NULL, 'Cancelled', '2022-12-28 11:48:40'),
(155, 357, 'Student', 357, '2022-12-28', ' Academic, Career, Personal, Crisis', 'sdasasfa', 'sfdsfda', 'asdsadas', NULL, NULL, 'Pending', '2022-12-28 11:49:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `refferals_nature`
--

INSERT INTO `refferals_nature` (`ref_id2`, `reffered_user2`, `source2`, `reffered_by2`, `reffered_date2`, `nature2`, `reason2`, `actions2`, `remarks2`, `ref_status2`, `updated_at2`) VALUES
(94, 357, 'Student', 373, '2022-12-27', 'Academic', 'di alam anong kukunin na course', 'kinausap ko sya', 'being problematic', 'Pending', '2022-12-27 01:36:27'),
(95, 357, 'Student', 373, '2022-12-27', 'Career', 'di alam anong kukunin na course', 'kinausap ko sya', 'being problematic', 'Pending', '2022-12-27 01:36:28'),
(96, 355, 'Student', 373, '2022-12-27', 'Academic', 'Help ko po sya regarding with her academic course', 'nagusap kami ', 'di nakikinig', 'Pending', '2022-12-27 01:41:32'),
(97, 355, 'Student', 373, '2022-12-27', 'Academic', 'she is having a problem with her academics', 'kinausap ko sya', '', 'Pending', '2022-12-27 04:11:07'),
(98, 356, 'Student', 357, '2022-12-28', 'Academic', 'Wala lang', 'tapon', 'basura', 'Pending', '2022-12-28 08:23:55'),
(99, 356, 'Student', 357, '2022-12-28', 'Career', 'Wala lang', 'tapon', 'basura', 'Pending', '2022-12-28 08:23:55'),
(100, 356, 'Student', 357, '2022-12-28', 'Personal', 'Wala lang', 'tapon', 'basura', 'Pending', '2022-12-28 08:23:55'),
(101, 356, 'Student', 357, '2022-12-28', 'Crisis', 'Wala lang', 'tapon', 'basura', 'Pending', '2022-12-28 08:23:55'),
(102, 355, 'Student', 357, '2022-12-28', 'Academic', 'dasdsasf', 'dasdsad', 'sadsadsa', 'Pending', '2022-12-28 10:54:12'),
(103, 355, 'Student', 357, '2022-12-28', 'Career', 'dasdsasf', 'dasdsad', 'sadsadsa', 'Pending', '2022-12-28 10:54:12'),
(104, 355, 'Student', 357, '2022-12-28', 'Personal', 'dasdsasf', 'dasdsad', 'sadsadsa', 'Pending', '2022-12-28 10:54:12'),
(105, 355, 'Student', 357, '2022-12-28', 'Crisis', 'dasdsasf', 'dasdsad', 'sadsadsa', 'Pending', '2022-12-28 10:54:12'),
(106, 357, 'Student', 357, '2022-12-28', 'Academic', 'sdasasfa', 'sfdsfda', 'asdsadas', 'Pending', '2022-12-28 11:49:15'),
(107, 357, 'Student', 357, '2022-12-28', 'Career', 'sdasasfa', 'sfdsfda', 'asdsadas', 'Pending', '2022-12-28 11:49:15'),
(108, 357, 'Student', 357, '2022-12-28', 'Personal', 'sdasasfa', 'sfdsfda', 'asdsadas', 'Pending', '2022-12-28 11:49:15'),
(109, 357, 'Student', 357, '2022-12-28', 'Crisis', 'sdasasfa', 'sfdsfda', 'asdsadas', 'Pending', '2022-12-28 11:49:15');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`id`, `sender`, `reciever`, `text_sms`, `seen_status`, `date_sent`, `group_sms`, `delete_status`) VALUES
(164, 1, 355, 'hi bangeles', 1, '2022-12-16 15:31:01', 355, 0),
(165, 355, 1, 'hi guidance counselor', 1, '2022-12-16 15:31:54', 355, 0),
(166, 355, 1, 'hi guidance counselor', 1, '2022-12-25 00:57:02', 355, 0),
(167, 1, 355, 'hi guidance', 1, '2022-12-27 12:09:29', 355, 0),
(168, 1, 355, 'hi bangeles', 1, '2022-12-27 12:09:35', 355, 0),
(169, 1, 373, 'Hi abigail', 1, '2022-12-27 12:09:53', 373, 0),
(170, 1, 355, 'dfsdfsdfd', 1, '2022-12-29 21:54:28', 355, 0),
(171, 353, 1, 'hello', 1, '2022-12-29 22:33:02', 353, 0),
(172, 1, 353, 'hakdog', 1, '2022-12-29 22:42:01', 353, 0),
(173, 1, 353, 'ha', 1, '2022-12-29 22:42:10', 353, 0);

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
  `profile_picture` varchar(999) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `limit_app` int(100) NOT NULL DEFAULT 0,
  `sms_status` int(100) NOT NULL DEFAULT 0,
  `active_status` int(100) NOT NULL DEFAULT 0,
  `typing` int(11) NOT NULL DEFAULT 0,
  `inv_act` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `gender`, `date_of_birth`, `department`, `dep_position`, `program`, `level`, `position`, `status`, `profile_picture`, `email`, `password`, `role`, `updated_at`, `limit_app`, `sms_status`, `active_status`, `typing`, `inv_act`) VALUES
(1, 1001, 'Castor', 'Mary Faith', '', 'Angeles City', '09123456789', 'Female', '0000-00-00', '', 'Guidance Counselor', '', '', 'Guidance', '', 'C:\\xampp2\\htdocs\\images\\profilesavatar2.jpg', 'maryfaith.castor@angeles.sti.edu', 'MFCastor', 1, '2022-12-29 13:01:18', 0, 1, 0, 0, 0),
(349, 2000257868, 'Bennan', 'Chris', '', 'PORAC', '09613688865', '', '0000-00-00', 'Academics', 'Utility', '', '', 'Staff', 'Active', '', 'bennan.257868@angeles.sti.edu.ph', 'CB257868', 2, '2022-12-25 13:01:21', 0, 0, 0, 0, 0),
(350, 2000251944, 'Dela Cruz', 'Katrina', 'Womax', 'ANGELES', '09195591329', '', '0000-00-00', 'Academics', 'Kitchen Custodian', '', '', 'Staff', 'Active', '', 'delacruz.251944@angeles.sti.edu.ph', 'KDC251944', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(351, 2000224235, 'Guzman', 'Rhodes', 'Daniella', 'MAGALANG', '09195591329', '', '0000-00-00', 'Academics', 'Lab Custodian', '', '', 'Staff', 'Active', '', 'guzman.224235@angeles.sti.edu.ph', 'RG224235', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(352, 2000251942, 'Williams', 'Jane', 'George', '272 SINURA AVENUE ', '09195591329', '', '0000-00-00', 'Administrative', 'Administrative Officer', '', '', 'Staff', 'Active', '', 'williams.251942@angeles.sti.edu.ph', 'JW251942', 2, '2022-12-16 06:08:57', 0, 0, 0, 0, 0),
(353, 2000253423, 'Buna', 'David', 'Santos', '121 SAN SIMON, MABALACAT, PAMPANGA', '09195591329', '', '0000-00-00', 'Administrative', 'Registrar', '', '', 'Staff', 'Active', 'C:\\xampp2\\htdocs\\images\\profilesavatar3.jpg', 'buna.253423@angeles.sti.edu.ph', 'DB253423', 2, '2022-12-29 13:03:00', 1, 0, 0, 0, 0),
(354, 2000432424, 'Parker', 'Kevin', '', '123 PAMPANG AVENUE BALIBAGO', '09195591329', '', '0000-00-00', 'Administrative', 'Record', '', '', 'Staff', 'Active', '', 'parker.432424@angeles.sti.edu.ph', 'KP432424', 2, '2022-12-22 16:22:58', 0, 0, 0, 0, 0),
(355, 2000245727, 'Bangeles', 'Rowella', 'Mallari', '213 sta ana st. angeles city', '09121312331', '', '0000-00-00', '', '', 'HUMMS', 'Grade 11', 'Student', 'Active', 'C:\\xampp2\\htdocs\\images\\profilesavatar7.jpg', 'bangeles.245727@angeles.sti.edu.ph', 'RB245727', 3, '2022-12-29 13:51:23', 1, 0, 0, 0, 1),
(356, 2000258351, 'Baquiran', 'Charmaine', ' ', 'B11 L13 PHASE 4 COBAL  ST. MANSFIELD RESIDENCES STO DOMINGO, ANGELES CITY    ', '09123456789', '', '0000-00-00', '', '', 'CUART', 'Grade 11', 'Student', 'Active', '', 'baquiran.258351@angeles.sti.edu.ph', 'CB258351', 3, '2022-12-28 08:55:21', 0, 0, 0, 0, 0),
(357, 2000232823, 'Acub', 'Marqueyza', 'Butic', '03 LAURA ST. BRGY. LAKANDULA       MABALACAT CITY', '09217112098', '', '0000-00-00', '', '', 'MAWD', 'Grade 12', 'Student', 'Active', 'C:\\xampp2\\htdocs\\images\\profilesavatar1.jpg', 'acub.232823@angeles.sti.edu.ph', 'MA232823', 3, '2022-12-29 13:02:39', 0, 0, 0, 0, 1),
(358, 2000232816, 'Acub', 'Rina Elhym', 'Butic', '03 LAURA ST. BRGY LAKANDULA       MABALACAT CITY', '09217238346', '', '0000-00-00', '', '', 'CCTECH', 'Grade 12', 'Student', 'Active', '', 'acub.232816@angeles.sti.edu.ph', 'REA232816', 3, '2022-12-22 15:58:18', 0, 0, 0, 0, 0),
(359, 2000257346, 'Abadies', 'Gefel', 'Nabor', 'BLK.8 LOT 16 SOLANA FRONTERA FLAMINGO ST. SAPALIBUTAD   ANGELES', '09269979985', '', '0000-00-00', '', '', 'BSTM', '1st Year', 'Student', 'Active', '', 'abadies.257346@angeles.sti.edu.ph', 'GA257346', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(360, 2000197721, 'Abasolo', 'Richard', 'Imperial', '34-24 SARITA ST. DIAMOND SUBD.     ANGELES CITY', '09199925436', '', '0000-00-00', '', '', 'BSTM', '3rd Year', 'Student', 'Active', '', 'abasolo.197721@angeles.sti.edu.ph', 'RA197721', 3, '2022-12-23 08:37:13', 0, 0, 0, 0, 0),
(361, 2000155605, 'Abasula', 'Criselda', 'Oloya', 'B45 L65 MAPAGMALASAKIT ST. FIESTA COMMUNITIES MANIBAUG PORAC PAMP.  ', '09261696596', '', '0000-00-00', '', '', 'BSTM', '3rd Year', 'Student', 'Active', '', 'abasula.155605@angeles.sti.edu.ph', 'CA155605', 3, '2022-12-22 15:58:06', 0, 0, 0, 0, 0),
(362, 2000273259, 'Abella', 'Ella Mae', 'Ongray', '13033 PERAS ST. DAU HOMESITE     MABALACAT', '09183593384', '', '0000-00-00', '', '', 'BSTM', '1st Year', 'Student', 'Active', '', 'abella.273259@angeles.sti.edu.ph', 'EMA273259', 3, '2022-12-22 16:22:54', 0, 0, 0, 0, 0),
(363, 2000266053, 'Abog', 'Jezza', 'Reyes', 'BLK. 19 LOT 13 17 ST MRC BRGY. MAWAQUE MABALACAT   ANGELES', '09475861724', '', '0000-00-00', '', '', 'BSTM', '1st Year', 'Student', 'Active', '', 'abog.266053@angeles.sti.edu.ph', 'JA266053', 3, '2022-12-22 16:22:59', 0, 0, 0, 0, 0),
(364, 2000109278, 'Acar', 'Mark Joseph', 'Damalia', '184 IPIL-IPIL PUROK 7 PULONG MARAGUL       ANGELES CITY', '09265333300', '', '0000-00-00', '', '', 'BSIT', '2nd Year', 'Student', 'Active', '', 'acar.109278@angeles.sti.edu.ph', 'MJA109278', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(365, 2000200086, 'Alan', 'Gerald', ' ', 'BLK 19 LOT 31 ANA ST. XEVERA BRGY TABUN     MABALACAT', '09303434579', '', '0000-00-00', '', '', 'BSBAOM', '3rd Year', 'Student', 'Active', '', 'alan.200086@angeles.sti.edu.ph', 'GA200086', 3, '2022-12-22 16:29:43', 0, 0, 0, 0, 0),
(366, 2000041648, 'Alonzo', 'Ruzzel Justin', ' ', '785 MABINI STREET PLARIDEL 1 MALABANIAS       ANGELES CITY', '09752434037', '', '0000-00-00', '', '', 'BSHM', '4th Year', 'Student', 'Active', '', 'alonzo.041648@angeles.sti.edu.ph', 'RJA041648', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(367, 2000083331, 'Anciano', 'Erica Mae', 'Sotero', 'JAOVIL       ANGELES CITY', '09355832215', '', '0000-00-00', '', '', 'BSHM', '3rd Year', 'Student', 'Active', '', 'anciano.083331@angeles.sti.edu.ph', 'EMA083331', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(368, 2000080306, 'Anore', 'Justine Andrielle', 'Ocampo', '31-14 SY OROSA ST. DIAMOND SUB. BALIBAGO   ANGELES CITY', '09167416756', '', '0000-00-00', '', '', 'BSHM', '3rd Year', 'Student', 'Active', '', 'anore.080306@angeles.sti.edu.ph', 'JAA080306', 3, '2022-12-16 06:09:31', 0, 0, 0, 0, 0),
(372, 0, 'sadasdsad', 'dasdasd', 'sadasd', 'sadsadsa', 'asdasd', '', '0000-00-00', 'Academics', 'Kitchen Custodian', '', '', 'Staff', 'Active', '', 'sadasdsad.adsdas@angeles.sti.edu.ph', 'DSadsdas', 2, '2022-12-28 10:04:27', 0, 0, 0, 0, 0),
(373, 2000092923, 'Nazal', 'Abigail', 'Macales', 'Malabanias', '09182806421', NULL, NULL, '', '', 'BSIT', '4th Year', 'Student', 'Active', '', 'nazal.092923@angeles.sti.edu.ph', 'AN092923', 3, '2022-12-27 15:40:36', 0, 0, 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `appointment_history`
--
ALTER TABLE `appointment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=961;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT for table `offense_monitoring`
--
ALTER TABLE `offense_monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `personal_appointment`
--
ALTER TABLE `personal_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `refferals`
--
ALTER TABLE `refferals`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `refferals_nature`
--
ALTER TABLE `refferals_nature`
  MODIFY `ref_id2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=374;

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
