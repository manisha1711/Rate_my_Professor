-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2014 at 10:25 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `userid` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userid`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `p_id` bigint(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `Audible` int(11) NOT NULL,
  `Projector_Working` int(11) NOT NULL,
  ` clarity` int(11) NOT NULL,
  ` Interactive` int(11) NOT NULL,
  `Helpfulness` int(11) NOT NULL,
  `easiness` int(11) NOT NULL,
  `count` bigint(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`p_id`, `rate`, `Audible`, `Projector_Working`, ` clarity`, ` Interactive`, `Helpfulness`, `easiness`, `count`) VALUES
(1, 6, 1, 0, 0, 0, 0, 0, 3),
(2, 6, 1, 1, 0, 1, 1, 1, 2),
(3, 4, 0, 1, 0, 0, 1, 0, 2),
(4, 5, 0, 0, 0, 0, 1, 0, 3),
(5, 7, 1, 1, 0, 1, 0, 0, 1),
(6, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 6, 0, 0, 1, 1, 0, 0, 2),
(8, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `prof_id` bigint(11) NOT NULL auto_increment,
  `Name` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY  (`prof_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`prof_id`, `Name`, `image`) VALUES
(1, 'Amit Kumar', '1417441179-amit.jpg'),
(2, 'Dr.debasis Das', '1417397846-debasis.jpg'),
(3, 'Dr. viraj kumar', '1417397867-viraj.jpg'),
(4, 'T.V.B.krishna Rao', '1417397885-Krishna-Rao.jpg'),
(5, 'Dr. Anuradha pasar', '1417397902-a-parasar.jpg'),
(6, 'DR. Nirmal sancheti', '1417397918-nirmal.jpg'),
(7, 'Dr. Narayan Kumar', '1417397959-narayan.jpg'),
(8, 'Vikas Upadhayay', '1417397935-vikas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_master`
--

CREATE TABLE IF NOT EXISTS `student_master` (
  `stu_id` int(11) NOT NULL auto_increment,
  `name` varchar(200) NOT NULL,
  `roll` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  PRIMARY KEY  (`stu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `student_master`
--

INSERT INTO `student_master` (`stu_id`, `name`, `roll`, `email`, `contact`, `pass`) VALUES
(1, 'manisha', 'u101112fcs158', 'manishachoudhary32@gmail.com', '8233507437', 'mani1234'),
(5, 'tania poddar', 'u10112fec148', 'tania.poddar@st.niituniversity.in', '7737397365', 'tania1234'),
(2, 'ruchi', 'u101112fcs164', 'ruchi@gmail.com', '7737378963', 'ruchi1234'),
(6, 'ashima', '36', 'ashima@gmail.com', '8233507437', 'ash1ma'),
(8, 'Raghav', '214', 'raghav@gmail.com', '8233714782', 'fuckvu'),
(10, 'ashima', '3443', 'ashima@gmail.com', '23442', 'ash1ma'),
(11, 'Prachi', '1234', 'prachi@gmail.com', '2234567', 'prachi'),
(12, 'abhignya', '1234', 'abhignya@gmail.com', '892786375687', 'abhi');
