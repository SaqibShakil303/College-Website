-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 09:18 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `aname` varchar(500) NOT NULL,
  `aemail` varchar(500) NOT NULL,
  `apass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `aemail`, `apass`) VALUES
(1, 'sitm', 's@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(11) NOT NULL,
  `notice` varchar(500) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `notice`, `content`) VALUES
(3, 'Placement Notice', 'Dear students,\r\nAs Discussed, Karur Vysya Bank (KVB) has partnered with TVS Training & Services\r\n(TVS TS) towards recruiting suitable candidates for the role of Branch Sales & Service\r\nExecutives on the rolls of the Bank. Detailed Job Description is mentioned below for\r\nyour ready reference.\r\nThis letter is to seek your permission towards getting the PG passed-out\r\nstudents(2021,2022 and 2023) database to hire Suitable Candidates.\r\nEligibility:\r\n Post Graduate with 60% through regular mode\r\n Age less than 26yrs\r\nJob Title: Branch Sales & Service Executive (BSSE)\r\nDepartment: Branch\r\nReporting Manager: Branch Head\r\nPosting Location: Across Kolkata, Odisha.\r\nSalary: 3 LPA / 25K pm (Fixed CTC)\r\n'),
(4, '	Results of students of UG and PG courses of Odd Semester Examinations 2022-23 (Phase 1)', 'It is notified for information of all students and the Principals/Directors of all the affiliated Colleges,Departments and Centers of MAKAUT, WB, that the results of students of UG and PG courses ofOdd Semester Examinations 2022-23 (Phase 1), which were conducted in the month of December,2022 are published.\r\nThe results and online grade cards are available in the website: www.makautexam.net. This resultis prepared and published based on decision of the statutory bodies of University.\r\nThere would be some cases of incomplete (I) results for which final assessment of some scripts arenot completed due to lack of resource support. All such incomplete results would be updated asand when the final assessment would be completed. The student concerned may contact throughtheir college concerned for such cases.'),
(5, 'Schedule of Enrolment and Continuous Assessment in Even Semester 2022-23 (For all 2nd Semester and 4th Semester - B Tech & B Pharm)', 'The enrolment in the even semester would be provisional and subject to fulfillment of eligibilitybased on the results of the odd semester to be published in due course of time.\r\nIn order to make-up the days lost in the earlier semester and complete the academic year timely,the capturing of records of continuous assessment 1 would be skipped for these students and allother continuous assessments would be held as per the procedure published earlier (Ref.No.COE/MAKAUT,WB/24/2022, dated 20/07/2022).\r\nFor any further information, all concerned are advised to visit the notice section or contact their departments/institutions concerned.');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pid` int(11) NOT NULL,
  `page` varchar(500) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pid`, `page`, `content`) VALUES
(3, 'Home', 'You dream and we guide you towards the execution of that dream. As one of the Best BBA Colleges in Kolkata, we believe in achieving excellence with persistence and determination. Among our subjects lie BBA, BBA in Hospital Management, and BCA which are aptly selected to suit the needs of the current industry. It is our belief that as one of the Top BBA Colleges in Kolkata, we will create a legacy of future builders of the nation '),
(4, 'About', 'Affiliated to MAKAUT (formerly WBUT), SITM provides regular courses with experienced faculties. Being one of the Best BBA colleges in Kolkata our aim is to enrich our learners with the practical knowledge of present industries and technologies. Keeping in mind the demands of new skills in industries our main emphasis is on practical skills and knowledge which is bound to give a sure shot of success. \r\n\r\nHistory\r\nSyamaprasad Institute of Technology & Management (SITM) was established in 2002 with a vision to make Technology and Management Education available for all strata of learners. With the industry-oriented subjects of BBA, BCA, and BBA in Hospital Management we wish to empower our students with all the skills that make them successful. As one of the Top Colleges in Kolkata, we have never compromised on educating our learners with upgraded industry knowledge.\r\n\r\nMission\r\nWe help you reach your goal with proper guidance. Our mission is to establish critical thinking, effective communication skills, creativity, and technical awareness among learners by guiding them with proper guidance from experienced mentors and well-equipped technologies. We encourage a multicultural environment in SITM through our subjects of BBA, BCA, and BBA in Hospital Management which helps enrich our students with confidence and decision-making skills.\r\n\r\nVision\r\nOur vision is to deliver opportunities from diverse educational fields under one roof with equity and harmony, so learners will become responsive to the latest industries. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
