-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2019 at 04:20 PM
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
  `drxassessment_answer` text NOT NULL,
  `drxassessment_answer_value` text NOT NULL,
  `drxassessment_domain` text NOT NULL,
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

INSERT INTO `drxassessment_assessment` (`drxassessment_id`, `drxassessment_question1`, `drxassessment_answer`, `drxassessment_answer_value`, `drxassessment_domain`, `drxassessment_q1_answer_1`, `drxassessment_q1_answer_2`, `drxassessment_q1_answer_3`, `drxassessment_q1_answer_4`, `drxassessment_order`, `drxassessment_order_value`, `drxassessment_status`, `drxassessment_created_at`, `drxassessment_updated_at`) VALUES
(1, 'Question_1', 'C', 'q1_c', 'Mathematical Reasoning and Application', 'q1_a', 'q1_b', 'q1_c', 'q1_d', 9, '9th', 1, '2019-06-01 05:23:43', '2019-06-22 01:40:21'),
(2, 'Question_2', 'B', 'q2_b', 'Fluent Calculation', 'q2_a', 'q2_b', 'q2_c', 'q2_d', 8, '8th ', 1, '2019-06-01 05:24:39', '2019-06-22 01:40:30'),
(3, 'Question_3', 'A', 'q3_a', 'Memorization of Arithmetic Facts', 'q3_a', 'q3_b', 'q3_c', 'q3_d', 2, '2nd ', 1, '2019-06-01 05:25:06', '2019-06-22 01:40:51'),
(4, 'Question_4', 'A', 'q4_a', 'Number Sense', 'q4_a', 'q4_b', 'q4_c', 'q4_d', 1, '1st', 1, '2019-06-01 05:25:30', '2019-06-22 01:40:55'),
(5, 'Question_5', 'D', 'q5_d', 'Accurate Calculation', 'q5_a', 'q5_b', 'q5_c', 'q5_d', 13, '13th	', 1, '2019-06-01 05:26:00', '2019-06-22 01:40:59'),
(6, 'Question_6', 'C', 'q6_c', 'Accurate Calculation', 'q6_a', 'q6_b', 'q6_c', 'q6_d', 11, '11th ', 1, '2019-06-01 05:27:02', '2019-06-22 01:41:03'),
(7, 'Question_7', 'B', 'q7_b', 'Memorization of Arithmetic Facts', 'q7_a', 'q7_b', 'q7_c', 'q7_d', 4, '4th', 1, '2019-06-01 05:27:25', '2019-06-22 01:41:16'),
(8, 'Question_8', 'A', 'q8_a', '', 'q8_a', 'q8_b', 'q8_c', 'q8_d', 0, '', 0, '2019-06-01 05:28:29', '2019-06-22 01:41:20'),
(9, 'Question_9', 'D', 'q9_d', 'Number Sense', 'q9_a', 'q9_b', 'q9_c', 'q9_d', 14, '14th', 1, '2019-06-01 05:28:59', '2019-06-22 01:41:24'),
(10, 'Question_10', 'A', 'q10_a', 'Number Sense', 'q10_a', 'q10_b', 'q10_c', 'q10_d', 18, '18th', 1, '2019-06-01 05:29:36', '2019-06-22 01:41:27'),
(11, 'Question_11', 'D', 'q11_d', 'Fluent Calculation', 'q11_a', 'q11_b', 'q11_c', 'q11_d', 19, '19th', 1, '2019-06-01 05:29:52', '2019-06-22 01:41:33'),
(12, 'Question_12', 'D', 'q12_d', '', 'q12_a', 'q12_b', 'q12_c', 'q12_d', 0, '', 0, '2019-06-01 05:30:13', '2019-06-22 01:41:39'),
(13, 'Question_13', 'A', 'q13_a', '', 'q13_a', 'q13_b', 'q13_c', 'q13_d', 0, '', 0, '2019-06-01 05:30:51', '2019-06-22 01:41:44'),
(14, 'Question_14', 'C', 'q14_c', '', 'q14_a', 'q14_b', 'q14_c', 'q14_d', 0, '', 0, '2019-06-01 05:31:26', '2019-06-22 01:41:50'),
(15, 'Question_15', 'A', 'q15_a', '', 'q15_a', 'q15_b', 'q15_c', 'q15_d', 0, '', 0, '2019-06-01 05:31:52', '2019-06-22 01:41:54'),
(16, 'Question_16', 'B', 'q16_b', '', 'q16_a', 'q16_b', 'q16_c', 'q16_d', 0, '', 0, '2019-06-01 05:32:10', '2019-06-22 01:41:59'),
(17, 'Question_17', 'D', 'q17_d', '', 'q17_a', 'q17_b', 'q17_c', 'q17_d', 0, '', 0, '2019-06-01 05:32:24', '2019-06-22 01:42:05'),
(18, 'Question_18', 'B', 'q18_b', 'Fluent Calculation', 'q18_a', 'q18_b', 'q18_c', 'q18_d', 12, '12th', 1, '2019-06-01 05:32:39', '2019-06-22 01:42:10'),
(19, 'Question_19', 'C', 'q19_c', '', 'q19_a', 'q19_b', 'q19_c', 'q19_d', 0, '', 0, '2019-06-01 05:33:05', '2019-06-22 01:42:15'),
(20, 'Question_20', 'D', 'q20_d', '', 'q20_a', 'q20_b', 'q20_c', 'q20_d', 0, '', 0, '2019-06-01 05:33:18', '2019-06-22 01:42:19'),
(21, 'Question_21', 'C', 'q21_c', '', 'q21_a', 'q21_b', 'q21_c', 'q21_d', 0, '', 0, '2019-06-01 05:34:24', '2019-06-22 01:42:27'),
(22, 'Question_22', 'C', 'q22_c', '', 'q22_a', 'q22_b', 'q22_c', 'q22_d', 0, '', 0, '2019-06-01 05:34:51', '2019-06-22 01:42:35'),
(23, 'Question_23', 'D', 'q23_d', 'Accurate Calculation', 'q23_a', 'q23_b', 'q23_c', 'q23_d', 6, '6th ', 1, '2019-06-01 05:35:37', '2019-06-22 01:42:41'),
(24, 'Question_24', 'A', 'q24_a', '', 'q24_a', 'q24_b', 'q24_c', 'q24_d', 0, '', 0, '2019-06-01 05:35:50', '2019-06-22 01:42:47'),
(25, 'Question_25', 'B', 'q25_b', '', 'q25_a', 'q25_b', 'q25_c', 'q25_d', 0, '', 0, '2019-06-01 05:36:00', '2019-06-22 01:42:52'),
(26, 'Question_26', 'C', 'q26_c', '', 'q26_a', 'q26_b', 'q26_c', 'q26_d', 0, '', 0, '2019-06-01 05:36:43', '2019-06-22 01:42:57'),
(27, 'Question_27', 'D', 'q27_d', '', 'q27_a', 'q27_b', 'q27_c', 'q27_d', 0, '', 0, '2019-06-01 05:37:02', '2019-06-22 01:43:01'),
(28, 'Question_28', 'B', 'q28_b', '', 'q28_a', 'q28_b', 'q28_c', 'q28_d', 0, '', 0, '2019-06-01 05:37:16', '2019-06-22 01:43:06'),
(29, 'Question_29', 'A', 'q29_a', '', 'q29_a', 'q29_b', 'q29_c', 'q29_d', 0, '', 0, '2019-06-01 05:37:43', '2019-06-22 01:43:11'),
(30, 'Question_30', 'C', 'q30_c', '', 'q30_a', 'q30_b', 'q30_c', 'q30_d', 0, '', 0, '2019-06-01 05:37:54', '2019-06-22 01:43:16'),
(31, 'Question_31', 'A', 'q31_a', '', 'q31_a', 'q31_b', 'q31_c', 'q31_d', 0, '', 0, '2019-06-01 05:38:04', '2019-06-22 01:43:24'),
(32, 'Question_32', 'C', 'q32_c', '', 'q32_a', 'q32_b', 'q32_c', 'q32_d', 0, '', 0, '2019-06-01 05:38:15', '2019-06-22 01:43:31'),
(33, 'Question_33', 'B', 'q33_b', '', 'q33_a', 'q33_b', 'q33_c', 'q33_d', 0, '', 0, '2019-06-01 05:38:27', '2019-06-22 01:43:37'),
(34, 'Question_34', 'B', 'q34_b', '', 'q34_a', 'q34_b', 'q34_c', 'q34_d', 0, '', 0, '2019-06-01 05:38:39', '2019-06-22 01:43:43'),
(35, 'Question_35', 'D', 'q35_d', '', 'q35_a', 'q35_b', 'q35_c', 'q35_d', 0, '', 0, '2019-06-01 05:38:56', '2019-06-22 01:43:50'),
(36, 'Question_36', 'A', 'q36_a', '', 'q36_a', 'q36_b', 'q36_c', 'q36_d', 0, '', 0, '2019-06-01 05:39:26', '2019-06-22 01:43:56'),
(37, 'Question_37', 'B', 'q37_b', '', 'q37_a', 'q37_b', 'q37_c', 'q37_d', 0, '', 0, '2019-06-01 05:39:40', '2019-06-22 01:44:03'),
(38, 'Question_38', 'D', 'q38_d', 'Number Sense', 'q38_a', 'q38_b', 'q38_c', 'q38_d', 7, '7th', 1, '2019-06-01 05:40:09', '2019-06-22 01:44:09'),
(39, 'Question_39', 'C', 'q39_c', '', 'q39_a', 'q39_b', 'q39_c', 'q39_d', 0, '', 0, '2019-06-01 05:40:22', '2019-06-22 01:44:14'),
(40, 'Question_40', 'A', 'q40_a', '', 'q40_a', 'q40_b', 'q40_c', 'q40_d', 0, '', 0, '2019-06-01 05:41:54', '2019-06-22 01:44:18'),
(41, 'Question_41', 'B', 'q41_b', '', 'q41_a', 'q41_b', 'q41_c', 'q41_d', 0, '', 0, '2019-06-01 05:42:18', '2019-06-22 01:44:24'),
(42, 'Question_42', 'C', 'q42_c', '', 'q42_a', 'q42_b', 'q42_c', 'q42_d', 0, '', 0, '2019-06-01 05:42:29', '2019-06-22 01:44:34'),
(43, 'Question_43', 'D', 'q43_d', '', 'q43_a', 'q43_b', 'q43_c', 'q43_d', 0, '', 0, '2019-06-01 05:42:41', '2019-06-22 01:44:40'),
(44, 'Question_44', 'A', 'q44_a', '', 'q44_a', 'q44_b', 'q44_c', 'q44_d', 0, '', 0, '2019-06-01 05:42:53', '2019-06-22 01:44:45'),
(45, 'Question_45', 'D', 'q45_d', '', 'q45_a', 'q45_b', 'q45_c', 'q45_d', 0, '', 0, '2019-06-01 05:43:04', '2019-06-22 01:44:50'),
(46, 'Question_46', 'C', 'q46_c', '', 'q46_a', 'q46_b', 'q46_c', 'q46_d', 0, '', 0, '2019-06-01 05:43:15', '2019-06-22 01:44:56'),
(47, 'Question_47', 'C', 'q47_c', '', 'q47_a', 'q47_b', 'q47_c', 'q47_d', 0, '', 0, '2019-06-01 05:43:25', '2019-06-22 01:45:00'),
(48, 'Question_48', 'B', 'q48_b', '', 'q48_a', 'q48_b', 'q48_c', 'q48_d', 0, '', 0, '2019-06-01 05:43:35', '2019-06-22 01:45:08'),
(49, 'Question_49', 'A', 'q49_a', '', 'q49_a', 'q49_b', 'q49_d', 'q49_d', 0, '', 0, '2019-06-01 05:43:48', '2019-06-22 01:45:13'),
(50, 'Question_50', 'D', 'q50_d', '', 'q50_a', 'q50_b', 'q50_c', 'q50_d', 0, '', 0, '2019-06-01 05:44:02', '2019-06-22 01:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_assessment_domains`
--

CREATE TABLE `drxassessment_assessment_domains` (
  `drxassessment_id` int(11) NOT NULL,
  `drxassessment_domain_name` text NOT NULL,
  `drxassessment_question_total` int(55) NOT NULL,
  `drxassessment_status` int(1) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment_domains`
--

INSERT INTO `drxassessment_assessment_domains` (`drxassessment_id`, `drxassessment_domain_name`, `drxassessment_question_total`, `drxassessment_status`, `drxassessment_created_at`) VALUES
(1, 'Number Sense', 4, 0, '2019-06-16 11:51:12'),
(2, 'Memorization of Arithmetic Facts', 2, 0, '2019-06-16 11:51:12'),
(3, 'Accurate Calculation', 3, 0, '2019-06-16 11:52:06'),
(4, 'Fluent Calculation', 3, 0, '2019-06-16 11:52:06'),
(5, 'Mathematical Reasoning and Application', 1, 0, '2019-06-16 11:52:18');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_assessment_history`
--

CREATE TABLE `drxassessment_assessment_history` (
  `drxassessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `domain_name` text NOT NULL,
  `questions` text NOT NULL,
  `answer` text NOT NULL,
  `total_correct_answer` int(25) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment_history`
--

INSERT INTO `drxassessment_assessment_history` (`drxassessment_id`, `user_id`, `user_name`, `user_email`, `domain_name`, `questions`, `answer`, `total_correct_answer`, `created_at`) VALUES
(1, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_4, Question_9, Question_38', 'q4_a, q9_c, q38_d', 2, '2019-06-25 21:29:53'),
(2, 10, 'XX', 'x@x.com', 'Memorization of Arithmetic Facts', 'Question_3, Question_7', 'q3_a, q7_b', 9, '2019-06-25 21:30:32'),
(3, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_4, Question_9, Question_38', 'q4_a, q9_d, q38_d', 10, '2019-06-25 21:31:01'),
(4, 11, 'Han', 'han@gmail.com', 'Memorization of Arithmetic Facts', 'Question_3, Question_7', 'q3_a, q7_b', 2, '2019-06-25 21:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_assessment_result`
--

CREATE TABLE `drxassessment_assessment_result` (
  `drxassessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `student_selected_domain` varchar(55) NOT NULL,
  `student_selected_question` varchar(25) NOT NULL,
  `student_selected_answer` varchar(55) NOT NULL,
  `assessment_correct_answer` text NOT NULL,
  `student_sequence` int(11) NOT NULL,
  `student_status` int(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment_result`
--

INSERT INTO `drxassessment_assessment_result` (`drxassessment_id`, `user_id`, `user_name`, `user_email`, `student_selected_domain`, `student_selected_question`, `student_selected_answer`, `assessment_correct_answer`, `student_sequence`, `student_status`, `created_at`) VALUES
(1, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_4', '', '1', 0, 0, '2019-06-25 21:29:53'),
(2, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_9', '', '0', 0, 0, '2019-06-25 21:29:53'),
(3, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-06-25 21:29:53'),
(4, 10, 'XX', 'x@x.com', 'Memorization of Arithmetic Facts', 'Question_3', '', '1', 0, 0, '2019-06-25 21:30:32'),
(5, 10, 'XX', 'x@x.com', 'Memorization of Arithmetic Facts', 'Question_7', '', '1', 0, 0, '2019-06-25 21:30:32'),
(6, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_4', '', '1', 0, 0, '2019-06-25 21:31:01'),
(7, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_9', '', '1', 0, 0, '2019-06-25 21:31:01'),
(8, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-06-25 21:31:01'),
(9, 11, 'Han', 'han@gmail.com', 'Memorization of Arithmetic Facts', 'Question_3', '', '1', 0, 0, '2019-06-25 21:43:55'),
(10, 11, 'Han', 'han@gmail.com', 'Memorization of Arithmetic Facts', 'Question_7', '', '1', 0, 0, '2019-06-25 21:43:55');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_assessment_taken`
--

CREATE TABLE `drxassessment_assessment_taken` (
  `drxassessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_domain` varchar(55) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `taken_count` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment_taken`
--

INSERT INTO `drxassessment_assessment_taken` (`drxassessment_id`, `user_id`, `user_domain`, `user_name`, `taken_count`, `created_at`) VALUES
(1, 10, 'Number Sense', 'XX', 1, '2019-06-25 21:29:53'),
(2, 10, 'Memorization of Arithmetic Facts', 'XX', 1, '2019-06-25 21:30:33'),
(3, 10, 'Number Sense', 'XX', 1, '2019-06-25 21:31:01'),
(4, 11, 'Memorization of Arithmetic Facts', 'Han', 1, '2019-06-25 21:43:55');

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
(1, 1, '1st', 1, '2019-06-16 15:03:13'),
(2, 2, '2nd ', 1, '2019-06-16 15:03:08'),
(3, 3, '3rd ', 0, '2019-06-16 15:02:29'),
(4, 4, '4th', 1, '2019-06-19 08:26:48'),
(5, 5, '5th ', 0, '2019-06-16 15:02:29'),
(6, 6, '6th ', 1, '2019-06-19 08:26:43'),
(7, 7, '7th', 1, '2019-06-22 11:59:43'),
(8, 8, '8th ', 1, '2019-06-16 15:02:40'),
(9, 9, '9th', 1, '2019-06-16 15:03:16'),
(10, 10, '10th ', 0, '2019-06-16 14:14:31'),
(11, 11, '11th ', 1, '2019-06-16 15:03:24'),
(12, 12, '12th', 1, '2019-06-16 15:03:44'),
(13, 13, '13th	', 1, '2019-06-16 15:03:30'),
(14, 14, '14th', 1, '2019-06-19 08:26:53'),
(15, 15, '15th', 0, '2019-06-16 15:02:29'),
(16, 16, '16th	', 0, '2019-06-16 11:53:02'),
(17, 17, '17th	', 0, '2019-06-09 17:16:37'),
(18, 18, '18th', 1, '2019-06-25 21:49:32'),
(19, 19, '19th', 1, '2019-06-16 15:03:37'),
(20, 20, '20th', 0, '2019-06-16 15:02:29'),
(21, 21, '21st', 0, '2019-06-16 11:53:02'),
(22, 22, '22nd', 0, '2019-06-02 20:33:22'),
(23, 23, '23rd', 0, '2019-06-16 11:53:02'),
(24, 24, '24th', 0, '2019-06-05 14:56:45'),
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
  `drxassessment_status` int(1) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL,
  `drxassessment_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_users`
--

INSERT INTO `drxassessment_users` (`drxassessment_id`, `drxassessment_code`, `drxassessment_name`, `drxassessment_contactnumber`, `drxassessment_email`, `drxassessment_username`, `drxassessment_password`, `drxassessment_position`, `drxassessment_status`, `drxassessment_created_at`, `drxassessment_updated_at`) VALUES
(2, '', 'admin', 123123, 'admin@admin.com', 'admin', 'admin', '4dm1n15t4t0r', 0, '2019-05-26 20:28:25', '2019-05-26 20:28:43'),
(5, '', 'Auscillator', 55, 'auscii@gmail.com', 'auscii', 'auscii', '4dm1n15t4t0r', 0, '2019-06-09 11:03:00', '2019-06-09 11:05:41'),
(10, '', 'XX', 123123, 'x@x.com', 'x', 'x', '5tud3nt', 0, '2019-06-09 12:22:37', '0000-00-00 00:00:00'),
(11, '', 'Han', 912031203, 'han@gmail.com', 'han', 'han', '5tud3nt', 0, '2019-06-09 12:23:16', '0000-00-00 00:00:00'),
(12, '', 'Ethane Kyle', 2147483647, 'kyle@gmail.com', 'kyle', 'kyle', '5tud3nt', 0, '2019-06-09 12:24:31', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `drxassessment_assessment`
--
ALTER TABLE `drxassessment_assessment`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_assessment_domains`
--
ALTER TABLE `drxassessment_assessment_domains`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_assessment_history`
--
ALTER TABLE `drxassessment_assessment_history`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_assessment_result`
--
ALTER TABLE `drxassessment_assessment_result`
  ADD PRIMARY KEY (`drxassessment_id`);

--
-- Indexes for table `drxassessment_assessment_taken`
--
ALTER TABLE `drxassessment_assessment_taken`
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
-- AUTO_INCREMENT for table `drxassessment_assessment_domains`
--
ALTER TABLE `drxassessment_assessment_domains`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drxassessment_assessment_history`
--
ALTER TABLE `drxassessment_assessment_history`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drxassessment_assessment_result`
--
ALTER TABLE `drxassessment_assessment_result`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drxassessment_assessment_taken`
--
ALTER TABLE `drxassessment_assessment_taken`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drxassessment_order_roles`
--
ALTER TABLE `drxassessment_order_roles`
  MODIFY `drxassessment_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `drxassessment_users`
--
ALTER TABLE `drxassessment_users`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
