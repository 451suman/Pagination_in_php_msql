-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 05:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `page`
--

-- --------------------------------------------------------

--
-- Table structure for table `page_data`
--

CREATE TABLE `page_data` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `page_data`
--

INSERT INTO `page_data` (`id`, `name`) VALUES
(1, 's'),
(2, 'asd'),
(3, 'asd'),
(4, 'asff'),
(5, 'dsf'),
(6, '5'),
(7, 'sdfg'),
(8, 'sdfsdc'),
(9, 'xczxc'),
(10, 'zcxzcxqwf'),
(11, 'zxczc'),
(12, 'asfas'),
(13, 'safasf'),
(14, 'asasf'),
(15, 'asfasfas'),
(16, 'zxczxc'),
(17, 'asdasdasd'),
(18, 'zxczxczwd'),
(19, 'asdasd'),
(20, 'asdasd'),
(21, 'adasdasd'),
(22, 'zxczxczxc'),
(23, 'asdasda'),
(24, 'asdasdsad'),
(25, 'asdasdsadsad'),
(26, 'asdasdasd'),
(27, 'asdasd'),
(28, 's'),
(29, 'asd'),
(30, 'asd'),
(31, 'asff'),
(32, 'dsf'),
(33, '5'),
(34, 'sdfg'),
(35, 'sdfsdc'),
(36, 'xczxc'),
(37, 'zcxzcxqwf'),
(38, 'zxczc'),
(39, 'asfas'),
(40, 'safasf'),
(41, 'asasf'),
(42, 'asfasfas'),
(43, 'zxczxc'),
(44, 'asdasdasd'),
(45, 'zxczxczwd'),
(46, 'asdasd'),
(47, 'asdasd'),
(48, 'adasdasd'),
(49, 'zxczxczxc'),
(50, 'asdasda'),
(51, 'asdasdsad'),
(52, 'asdasdsadsad'),
(53, 'asdasdasd'),
(54, 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `page_data`
--
ALTER TABLE `page_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `page_data`
--
ALTER TABLE `page_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
