-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 07:50 AM
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
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `info` varchar(500) NOT NULL,
  `nature` varchar(500) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_number` int(50) NOT NULL,
  `name` varchar(500) NOT NULL,
  `cancel_reason` varchar(150) NOT NULL,
  `meeting_link` varchar(500) NOT NULL,
  `time_start` varchar(500) NOT NULL,
  `time_end` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `app_id`, `reason`, `info`, `nature`, `status`, `date_accomplished`, `updated_at`, `id_number`, `name`, `cancel_reason`, `meeting_link`, `time_start`, `time_end`) VALUES
(81, 74, 'bully', '', '', 'Completed', '2022-12-16', '2022-12-16 07:21:56', 2000245727, '', '', '', '', ''),
(82, 74, 'bully', '', '', 'Completed', '2022-12-16', '2022-12-16 07:21:56', 2000245727, '', '', '', '', ''),
(83, 75, 'asd', '', '', 'Cancelled', '2022-12-19', '2022-12-19 17:23:53', 0, '', '', '', '', ''),
(84, 75, 'asdd', '', '', 'Cancelled', '2022-12-19', '2022-12-19 17:36:44', 0, '', '', '', '', ''),
(85, 78, '', '', '', 'Cancelled', '2022-12-20', '2022-12-20 09:46:24', 0, '', '', '', '', ''),
(86, 79, '', '', '', 'Cancelled', '0000-00-00', '2022-12-21 15:28:42', 0, '', '', '', '', ''),
(87, 80, '', '', '', 'Cancelled', '2022-12-21', '2022-12-21 15:34:27', 2000245727, '', '', '', '', ''),
(88, 81, '', '', '', 'Cancelled', '2022-12-21', '2022-12-21 16:04:26', 2000245727, '', '', '', '', ''),
(89, 82, '', '', '', 'Cancelled', '2022-12-21', '2022-12-21 16:04:29', 2000257868, '', '', '', '', ''),
(90, 83, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 08:13:53', 2000245727, '', '', '', '', ''),
(91, 84, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 13:40:16', 2000232823, '', 'fdsfsd', '', '', ''),
(92, 85, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:30:34', 2000232823, '', 'fgdfg', '', '', ''),
(93, 86, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:30:37', 2000245727, '', 'fdgfdgdfg', '', '', ''),
(94, 87, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:30:40', 2000197721, '', 'dfgdfgfdg', '', '', ''),
(95, 88, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:30:44', 2000155605, '', 'fgdfgdfgdf', '', '', ''),
(96, 89, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:30:47', 2000273259, '', 'dfgdfgdfgfd', '', '', ''),
(97, 93, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:58:09', 2000155605, '', 'sadfgbhn', '', '', ''),
(98, 90, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:58:13', 2000273259, '', 'asdgfsdafsf', '', '', ''),
(99, 91, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:58:16', 2000232823, '', 'fdfsdfsdfa', '', '', ''),
(100, 92, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 15:58:21', 2000232816, '', 'asfdfsfga', '', '', ''),
(101, 94, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:03:43', 2000273259, '', '4ytsrg', '', '', ''),
(102, 95, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:09:56', 2000266053, '', 'ythg', '', '', ''),
(103, 96, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:09:57', 2000232823, '', '', '', '', ''),
(104, 97, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:09:59', 2000273259, '', '', '', '', ''),
(105, 98, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:22:52', 2000257868, '', '', '', '', ''),
(106, 99, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:22:54', 2000273259, '', '', '', '', ''),
(107, 100, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:22:56', 2000245727, '', '', '', '', ''),
(108, 101, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:22:58', 2000432424, '', '', '', '', ''),
(109, 102, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:22:59', 2000266053, '', '', '', '', ''),
(110, 103, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:29:43', 2000200086, '', '', '', '', ''),
(111, 104, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:42:35', 2000232823, '', '', '', '', ''),
(112, 105, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:43:51', 2000232823, '', '', '', '', ''),
(113, 106, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:46:40', 2000232823, '', '', '', '', ''),
(114, 107, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 16:48:41', 2000253423, '', 'ADSSAD', '', '', ''),
(115, 108, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 17:28:02', 2000232823, '', '', '', '', ''),
(116, 110, '', '', '', 'Cancelled', '2022-12-22', '2022-12-22 18:50:14', 2000232823, '', '', '', '', ''),
(117, 110, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 07:09:23', 2000232823, '', '', '', '', ''),
(118, 110, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 07:10:57', 2000232823, '', '', '', '', ''),
(119, 109, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 07:41:12', 2000245727, '', '', '', '', ''),
(120, 110, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 07:41:14', 2000232823, '', '', '', '', ''),
(121, 111, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 08:25:30', 2000232823, '', '', '', '', ''),
(122, 111, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 08:37:11', 2000232823, '', '', '', '', ''),
(123, 112, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 08:37:13', 2000197721, '', '', '', '', ''),
(124, 113, '', '', '', 'Cancelled', '2022-12-23', '2022-12-23 16:35:51', 2000232823, '', 'dawdwadawd', '', '', ''),
(125, 114, '', '', '', 'Cancelled', '2022-12-27', '2022-12-27 01:45:04', 2000232823, '', 'needed to cater errands asap', '', '', ''),
(126, 116, 'bully', '', '', 'Cancelled', '2022-12-27', '2022-12-27 04:04:50', 2000092923, '', '', '', '', ''),
(127, 115, '', '', '', 'Cancelled', '2022-12-27', '2022-12-27 04:08:40', 2000245727, '', 'adawdwd', '', '', ''),
(128, 117, 'consultation regarding her academic problems', '', '', 'Complete referral', '2022-12-27', '2022-12-27 04:12:39', 2000232823, '', '', '', '', ''),
(129, 117, 'consultation regarding her academic problems', '', '', 'Complete referral', '2022-12-27', '2022-12-27 04:12:39', 2000232823, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_history`
--
ALTER TABLE `appointment_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment_history`
--
ALTER TABLE `appointment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
