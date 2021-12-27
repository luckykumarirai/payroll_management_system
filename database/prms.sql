-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 30, 2020 at 08:28 AM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `class` varchar(100) NOT NULL,
  `basic_pay` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `m_a` varchar(100) NOT NULL,
  `t_a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `class`, `basic_pay`, `salary`, `m_a`, `t_a`) VALUES
(2, 'class-1', '50000', '10000', '1000', '500'),
(3, 'class-2', '10000', '8000', '1000', '500'),
(4, 'class-3', '10000', '8000', '1000', '500');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `class` varchar(20) NOT NULL,
  `bank_account` varchar(30) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `basic_pay` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `leave` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `email`, `mobile_no`, `class`, `bank_account`, `degree`, `branch`, `city`, `pincode`, `basic_pay`, `salary`, `designation`, `address`, `leave`) VALUES
(1, 'lucky kumari', 'luckykumari1099@gmail.com', '6204944065', 'class-1', 'o89798777', 'PHD', 'IT', 'Buxar', '802128', '50000', '80000', 'student', 'Teara', '3'),
(2, 'sonam rai', 'luckykumari1099@gmail.com', '6204944065', 'class-1', '98098979', 'PHD', 'Engineering', 'buxar', '802128', '60000', '65000', 'student', 'teara', 'NULL'),
(4, 'juhi rai', 'luckykumari1099@gmail.com', '6204944065', 'class-2', '98098979', 'PHD', 'Engineering', 'Buxar', '802128', '20000', '35000', 'student', 'Teara', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(3, 'lucky123', '123', 'admin'),
(4, 'lucky kumari', '123', 'employee'),
(5, 'juhi  rai', '123', 'employee'),
(6, 'sonam rai', '123', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
