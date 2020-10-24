-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 05:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foilers`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `work_no` int(11) NOT NULL,
  `job_no` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `full_wrap` tinyint(1) NOT NULL DEFAULT 0,
  `pdr` tinyint(1) NOT NULL DEFAULT 0,
  `ppf` tinyint(1) NOT NULL DEFAULT 0,
  `backtakleen` tinyint(1) NOT NULL DEFAULT 0,
  `tint` tinyint(1) NOT NULL DEFAULT 0,
  `decals` tinyint(1) NOT NULL DEFAULT 0,
  `polish_detailing` tinyint(1) NOT NULL DEFAULT 0,
  `branding` tinyint(1) NOT NULL DEFAULT 0,
  `sound_system` tinyint(1) NOT NULL DEFAULT 0,
  `ceramic` tinyint(1) NOT NULL DEFAULT 0,
  `glassparency` tinyint(1) NOT NULL DEFAULT 0,
  `roof` tinyint(1) NOT NULL DEFAULT 0,
  `hood` tinyint(1) NOT NULL DEFAULT 0,
  `trunk` tinyint(1) NOT NULL DEFAULT 0,
  `right_door_1` tinyint(1) NOT NULL DEFAULT 0,
  `right_door_2` tinyint(1) NOT NULL DEFAULT 0,
  `right_front_bumper` tinyint(1) NOT NULL DEFAULT 0,
  `right_rear_bumper` tinyint(1) NOT NULL DEFAULT 0,
  `left_door_1` tinyint(1) NOT NULL DEFAULT 0,
  `left_door_2` tinyint(1) NOT NULL DEFAULT 1,
  `left_front_bumper` tinyint(1) NOT NULL DEFAULT 0,
  `left_rear_bumper` tinyint(1) NOT NULL DEFAULT 0,
  `grill` tinyint(1) NOT NULL DEFAULT 0,
  `head_light` tinyint(1) NOT NULL DEFAULT 0,
  `front_fascia` tinyint(1) NOT NULL DEFAULT 0,
  `bumper_molding` tinyint(1) NOT NULL DEFAULT 0,
  `customer_concern_1` varchar(500) NOT NULL,
  `customer_concern_2` varchar(500) NOT NULL,
  `customer_concern_3` varchar(500) NOT NULL,
  `customer_concern_4` varchar(500) NOT NULL,
  `customer_concern_5` varchar(500) NOT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'Repair Work Begins'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `time`, `date`, `work_no`, `job_no`, `customer_name`, `email`, `full_wrap`, `pdr`, `ppf`, `backtakleen`, `tint`, `decals`, `polish_detailing`, `branding`, `sound_system`, `ceramic`, `glassparency`, `roof`, `hood`, `trunk`, `right_door_1`, `right_door_2`, `right_front_bumper`, `right_rear_bumper`, `left_door_1`, `left_door_2`, `left_front_bumper`, `left_rear_bumper`, `grill`, `head_light`, `front_fascia`, `bumper_molding`, `customer_concern_1`, `customer_concern_2`, `customer_concern_3`, `customer_concern_4`, `customer_concern_5`, `Status`) VALUES
(2, '838:59:59', '2020-10-08', 2147483647, 51588123, 'rock', 'mufaddalpatanwala555@gmail.com', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 0, '', '', '', '', '', 'Body Work, Reassembly, and Paint'),
(18, '00:00:00', '2020-10-22', 4, 5, 'Bella', 'mufaddal5211@hotmail.com', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Should take care of car properly', 'Should take care of car properly', 'Should take care of car properly', '', '', 'Repair Work Begins'),
(19, '00:00:00', '2020-10-14', 45545489, 84894, 'Funny', 'mufaddal1125@gmail.com', 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Should take care of car properly', 'Should take care of car properly', 'Should take care of car properly', '', '', 'Body Work, Reassembly, and Paint'),
(20, '00:00:00', '2020-10-10', 123456, 123456, 'Mufaddal', 'mufaddal1125@gmail.com', 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 'Customer needs urgently', 'Should take care of car properly', 'Wash Properly', '', '', 'Repair Work Begins'),
(21, '11:43:00', '2020-09-30', 12345, 12345, 'Ron', 'drive.2.mufaddal@gmail.com', 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Should take care of car properly', 'Customer needs urgently', '', '', '', 'Repair Work Begins');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tof` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `tof`) VALUES
(10, 'riya', '$2y$10$JJX/v.47iaV0MaJT/uYr7ONBjAakYQ8LJfW2LabMQY69wCI5Wsgt2', 'riya123@hotmail.com', '2020-10-10 21:59:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
