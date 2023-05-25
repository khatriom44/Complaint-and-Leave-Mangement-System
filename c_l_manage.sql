-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c_l_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin@gmail.com', '11');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`sno`, `name`, `email`, `password`) VALUES
(3, 'narendra', 'na@gmail.com', '111'),
(4, 'Himansu1', 'hi@gmail.com', '123');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hodrequest`
--

INSERT INTO `hodrequest` (`sno`, `warden_sno`, `warden_name`, `hod_sno`, `hod_name`, `holiday`, `hdate`, `reason`, `feedback`, `date`) VALUES
(1, 3, 'teacher', 1, 'hod', '55', '2023-04-30', 'nooo', 'yoyo', '08-04-2023-17-49'),
(2, 3, 'teacher', 1, 'hod', '7', '2023-04-09', 'Enjoyng the life', '', '08-04-2023-18-57'),
(3, 3, 'teacher', 2, 'Narendra', '2', '', '', '', '08-04-2023-18-57'),
(4, 6, 'keyur', 3, 'narendra', '3', '2023-04-05', 'Enjoyng the life', 'test feedback', '09-04-2023-10-14'),
(5, 109, 'mitul', 3, 'narendra', '3', '2023-04-19', 'zx', '', '13-04-2023-14-38');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`sno`, `student_sno`, `student_name`, `subject_sno`, `subject_name`, `teacher_sno`, `teacher_name`, `holiday`, `hdate`, `reason`, `comment`, `feedback`, `date`) VALUES
(1, 1, 'HARSHIT', 1, 'English', 3, 'teacher', '5', '2023-04-11', 'Family Tour', 'Yes', 'ok you may go', '08-04-2023-16-08'),
(2, 1, 'HARSHIT', 2, 'Hindi', 4, 'hinditeacher', '20', '2023-04-19', 'no r', 'no c', '', '08-04-2023-16-17'),
(3, 1, 'HARSHIT', 2, 'Hindi', 4, 'hinditeacher', '111', '2023-04-18', 'Family Tour with wife', 'ghfdjnm,z', '', '08-04-2023-17-00'),
(4, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '3', '2023-02-07', 'Enjoyng the life', 'jioj', 'ok', '09-04-2023-10-00'),
(5, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-03-30', 'Enjoyng the life', '5', '', '09-04-2023-10-01'),
(6, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-04-20', 'Enjoyng the life', '46', '', '09-04-2023-10-01'),
(7, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-03-31', 'Enjoyng the life', '545', '', '09-04-2023-10-02'),
(8, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '3', '2023-04-05', 'Enjoyng the life', '135', '', '09-04-2023-10-02'),
(9, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-04-06', '+6', '95', '', '09-04-2023-10-02'),
(10, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-04-14', '+6', '5+65', 'ok\r\n', '09-04-2023-10-02'),
(11, 6, 'om', 6, 'CP\r\n', 6, 'keyur', '2', '2023-04-06', 'Enjoyng the life', '6+6+', '', '09-04-2023-10-03'),
(12, 5, 'Om', 16, 'Artificial Intelligence\r\n', 108, 'om', '2', '2023-04-03', 'xx', 'sadas', '', '13-04-2023-14-35'),
(13, 5, 'Om', 16, 'Artificial Intelligence\r\n', 109, 'mitul', '3', '2023-03-28', 'sdas', 'sasa', '', '13-04-2023-14-35');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`sno`, `h_sno`, `name`, `email`, `password`) VALUES
(7, 4, 'Chinmay', 'chinmay@gmail.com', '11'),
(8, 6, 'Keyur', 'keyur_warden@gmail.com', '123'),
(9, 7, 'Rishi', 'rishi_warden@gmail.com', '123'),
(10, 8, 'Ayush', 'ayush_warden@gmail.com', '123'),
(11, 9, 'Kenil', 'kenil_warden@gmail.com', '123'),
(12, 10, 'Sujal', 'sujal_warden@gmail.com', '123'),
(13, 11, 'Vaman', 'vaman_warden@gmail.com', '123'),
(14, 12, 'Ketan', 'ketan_warden@gmail.com', '123'),
(15, 13, 'Harsh', 'harsh_Warden@gmail.com', '123'),
(16, 14, 'Mann', 'mann_warden@gmail.com', '123'),
(17, 15, 'Ram', 'ram_warden@gmail.com', '123'),
(18, 16, 'Hemant', 'hemant_warden@gmail.com', '123'),
(19, 17, 'mitul112', 'mitul@gmail.com', '123');

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
  `blockno` varchar(20) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `number` varchar(20) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hostelrequest`
--

INSERT INTO `hostelrequest` (`sno`, `student_sno`, `student_name`, `hostel_sno`, `hostel_name`, `warden_sno`, `warden_name`, `issue`, `detail`, `blockno`, `roomno`, `number`, `feedback`, `date`) VALUES
(1, 1, 'HARSHIT', 1, 'abc', 2, 'warden', 'yes we have', 'no detail', '', '', '', 'ok', '08-04-2023-16-58'),
(2, 1, 'HARSHIT', 1, 'abc', 2, 'warden', 'light', '', '', '', '', 'no', '08-04-2023-19-03'),
(3, 3, 'yash', 17, 'Library', 19, 'mitul', 'light', 'mklj', '', '', '', '', '09-04-2023-10-11'),
(4, 3, 'yash', 8, 'Block4', 10, 'Ayush', 'light', 'sadsa', '', '', '', '', '09-04-2023-10-11'),
(5, 3, 'yash', 8, 'Block4', 10, 'Ayush', 'light', 'dsfs', '', '', '', '', '09-04-2023-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE `hostels` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`sno`, `name`) VALUES
(4, 'Block1\r\n'),
(6, 'Block2\r\n'),
(7, 'Block3'),
(8, 'Block4'),
(9, 'Block5\r\n'),
(10, 'Block6'),
(11, 'Block7'),
(12, 'Block8'),
(13, 'Block9\r\n'),
(14, 'Block10'),
(15, 'Block11\r\n'),
(16, 'Block12'),
(17, 'Library');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sno` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(600) NOT NULL,
  `stu_depart` varchar(20) NOT NULL,
  `enrolment_no` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sno`, `name`, `email`, `stu_depart`, `enrolment_no`, `contact`, `password`) VALUES
(3, 'yash', 'yash@gmail.com', 'Computer', '123', '6350123641', '123'),
(4, 'gaurav1', 'gaurav@gmail.com', 'MCA', 'MCAGS12', '7220010792', '123'),
(5, 'Om', 'om@gmail.com', 'IT', '12002080601072', '9157675611', '11');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sno` int(200) NOT NULL,
  `name` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sno`, `name`) VALUES
(16, 'Artificial Intelligence\r\n'),
(17, 'Automobile Engineering'),
(18, 'Civil Engineering'),
(19, 'Computer Engineering'),
(20, 'Computer Science & Design\r\n'),
(21, 'Dairy Technology'),
(22, 'Electronics & Communication'),
(23, 'Electrical Engineering'),
(24, 'Food Processing Technology'),
(25, 'Information Technology'),
(26, 'Mechanical Engineering');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`sno`, `subject_sno`, `name`, `email`, `password`) VALUES
(108, 16, 'om', 'om1@gmail.com', '111'),
(109, 16, 'mitul', 'mitul@gmail.com', '123');

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
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hodrequest`
--
ALTER TABLE `hodrequest`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hostelrequest`
--
ALTER TABLE `hostelrequest`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hostels`
--
ALTER TABLE `hostels`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `sno` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
