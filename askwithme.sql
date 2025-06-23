-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2025 at 07:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `askwithme`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `question_id` int(10) NOT NULL,
  `user_Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `question_id`, `user_Email`) VALUES
(17, 'No Php is not  a programing language', 7, 'ramjangori6666@gmail.com'),
(19, 'Boil 1½ cups water, add Maggi noodles and cook for 2 minutes.\r\n\r\nMix in the tastemaker and cook for 1 more minute.\r\n\r\nServe hot (add veggies/egg/cheese if desired).', 10, 'ramjangori6666@gmail.com'),
(20, 'Syllabus & Plan – Cover NCERT (Physics, Chemistry, Biology) thoroughly. Divide time monthly/weekly.\r\n\r\nStudy Smart – Focus on high-weightage topics (e.g., Genetics, Organic Chem, Electrostatics). Use PYQs (2015-2024).\r\n\r\nDaily Routine – 8-10 hrs study: 3 hrs Biology, 2.5 hrs Chemistry, 2.5 hrs Physics, 2 hrs revision/mock tests.\r\n\r\nMock Tests – Take weekly full-length tests (analyze mistakes).\r\n\r\nWeak Areas – Revise weak topics every Sunday.\r\n\r\nHealth – Sleep 7 hrs, exercise, avoid burnout.', 11, 'ramjangori6666@gmail.com'),
(21, 'first make suitable time table 2 . than trying to study acording to time table if you relise your time table is better suitable than take second step first you needs to cover basic of subjects than trying to enjoy your subject and make  consistency in study ', 11, 'ramjangori6666@gmail.com'),
(22, ' tu video call kr iya maza koni aav mn kr to tu to dikhsi n hmmm hmmm mhar aari hai hello hmm nhalyo nhalyo hmm kapda kun dosi or thik hai tu bta k haan aab k shi dikhri h to kaal aari trya hi chip laagri hai \r\n', 12, 'ramjangori6666@gmail.com'),
(23, 'You can easily download this from Chorome Broweser ', 12, 'sof4@gmail.com'),
(24, 'its very easy', 13, 'ramjangori6666@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `ID` int(11) NOT NULL,
  `CATEGORY` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`ID`, `CATEGORY`) VALUES
(1, 'Phone'),
(2, 'Food'),
(3, 'traveling'),
(4, 'computer Science'),
(5, 'General'),
(6, 'Coding'),
(7, NULL),
(8, 'Web Designing'),
(9, NULL),
(10, 'Electronic'),
(11, NULL),
(12, 'mathmatics'),
(13, NULL),
(14, 'DSA'),
(15, NULL),
(16, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category_id` int(10) NOT NULL,
  `User_Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `description`, `category_id`, `User_Email`) VALUES
(14, 'How to make Tea', 'steps ', 2, 'Nadeem@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `password`, `address`) VALUES
(9, 'Admin', 'Ramjangori7777@gmail.com', 'Admin', 'ward 10 , Golsar , Ratangarh'),
(10, 'Ramjan', 'ramjangori6666@gmail.com', 'gori', 'sardarshahar'),
(11, 'Idrish', '', 'khan', ''),
(12, 'Ramjan', 'Ramjangori7777@gmail.com', 'gori', 'golsar ratangarh'),
(13, 'Ramjan', 'Ramjangori7777@gmail.com', 'gori', 'golsar ratangarh'),
(14, 'Khalid gori', 'ramjangori6666@gmail.com', 'sanam', 'golsar ratangarh'),
(15, 'Ramjan', 'ramjangori6666@gmail.com', 'gori', 'golsar ratangarh'),
(16, 'Ramjan', 'ramjangori6666@gmail.com', 'gori', 'golsar ratangarh'),
(17, 'Ramjan', 'ramjangori6666@gmail.com', 'sikar', 'golsar ratangarh'),
(18, 'test', 'test@gmail.com', 'dbd', 'jfjfj'),
(19, 'test', 'test@gmail.com', 'dbd', 'jfjfj'),
(20, 'test', 'test@gmail.com', 'dbd', 'jfjfj'),
(21, 'test', 'test@gmail.com', 'dbd', 'jfjfj'),
(22, 'idrush khan 43', 'id555@gmail.com', 'golsar', 'hjvhjdghjh'),
(23, 'Ramjan', '', 'gori', ''),
(24, 'Sofia', 'sof4@gmail.com', 'soffi', 'kanwari'),
(25, 'Ramjan', 'Nadeem@gmail.com', 'gori', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
