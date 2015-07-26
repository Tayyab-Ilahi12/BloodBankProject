-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2015 at 06:30 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_info`
--

CREATE TABLE IF NOT EXISTS `blood_info` (
  `ID` int(4) NOT NULL,
  `date` date NOT NULL,
  `BLOOD_GROUP` char(5) NOT NULL,
  `BLOOD_AMOUNT` int(11) NOT NULL,
  `DNR_ID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_info`
--

INSERT INTO `blood_info` (`ID`, `date`, `BLOOD_GROUP`, `BLOOD_AMOUNT`, `DNR_ID`) VALUES
(1, '2015-06-03', 'AB-', 1, 1),
(2, '2015-06-09', 'B+', 1, 8),
(3, '2015-06-15', 'AB+', 2, 2),
(4, '2015-06-17', 'A-', 1, 4),
(5, '2015-06-18', 'B-', 1, 3),
(6, '2015-06-20', 'O-', 1, 5),
(7, '2015-06-25', 'O-', 1, 6),
(8, '2015-07-03', 'A+', 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `blood_request`
--

CREATE TABLE IF NOT EXISTS `blood_request` (
  `request_id` int(2) NOT NULL,
  `blood_amount` int(10) NOT NULL,
  `BLOOD_GROUP` char(5) NOT NULL,
  `AREA` char(20) NOT NULL,
  `hospital` char(50) NOT NULL,
  `BRN_ID` int(2) NOT NULL,
  `is_accept` tinyint(4) NOT NULL,
  `RQSTR_ID` int(2) NOT NULL,
  `RQSTR_NAME` varchar(50) NOT NULL,
  `RQSTR_ADD` text NOT NULL,
  `RQSTR_EMAIL` varchar(50) NOT NULL,
  `RQSTR_PHONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `branch_info`
--

CREATE TABLE IF NOT EXISTS `branch_info` (
  `BRN_ID` int(2) NOT NULL,
  `BRN_NAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  `PHONE` char(15) NOT NULL,
  `AREA` char(15) NOT NULL,
  `EMAIL` char(35) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COMMENT='this table contains the data about all of the branch of our blood bank';

--
-- Dumping data for table `branch_info`
--

INSERT INTO `branch_info` (`BRN_ID`, `BRN_NAME`, `ADDRESS`, `PHONE`, `AREA`, `EMAIL`) VALUES
(1, 'Mohakhali', 'TB Gate,Mohakha', '01675435675', 'Gulshan', 'mohakhali_br@bloodbank.org'),
(2, 'Bonosree', ' Block E,Bonosr', '01675435435', 'Rampura', 'bonosree_br@bloodbank.org'),
(3, 'Dhanmondi', '32,Dhanmondi', '01675435768', 'Dhanmondi', 'dhanmondi_br@bloodbank.org'),
(4, 'Motijheel', 'AGB Colony', '01675435276', 'Motijheel', 'motijheel_br@bloodbank.org');

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE IF NOT EXISTS `donor_info` (
  `DNR_ID` int(2) NOT NULL,
  `DNR_NAME` varchar(25) NOT NULL,
  `ADDRESS` char(30) NOT NULL,
  `AREA` char(25) NOT NULL,
  `PHONE` char(12) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `BLOOD_GROUP` char(5) NOT NULL,
  `BRN_ID` int(2) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`DNR_ID`, `DNR_NAME`, `ADDRESS`, `AREA`, `PHONE`, `EMAIL`, `BLOOD_GROUP`, `BRN_ID`, `age`, `weight`) VALUES
(1, 'Abul Kashem', 'Bonosree,Dhaka', 'Rampura', '01556386466', 'akashem@gmail.com', 'AB-', 2, 0, 0),
(2, 'Afia Zahin Suzana', '32 Dhanmondi', 'Dhanmondi', '01751615990', 'suzana.afia@gmail.com', 'AB+', 3, 0, 0),
(3, 'Muyeed Hasan', 'Dhanmondi,Dhaka', 'Dhanmondi', '01564365789', 'h.muyeed@gmail.com', 'A-', 3, 0, 0),
(4, 'Pranjal Chakraborty', 'Mohakhali,Dhaka', 'Gulshan', '01573950327', 'pcborty@gmail.com', 'B-', 1, 0, 0),
(5, 'Tamanna Hasib', 'Banani,Dhaka', 'Gulshan', '01566476898', 'h.tamanna@gmail.com', 'O-', 1, 0, 0),
(6, 'Farhan al Hussain', 'Shantinagar,Dhaka', 'Motijheel', '01756948675', 'f.hussain@gmail.com', 'O-', 4, 0, 0),
(7, 'Anupam Chowdhury', 'Badda,Dhaka', 'Rampura', '01754789564', 'a.vodrolok@gmail.com', 'A+', 2, 0, 0),
(8, 'Nafees', 'Shantinagar,Dhaka', 'Motijheel', '01754789520', 'nafees@gmail.com', 'B+', 4, 0, 0),
(9, 'Test Nme', 'test address', 'Motijheel', '013290382908', 'p@x.com', 'AB+', 0, 0, 0),
(10, 'Test Nme', 'test address', 'Motijheel', '013290382908', 'p@x.com', 'AB+', 0, 0, 0),
(11, 'Test Nme', 'test address', 'Motijheel', '013290382908', 'p@x.com', 'AB+', 0, 0, 0),
(12, '', '', 'Mohakhali', '', '', 'Not T', 0, 0, 0),
(13, '', '', 'Mohakhali', '', '', 'Not T', 0, 0, 0),
(14, '', '', 'Mohakhali', '', '', 'Not T', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `E_ID` int(5) NOT NULL,
  `E_NAME` varchar(20) NOT NULL,
  `E_ADDRESS` char(30) NOT NULL,
  `E_DESIGNATION` char(15) NOT NULL,
  `E_SALARY` char(6) NOT NULL,
  `EMAIL` char(30) NOT NULL,
  `PHONE` char(15) NOT NULL,
  `BRN_ID` int(2) NOT NULL,
  `E_Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`E_ID`, `E_NAME`, `E_ADDRESS`, `E_DESIGNATION`, `E_SALARY`, `EMAIL`, `PHONE`, `BRN_ID`, `E_Pass`) VALUES
(1, 'Pranjal Chakraborty', 'Mohakhali,Dh aka', 'Manager', '10,000', 'pcborty@bloddbank.org', '01573950327', 1, ' 827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Muyeed Hasan', 'Dhanmondi,Dhaka', 'R ecord Keeper', '8,000', 'm.hasan@bloddbank.org', '01567498098', 1, ' e10adc3949ba59abbe56e057f20f883e'),
(3, 'Naima Zaman', 'Mirpur,Dhaka', 'Manager', '10,000', 'naima.z@bloddbank.org', '01774609959', 3, ''),
(4, 'Fahmida Hasan', 'Mohammadpur,Dhaka', 'Record Kepper', '8000', 'suimui.s@bloddbank.org', '01790435678', 3, ''),
(5, 'Rezaur Rashid', 'Mohammadpur,Dhaka', 'Manager', '10000', 'r.rashid@bloddbank.org', '01790454389', 2, ''),
(6, 'Rohan Sajid', 'Madartek,Dhaka', 'Record Kepper', '8,000', 's.zaman@bloddbank.org', '01790594672', 2, ''),
(7, 'Somania Dina', 'Mohakhali,Dhaka', 'Manager', '10,000', 's.dina@bloddbank.org', '01775123546', 4, ''),
(8, 'Chaity Swarnaker', 'Mohakhali,Dhaka', 'Record Kepper', '8,000', 's.chaity@bloddbank.org', '01790875496', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `feed_back`
--

CREATE TABLE IF NOT EXISTS `feed_back` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_info`
--
ALTER TABLE `blood_info`
  ADD KEY `DNR_ID` (`DNR_ID`);

--
-- Indexes for table `blood_request`
--
ALTER TABLE `blood_request`
  ADD PRIMARY KEY (`request_id`), ADD KEY `BRN_ID` (`BRN_ID`);

--
-- Indexes for table `branch_info`
--
ALTER TABLE `branch_info`
  ADD PRIMARY KEY (`BRN_ID`) COMMENT 'this is branch id, will increase continuously ', ADD UNIQUE KEY `BRN_ID` (`BRN_ID`), ADD UNIQUE KEY `BRN_ID_2` (`BRN_ID`), ADD KEY `BRN_ID_3` (`BRN_ID`);

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`DNR_ID`), ADD KEY `BRN_ID` (`BRN_ID`), ADD KEY `BRN_ID_2` (`BRN_ID`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`E_ID`), ADD KEY `BRN_ID` (`BRN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_request`
--
ALTER TABLE `blood_request`
  MODIFY `request_id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `branch_info`
--
ALTER TABLE `branch_info`
  MODIFY `BRN_ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `DNR_ID` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_info`
--
ALTER TABLE `blood_info`
ADD CONSTRAINT `blood_info_ibfk_1` FOREIGN KEY (`DNR_ID`) REFERENCES `donor_info` (`DNR_ID`);

--
-- Constraints for table `employee_info`
--
ALTER TABLE `employee_info`
ADD CONSTRAINT `employee_info_ibfk_1` FOREIGN KEY (`BRN_ID`) REFERENCES `branch_info` (`BRN_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
