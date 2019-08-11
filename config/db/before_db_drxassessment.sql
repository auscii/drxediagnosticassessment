-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2019 at 08:40 AM
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
(1, 'Question_1', 'C', 'q1_c', 'Number Sense', 'q1_a', 'q1_b', 'q1_c', 'q1_d', 12, '12th', 1, '2019-06-01 05:23:43', '2019-06-22 01:40:21'),
(2, 'Question_2', 'B', 'q2_b', 'Fluent Calculation', 'q2_a', 'q2_b', 'q2_c', 'q2_d', 1, '1st', 1, '2019-06-01 05:24:39', '2019-07-13 03:48:26'),
(3, 'Question_3', 'A', 'q3_a', 'Mathematical Reasoning and Application', 'q3_a', 'q3_b', 'q3_c', 'q3_d', 2, '2nd ', 1, '2019-06-01 05:25:06', '2019-07-13 03:48:41'),
(4, 'Question_4', 'A', 'q4_a', 'Accurate Calculation', 'q4_a', 'q4_b', 'q4_c', 'q4_d', 13, '13th	', 1, '2019-06-01 05:25:30', '2019-06-22 01:40:55'),
(5, 'Question_5', 'D', 'q5_d', 'Number Sense', 'q5_a', 'q5_b', 'q5_c', 'q5_d', 16, '16th	', 1, '2019-06-01 05:26:00', '2019-06-22 01:40:59'),
(6, 'Question_6', 'C', 'q6_c', 'Number Sense', 'q6_a', 'q6_b', 'q6_c', 'q6_d', 17, '17th	', 1, '2019-06-01 05:27:02', '2019-06-22 01:41:03'),
(7, 'Question_7', 'B', 'q7_b', '', 'q7_a', 'q7_b', 'q7_c', 'q7_d', 0, '', 0, '2019-06-01 05:27:25', '2019-06-22 01:41:16'),
(8, 'Question_8', 'A', 'q8_a', 'Mathematical Reasoning and Application', 'q8_a', 'q8_b', 'q8_c', 'q8_d', 23, '23rd', 1, '2019-06-01 05:28:29', '2019-06-22 01:41:20'),
(9, 'Question_9', 'D', 'q9_d', 'Accurate Calculation', 'q9_a', 'q9_b', 'q9_c', 'q9_d', 3, '3rd ', 1, '2019-06-01 05:28:59', '2019-06-22 01:41:24'),
(10, 'Question_10', 'A', 'q10_a', '', 'q10_a', 'q10_b', 'q10_c', 'q10_d', 0, '', 0, '2019-06-01 05:29:36', '2019-06-22 01:41:27'),
(11, 'Question_11', 'D', 'q11_d', '', 'q11_a', 'q11_b', 'q11_c', 'q11_d', 0, '', 0, '2019-06-01 05:29:52', '2019-06-22 01:41:33'),
(12, 'Question_12', 'D', 'q12_d', '', 'q12_a', 'q12_b', 'q12_c', 'q12_d', 0, '', 0, '2019-06-01 05:30:13', '2019-06-22 01:41:39'),
(13, 'Question_13', 'A', 'q13_a', '', 'q13_a', 'q13_b', 'q13_c', 'q13_d', 0, '', 0, '2019-06-01 05:30:51', '2019-06-22 01:41:44'),
(14, 'Question_14', 'C', 'q14_c', '', 'q14_a', 'q14_b', 'q14_c', 'q14_d', 0, '', 0, '2019-06-01 05:31:26', '2019-06-22 01:41:50'),
(15, 'Question_15', 'A', 'q15_a', '', 'q15_a', 'q15_b', 'q15_c', 'q15_d', 0, '', 0, '2019-06-01 05:31:52', '2019-06-22 01:41:54'),
(16, 'Question_16', 'B', 'q16_b', '', 'q16_a', 'q16_b', 'q16_c', 'q16_d', 0, '', 0, '2019-06-01 05:32:10', '2019-06-22 01:41:59'),
(17, 'Question_17', 'D', 'q17_d', '', 'q17_a', 'q17_b', 'q17_c', 'q17_d', 0, '', 0, '2019-06-01 05:32:24', '2019-06-22 01:42:05'),
(18, 'Question_18', 'B', 'q18_b', '', 'q18_a', 'q18_b', 'q18_c', 'q18_d', 0, '', 0, '2019-06-01 05:32:39', '2019-06-22 01:42:10'),
(19, 'Question_19', 'C', 'q19_c', '', 'q19_a', 'q19_b', 'q19_c', 'q19_d', 0, '', 0, '2019-06-01 05:33:05', '2019-06-22 01:42:15'),
(20, 'Question_20', 'D', 'q20_d', '', 'q20_a', 'q20_b', 'q20_c', 'q20_d', 0, '', 0, '2019-06-01 05:33:18', '2019-06-22 01:42:19'),
(21, 'Question_21', 'C', 'q21_c', '', 'q21_a', 'q21_b', 'q21_c', 'q21_d', 0, '', 0, '2019-06-01 05:34:24', '2019-06-22 01:42:27'),
(22, 'Question_22', 'C', 'q22_c', '', 'q22_a', 'q22_b', 'q22_c', 'q22_d', 0, '', 0, '2019-06-01 05:34:51', '2019-06-22 01:42:35'),
(23, 'Question_23', 'D', 'q23_d', '', 'q23_a', 'q23_b', 'q23_c', 'q23_d', 0, '', 0, '2019-06-01 05:35:37', '2019-06-22 01:42:41'),
(24, 'Question_24', 'A', 'q24_a', '', 'q24_a', 'q24_b', 'q24_c', 'q24_d', 0, '', 0, '2019-06-01 05:35:50', '2019-06-22 01:42:47'),
(25, 'Question_25', 'B', 'q25_b', '', 'q25_a', 'q25_b', 'q25_c', 'q25_d', 0, '', 0, '2019-06-01 05:36:00', '2019-06-22 01:42:52'),
(26, 'Question_26', 'C', 'q26_c', '', 'q26_a', 'q26_b', 'q26_c', 'q26_d', 0, '', 0, '2019-06-01 05:36:43', '2019-06-22 01:42:57'),
(27, 'Question_27', 'D', 'q27_d', '', 'q27_a', 'q27_b', 'q27_c', 'q27_d', 0, '', 0, '2019-06-01 05:37:02', '2019-06-22 01:43:01'),
(28, 'Question_28', 'B', 'q28_b', '', 'q28_a', 'q28_b', 'q28_c', 'q28_d', 0, '', 0, '2019-06-01 05:37:16', '2019-06-22 01:43:06'),
(29, 'Question_29', 'A', 'q29_a', '', 'q29_a', 'q29_b', 'q29_c', 'q29_d', 0, '', 0, '2019-06-01 05:37:43', '2019-06-22 01:43:11'),
(30, 'Question_30', 'C', 'q30_c', '', 'q30_a', 'q30_b', 'q30_c', 'q30_d', 0, '', 0, '2019-06-01 05:37:54', '2019-06-22 01:43:16'),
(31, 'Question_31', 'A', 'q31_a', 'Number Sense', 'q31_a', 'q31_b', 'q31_c', 'q31_d', 5, '5th ', 1, '2019-06-01 05:38:04', '2019-06-22 01:43:24'),
(32, 'Question_32', 'C', 'q32_c', '', 'q32_a', 'q32_b', 'q32_c', 'q32_d', 0, '', 0, '2019-06-01 05:38:15', '2019-06-22 01:43:31'),
(33, 'Question_33', 'B', 'q33_b', '', 'q33_a', 'q33_b', 'q33_c', 'q33_d', 0, '', 0, '2019-06-01 05:38:27', '2019-06-22 01:43:37'),
(34, 'Question_34', 'B', 'q34_b', 'Number Sense', 'q34_a', 'q34_b', 'q34_c', 'q34_d', 7, '7th', 1, '2019-06-01 05:38:39', '2019-06-22 01:43:43'),
(35, 'Question_35', 'D', 'q35_d', '', 'q35_a', 'q35_b', 'q35_c', 'q35_d', 0, '', 0, '2019-06-01 05:38:56', '2019-06-22 01:43:50'),
(36, 'Question_36', 'A', 'q36_a', '', 'q36_a', 'q36_b', 'q36_c', 'q36_d', 0, '', 0, '2019-06-01 05:39:26', '2019-06-22 01:43:56'),
(37, 'Question_37', 'B', 'q37_b', '', 'q37_a', 'q37_b', 'q37_c', 'q37_d', 0, '', 0, '2019-06-01 05:39:40', '2019-06-22 01:44:03'),
(38, 'Question_38', 'D', 'q38_d', 'Number Sense', 'q38_a', 'q38_b', 'q38_c', 'q38_d', 14, '14th', 1, '2019-06-01 05:40:09', '2019-06-22 01:44:09'),
(39, 'Question_39', 'C', 'q39_c', 'Mathematical Reasoning and Application', 'q39_a', 'q39_b', 'q39_c', 'q39_d', 22, '22nd', 1, '2019-06-01 05:40:22', '2019-06-22 01:44:14'),
(40, 'Question_40', 'A', 'q40_a', '', 'q40_a', 'q40_b', 'q40_c', 'q40_d', 0, '', 0, '2019-06-01 05:41:54', '2019-06-22 01:44:18'),
(41, 'Question_41', 'B', 'q41_b', '', 'q41_a', 'q41_b', 'q41_c', 'q41_d', 0, '', 0, '2019-06-01 05:42:18', '2019-06-22 01:44:24'),
(42, 'Question_42', 'C', 'q42_c', '', 'q42_a', 'q42_b', 'q42_c', 'q42_d', 0, '', 0, '2019-06-01 05:42:29', '2019-06-22 01:44:34'),
(43, 'Question_43', 'D', 'q43_d', 'Fluent Calculation', 'q43_a', 'q43_b', 'q43_c', 'q43_d', 4, '4th', 1, '2019-06-01 05:42:41', '2019-06-22 01:44:40'),
(44, 'Question_44', 'A', 'q44_a', 'Fluent Calculation', 'q44_a', 'q44_b', 'q44_c', 'q44_d', 18, '18th', 1, '2019-06-01 05:42:53', '2019-06-22 01:44:45'),
(45, 'Question_45', 'D', 'q45_d', 'Memorization of Arithmetic Facts', 'q45_a', 'q45_b', 'q45_c', 'q45_d', 19, '19th', 1, '2019-06-01 05:43:04', '2019-06-22 01:44:50'),
(46, 'Question_46', 'C', 'q46_c', '', 'q46_a', 'q46_b', 'q46_c', 'q46_d', 0, '', 0, '2019-06-01 05:43:15', '2019-06-22 01:44:56'),
(47, 'Question_47', 'C', 'q47_c', 'Number Sense', 'q47_a', 'q47_b', 'q47_c', 'q47_d', 10, '10th ', 1, '2019-06-01 05:43:25', '2019-06-22 01:45:00'),
(48, 'Question_48', 'B', 'q48_b', '', 'q48_a', 'q48_b', 'q48_c', 'q48_d', 0, '', 0, '2019-06-01 05:43:35', '2019-06-22 01:45:08'),
(49, 'Question_49', 'A', 'q49_a', 'Fluent Calculation', 'q49_a', 'q49_b', 'q49_d', 'q49_d', 20, '20th', 1, '2019-06-01 05:43:48', '2019-06-22 01:45:13'),
(50, 'Question_50', 'D', 'q50_d', 'Number Sense', 'q50_a', 'q50_b', 'q50_c', 'q50_d', 15, '15th', 1, '2019-06-01 05:44:02', '2019-06-22 01:45:19');

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
(1, 'Number Sense', 10, 0, '2019-06-16 11:51:12'),
(2, 'Memorization of Arithmetic Facts', 1, 0, '2019-06-16 11:51:12'),
(3, 'Accurate Calculation', 2, 0, '2019-06-16 11:52:06'),
(4, 'Fluent Calculation', 3, 0, '2019-06-16 11:52:06'),
(5, 'Mathematical Reasoning and Application', 2, 0, '2019-06-16 11:52:18');

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
  `overall_score` decimal(16,2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `start_at` datetime NOT NULL,
  `end_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_assessment_history`
--

INSERT INTO `drxassessment_assessment_history` (`drxassessment_id`, `user_id`, `user_name`, `user_email`, `domain_name`, `questions`, `answer`, `total_correct_answer`, `overall_score`, `created_at`, `start_at`, `end_at`) VALUES
(1, 13, 'Executioner', 'exe@gmail.com', 'Number Sense Memorization of Arithmetic Facts Accurate Calculation Fluent Calculation Mathematical Reasoning and Application', 'Question_31, Question_50, Question_34, Question_6, Question_5, Question_47, Question_38, Question_1, Question_45, Question_9, Question_4, Question_43, Question_49, Question_44, Question_2, Question_3, Question_8, Question_39', 'q31_b, q50_a, q34_b, q6_c, q5_d, q47_a, q38_c, q1_d, q45_a, q9_a, q4_c, q43_c, q49_d, q44_d, q2_c, q3_a, q8_a, q39_a', 5, '87.89', '2019-08-11 13:56:43', '2019-08-11 01:56:15', '2019-08-11 01:56:43'),
(2, 10, 'XX', 'x@x.com', 'Number Sense Memorization of Arithmetic Facts Accurate Calculation Fluent Calculation Mathematical Reasoning and Application', 'Question_50, Question_38, Question_47, Question_6, Question_34, Question_5, Question_31, Question_1, Question_45, Question_9, Question_4, Question_49, Question_43, Question_2, Question_44, Question_39, Question_8, Question_3', 'q50_c, q38_a, q47_b, q6_c, q34_c, q5_d, q31_c, q1_b, q45_b, q9_b, q4_a, q49_b, q43_d, q2_c, q44_b, q39_d, q8_a, q3_d', 5, '78.21', '2019-08-11 13:57:28', '2019-08-11 01:56:59', '2019-08-11 01:57:28'),
(3, 11, 'Hann', 'hann@gmail.com', 'Number Sense Memorization of Arithmetic Facts Accurate Calculation Fluent Calculation Mathematical Reasoning and Application', 'Question_5, Question_31, Question_34, Question_50, Question_6, Question_38, Question_47, Question_1, Question_45, Question_4, Question_9, Question_44, Question_49, Question_43, Question_2, Question_39, Question_3, Question_8', 'q5_b, q31_b, q34_a, q50_c, q6_a, q38_c, q47_b, q1_c, q45_c, q4_b, q9_b, q44_c, q49_d, q43_a, q2_d, q39_d, q3_a, q8_b', 2, '85.87', '2019-08-11 13:58:10', '2019-08-11 01:57:42', '2019-08-11 01:58:10'),
(4, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense Memorization of Arithmetic Facts Accurate Calculation Fluent Calculation Mathematical Reasoning and Application', 'Question_31, Question_6, Question_5, Question_50, Question_38, Question_1, Question_47, Question_34, Question_45, Question_9, Question_4, Question_49, Question_43, Question_2, Question_44, Question_8, Question_3, Question_39', 'q31_b, q6_b, q5_a, q50_c, q38_d, q1_a, q47_b, q34_c, q45_c, q9_c, q4_a, q49_d, q43_b, q2_c, q44_a, q8_d, q3_a, q39_a', 4, '95.42', '2019-08-11 13:58:49', '2019-08-11 01:58:20', '2019-08-11 01:58:49');

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
(1, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-13 23:04:13'),
(2, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-13 23:04:13'),
(3, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-13 23:04:13'),
(4, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-13 23:04:13'),
(5, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-13 23:04:14'),
(6, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-13 23:04:14'),
(7, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-13 23:04:14'),
(8, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-13 23:04:14'),
(9, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-13 23:04:14'),
(10, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-13 23:04:14'),
(11, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-13 23:04:14'),
(12, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-07-13 23:04:14'),
(13, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-07-13 23:04:14'),
(14, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-13 23:04:14'),
(15, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-07-13 23:04:14'),
(16, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-13 23:04:14'),
(17, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-07-13 23:04:14'),
(18, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '1', 0, 0, '2019-07-13 23:04:14'),
(19, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-13 23:40:11'),
(20, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-13 23:40:11'),
(21, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-13 23:40:11'),
(22, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-13 23:40:11'),
(23, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-13 23:40:11'),
(24, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-13 23:40:11'),
(25, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-13 23:40:12'),
(26, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-13 23:40:12'),
(27, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-13 23:40:12'),
(28, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-13 23:40:12'),
(29, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-13 23:40:12'),
(30, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-07-13 23:40:12'),
(31, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-07-13 23:40:12'),
(32, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-13 23:40:12'),
(33, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-13 23:40:12'),
(34, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-13 23:40:12'),
(35, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-13 23:40:12'),
(36, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-13 23:40:12'),
(37, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-07-13 23:44:39'),
(38, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-13 23:44:39'),
(39, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-07-13 23:44:39'),
(40, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-13 23:44:39'),
(41, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-13 23:44:39'),
(42, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '1', 0, 0, '2019-07-13 23:44:39'),
(43, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-13 23:44:39'),
(44, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-13 23:44:39'),
(45, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-07-13 23:44:39'),
(46, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-13 23:44:39'),
(47, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-13 23:44:39'),
(48, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-07-13 23:44:39'),
(49, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-13 23:44:39'),
(50, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-13 23:44:39'),
(51, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-13 23:44:39'),
(52, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-13 23:44:39'),
(53, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-13 23:44:40'),
(54, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-13 23:44:40'),
(55, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-07-28 20:39:35'),
(56, 16, 'xc', 'xc@xc.com', 'Fluent Calculation', 'Question_2', '', '1', 0, 0, '2019-07-28 20:39:35'),
(57, 16, 'xc', 'xc@xc.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-28 20:39:35'),
(58, 16, 'xc', 'xc@xc.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-28 20:39:35'),
(59, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-28 20:39:35'),
(60, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-28 20:39:35'),
(61, 16, 'xc', 'xc@xc.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-28 20:39:35'),
(62, 16, 'xc', 'xc@xc.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-28 20:39:35'),
(63, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-07-28 20:39:35'),
(64, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-28 20:39:35'),
(65, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-28 20:39:35'),
(66, 16, 'xc', 'xc@xc.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-07-28 20:39:35'),
(67, 16, 'xc', 'xc@xc.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-07-28 20:39:35'),
(68, 16, 'xc', 'xc@xc.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-28 20:39:35'),
(69, 16, 'xc', 'xc@xc.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-28 20:39:36'),
(70, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-28 20:39:36'),
(71, 16, 'xc', 'xc@xc.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-07-28 20:39:36'),
(72, 16, 'xc', 'xc@xc.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-28 20:39:36'),
(73, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-07-31 21:35:02'),
(74, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 21:35:02'),
(75, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-07-31 21:35:02'),
(76, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 21:35:02'),
(77, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 21:35:02'),
(78, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '1', 0, 0, '2019-07-31 21:35:02'),
(79, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-31 21:35:02'),
(80, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-31 21:35:02'),
(81, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 21:35:02'),
(82, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-31 21:35:02'),
(83, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 21:35:02'),
(84, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 21:35:03'),
(85, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 21:35:03'),
(86, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 21:35:03'),
(87, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-07-31 21:35:03'),
(88, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-31 21:35:03'),
(89, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-07-31 21:35:03'),
(90, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 21:35:03'),
(91, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-07-31 21:44:31'),
(92, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 21:44:31'),
(93, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-07-31 21:44:31'),
(94, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 21:44:31'),
(95, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 21:44:32'),
(96, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '1', 0, 0, '2019-07-31 21:44:32'),
(97, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-07-31 21:44:32'),
(98, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-07-31 21:44:32'),
(99, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 21:44:32'),
(100, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-07-31 21:44:32'),
(101, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 21:44:32'),
(102, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 21:44:32'),
(103, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 21:44:32'),
(104, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 21:44:32'),
(105, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-07-31 21:44:32'),
(106, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-07-31 21:44:32'),
(107, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-07-31 21:44:32'),
(108, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 21:44:32'),
(109, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:02:48'),
(110, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:02:48'),
(111, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:02:48'),
(112, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:02:48'),
(113, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:02:48'),
(114, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:02:48'),
(115, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:02:48'),
(116, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:02:48'),
(117, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:02:48'),
(118, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:02:48'),
(119, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:02:48'),
(120, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:02:48'),
(121, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:02:48'),
(122, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:02:48'),
(123, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:02:48'),
(124, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:02:49'),
(125, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:02:49'),
(126, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:02:49'),
(127, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:04:15'),
(128, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:04:16'),
(129, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:04:16'),
(130, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:04:16'),
(131, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:04:16'),
(132, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:04:16'),
(133, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:04:16'),
(134, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:04:16'),
(135, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:04:16'),
(136, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:04:17'),
(137, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:04:17'),
(138, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:04:17'),
(139, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:04:17'),
(140, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:04:17'),
(141, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:04:17'),
(142, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:04:18'),
(143, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:04:18'),
(144, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:04:18'),
(145, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:10:24'),
(146, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:10:25'),
(147, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:10:25'),
(148, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:10:25'),
(149, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:10:25'),
(150, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:10:25'),
(151, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:10:25'),
(152, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:10:25'),
(153, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:10:25'),
(154, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:10:25'),
(155, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:10:25'),
(156, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:10:25'),
(157, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:10:26'),
(158, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:10:26'),
(159, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:10:26'),
(160, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:10:26'),
(161, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:10:26'),
(162, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:10:26'),
(163, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:10:55'),
(164, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:10:55'),
(165, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:10:55'),
(166, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:10:55'),
(167, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:10:55'),
(168, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:10:55'),
(169, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:10:55'),
(170, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:10:55'),
(171, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:10:55'),
(172, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:10:55'),
(173, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:10:56'),
(174, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:10:56'),
(175, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:10:56'),
(176, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:10:56'),
(177, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:10:56'),
(178, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:10:56'),
(179, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:10:56'),
(180, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:10:56'),
(181, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:11:37'),
(182, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:11:37'),
(183, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:11:37'),
(184, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:11:37'),
(185, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:11:37'),
(186, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:11:37'),
(187, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:11:37'),
(188, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:11:37'),
(189, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:11:37'),
(190, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:11:37'),
(191, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:11:38'),
(192, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:11:38'),
(193, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:11:38'),
(194, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:11:38'),
(195, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:11:38'),
(196, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:11:38'),
(197, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:11:38'),
(198, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:11:38'),
(199, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:11:52'),
(200, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:11:53'),
(201, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:11:53'),
(202, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:11:54'),
(203, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:11:54'),
(204, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:11:54'),
(205, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:11:54'),
(206, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:11:54'),
(207, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:11:54'),
(208, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:11:54'),
(209, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:11:54'),
(210, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:11:54'),
(211, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:11:54'),
(212, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:11:54'),
(213, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:11:54'),
(214, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:11:54'),
(215, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:11:55'),
(216, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:11:55'),
(217, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:12:06'),
(218, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:12:06'),
(219, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:12:06'),
(220, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:12:06'),
(221, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:12:06'),
(222, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:12:06'),
(223, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:12:06'),
(224, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:12:06'),
(225, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:12:06'),
(226, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:12:06'),
(227, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:12:06'),
(228, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:12:07'),
(229, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:12:07'),
(230, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:12:07'),
(231, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:12:07'),
(232, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:12:07'),
(233, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:12:07'),
(234, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:12:07'),
(235, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:12:18'),
(236, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:12:18'),
(237, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:12:18'),
(238, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:12:18'),
(239, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:12:18'),
(240, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:12:18'),
(241, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:12:18'),
(242, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:12:19'),
(243, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:12:19'),
(244, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:12:19'),
(245, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:12:19'),
(246, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:12:19'),
(247, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:12:19'),
(248, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:12:19'),
(249, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:12:19'),
(250, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:12:19'),
(251, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:12:20'),
(252, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:12:20'),
(253, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:12:35'),
(254, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:12:35'),
(255, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:12:35'),
(256, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:12:35'),
(257, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:12:35'),
(258, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:12:35'),
(259, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:12:35'),
(260, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:12:36'),
(261, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:12:36'),
(262, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:12:36'),
(263, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:12:36'),
(264, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:12:36'),
(265, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:12:36'),
(266, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:12:36'),
(267, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:12:36'),
(268, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:12:36'),
(269, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:12:36'),
(270, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:12:36'),
(271, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:13:00'),
(272, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:13:00'),
(273, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:13:00'),
(274, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:13:00'),
(275, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:13:00'),
(276, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:13:00'),
(277, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:13:00'),
(278, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:13:01'),
(279, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:13:01'),
(280, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:13:01'),
(281, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:13:01'),
(282, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:13:01'),
(283, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:13:01'),
(284, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:13:01'),
(285, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:13:01'),
(286, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:13:01'),
(287, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:13:01'),
(288, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:13:01'),
(289, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-07-31 22:13:12'),
(290, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-07-31 22:13:12'),
(291, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-07-31 22:13:12'),
(292, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-07-31 22:13:12'),
(293, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-07-31 22:13:12'),
(294, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-07-31 22:13:12'),
(295, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-07-31 22:13:13'),
(296, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '1', 0, 0, '2019-07-31 22:13:13'),
(297, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-07-31 22:13:13'),
(298, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-07-31 22:13:13'),
(299, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-07-31 22:13:13'),
(300, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-07-31 22:13:13'),
(301, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-07-31 22:13:13'),
(302, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-07-31 22:13:13'),
(303, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-07-31 22:13:13'),
(304, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-07-31 22:13:13'),
(305, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-07-31 22:13:13'),
(306, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-07-31 22:13:13'),
(307, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-06 19:46:38'),
(308, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-06 19:46:38'),
(309, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-06 19:46:39'),
(310, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-06 19:46:39'),
(311, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-06 19:46:39'),
(312, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-06 19:46:39'),
(313, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-06 19:46:39'),
(314, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-06 19:46:39'),
(315, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-06 19:46:39'),
(316, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-06 19:46:39'),
(317, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-06 19:46:39'),
(318, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-06 19:46:39'),
(319, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-06 19:46:39'),
(320, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-06 19:46:39'),
(321, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-06 19:46:39'),
(322, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-06 19:46:39'),
(323, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-06 19:46:39'),
(324, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-06 19:46:39'),
(325, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 12:06:41'),
(326, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 12:06:41'),
(327, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 12:06:41'),
(328, 10, 'XX', 'x@x.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 12:06:41'),
(329, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 12:06:41'),
(330, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 12:06:41'),
(331, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 12:06:41'),
(332, 10, 'XX', 'x@x.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 12:06:41'),
(333, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 12:06:41'),
(334, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-08-11 12:06:42'),
(335, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 12:06:42'),
(336, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 12:06:42'),
(337, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-08-11 12:06:42'),
(338, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 12:06:42'),
(339, 10, 'XX', 'x@x.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 12:06:42'),
(340, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 12:06:42'),
(341, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 12:06:42'),
(342, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 12:06:42'),
(343, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 12:08:31'),
(344, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 12:08:31'),
(345, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 12:08:31'),
(346, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 12:08:31'),
(347, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 12:08:31'),
(348, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 12:08:31'),
(349, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 12:08:31'),
(350, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 12:08:31'),
(351, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 12:08:31'),
(352, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 12:08:31'),
(353, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 12:08:31'),
(354, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 12:08:31'),
(355, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 12:08:31'),
(356, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 12:08:31'),
(357, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-08-11 12:08:31'),
(358, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-08-11 12:08:31'),
(359, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 12:08:32'),
(360, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_50', '', '1', 0, 0, '2019-08-11 12:08:32'),
(361, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 12:55:12'),
(362, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 12:55:12'),
(363, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 12:55:12'),
(364, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 12:55:12'),
(365, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 12:55:12'),
(366, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 12:55:12'),
(367, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 12:55:12'),
(368, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 12:55:13'),
(369, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 12:55:13'),
(370, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-08-11 12:55:13'),
(371, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 12:55:13'),
(372, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 12:55:13'),
(373, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 12:55:13'),
(374, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 12:55:13'),
(375, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-08-11 12:55:13'),
(376, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 12:55:13'),
(377, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 12:55:13'),
(378, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 12:55:13'),
(379, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 12:56:52'),
(380, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 12:56:52'),
(381, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 12:56:52'),
(382, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 12:56:52'),
(383, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 12:56:52'),
(384, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 12:56:52'),
(385, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 12:56:52'),
(386, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 12:56:52'),
(387, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 12:56:53'),
(388, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 12:56:53'),
(389, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 12:56:53'),
(390, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 12:56:53'),
(391, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 12:56:53'),
(392, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 12:56:53'),
(393, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 12:56:53'),
(394, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 12:56:53'),
(395, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 12:56:53'),
(396, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 12:56:53'),
(397, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:05:46'),
(398, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:05:46'),
(399, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 13:05:46'),
(400, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:05:46'),
(401, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '1', 0, 0, '2019-08-11 13:05:47'),
(402, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:05:47'),
(403, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:05:47'),
(404, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:05:47'),
(405, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 13:05:47'),
(406, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:05:47'),
(407, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:05:47'),
(408, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 13:05:47'),
(409, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:05:47'),
(410, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:05:47'),
(411, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:05:47'),
(412, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:05:47'),
(413, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:05:47'),
(414, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:05:47'),
(415, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:07:18'),
(416, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:07:18'),
(417, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:07:18'),
(418, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:07:19'),
(419, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:07:19'),
(420, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:07:19'),
(421, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:07:19'),
(422, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:07:19'),
(423, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 13:07:19'),
(424, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:07:19'),
(425, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 13:07:19'),
(426, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:07:19'),
(427, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:07:19'),
(428, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:07:19'),
(429, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:07:19'),
(430, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-08-11 13:07:19'),
(431, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:07:19'),
(432, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:07:19'),
(433, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:07:20'),
(434, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:07:20'),
(435, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:07:20'),
(436, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:07:20'),
(437, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:07:20'),
(438, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:07:20'),
(439, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:07:20'),
(440, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:07:20'),
(441, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 13:07:20'),
(442, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:07:20'),
(443, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 13:07:20'),
(444, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:07:20'),
(445, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:07:20'),
(446, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:07:20');
INSERT INTO `drxassessment_assessment_result` (`drxassessment_id`, `user_id`, `user_name`, `user_email`, `student_selected_domain`, `student_selected_question`, `student_selected_answer`, `assessment_correct_answer`, `student_sequence`, `student_status`, `created_at`) VALUES
(447, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:07:21'),
(448, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-08-11 13:07:21'),
(449, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:07:21'),
(450, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:07:21'),
(451, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:22:47'),
(452, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:22:47'),
(453, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:22:47'),
(454, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:22:47'),
(455, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:22:47'),
(456, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:22:47'),
(457, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:22:47'),
(458, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:22:47'),
(459, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:22:47'),
(460, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:22:47'),
(461, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 13:22:47'),
(462, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:22:47'),
(463, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-08-11 13:22:47'),
(464, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:22:48'),
(465, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:22:48'),
(466, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:22:48'),
(467, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:22:48'),
(468, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '1', 0, 0, '2019-08-11 13:22:48'),
(469, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-08-11 13:24:06'),
(470, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:24:06'),
(471, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:24:06'),
(472, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:24:06'),
(473, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:24:06'),
(474, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:24:06'),
(475, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-08-11 13:24:06'),
(476, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:24:06'),
(477, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:24:06'),
(478, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:24:06'),
(479, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:24:06'),
(480, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 13:24:06'),
(481, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:24:06'),
(482, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:24:06'),
(483, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '1', 0, 0, '2019-08-11 13:24:06'),
(484, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:24:06'),
(485, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:24:06'),
(486, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:24:06'),
(487, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-08-11 13:45:13'),
(488, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:45:13'),
(489, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:45:13'),
(490, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:45:13'),
(491, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:45:13'),
(492, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:45:13'),
(493, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-08-11 13:45:13'),
(494, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:45:13'),
(495, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 13:45:13'),
(496, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:45:13'),
(497, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:45:13'),
(498, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 13:45:13'),
(499, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:45:13'),
(500, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:45:13'),
(501, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:45:13'),
(502, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:45:13'),
(503, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:45:14'),
(504, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:45:14'),
(505, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-08-11 13:46:49'),
(506, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '1', 0, 0, '2019-08-11 13:46:49'),
(507, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 13:46:49'),
(508, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '1', 0, 0, '2019-08-11 13:46:49'),
(509, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:46:49'),
(510, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:46:49'),
(511, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:46:49'),
(512, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:46:49'),
(513, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '1', 0, 0, '2019-08-11 13:46:49'),
(514, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:46:49'),
(515, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:46:49'),
(516, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 13:46:49'),
(517, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:46:49'),
(518, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:46:49'),
(519, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:46:49'),
(520, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '1', 0, 0, '2019-08-11 13:46:50'),
(521, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:46:50'),
(522, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '1', 0, 0, '2019-08-11 13:46:50'),
(523, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:53:22'),
(524, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:53:22'),
(525, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:53:22'),
(526, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_4', '', '1', 0, 0, '2019-08-11 13:53:22'),
(527, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:53:22'),
(528, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:53:22'),
(529, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:53:22'),
(530, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:53:22'),
(531, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:53:22'),
(532, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:53:22'),
(533, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:53:23'),
(534, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '1', 0, 0, '2019-08-11 13:53:23'),
(535, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:53:23'),
(536, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:53:23'),
(537, 13, 'Executioner', 'exe@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:53:23'),
(538, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:53:23'),
(539, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_49', '', '1', 0, 0, '2019-08-11 13:53:23'),
(540, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:53:23'),
(541, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:55:20'),
(542, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:55:21'),
(543, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:55:21'),
(544, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:55:21'),
(545, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:55:21'),
(546, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:55:21'),
(547, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:55:21'),
(548, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:55:21'),
(549, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:55:21'),
(550, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:55:21'),
(551, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 13:55:21'),
(552, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:55:21'),
(553, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:55:21'),
(554, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:55:21'),
(555, 13, 'Executioner', 'exe@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:55:21'),
(556, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:55:21'),
(557, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:55:21'),
(558, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:55:21'),
(559, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:56:42'),
(560, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:56:42'),
(561, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 13:56:42'),
(562, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:56:42'),
(563, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_5', '', '1', 0, 0, '2019-08-11 13:56:42'),
(564, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_6', '', '1', 0, 0, '2019-08-11 13:56:42'),
(565, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-08-11 13:56:43'),
(566, 13, 'Executioner', 'exe@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:56:43'),
(567, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:56:43'),
(568, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_34', '', '1', 0, 0, '2019-08-11 13:56:43'),
(569, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:56:43'),
(570, 13, 'Executioner', 'exe@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:56:43'),
(571, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:56:43'),
(572, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:56:43'),
(573, 13, 'Executioner', 'exe@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:56:43'),
(574, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:56:43'),
(575, 13, 'Executioner', 'exe@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:56:43'),
(576, 13, 'Executioner', 'exe@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:56:43'),
(577, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:57:27'),
(578, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:57:27'),
(579, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_3', '', '0', 0, 0, '2019-08-11 13:57:27'),
(580, 10, 'XX', 'x@x.com', 'Accurate Calculation', 'Question_4', '', '1', 0, 0, '2019-08-11 13:57:27'),
(581, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_5', '', '1', 0, 0, '2019-08-11 13:57:27'),
(582, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_6', '', '1', 0, 0, '2019-08-11 13:57:28'),
(583, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_8', '', '1', 0, 0, '2019-08-11 13:57:28'),
(584, 10, 'XX', 'x@x.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:57:28'),
(585, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:57:28'),
(586, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:57:28'),
(587, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:57:28'),
(588, 10, 'XX', 'x@x.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:57:28'),
(589, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_43', '', '1', 0, 0, '2019-08-11 13:57:28'),
(590, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:57:28'),
(591, 10, 'XX', 'x@x.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:57:28'),
(592, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:57:28'),
(593, 10, 'XX', 'x@x.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:57:28'),
(594, 10, 'XX', 'x@x.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:57:28'),
(595, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_1', '', '1', 0, 0, '2019-08-11 13:58:09'),
(596, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:58:09'),
(597, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 13:58:09'),
(598, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_4', '', '0', 0, 0, '2019-08-11 13:58:09'),
(599, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:58:09'),
(600, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:58:09'),
(601, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:58:09'),
(602, 11, 'Hann', 'hann@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:58:10'),
(603, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:58:10'),
(604, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:58:10'),
(605, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_38', '', '0', 0, 0, '2019-08-11 13:58:10'),
(606, 11, 'Hann', 'hann@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:58:10'),
(607, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:58:10'),
(608, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_44', '', '0', 0, 0, '2019-08-11 13:58:10'),
(609, 11, 'Hann', 'hann@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:58:10'),
(610, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:58:10'),
(611, 11, 'Hann', 'hann@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:58:10'),
(612, 11, 'Hann', 'hann@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:58:10'),
(613, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_1', '', '0', 0, 0, '2019-08-11 13:58:48'),
(614, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_2', '', '0', 0, 0, '2019-08-11 13:58:48'),
(615, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_3', '', '1', 0, 0, '2019-08-11 13:58:48'),
(616, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_4', '', '1', 0, 0, '2019-08-11 13:58:48'),
(617, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_5', '', '0', 0, 0, '2019-08-11 13:58:48'),
(618, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_6', '', '0', 0, 0, '2019-08-11 13:58:48'),
(619, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_8', '', '0', 0, 0, '2019-08-11 13:58:49'),
(620, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Accurate Calculation', 'Question_9', '', '0', 0, 0, '2019-08-11 13:58:49'),
(621, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_31', '', '0', 0, 0, '2019-08-11 13:58:49'),
(622, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_34', '', '0', 0, 0, '2019-08-11 13:58:49'),
(623, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_38', '', '1', 0, 0, '2019-08-11 13:58:49'),
(624, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Mathematical Reasoning and Application', 'Question_39', '', '0', 0, 0, '2019-08-11 13:58:49'),
(625, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_43', '', '0', 0, 0, '2019-08-11 13:58:49'),
(626, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_44', '', '1', 0, 0, '2019-08-11 13:58:49'),
(627, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Memorization of Arithmetic Facts', 'Question_45', '', '0', 0, 0, '2019-08-11 13:58:49'),
(628, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_47', '', '0', 0, 0, '2019-08-11 13:58:49'),
(629, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Fluent Calculation', 'Question_49', '', '0', 0, 0, '2019-08-11 13:58:49'),
(630, 12, 'Ethane Kyle', 'kyle@gmail.com', 'Number Sense', 'Question_50', '', '0', 0, 0, '2019-08-11 13:58:49');

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
(1, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-13 23:04:14'),
(2, 12, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Ethane Kyle', 1, '2019-07-13 23:40:12'),
(3, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-13 23:44:40'),
(4, 16, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'xc', 1, '2019-07-28 20:39:36'),
(5, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 21:35:03'),
(6, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 21:44:33'),
(7, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:02:49'),
(8, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:04:19'),
(9, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:10:27'),
(10, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:10:57'),
(11, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:11:39'),
(12, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:11:55'),
(13, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:12:07'),
(14, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:12:20'),
(15, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:12:36'),
(16, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:13:01'),
(17, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-07-31 22:13:14'),
(18, 12, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Ethane Kyle', 1, '2019-08-06 19:46:39'),
(19, 10, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'XX', 1, '2019-08-11 12:06:42'),
(20, 12, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Ethane Kyle', 1, '2019-08-11 12:08:32'),
(21, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 12:55:13'),
(22, 12, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Ethane Kyle', 1, '2019-08-11 12:56:53'),
(23, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:05:47'),
(24, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:07:20'),
(25, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:07:21'),
(26, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:22:48'),
(27, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:24:07'),
(28, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:45:14'),
(29, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:46:50'),
(30, 13, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Executioner', 1, '2019-08-11 13:53:23'),
(31, 13, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Executioner', 1, '2019-08-11 13:55:22'),
(32, 13, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Executioner', 1, '2019-08-11 13:56:43'),
(33, 10, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'XX', 1, '2019-08-11 13:57:28'),
(34, 11, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Hann', 1, '2019-08-11 13:58:10'),
(35, 12, 'Number Sense Fluent Calculation Mathematical Reasoning ', 'Ethane Kyle', 1, '2019-08-11 13:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `drxassessment_domain_result`
--

CREATE TABLE `drxassessment_domain_result` (
  `drxassessment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `number_sense` int(11) NOT NULL,
  `memorization_of_arithmetic_facts` int(11) NOT NULL,
  `accurate_calculation` int(11) NOT NULL,
  `fluent_calculation` int(11) NOT NULL,
  `mathematical_reasoning_and_applications` int(11) NOT NULL,
  `overall_score` decimal(16,2) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_domain_result`
--

INSERT INTO `drxassessment_domain_result` (`drxassessment_id`, `user_id`, `number_sense`, `memorization_of_arithmetic_facts`, `accurate_calculation`, `fluent_calculation`, `mathematical_reasoning_and_applications`, `overall_score`, `date_created`) VALUES
(1, 13, 85, 90, 82, 75, 95, '87.89', '2019-08-11 13:56:43'),
(2, 10, 60, 85, 75, 90, 72, '78.21', '2019-08-11 13:57:28'),
(3, 11, 95, 75, 70, 85, 78, '85.87', '2019-08-11 13:58:10'),
(4, 12, 75, 100, 85, 75, 85, '95.42', '2019-08-11 13:58:49');

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
(1, 1, '1st', 1, '2019-06-27 13:58:43'),
(2, 2, '2nd ', 1, '2019-06-27 13:59:02'),
(3, 3, '3rd ', 1, '2019-06-27 14:14:23'),
(4, 4, '4th', 1, '2019-06-27 14:14:32'),
(5, 5, '5th ', 1, '2019-06-27 14:15:09'),
(6, 6, '6th ', 0, '2019-06-27 13:58:35'),
(7, 7, '7th', 1, '2019-06-27 14:13:24'),
(8, 8, '8th ', 0, '2019-06-27 13:49:01'),
(9, 9, '9th', 0, '2019-06-27 13:49:01'),
(10, 10, '10th ', 1, '2019-06-27 14:14:41'),
(11, 11, '11th ', 0, '2019-06-27 13:49:01'),
(12, 12, '12th', 1, '2019-06-27 14:14:45'),
(13, 13, '13th	', 1, '2019-06-27 14:15:28'),
(14, 14, '14th', 1, '2019-06-27 14:14:51'),
(15, 15, '15th', 1, '2019-06-27 14:14:57'),
(16, 16, '16th	', 1, '2019-06-27 14:15:02'),
(17, 17, '17th	', 1, '2019-06-27 14:15:14'),
(18, 18, '18th', 1, '2019-06-27 14:15:47'),
(19, 19, '19th', 1, '2019-06-27 14:15:24'),
(20, 20, '20th', 1, '2019-06-27 14:15:35'),
(21, 21, '21st', 0, '2019-06-27 13:49:01'),
(22, 22, '22nd', 1, '2019-06-27 14:15:42'),
(23, 23, '23rd', 1, '2019-06-27 14:15:51'),
(24, 24, '24th', 0, '2019-06-27 13:49:01'),
(25, 25, '25th', 0, '2019-06-26 22:35:21'),
(26, 26, '26th', 0, '2019-06-26 22:35:21'),
(27, 27, '27th', 0, '2019-06-26 22:35:21'),
(28, 28, '28th', 0, '2019-06-26 22:35:21'),
(29, 29, '29th', 0, '2019-06-26 22:35:21'),
(30, 30, '30th', 0, '2019-06-26 22:35:21'),
(31, 31, '31st', 0, '2019-06-26 22:35:21'),
(32, 32, '32nd', 0, '2019-06-26 22:35:21'),
(33, 33, '33rd', 0, '2019-06-26 22:35:21'),
(34, 34, '34th', 0, '2019-06-26 22:35:21'),
(35, 35, '35th', 0, '2019-06-26 22:35:21'),
(36, 36, '36th', 0, '2019-06-26 22:35:21'),
(37, 37, '37th', 0, '2019-06-26 22:35:21'),
(38, 38, '38th', 0, '2019-06-26 22:35:21'),
(39, 39, '39th', 0, '2019-06-26 22:35:21'),
(40, 40, '40th', 0, '2019-06-26 22:35:21'),
(41, 41, '41st', 0, '2019-06-26 22:35:21'),
(42, 42, '42nd', 0, '2019-06-26 22:35:21'),
(43, 43, '43rd', 0, '2019-06-02 19:58:58'),
(44, 44, '44th', 0, '2019-06-02 19:59:02'),
(45, 45, '45th', 0, '2019-06-26 22:35:21'),
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
  `drxassessment_profile_pic` text NOT NULL,
  `drxassessment_name` varchar(55) NOT NULL,
  `drxassessment_contactnumber` int(55) NOT NULL,
  `drxassessment_email` varchar(55) NOT NULL,
  `drxassessment_username` varchar(55) NOT NULL,
  `drxassessment_password` varchar(55) NOT NULL,
  `drxassessment_position` varchar(55) NOT NULL,
  `drxassessment_status` int(1) NOT NULL,
  `drxassessment_exam` int(1) NOT NULL,
  `drxassessment_created_at` datetime NOT NULL,
  `drxassessment_updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drxassessment_users`
--

INSERT INTO `drxassessment_users` (`drxassessment_id`, `drxassessment_code`, `drxassessment_profile_pic`, `drxassessment_name`, `drxassessment_contactnumber`, `drxassessment_email`, `drxassessment_username`, `drxassessment_password`, `drxassessment_position`, `drxassessment_status`, `drxassessment_exam`, `drxassessment_created_at`, `drxassessment_updated_at`) VALUES
(2, '', 'user.jpg', 'admin', 123123, 'admin@admin.com', 'admin', 'admin', '4dm1n15t4t0r', 1, 0, '2019-05-26 20:28:25', '2019-05-26 20:28:43'),
(5, '', 'user.jpg', 'Auscillator', 55, 'auscii@gmail.com', 'auscii', 'auscii', '4dm1n15t4t0r', 1, 0, '2019-06-09 11:03:00', '2019-06-09 11:05:41'),
(10, '', 'deadmau5-wallpapers-hd-72995-6439649.png', 'XX', 123123, 'x@x.com', 'x', 'x', '5tud3nt', 1, 1, '2019-06-09 12:22:37', '0000-00-00 00:00:00'),
(11, '', 'edm-wallpaper-hd.jpg', 'Hann', 916, 'hann@gmail.com', 'han', 'han', '5tud3nt', 1, 1, '2019-06-09 12:23:16', '0000-00-00 00:00:00'),
(12, '', 'f297e48c38c1dc8854c29b11790a4096.jpg', 'Ethane Kyle', 2147483647, 'kyle@gmail.com', 'kyle', 'kyle', '5tud3nt', 1, 1, '2019-06-09 12:24:31', '0000-00-00 00:00:00'),
(13, '', 'user.jpg', 'Executioner', 2147483647, 'exe@gmail.com', 'exe', 'exe', '5tud3nt', 1, 1, '2019-06-26 11:08:16', '0000-00-00 00:00:00'),
(14, '', 'user.jpg', 'seann', 2147483647, 'sean@gmail.com', 'seann', 'seann', '4dm1n15t4t0r', 1, 0, '2019-06-26 11:14:33', '0000-00-00 00:00:00'),
(15, '', 'user.jpg', 'aaa', 23123123, 'a@a.com', 'a', 'a', '4dm1n15t4t0r', 1, 0, '2019-06-26 11:19:48', '0000-00-00 00:00:00'),
(16, '', 'user.jpg', 'xc', 2312, 'xc@xc.com', 'xc', 'xc', '5tud3nt', 1, 1, '2019-07-28 06:48:29', '0000-00-00 00:00:00'),
(18, '', 'user.jpg', 'v', 2, 'v@v.com', 'v', 'v', '5tud3nt', 0, 0, '2019-07-28 06:49:04', '0000-00-00 00:00:00');

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
-- Indexes for table `drxassessment_domain_result`
--
ALTER TABLE `drxassessment_domain_result`
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
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=631;

--
-- AUTO_INCREMENT for table `drxassessment_assessment_taken`
--
ALTER TABLE `drxassessment_assessment_taken`
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `drxassessment_domain_result`
--
ALTER TABLE `drxassessment_domain_result`
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
  MODIFY `drxassessment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
