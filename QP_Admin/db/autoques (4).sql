-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2019 at 07:14 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autoques`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(96300, 'Department of Business Studies'),
(123456, 'department of chemistry'),
(123, 'Department of Commerce'),
(710, 'Department of Computer Science'),
(789, 'Department of Economics'),
(456, 'Department of English'),
(12369, 'Department of Geology'),
(14789, 'department of physics'),
(123460, 'department of physics+bvoc'),
(123459, 'department of physics2'),
(7410, 'Department of Statistics'),
(1, 'department of test');

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE `log_admin` (
  `log_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(25) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_admin`
--

INSERT INTO `log_admin` (`log_id`, `username`, `password`, `role`, `status`) VALUES
(1, 'vishnu@gmail.com', '123456', 'admin', 0),
(2, 'subin@gmail.com', '12369', 'admin', 0),
(17, 'vimal@gmail.com', 'Vimal0123', 'examiner', 1),
(29, 'abin@gmail.com', 'Abin01234', 'examiner', 0),
(31, 'ginu@gmail.com', 'Ginu01234', 'teacher', 0),
(37, 'ginu@gmail.com', 'Mol0123456', 'teacher', 0),
(39, 'abin@gmail.com', 'Abin 0123', 'teacher', 0);

-- --------------------------------------------------------

--
-- Table structure for table `log_time`
--

CREATE TABLE `log_time` (
  `loguser_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_time`
--

INSERT INTO `log_time` (`loguser_id`, `time`) VALUES
(22, '2019-09-12 01:05:08'),
(22, '2019-09-14 03:21:53'),
(22, '2019-09-17 01:44:47'),
(22, '2019-09-17 01:47:17'),
(22, '2019-09-22 03:46:48'),
(29, '2019-10-01 02:08:15'),
(17, '2019-10-01 23:06:24'),
(29, '2019-10-03 03:51:50'),
(29, '2019-10-16 01:13:58'),
(29, '2019-12-12 01:36:31'),
(29, '2019-12-12 02:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `pdf_files`
--

CREATE TABLE `pdf_files` (
  `u_id` int(11) NOT NULL,
  `examination_name` varchar(100) NOT NULL,
  `subject_name` int(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `examination_date` date NOT NULL,
  `uploaded_date` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf_files`
--

INSERT INTO `pdf_files` (`u_id`, `examination_name`, `subject_name`, `course_name`, `examination_date`, `uploaded_date`, `file`) VALUES
(9, 'Semester Exam', 710, '31', '2019-10-25', '2019-10-24', 'uploads/1570086830.pdf'),
(10, 'vbbb', 710, '31', '2019-10-10', '2019-12-13', 'uploads/1576206905.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `q_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `question_complex` varchar(10) NOT NULL,
  `question_type` int(11) NOT NULL,
  `module` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `dept` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`q_id`, `sub_id`, `question`, `question_complex`, `question_type`, `module`, `teacher_id`, `dept`) VALUES
(1, 23, 'What  is DBMS', 'easy', 2, 0, 21, 'dept of com'),
(2, 23, 'What is DBMS', 'easy', 2, 0, 21, '0'),
(3, 23, 'What  is DBMS', 'easy', 2, 0, 21, '0'),
(4, 31, 'What do you mean by knowledge repository?', 'easy', 2, 1, 21, '0'),
(5, 31, 'Give the names of 4 search engines?', 'easy', 2, 1, 21, '0'),
(6, 31, 'What is the use of \"I am feeling Lucky\" button in search engine?', 'medium', 2, 1, 21, '0'),
(7, 31, 'What is Cyber Presence?', 'hard', 2, 1, 21, '0'),
(8, 31, 'Explain the multidisciplinary nature of Environmental studies?', 'hard', 15, 1, 21, '0'),
(9, 31, 'Why you can say that \"Internet is widely used, not wisely used\"?', 'medium', 5, 1, 21, '0'),
(10, 31, 'What are the advantages of using Technology in Education?', 'hard', 15, 2, 21, '0'),
(11, 31, 'Explain the features of different Learning management systems?', 'medium', 15, 2, 21, '0'),
(12, 31, 'Explain the features of INFLIBNET?', 'easy', 15, 2, 21, '0'),
(13, 31, 'what you mean by sustainable utilization of resources.', 'medium', 5, 1, 21, '0'),
(14, 31, 'Explain the importance of public awareness in Environmental  studies', 'easy', 2, 1, 21, '0'),
(15, 31, 'Explain about some institutions in Environment.', 'easy', 5, 1, 21, '0'),
(16, 31, 'Explain the activities of some well-known Environmental thinkers', 'medium', 5, 1, 21, '0'),
(17, 31, 'Explain the multidisciplinary nature of Environmental studies.', 'medium', 15, 4, 21, '0'),
(18, 31, 'Define the term information age.', 'easy', 2, 3, 21, '0'),
(19, 31, 'What  is digital divide ?', 'easy', 2, 3, 21, '0'),
(20, 31, 'Explain free software movement.', 'easy', 2, 3, 21, '0'),
(21, 31, 'What do you mean by software piracy?', 'hard', 2, 3, 21, '0'),
(22, 31, 'What is Cyber Ethics?', 'medium', 2, 3, 21, '0'),
(23, 31, 'Define Cyber Crime.', 'easy', 2, 3, 21, '0'),
(24, 31, 'What is Cyber  thread?', 'easy', 2, 3, 21, '0'),
(25, 31, 'What you mean by Cyber  Addiction?', 'medium', 2, 3, 21, '0'),
(26, 31, 'What is information overload?', 'hard', 2, 5, 21, '0'),
(27, 31, 'What are the advantages of  IT  in the  society ?', 'easy', 5, 3, 21, '0'),
(28, 31, 'Explain the disadvantages of IT in the society.', 'medium', 5, 3, 21, '0'),
(29, 31, '\" Education technology can improve the traditional way of teaching, but cannot replace the human tou', 'hard', 2, 3, 21, '0'),
(30, 31, 'Explain the activities of free Software movement .', 'easy', 5, 3, 21, '0'),
(31, 31, 'Explain about common types of cyber threats', 'easy', 5, 3, 21, '0'),
(32, 31, 'Explain the element of cyber Security.', 'easy', 5, 3, 21, '0'),
(33, 31, 'What are the advantages of  cyber laws.', 'easy', 5, 3, 21, '0'),
(34, 31, 'What are the causes of information over load.', 'easy', 5, 3, 21, '0'),
(35, 31, 'Write some guidelines for the proper usage of mobile phones.', 'easy', 5, 3, 21, '0'),
(36, 31, 'Explain different Health issues faced by peoples by the over use of computers and smart phones', 'easy', 15, 3, 21, '0'),
(37, 31, 'Explain the impact of technology on language and culture', 'easy', 15, 3, 21, '0'),
(38, 31, 'What you mean by E-waste?', 'easy', 2, 4, 21, '0'),
(40, 31, 'Define green computing', 'easy', 2, 4, 21, '0'),
(41, 31, 'What do you mean by energy star program', 'easy', 2, 4, 21, '0'),
(42, 31, 'Explain the problems caused by E-waste.', 'easy', 5, 1, 21, '0'),
(43, 31, 'Explain the problems caused by E-waste.', 'easy', 5, 4, 21, '0'),
(44, 31, 'How the improper disposal of E-waste affect the soil,air and water.', 'easy', 5, 4, 21, '0'),
(45, 31, 'What are the different ways to dispose E-waste.', 'easy', 5, 4, 21, '0'),
(46, 31, 'What are the approaches employed for green computing. ', 'easy', 5, 4, 21, '0'),
(47, 31, 'What are the initative taken in india for green computing?', 'easy', 5, 4, 21, '0'),
(48, 31, 'Explain how india manages E-waste', 'easy', 15, 4, 21, '0'),
(49, 31, 'what is human right?', 'easy', 2, 5, 21, '0'),
(50, 31, 'What are different generations of human right?', 'easy', 2, 5, 21, '0'),
(51, 31, 'Name two international HR documents.', 'easy', 2, 5, 21, '0'),
(52, 31, 'Expand UDHR.', 'easy', 2, 5, 21, '0'),
(53, 31, 'Expand ICCPR.', 'easy', 2, 5, 21, '0'),
(54, 31, 'Expand ICESCR.', 'easy', 2, 5, 21, '0'),
(55, 31, 'Write the role of UN secretariat', 'easy', 2, 5, 21, '0'),
(57, 31, 'Explain about the fundamental right and indian constitution.', 'easy', 15, 5, 21, '0'),
(58, 31, 'Explain the goals of humman rights education.', 'easy', 15, 5, 21, '0'),
(59, 31, 'Explain different generations of human right.', 'easy', 15, 5, 21, '0'),
(60, 31, 'Who need Human right education', 'easy', 5, 5, 21, '0'),
(61, 31, 'Explain about ICCPR.', 'easy', 5, 5, 21, '0'),
(62, 31, 'Describe about the principal organs of UN.', 'easy', 5, 5, 21, '0'),
(63, 31, 'Explain about the rights of prisoners.', 'easy', 5, 5, 21, '0'),
(64, 31, 'Explain the functions of state HR commission.', 'easy', 5, 5, 21, '0'),
(65, 24, 'Application of c', 'easy', 5, 1, 21, 'Department of Computer Science'),
(66, 32, 'Why is Java known as platfome nutral indepentatnt', 'easy', 2, 1, 21, 'Department of Computer Science'),
(67, 32, 'Event handling mechanisms in java', 'medium', 15, 4, 21, 'Department of Computer Science'),
(68, 32, 'What is Applet?', 'hard', 2, 5, 21, 'Department of Computer Science'),
(69, 32, 'Desition makers in JAva', 'easy', 5, 2, 21, 'Department of Computer Science'),
(70, 30, 'What is Network', 'easy', 2, 1, 39, '710');

-- --------------------------------------------------------

--
-- Table structure for table `reg_examiner`
--

CREATE TABLE `reg_examiner` (
  `examiner_id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `college_name` varchar(75) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(75) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_examiner`
--

INSERT INTO `reg_examiner` (`examiner_id`, `name`, `college_name`, `phno`, `email`, `password`, `status`) VALUES
(17, 'vimal', 'Mar Sleeva College of Arts  & Science', '8281787584', 'vimal@gmail.com', 'Vimal0123', 1),
(29, 'Abin Sebastian', 'Mar Sleeva College of Arts  & Science', '9744385525', 'abin@gmail.com', 'Abin01234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_teacher`
--

CREATE TABLE `reg_teacher` (
  `reg_id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `cname` varchar(75) NOT NULL,
  `dept` varchar(75) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `re_password` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_teacher`
--

INSERT INTO `reg_teacher` (`reg_id`, `fname`, `cname`, `dept`, `phno`, `email`, `password`, `re_password`, `status`) VALUES
(31, 'Ginu Vakachan', 'mar sleeva college of art and science', '710', '9645590710', 'ginu@gmail.com', 'Ginu01234', 'Ginu01234', 0),
(37, 'Ginu Vakachan', 'mar sleeva college of art and science', '96300', '9645590710', 'ginu@gmail.com', 'Mol0123456', 'Mol0123456', 0),
(39, 'Abin Sebastian', 'mar sleeva college of art and science', '710', '9544967597', 'abin@gmail.com', 'Abin 0123', 'Abin 01234', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `subject_name` varchar(35) NOT NULL,
  `course_code` varchar(12) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `dept_id`, `subject_name`, `course_code`, `semester`) VALUES
(22, 123, 'Accounting', '', 1),
(23, 710, 'Database Management System', '', 2),
(24, 710, 'Programming in C', '', 1),
(25, 710, 'Programming in C++', '', 2),
(28, 456, 'Fine Tunes Your English', '', 1),
(30, 710, 'Computer Networks', '', 5),
(31, 710, 'IT and Envionment', 'CS05CRT07', 5),
(32, 710, 'Programming with Java', 'CS05CRT05', 5),
(33, 12369, 'Basics of Earth', 'BSC01CRT01', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`),
  ADD UNIQUE KEY `dept_name` (`dept_name`);

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `reg_examiner`
--
ALTER TABLE `reg_examiner`
  ADD PRIMARY KEY (`examiner_id`);

--
-- Indexes for table `reg_teacher`
--
ALTER TABLE `reg_teacher`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123461;

--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`sub_id`) REFERENCES `subject` (`sub_id`) ON DELETE CASCADE;

--
-- Constraints for table `reg_examiner`
--
ALTER TABLE `reg_examiner`
  ADD CONSTRAINT `reg_examiner_ibfk_1` FOREIGN KEY (`examiner_id`) REFERENCES `log_admin` (`log_id`) ON DELETE CASCADE;

--
-- Constraints for table `reg_teacher`
--
ALTER TABLE `reg_teacher`
  ADD CONSTRAINT `reg_teacher_ibfk_1` FOREIGN KEY (`reg_id`) REFERENCES `log_admin` (`log_id`) ON DELETE CASCADE;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `subject_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
