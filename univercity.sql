-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2016 at 09:18 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `univercity`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `sn` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`sn`, `degree`, `branch`) VALUES
(1, 'mca', 'information technology'),
(3, 'b tech', 'electrical'),
(4, 'b tech', 'civil'),
(5, 'b tech', 'electronics'),
(7, 'mba', 'mechanical'),
(8, 'mba', 'ciremic'),
(9, 'b tech', 'computer science'),
(10, 'mca', 'computer science'),
(11, 'select degree', 'ciremic'),
(12, 'mca', 'ciremic');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `sn` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`sn`, `name`, `address`, `contact`) VALUES
(1, 'engineer college bikaner', 'rico area bikaner', '12345'),
(2, 'college of technology', 'bikaner rajasthan', '567890'),
(3, 'manda', 'jaipur road bikaner', '1234543678'),
(4, 'mbm', 'jodhpur', '765437890');

-- --------------------------------------------------------

--
-- Table structure for table `degree_section`
--

CREATE TABLE `degree_section` (
  `sn` int(11) NOT NULL,
  `degree` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `no_of_sem` int(11) NOT NULL,
  `sem_duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_section`
--

INSERT INTO `degree_section` (`sn`, `degree`, `year`, `sem`, `no_of_sem`, `sem_duration`) VALUES
(1, 'b tech', 4, 'yes', 8, '6th month'),
(3, 'bsc', 3, 'no', 0, ''),
(4, 'mca', 2, 'yes', 4, '6th month'),
(5, 'mba', 2, 'yes', 4, '6th month');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `sn` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`sn`, `name`, `email`, `pass`, `contact`) VALUES
(1, 'degree', 'kheta', '111', '8890555021'),
(2, 'exam', 'bhagi', '222', '7610841521'),
(3, 'account', 'rohit', '333', '7792883949'),
(4, 'student', 'mahesh', '444', '7733002094'),
(5, 'problem', 'vikram', '555', '9782233401');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `sn` int(11) NOT NULL,
  `controller` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `parent` varchar(100) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `joining_date` date NOT NULL,
  `department` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`sn`, `controller`, `email`, `password`, `parent`, `contact`, `joining_date`, `department`, `flag`) VALUES
(1, 'kheta', 'k@s.c', '111', 'parent', '8890555021', '0000-00-00', 'degree', 0),
(2, 'bhagi', 'b@p.c', '222', 'parent', '7610841521', '0000-00-00', 'exam', 0),
(3, 'rohit', 'r@s.c', '333', 'parent', '7792883949', '0000-00-00', 'account', 0),
(4, 'mahesh', 'm@d.c', '444', 'parent', '7733002094', '0000-00-00', 'student', 0),
(5, 'vikram', 'v@s.c', '555', 'parent', '9782233401', '0000-00-00', 'problem', 0),
(6, 'pcm', 'p@m.c', '0', 'child', '9782301040', '0000-00-00', 'employee', 0),
(7, 'manish', 'm@d.c', '123', 'child', '7339985015', '0000-00-00', 'degree', 0),
(8, 'puneet', 'p@c.c', '0', 'child', '1234567890', '0000-00-00', 'employee', 0),
(9, 'rijvan', 'r@k.c', '0', 'child', '9876543210', '0000-00-00', 'problem', 0),
(10, 'girdhar', 'g@s.c', '0', 'child', '7742372293', '0000-00-00', 'employee', 0),
(11, 'op', 'o@s.c', '0', 'child', '12345', '2016-08-11', 'employee', 0),
(12, 'Narendra Choudhary', 'n@g.c', '0', 'child', '9680812679', '2016-08-25', 'account', 0),
(13, 'rajveer', 'r@s.c', '0', 'child', '9721536677', '2016-08-11', 'employee', 0),
(14, 'neha', 'n@j.c', '0', 'child', '7568698883', '2015-07-11', 'employee', 0),
(15, 'pandu', 'p@s.c', '0', 'child', '9782233401', '2016-08-06', 'employee', 0),
(16, 'gourav', 'g@l.c', '0', 'child', '78218392109', '2016-08-06', 'employee', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `sn` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`sn`, `type`) VALUES
(1, 'teja'),
(3, 'narendra'),
(5, 'vikram'),
(6, 'bhagi'),
(7, 'a1'),
(8, 'a2'),
(9, 'a3'),
(10, 'a4'),
(11, 'a5'),
(12, 'a6'),
(13, 'a7'),
(15, 'a8'),
(16, 'a9'),
(17, 'a10'),
(18, 'a11'),
(19, 'a12'),
(20, 'a13'),
(21, 'a14'),
(22, 'rohit');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('teja@s.c', '222'),
('bhagi@p.c', '123'),
('mangla@gmail.com', '123'),
('sunil@g.c', '111');

-- --------------------------------------------------------

--
-- Table structure for table `nbresult`
--

CREATE TABLE `nbresult` (
  `sn` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `sn` int(11) NOT NULL,
  `news` varchar(100) NOT NULL,
  `ntype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`sn`, `news`, `ntype`) VALUES
(1, 'admission form available 2017', 'notification'),
(2, 'next week programming workshop', 'notification'),
(3, 'format of new admission fill detail', 'notification'),
(4, 'final year student farewell 06.08.16', 'event'),
(5, 'culture programming week started', 'event'),
(6, 'rtu vc coming next week', 'event'),
(7, 'admit card availabe', 'student'),
(8, 'msc final yr merit list 2017', 'student'),
(9, 'new admission open', 'student'),
(10, 'b tech 6th sem fee last date yesterday', 'student'),
(11, 'admit card sent colloeges site', 'college'),
(12, 'today 2nd sem b tech result decelair', 'college');

-- --------------------------------------------------------

--
-- Table structure for table `nresult`
--

CREATE TABLE `nresult` (
  `sn` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nresult`
--

INSERT INTO `nresult` (`sn`, `degree`, `year`, `msg`) VALUES
(1, 'bsc', 1, 'bsc 1');

-- --------------------------------------------------------

--
-- Table structure for table `nsresult`
--

CREATE TABLE `nsresult` (
  `sn` int(11) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nsresult`
--

INSERT INTO `nsresult` (`sn`, `degree`, `branch`, `year`, `sem`, `msg`) VALUES
(1, 'b tech', 'electrical', 1, 1, 'b tech 1 1'),
(2, 'mca', 'computer science', 1, 1, 'mca 1 1');

-- --------------------------------------------------------

--
-- Table structure for table `placement`
--

CREATE TABLE `placement` (
  `company` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `placement`
--

INSERT INTO `placement` (`company`, `package`) VALUES
('tcs', '8.3 lack'),
('indian navy', '8 lack'),
('sopra satrea', '9 lack'),
('', ''),
('josh tech', '14 lack'),
('info tech', '21 lack'),
('nagarro', '6.3 lack'),
('gen. tech. ltd', '11.34 lack');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `sn` int(11) NOT NULL,
  `froms` varchar(255) NOT NULL,
  `tos` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`sn`, `froms`, `tos`, `msg`, `flag`) VALUES
(1, 'teja@s.c', 'university', 'sir mera online result ni aaya', 0),
(2, 'teja@s.c', 'university', 'que bta rha h', 1),
(3, 'university', 'teja@s.c', 'roll no send kre', 0),
(4, 'university', 'teja@s.c', 'and full detai mail kro', 0),
(5, 'teja@s.c', 'university', 'email id dena sir g', 1),
(6, 'university', 'teja@s.c', 'mu123@gmail.com', 0),
(7, 'bhagi@p.c', 'university', 'sir jsa', 0),
(8, 'university', 'bhagi@p.c', 'what ...', 0),
(9, 'bhagi@p.c', 'university', 'knj,cnzkxncsd', 1),
(10, 'university', 'bhagi@p.c', 'zjxjbcnzxb', 0),
(11, 'mangla@gmail.com', 'university', 'hfjsdjfzlkmdlxk', 0),
(12, 'sunil@g.c', 'university', 'what.....................', 0);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sn` int(11) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `sub1` int(11) NOT NULL,
  `sub2` int(11) NOT NULL,
  `sub3` int(11) NOT NULL,
  `sub4` int(11) NOT NULL,
  `sub5` int(11) NOT NULL,
  `sub6` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sn`, `rollno`, `name`, `fname`, `degree`, `branch`, `year`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `total`, `sem`, `flag`) VALUES
(1, '101', 'raghu', 'harish g', 'b tech', 'electrical', 1, 54, 56, 6, 56, 56, 6, 566, 1, 0),
(2, '102', 'devendra', 'narsinga ram', 'bsc', 'select branch', 1, 45, 45, 54, 545, 45, 545, 5545, 1, 0),
(3, '103', 'ganesh', 'gaurav g', 'bsc', 'no', 1, 54, 5, 545, 5, 55, 5, 455, 0, 0),
(4, '104', 'hemanshu', 'meghraj', 'mca', 'computer science', 1, 54, 545, 545, 5, 45, 5, 5455, 1, 0),
(5, '105', 'kalpna', 'meghraj', 'mca', 'computer science', 1, 34, 4, 34, 44, 44, 6, 567, 1, 0),
(6, '106', 'abhisek', 'girdhar', 'mba', 'mechanical', 1, 56, 66, 565, 66, 6556, 566, 6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sport`
--

CREATE TABLE `sport` (
  `sn` int(11) NOT NULL,
  `sport_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sport`
--

INSERT INTO `sport` (`sn`, `sport_news`) VALUES
(1, 'shooting men and women date change'),
(2, 'Anti doping related order'),
(3, 'member of sport bord'),
(4, 'date change for hand ball turnament notice'),
(5, 'member of sport board');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sn` int(11) NOT NULL,
  `rollno` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `degree` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `result` int(11) NOT NULL,
  `yr` int(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `flag` int(11) NOT NULL,
  `fees` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sn`, `rollno`, `name`, `fname`, `mname`, `dob`, `degree`, `branch`, `contact`, `college`, `result`, `yr`, `sem`, `flag`, `fees`) VALUES
(1, '101', 'raghu', 'harish g', 'geeta', '0000-00-00', 'b tech', 'electrical', '45354656465', 'engineer college bikaner', 566, 1, 1, 0, 'no'),
(2, '102', 'devendra', 'narsinga ram', 'mamta', '2016-08-05', 'bsc', 'select branch', '123231231', 'engineer college bikaner', 5545, 1, 1, 0, 'no'),
(3, '103', 'ganesh', 'gaurav g', 'anita', '2016-08-20', 'bsc', 'no', '22', 'engineer college bikaner', 455, 1, 0, 0, 'no'),
(4, '104', 'hemanshu', 'meghraj', 'priyanka', '2016-05-05', 'mca', 'computer science', '1221323213', 'manda', 5455, 1, 1, 0, 'no'),
(5, '105', 'kalpna', 'meghraj', 'priyanka', '2013-07-19', 'mca', 'computer science', '42341234214', 'mbm', 567, 1, 1, 0, 'no'),
(6, '106', 'abhisek', 'girdhar', 'padmi', '2016-09-01', 'mba', 'mechanical', '23q4234234', 'college of technology', 6, 1, 1, 0, 'yes'),
(7, '107', 'deva', 'sunil', 'radha', '2016-01-01', 'b tech', 'civil', '123213', 'manda', 0, 0, 0, 0, 'no'),
(8, '108', 'jitendra', 'vinod kumar', 'manju devi', '2016-09-02', 'b tech', 'computer science', '234234324', 'engineer college bikaner', 0, 0, 0, 0, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `st_placement`
--

CREATE TABLE `st_placement` (
  `sn` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_placement`
--

INSERT INTO `st_placement` (`sn`, `name`, `fname`, `company`, `package`) VALUES
(1, 'teja ram', 'hanuman ram ji', 'google', '99000000'),
(2, 'kheta', 'dhnna ram g', 'tcs', '240000000'),
(3, 'bhanwar', 'ganesh g', 'honda', '7800000');

-- --------------------------------------------------------

--
-- Table structure for table `vc`
--

CREATE TABLE `vc` (
  `sn` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vc`
--

INSERT INTO `vc` (`sn`, `email`, `pass`, `name`) VALUES
(1, 'teja', '222', 'vc'),
(2, 'abhi', '123', 'news');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
