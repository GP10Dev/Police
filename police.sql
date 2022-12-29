-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 12:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `police`
--
CREATE DATABASE IF NOT EXISTS `police` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `police`;

-- --------------------------------------------------------

--
-- Table structure for table `crimecase`
--

DROP TABLE IF EXISTS `crimecase`;
CREATE TABLE `crimecase` (
  `caseRef` varchar(20) NOT NULL,
  `reportDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Scene` text DEFAULT NULL,
  `attachedOfficer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exhibits`
--

DROP TABLE IF EXISTS `exhibits`;
CREATE TABLE `exhibits` (
  `serialNum` int(20) NOT NULL,
  `caseRef` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `checkedby` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `receivedby` varchar(20) NOT NULL,
  `DoD` date DEFAULT NULL,
  `finaldisp` text DEFAULT NULL,
  `nin` varchar(20) DEFAULT NULL,
  `disposedby` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

DROP TABLE IF EXISTS `officer`;
CREATE TABLE `officer` (
  `forceNum` varchar(20) NOT NULL,
  `fname` char(20) NOT NULL,
  `oname` char(20) DEFAULT NULL,
  `lname` char(20) DEFAULT NULL,
  `nin` varchar(30) DEFAULT NULL,
  `gender` char(6) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `rank` char(20) NOT NULL,
  `department` char(20) NOT NULL,
  `tribe` char(30) NOT NULL,
  `station` varchar(30) DEFAULT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

DROP TABLE IF EXISTS `reporter`;
CREATE TABLE `reporter` (
  `reporterID` int(11) NOT NULL COMMENT 'autosetReporterId',
  `fname` varchar(20) NOT NULL COMMENT 'first name',
  `lname` char(20) DEFAULT NULL COMMENT 'last name',
  `oname` char(20) DEFAULT NULL COMMENT 'other names',
  `caseRef` varchar(20) DEFAULT NULL,
  `nin` varchar(30) DEFAULT NULL COMMENT 'nationalID No',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `address` varchar(100) DEFAULT NULL COMMENT 'home address',
  `tribe` char(20) DEFAULT NULL COMMENT 'tribe of reporter',
  `gender` char(6) DEFAULT NULL COMMENT 'gender',
  `descrip` text DEFAULT NULL COMMENT 'case statement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

DROP TABLE IF EXISTS `suspect`;
CREATE TABLE `suspect` (
  `suspectID` int(11) NOT NULL COMMENT 'autosetReporterId',
  `fname` varchar(20) NOT NULL COMMENT 'first name',
  `lname` char(20) DEFAULT NULL COMMENT 'last name',
  `oname` char(20) DEFAULT NULL COMMENT 'other names',
  `caseRef` varchar(20) DEFAULT NULL,
  `nin` varchar(30) DEFAULT NULL COMMENT 'nationalID No',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `address` varchar(100) DEFAULT NULL COMMENT 'home address',
  `tribe` char(20) DEFAULT NULL COMMENT 'tribe of reporter',
  `gender` char(6) DEFAULT NULL COMMENT 'gender',
  `descrip` text DEFAULT NULL COMMENT 'case statement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimecase`
--
ALTER TABLE `crimecase`
  ADD PRIMARY KEY (`caseRef`),
  ADD KEY `case_officer` (`attachedOfficer`);

--
-- Indexes for table `exhibits`
--
ALTER TABLE `exhibits`
  ADD PRIMARY KEY (`serialNum`),
  ADD KEY `case_exhibit` (`caseRef`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`forceNum`);

--
-- Indexes for table `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`reporterID`),
  ADD KEY `caseRef` (`caseRef`) USING BTREE;

--
-- Indexes for table `suspect`
--
ALTER TABLE `suspect`
  ADD PRIMARY KEY (`suspectID`),
  ADD KEY `caseRef` (`caseRef`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exhibits`
--
ALTER TABLE `exhibits`
  MODIFY `serialNum` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `reporterID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autosetReporterId';

--
-- AUTO_INCREMENT for table `suspect`
--
ALTER TABLE `suspect`
  MODIFY `suspectID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autosetReporterId';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crimecase`
--
ALTER TABLE `crimecase`
  ADD CONSTRAINT `case_officer` FOREIGN KEY (`attachedOfficer`) REFERENCES `officer` (`forceNum`),
  ADD CONSTRAINT `case_reporter` FOREIGN KEY (`caseRef`) REFERENCES `reporter` (`caseRef`);

--
-- Constraints for table `exhibits`
--
ALTER TABLE `exhibits`
  ADD CONSTRAINT `case_exhibit` FOREIGN KEY (`caseRef`) REFERENCES `crimecase` (`caseRef`);

--
-- Constraints for table `suspect`
--
ALTER TABLE `suspect`
  ADD CONSTRAINT `case_suspect` FOREIGN KEY (`caseRef`) REFERENCES `crimecase` (`caseRef`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
