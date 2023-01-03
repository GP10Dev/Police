-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 10:32 AM
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

CREATE TABLE `crimecase` (
  `caseRef` varchar(20) NOT NULL,
  `reportDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `doc` date NOT NULL COMMENT 'date of occurance',
  `Scene` text DEFAULT NULL,
  `attachedOfficer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crimecase`
--

INSERT INTO `crimecase` (`caseRef`, `reportDate`, `doc`, `Scene`, `attachedOfficer`) VALUES
('sdref-02/01/2023-3', '2023-01-02 08:11:53', '2023-01-02', 'banda sports pro', 'FF000'),
('sdref-02/01/2023-4', '2023-01-02 14:10:12', '2023-01-01', 'kireka', 'FF000'),
('sdref-02/01/2023-5', '2023-01-02 14:10:37', '2023-01-01', 'kireka', 'FF000'),
('sdref-02/01/2023-6', '2023-01-02 18:21:09', '2023-01-02', 'my farm in Mbarara', 'FF000'),
('sdref-03/01/2023-7', '2023-01-03 09:26:19', '2023-01-03', 'At my home', 'FF20202'),
('sdref-31/12/2022-0', '2022-12-31 07:56:55', '0000-00-00', 'At his home in Najjera, near Login bar', 'FF000'),
('sdref-31/12/2022-1', '2022-12-31 07:58:29', '2022-12-31', 'At his home in Najjera, near Login bar', 'FF000'),
('sdref-31/12/2022-2', '2022-12-31 08:24:15', '0000-00-00', 'Kabojja', 'FF000');

-- --------------------------------------------------------

--
-- Table structure for table `exhibits`
--

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

--
-- Dumping data for table `exhibits`
--

INSERT INTO `exhibits` (`serialNum`, `caseRef`, `date`, `checkedby`, `description`, `receivedby`, `DoD`, `finaldisp`, `nin`, `disposedby`) VALUES
(1, 'sdref-02/01/2023-6', '2023-01-02', 'FF000', 'i black dress. 2 samsung s8 phones', 'FF000', NULL, NULL, NULL, NULL),
(2, 'sdref-02/01/2023-5', '2023-01-02', 'FF000', 'nothing. just running a test case 2', 'FF000', NULL, NULL, NULL, NULL),
(3, 'sdref-03/01/2023-7', '2023-01-03', 'FF000', 'a blue samsung', 'ff20202', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `forceNum` varchar(20) NOT NULL,
  `fname` char(20) NOT NULL,
  `oname` char(20) DEFAULT NULL,
  `lname` char(20) DEFAULT NULL,
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `nin` varchar(30) DEFAULT NULL,
  `gender` char(6) NOT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `rank` char(20) NOT NULL,
  `department` char(20) NOT NULL,
  `tribe` char(30) NOT NULL,
  `station` varchar(30) DEFAULT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`forceNum`, `fname`, `oname`, `lname`, `dob`, `nin`, `gender`, `phone`, `rank`, `department`, `tribe`, `station`, `password`) VALUES
('', '', '', '', '0000-00-00', '', '', '', '', '', '', '2000809745', '456'),
('FF000', 'Group', 'one', 'leader', '2000-05-31', 'UP0000', 'all', '0700000000', 'admin', 'IT', 'musoga', 'CPS', 'jordan1'),
('FF20202', 'Masaba', '', 'Calvin', '0000-00-00', 'CM076005648NK', 'male', '0777996379', 'General', 'OC', 'Rwandese', 'Banda', 'FF20202'),
('FF699', 'Nnyenje', '', 'Ibrahim', '2002-02-28', 'CM0005648NK', 'male', '0777987579', 'sergent', 'investigation', 'Mutooro', 'Jinja', 'ff699');

-- --------------------------------------------------------

--
-- Table structure for table `reporter`
--

CREATE TABLE `reporter` (
  `reporterID` int(11) NOT NULL COMMENT 'autosetReporterId',
  `fname` varchar(20) NOT NULL COMMENT 'first name',
  `lname` char(20) DEFAULT NULL COMMENT 'last name',
  `oname` char(20) DEFAULT NULL COMMENT 'other names',
  `phone` varchar(15) DEFAULT NULL,
  `caseRef` varchar(20) DEFAULT NULL,
  `nin` varchar(30) DEFAULT NULL COMMENT 'nationalID No',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `address` varchar(100) DEFAULT NULL COMMENT 'home address',
  `tribe` char(20) DEFAULT NULL COMMENT 'tribe of reporter',
  `gender` char(6) DEFAULT NULL COMMENT 'gender',
  `descrip` text DEFAULT NULL COMMENT 'case statement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reporter`
--

INSERT INTO `reporter` (`reporterID`, `fname`, `lname`, `oname`, `phone`, `caseRef`, `nin`, `dob`, `address`, `tribe`, `gender`, `descrip`) VALUES
(1, 'jordan', 'coder', '', '0706083050', 'sdref-31/12/2022-1', 'cm000001', '2000-05-31', 'kabare 1', 'musoga', 'male', 'A one Ibra stole my pen.'),
(2, 'John', 'Doe', 'Xiang', '', 'sdref-31/12/2022-2', 'cm000006fy', '1999-09-28', 'Kabojja', 'Mutooro', 'male', 'A one Baby Tran stole my doughnuts'),
(3, 'nalubanga', 'jocelyn', '', '0741562058', 'sdref-02/01/2023-3', 'cf8996201hj', '2001-05-12', 'banda', 'Muganda', 'female', 'human right violence'),
(4, 'jordan', 'ahairwe', '', '0706083050', 'sdref-02/01/2023-5', '', '2000-05-31', 'sportspro', 'munyankore', 'male', 'nagawa stole my bag'),
(5, 'jordan', 'Ibrahim', '', '0706083050', 'sdref-02/01/2023-6', 'CM000568648NK', '2023-01-02', 'kabare 1', 'Mutooro', '', 'Jocelyn stole the black goat'),
(6, 'Jordan', 'Me', '', '0706083050', 'sdref-03/01/2023-7', 'cm006700jhg01', '1999-05-31', 'kabare 1', 'munyankore', 'male', 'Joet stole my phone');

-- --------------------------------------------------------

--
-- Table structure for table `suspect`
--

CREATE TABLE `suspect` (
  `suspectID` int(11) NOT NULL COMMENT 'autosetReporterId',
  `fname` varchar(20) NOT NULL COMMENT 'first name',
  `lname` char(20) DEFAULT NULL COMMENT 'last name',
  `oname` char(20) DEFAULT NULL COMMENT 'other names',
  `caseRef` varchar(20) DEFAULT NULL,
  `nin` varchar(30) DEFAULT NULL COMMENT 'nationalID No',
  `dob` date DEFAULT NULL COMMENT 'date of birth',
  `phone` varchar(15) DEFAULT NULL,
  `status` char(8) NOT NULL DEFAULT 'Suspect' COMMENT 'suspect or witnes',
  `address` varchar(100) DEFAULT NULL COMMENT 'home address',
  `tribe` char(20) DEFAULT NULL COMMENT 'tribe of reporter',
  `gender` char(6) DEFAULT NULL COMMENT 'gender',
  `descrip` text DEFAULT NULL COMMENT 'case statement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suspect`
--

INSERT INTO `suspect` (`suspectID`, `fname`, `lname`, `oname`, `caseRef`, `nin`, `dob`, `phone`, `status`, `address`, `tribe`, `gender`, `descrip`) VALUES
(1, 'Nnyenje', 'Ibrahim', 'Cabron', 'sdref-31/12/2022-1', 'CM0005648NK', '1990-07-11', '0777987576', 'Suspect', 'Najjera 2, Bulabila 1', 'Muganda', 'male', 'i borrowed a one Ahairwe Jordan\'s black pen. i forgot to return it. he probably also forgot to ask for it. i don\'t know how the police should come in.'),
(2, 'John', 'Doe', 'Xiang', 'sdref-31/12/2022-2', 'CM0005648NK', '2023-01-02', '0706083050', 'Suspect', 'kampala', 'Mutooro', 'male', 'a one Nalubanga claims that i stole her husband. that is not true.'),
(3, 'nagawa', 'grace', '', 'sdref-02/01/2023-5', '', '1999-03-13', '', 'Suspect', '', 'Muganda', 'female', 'jordan claims that i stole a bag but i have never seen jordan'),
(4, 'Nnyenje', 'grace', 'Cabron', 'sdref-02/01/2023-6', 'cm00021gf001', '0000-00-00', '', 'witness', 'kampala', 'Mutooro', 'female', 'Guilty as charged'),
(5, 'Joet', '', '', 'sdref-03/01/2023-7', '', '0000-00-00', '', 'suspect', '', 'Mutooro', 'male', 'I didnt see anything like a phone'),
(6, 'ibrahim', '', '', 'sdref-03/01/2023-7', '', '0000-00-00', '', 'witness', '', '', '', 'i saw Joet with a blue phone');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crimecase`
--
ALTER TABLE `crimecase`
  ADD PRIMARY KEY (`caseRef`),
  ADD KEY `attachedOfficer` (`attachedOfficer`);

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
  MODIFY `serialNum` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reporter`
--
ALTER TABLE `reporter`
  MODIFY `reporterID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autosetReporterId', AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `suspect`
--
ALTER TABLE `suspect`
  MODIFY `suspectID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'autosetReporterId', AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crimecase`
--
ALTER TABLE `crimecase`
  ADD CONSTRAINT `crimecase_ibfk_1` FOREIGN KEY (`attachedOfficer`) REFERENCES `officer` (`forceNum`);

--
-- Constraints for table `exhibits`
--
ALTER TABLE `exhibits`
  ADD CONSTRAINT `case_exhibit` FOREIGN KEY (`caseRef`) REFERENCES `crimecase` (`caseRef`);

--
-- Constraints for table `reporter`
--
ALTER TABLE `reporter`
  ADD CONSTRAINT `reporter_ibfk_1` FOREIGN KEY (`caseRef`) REFERENCES `crimecase` (`caseRef`);

--
-- Constraints for table `suspect`
--
ALTER TABLE `suspect`
  ADD CONSTRAINT `case_suspect` FOREIGN KEY (`caseRef`) REFERENCES `crimecase` (`caseRef`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
