-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2021 at 12:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tables`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `regId` int(11) DEFAULT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `ddeparture` varchar(10) DEFAULT NULL,
  `darrival` varchar(10) DEFAULT NULL,
  `no_pass` int(11) DEFAULT NULL,
  `adults` int(11) DEFAULT NULL,
  `children` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`regId`, `Name`, `destination`, `ddeparture`, `darrival`, `no_pass`, `adults`, `children`) VALUES
(1947, 'rameshwarR', 'goa', '2021-01-21', '2021-01-29', 8, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`name`, `email`, `phone`, `message`) VALUES
('babu', 'babu2020@gmail.com', 987755235, 'good');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regId` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regId`, `email`, `Name`, `Password`) VALUES
(0, 'drkira@gmail.com', 'kiran', 'kiranDr20000'),
(37, 'nid@.com', 'kiran', 'kiranDr20000'),
(78, 'pk@gmail.com', 'pk', '1357'),
(123, 'drkira@gmail.com', 'kiran', 'kiranDr20000'),
(248, 'gagan@gmail.com', 'Gagan', 'gaga@2000'),
(432, 'drpk@gmail.com', 'gang', '9876'),
(793, 'mohan@gmail.com', 'Mohan', 'mohan@2000'),
(987, 'pk@gmail.com', 'kiran', 'kiranDr20000'),
(999, 'sand@gmail.com', 'sand', '6699'),
(1234, '\r\nr@gmail', 'aer', 'sdfaar'),
(1947, 'ram@gmail.com', 'rameshwarR', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `temple_darshan`
--

CREATE TABLE `temple_darshan` (
  `regId` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phno` int(11) DEFAULT NULL,
  `tempname` varchar(60) DEFAULT NULL,
  `bdate` varchar(10) DEFAULT NULL,
  `no_peop` int(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temple_darshan`
--

INSERT INTO `temple_darshan` (`regId`, `Name`, `email`, `phno`, `tempname`, `bdate`, `no_peop`) VALUES
(78, 'pk', 'pk@gmail.com', 998766324, 'tirupati', '2021-01-12', 12),
(0, '', '', 0, '', '', 1),
(0, '', '', 0, '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
