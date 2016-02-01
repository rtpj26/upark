-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2015 at 09:49 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `upark`
--
CREATE DATABASE IF NOT EXISTS `upark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `upark`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applicant`
--

DROP TABLE IF EXISTS `tbl_applicant`;
CREATE TABLE `tbl_applicant` (
  `APPLICANT_ID` int(11) NOT NULL,
  `APPLICANT_FNAME` varchar(255) NOT NULL,
  `APPLICANT_GENDER` int(11) NOT NULL,
  `APPLICANT_BIRTHDATE` date DEFAULT NULL,
  `APPLICANT_COMPLEXION` varchar(255) NOT NULL,
  `APPLICANT_HEIGHT` double(5,2) NOT NULL,
  `APPLICANT_BUILT` varchar(255) NOT NULL,
  `APPLICANT_ODRIVER1_NAME` varchar(255) NOT NULL,
  `APPLICANT_ODRIVER1_TEL_NO` varchar(255) NOT NULL,
  `APPLICANT_ODRIVER2_NAME` varchar(255) NOT NULL,
  `APPLICANT_ODRIVER2_TEL_NO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content_login`
--

DROP TABLE IF EXISTS `tbl_content_login`;
CREATE TABLE `tbl_content_login` (
  `LOGIN_ID` int(11) NOT NULL,
  `LOGIN_OWNER` varchar(255) NOT NULL,
  `LOGIN_USERNAME` varchar(255) NOT NULL,
  `LOGIN_PASSWORD` varchar(255) NOT NULL,
  `STATUS_ID` int(11) NOT NULL DEFAULT '1',
  `RIGHTS_ID` int(11) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content_login`
--

INSERT INTO `tbl_content_login` (`LOGIN_ID`, `LOGIN_OWNER`, `LOGIN_USERNAME`, `LOGIN_PASSWORD`, `STATUS_ID`, `RIGHTS_ID`) VALUES
(1, 'SUPERADMIN', 'ADMIN', 'ADMIN', 1, 1),
(2, 'Charles Ordonio', 'AkoSiCharles', 'Ch4r0rdxXx', 1, 2),
(3, 'Manager', 'Ak0ZiM4N4jH3r', 'maHN43Yjh3Rsz', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

DROP TABLE IF EXISTS `tbl_designation`;
CREATE TABLE `tbl_designation` (
  `DESIGNATION_ID` int(11) NOT NULL,
  `DESIGNATION_DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`DESIGNATION_ID`, `DESIGNATION_DESCRIPTION`) VALUES
(1, 'USERS'),
(2, 'PASSENGERS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rights`
--

DROP TABLE IF EXISTS `tbl_rights`;
CREATE TABLE `tbl_rights` (
  `RIGHTS_ID` int(11) NOT NULL,
  `RIGHTS_DESCRIPTION` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rights`
--

INSERT INTO `tbl_rights` (`RIGHTS_ID`, `RIGHTS_DESCRIPTION`) VALUES
(1, 'SUPERADMIN'),
(2, 'ADMINISTRATOR'),
(3, 'STANDARD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

DROP TABLE IF EXISTS `tbl_status`;
CREATE TABLE `tbl_status` (
  `STATUS_ID` int(11) NOT NULL,
  `STATUS_DESCRIPTION` varchar(255) NOT NULL,
  `DESIGNATION_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`STATUS_ID`, `STATUS_DESCRIPTION`, `DESIGNATION_ID`) VALUES
(1, 'ACTIVE', 1),
(2, 'INACTIVE', 1),
(3, 'PENDING', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_university_status`
--

DROP TABLE IF EXISTS `tbl_university_status`;
CREATE TABLE `tbl_university_status` (
  `USTATUS_ID` int(11) NOT NULL,
  `USTATUS_TYPE_L1` int(11) NOT NULL,
  `USTATUS_TYPE_L2` int(11) DEFAULT NULL,
  `USTATUS_TYPE_L3` int(11) DEFAULT NULL,
  `USTATUS_TYPE_L1_VAL_OTHERS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE `tbl_user` (
  `USER_ID` int(11) NOT NULL,
  `USER_STATUS` int(11) NOT NULL,
  `USERDATA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`USER_ID`, `USER_STATUS`, `USERDATA_ID`) VALUES
(1, 1, 0),
(2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

DROP TABLE IF EXISTS `tbl_user_details`;
CREATE TABLE `tbl_user_details` (
  `UD_ID` int(11) NOT NULL,
  `LOGIN_ID` int(11) NOT NULL,
  `STATUS_ID` int(11) NOT NULL,
  `UD_REGISTERED_OWNER` varchar(255) NOT NULL,
  `UD_ADDRESS_CITY` varchar(255) NOT NULL,
  `UD_ADDRESS_TEL_NO` varchar(20) NOT NULL,
  `UD_PROVINCE` varchar(255) NOT NULL,
  `UD_PROVINCE_TEL_NO` varchar(20) NOT NULL,
  `UD_DRIVER_NAME` varchar(255) NOT NULL,
  `UD_RELATIONSHIP` varchar(255) NOT NULL,
  `UD_DRIVER_ADDRESS` varchar(255) NOT NULL,
  `UD_DRIVER_TEL_NO` varchar(255) NOT NULL,
  `APPLICANT_ID` int(11) NOT NULL,
  `USTATUS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ustatus_type_l1`
--

DROP TABLE IF EXISTS `tbl_ustatus_type_l1`;
CREATE TABLE `tbl_ustatus_type_l1` (
  `L1_ID` int(11) NOT NULL,
  `L1_DESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ustatus_type_l1`
--

INSERT INTO `tbl_ustatus_type_l1` (`L1_ID`, `L1_DESC`) VALUES
(1, 'EMPLOYEE'),
(2, 'STUDENT'),
(3, 'ALUMNI'),
(4, 'OTHERS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ustatus_type_l2`
--

DROP TABLE IF EXISTS `tbl_ustatus_type_l2`;
CREATE TABLE `tbl_ustatus_type_l2` (
  `L2_ID` int(11) NOT NULL,
  `L2_DESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ustatus_type_l2`
--

INSERT INTO `tbl_ustatus_type_l2` (`L2_ID`, `L2_DESC`) VALUES
(1, 'STAFF'),
(2, 'FACULTY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ustatus_type_l3`
--

DROP TABLE IF EXISTS `tbl_ustatus_type_l3`;
CREATE TABLE `tbl_ustatus_type_l3` (
  `L3_ID` int(11) NOT NULL,
  `L3_DESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ustatus_type_l3`
--

INSERT INTO `tbl_ustatus_type_l3` (`L3_ID`, `L3_DESC`) VALUES
(1, 'FULL TIME'),
(2, 'PART TIME');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  ADD PRIMARY KEY (`APPLICANT_ID`);

--
-- Indexes for table `tbl_content_login`
--
ALTER TABLE `tbl_content_login`
  ADD PRIMARY KEY (`LOGIN_ID`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`DESIGNATION_ID`);

--
-- Indexes for table `tbl_rights`
--
ALTER TABLE `tbl_rights`
  ADD PRIMARY KEY (`RIGHTS_ID`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`STATUS_ID`),
  ADD KEY `DESIGNATION_ID` (`DESIGNATION_ID`);

--
-- Indexes for table `tbl_university_status`
--
ALTER TABLE `tbl_university_status`
  ADD PRIMARY KEY (`USTATUS_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`UD_ID`);

--
-- Indexes for table `tbl_ustatus_type_l1`
--
ALTER TABLE `tbl_ustatus_type_l1`
  ADD PRIMARY KEY (`L1_ID`);

--
-- Indexes for table `tbl_ustatus_type_l2`
--
ALTER TABLE `tbl_ustatus_type_l2`
  ADD PRIMARY KEY (`L2_ID`);

--
-- Indexes for table `tbl_ustatus_type_l3`
--
ALTER TABLE `tbl_ustatus_type_l3`
  ADD PRIMARY KEY (`L3_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_applicant`
--
ALTER TABLE `tbl_applicant`
  MODIFY `APPLICANT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_content_login`
--
ALTER TABLE `tbl_content_login`
  MODIFY `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `DESIGNATION_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_rights`
--
ALTER TABLE `tbl_rights`
  MODIFY `RIGHTS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `STATUS_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_university_status`
--
ALTER TABLE `tbl_university_status`
  MODIFY `USTATUS_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `UD_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_ustatus_type_l1`
--
ALTER TABLE `tbl_ustatus_type_l1`
  MODIFY `L1_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ustatus_type_l2`
--
ALTER TABLE `tbl_ustatus_type_l2`
  MODIFY `L2_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_ustatus_type_l3`
--
ALTER TABLE `tbl_ustatus_type_l3`
  MODIFY `L3_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD CONSTRAINT `tbl_status_ibfk_1` FOREIGN KEY (`DESIGNATION_ID`) REFERENCES `tbl_designation` (`DESIGNATION_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
