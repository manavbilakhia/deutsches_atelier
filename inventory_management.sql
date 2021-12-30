-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2019 at 11:54 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `colouradd`
--

DROP TABLE IF EXISTS `colouradd`;
CREATE TABLE IF NOT EXISTS `colouradd` (
  `colour_id` int(11) NOT NULL AUTO_INCREMENT,
  `colour_code` varchar(10) DEFAULT NULL,
  `colour_name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`colour_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colouradd`
--

INSERT INTO `colouradd` (`colour_id`, `colour_code`, `colour_name`) VALUES
(1, 'B', 'Black'),
(2, 'G', 'Green'),
(3, 'R', 'Red'),
(4, 'O', 'Orange'),
(5, 'P', 'Purple');

-- --------------------------------------------------------

--
-- Table structure for table `designadd`
--

DROP TABLE IF EXISTS `designadd`;
CREATE TABLE IF NOT EXISTS `designadd` (
  `design_id` int(40) NOT NULL AUTO_INCREMENT,
  `design_code` varchar(40) NOT NULL,
  `design_name` varchar(45) NOT NULL,
  PRIMARY KEY (`design_id`),
  UNIQUE KEY `Design name_UNIQUE` (`design_name`),
  UNIQUE KEY `design_code_UNIQUE` (`design_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designadd`
--

INSERT INTO `designadd` (`design_id`, `design_code`, `design_name`) VALUES
(1, 'C', 'Circle'),
(2, 'S', 'Square'),
(3, 'T', 'Triangle'),
(4, 'D', 'Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `manufactureadd`
--

DROP TABLE IF EXISTS `manufactureadd`;
CREATE TABLE IF NOT EXISTS `manufactureadd` (
  `manufacture_id` int(11) NOT NULL AUTO_INCREMENT,
  `manufacture_design` varchar(45) DEFAULT NULL,
  `manufacture_colour` varchar(45) DEFAULT NULL,
  `manufacture_quantity` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_extra` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_total` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_priority` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_gsno` varchar(45) DEFAULT NULL,
  `manufacture_partyno` varchar(45) DEFAULT NULL,
  `manufacture_disp` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_rem` int(11) UNSIGNED ZEROFILL DEFAULT NULL,
  `manufacture_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`manufacture_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufactureadd`
--

INSERT INTO `manufactureadd` (`manufacture_id`, `manufacture_design`, `manufacture_colour`, `manufacture_quantity`, `manufacture_extra`, `manufacture_total`, `manufacture_priority`, `manufacture_gsno`, `manufacture_partyno`, `manufacture_disp`, `manufacture_rem`, `manufacture_date`) VALUES
(1, 'Circle', 'Black', 00000000010, 00000000013, 00000000023, 00000000001, 'ABC123', 'PartyOne', 00000000020, 00000000003, '01/09/2019'),
(2, 'Triangle', 'Red', 00000000023, NULL, 00000000023, NULL, NULL, 'PartyOne', NULL, 00000000023, '02/09/2019'),
(3, 'Diamond', 'Purple', 00000000058, NULL, 00000000058, NULL, NULL, 'PartyFive', NULL, 00000000058, '03/09/2019'),
(4, 'Triangle', 'Black', 00000000023, 00000000007, 00000000030, 00000000002, 'LMN456', 'PartyOne', 00000000025, 00000000005, '01/09/2019'),
(5, 'Circle', 'Black', 00000000034, NULL, 00000000034, NULL, NULL, 'PartyFour', NULL, 00000000034, '02/09/2019'),
(6, 'Square', 'Orange', 00000000054, NULL, 00000000054, NULL, NULL, 'PartyTwo', NULL, 00000000054, '03/09/2019'),
(7, 'Circle', 'Black', 00000000022, 00000000012, 00000000034, 00000000003, 'XYZ789', 'PartyOne', 00000000030, 00000000004, '01/09/2019'),
(8, 'Circle', 'Purple', 00000000043, NULL, 00000000043, NULL, NULL, 'PartyOne', NULL, 00000000043, '02/09/2019'),
(9, 'Square', 'Green', 00000000055, NULL, 00000000055, NULL, NULL, 'PartyTwo', NULL, 00000000055, '03/09/2019');

-- --------------------------------------------------------

--
-- Table structure for table `orderadd`
--

DROP TABLE IF EXISTS `orderadd`;
CREATE TABLE IF NOT EXISTS `orderadd` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_design` varchar(45) DEFAULT NULL,
  `order_colour` varchar(45) DEFAULT NULL,
  `order_quantity` varchar(45) DEFAULT NULL,
  `order_party` varchar(45) DEFAULT NULL,
  `order_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderadd`
--

INSERT INTO `orderadd` (`order_id`, `order_design`, `order_colour`, `order_quantity`, `order_party`, `order_date`) VALUES
(1, 'Circle', 'Black', '10', 'PartyOne', '01/09/2019'),
(2, 'Triangle', 'Red', '23', 'PartyOne', '02/09/2019'),
(3, 'Diamond', 'Purple', '58', 'PartyFive', '03/09/2019'),
(4, 'Triangle', 'Black', '23', 'PartyThree', '01/09/2019'),
(5, 'Circle', 'Black', '34', 'PartyFour', '02/09/2019'),
(6, 'Square', 'Orange', '54', 'PartyTwo', '03/09/2019'),
(7, 'Circle', 'Black', '22', 'PartyOne', '01/09/2019'),
(8, 'Circle', 'Purple', '43', 'PartyOne', '02/09/2019'),
(9, 'Square', 'Green', '55', 'PartyTwo', '03/09/2019');

-- --------------------------------------------------------

--
-- Table structure for table `partyadd`
--

DROP TABLE IF EXISTS `partyadd`;
CREATE TABLE IF NOT EXISTS `partyadd` (
  `party_id` int(40) NOT NULL AUTO_INCREMENT,
  `party_no` varchar(40) DEFAULT NULL,
  `party_name` varchar(45) NOT NULL,
  PRIMARY KEY (`party_id`),
  UNIQUE KEY `party_name_UNIQUE` (`party_name`),
  UNIQUE KEY `party_no_UNIQUE` (`party_no`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partyadd`
--

INSERT INTO `partyadd` (`party_id`, `party_no`, `party_name`) VALUES
(1, 'P1', 'PartyOne'),
(2, 'P2', 'PartyTwo'),
(3, 'P3', 'PartyThree'),
(4, 'P4', 'PartyFour'),
(5, 'P5', 'PartyFive');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
