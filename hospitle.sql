-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2019 at 08:09 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospitle`
--
CREATE DATABASE IF NOT EXISTS `hospitle` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospitle`;

-- --------------------------------------------------------

--
-- Table structure for table `hospitle`
--

CREATE TABLE IF NOT EXISTS `hospitle` (
  `id_hospitle` int(11) NOT NULL AUTO_INCREMENT,
  `name_hospitle` varchar(100) NOT NULL,
  PRIMARY KEY (`id_hospitle`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `hospitle`
--

INSERT INTO `hospitle` (`id_hospitle`, `name_hospitle`) VALUES
(1, 'abzuar'),
(2, '2'),
(4, '.aaaaaaaaaaaaaaaa1.'),
(5, '.wwwwwwwwwwwwwwwww.'),
(6, '.abzuar.'),
(7, '.111111111111111111111111111.');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id_room` int(11) NOT NULL AUTO_INCREMENT,
  `info_rome` text NOT NULL,
  `price_room` float NOT NULL,
  `hospitle_room` int(11) NOT NULL,
  `tybe_room` int(11) NOT NULL,
  `status_room` varchar(40) NOT NULL,
  PRIMARY KEY (`id_room`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id_room`, `info_rome`, `price_room`, `hospitle_room`, `tybe_room`, `status_room`) VALUES
(1, '1', 1, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE IF NOT EXISTS `room_type` (
  `room_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type_name` varchar(100) NOT NULL,
  PRIMARY KEY (`room_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_name`) VALUES
(1, 'ca'),
(3, 'b'),
(4, 'aa'),
(5, 'aa'),
(6, 'aa'),
(7, 'aa'),
(8, 'aa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
