-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 03:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `competitors`
--

CREATE TABLE `competitors` (
  `CO_ID` int(11) NOT NULL,
  `CO_NAME` text NOT NULL,
  `CO_CONTACT` int(11) NOT NULL,
  `CO_EMAIL` varchar(255) NOT NULL,
  `CO_NUMBER` int(11) NOT NULL,
  `CO_TEAM_ID` int(11) NOT NULL,
  `CO_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competitors`
--

INSERT INTO `competitors` (`CO_ID`, `CO_NAME`, `CO_CONTACT`, `CO_EMAIL`, `CO_NUMBER`, `CO_TEAM_ID`, `CO_IMAGE`) VALUES
(1, 'Muditha Mewan Senarathne', 781528147, 'mudithamewan12@gmail.com', 1, 1, '4.jpg'),
(2, 'Ameesha Minol', 781528147, 'ameesha@gmail.com', 2, 1, '6.jpg'),
(3, 'Sanajaya Dayarathne', 781528147, 'dayan@gmail.com', 3, 2, '8.jpg'),
(4, 'Amal Weerasinghe', 781547896, 'amal@gmail.com', 5, 2, '10.jpg'),
(5, 'Sujith Serasinghe', 754578956, 'sujith@gmail.com', 8, 3, '3.jpg'),
(6, 'Kumara Welgama', 747892356, 'kumara@gmail.com', 10, 3, '11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `performance_video`
--

CREATE TABLE `performance_video` (
  `P_ID` int(11) NOT NULL,
  `P_NAME` varchar(255) NOT NULL,
  `P_DESCRIPTION` text NOT NULL,
  `P_COMPETITOR_ID` int(11) NOT NULL,
  `P_VIDEO_EMBERED_LINK` varchar(500) NOT NULL,
  `NOW_LIVE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `performance_video`
--

INSERT INTO `performance_video` (`P_ID`, `P_NAME`, `P_DESCRIPTION`, `P_COMPETITOR_ID`, `P_VIDEO_EMBERED_LINK`, `NOW_LIVE`) VALUES
(1, 'First', '', 1, 'https://www.youtube.com/embed/gWUAg-iJqKo', 1),
(2, 'First', '', 2, 'https://www.youtube.com/embed/fNicaUhVVrI', 0),
(3, 'First', '', 3, 'https://www.youtube.com/embed/gWUAg-iJqKo', 0),
(4, 'First', '', 4, 'https://www.youtube.com/embed/A-Hpm4vJL0w', 0),
(5, 'First', '', 5, 'https://www.youtube.com/embed/zv1_KuAq1TY', 0),
(6, 'First', '', 6, 'https://www.youtube.com/embed/yahJBd8zyfs', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `R_ID` int(11) NOT NULL,
  `R_P_ID` int(11) NOT NULL,
  `R_NAME` text NOT NULL,
  `R_CONTACT` int(10) NOT NULL,
  `R_COMMENT` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `T_ID` int(11) NOT NULL,
  `JUDGE_NAME` text NOT NULL,
  `JUDGE_IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`T_ID`, `JUDGE_NAME`, `JUDGE_IMAGE`) VALUES
(1, 'Judge 01', '1.jpg'),
(2, 'Judge 02', '2.jpg'),
(3, 'Judge 03', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `U_ID` int(11) NOT NULL,
  `U_NAME` text NOT NULL,
  `U_EMAIL` varchar(255) NOT NULL,
  `U_CONTACT` int(11) NOT NULL,
  `U_PASSWORD` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`U_ID`, `U_NAME`, `U_EMAIL`, `U_CONTACT`, `U_PASSWORD`) VALUES
(4, 'Thamal', 'thamalkarunarathna7@gmail.com', 704370958, '8288639b4c3c947ef70823d1e5c05b33898f2e04'),
(5, 'Shashin', 'shashin7@gmail.om', 704370958, '0d467c11c1f788a43266782aac388b66b0f22551');

-- --------------------------------------------------------

--
-- Table structure for table `user_favorites`
--

CREATE TABLE `user_favorites` (
  `UF_ID` int(11) NOT NULL,
  `UF_USER_ID` int(11) NOT NULL,
  `UF_PERFORMANCE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_favorites`
--

INSERT INTO `user_favorites` (`UF_ID`, `UF_USER_ID`, `UF_PERFORMANCE_ID`) VALUES
(1, 5, 6),
(2, 4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `V_ID` int(11) NOT NULL,
  `V_USER_ID` int(11) NOT NULL,
  `V_P_ID` int(11) NOT NULL,
  `V_DATE` date NOT NULL,
  `V_TIME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `votes`
--

INSERT INTO `votes` (`V_ID`, `V_USER_ID`, `V_P_ID`, `V_DATE`, `V_TIME`) VALUES
(8, 5, 1, '2022-05-22', '05:24:41am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competitors`
--
ALTER TABLE `competitors`
  ADD PRIMARY KEY (`CO_ID`);

--
-- Indexes for table `performance_video`
--
ALTER TABLE `performance_video`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`R_ID`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`U_ID`);

--
-- Indexes for table `user_favorites`
--
ALTER TABLE `user_favorites`
  ADD PRIMARY KEY (`UF_ID`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`V_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competitors`
--
ALTER TABLE `competitors`
  MODIFY `CO_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `performance_video`
--
ALTER TABLE `performance_video`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `R_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_favorites`
--
ALTER TABLE `user_favorites`
  MODIFY `UF_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
