-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 02:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission_process`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `id` int(11) NOT NULL,
  `admin_fname` varchar(30) NOT NULL,
  `admin_lname` varchar(30) NOT NULL,
  `admin_contact_no` varchar(20) NOT NULL,
  `admin_mail` varchar(50) NOT NULL,
  `admin_passwd` varchar(50) NOT NULL,
  `admin_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`id`, `admin_fname`, `admin_lname`, `admin_contact_no`, `admin_mail`, `admin_passwd`, `admin_photo`) VALUES
(1, 'Abhay', '', '', 'abhayruparel@gmail.com', '123456', ''),
(3, 'PL8B1eqvDj1mMcJQLVciZw==', 'GhXFtPPUmhNFwr+WbJiAyg==', 'gPJ6CArdo+stswht7bvu', 'rNZEDUISdje0WFQVmbrrvG0OH+0p5RYGaLtK4dMivls=', '3TM28triSjE7h7K3warlKA==', 'photo');

-- --------------------------------------------------------

--
-- Table structure for table `admission_data`
--

CREATE TABLE `admission_data` (
  `id` int(11) NOT NULL,
  `stu_id` varchar(20) NOT NULL,
  `stu_fname` varchar(30) NOT NULL,
  `stu_lname` varchar(30) NOT NULL,
  `stu_contact_no` varchar(20) NOT NULL,
  `stu_mail` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `gur_name` varchar(30) NOT NULL,
  `gur_contact_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `main_stream_field` varchar(30) NOT NULL,
  `main_deg_field` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_data`
--

INSERT INTO `admission_data` (`id`, `stu_id`, `stu_fname`, `stu_lname`, `stu_contact_no`, `stu_mail`, `gender`, `dob`, `gur_name`, `gur_contact_no`, `address`, `country`, `state`, `city`, `pincode`, `main_stream_field`, `main_deg_field`) VALUES
(1, '', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-26', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(2, 'STU_2', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-25', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(3, 'STU_3', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-25', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(4, 'STU_4', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-18', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(5, 'STU_5', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-12', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(6, 'STU_6', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-18', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(7, 'STU_7', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-20', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CBA'),
(8, 'STU_8', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', 'M', '2021-02-05', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'B.Tech', 'CS'),
(9, 'STU_9', 'Satvik', 'Naik', '8866126679', 'sn@ict.in', '', '2021-03-13', 'Dinesh', '0987654321', 'xyz', 'India', 'Gujarat', 'Ahmedabad', '382424', 'BCA', 'CBA');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor_alloted`
--

CREATE TABLE `counsellor_alloted` (
  `id` int(11) NOT NULL,
  `couns_alloted_id` varchar(20) NOT NULL,
  `stu_id` varchar(20) NOT NULL,
  `couns_id` varchar(20) NOT NULL,
  `couns_alloted_date` varchar(20) NOT NULL,
  `couns_alloted_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `counsellor_master`
--

CREATE TABLE `counsellor_master` (
  `id` int(11) NOT NULL,
  `couns_id` varchar(20) NOT NULL,
  `couns_fname` varchar(30) NOT NULL,
  `couns_lname` varchar(30) NOT NULL,
  `couns_gender` varchar(10) NOT NULL,
  `couns_contact_no` varchar(20) NOT NULL,
  `couns_mail` varchar(50) NOT NULL,
  `couns_pass` varchar(50) NOT NULL,
  `couns_photo` varchar(255) NOT NULL,
  `couns_login` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry_data`
--

CREATE TABLE `enquiry_data` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `interested_field` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry_data`
--

INSERT INTO `enquiry_data` (`id`, `name`, `mail`, `contact`, `interested_field`) VALUES
(1, 'Satvik Naik', 'sn@ict.in', '8866126679', 'B.TECH'),
(2, 'Muskan', 'mn@ict.in', '0987654321', 'B.TECH');

-- --------------------------------------------------------

--
-- Table structure for table `signup_data`
--

CREATE TABLE `signup_data` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `passwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_data`
--

INSERT INTO `signup_data` (`id`, `name`, `mail`, `passwd`) VALUES
(1, 'Satvik Naik', 'snnaik', 'snict123'),
(2, 'XYZ', 'XYZPQR', 'xyzpqr123'),
(3, 'Hari', 'hari', 'hari123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_data`
--
ALTER TABLE `admission_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellor_alloted`
--
ALTER TABLE `counsellor_alloted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellor_master`
--
ALTER TABLE `counsellor_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry_data`
--
ALTER TABLE `enquiry_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_data`
--
ALTER TABLE `signup_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_data`
--
ALTER TABLE `admission_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `counsellor_alloted`
--
ALTER TABLE `counsellor_alloted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `counsellor_master`
--
ALTER TABLE `counsellor_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enquiry_data`
--
ALTER TABLE `enquiry_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `signup_data`
--
ALTER TABLE `signup_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
