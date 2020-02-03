-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 06:09 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackthon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_places`
--

CREATE TABLE `tb_places` (
  `place_id` int(8) NOT NULL,
  `place_region` varchar(255) NOT NULL,
  `place_name` varchar(255) NOT NULL,
  `place_description` longtext NOT NULL,
  `feasible_visit` int(8) NOT NULL,
  `photo_url` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_places`
--

INSERT INTO `tb_places` (`place_id`, `place_region`, `place_name`, `place_description`, `feasible_visit`, `photo_url`) VALUES
(1, 'lumbini', 'lumbini', 'this is the description of lumbini', 0, '/images/abcd.png'),
(2, 'palpa', 'tansen', 'good place to ride', 0, ''),
(3, 'rupandehi', 'butwal', 'good place', 1, ''),
(5, 'rupandehi', 'golpark', 'good place to visit', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tourists`
--

CREATE TABLE `tb_tourists` (
  `tourist_id` int(8) NOT NULL,
  `tourist_name` varchar(255) NOT NULL,
  `tourist_checkedin` varchar(255) NOT NULL,
  `tourist_destination` varchar(255) NOT NULL,
  `tourist_time_to_reach` varchar(255) NOT NULL,
  `tourist_cur_pos` varchar(255) NOT NULL,
  `tourist_status` varchar(255) NOT NULL,
  `tourist_rescue_needed` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tourists`
--

INSERT INTO `tb_tourists` (`tourist_id`, `tourist_name`, `tourist_checkedin`, `tourist_destination`, `tourist_time_to_reach`, `tourist_cur_pos`, `tourist_status`, `tourist_rescue_needed`) VALUES
(1, 'sudip', 'butwal', 'palpa', '90', 'butwal', 'travelling', 0),
(2, 'maniraj', 'butwal', 'lumbini', '90', 'bhairahawa', 'completed', 0),
(3, 'sp poudel', 'butwal', 'bhairahawa', '45', 'yogikuti', 'travelling', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'sudip', '$2y$10$EbamDsXKdnAwv6f0PxX4bOJx1jhxPGe5o6kD5EXfUf3bujJ.YPn3K');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_places`
--
ALTER TABLE `tb_places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tb_tourists`
--
ALTER TABLE `tb_tourists`
  ADD PRIMARY KEY (`tourist_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_places`
--
ALTER TABLE `tb_places`
  MODIFY `place_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_tourists`
--
ALTER TABLE `tb_tourists`
  MODIFY `tourist_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
