-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2026 at 01:54 AM
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
-- Database: `scoringboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_record`
--

CREATE TABLE `game_record` (
  `id` int(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_img` varchar(50) NOT NULL,
  `team_set1` int(11) DEFAULT NULL,
  `team_set2` int(11) DEFAULT NULL,
  `team_set3` int(11) DEFAULT NULL,
  `team_set4` int(11) DEFAULT NULL,
  `team_set5` int(11) DEFAULT NULL,
  `team_total` varchar(50) NOT NULL,
  `team_set` varchar(50) NOT NULL,
  `team_pointAwarded` varchar(50) NOT NULL,
  `team_pointRatio` varchar(50) NOT NULL,
  `team_status` varchar(50) NOT NULL,
  `game` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_record`
--

INSERT INTO `game_record` (`id`, `team_name`, `team_img`, `team_set1`, `team_set2`, `team_set3`, `team_set4`, `team_set5`, `team_total`, `team_set`, `team_pointAwarded`, `team_pointRatio`, `team_status`, `game`) VALUES
(1, 'WOLVES', 'images/team_A_1773446296.png', 15, 15, 0, 0, 0, '30', '2', '3', '2', 'Winner', 1),
(2, 'TIGERS', 'images/team_B_1773446306.png', 9, 6, 0, 0, 0, '15', '0', '0', '0.5', 'Loser', 1),
(3, 'HAWKS', 'images/team_A_1773449722.png', 18, 9, 13, 0, 0, '40', '1', '1', '0.87', 'Loser', 2),
(4, 'SHARKS', 'images/team_B_1773449732.png', 16, 15, 15, 0, 0, '46', '2', '2', '1.15', 'Winner', 2),
(5, 'WILDCATS', 'images/team_A_1773454038.png', 9, 16, 12, 0, 0, '37', '1', '1', '0.841', 'Loser', 3),
(6, 'VIPERS', 'images/team_B_1773454047.png', 15, 14, 15, 0, 0, '44', '2', '2', '1.189', 'Winner', 3),
(7, 'WOLVES', 'images/team_A_1773459072.png', 13, 15, 15, 0, 0, '43', '2', '2', '1.344', 'Winner', 4),
(8, 'HAWKS', 'images/team_B_1773459079.png', 15, 4, 13, 0, 0, '32', '1', '1', '0.744', 'Loser', 4),
(9, 'VIPERS', 'images/team_A_1773461769.png', 15, 10, 15, 0, 0, '40', '2', '2', '1.053', 'Winner', 5),
(10, 'SHARKS', 'images/team_B_1773461782.png', 13, 15, 10, 0, 0, '38', '1', '1', '0.95', 'Loser', 5),
(11, 'SHARKS', 'images/team_A_1773464574.png', 5, 15, 15, 0, 0, '35', '2', '2', '0.854', 'Winner', 6),
(12, 'HAWKS', 'images/team_B_1773464581.png', 15, 13, 13, 0, 0, '41', '1', '1', '1.171', 'Loser', 6),
(13, 'WOLVES', 'images/team_A_1773467635.png', 16, 25, 22, 0, 0, '63', '1', '1', '1.016', 'Loser', 7),
(14, 'VIPERS', 'images/team_B_1773467642.png', 25, 12, 25, 0, 0, '62', '2', '2', '0.984', 'Winner', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ingame_record`
--

CREATE TABLE `ingame_record` (
  `id` int(11) NOT NULL,
  `teamA_name` varchar(50) DEFAULT NULL,
  `teamA_img` varchar(50) DEFAULT NULL,
  `teamA_score` int(11) DEFAULT NULL,
  `teamA_set` int(11) DEFAULT NULL,
  `teamA_timeout1` int(11) DEFAULT NULL,
  `teamA_timeout2` int(11) DEFAULT NULL,
  `teamA_serving` int(11) DEFAULT NULL,
  `teamA_set1` varchar(50) DEFAULT NULL,
  `teamA_set2` varchar(50) DEFAULT NULL,
  `teamA_set3` varchar(50) DEFAULT NULL,
  `teamA_set4` varchar(50) DEFAULT NULL,
  `teamA_set5` varchar(50) DEFAULT NULL,
  `teamB_name` varchar(50) DEFAULT NULL,
  `teamB_img` varchar(50) DEFAULT NULL,
  `teamB_score` int(11) DEFAULT NULL,
  `teamB_set` int(11) DEFAULT NULL,
  `teamB_timeout1` int(11) DEFAULT NULL,
  `teamB_timeout2` int(11) DEFAULT NULL,
  `teamB_serving` int(11) DEFAULT NULL,
  `teamB_set1` varchar(50) DEFAULT NULL,
  `teamB_set2` varchar(50) DEFAULT NULL,
  `teamB_set3` varchar(50) DEFAULT NULL,
  `teamB_set4` varchar(50) DEFAULT NULL,
  `teamB_set5` varchar(50) DEFAULT NULL,
  `display1` int(11) DEFAULT NULL,
  `display2` int(11) DEFAULT NULL,
  `display3` int(11) DEFAULT NULL,
  `display4` int(11) DEFAULT NULL,
  `display5` int(11) DEFAULT NULL,
  `display6` int(11) DEFAULT NULL,
  `q1` int(11) DEFAULT NULL,
  `q2` int(11) DEFAULT NULL,
  `q3` int(11) DEFAULT NULL,
  `q4` int(11) DEFAULT NULL,
  `q5` int(11) DEFAULT NULL,
  `q6` int(11) DEFAULT NULL,
  `ans` int(11) DEFAULT NULL,
  `timer` varchar(50) DEFAULT NULL,
  `setNumber` int(11) DEFAULT NULL,
  `endGame` int(11) NOT NULL,
  `camera_device` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ingame_record`
--

INSERT INTO `ingame_record` (`id`, `teamA_name`, `teamA_img`, `teamA_score`, `teamA_set`, `teamA_timeout1`, `teamA_timeout2`, `teamA_serving`, `teamA_set1`, `teamA_set2`, `teamA_set3`, `teamA_set4`, `teamA_set5`, `teamB_name`, `teamB_img`, `teamB_score`, `teamB_set`, `teamB_timeout1`, `teamB_timeout2`, `teamB_serving`, `teamB_set1`, `teamB_set2`, `teamB_set3`, `teamB_set4`, `teamB_set5`, `display1`, `display2`, `display3`, `display4`, `display5`, `display6`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `ans`, `timer`, `setNumber`, `endGame`, `camera_device`) VALUES
(1, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, '00:00', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question_no` varchar(10) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_no`, `question`, `answer`) VALUES
(1, 'Q1', 'Kung ang powerpuff girls ay nakatira sa Townsville, at si elmo ay from sesame Street taga-saan naman si SpongeBob?', 'BIKINI BOTTOM'),
(2, 'Q2', 'Kung si taylor swift ang kumanta ng love story, at si Beyonce ang bumirit ng love on top sino naman ang grupong nagpasabog ng stupid love noong 2002?\"I won\'t last a day without you ang sabi sa kanta ng the carpenters.\"  Ano naman daw ang \"is it what sweet, i guess so\" sa kanta ni sabrina carpenter?	', 'ESPRESSO'),
(3, 'Q3', 'Kung ang BBB ni Mark Villar ay Build, Build, Build, Ano naman ang ibig sabihin ng GGG sa balanced nutrition?', 'GO, GLOW, GROW'),
(4, 'Q4', 'Kung si kim bok-joo ay ang weightlifting Fairy ng korea, sino naman ang first-ever Olympic gold medalist weightlifter ng pilipinas?Ang isang taon ay may 12 Months, at sa isang buwan ay may  30 days. Sino ang kumanta ng buwan?	', 'JUAN KARLOS'),
(5, 'Q5', 'Sumikat sa larangan ng basketball si Michael jordan, Si Michael jackson naman ang tinaguriang \"King of Pop\". Ano ang title ng longest - running gag show ni michael V?', 'BUBBLE GANG'),
(6, 'Q6', 'May 12 Days of Christmas sa kanta, pero sa pilipinas ilang beses ka dapat magsimba para makumpleto mo ang Simbang gabi?', '9 DAYS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_record`
--
ALTER TABLE `game_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingame_record`
--
ALTER TABLE `ingame_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_record`
--
ALTER TABLE `game_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ingame_record`
--
ALTER TABLE `ingame_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
