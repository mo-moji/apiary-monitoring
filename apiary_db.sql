-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2019 at 07:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiary_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `apiary_admin`
--

CREATE TABLE `apiary_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(256) NOT NULL,
  `admin_pass` varchar(256) NOT NULL,
  `date_created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apiary_admin`
--

INSERT INTO `apiary_admin` (`id`, `admin_name`, `admin_pass`, `date_created`) VALUES
(1, 'admin', 'password', '2019-10-10 07:53:58');

-- --------------------------------------------------------

--
-- Table structure for table `apiary_hive_1`
--

CREATE TABLE `apiary_hive_1` (
  `id` int(11) NOT NULL,
  `weight` float NOT NULL,
  `harvest` varchar(20) NOT NULL,
  `temperature` int(11) NOT NULL,
  `produc` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apiary_hive_1`
--

INSERT INTO `apiary_hive_1` (`id`, `weight`, `harvest`, `temperature`, `produc`, `date_added`) VALUES
(1, 5, 'Ready', 31, 80, '2019-10-09 13:50:19'),
(2, 4.5, 'Not Ready', 27, 76, '2019-10-10 10:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `apiary_hive_2`
--

CREATE TABLE `apiary_hive_2` (
  `id` int(11) NOT NULL,
  `weight` float NOT NULL,
  `harvest` varchar(10) NOT NULL,
  `temperature` int(11) NOT NULL,
  `produc` int(11) NOT NULL,
  `date_added` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apiary_hive_2`
--

INSERT INTO `apiary_hive_2` (`id`, `weight`, `harvest`, `temperature`, `produc`, `date_added`) VALUES
(1, 2.5, 'NOT READY', 31, 60, '2019-10-10 12:03:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apiary_admin`
--
ALTER TABLE `apiary_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apiary_hive_1`
--
ALTER TABLE `apiary_hive_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apiary_hive_2`
--
ALTER TABLE `apiary_hive_2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apiary_admin`
--
ALTER TABLE `apiary_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `apiary_hive_1`
--
ALTER TABLE `apiary_hive_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apiary_hive_2`
--
ALTER TABLE `apiary_hive_2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
