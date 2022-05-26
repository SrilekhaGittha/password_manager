-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 01:42 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `password_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `password_details`
--

CREATE TABLE `password_details` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `website` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_details`
--

INSERT INTO `password_details` (`id`, `username`, `password`, `website`) VALUES
(10, 'email_wish', 'password@123', 'www.email_wish.com'),
(11, 'Iam_sweet#2&3', 'sweetest_#@!123', 'www.My_own_wish.com'),
(13, 'be_unique@2002', 'iam_unique#2002', 'ww.uniqueworld.com'),
(14, 'intern@22', 'email_wish#me@intern', 'www.internship.com'),
(15, 'west_side@123', 'weste_is_east123', 'www.itsme_again.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `password`) VALUES
(1, 'insert123', 'password123'),
(3, 'insert123', 'pass#123'),
(4, 'insert123', 'pass#123'),
(5, 'insert123', 'pass#123'),
(10, 'insert123', 'password'),
(11, 'insert123', 'password'),
(12, 'email_wish', 'password1234'),
(13, 'quantum321', 'del231@342'),
(14, 'quantum321', 'iam_me123'),
(15, 'email_wish', 'password123'),
(16, 'email_wish', 'password123'),
(17, 'insert123', 'password123'),
(18, 'insert123', 'password123'),
(19, 'insert123', 'passord'),
(20, 'Iam_sweet#2&3', 'swetish'),
(21, 'Iam_sweet#2&3', 'swetish'),
(22, 'insert123', 'sweetish123'),
(23, 'insert123', 'password@123'),
(24, 'insert123', 'password@123'),
(25, 'insert123', 'password123'),
(26, 'insert123', 'password123'),
(27, 'insert123', 'password123'),
(28, 'insert123', 'password123'),
(29, 'insert123', 'pass'),
(30, 'insert123', 'pass'),
(31, 'email_wish', '12345'),
(32, 'email_wish', '12345'),
(33, 'insert123', '123456'),
(34, 'insert123', 'pass#@!123'),
(35, 'beloved', 'we@1234789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_details`
--
ALTER TABLE `password_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `password_details`
--
ALTER TABLE `password_details`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
