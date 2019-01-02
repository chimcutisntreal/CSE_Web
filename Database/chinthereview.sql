-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 06:21 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chinthereview`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID_F` int(11) UNSIGNED NOT NULL,
  `Film` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Review` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Admin` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID_F`, `Film`, `Review`, `Admin`) VALUES
(1, 'aquafina', '<p style=\"text-align: center;\"><span style=\"font-size: 36px;\"><strong><span style=\"color: rgb(0, 0, 0);\">Hom nay toi di hoc</span></strong></span></p><p style=\"text-align: center;\"><img src=\"blob:http://localhost/9136f414-860d-4818-8a2c-2df398bb2022\" style=\"width: 300px;\" class=\"fr-fic fr-dib\"><br></p><p><span style=\"font-size: 36px;\"><strong><span style=\"color: rgb(0, 0, 0);\"><span class=\"fr-video fr-fvc fr-dvb fr-draggable\" contenteditable=\"false\" draggable=\"true\"><iframe width=\"640\" height=\"360\" src=\"https://www.youtube.com/embed/-UcD9icCjo8?wmode=opaque\" frameborder=\"0\" allowfullscreen=\"\" class=\"fr-draggable\"></iframe></span></span></strong></span><br></p>', 'admin01');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `ID_G` int(11) UNSIGNED NOT NULL,
  `Genre` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`ID_G`, `Genre`) VALUES
(34, 'hanh dong'),
(35, 'kinh di'),
(36, 'ma');

-- --------------------------------------------------------

--
-- Table structure for table `genre_of_f`
--

CREATE TABLE `genre_of_f` (
  `ID_F` int(11) UNSIGNED NOT NULL,
  `ID_G` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `genre_of_f`
--

INSERT INTO `genre_of_f` (`ID_F`, `ID_G`) VALUES
(1, 34),
(1, 35);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_User` int(11) NOT NULL,
  `User_Name` char(100) NOT NULL,
  `Email` char(100) NOT NULL,
  `Pass` char(100) NOT NULL,
  `Join_Date` date DEFAULT NULL,
  `Phone_Number` varchar(13) DEFAULT NULL,
  `Fav` text,
  `Status` tinyint(1) NOT NULL,
  `Level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_User`, `User_Name`, `Email`, `Pass`, `Join_Date`, `Phone_Number`, `Fav`, `Status`, `Level`) VALUES
(35, 'user01', 'user01@gmail.com', 'c84fe4a720c0e359a811ccc1179c221c', '2018-12-25', '0326537666', 'Drama', 0, 1),
(36, 'admin01', 'admin01@gmail.com', '6efe5f2a61a024359a93ce6a9937a9a5', '2018-12-25', '1626537666', 'Horror', 1, 3),
(37, 'user02', 'user02@gmail.com', 'ead0d6f4ccb850cb134ceb889e380eaf', '2018-12-28', '841626537666', 'Animation', 0, 1),
(38, 'user03', 'user03@gmail.com', '866f08b211cc9215a8d1f728aa62a57b', '2019-01-02', '1626537666', 'Tragedy', 0, 1),
(39, 'user04', 'user04@gmail.com', 'b531cd0008f43c83324a6be94bcbd450', '2019-01-02', '1626537666', 'Documentary', 0, 1),
(49, 'user06', 'user06@gmail.com', 'b531cd0008f43c83324a6be94bcbd450', '2019-01-02', '1626537666', 'Horror', 0, 1),
(50, 'user08', 'user08@gmail.com', 'b531cd0008f43c83324a6be94bcbd450', '2019-01-02', '1626537666', 'Horror', 0, 1),
(51, 'user09', 'user09@gmail.com', 'b531cd0008f43c83324a6be94bcbd450', '2019-01-02', '1626537666', 'Horror', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID_F`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`ID_G`);

--
-- Indexes for table `genre_of_f`
--
ALTER TABLE `genre_of_f`
  ADD KEY `ID_F` (`ID_F`),
  ADD KEY `ID_G` (`ID_G`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID_F` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `ID_G` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_User` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre_of_f`
--
ALTER TABLE `genre_of_f`
  ADD CONSTRAINT `genre_of_f_ibfk_1` FOREIGN KEY (`ID_F`) REFERENCES `film` (`ID_F`),
  ADD CONSTRAINT `genre_of_f_ibfk_2` FOREIGN KEY (`ID_G`) REFERENCES `genre` (`ID_G`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
