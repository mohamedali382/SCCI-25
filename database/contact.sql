-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 12:29 AM
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
-- Database: `scci`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `UserWorkshop` varchar(25) NOT NULL,
  `UserEmail` varchar(50) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Id`, `UserId`, `UserName`, `UserWorkshop`, `UserEmail`, `Message`) VALUES
(1, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(2, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testingggggggg'),
(3, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(4, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(5, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(6, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(7, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(8, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(9, 1, '', '', '', ''),
(10, 1, 'Yousef Ahmed Ibrahim El Sayed', '', '', ''),
(11, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed46200asssasasaassa@gmail.com', 'testing'),
(12, 1, '', '', '', ''),
(13, 1, 'Yousef Ahmed Ibrahim El Sayed', '', 'yousefahmed462003@gmail.com', ''),
(14, 1, '11', 'marketive', 'yousefahmed462003@gmail.com', 'saa'),
(15, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(16, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(17, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(18, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(19, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(20, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'aaa'),
(21, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(22, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(23, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(24, 1, '', '', '', ''),
(25, 1, '', '', '', ''),
(26, 1, '', '', '', ''),
(27, 1, '', '', '', ''),
(28, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', ''),
(29, 1, '', '', '', ''),
(30, 1, '', '', '', ''),
(31, 1, '', '', '', ''),
(32, 1, '', '', '', ''),
(33, 1, '', '', '', ''),
(34, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'testing'),
(35, 1, '', '', '', ''),
(36, 1, '', '', '', ''),
(37, 1, '', '', '', ''),
(38, 1, '', '', '', ''),
(39, 1, '', '', '', ''),
(40, 1, '', '', '', ''),
(41, 1, '', '', '', ''),
(42, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'aaaaaaaaaaaaaaaaaaaaaa'),
(43, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'sa'),
(44, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'joe'),
(45, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 'kkk'),
(46, 1, 'Yousef Ahmed Ibrahim El Sayed', 'marketive', 'yousefahmed462003@gmail.com', 's'),
(47, 1, 'Yousef ', 'maek', 'yousefahmed462003@gmail.com', 'lasttttttttttt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
