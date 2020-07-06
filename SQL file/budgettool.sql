-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 17, 2020 at 05:21 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `budgettool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblexpense`
--

DROP TABLE IF EXISTS `tblexpense`;
CREATE TABLE IF NOT EXISTS `tblexpense` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `UserId` int(10) NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) DEFAULT NULL,
  `ExpenseCost` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblexpense`
--

INSERT INTO `tblexpense` (`ID`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`) VALUES
(1, 2, '2020-04-08', 'Milk', '63'),
(2, 2, '2020-04-16', 'Vegitables', '520'),
(3, 2, '2020-04-24', 'Household Items', '5200'),
(4, 2, '2020-04-15', 'Milk', '83'),
(5, 2, '2020-05-01', 'Bed Sheets', '1120'),
(6, 2, '2020-04-17', 'Fruits', '890'),
(7, 2, '2020-04-18', 'Household Items', '5600'),
(8, 2, '2020-05-07', 'Milk', '102'),
(9, 2, '2020-03-21', 'Bed Sheets', '890'),
(10, 2, '2020-05-02', 'Household Items', '1120'),
(11, 2, '2020-04-10', 'Fruits', '560'),
(13, 2, '2020-04-15', 'Tour of Manali', '30000'),
(14, 2, '2020-04-16', 'Milk', '360'),
(15, 3, '2020-04-25', 'Milk', '123'),
(16, 3, '2020-04-09', 'Household Items', '360'),
(17, 3, '2020-04-30', 'Bed Sheets', '3000'),
(18, 3, '2019-05-07', 'Milk', '123'),
(19, 3, '2019-05-14', 'Household Items', '3600'),
(20, 2, '2020-05-06', 'Electric Board Extension', '300'),
(21, 2, '2020-04-16', 'Milk', '123'),
(22, 2, '2019-04-10', 'Household Items', '520'),
(23, 2, '2020-05-13', 'Household Items', '360'),
(25, 8, '2019-05-17', 'Milk', '3600'),
(26, 8, '2020-05-13', 'Bed Sheets', '1025'),
(27, 1, '2020-05-21', 'Computer Mouse', '500'),
(30, 1, '2019-05-18', 'Milk + Bread', '80'),
(31, 10, '2019-05-16', 'Computer Mouse', '500'),
(32, 10, '2019-05-17', 'Milk+Bread', '80'),
(33, 10, '2019-05-18', 'Room Rent', '10000'),
(35, 0, '2020-06-12', 'Travel Bag', '400');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`) VALUES
(1, 'Raj', 'raj@gmail.com', 5655555655, '202cb962ac59075b964b07152d234b70'),
(2, 'Meena', 'meena@gmail.com', 8989898897, '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'Komal', 'khusi@gmail.com', 5645798897, '202cb962ac59075b964b07152d234b70'),
(4, 'Shrivath', 'shan@gmail.com', 7895641236, '202cb962ac59075b964b07152d234b70'),
(9, 'Anuj kumar', 'anuj@gmail.com', 1234567890, 'f925916e2754e5e03f75dd58a5733251'),
(10, 'Test User demo', 'testuser@gmail.com', 987654321, 'f925916e2754e5e03f75dd58a5733251');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
