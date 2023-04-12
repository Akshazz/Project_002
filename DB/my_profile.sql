-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 03:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_profile`
--

CREATE TABLE `my_profile` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `sex` enum('Male','Female','Other') NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `role` enum('Student','Admin') NOT NULL,
  `access_level` enum('1','2') NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `my_profile`
--

INSERT INTO `my_profile` (`id`, `email`, `username`, `password`, `lname`, `fname`, `age`, `sex`, `address`, `contact`, `role`, `access_level`) VALUES
(1, 'admin@gmail.com', 'admin', '202cb962ac59075b964b07152d234b70', 'har', 'nie', 23, 'Male', 'QC', 123456789, 'Admin', '1'),
(3, 'a@a', 'example', '202cb962ac59075b964b07152d234b70', 'exa', 'ple', 100, 'Male', 'TEST', 1234567890, 'Student', '2'),
(12, 'admin.test@gmail.com', '', '202cb962ac59075b964b07152d234b70', 'Niegos', 'Harold', 0, 'Male', '', 0, 'Student', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_profile`
--
ALTER TABLE `my_profile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_profile`
--
ALTER TABLE `my_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
