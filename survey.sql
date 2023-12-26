-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306:3306
-- Generation Time: Jul 26, 2022 at 12:41 PM
-- Server version: 8.0.28
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_response`
--

CREATE TABLE `student_response` (
  `resp_id` int NOT NULL,
  `user_name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Q1_exprns` varchar(20) DEFAULT NULL,
  `Q2_chllng` varchar(20) DEFAULT NULL,
  `Q3_sprvson` varchar(20) DEFAULT NULL,
  `Q4_pacetime` varchar(20) DEFAULT NULL,
  `Q5_cmmuncte` varchar(20) DEFAULT NULL,
  `Q6_instrepnse` varchar(20) DEFAULT NULL,
  `Q7_instknwlg` varchar(20) DEFAULT NULL,
  `Q8_new` varchar(500) DEFAULT NULL,
  `Q9_knonbfr` varchar(500) DEFAULT NULL,
  `Q10_moreintrns` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student_response`
--

INSERT INTO `student_response` (`resp_id`, `user_name`, `user_email`, `Q1_exprns`, `Q2_chllng`, `Q3_sprvson`, `Q4_pacetime`, `Q5_cmmuncte`, `Q6_instrepnse`, `Q7_instknwlg`, `Q8_new`, `Q9_knonbfr`, `Q10_moreintrns`) VALUES
(8, 'pankaj', 'pankaj@gmail.com', 'excellent', 'not', 'excellent', 'sagree', 'sagree', 'sagree', 'excellent', 'Many things', 'Everything', 'sagree');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_response`
--

CREATE TABLE `teacher_response` (
  `Tresp_id` int NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `TQ1_intractv` varchar(20) DEFAULT NULL,
  `TQ2_exprns` varchar(20) DEFAULT NULL,
  `TQ3_bnft` varchar(20) DEFAULT NULL,
  `TQ4_resrce` varchar(20) DEFAULT NULL,
  `TQ5_infrmtn` varchar(20) DEFAULT NULL,
  `TQ6_repct` varchar(20) DEFAULT NULL,
  `TQ7_prfsndvlp` varchar(20) DEFAULT NULL,
  `TQ8_challng` varchar(20) DEFAULT NULL,
  `TQ9_motivte` varchar(500) DEFAULT NULL,
  `TQ10_satisfctn` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teacher_response`
--

INSERT INTO `teacher_response` (`Tresp_id`, `user_name`, `user_email`, `TQ1_intractv`, `TQ2_exprns`, `TQ3_bnft`, `TQ4_resrce`, `TQ5_infrmtn`, `TQ6_repct`, `TQ7_prfsndvlp`, `TQ8_challng`, `TQ9_motivte`, `TQ10_satisfctn`) VALUES
(1, 'purnima', 'purnimabind@gmail.com', 'excellent', 'excellent', 'slightly', 'frequently', 'agree', 'sagree', 'slightly', 'slightly', 'slightly', 'slightly'),
(2, 'Archanapuram', 'Archanapuram@gmail.com', 'excellent', 'vgood', 'slightly', 'frequently', 'agree', 'agree', 'slightly', 'slightly', 'slightly', 'slightly'),
(3, 'priyanka', 'priyank@gmail.com', 'poor', 'good', 'extremely', 'frequently', 'disagree', 'disagree', 'very', 'very', 'very', 'very');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `u_id` int NOT NULL,
  `u_name` varchar(80) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `university` varchar(60) NOT NULL,
  `profession` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`u_id`, `u_name`, `u_email`, `university`, `profession`) VALUES
(37, 'Archanapuram', 'Archanapuram@gmail.com', 'University of Delhi', 'Teacher'),
(41, 'pankaj', 'pankaj@gmail.com', 'University of Delhi', 'Student'),
(38, 'priyanka', 'priyank@gmail.com', 'University of Delhi', 'Teacher'),
(35, 'purnima', 'purnimabind@gmail.com', 'University of Delhi', 'Teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_response`
--
ALTER TABLE `student_response`
  ADD PRIMARY KEY (`resp_id`),
  ADD KEY `su_fk` (`user_name`,`user_email`);

--
-- Indexes for table `teacher_response`
--
ALTER TABLE `teacher_response`
  ADD PRIMARY KEY (`Tresp_id`),
  ADD KEY `FU_id` (`user_name`,`user_email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`u_name`,`u_email`),
  ADD UNIQUE KEY `username` (`u_name`),
  ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_response`
--
ALTER TABLE `student_response`
  MODIFY `resp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher_response`
--
ALTER TABLE `teacher_response`
  MODIFY `Tresp_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `u_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student_response`
--
ALTER TABLE `student_response`
  ADD CONSTRAINT `su_fk` FOREIGN KEY (`user_name`,`user_email`) REFERENCES `user_details` (`u_name`, `u_email`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `teacher_response`
--
ALTER TABLE `teacher_response`
  ADD CONSTRAINT `FU_id` FOREIGN KEY (`user_name`,`user_email`) REFERENCES `user_details` (`u_name`, `u_email`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
