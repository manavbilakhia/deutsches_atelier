-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2020 at 01:32 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deutsche_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 1, 5, 'hi', '2019-09-17 12:26:29', 0),
(2, 1, 5, 'ho', '2019-09-17 12:31:47', 0),
(3, 1, 5, 'hi', '2019-09-17 12:46:52', 0),
(4, 1, 5, 'hi', '2019-09-17 12:47:25', 0),
(5, 1, 5, 'nilesh', '2019-09-17 12:49:15', 0),
(6, 1, 5, 'ram tras', '2019-09-17 12:49:27', 0),
(7, 1, 5, 'hsadisahjidhsa', '2019-09-17 12:50:19', 0),
(8, 0, 1, 'nsadsa', '2019-09-17 12:50:43', 1),
(9, 1, 5, 'osdfkjsdjf', '2019-09-17 13:02:29', 0),
(10, 1, 5, '????', '2019-09-17 13:02:37', 2),
(11, 5, 1, 'hi', '2019-09-17 13:13:28', 0),
(12, 5, 1, 'dwef', '2019-09-17 13:45:44', 0),
(13, 1, 5, 'dfdsf', '2019-09-18 06:02:57', 2),
(14, 1, 5, 'ffd', '2019-09-18 06:10:22', 2),
(15, 1, 5, 'fdg', '2019-09-18 06:12:32', 2),
(16, 1, 5, 'uyiyiyuiuyi', '2019-09-18 06:12:43', 2),
(17, 1, 5, 'sdfsd', '2019-09-18 06:25:51', 0),
(18, 1, 5, 'dsfsdf', '2019-09-18 06:26:06', 0),
(19, 1, 5, '????', '2019-09-18 10:57:27', 0),
(20, 5, 1, 'dsads', '2019-09-18 10:57:58', 0),
(21, 1, 5, 'hi smith how are you?', '2019-09-18 10:58:13', 0),
(22, 5, 1, 'i am fine', '2019-09-18 10:58:23', 0),
(23, 1, 5, 'hi', '2019-09-18 11:01:47', 0),
(24, 1, 5, 'hi', '2019-09-18 11:02:22', 0),
(25, 0, 5, 'hi', '2019-09-18 11:04:58', 0),
(26, 0, 5, 'hi', '2019-09-18 11:05:08', 0),
(27, 0, 5, 'hi', '2019-09-18 11:06:07', 0),
(28, 0, 5, 'hi', '2019-09-18 11:06:07', 0),
(29, 0, 5, 'xvdfg', '2019-09-18 11:06:35', 0),
(30, 0, 5, 'sdsad', '2019-09-18 11:07:28', 0),
(31, 0, 5, 'sadsad', '2019-09-18 11:08:09', 0),
(32, 0, 5, 'asas', '2019-09-18 11:08:49', 0),
(33, 0, 5, 'sasa', '2019-09-18 11:09:06', 0),
(34, 0, 5, 'sasa', '2019-09-18 11:12:47', 0),
(35, 0, 5, '<p><img src=\"upload/New Doc 2019-08-13 23.25.14_3.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2019-09-18 11:13:14', 0),
(36, 0, 5, 'ssasa', '2019-09-18 11:13:30', 0),
(37, 0, 5, 'saas', '2019-09-18 11:15:17', 0),
(38, 5, 1, 'assa', '2019-09-18 11:15:42', 0),
(39, 0, 1, 'sasa', '2019-09-18 11:15:46', 1),
(40, 0, 5, 'asdasd', '2019-09-18 11:17:56', 0),
(41, 0, 5, '<p><img src=\"upload/Untitled.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p>this is nilesha match', '2019-09-18 12:03:19', 0),
(42, 5, 1, '????', '2019-09-18 12:04:10', 0),
(43, 1, 5, '????', '2019-09-18 12:05:37', 0),
(44, 1, 5, 'hjhgh', '2019-09-18 12:06:51', 0),
(45, 1, 5, 'asd', '2019-09-18 12:08:12', 0),
(46, 1, 5, 'fbfnc', '2019-09-18 16:25:35', 0),
(47, 1, 5, 'hi how are you?', '2019-09-18 16:26:20', 0),
(48, 1, 5, 'hi', '2019-09-18 16:44:05', 0),
(49, 0, 5, '<p><img src=\"upload/WIN_20190705_18_57_36_Pro.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2019-09-18 16:44:29', 0),
(50, 5, 1, 'vghchgxrf', '2019-09-18 16:54:30', 0),
(51, 5, 1, 'klbcljb ca', '2019-09-18 16:55:06', 0),
(52, 5, 1, 'jkl', '2019-09-19 03:34:41', 0),
(53, 1, 5, 'hey brooo', '2019-09-20 07:52:22', 0),
(54, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:12', 0),
(55, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:13', 0),
(56, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:19', 0),
(57, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:19', 0),
(58, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:19', 0),
(59, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:23', 0),
(60, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:23', 0),
(61, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:23', 0),
(62, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:23', 0),
(63, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:24', 0),
(64, 5, 1, 'dnosadnwioanc', '2020-01-12 08:09:24', 0),
(65, 1, 5, 'ewkfnewlsn', '2020-01-12 08:09:29', 0),
(66, 1, 5, 'ewkfnewlsn', '2020-01-12 08:09:50', 0),
(67, 1, 5, 'ewkfnewlsn', '2020-01-12 08:09:50', 0),
(68, 1, 5, 'ewkfnewlsn', '2020-01-12 08:09:51', 0),
(69, 5, 1, 'cl slvvkelvkewv', '2020-01-13 08:31:44', 0),
(70, 1, 5, 'vn ljsdn lksn dk', '2020-01-13 08:31:51', 0),
(71, 1, 5, 'eknciev iwevnkl', '2020-01-13 12:27:54', 0),
(72, 5, 1, 'bcjkvkja m,', '2020-01-13 12:28:10', 0),
(73, 0, 1, 'fbkjbvjakb jabvjsl', '2020-01-13 12:28:28', 1),
(74, 0, 5, 'ldnalkklvs.', '2020-01-13 12:28:40', 0),
(75, 5, 1, 'fnlkqwvlkwqlkas', '2020-01-13 13:23:29', 0),
(76, 1, 5, 'sa ljasl M', '2020-01-13 13:23:41', 0),
(77, 0, 5, 'alvnkqwavks.<div><br></div>', '2020-01-13 13:24:07', 0),
(78, 5, 1, 'weouiwebuiowbuewobw', '2020-01-13 14:46:33', 0),
(79, 1, 5, 'foebhfoiweqbfl', '2020-01-13 14:46:58', 0),
(80, 0, 5, 'prgnpie4gnipen<div><br></div>', '2020-01-13 14:47:22', 0),
(81, 1, 5, 'have u finished  yr work', '2020-01-16 04:31:50', 0),
(82, 1, 5, 'have u finished  yr work', '2020-01-16 04:31:53', 0),
(83, 1, 5, 'have u finished  yr work', '2020-01-16 04:31:57', 0),
(84, 1, 5, 'kasnlknvlkevnSVNEL', '2020-02-07 05:44:34', 0),
(85, 5, 1, 'bcgbjlnlkhkfhxgfchjbkjbjkgkvjh', '2020-02-11 16:53:27', 0),
(86, 0, 1, 'vgjcjhvkjvftukgjc<div><br></div>', '2020-02-11 16:53:41', 2),
(87, 5, 1, 'fksdughfusdhgks', '2020-02-12 08:36:29', 0),
(88, 8, 1, 'Hi Tirth!!????', '2020-02-18 04:37:17', 2),
(89, 0, 8, 'iwwekvniWVS<div><br></div>', '2020-02-21 03:27:42', 1),
(90, 0, 8, 'SACAKNVAKVN', '2020-02-21 03:27:47', 1),
(91, 1, 5, 'hii', '2020-02-23 11:49:24', 0),
(92, 5, 1, 'hii dev', '2020-02-23 11:50:39', 0),
(93, 1, 5, 'LKACNSLK', '2020-02-23 12:23:55', 0),
(94, 5, 1, 'ladvnwjebsl', '2020-02-23 13:48:57', 0),
(95, 0, 1, 'hi gubbkjwbd', '2020-02-23 13:49:23', 2),
(96, 1, 5, 'afbnjakfs', '2020-02-23 18:47:29', 0),
(97, 5, 1, ',bkvje', '2020-02-23 18:48:17', 0),
(98, 5, 1, 'dvbaskj', '2020-02-23 18:48:38', 0),
(99, 5, 1, 'dskhgaukj', '2020-02-23 18:48:51', 0),
(100, 5, 1, 'gwoehvousj', '2020-02-23 18:49:10', 0),
(101, 0, 1, 'asfhkjweb', '2020-02-23 18:50:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2020-05-08 17:11:23', 'no'),
(2, 1, '2019-09-16 05:17:07', 'no'),
(3, 5, '2019-09-17 13:45:26', 'no'),
(4, 5, '2019-09-18 05:42:28', 'no'),
(5, 5, '2020-02-23 22:39:35', 'no'),
(6, 5, '2019-09-18 06:25:35', 'no'),
(7, 5, '2019-09-18 10:56:47', 'no'),
(8, 1, '2020-02-21 03:27:57', 'no'),
(9, 1, '2019-09-18 16:14:45', 'no'),
(10, 5, '2019-09-18 16:16:37', 'no'),
(11, 5, '2019-09-18 16:20:57', 'no'),
(12, 1, '2019-09-18 16:27:57', 'no'),
(13, 5, '2019-09-18 16:28:31', 'no'),
(14, 1, '2019-09-18 17:05:12', 'no'),
(15, 5, '2019-09-18 17:05:56', 'no'),
(16, 1, '2019-09-19 03:23:02', 'no'),
(17, 5, '2019-09-19 03:34:20', 'no'),
(18, 1, '2019-09-19 19:55:07', 'no'),
(19, 1, '2019-09-20 07:51:12', 'no'),
(20, 5, '2019-09-20 07:51:55', 'no'),
(21, 1, '2019-09-21 13:19:10', 'no'),
(22, 1, '2019-09-25 03:07:49', 'no'),
(23, 1, '2019-09-25 08:10:47', 'no'),
(24, 1, '2019-09-25 08:23:48', 'no'),
(25, 5, '2019-09-25 08:25:13', 'no'),
(26, 1, '2019-09-25 09:07:50', 'no'),
(27, 1, '2019-09-25 12:19:23', 'no'),
(28, 1, '2019-09-25 13:01:54', 'no'),
(29, 1, '2019-09-26 07:21:34', 'no'),
(30, 1, '2019-09-26 12:54:58', 'yes'),
(31, 1, '2019-09-26 14:00:25', 'no'),
(32, 1, '2019-09-26 16:03:07', 'no'),
(33, 1, '2019-09-26 16:46:21', 'no'),
(34, 1, '2019-09-27 03:38:44', 'no'),
(35, 1, '2019-09-27 04:00:02', 'no'),
(36, 1, '2019-09-30 09:43:30', 'no'),
(37, 1, '2019-10-01 12:48:29', 'no'),
(38, 5, '2019-10-01 12:54:11', 'no'),
(39, 1, '2019-10-01 12:54:45', 'no'),
(40, 1, '2019-11-09 18:59:52', 'no'),
(41, 1, '2019-11-12 12:54:20', 'no'),
(42, 1, '2019-11-15 05:03:10', 'no'),
(43, 5, '2019-11-15 05:06:39', 'no'),
(44, 1, '2019-11-15 06:23:07', 'no'),
(45, 1, '2019-11-15 06:25:47', 'no'),
(46, 1, '2019-11-15 06:26:32', 'no'),
(47, 1, '2019-11-15 06:27:00', 'no'),
(48, 5, '2019-11-15 06:28:48', 'no'),
(49, 5, '2019-11-15 06:29:11', 'no'),
(50, 1, '2019-11-17 07:23:45', 'no'),
(51, 1, '2019-11-18 05:35:40', 'no'),
(52, 1, '2019-11-18 09:01:19', 'no'),
(53, 1, '2019-12-06 13:42:30', 'no'),
(54, 1, '2020-01-06 02:59:50', 'no'),
(55, 1, '2020-01-09 04:44:04', 'no'),
(56, 1, '2020-01-09 04:50:17', 'no'),
(57, 1, '2020-01-10 09:36:27', 'no'),
(58, 5, '2020-01-10 09:39:14', 'no'),
(59, 1, '2020-01-12 08:06:54', 'no'),
(60, 5, '2020-01-12 08:08:24', 'no'),
(61, 1, '2020-01-12 11:23:36', 'no'),
(62, 5, '2020-01-13 05:52:54', 'no'),
(63, 5, '2020-01-13 05:57:31', 'no'),
(64, 1, '2020-01-13 05:58:05', 'no'),
(65, 5, '2020-01-13 05:58:41', 'no'),
(66, 5, '2020-01-13 05:59:10', 'no'),
(67, 5, '2020-01-13 05:59:48', 'no'),
(68, 5, '2020-01-13 08:25:28', 'no'),
(69, 1, '2020-01-13 08:28:24', 'no'),
(70, 5, '2020-01-13 12:20:26', 'no'),
(71, 1, '2020-01-13 12:23:55', 'no'),
(72, 1, '2020-01-13 13:22:02', 'no'),
(73, 5, '2020-01-13 14:40:56', 'no'),
(74, 1, '2020-01-13 14:41:09', 'no'),
(75, 1, '2020-01-13 14:43:40', 'no'),
(76, 1, '2020-01-13 14:48:53', 'no'),
(77, 1, '2020-01-15 03:30:08', 'no'),
(78, 1, '2020-01-15 14:16:52', 'no'),
(79, 1, '2020-01-15 14:17:56', 'no'),
(80, 1, '2020-01-15 14:19:05', 'no'),
(81, 1, '2020-01-15 14:36:38', 'no'),
(82, 1, '2020-01-15 14:37:23', 'no'),
(83, 1, '2020-01-15 14:39:59', 'no'),
(84, 1, '2020-01-16 03:47:02', 'no'),
(85, 1, '2020-01-16 03:47:25', 'no'),
(86, 1, '2020-01-16 04:27:20', 'no'),
(87, 5, '2020-01-16 04:30:55', 'no'),
(88, 1, '2020-01-17 03:26:58', 'no'),
(89, 1, '2020-01-23 17:27:55', 'no'),
(90, 1, '2020-01-24 06:00:14', 'no'),
(91, 1, '2020-01-24 06:01:01', 'no'),
(92, 1, '2020-01-24 06:54:32', 'no'),
(93, 1, '2020-01-24 11:04:56', 'no'),
(94, 1, '2020-01-25 06:55:22', 'no'),
(95, 1, '2020-01-26 07:41:45', 'no'),
(96, 1, '2020-01-26 14:34:33', 'no'),
(97, 1, '2020-02-05 07:15:21', 'no'),
(98, 1, '2020-02-07 05:42:42', 'no'),
(99, 5, '2020-02-07 05:44:10', 'no'),
(100, 1, '2020-02-11 09:17:28', 'no'),
(101, 1, '2020-02-11 16:42:06', 'no'),
(102, 1, '2020-02-11 17:00:55', 'no'),
(103, 5, '2020-02-11 17:01:34', 'no'),
(104, 1, '2020-02-12 08:35:29', 'no'),
(105, 1, '2020-02-12 11:49:24', 'no'),
(106, 1, '2020-02-13 05:32:04', 'no'),
(107, 1, '2020-02-15 18:21:32', 'no'),
(108, 5, '2020-02-15 18:57:04', 'no'),
(109, 1, '2020-02-16 08:06:19', 'no'),
(110, 1, '2020-02-16 08:11:23', 'no'),
(111, 16, '2020-02-16 08:25:19', 'no'),
(112, 1, '2020-02-16 08:29:14', 'no'),
(113, 18, '2020-02-16 08:36:54', 'no'),
(114, 1, '2020-02-16 08:37:59', 'no'),
(115, 1, '2020-02-16 08:44:41', 'no'),
(116, 1, '2020-02-16 09:09:57', 'no'),
(117, 1, '2020-02-16 11:30:31', 'no'),
(118, 1, '2020-02-16 15:55:37', 'no'),
(119, 1, '2020-02-17 04:39:40', 'yes'),
(120, 1, '2020-02-17 05:10:59', 'no'),
(121, 1, '2020-02-17 09:21:54', 'no'),
(122, 1, '2020-02-17 09:39:03', 'no'),
(123, 1, '2020-02-17 10:12:00', 'no'),
(124, 1, '2020-02-17 10:13:46', 'no'),
(125, 1, '2020-02-17 10:18:59', 'no'),
(126, 1, '2020-02-17 15:07:59', 'no'),
(127, 1, '2020-02-18 04:35:44', 'no'),
(128, 8, '2020-02-18 04:38:30', 'no'),
(129, 1, '2020-02-18 12:55:57', 'no'),
(130, 1, '2020-02-20 20:41:23', 'no'),
(131, 5, '2020-02-20 20:41:45', 'no'),
(132, 1, '2020-02-20 20:48:13', 'no'),
(133, 1, '2020-02-21 03:15:14', 'no'),
(134, 5, '2020-02-21 03:15:26', 'no'),
(135, 5, '2020-02-21 03:16:09', 'no'),
(136, 1, '2020-02-21 03:17:42', 'no'),
(137, 8, '2020-02-21 03:27:32', 'no'),
(138, 5, '2020-02-21 03:28:06', 'no'),
(139, 5, '2020-02-21 08:27:51', 'no'),
(140, 1, '2020-02-21 08:37:57', 'no'),
(141, 5, '2020-02-21 08:39:53', 'no'),
(142, 5, '2020-02-21 08:40:30', 'no'),
(143, 1, '2020-02-21 08:40:53', 'no'),
(144, 5, '2020-02-21 08:41:01', 'no'),
(145, 5, '2020-02-22 12:48:50', 'no'),
(146, 1, '2020-02-22 13:13:07', 'no'),
(147, 1, '2020-02-22 14:05:49', 'no'),
(148, 1, '2020-02-23 11:35:08', 'no'),
(149, 1, '2020-02-23 11:35:28', 'no'),
(150, 1, '2020-02-23 11:35:49', 'no'),
(151, 5, '2020-02-23 11:35:58', 'no'),
(152, 1, '2020-02-23 11:43:30', 'no'),
(153, 1, '2020-02-23 11:45:57', 'no'),
(154, 1, '2020-02-23 12:17:43', 'no'),
(155, 1, '2020-02-23 12:21:03', 'no'),
(156, 5, '2020-02-23 16:23:44', 'no'),
(157, 1, '2020-02-23 16:34:26', 'no'),
(158, 1, '2020-02-23 18:24:55', 'no'),
(159, 1, '2020-02-23 18:42:46', 'no'),
(160, 5, '2020-02-23 18:45:39', 'no'),
(161, 1, '2020-02-27 09:47:53', 'no'),
(162, 1, '2020-04-12 19:30:40', 'no'),
(163, 1, '2020-05-01 13:19:19', 'no'),
(164, 1, '2020-05-08 17:10:03', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `sch_assignments`
--

CREATE TABLE `sch_assignments` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `message` longtext,
  `deadline` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_assignments`
--

INSERT INTO `sch_assignments` (`id`, `class_id`, `title`, `message`, `deadline`, `added_by`, `status`) VALUES
(1, 2, 'Assignment 1', 'Student have to complete this assignment in 3 days.', '2019-06-29 00:00:00', 1, 1),
(2, 2, 'Assignment No1', 'Add Test entries.', '2019-06-29 00:00:00', 1, 1),
(7, 1, 'Assignment No1', 'Add Test entries.', '2019-07-29 00:00:00', 1, 1),
(9, 2, 'Assignment No1', 'Add Test entries.', '2019-07-27 00:00:00', 1, 1),
(11, 1, 'Assignment No 2', 'Complete till saturday', '2019-06-29 00:00:00', 1, 1),
(12, 1, 'Test ', 'test', '2019-07-14 00:00:00', 1, 1),
(13, 3, 'testfor today', 'test', '2019-07-14 00:00:00', 1, 1),
(14, 4, 'testfor today', 'test', '2019-07-14 00:00:00', 1, 1),
(15, 3, 'testfor monday', 'test', '2019-07-15 00:00:00', 1, 1),
(16, 4, 'test for monday', 'test submited', '2019-07-19 00:00:00', 1, 1),
(19, 3, 'test by manav on13', 'need to do for manav', '2019-07-19 00:00:00', 1, 1),
(20, 4, 'testb ', 'cljsvceboieqwab', '2020-01-17 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_assignment_files`
--

CREATE TABLE `sch_assignment_files` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_assignment_files`
--

INSERT INTO `sch_assignment_files` (`id`, `assignment_id`, `filename`, `path`, `added_date`, `status`) VALUES
(1, 12, 'FileZilla.xml', 'assets/uploads/assignments/1563006939FileZilla.xml', '2019-07-13 00:00:00', 1),
(3, 9, 'Activation offer_21-12-2018.jpg', 'assets/uploads/assignments/Activation_offer_21-12-2018.jpg', '2019-06-26 00:00:00', 1),
(4, 9, 'db_credetials.txt', 'assets/uploads/assignments/db_credetials.txt', '2019-06-26 00:00:00', 1),
(7, 11, 'db_credetials.txt', 'assets/uploads/assignments/1561576985db_credetials.txt', '2019-06-26 00:00:00', 1),
(8, 11, 'dhoni_portal.png', 'assets/uploads/assignments/1561576985dhoni_portal.png', '2019-06-26 00:00:00', 1),
(10, 15, 'FileZilla.xml', 'assets/uploads/assignments/1563007302FileZilla.xml', '2019-07-13 00:00:00', 1),
(11, 16, 'FileZilla.xml', 'assets/uploads/assignments/1563007816FileZilla.xml', '2019-07-13 00:00:00', 1),
(12, 17, 'FileZilla.xml', 'assets/uploads/assignments/1563011160FileZilla.xml', '2019-07-13 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_class`
--

CREATE TABLE `sch_class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `groups` varchar(50) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_class`
--

INSERT INTO `sch_class` (`id`, `class_name`, `groups`, `level`, `created_date`, `status`) VALUES
(1, 'Class 1', 'A1', '1', '2019-06-30 09:29:43', 1),
(2, 'Class 2', 'A2', '2', '2019-06-30 09:59:46', 1),
(3, 'Class 3', 'B1', '3', '2019-07-01 14:02:43', 1),
(4, 'Class 4', 'B2', '4', '2019-09-26 16:03:42', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_courses`
--

CREATE TABLE `sch_courses` (
  `course_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `course_title` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date NOT NULL,
  `description` longtext,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_courses`
--

INSERT INTO `sch_courses` (`course_id`, `class_id`, `course_title`, `start_date`, `end_date`, `description`, `added_date`, `added_by`, `status`) VALUES
(1, 2, 'Pre Elementry Course', '2020-02-16', '2020-02-16', 'This Course Of language consists of an introduction to the language.\r\nthe student will learn how to read, how to write in German.\r\nBasic informal content writing and formal content writing will be taught to the students.\r\nAlso, students will also learn how to communicate in German.', '2020-02-15 01:24:02', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_events`
--

CREATE TABLE `sch_events` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `event_name` varchar(200) DEFAULT NULL,
  `discription` text,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_events`
--

INSERT INTO `sch_events` (`id`, `class_id`, `event_name`, `discription`, `start_date`, `end_date`, `added_by`, `status`) VALUES
(1, 2, 'Fasching ', 'German holiday', '2020-02-24', '2020-02-24', 1, 1),
(3, 2, 'first day', 'introduction to all ', '2020-02-21', '2020-02-21', 1, 1),
(4, 2, 'good friday celebration ', 'please be in the class at 8pm', '2020-02-10', '2020-02-10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_media`
--

CREATE TABLE `sch_media` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `path` varchar(200) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_media`
--

INSERT INTO `sch_media` (`id`, `class_id`, `title`, `type`, `filename`, `path`, `added_date`, `added_by`, `status`) VALUES
(5, 2, 'Star trail', 'video', 'star_trails.mkv', 'assets/uploads/media/videos/1561744738star_trails.mkv', '2019-06-28 19:58:59', 1, 1),
(8, 1, 'book 1', 'document', 'fit1_uebungssatz_01.pdf', 'assets/uploads/media/documents/1581792580fit1_uebungssatz_01.pdf', '2020-02-15 18:49:40', 1, 1),
(9, 1, 'book 2 ', 'document', 'fit1_uebungssatz_02.pdf', 'assets/uploads/media/documents/1581792639fit1_uebungssatz_02.pdf', '2020-02-15 18:50:39', 1, 1),
(10, 1, 'book 3', 'document', 'sd_1_modellsatz.pdf', 'assets/uploads/media/documents/1581792666sd_1_modellsatz.pdf', '2020-02-15 18:51:07', 1, 1),
(11, 1, 'book 4', 'document', 'sd_1_uebungssatz01.pdf', 'assets/uploads/media/documents/1581792712sd_1_uebungssatz01.pdf', '2020-02-15 18:51:54', 1, 1),
(12, 1, 'book 5', 'document', 'sd_1_uebungssatz02.pdf', 'assets/uploads/media/documents/1581792745sd_1_uebungssatz02.pdf', '2020-02-15 18:52:26', 1, 1),
(13, 2, 'book 1', 'document', 'A2_Modellsatz_Erwachsene.pdf', 'assets/uploads/media/documents/1581792783A2_Modellsatz_Erwachsene.pdf', '2020-02-15 18:53:05', 1, 1),
(14, 2, 'book 2 ', 'document', 'A2_Modellsatz_Jugendliche.pdf', 'assets/uploads/media/documents/1581792823A2_Modellsatz_Jugendliche.pdf', '2020-02-15 18:53:45', 1, 1),
(15, 2, 'book 3', 'document', 'c1_modellsatz.pdf', 'assets/uploads/media/documents/1581792876c1_modellsatz.pdf', '2020-02-15 18:54:36', 1, 1),
(16, 2, 'book 4 ', 'document', 'c1_uebungssatz.pdf', 'assets/uploads/media/documents/1581792901c1_uebungssatz.pdf', '2020-02-15 18:55:01', 1, 1),
(17, 3, 'book 1', 'document', 'b1_modellsatz_erwachsene.pdf', 'assets/uploads/media/documents/1581793082b1_modellsatz_erwachsene.pdf', '2020-02-15 18:58:02', 1, 1),
(18, 3, 'book 2 ', 'document', 'b1_modellsatz_jugend.pdf', 'assets/uploads/media/documents/1581793109b1_modellsatz_jugend.pdf', '2020-02-15 18:58:29', 1, 1),
(19, 3, 'book 3', 'document', 'B1_Uebungssatz_Jugendliche.pdf', 'assets/uploads/media/documents/1581794865B1_Uebungssatz_Jugendliche.pdf', '2020-02-15 19:27:45', 1, 1),
(20, 3, 'book 4 ', 'document', 'B1_Uebungssatz_Jugendliche.pdf', 'assets/uploads/media/documents/1581840530B1_Uebungssatz_Jugendliche.pdf', '2020-02-16 08:08:50', 1, 1),
(21, 4, 'book 1', 'document', 'b2_modellsatz_erwachsene.pdf', 'assets/uploads/media/documents/1581840585b2_modellsatz_erwachsene.pdf', '2020-02-16 08:09:48', 1, 1),
(22, 4, 'book 2 ', 'document', 'b2_modellsatz_jugendliche.pdf', 'assets/uploads/media/documents/1581842737b2_modellsatz_jugendliche.pdf', '2020-02-16 08:45:39', 1, 1),
(23, 4, 'book 3', 'document', 'c2_modellsatz.pdf', 'assets/uploads/media/documents/1581842789c2_modellsatz.pdf', '2020-02-16 08:46:29', 1, 1),
(24, 4, 'book 4 ', 'document', 'c2-uebungssatz.pdf', 'assets/uploads/media/documents/1581842825c2-uebungssatz.pdf', '2020-02-16 08:47:05', 1, 1),
(25, 1, 'audio 1', 'audio', 'fit1_01_uebungssatz.mp4', 'assets/uploads/media/documents/1581844820fit1_01_uebungssatz.mp4', '2020-02-16 09:20:26', 1, 1),
(26, 1, 'audio 2', 'audio', 'fit1_01_uebungssatz.mp4', 'assets/uploads/media/documents/1581844958fit1_01_uebungssatz.mp4', '2020-02-16 09:22:42', 1, 1),
(29, 1, 'audio 3', 'audio', 'file_example_MP3_700KB.mp3', 'assets/uploads/media/documents/1581934636file_example_MP3_700KB.mp3', '2020-02-17 10:17:16', 1, 1),
(30, 1, 'audio 4', 'audio', 'file_example_MP3_700KB.mp3', 'assets/uploads/media/audios/1581935445file_example_MP3_700KB.mp3', '2020-02-17 10:30:45', 1, 1),
(31, 1, 'audio 5', 'audio', '14135450111-20200110192529.aac', 'assets/uploads/media/audios/158193603314135450111-20200110192529.aac', '2020-02-17 10:40:34', 1, 1),
(32, 2, 'audio 1', 'audio', 'a2_fit_modellsatz.mp4', 'assets/uploads/media/audios/1581957588a2_fit_modellsatz.mp4', '2020-02-17 16:39:55', 1, 1),
(33, 2, 'audio 2', 'audio', 'c1_modellsatz.mp4', 'assets/uploads/media/audios/1581958108c1_modellsatz.mp4', '2020-02-17 16:48:53', 1, 1),
(34, 2, 'audio 3', 'audio', 'c1_uebungssatz.mp4', 'assets/uploads/media/audios/1581958299c1_uebungssatz.mp4', '2020-02-17 16:52:02', 1, 1),
(35, 2, 'Audio 4', 'audio', 'c1_uebungssatz.mp4', 'assets/uploads/media/audios/1581958475c1_uebungssatz.mp4', '2020-02-17 16:54:52', 1, 1),
(36, 3, 'audio 1', 'audio', 'b1_modellsatz_erwachsene.mp4', 'assets/uploads/media/audios/1581958605b1_modellsatz_erwachsene.mp4', '2020-02-17 16:57:00', 1, 1),
(37, 3, 'audio 2', 'audio', 'b1_modellsatz_jugendliche.mp4', 'assets/uploads/media/audios/1581958738b1_modellsatz_jugendliche.mp4', '2020-02-17 16:59:16', 1, 1),
(38, 3, 'audio 3', 'audio', 'b1_uebungssatz_erwachsene.mp4', 'assets/uploads/media/audios/1581958876b1_uebungssatz_erwachsene.mp4', '2020-02-17 17:01:39', 1, 1),
(39, 2, 'Audio 4', 'audio', 'b1_uebungssatz_jugendliche.mp3', 'assets/uploads/media/audios/1581959142b1_uebungssatz_jugendliche.mp3', '2020-02-17 17:06:28', 1, 1),
(40, 3, 'audio 4', 'audio', 'b1_uebungssatz_jugendliche.mp3', 'assets/uploads/media/audios/1581959607b1_uebungssatz_jugendliche.mp3', '2020-02-17 17:14:10', 1, 1),
(41, 4, 'audio 4', 'audio', 'b2_modellsatz_jugendliche.mp4', 'assets/uploads/media/audios/1581959834b2_modellsatz_jugendliche.mp4', '2020-02-17 17:17:29', 1, 1),
(42, 4, 'audio 2', 'audio', 'b2_modellsatz_erwachsene.mp4', 'assets/uploads/media/audios/1581959901b2_modellsatz_erwachsene.mp4', '2020-02-17 17:18:39', 1, 1),
(43, 2, 'video1', 'video', 'a2_modellsatz3_x26411.mp4', 'assets/uploads/media/videos/1581960015a2_modellsatz3_x26411.mp4', '2020-02-17 17:20:20', 1, 1),
(44, 2, 'video2', 'video', 'a2_modellsatz3_x26425555848646546811.mp4', 'assets/uploads/media/videos/1581960590a2_modellsatz3_x26425555848646546811.mp4', '2020-02-17 17:30:04', 1, 1),
(45, 1, 'video1', 'video', 'y2mate.com - goethe_zertifikat_a1_start_deutsch_1_mndlicher_teil_sprechen_1_2_und_3_xl-GXHrIzIo_360p', 'assets/uploads/media/videos/1581960679y2mate.com_-_goethe_zertifikat_a1_start_deutsch_1_mndlicher_teil_sprechen_1_2_und_3_xl-GXHrIzIo_360p.mp4', '2020-02-17 17:31:34', 1, 1),
(46, 1, 'video2', 'video', 'y2mate.com - goethe_zertifikat_a1_start_deutsch_1_mndlicher_teil_sprechen_1_2_und_3_xl-GXHrIzIo_360p', 'assets/uploads/media/videos/1581961307y2mate.com_-_goethe_zertifikat_a1_start_deutsch_1_mndlicher_teil_sprechen_1_2_und_3_xl-GXHrIzIo_360p.mp4', '2020-02-17 17:42:02', 1, 1),
(47, 3, 'VIDEO 2', 'video', 'y2mate.com - zd_b1_sprechen_prfung_goethe_institut_zertifikat_b1_sprechen_prfung_FxVb-UMSPj8_360p.mp', 'assets/uploads/media/videos/1581962250y2mate.com_-_zd_b1_sprechen_prfung_goethe_institut_zertifikat_b1_sprechen_prfung_FxVb-UMSPj8_360p.mp4', '2020-02-17 17:57:46', 1, 1),
(48, 3, 'VIDEO 2', 'video', 'y2mate.com - mndliche_prfung_telc_deutsch_b1_9lkyjt0j3Bs_360p.mp4', 'assets/uploads/media/videos/1581962885y2mate.com_-_mndliche_prfung_telc_deutsch_b1_9lkyjt0j3Bs_360p.mp4', '2020-02-17 18:08:20', 1, 1),
(49, 1, 'PHOTO 1', 'photo', 'AlbumArt_{3E4F44AC-6AA3-431B-A1AF-3826D48B45C5}_Large.jpg', 'assets/uploads/media/photos/1581962979AlbumArt_3E4F44AC-6AA3-431B-A1AF-3826D48B45C5_Large.jpg', '2020-02-17 18:09:39', 1, 1),
(50, 1, 'PHOTO 2 ', 'photo', 'AlbumArt_{7A012F11-5CC4-4E04-ACF0-CBFC5AE1A159}_Large.jpg', 'assets/uploads/media/photos/1581963002AlbumArt_7A012F11-5CC4-4E04-ACF0-CBFC5AE1A159_Large.jpg', '2020-02-17 18:10:03', 1, 1),
(51, 1, 'PHOTO 3', 'photo', 'AlbumArt_{C3E08FC0-E249-4A08-A117-590DD0BAD603}_Small.jpg', 'assets/uploads/media/photos/1581963020AlbumArt_C3E08FC0-E249-4A08-A117-590DD0BAD603_Small.jpg', '2020-02-17 18:10:20', 1, 1),
(52, 2, 'PHOTO 1', 'photo', 'AlbumArt_{20596281-AEE8-4AB1-AFB9-E929860659AF}_Small.jpg', 'assets/uploads/media/photos/1581963261AlbumArt_20596281-AEE8-4AB1-AFB9-E929860659AF_Small.jpg', '2020-02-17 18:14:21', 1, 1),
(53, 2, 'PHOTO 2 ', 'photo', 'AlbumArt_{999127B7-3D29-4009-B0DB-4FC0FC7A2FD4}_Large.jpg', 'assets/uploads/media/photos/1581963276AlbumArt_999127B7-3D29-4009-B0DB-4FC0FC7A2FD4_Large.jpg', '2020-02-17 18:14:36', 1, 1),
(54, 2, 'PHOTO 3', 'photo', 'AlbumArt_{950DF02C-B91A-4EC4-80F9-44A41380F32F}_Large.jpg', 'assets/uploads/media/photos/1581963294AlbumArt_950DF02C-B91A-4EC4-80F9-44A41380F32F_Large.jpg', '2020-02-17 18:14:54', 1, 1),
(55, 3, 'PHOTO 1', 'photo', 'AlbumArt_{B5020207-474E-4720-BE94-7F0C7B4B9A00}_Small.jpg', 'assets/uploads/media/photos/1581965246AlbumArt_B5020207-474E-4720-BE94-7F0C7B4B9A00_Small.jpg', '2020-02-17 18:47:26', 1, 1),
(56, 3, 'PHOTO 2 ', 'photo', 'AlbumArt_{999127B7-3D29-4009-B0DB-4FC0FC7A2FD4}_Large.jpg', 'assets/uploads/media/photos/1581965273AlbumArt_999127B7-3D29-4009-B0DB-4FC0FC7A2FD4_Large.jpg', '2020-02-17 18:47:53', 1, 1),
(57, 3, 'PHOTO 3', 'photo', 'AlbumArt_{20596281-AEE8-4AB1-AFB9-E929860659AF}_Large.jpg', 'assets/uploads/media/photos/1581965293AlbumArt_20596281-AEE8-4AB1-AFB9-E929860659AF_Large.jpg', '2020-02-17 18:48:13', 1, 1),
(58, 3, 'PHOTO 4', 'photo', 'AlbumArt_{999127B7-3D29-4009-B0DB-4FC0FC7A2FD4}_Large.jpg', 'assets/uploads/media/photos/1581965318AlbumArt_999127B7-3D29-4009-B0DB-4FC0FC7A2FD4_Large.jpg', '2020-02-17 18:48:38', 1, 1),
(59, 4, 'PHOTO 1', 'photo', 'AlbumArt_{950DF02C-B91A-4EC4-80F9-44A41380F32F}_Large.jpg', 'assets/uploads/media/photos/1581966016AlbumArt_950DF02C-B91A-4EC4-80F9-44A41380F32F_Large.jpg', '2020-02-17 19:00:16', 1, 1),
(60, 4, 'PHOTO2', 'photo', 'AlbumArt_{950DF02C-B91A-4EC4-80F9-44A41380F32F}_Large.jpg', 'assets/uploads/media/photos/1581966047AlbumArt_950DF02C-B91A-4EC4-80F9-44A41380F32F_Large.jpg', '2020-02-17 19:00:47', 1, 1),
(61, 4, 'PHOTO 3', 'photo', 'AlbumArt_{B969CA59-9247-47F6-ACAB-F8420DB7B194}_Large.jpg', 'assets/uploads/media/photos/1581966068AlbumArt_B969CA59-9247-47F6-ACAB-F8420DB7B194_Large.jpg', '2020-02-17 19:01:08', 1, 1),
(62, 4, 'PHOTO 4', 'photo', 'AlbumArt_{999127B7-3D29-4009-B0DB-4FC0FC7A2FD4}_Large.jpg', 'assets/uploads/media/photos/1581966085AlbumArt_999127B7-3D29-4009-B0DB-4FC0FC7A2FD4_Large.jpg', '2020-02-17 19:01:25', 1, 1),
(63, 4, 'PHOTO 4', 'photo', 'AlbumArt_{999127B7-3D29-4009-B0DB-4FC0FC7A2FD4}_Large.jpg', 'assets/uploads/media/photos/1581966085AlbumArt_999127B7-3D29-4009-B0DB-4FC0FC7A2FD4_Large1.jpg', '2020-02-17 19:01:25', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_student_allocation`
--

CREATE TABLE `sch_student_allocation` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sch_submited_assignments`
--

CREATE TABLE `sch_submited_assignments` (
  `submission_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `discription` longtext,
  `submitted_by` int(11) DEFAULT NULL,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_submited_assignments`
--

INSERT INTO `sch_submited_assignments` (`submission_id`, `assignment_id`, `filename`, `path`, `discription`, `submitted_by`, `submission_date`, `status`) VALUES
(1, 1, 'Site map.docx', 'assets/uploads/assignments/submission/1562060370Site_map.docx', 'This is test data.', 5, '2019-07-02 11:39:30', 0),
(2, 18, '1562059428Site_map.docx', 'assets/uploads/assignments/submission/15630120851562059428Site_map.docx', 'yesy', 5, '2019-07-13 12:01:25', 1),
(3, 9, '15630120851562059428Site_map.docx', 'assets/uploads/assignments/submission/156301257915630120851562059428Site_map.docx', 'testee', 5, '2019-07-13 12:09:39', 1),
(4, 16, '156301257915630120851562059428Site_map.docx', 'assets/uploads/assignments/submission/1563012662156301257915630120851562059428Site_map.docx', 'teste by manav', 5, '2019-07-13 12:11:02', 1),
(5, 14, '1563012662156301257915630120851562059428Site_map.docx', 'assets/uploads/assignments/submission/15630126811563012662156301257915630120851562059428Site_map.docx', 'test by nilesh', 5, '2019-07-13 12:11:21', 1),
(6, 19, '1563012662156301257915630120851562059428Site_map.docx', 'assets/uploads/assignments/submission/15630147341563012662156301257915630120851562059428Site_map.docx', 'submit by manav', 5, '2019-07-13 12:45:34', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_users`
--

CREATE TABLE `sch_users` (
  `user_id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  `groups` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_users`
--

INSERT INTO `sch_users` (`user_id`, `class_id`, `fullname`, `group_id`, `level`, `groups`, `username`, `password`, `added_date`, `status`) VALUES
(1, NULL, 'Amogh Tamhankar', 1, '5', 'A', 'amogh', '6a7f29f89db097da35b1504afd4c39d1', '2019-07-03 19:46:19', 1),
(2, 2, 'Sanskar Chaurasia', 2, NULL, 'A', 'sanskar', '6a7f29f89db097da35b1504afd4c39d1', '2020-02-16 08:35:57', 1),
(5, 2, 'Dev Barbhaya', 2, '1', 'A', 'Dev', '6a7f29f89db097da35b1504afd4c39d1', '2019-07-03 19:46:56', 1),
(8, 2, 'Tirth Choksey', 2, '1', 'A', 'tirth', '6a7f29f89db097da35b1504afd4c39d1', '2020-02-16 09:03:18', 1),
(18, 2, 'Yash Ghag', 2, NULL, NULL, 'yash', '6a7f29f89db097da35b1504afd4c39d1', '2020-02-16 08:36:39', 1),
(19, 1, 'Katie Boermeester', 2, NULL, NULL, 'Katie', '6a7f29f89db097da35b1504afd4c39d1', '2020-04-12 19:32:49', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- Indexes for table `sch_assignments`
--
ALTER TABLE `sch_assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_assignment_files`
--
ALTER TABLE `sch_assignment_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_class`
--
ALTER TABLE `sch_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_courses`
--
ALTER TABLE `sch_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `sch_events`
--
ALTER TABLE `sch_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_media`
--
ALTER TABLE `sch_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_student_allocation`
--
ALTER TABLE `sch_student_allocation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_submited_assignments`
--
ALTER TABLE `sch_submited_assignments`
  ADD PRIMARY KEY (`submission_id`);

--
-- Indexes for table `sch_users`
--
ALTER TABLE `sch_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `sch_assignments`
--
ALTER TABLE `sch_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sch_assignment_files`
--
ALTER TABLE `sch_assignment_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sch_class`
--
ALTER TABLE `sch_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sch_courses`
--
ALTER TABLE `sch_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sch_events`
--
ALTER TABLE `sch_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sch_media`
--
ALTER TABLE `sch_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `sch_student_allocation`
--
ALTER TABLE `sch_student_allocation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sch_submited_assignments`
--
ALTER TABLE `sch_submited_assignments`
  MODIFY `submission_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sch_users`
--
ALTER TABLE `sch_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
