-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 24, 2017 at 05:58 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `First Name` text NOT NULL,
  `Last Name` text NOT NULL,
  `Phone Number` int(11) NOT NULL,
  `GR Number` text NOT NULL,
  `Grade` int(11) NOT NULL,
  `Class` text NOT NULL,
  `Field` text NOT NULL,
  `Shift` text NOT NULL,
  `Why` text NOT NULL,
  `Achieve` text NOT NULL,
  `Dofor` text NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `application`
--


-- --------------------------------------------------------

--
-- Table structure for table `clubmember`
--

CREATE TABLE IF NOT EXISTS `clubmember` (
  `FirstName` varchar(40) NOT NULL,
  `LastName` varchar(40) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `GRNumber` varchar(6) NOT NULL,
  `Gender` text NOT NULL,
  `Grade` int(11) NOT NULL,
  `Class` text NOT NULL,
  `Field` text NOT NULL,
  `Shift` text NOT NULL,
  `Why` text NOT NULL,
  `Achieve` text NOT NULL,
  `Dofor` text NOT NULL,
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Total` int(11) NOT NULL,
  `source` text NOT NULL,
  `approve` text NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `clubmember`
--

INSERT INTO `clubmember` (`FirstName`, `LastName`, `PhoneNumber`, `GRNumber`, `Gender`, `Grade`, `Class`, `Field`, `Shift`, `Why`, `Achieve`, `Dofor`, `Id`, `Total`, `source`, `approve`, `status`) VALUES
('Mario', 'Gomez', 3107839, 'Ag347', 'Male', 12, 'c3', 'commerce', 'morning', 'nothing', 'nothing', 'nothing', 1, 106, '', 'true', 1),
('Abdul Aziz', 'Tamba', 3107839, 'AG347', 'Male', 12, 'C3', 'Commerce', 'Morning', 'nothing', 'nothing', 'nothing', 2, 20, '', 'true', 0),
('Mustapha', 'Sanyang', 369900, 'AG111', 'Male', 12, 'c1', 'commerce', 'morning', 'nothing', 'nothing', 'nothing', 3, 124, '', 'true', 0),
('balajo', 'sheriff', 3763626, 'AG111', 'female', 12, 'technical', 'tuyfuoy', 'ihih;oiuno', 'ouhouhopuh', 'huohopuhuohop', 'ouhohohouh', 4, 0, 'ibliu', 'true', 0),
('firstname', 'lastname', 7898087, 'grnumb', 'gender', 78, 'class', 'field', 'shift', 'whyjoin', 'achieve', 'dofor', 5, 0, 'source', 'true', 0),
('Tamba', 'Sanyang', 0, 'AG555', 'Female', 11, '', 'Science', 'Afternoon', 'nothing', 'nothing', 'nothing', 6, 0, 'in', 'true', 0),
('Abdul', 'Sanyang', 6363737, 'AG554', 'male', 12, 's1', 'Science', 'morning', 'nothing', 'nothing', 'nothing', 7, 0, 'out', 'true', 0),
('alex', 'pratt', 3107839, 'AG555', 'male', 12, 'c3', 'Science', 'morning', 'nothing', 'nothing', 'nothing', 8, 0, 'out', 'true', 0);

-- --------------------------------------------------------

--
-- Table structure for table `commerceclubtresury`
--

CREATE TABLE IF NOT EXISTS `commerceclubtresury` (
  `Discription` text NOT NULL,
  `DebitAmount` int(11) NOT NULL,
  `DateEntered` date NOT NULL,
  `EnteredBy` varchar(40) NOT NULL,
  `Total` int(11) NOT NULL,
  `DateDrawn` date NOT NULL,
  `DrawnBy` varchar(40) NOT NULL,
  `PurposeDrawn` text NOT NULL,
  `Balance` int(11) NOT NULL,
  `WithdrawalAmount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commerceclubtresury`
--

INSERT INTO `commerceclubtresury` (`Discription`, `DebitAmount`, `DateEntered`, `EnteredBy`, `Total`, `DateDrawn`, `DrawnBy`, `PurposeDrawn`, `Balance`, `WithdrawalAmount`) VALUES
('from principal', 1000, '2012-01-12', 'Mario', 0, '0000-00-00', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `name` text NOT NULL,
  `lastname` text NOT NULL,
  `GR Number` text NOT NULL,
  `gender` text NOT NULL,
  `class` text NOT NULL,
  `grade` text NOT NULL,
  `department` text NOT NULL,
  `department2` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `lastname`, `GR Number`, `gender`, `class`, `grade`, `department`, `department2`, `id`, `total`) VALUES
('mario', 'gomez', '', '', 'Commerce', '12', 'PC Repairs', 'PC Repairs', 15, 0),
('diva', 'bana', '', '', 'Commerce', '7', 'Server Admin', 'Web Design', 14, 79),
('saul', 'Tamba', '', '', 'Commerce', '12', 'PC Repairs', 'Server Admin', 13, 0),
('Mr', 'Bojang', '', '', 'Science', '12', 'Networking', 'Web Design', 12, 4),
('Muhammed', 'Balajo', '', '', 'Commerce', '12', 'Web Design', 'Networking', 11, 2),
('Abdul Aziz', 'Tamba', '', '', 'Commerce', '12', 'Web Design', 'Server Admin', 10, 2),
('mario', 'gomez', '', '', 'Commerce', '7', 'Networking', 'Networking', 16, 0),
('Alex', 'Tamba', '', 'male', 'Commerce', '12', 'Graphics Design', 'Networking', 17, 0);
