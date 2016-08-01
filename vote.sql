-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2016 at 11:47 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'Adnan', 'adnan');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` int(11) NOT NULL,
  `party_id` int(100) NOT NULL,
  `halqa_id` int(100) NOT NULL,
  `candidate_fname` varchar(100) NOT NULL,
  `candidate_lname` varchar(100) NOT NULL,
  `candidate_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `party_id`, `halqa_id`, `candidate_fname`, `candidate_lname`, `candidate_image`) VALUES
(1, 1, 1, 'Ali', 'Arif ', 'pmln1.jpg'),
(2, 1, 2, 'Ayaz', 'Sadiq', 'pmln2.jpg'),
(3, 1, 3, 'Babar', 'Khan', 'pmln3.jpg'),
(4, 2, 1, 'Asif', 'Ali', 'ppp1.jpg'),
(5, 2, 2, 'Mobeen', 'Qureshi', 'ppp2.jpg'),
(6, 2, 3, 'sajjad', 'Bhutta', 'ppp3.jpg'),
(7, 3, 1, 'Haleem', 'Khan', 'pti1.jpg'),
(8, 3, 2, 'Hammad', 'Azhar', 'pti2.png'),
(9, 3, 3, 'Farrukh', 'Janjua', 'pti3.jpg'),
(10, 4, 1, 'Abdullah', 'Niazi', 'jui1.jpg'),
(11, 4, 2, 'Ahmad', 'Shoaib', 'jui2.jpg'),
(12, 4, 3, 'Rana', 'Nasir', 'jui3.jpg'),
(13, 5, 1, 'Chaudhary', 'Ijaz', 'pmlq1.jpg'),
(14, 5, 2, 'Sohail', 'Ahmad', 'pmlq2.jpg'),
(15, 5, 3, 'Abdul', 'Khaliq', 'pmlq3.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `halqa`
--

CREATE TABLE `halqa` (
  `halqa_id` int(11) NOT NULL,
  `halqa_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halqa`
--

INSERT INTO `halqa` (`halqa_id`, `halqa_name`) VALUES
(1, 'NA-145'),
(2, 'NA-122'),
(3, 'NA-56'),
(4, 'NA-146');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `party_id` int(11) NOT NULL,
  `party_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_id`, `party_name`) VALUES
(1, 'Pakistan Muslim League Nawaz(PMLN)'),
(2, 'Pakistan Peoples Party(PPP)'),
(3, 'Pakistan Tahreek Insaf (PTI)'),
(4, 'Jamiat Ulma Islam(JUI)'),
(5, 'Pakistan Muslim League Quaid Azam(PMLQ)'),
(6, 'Pak Sarzameen');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(100) NOT NULL,
  `cnic` varchar(25) NOT NULL,
  `phone` int(17) NOT NULL,
  `user_id` int(17) NOT NULL,
  `halqa_id` int(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `cnic`, `phone`, `user_id`, `halqa_id`, `address`, `dob`, `password`, `religion`, `email`) VALUES
('HaroonIrfan', '35202-1234567-7', 322123456, 6, 1, '123-A,Block', '1999-08-08', 'haroon', 'Islam', 'haroon@gmail.com'),
('AliAhmad', '35202-7654321-1', 322123456, 7, 3, '123-B,Block', '1999-07-07', 'ali', 'Islam', 'ali@gmail.com'),
('BilalAhmad', '35202-9876543-2', 322654321, 8, 3, '123-C,Block', '1999-06-06', 'bilal', 'Islam', 'bilal@gmail.com'),
('DanishIjaz', '35202-3456789-4', 321123456, 9, 1, '123-D,Block', '1999-05-05', 'danish', 'Islam', 'danish@gmail.com'),
('HamzaAhmad', '35202-2345678-4', 333123456, 10, 2, '123-E,Block', '1999-04-04', 'hamza', 'Islam', 'hamza@gmail.com'),
('AhsanAsghar', '35202-4545456-7', 332123456, 11, 3, '123-F,Block', '1999-03-03', 'ahsan', 'Islam', 'ahsan@gmail.com'),
('MahiraKhan', '35201-1234567-1', 321123456, 12, 1, '123-E,Block', '1999-02-02', 'mahira', 'Islam', 'mahira@gmail.com'),
('HashmatAli', '35201-7654321-2', 322123456, 13, 2, '123-G,Block', '1998-09-09', 'hashmat', 'Islam', 'hashmat@gmail.com'),
('MayaAhmad', '35201-2345678-3', 323123456, 14, 3, '123-H,Block', '1998-08-08', 'maya', 'Islam', 'maya@gmail.com'),
('Salahudin', '35201-8765432-4', 324123456, 15, 1, '123-I,Block', '', 'salahudin', 'Islam', 'salahudin@gmail.com'),
('AsharHussain', '35201-3456789-5', 300123456, 16, 2, '123-J,Block', '1999-06-06', 'ashar', 'Islam', 'ashar@gmail.com'),
('JamalAkbar', '35201-9876543-6', 301123456, 17, 3, '123-K,Block', '1998-05-05', 'jamal', 'Islam', 'jamal@gmail.com'),
('Mahira', '35202-3535353-3', 321234567, 20, 3, '123-F,Block', '2016-07-22', 'mahira', 'islam', 'mahira@gmail.com'),
('Minahil', '35202-4343434-4', 321212323, 21, 2, '123-G,Block', '2016-07-21', 'minahil', 'islam', 'minahil@gmail.com'),
('Salman', '35202-1234566-6', 2147483647, 22, 1, '123-H,Block', '2016-07-29', 'salman', 'islam', 'salman@gmail.com'),
('Usman', '35202-1234555-5', 2147483647, 23, 1, '123-I,Block', '2016-07-30', 'usman', 'islam', 'usman@gmail.com'),
('IrfanShareef', '35202-1234444-4', 2147483647, 24, 1, '123-G,Block', '2016-07-29', 'irfan', 'islam', 'irfan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `voted`
--

CREATE TABLE `voted` (
  `vote_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `halqa_id` int(100) NOT NULL,
  `party_id` int(100) NOT NULL,
  `candidate_id` int(100) NOT NULL,
  `vote_count` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voted`
--

INSERT INTO `voted` (`vote_id`, `user_id`, `halqa_id`, `party_id`, `candidate_id`, `vote_count`) VALUES
(1, 5, 3, 1, 15, 1),
(2, 2, 1, 1, 13, 1),
(3, 3, 2, 1, 14, 1),
(4, 4, 2, 1, 14, 1),
(5, 1, 1, 3, 13, 1),
(6, 6, 1, 2, 13, 1),
(7, 7, 2, 4, 14, 1),
(8, 8, 3, 5, 15, 1),
(9, 9, 1, 3, 13, 1),
(10, 10, 2, 3, 14, 1),
(11, 11, 3, 3, 15, 1),
(12, 14, 3, 2, 15, 1),
(13, 20, 3, 1, 15, 1),
(14, 21, 2, 1, 14, 1),
(17, 24, 1, 1, 13, 1),
(18, 22, 1, 1, 13, 1),
(19, 23, 1, 1, 13, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `halqa`
--
ALTER TABLE `halqa`
  ADD PRIMARY KEY (`halqa_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`party_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`user_id`);

--
-- Indexes for table `voted`
--
ALTER TABLE `voted`
  ADD PRIMARY KEY (`vote_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `halqa`
--
ALTER TABLE `halqa`
  MODIFY `halqa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `party`
--
ALTER TABLE `party`
  MODIFY `party_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(17) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `voted`
--
ALTER TABLE `voted`
  MODIFY `vote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
