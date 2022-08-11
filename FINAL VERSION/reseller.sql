-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2022 at 11:45 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `reseller`
--

CREATE TABLE `reseller` (
  `id` int(128) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reseller`
--

INSERT INTO `reseller` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(11, 'test1', 'test1', 'tes1t@gmail.com', 'test12345'),
(12, '', '', '', ''),
(14, 'Alex Hoper', 'admin', 'abc@gmail.com', 'dfgfgf'),
(18, 'Jack Ma', 'Jack', 'Jack@gmail.com', '14545'),
(27, 'data info', 'data', 'lion47225@gmail.com', '124242'),
(29, 'KATTHY LOURA', 'Kathy', 'kathy@gmail.com', '42542'),
(33, 'test test', 'dsfdsf', 'test@gmail.com', 'dsfdsfs'),
(34, 'test test', 'popo', 'anthonyfwford@gmail.com', 'ghjghj'),
(35, 'KATTHY LOURA', 'derfghfgjj', 'lion47225@gmail.com', 'hjhjhjhj'),
(36, 'KATTHY LOURA', 'qqqqqqqq', 'lion47225@gmail.com', 'ghghgh'),
(40, 'jackson carl', 'jackson', 'zanderdadios@gmail.com', 'fdbfbfbd'),
(41, 'Alex', 'fgbhgfbg', 'gdergg', 'dfgdfgdf'),
(45, '56646546', 'nafiz', 'abc@gmail.com', 'YTYJYJYJ'),
(48, '5365 576567', 'ereewr', 'roml27773@gmail.com', 'ewrewrew'),
(50, 'Alex', 'trhrt', 'roml27773@gmail.com', 'thrthtr'),
(52, 'Alex', 'Voidhrh', 'niurkasantateresa83@gmail.com', 'irtyhrth'),
(53, 'jack', 'trhtrh', 'roml27773@gmail.com', 'rhtttth'),
(56, 'jack', 'hjggtrtg', 'niurkasantateresa83@gmail.com', '56hjj7'),
(67, 'Final Check', 'fenda', 'niurkasantateresa83@gmail.com', 'dsfdsfsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reseller`
--
ALTER TABLE `reseller`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reseller`
--
ALTER TABLE `reseller`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
