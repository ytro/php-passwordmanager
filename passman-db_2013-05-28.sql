-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: May 28, 2013 at 11:52 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `passman`
--

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `master_id` int(11) NOT NULL AUTO_INCREMENT,
  `master_password` varchar(25) NOT NULL,
  PRIMARY KEY (`master_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`master_id`, `master_password`) VALUES
(1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `password_id` int(11) NOT NULL AUTO_INCREMENT,
  `password_name` varchar(50) NOT NULL,
  `login` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `url` varchar(50) NOT NULL,
  `notes` text NOT NULL,
  PRIMARY KEY (`password_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`password_id`, `password_name`, `login`, `password`, `url`, `notes`) VALUES
(30, 'mytestpassword', 'testlogin', 'testpassword', 'test.com', 'a test password'),
(2, 'My Twitter account', 'twitterlogin', 'twitterpassword', 'http://twitter.com', 'my twitter account'),
(27, 'Another name', 'Login', 'password', 'hotmail', 'NOTES\r\n\r\nWITH\r\nMULTIPLE\r\nLINES\r\nS');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
