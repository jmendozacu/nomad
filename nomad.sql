-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 04:02 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nomad`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments_by_location`
--

CREATE TABLE IF NOT EXISTS `comments_by_location` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Portsmouth_NH` varchar(5000) NOT NULL,
  `Hampton_Beach_NH` varchar(5000) NOT NULL,
  `North_Conway_NH` varchar(5000) NOT NULL,
  `Millinockett_ME` varchar(5000) NOT NULL,
  `Bar_Harbor_ME` varchar(5000) NOT NULL,
  `Sugarloaf_ME` varchar(5000) NOT NULL,
  `Sunday_River_ME` varchar(5000) NOT NULL,
  `Ogunquit_ME` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `votes_by_location`
--

CREATE TABLE IF NOT EXISTS `votes_by_location` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `location` varchar(30) NOT NULL,
  `value` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `votes_by_location`
--

INSERT INTO `votes_by_location` (`id`, `location`, `value`) VALUES
(16, 'Portsmouth_NH', 1),
(17, 'Portsmouth_NH', 1),
(18, 'Portsmouth_NH', 0),
(19, 'Portsmouth_NH', 0),
(20, 'Portsmouth_NH', 1),
(21, 'Hampton_Beach_NH', 1),
(22, 'Hampton_Beach_NH', 0),
(23, 'Hampton_Beach_NH', 0),
(24, 'Hampton_Beach_NH', 0),
(25, 'Hampton_Beach_NH', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
