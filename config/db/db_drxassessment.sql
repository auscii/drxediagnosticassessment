-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 03:36 PM
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
-- Database: `drxassessment`
--
CREATE DATABASE IF NOT EXISTS `drxassessment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `drxassessment`;

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_assessment`
--

CREATE TABLE `drxassessment_assessment` (
  `drxassessment_id` int(11) NOT NULL,
  `drxassessment_question1` text NOT NULL,
  `drxassessment_q1_answer_1` text NOT NULL,
  `drxassessment_q1_answer_2` text NOT NULL,
  `drxassessment_q1_answer_3` text NOT NULL,
  `drxassessment_q1_answer_4` text NOT NULL,
  `drxassessment_order` int(11) NOT NULL,
  `drxassessment_order_value` text NOT NULL,
  `drxassessment_status` int(1) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL,
  `drxassessment_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment`
--

INSERT INTO `drxassessment_assessment` (`drxassessment_id`, `drxassessment_question1`, `drxassessment_q1_answer_1`, `drxassessment_q1_answer_2`, `drxassessment_q1_answer_3`, `drxassessment_q1_answer_4`, `drxassessment_order`, `drxassessment_order_value`, `drxassessment_status`, `drxassessment_created_at`, `drxassessment_updated_at`) VALUES
(1, 'Question_1', 'q1_a', 'q1_b', 'q1_c', 'q1_d', 7, '7th', 1, '2019-06-01 05:23:43', '2019-06-01 05:24:15'),
(2, 'Question_2', 'q2_a', 'q2_b', 'q2_c', 'q2_d', 0, '', 0, '2019-06-01 05:24:39', '0000-00-00 00:00:00'),
(3, 'Question_3', 'q3_a', 'q3_b', 'q3_c', 'q3_d', 0, '', 0, '2019-06-01 05:25:06', '0000-00-00 00:00:00'),
(4, 'Question_4', 'q4_a', 'q4_b', 'q4_c', 'q4_d', 0, '', 0, '2019-06-01 05:25:30', '2019-06-01 05:26:09'),
(5, 'Question_5', 'q5_a', 'q5_b', 'q5_c', 'q5_d', 0, '', 0, '2019-06-01 05:26:00', '2019-06-01 05:26:43'),
(6, 'Question_6', 'q6_a', 'q6_b', 'q6_c', 'q6_d', 0, '', 0, '2019-06-01 05:27:02', '2019-06-01 05:27:43'),
(7, 'Question_7', 'q7_a', 'q7_b', 'q7_c', 'q7_d', 0, '', 0, '2019-06-01 05:27:25', '2019-06-01 05:28:03'),
(8, 'Question_8', 'q8_a', 'q8_b', 'q8_c', 'q8_d', 0, '', 0, '2019-06-01 05:28:29', '0000-00-00 00:00:00'),
(9, 'Question_9', 'q9_a', 'q9_b', 'q9_c', 'q9_d', 0, '', 0, '2019-06-01 05:28:59', '0000-00-00 00:00:00'),
(10, 'Question_10', 'q10_a', 'q10_b', 'q10_c', 'q10_d', 0, '', 0, '2019-06-01 05:29:36', '0000-00-00 00:00:00'),
(11, 'Question_11', 'q11_a', 'q11_b', 'q11_c', 'q11_d', 0, '', 0, '2019-06-01 05:29:52', '0000-00-00 00:00:00'),
(12, 'Question_12', 'q12_a', 'q12_b', 'q12_c', 'q12_d', 0, '', 0, '2019-06-01 05:30:13', '0000-00-00 00:00:00'),
(13, 'Question_13', 'q13_a', 'q13_b', 'q13_c', 'q13_d', 0, '', 0, '2019-06-01 05:30:51', '0000-00-00 00:00:00'),
(14, 'Question_14', 'q14_a', 'q14_b', 'q14_c', 'q14_d', 0, '', 0, '2019-06-01 05:31:26', '0000-00-00 00:00:00'),
(15, 'Question_15', 'q15_a', 'q15_b', 'q15_c', 'q15_d', 0, '', 0, '2019-06-01 05:31:52', '0000-00-00 00:00:00'),
(16, 'Question_16', 'q16_a', 'q16_b', 'q16_c', 'q16_d', 0, '', 0, '2019-06-01 05:32:10', '0000-00-00 00:00:00'),
(17, 'Question_17', 'q17_a', 'q17_b', 'q17_c', 'q17_d', 0, '', 0, '2019-06-01 05:32:24', '0000-00-00 00:00:00'),
(18, 'Question_18', 'q18_a', 'q18_b', 'q18_c', 'q18_d', 0, '', 0, '2019-06-01 05:32:39', '0000-00-00 00:00:00'),
(19, 'Question_19', 'q19_a', 'q19_b', 'q19_c', 'q19_d', 0, '', 0, '2019-06-01 05:33:05', '0000-00-00 00:00:00'),
(20, 'Question_20', 'q20_a', 'q20_b', 'q20_c', 'q20_d', 0, '', 0, '2019-06-01 05:33:18', '0000-00-00 00:00:00'),
(21, 'Question_21', 'q21_a', 'q21_b', 'q21_c', 'q21_d', 0, '', 0, '2019-06-01 05:34:24', '0000-00-00 00:00:00'),
(22, 'Question_22', 'q22_a', 'q22_b', 'q22_c', 'q22_d', 0, '', 0, '2019-06-01 05:34:51', '2019-06-01 05:35:02'),
(23, 'Question_23', 'q23_a', 'q23_b', 'q23_c', 'q23_d', 0, '', 0, '2019-06-01 05:35:37', '0000-00-00 00:00:00'),
(24, 'Question_24', 'q24_a', 'q24_b', 'q24_c', 'q24_d', 0, '', 0, '2019-06-01 05:35:50', '0000-00-00 00:00:00'),
(25, 'Question_25', 'q25_a', 'q25_b', 'q25_c', 'q25_d', 0, '', 0, '2019-06-01 05:36:00', '0000-00-00 00:00:00'),
(26, 'Question_26', 'q26_a', 'q26_b', 'q26_c', 'q26_d', 0, '', 0, '2019-06-01 05:36:43', '0000-00-00 00:00:00'),
(27, 'Question_27', 'q27_a', 'q27_b', 'q27_c', 'q27_d', 0, '', 0, '2019-06-01 05:37:02', '0000-00-00 00:00:00'),
(28, 'Question_28', 'q28_a', 'q28_b', 'q28_c', 'q28_d', 0, '', 0, '2019-06-01 05:37:16', '0000-00-00 00:00:00'),
(29, 'Question_29', 'q29_a', 'q29_b', 'q29_c', 'q29_d', 0, '', 0, '2019-06-01 05:37:43', '0000-00-00 00:00:00'),
(30, 'Question_30', 'q30_a', 'q30_b', 'q30_c', 'q30_d', 0, '', 0, '2019-06-01 05:37:54', '0000-00-00 00:00:00'),
(31, 'Question_31', 'q31_a', 'q31_b', 'q31_c', 'q31_d', 0, '', 0, '2019-06-01 05:38:04', '0000-00-00 00:00:00'),
(32, 'Question_32', 'q32_a', 'q32_b', 'q32_c', 'q32_d', 0, '', 0, '2019-06-01 05:38:15', '0000-00-00 00:00:00'),
(33, 'Question_33', 'q33_a', 'q33_b', 'q33_c', 'q33_d', 0, '', 0, '2019-06-01 05:38:27', '0000-00-00 00:00:00'),
(34, 'Question_34', 'q34_a', 'q34_b', 'q34_c', 'q34_d', 0, '', 0, '2019-06-01 05:38:39', '0000-00-00 00:00:00'),
(35, 'Question_35', 'q35_a', 'q35_b', 'q35_c', 'q35_d', 0, '', 0, '2019-06-01 05:38:56', '0000-00-00 00:00:00'),
(36, 'Question_36', 'q36_a', 'q36_b', 'q36_c', 'q36_d', 0, '', 0, '2019-06-01 05:39:26', '0000-00-00 00:00:00'),
(37, 'Question_37', 'q37_a', 'q37_b', 'q37_c', 'q37_d', 0, '', 0, '2019-06-01 05:39:40', '0000-00-00 00:00:00'),
(38, 'Question_38', 'q38_a', 'q38_b', 'q38_c', 'q38_d', 0, '', 0, '2019-06-01 05:40:09', '0000-00-00 00:00:00'),
(39, 'Question_39', 'q39_a', 'q39_b', 'q39_c', 'q39_d', 0, '', 0, '2019-06-01 05:40:22', '0000-00-00 00:00:00'),
(40, 'Question_40', 'q40_a', 'q40_b', 'q40_c', 'q40_d', 0, '', 0, '2019-06-01 05:41:54', '0000-00-00 00:00:00'),
(41, 'Question_41', 'q41_a', 'q41_b', 'q41_c', 'q41_d', 0, '', 0, '2019-06-01 05:42:18', '0000-00-00 00:00:00'),
(42, 'Question_42', 'q42_a', 'q42_b', 'q42_c', 'q42_d', 0, '', 0, '2019-06-01 05:42:29', '0000-00-00 00:00:00'),
(43, 'Question_43', 'q43_a', 'q43_b', 'q43_c', 'q43_d', 0, '', 0, '2019-06-01 05:42:41', '0000-00-00 00:00:00'),
(44, 'Question_44', 'q44_a', 'q44_b', 'q44_c', 'q44_d', 0, '', 0, '2019-06-01 05:42:53', '0000-00-00 00:00:00'),
(45, 'Question_45', 'q45_a', 'q45_b', 'q45_c', 'q45_d', 0, '', 0, '2019-06-01 05:43:04', '0000-00-00 00:00:00'),
(46, 'Question_46', 'q46_a', 'q46_b', 'q46_c', 'q46_d', 0, '', 0, '2019-06-01 05:43:15', '0000-00-00 00:00:00'),
(47, 'Question_47', 'q47_a', 'q47_b', 'q47_c', 'q47_d', 0, '', 0, '2019-06-01 05:43:25', '0000-00-00 00:00:00'),
(48, 'Question_48', 'q48_a', 'q48_b', 'q48_c', 'q48_d', 5, '5th ', 1, '2019-06-01 05:43:35', '0000-00-00 00:00:00'),
(49, 'Question_49', 'q49_a', 'q49_b', 'q49_d', 'q49_d', 0, '', 0, '2019-06-01 05:43:48', '0000-00-00 00:00:00'),
(50, 'Question_50', 'q50_a', 'q50_b', 'q50_c', 'q50_d', 0, '', 0, '2019-06-01 05:44:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_order_roles`
--

CREATE TABLE `drxassessment_order_roles` (
  `drxassessment_id` int(1) NOT NULL,
  `drxassessment_order_no` int(11) NOT NULL,
  `drxassessment_order_value` text NOT NULL,
  `drxassessment_status` int(1) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_order_roles`
--

INSERT INTO `drxassessment_order_roles` (`drxassessment_id`, `drxassessment_order_no`, `drxassessment_order_value`, `drxassessment_status`, `drxassessment_created_at`) VALUES
(1, 1, '1st', 0, '2019-06-02 20:50:29'),
(2, 2, '2nd ', 0, '2019-06-02 21:17:59'),
(3, 3, '3rd ', 0, '2019-06-02 21:33:12'),
(4, 4, '4th', 0, '2019-06-02 21:33:12'),
(5, 5, '5th ', 1, '2019-06-02 21:33:17'),
(6, 6, '6th ', 0, '2019-06-02 21:33:12'),
(7, 7, '7th', 1, '2019-06-02 21:33:22'),
(8, 8, '8th ', 0, '2019-06-02 19:56:19'),
(9, 9, '9th', 0, '2019-06-02 20:55:26'),
(10, 10, '10th ', 0, '2019-06-02 21:17:59'),
(11, 11, '11th ', 0, '2019-06-02 19:56:27'),
(12, 12, '12th', 0, '2019-06-02 20:50:29'),
(13, 13, '13th	', 0, '2019-06-02 21:04:04'),
(14, 14, '14th', 0, '2019-06-02 20:55:26'),
(15, 15, '15th', 0, '2019-06-02 20:28:33'),
(16, 16, '16th	', 0, '2019-06-02 19:56:50'),
(17, 17, '17th	', 0, '2019-06-02 20:50:29'),
(18, 18, '18th', 0, '2019-06-02 20:50:29'),
(19, 19, '19th', 0, '2019-06-02 20:55:26'),
(20, 20, '20th', 0, '2019-06-02 19:57:03'),
(21, 21, '21st', 0, '2019-06-02 19:57:11'),
(22, 22, '22nd', 0, '2019-06-02 20:33:22'),
(23, 23, '23rd', 0, '2019-06-02 19:57:24'),
(24, 24, '24th', 0, '2019-06-02 19:57:29'),
(25, 25, '25th', 0, '2019-06-02 19:57:34'),
(26, 26, '26th', 0, '2019-06-02 19:57:38'),
(27, 27, '27th', 0, '2019-06-02 19:57:43'),
(28, 28, '28th', 0, '2019-06-02 19:57:48'),
(29, 29, '29th', 0, '2019-06-02 19:57:51'),
(30, 30, '30th', 0, '2019-06-02 19:57:56'),
(31, 31, '31st', 0, '2019-06-02 19:58:01'),
(32, 32, '32nd', 0, '2019-06-02 19:58:05'),
(33, 33, '33rd', 0, '2019-06-02 19:58:09'),
(34, 34, '34th', 0, '2019-06-02 19:58:15'),
(35, 35, '35th', 0, '2019-06-02 19:58:19'),
(36, 36, '36th', 0, '2019-06-02 19:58:24'),
(37, 37, '37th', 0, '2019-06-02 19:58:30'),
(38, 38, '38th', 0, '2019-06-02 19:58:34'),
(39, 39, '39th', 0, '2019-06-02 19:58:37'),
(40, 40, '40th', 0, '2019-06-02 19:58:42'),
(41, 41, '41st', 0, '2019-06-02 19:58:47'),
(42, 42, '42nd', 0, '2019-06-02 19:58:52'),
(43, 43, '43rd', 0, '2019-06-02 19:58:58'),
(44, 44, '44th', 0, '2019-06-02 19:59:02'),
(45, 45, '45th', 0, '2019-06-02 19:59:08'),
(46, 46, '46th', 0, '2019-06-02 19:59:11'),
(47, 47, '47th', 0, '2019-06-02 19:59:16'),
(48, 48, '48th', 0, '2019-06-02 19:59:20'),
(49, 49, '49th', 0, '2019-06-02 19:59:24'),
(50, 50, '50th', 0, '2019-06-02 19:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_users`
--

CREATE TABLE `drxassessment_users` (
  `drxassessment_id` int(11) NOT NULL,
  `drxassessment_code` text NOT NULL,
  `drxassessment_name` varchar(55) NOT NULL,
  `drxassessment_contactnumber` int(55) NOT NULL,
  `drxassessment_email` varchar(55) NOT NULL,
  `drxassessment_username` varchar(55) NOT NULL,
  `drxassessment_password` varchar(55) NOT NULL,
  `drxassessment_position` varchar(55) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL,
  `drxassessment_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_users`
--

INSERT INTO `drxassessment_users` (`drxassessment_id`, `drxassessment_code`, `drxassessment_name`, `drxassessment_contactnumber`, `drxassessment_email`, `drxassessment_username`, `drxassessment_password`, `drxassessment_position`, `drxassessment_created_at`, `drxassessment_updated_at`) VALUES
(1, '', 'Carlisle Stark', 123123, 'carl@gmail.com', 'x', 'x', '5tud3nt', '2019-05-26 20:27:08', '2019-05-26 20:28:50'),
(2, '', 'admin', 123123, 'admin@admin.com', 'admin', 'admin', '4dm1n15t4t0r', '2019-05-26 20:28:25', '2019-05-26 20:28:43'),
(3, '', 'g', 12312312, 'g@g.com', 'g', 'g', '5tud3nt', '2019-05-26 20:30:08', '0000-00-00 00:00:00'),
(4, '', 'x', 2231, 'x@x.com', 'x', 'x', '5tud3nt', '2019-06-01 04:16:12', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drxassessment_assessment`
--
ALTER TABLE `drxassessment_assessment`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_order_roles`
--
ALTER TABLE `drxassessment_order_roles`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_users`
--
ALTER TABLE `drxassessment_users`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drxassessment_assessment`
--
ALTER TABLE `drxassessment_assessment`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `drxassessment_order_roles`
--
ALTER TABLE `drxassessment_order_roles`
  MODIFY `drxassessment_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `drxassessment_users`
--
ALTER TABLE `drxassessment_users`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
