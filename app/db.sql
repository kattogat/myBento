-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: May 31, 2017 at 08:37 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybento`
--

-- --------------------------------------------------------

--
-- Table structure for table `pantry`
--

CREATE TABLE IF NOT EXISTS `pantry` (
  `id` int(11) NOT NULL,
  `name` varchar(450) COLLATE utf8_swedish_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `liter` float DEFAULT NULL,
  `kg` float DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `pantry`
--

INSERT INTO `pantry` (`id`, `name`, `quantity`, `liter`, `kg`) VALUES
(1, 'Tomat', 4, NULL, NULL),
(2, 'Äpple', 1, 0, 0),
(3, 'Pannkaka', 5, 0, 0),
(5, 'Päron', 35, 0, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pantry`
--
ALTER TABLE `pantry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pantry`
--
ALTER TABLE `pantry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
