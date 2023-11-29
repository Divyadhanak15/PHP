-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 03:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcaaa1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mysqlpersonaldetail`
--

CREATE TABLE `mysqlpersonaldetail` (
  `id` int(20) NOT NULL,
  `about` varchar(555) NOT NULL,
  `sikllset` varchar(555) NOT NULL,
  `project_detail` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mysqlpersonaldetail`
--

INSERT INTO `mysqlpersonaldetail` (`id`, `about`, `sikllset`, `project_detail`) VALUES
(1, 'My name is bansi raiyani. I graduated with a Computer degree in 2023 in m.v.m college I had worked with  as php developer ', 'php ai cyber security', 'resturant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mysqlpersonaldetail`
--
ALTER TABLE `mysqlpersonaldetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mysqlpersonaldetail`
--
ALTER TABLE `mysqlpersonaldetail`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
