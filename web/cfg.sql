-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2016 at 01:24 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cfg`
--

-- --------------------------------------------------------

--
-- Table structure for table `ngo_list`
--

CREATE TABLE `ngo_list` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ngo_list`
--

INSERT INTO `ngo_list` (`ngo_id`, `ngo_name`) VALUES
(1, 'child line'),
(2, 'being human'),
(3, 'ngo3'),
(4, 'ngo4');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `pro_id` int(11) NOT NULL,
  `proj_name` text NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `manager_id` int(11) NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL,
  `manager_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`pro_id`, `proj_name`, `ngo_id`, `manager_id`, `start_date`, `end_date`, `manager_name`) VALUES
(1, 'fundraising', 1, 2, '12/12/2015', '12/1/2016', 'shyam'),
(2, 'recruitment', 1, 2, '14/1/2016', '14/1/2016', '14/2/2016'),
(3, 'projectname3', 2, 1, '15/03/2016', '15/3/2016', 'ram'),
(4, 'project4', 3, 3, '20/3/2016', '20/4/2016', 'dhruv');

-- --------------------------------------------------------

--
-- Table structure for table `project_manager_detail`
--

CREATE TABLE `project_manager_detail` (
  `manager_id` int(11) NOT NULL,
  `manager_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_manager_detail`
--

INSERT INTO `project_manager_detail` (`manager_id`, `manager_name`) VALUES
(1, 'ram'),
(2, 'shyam'),
(3, 'dhruv'),
(4, 'jignesh');

-- --------------------------------------------------------

--
-- Table structure for table `task_assign`
--

CREATE TABLE `task_assign` (
  `task_id` int(11) NOT NULL,
  `vol_id` int(11) NOT NULL,
  `status` text NOT NULL,
  `proj_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_assign`
--

INSERT INTO `task_assign` (`task_id`, `vol_id`, `status`, `proj_id`) VALUES
(1, 2, 'ongoing', 3),
(2, 2, 'done', 2),
(3, 2, 'ongoing', 2),
(4, 1, 'done', 1);

-- --------------------------------------------------------

--
-- Table structure for table `task_detail`
--

CREATE TABLE `task_detail` (
  `task_id` int(11) NOT NULL,
  `task_name` text NOT NULL,
  `task_description` text NOT NULL,
  `proj_id` int(11) NOT NULL,
  `oda` text NOT NULL,
  `vol_req` text NOT NULL,
  `status` text NOT NULL,
  `start_date` text NOT NULL,
  `end_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task_detail`
--

INSERT INTO `task_detail` (`task_id`, `task_name`, `task_description`, `proj_id`, `oda`, `vol_req`, `status`, `start_date`, `end_date`) VALUES
(1, 'getreport', 'abcdacbd', 1, 'financial', 'yes', 'ongoing', '12/6/2016', '12/7/2016'),
(2, 'sendreport', 'aaaaaabccdddddddd', 3, 'finance', 'no', 'ongoing', '12/7/2016', '12/72016');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `user_name`, `password`, `role`) VALUES
(1, 'ypilankar@gmail.com', 'yashpilankar', 'partner_manager'),
(2, 'ramjain', 'passwd123', 'partner_manager'),
(3, 'eltondsouza@gmail.com', 'passwd123', 'project_manager'),
(4, 'varunbhatt@gmail.com', '123456789', 'volunteer'),
(5, 'mandeep@gmail.com', 'passwd123', 'volunteer_manager'),
(6, 'ganesh.baleri@gmail.com', 'passwd123', 'volunteer_manager');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer_detail`
--

CREATE TABLE `volunteer_detail` (
  `vid` int(11) NOT NULL,
  `vol_name` text NOT NULL,
  `status` text NOT NULL,
  `phone_no` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `volunteer_detail`
--

INSERT INTO `volunteer_detail` (`vid`, `vol_name`, `status`, `phone_no`, `email`) VALUES
(1, 'ram', 'available', '7208335034', 'ypilankar@gmail.com'),
(2, 'shyam', 'not_available', '7208335034', 'ypilankar@gmail.com'),
(3, 'dhruv', 'available', '7208335034', 'ypilankar@gmail.com'),
(4, 'varun bhatt', 'available', '7208335034', 'ypilankar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ngo_list`
--
ALTER TABLE `ngo_list`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `project_manager_detail`
--
ALTER TABLE `project_manager_detail`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `task_detail`
--
ALTER TABLE `task_detail`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `volunteer_detail`
--
ALTER TABLE `volunteer_detail`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
