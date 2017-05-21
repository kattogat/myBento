-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2017 at 08:42 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recept`
--

CREATE TABLE IF NOT EXISTS `recept` (
  `id` int(11) NOT NULL,
  `name` varchar(450) COLLATE utf8_swedish_ci NOT NULL,
  `description` text COLLATE utf8_swedish_ci NOT NULL,
  `instructions` text COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recept_ingredients`
--

CREATE TABLE IF NOT EXISTS `recept_ingredients` (
  `id` int(11) NOT NULL,
  `recept_id` int(11) NOT NULL,
  `name` varchar(450) COLLATE utf8_swedish_ci NOT NULL,
  `amount` float NOT NULL,
  `liter` tinyint(1) NOT NULL,
  `kg` tinyint(1) NOT NULL,
  `pieces` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recept_opinion`
--

CREATE TABLE IF NOT EXISTS `recept_opinion` (
  `id` int(11) NOT NULL,
  `recept_id` int(11) NOT NULL,
  `opinion` int(11) NOT NULL,
  `comnt` varchar(500) COLLATE utf8_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pantry`
--
ALTER TABLE `pantry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recept`
--
ALTER TABLE `recept`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recept_ingredients`
--
ALTER TABLE `recept_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recept_opinion`
--
ALTER TABLE `recept_opinion`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pantry`
--
ALTER TABLE `pantry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recept`
--
ALTER TABLE `recept`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recept_ingredients`
--
ALTER TABLE `recept_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `recept_opinion`
--
ALTER TABLE `recept_opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
