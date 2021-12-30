-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2019 at 09:25 AM
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
-- Table structure for table `sch_assignments`
--

CREATE TABLE `sch_assignments` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `message` longtext,
  `deadline` date NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_assignments`
--

INSERT INTO `sch_assignments` (`id`, `class_id`, `title`, `message`, `deadline`, `added_by`, `status`) VALUES
(1, 2, 'Assignment 1', 'Student have to complete this assignment in 3 days.', '2019-06-29', 1, 1),
(2, NULL, 'Assignment No1', 'Add Test entries.', '2019-06-29', 1, 1),
(7, NULL, 'Assignment No1', 'Add Test entries.', '2019-07-29', 1, 1),
(9, 2, 'Assignment No1', 'Add Test entries.', '2019-07-27', 1, 1),
(11, NULL, 'Assignment No 2', 'Complete till saturday', '2019-06-29', 1, 1),
(12, NULL, 'Test ', 'test', '2019-07-14', 1, 1),
(13, NULL, 'testfor today', 'test', '2019-07-14', 1, 1),
(14, 2, 'testfor today', 'test', '2019-07-14', 1, 1),
(15, NULL, 'testfor monday', 'test', '2019-07-15', 1, 1),
(16, 2, 'test for monday', 'test submited', '2019-07-19', 1, 1),
(19, 2, 'test by manav on13', 'need to do for manav', '2019-07-19', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_assignment_files`
--

CREATE TABLE `sch_assignment_files` (
  `id` int(11) NOT NULL,
  `assignment_id` int(11) DEFAULT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `path` varchar(500) DEFAULT NULL,
  `added_date` date NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_assignment_files`
--

INSERT INTO `sch_assignment_files` (`id`, `assignment_id`, `filename`, `path`, `added_date`, `status`) VALUES
(1, 12, 'FileZilla.xml', 'assets/uploads/assignments/1563006939FileZilla.xml', '2019-07-13', 1),
(3, 9, 'Activation offer_21-12-2018.jpg', 'assets/uploads/assignments/Activation_offer_21-12-2018.jpg', '2019-06-26', 1),
(4, 9, 'db_credetials.txt', 'assets/uploads/assignments/db_credetials.txt', '2019-06-26', 1),
(7, 11, 'db_credetials.txt', 'assets/uploads/assignments/1561576985db_credetials.txt', '2019-06-26', 1),
(8, 11, 'dhoni_portal.png', 'assets/uploads/assignments/1561576985dhoni_portal.png', '2019-06-26', 1),
(9, 14, 'FileZilla.xml', 'assets/uploads/assignments/1563007176FileZilla.xml', '2019-07-13', 1),
(10, 15, 'FileZilla.xml', 'assets/uploads/assignments/1563007302FileZilla.xml', '2019-07-13', 1),
(11, 16, 'FileZilla.xml', 'assets/uploads/assignments/1563007816FileZilla.xml', '2019-07-13', 1),
(12, 17, 'FileZilla.xml', 'assets/uploads/assignments/1563011160FileZilla.xml', '2019-07-13', 1),
(13, 18, 'FileZilla.xml', 'assets/uploads/assignments/1563011641FileZilla.xml', '2019-07-13', 1),
(14, 19, '15630126811563012662156301257915630120851562059428Site_map.docx', 'assets/uploads/assignments/156301468615630126811563012662156301257915630120851562059428Site_map.docx', '2019-07-13', 1);

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
(3, 'Class 3', '1', '1', '2019-07-01 14:02:43', 1);

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
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_courses`
--

INSERT INTO `sch_courses` (`course_id`, `class_id`, `course_title`, `start_date`, `end_date`, `description`, `added_date`, `added_by`, `status`) VALUES
(1, 2, 'Pre Elementry Course', '2019-07-01', '2019-08-15', 'This Course Of language consist of introduction to the language.\r\nstudent will learn how to read, how to write in a language.\r\nBasic informal content writing and formal content writing will be teached to the students.\r\nAlso students will also learn to how to communicate in a language.', '2019-07-02 01:24:02', 1, 1);

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
(1, 2, 'Induction day', 'Student have to Introduct to get familier with their collegues.', '2019-07-01', '2019-07-01', 1, 1),
(2, NULL, 'Induction Day', 'this is first day .', '2019-07-02', '2019-07-02', 1, 1);

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
  `added_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `added_by` int(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_media`
--

INSERT INTO `sch_media` (`id`, `class_id`, `title`, `type`, `filename`, `path`, `added_date`, `added_by`, `status`) VALUES
(4, NULL, 'New Audio file', 'photo', 'noise_red.mp3', 'assets/uploads/media/photos/1561667362noise_red.mp3', '2019-06-27 22:29:22', 1, 1),
(5, 2, 'Star trail', 'video', 'star_trails.mkv', 'assets/uploads/media/videos/1561744738star_trails.mkv', '2019-06-28 19:58:59', 1, 1),
(6, NULL, 'test', 'photo', '0ab716fd9734c9daa5be427b5b3114e7-1024x576.jpg', 'assets/uploads/media/photos/15625720050ab716fd9734c9daa5be427b5b3114e7-1024x576.jpg', '2019-07-08 09:46:46', 1, 1),
(7, NULL, 'test', 'video', 'WardWiz AV (2).avi', 'assets/uploads/media/videos/1562768617WardWiz_AV_(2).avi', '2019-07-10 16:23:38', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sch_student_allocation`
--

CREATE TABLE `sch_student_allocation` (
  `id` int(11) NOT NULL,
  `class_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `added_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
  `submission_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
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
(1, NULL, 'Mr Smith', 1, '5', 'A', 'smith', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-03 19:46:19', 1),
(5, 2, 'Akshay B', 2, '1', 'A', 'akshay', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-03 19:46:56', 1),
(9, NULL, 'Sasha S', 1, NULL, NULL, 'sasha', '81dc9bdb52d04dc20036dbd8313ed055', '2019-07-08 05:26:44', 1);

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `sch_assignments`
--
ALTER TABLE `sch_assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sch_assignment_files`
--
ALTER TABLE `sch_assignment_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sch_class`
--
ALTER TABLE `sch_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sch_courses`
--
ALTER TABLE `sch_courses`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sch_events`
--
ALTER TABLE `sch_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sch_media`
--
ALTER TABLE `sch_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
