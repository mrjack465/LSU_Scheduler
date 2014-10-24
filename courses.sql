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
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(100) NOT NULL,
  `course_college` varchar(100) NOT NULL,
  `course_website` varchar(1000) NOT NULL,
  `course_gpa` double(4,3) NOT NULL,
  `course_rating` double(5,3) NOT NULL,
  `course_description` varchar(10000) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_professor` varchar(100) NOT NULL,
  `course_section` int(11) NOT NULL,
  `course_major` varchar(1000) NOT NULL,
  `course_location` varchar(100) NOT NULL,
  `course_geo` varchar(10000) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_college`, `course_website`, `course_gpa`, `course_rating`, `course_description`, `course_code`, `course_professor`, `course_section`, `course_major`, `course_location`, `course_geo`) VALUES
(1, 'Object Oriented Design', 'College of Engineering', 'http://csc.lsu.edu/ugrad_files/Course_Outcomes_CSC_3102.pdf', 2.940, 8.500, 'Advanced object oriented software development. Use of the unified modeling language as a design tool will be emphasized.', 'CSC-3380', 'John Doe', 1, 'Computer Science', '1002 Patrick Taylor Hall', '<iframe width="200" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Patrick+F.+Taylor+Hall,+Nicholson+Drive+Ext,+Baton+Rouge,+LA&amp;aq=0&amp;oq=patrick+taylor+hall&amp;sll=30.441474,-91.111419&amp;sspn=0.361113,0.617294&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=30.407733,-91.179666&amp;spn=0.006295,0.006295&amp;t=m&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Patrick+F.+Taylor+Hall,+Nicholson+Drive+Ext,+Baton+Rouge,+LA&amp;aq=0&amp;oq=patrick+taylor+hall&amp;sll=30.441474,-91.111419&amp;sspn=0.361113,0.617294&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=30.407733,-91.179666&amp;spn=0.006295,0.006295&amp;t=m" style="color:#0000FF;text-align:left">View Larger Map</a></small>');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
