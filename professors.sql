-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 01, 2014 at 02:10 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `LSU_Scheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE IF NOT EXISTS `professors` (
  `professor_id` int(11) NOT NULL AUTO_INCREMENT,
  `professor_name` varchar(20) NOT NULL,
  `professor_department` varchar(20) NOT NULL,
  `professor_website` varchar(20) NOT NULL,
  `professor_gpa` double(4,3) NOT NULL,
  `professor_rating` double(5,3) NOT NULL,
  `professor_bio` varchar(1000) NOT NULL,
  `professor_class` int(11) NOT NULL,
  `professor_email` varchar(20) NOT NULL,
  `professor_image` varchar(20) NOT NULL,
  PRIMARY KEY (`professor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`professor_id`, `professor_name`, `professor_department`, `professor_website`, `professor_gpa`, `professor_rating`, `professor_bio`, `professor_class`, `professor_email`, `professor_image`) VALUES
(1, 'John Doe', 'Computer Science', 'www.google.com', 3.400, 7.800, 'Joined Suffolk University as an Assistant Professor in the Department of Computer Science in the College of Engineering. ', 1, 'johndoe@gmail.com', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
