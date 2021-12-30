-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2019 at 06:06 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
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
(25, 0, 5, 'hi', '2019-09-18 11:04:58', 1),
(26, 0, 5, 'hi', '2019-09-18 11:05:08', 1),
(27, 0, 5, 'hi', '2019-09-18 11:06:07', 1),
(28, 0, 5, 'hi', '2019-09-18 11:06:07', 1),
(29, 0, 5, 'xvdfg', '2019-09-18 11:06:35', 1),
(30, 0, 5, 'sdsad', '2019-09-18 11:07:28', 1),
(31, 0, 5, 'sadsad', '2019-09-18 11:08:09', 1),
(32, 0, 5, 'asas', '2019-09-18 11:08:49', 1),
(33, 0, 5, 'sasa', '2019-09-18 11:09:06', 1),
(34, 0, 5, 'sasa', '2019-09-18 11:12:47', 1),
(35, 0, 5, '<p><img src=\"upload/New Doc 2019-08-13 23.25.14_3.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2019-09-18 11:13:14', 1),
(36, 0, 5, 'ssasa', '2019-09-18 11:13:30', 1),
(37, 0, 5, 'saas', '2019-09-18 11:15:17', 1),
(38, 5, 1, 'assa', '2019-09-18 11:15:42', 0),
(39, 0, 1, 'sasa', '2019-09-18 11:15:46', 1),
(40, 0, 5, 'asdasd', '2019-09-18 11:17:56', 1),
(41, 0, 5, '<p><img src=\"upload/Untitled.png\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p>this is nilesha match', '2019-09-18 12:03:19', 1),
(42, 5, 1, '????', '2019-09-18 12:04:10', 0),
(43, 1, 5, '????', '2019-09-18 12:05:37', 0),
(44, 1, 5, 'hjhgh', '2019-09-18 12:06:51', 0),
(45, 1, 5, 'asd', '2019-09-18 12:08:12', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
