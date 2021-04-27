-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 01:02 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
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

CREATE TABLE `final_questions` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `correct_ans` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_questions`
--

INSERT INTO `final_questions` (`id`, `question`, `correct_ans`) VALUES
(2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `identification`
--

CREATE TABLE `identification` (
  `id` int(11) NOT NULL,
  `question_no` varchar(63) NOT NULL,
  `type` varchar(63) NOT NULL,
  `question_title` varchar(63) NOT NULL,
  `question` varchar(63) NOT NULL,
  `answer` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identification`
--

INSERT INTO `identification` (`id`, `question_no`, `type`, `question_title`, `question`, `answer`) VALUES
(1, '', 'hard', 'k-pop', 'what is the lates song of red velvet?', 'Umpah Umpah'),
(3, '', 'hard', 'k-pop', 'On what year did the red velvet debuted?', 'August 01 2015');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `rank` int(11) NOT NULL,
  `id` varchar(63) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `counting` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `ans_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loser`
--

CREATE TABLE `loser` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `rank` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `counting` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_display`
--

CREATE TABLE `question_display` (
  `question_no` int(11) NOT NULL,
  `choice_one` varchar(255) DEFAULT NULL,
  `choice_two` varchar(255) DEFAULT NULL,
  `choice_three` varchar(255) DEFAULT NULL,
  `choice_four` varchar(255) DEFAULT NULL,
  `main_question` varchar(265) NOT NULL,
  `type` varchar(265) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `question_title` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_display`
--

INSERT INTO `question_display` (`question_no`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `main_question`, `type`, `answer`, `question_title`) VALUES
(27, '5', '6', '7', '8', 'How many digit are there in fifty -one million,four hundred seventy- six thousand,thirty-three?', 'easy', '6', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `table_for_questions`
--

CREATE TABLE `table_for_questions` (
  `question_no` int(11) NOT NULL,
  `choice_one` varchar(255) DEFAULT NULL,
  `choice_two` varchar(255) DEFAULT NULL,
  `choice_three` varchar(255) DEFAULT NULL,
  `choice_four` varchar(255) DEFAULT NULL,
  `main_question` text NOT NULL,
  `type` varchar(63) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `question_title` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_for_questions`
--

INSERT INTO `table_for_questions` (`question_no`, `choice_one`, `choice_two`, `choice_three`, `choice_four`, `main_question`, `type`, `answer`, `question_title`) VALUES
(21, 'a.	Petalya', 'b.	Dahon', 'c.	Talulot', 'd.	Sanga', 'Kung ang taglog ng book ay aklat, ano naman ang sa petals?', 'easy', 'c.	Talulot', 'Easy'),
(22, 'a.	Parke', 'b.	Liwasan', 'c.	Puntahan', 'd.	Pahingahaan', 'Kung ano tagalog ng city ay lungsod, ano naman ang sa park?', '', 'b.	Liwasan', 'Easy'),
(23, 'Laon Laan', 'Taga-ilog', 'Huseng Batute', 'Plaridel', 'Ano ang ginamit na alyas ni Marcelo H. Del Pilar sa kanyang pagsusulat?', '', 'Plaridel', 'Filipino'),
(24, '4', '5', '6', '7', 'Ilang barko ang dala ni Ferdinand Magellan sa kanyang ekspidisyon na naging daan sa pagkakatuklas sa Pilipinas?', 'easy', '5', 'Easy'),
(25, 'Pares Minimal', 'Klaster', 'Diptonggo', 'Salawikain', 'Ang kambal katinig ay?', 'easy', 'Klaster', 'Easy'),
(26, 'Pamilya', 'Sanguniang Kabataan', 'Barangay', 'Siyudad', 'Ano ang tawag sa pinaka-maliit na sangay ng lokal na pamahalaan?', 'easy', 'Barangay', 'Easy'),
(27, '5', '6', '7', '8', 'How many digit are there in fifty -one million,four hundred seventy- six thousand,thirty-three?', 'easy', '6', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `team` varchar(63) NOT NULL,
  `level` int(11) NOT NULL,
  `mark` varchar(64) NOT NULL,
  `answer` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `pass`, `course`, `year`, `pic`, `id`, `team`, `level`, `mark`, `answer`) VALUES
('Julius', 'Colminas', 'juls', 'BSIT', '4th', 'irene2.png', 2256, '', 0, '', 'Pamilya'),
('Julius II', 'Colminas', 'juls2', 'BSTM', '4th', 'irene2.png', 2257, '', 0, '', '2'),
('Julius', 'a', 'aaaa', 'a', 'a', '', 2258, 'A', 0, '', 'True'),
('Julius', 'Colminas', 'juls', 'BSIT', '4th', '', 22542, 'A', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `winner`
--

CREATE TABLE `winner` (
  `id` int(11) NOT NULL,
  `fname` varchar(63) NOT NULL,
  `lname` varchar(63) NOT NULL,
  `rank` varchar(63) NOT NULL,
  `stud_id` varchar(63) NOT NULL,
  `pic` varchar(63) NOT NULL,
  `counting` varchar(63) NOT NULL,
  `lvl` varchar(63) NOT NULL,
  `ans_time` varchar(63) NOT NULL,
  `team` varchar(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `winner`
--

INSERT INTO `winner` (`id`, `fname`, `lname`, `rank`, `stud_id`, `pic`, `counting`, `lvl`, `ans_time`, `team`) VALUES
(1, 'Julius', 'Colminas', '0', '2256', 'irene2.png', '17', '', ' 12:21:00', ''),
(2, 'Julius II', 'Colminas', '0', '2257', 'irene2.png', '19', '', ' 01:19:36', ''),
(3, '', '', '0', '1', '', '16', '', ' 04:03:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `word`
--

CREATE TABLE `word` (
  `word_id` int(20) NOT NULL,
  `word` varchar(20) NOT NULL,
  `meaning` varchar(1000) NOT NULL,
  `type_verse` varchar(1000) NOT NULL,
  `date_search` datetime NOT NULL,
  `pic_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `final_questions`
--
ALTER TABLE `final_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loser`
--
ALTER TABLE `loser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_display`
--
ALTER TABLE `question_display`
  ADD PRIMARY KEY (`question_no`);

--
-- Indexes for table `table_for_questions`
--
ALTER TABLE `table_for_questions`
  ADD PRIMARY KEY (`question_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `winner`
--
ALTER TABLE `winner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `word`
--
ALTER TABLE `word`
  ADD PRIMARY KEY (`word_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `final_questions`
--
ALTER TABLE `final_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `question_display`
--
ALTER TABLE `question_display`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `table_for_questions`
--
ALTER TABLE `table_for_questions`
  MODIFY `question_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `winner`
--
ALTER TABLE `winner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `word`
--
ALTER TABLE `word`
  MODIFY `word_id` int(20) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
