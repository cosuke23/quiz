-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 12:49 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `id`) VALUES
('admin', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `final_questions`
--

CREATE TABLE IF NOT EXISTS `final_questions` (
  `question` text NOT NULL,
  `correct_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_questions`
--

INSERT INTO `final_questions` (`question`, `correct_ans`) VALUES
('what is the exact date of magellans arrival in the philippines?', 'mar 2');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `counting` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`fname`, `lname`, `rank`, `id`, `pic`, `counting`, `level`) VALUES
('tam', 'bi', 1, 5, 'profiles/34818834_1954694394602994_3281099351920738304_n.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loser`
--

CREATE TABLE IF NOT EXISTS `loser` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `rank` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `counting` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loser`
--

INSERT INTO `loser` (`fname`, `lname`, `rank`, `id`, `pic`, `counting`, `level`) VALUES
('clifford', 'ursabia', 1, '2', 'profiles/34818834_1954694394602994_3281099351920738304_n.jpg', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `question_display`
--

CREATE TABLE IF NOT EXISTS `question_display` (
  `question_no` int(11) NOT NULL AUTO_INCREMENT,
  `choice_one` varchar(255) DEFAULT NULL,
  `choice_two` varchar(255) DEFAULT NULL,
  `choice_three` varchar(255) DEFAULT NULL,
  `choice_four` varchar(255) DEFAULT NULL,
  `main_question` text NOT NULL,
  `answer` varchar(200) NOT NULL,
  `question_title` varchar(400) NOT NULL,
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `question_display`
--

INSERT INTO `question_display` (`question_no`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `main_question`, `answer`, `question_title`) VALUES
(18, 'mar 1', 'mar 2', 'mar 3', 'mar 4', 'what is the exact date of magellans arrival in the philippines?', 'mar 2', 'magellan');

-- --------------------------------------------------------

--
-- Table structure for table `table_for_questions`
--

CREATE TABLE IF NOT EXISTS `table_for_questions` (
  `question_no` int(11) NOT NULL AUTO_INCREMENT,
  `choice_one` varchar(255) DEFAULT NULL,
  `choice_two` varchar(255) DEFAULT NULL,
  `choice_three` varchar(255) DEFAULT NULL,
  `choice_four` varchar(255) DEFAULT NULL,
  `main_question` text NOT NULL,
  `answer` varchar(200) NOT NULL,
  `question_title` varchar(400) NOT NULL,
  PRIMARY KEY (`question_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `table_for_questions`
--

INSERT INTO `table_for_questions` (`question_no`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `main_question`, `answer`, `question_title`) VALUES
(18, 'mar 1', 'mar 2', 'mar 3', 'mar 4', 'what is the exact date of magellans arrival in the philippines?', 'mar 2', 'magellan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` varchar(50) NOT NULL,
  `level` int(11) NOT NULL,
  `mark` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `pass`, `course`, `year`, `pic`, `id`, `level`, `mark`) VALUES
('clifford', 'ursabia', 'cli', 'bsit', '3', 'profiles/34818834_1954694394602994_3281099351920738304_n.jpg', '2', 4, 'done'),
('tam', 'bi', 'm', '', '', 'profiles/34818834_1954694394602994_3281099351920738304_n.jpg', '5', 0, 'done'),
('clifford', 'ursabia', 'ford', '', '', '', '10', 0, ''),
('ro', 'kjkl', 'ro', 'jklkj', 'lkjlkj', 'lkj', '0', 2, ''),
('dar', 'na', 'ba', 'l;k', 'l;k', 'lk', '7', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE IF NOT EXISTS `word` (
  `word_id` int(20) NOT NULL AUTO_INCREMENT,
  `word` varchar(20) NOT NULL,
  `meaning` varchar(1000) NOT NULL,
  `type_verse` varchar(1000) NOT NULL,
  `date_search` datetime NOT NULL,
  `pic_name` varchar(100) NOT NULL,
  PRIMARY KEY (`word_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `word`
--

INSERT INTO `word` (`word_id`, `word`, `meaning`, `type_verse`, `date_search`, `pic_name`) VALUES
(40, 'ijoij', 'oijo', 'ijoi', '2018-02-15 02:00:00', 'ioj'),
(41, 'oij', 'ij', 'iojoi', '2018-02-08 00:00:00', 'io');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
