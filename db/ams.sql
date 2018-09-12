-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 01:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight_details`
--

CREATE TABLE `flight_details` (
  `flight_no` int(10) NOT NULL,
  `member_no` int(10) NOT NULL,
  `tfrom` varchar(70) NOT NULL,
  `tto` varchar(70) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight_details`
--

INSERT INTO `flight_details` (`flight_no`, `member_no`, `tfrom`, `tto`, `date`) VALUES
(3, 3, 'Suvarnabhumi Airport', 'Istanbul Ataturk Airport', '2018-09-29'),
(4, 2, 'London International Airport', 'San  Francisco International Airport', '2018-09-02'),
(5, 2, 'Istanbul Ataturk Airport', 'Frankfurt International Airport', '2018-09-29'),
(6, 2, 'Pune Airport', 'Frankfurt International Airport', '2018-09-09'),
(7, 3, 'London International Airport', 'Guangzhou Baiyun International Airport', '2018-09-26'),
(8, 3, 'Indira Gandhi International Airport', 'Frankfurt International Airport', '2018-09-12'),
(9, 3, 'Dallas/Fort Worth International Airport', 'O\'Hare International Airport', '2018-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`) VALUES
(1, 'admin', 'admin@admin.com', 'admin', 'admin'),
(2, 'Geevika Shakya', 'gvka@gmail.com', 'member', 'gvka'),
(3, 'Manjit Shakya', 'mnzit@gmail.com', 'member', 'mnzit'),
(5, 'Rahil', 'rahil@gmail.com', 'member', 'rahil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight_details`
--
ALTER TABLE `flight_details`
  ADD PRIMARY KEY (`flight_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight_details`
--
ALTER TABLE `flight_details`
  MODIFY `flight_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
