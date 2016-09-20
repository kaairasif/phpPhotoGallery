-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2016 at 10:01 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photo_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`id` int(11) NOT NULL,
  `photograph_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `author` varchar(250) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photograph_id`, `created`, `author`, `body`) VALUES
(7, 19, '2016-07-15 07:36:21', 'Asif', 'Love this pics'),
(8, 21, '2016-07-19 09:39:24', 'HI', 'Kmon aso?'),
(9, 19, '2016-08-02 11:12:07', 'Shaheb', 'He also like the picture'),
(10, 21, '2016-09-20 09:57:45', 'KOi gela', 'Kasa aso');

-- --------------------------------------------------------

--
-- Table structure for table `photographs`
--

CREATE TABLE IF NOT EXISTS `photographs` (
`id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `photographs`
--

INSERT INTO `photographs` (`id`, `filename`, `type`, `size`, `caption`) VALUES
(19, 'asifur_rahman.jpg', 'image/jpeg', 109092, 'Asifur rahman'),
(21, 'meeting-1015291.jpg', 'image/jpeg', 956933, 'Asifur rahman'),
(22, 'man-1148982.jpg', 'image/jpeg', 1042909, 'H'),
(23, 'portfolio.jpg', 'image/jpeg', 670560, 'Me'),
(25, 'businessman-1373697.jpg', 'image/jpeg', 644898, 'Asifur rahman'),
(26, 'hero-cycleoflife.jpg', 'image/jpeg', 134335, 'nestle purelife'),
(27, 'toutCycleofLife.png', 'image/png', 35822, 'life style');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`) VALUES
(1, 'asif', '123', 'Asifur', 'Rahman'),
(4, 'johnsmith', 'abcd12345', 'John', 'Smith'),
(5, 'johnsmith', 'abcd12345', 'John', 'Smith'),
(6, 'asifur', '', 'secretpwd', 'aaaa'),
(7, 'asifur', '', 'a', 'asas'),
(8, 'a', '', 'b', 'd'),
(9, 'asifur', 'a', '', '2'),
(10, 'asif', '123', 'a', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographs`
--
ALTER TABLE `photographs`
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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `photographs`
--
ALTER TABLE `photographs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
