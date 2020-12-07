-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Dec 06, 2020 at 06:58 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BID` int(10) NOT NULL,
  `Bname` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Author` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Readd` varchar(30) NOT NULL,
  `ImageS` varchar(30) NOT NULL,
  `ImageL` varchar(30) NOT NULL,
  `DateAdded` date NOT NULL,
  `Review` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BID`, `Bname`, `Username`, `Author`, `Category`, `Readd`, `ImageS`, `ImageL`, `DateAdded`, `Review`) VALUES
(12, 'CProgramming', 'deeksha', 'Shreyansh', 'Programming', 'abxc123', 'sssd', 'ssd32', '2020-12-06', 'very good');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(30) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(6) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Username`, `Password`, `Name`) VALUES
('aayushpandey113@gmail.com', 'aayu', 'aayush', 'Aayush'),
('deeksha2020@gmail.com', 'deeksha', 'deeksh', 'Deeksha');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
