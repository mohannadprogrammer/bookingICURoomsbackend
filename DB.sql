-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 17, 2019 at 04:22 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `hospitle`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `booking`
-- 

CREATE TABLE `booking` (
  `id_room` int(11) NOT NULL,
  `booking_user_id` int(11) NOT NULL,
  `booking_room_id` int(11) NOT NULL,
  `booking_date` int(11) NOT NULL,
  PRIMARY KEY  (`id_room`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='aaaaa';

-- 
-- Dumping data for table `booking`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `hospitle`
-- 

CREATE TABLE `hospitle` (
  `id_hospitle` int(11) NOT NULL auto_increment,
  `name_hospitle` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_hospitle`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Dumping data for table `hospitle`
-- 

INSERT INTO `hospitle` (`id_hospitle`, `name_hospitle`) VALUES 
(2, 'qqqqqqqqqqqqqq'),
(3, 'aaaaaaaaaaaa'),
(4, 'aaaaaaaaaaaa'),
(5, 'qqqqqqqqqqqqqqqqq'),
(6, 'qqqqqqqqqqqqqqqqq'),
(7, 'qqqqqqqqqqqqqqqqq'),
(8, 'qqqqqqqqqqqqqqqqq'),
(9, 'qqqqqqqqqqqqqqqqq'),
(10, 'qqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

-- 
-- Table structure for table `rooms`
-- 

CREATE TABLE `rooms` (
  `id_room` int(11) NOT NULL auto_increment,
  `info_rome` text NOT NULL,
  `price_room` float NOT NULL,
  `hospitle_room` int(11) NOT NULL,
  `tybe_room` int(11) NOT NULL,
  `status_room` varchar(40) NOT NULL,
  PRIMARY KEY  (`id_room`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `rooms`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `room_type`
-- 

CREATE TABLE `room_type` (
  `room_type_id` int(11) NOT NULL auto_increment,
  `room_type_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`room_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `room_type`
-- 

INSERT INTO `room_type` (`room_type_id`, `room_type_name`) VALUES 
(1, '2'),
(2, 'w');

-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `phone_user` varchar(100) NOT NULL,
  `address_user` varchar(100) NOT NULL,
  `nationl_num_user` varchar(100) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `type_user` varchar(100) NOT NULL,
  PRIMARY KEY  (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` (`id_user`, `name_user`, `email_user`, `phone_user`, `address_user`, `nationl_num_user`, `password_user`, `type_user`) VALUES 
(0, 'ali', 'ali@gmail.com', '092086726', 'sudan,omdrman,home282', '87654334678', '123', 'مدير نظام');
