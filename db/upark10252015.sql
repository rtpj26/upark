-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2015 at 07:07 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `upark`
--
CREATE DATABASE IF NOT EXISTS `upark` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `upark`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content_login`
--

DROP TABLE IF EXISTS `tbl_content_login`;
CREATE TABLE IF NOT EXISTS `tbl_content_login` (
  `LOGIN_ID` int(11) NOT NULL,
  `LOGIN_USERNAME` varchar(255) NOT NULL,
  `LOGIN_PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_content_login`
--

INSERT INTO `tbl_content_login` (`LOGIN_ID`, `LOGIN_USERNAME`, `LOGIN_PASSWORD`) VALUES
(1, 'ADMIN', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_content_login`
--
ALTER TABLE `tbl_content_login`
  ADD PRIMARY KEY (`LOGIN_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_content_login`
--
ALTER TABLE `tbl_content_login`
  MODIFY `LOGIN_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
