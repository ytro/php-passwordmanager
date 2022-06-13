-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306

-- Generation Time: May 29, 2013 at 04:21 AM
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
  PRIMARY KEY (`password_id`),
  KEY `password_id` (`password_id`),
  KEY `password_id_2` (`password_id`),
  KEY `url` (`url`),
  KEY `password_id_3` (`password_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`password_id`, `password_name`, `login`, `password`, `url`, `notes`) VALUES
(48, 'Compte Hotmail', 'yann_trottier@hotmail.com', 'motdepasse', 'http://hotmail.com', 'Voici mon compte hotmail'),
(49, 'Compte Laptop', 'monLaptop', '12345', 'http://www.google.com', 'Voici le mot de passe de mon compte laptop'),
(50, 'Mon compte Gmail', 'yann_trottier@gmail.com', 'pass123', 'http://www.gmail.com', 'Voici mon compte Gmail'),
(51, 'Masterpassword : 123456', 'masterpassword', '123456', 'http://www.google.com', 'Le master password pour ce gestionnaire de mot de passe est 123456!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
