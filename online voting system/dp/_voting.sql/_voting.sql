-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 08:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinevotingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ContactId` int(11) NOT NULL,
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Email` text NOT NULL,
  `Areacode` double NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `opinion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ContactId`, `Firstname`, `Lastname`, `Email`, `Areacode`, `phonenumber`, `opinion`) VALUES
(1, 'sakila', 'athapaththu', 'sakila@gmail.com', 123, 1234567891, 'dcsjdgflcishckasc'),
(2, 'fdgajsvd', 'asjascva', 'chamathka@gmail.com', 13562, 714783456, 'xvcfsjdhgcvsikdvcsdc'),
(3, 'Sakila', 'Athapaththu', 'sakila@gmail.com', 60330, 714782241, 'good job');

-- --------------------------------------------------------

--
-- Table structure for table `sponsership`
--

CREATE TABLE `sponsership` (
  `id` int(11) NOT NULL,
  `CompanyName` text NOT NULL,
  `JobTitle` text NOT NULL,
  `Email` text NOT NULL,
  `Phonenumber` int(10) NOT NULL,
  `Address` text NOT NULL,
  `Objectives` text NOT NULL,
  `Level` text NOT NULL,
  `Comments` text NOT NULL,
  `user_id` bigint(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsership`
--

INSERT INTO `sponsership` (`id`, `CompanyName`, `JobTitle`, `Email`, `Phonenumber`, `Address`, `Objectives`, `Level`, `Comments`, `user_id`) VALUES
(1, 'Skill Lab', 'Projects', 'skilllab@gmail.com', 714782241, 'kurunegala', 'qwqewqe', 'Bronze-(50,000 - 100,000)', 'wqdqx', 12334235),
(2, 'efsdfa', 'safdasf', 'chamathka@gmail.com', 2147483647, 'Malabe', 'asfdsdvsdcd', 'Silver-(100,000 - 200,000)', 'sfsdfasd', 1334),
(4, 'asfasfd', 'sdfsd', 'sa@gmail.com', 2147483647, 'sfsd', 'sdfvsd', 'Gold-(200,000 - 500,000)', 'sfdsdfs', 24246364),
(5, 'sadasd', 'sadfas', 'dilmith@gmail.com', 1234567890, 'kurunegala', 'assdgfsgsg', 'Bronze-(50,000 - 100,000)', 'asfsdgsfg', 41536016),
(7, 'Project Home', 'Projects', 'sakila@gmail.com', 714782241, 'kurunegala', 'qwsax', 'Gold-(200,000 - 500,000)', 'wsxaz', 6317279978117165);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ContactId`);

--
-- Indexes for table `sponsership`
--
ALTER TABLE `sponsership`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ContactId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sponsership`
--
ALTER TABLE `sponsership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
