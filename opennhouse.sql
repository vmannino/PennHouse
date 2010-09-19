-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2010 at 10:47 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `opennhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE IF NOT EXISTS `houses` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(128) NOT NULL,
  `sqr_ft` int(11) NOT NULL,
  `total_rent` int(11) NOT NULL,
  `amenities` text NOT NULL,
  `availability` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `images` text NOT NULL,
  `rid` int(11) NOT NULL,
  `avg_rating` int(11) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `avg_rent` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`hid`, `address`, `sqr_ft`, `total_rent`, `amenities`, `availability`, `lid`, `images`, `rid`, `avg_rating`, `bedrooms`, `avg_rent`, `title`) VALUES
(1, '4036 spruce street philadelphia pa 19104', 0, 6500, '', 0, 0, '200029004.jpg,example.jpg,GibsonHouse3.jpg,house-selling-1.jpg', 0, 4, 13, 640, '4036 Spruce St'),
(2, '4109 pine street philadelphia pa 19104', 3000, 6500, '', 0, 0, 'example.jpg', 0, 2, 12, 540, '4109 Pine St'),
(3, '3908 spruce street philadelphia pa', 4000, 5000, '', 0, 0, 'GibsonHouse3.jpg', 0, 3, 11, 620, '3908 Spruce St'),
(4, '3913 baltimore ave philadelphia pa 19104', 1600, 4000, '', 0, 1, '3913balt,3913balt_thumb', 0, 4, 6, 667, '3913 Baltimore Ave'),
(5, '', 0, 0, '', 0, 0, '', 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `landlords`
--

CREATE TABLE IF NOT EXISTS `landlords` (
  `lid` int(11) NOT NULL,
  `houses` text NOT NULL,
  `reviews` text NOT NULL,
  `ll_avg_rating` int(11) NOT NULL,
  `ll_title` int(11) NOT NULL,
  KEY `lid` (`lid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landlords`
--


-- --------------------------------------------------------

--
-- Table structure for table `proratings`
--

CREATE TABLE IF NOT EXISTS `proratings` (
  `hid` int(11) NOT NULL,
  `past1` text NOT NULL,
  `past2` text NOT NULL,
  `past3` text NOT NULL,
  `past4` text NOT NULL,
  KEY `hid` (`hid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proratings`
--


-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE IF NOT EXISTS `ratings` (
  `rtid` int(11) NOT NULL,
  `id` varchar(128) NOT NULL,
  `date` date NOT NULL,
  `rating1` int(11) NOT NULL,
  `rating2` int(11) NOT NULL,
  `rating3` int(11) NOT NULL,
  `ratign4` int(11) NOT NULL,
  `rating5` int(11) NOT NULL,
  `avg_rating` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  PRIMARY KEY (`rtid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--


-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `rvid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `author` varchar(128) NOT NULL,
  `post_time` date NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`rvid`),
  KEY `rvid` (`rvid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `saved_searches`
--

CREATE TABLE IF NOT EXISTS `saved_searches` (
  `sid` int(11) NOT NULL,
  `query` text NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saved_searches`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `picture` text,
  `houses` text,
  `saved_searches` text,
  `favorites` text,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `email`, `name`, `username`, `picture`, `houses`, `saved_searches`, `favorites`) VALUES
(2222, 'name', 'email', NULL, NULL, NULL, NULL, NULL),
(23123, 'asdasd', 'asdsad', NULL, NULL, NULL, NULL, NULL),
(1167546471, 'Vin Mannino', 'vinm@seas.upenn.edu', NULL, NULL, NULL, NULL, '1,2,3,4'),
(525810338, 'Alex Marple', 'spyrogira08@yahoo.com', NULL, NULL, NULL, NULL, NULL),
(1037370104, 'Alyssa Marx', 'skittlezchic22@aol.com', NULL, NULL, NULL, NULL, NULL),
(624726, 'Nate Bayer', 'ndbayer@gmail.com', NULL, NULL, NULL, NULL, NULL),
(1467900335, 'Justin Broglie', '', NULL, NULL, NULL, NULL, NULL);
