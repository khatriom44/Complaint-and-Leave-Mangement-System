-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 02:36 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--
CREATE DATABASE IF NOT EXISTS `hostel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hostel`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`sno`, `name`, `email`, `password`) VALUES
(1, 'hod', 'hod@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hodrequest`
--

CREATE TABLE `hodrequest` (
  `sno` int(200) NOT NULL,
  `warden_sno` int(200) NOT NULL,
  `warden_name` varchar(500) NOT NULL,
  `hod_sno` int(200) NOT NULL,
  `hod_name` varchar(500) NOT NULL,
  `holiday` varchar(600) NOT NULL,
  `hdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hodrequest`
--

INSERT INTO `hodrequest` (`sno`, `warden_sno`, `warden_name`, `hod_sno`, `hod_name`, `holiday`, `hdate`, `reason`, `feedback`, `date`) VALUES
(1, 3, 'teacher', 1, 'hod', '55', '2023-04-30', 'nooo', 'yoyo', '08-04-2023-17-49');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `sno` int(200) NOT NULL,
  `student_sno` int(200) NOT NULL,
  `student_name` varchar(600) NOT NULL,
  `subject_sno` int(200) NOT NULL,
  `subject_name` varchar(600) NOT NULL,
  `teacher_sno` int(200) NOT NULL,
  `teacher_name` varchar(500) NOT NULL,
  `holiday` varchar(500) NOT NULL,
  `hdate` varchar(100) NOT NULL,
  `reason` varchar(500) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`sno`, `student_sno`, `student_name`, `subject_sno`, `subject_name`, `teacher_sno`, `teacher_name`, `holiday`, `hdate`, `reason`, `comment`, `feedback`, `date`) VALUES
(1, 1, 'HARSHIT', 1, 'English', 3, 'teacher', '5', '2023-04-11', 'Family Tour', 'Yes', 'ok you may go', '08-04-2023-16-08'),
(2, 1, 'HARSHIT', 2, 'Hindi', 4, 'hinditeacher', '20', '2023-04-19', 'no r', 'no c', '', '08-04-2023-16-17'),
(3, 1, 'HARSHIT', 2, 'Hindi', 4, 'hinditeacher', '111', '2023-04-18', 'Family Tour with wife', 'ghfdjnm,z', '', '08-04-2023-17-00');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `sno` int(200) NOT NULL,
  `h_sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`sno`, `h_sno`, `name`, `email`, `password`) VALUES
(2, 1, 'warden', 'warden@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `hostelrequest`
--

CREATE TABLE `hostelrequest` (
  `sno` int(200) NOT NULL,
  `student_sno` int(200) NOT NULL,
  `student_name` varchar(500) NOT NULL,
  `hostel_sno` int(200) NOT NULL,
  `hostel_name` varchar(500) NOT NULL,
  `warden_sno` int(200) NOT NULL,
  `warden_name` varchar(600) NOT NULL,
  `issue` varchar(500) NOT NULL,
  `detail` varchar(600) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostelrequest`
--

INSERT INTO `hostelrequest` (`sno`, `student_sno`, `student_name`, `hostel_sno`, `hostel_name`, `warden_sno`, `warden_name`, `issue`, `detail`, `feedback`, `date`) VALUES
(1, 1, 'HARSHIT', 1, 'abc', 2, 'warden', 'yes we have', 'no detail', 'NOT GOOD', '08-04-2023-16-58');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`sno`, `name`) VALUES
(1, 'abc'),
(2, 'xyz');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `email`, `password`) VALUES
(1, 'HARSHIT', 'harshit@gmail.com', '123'),
(2, 'English', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sno`, `name`) VALUES
(1, 'English'),
(2, 'Hindi'),
(3, 'Franch');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `sno` int(200) NOT NULL,
  `subject_sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sno`, `subject_sno`, `name`, `email`, `password`) VALUES
(3, 1, 'teacher', 'teacher@gmail.com', '123'),
(4, 2, 'hinditeacher', 'hinditeacher@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hodrequest`
--
ALTER TABLE `hodrequest`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hostelrequest`
--
ALTER TABLE `hostelrequest`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `hostels`
--
ALTER TABLE `hostels`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hodrequest`
--
ALTER TABLE `hodrequest`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hostelrequest`
--
ALTER TABLE `hostelrequest`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
