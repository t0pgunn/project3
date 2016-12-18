-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2016 at 07:57 PM
-- Server version: 5.5.49-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contactme`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagelist`
--

CREATE TABLE IF NOT EXISTS `messagelist` (
  `id` int(11) NOT NULL,
  `guest_name` varchar(50) NOT NULL,
  `guest_email` varchar(50) NOT NULL,
  `guest_phone` varchar(50) NOT NULL,
  `guest_message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagelist`
--

INSERT INTO `messagelist` (`id`, `guest_name`, `guest_email`, `guest_phone`, `guest_message`) VALUES
(1, 'Bill Gates', 'Bill@gates.com', '1212121212', 'I hope this works!'),
(2, 'asdg', 'adsf@sdg.cs', '3252323455', 'sfhsfh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagelist`
--
ALTER TABLE `messagelist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagelist`
--
ALTER TABLE `messagelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
