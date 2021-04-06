-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 12:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `sms_data`
--

CREATE TABLE `sms_data` (
  `sms_id` int(100) NOT NULL,
  `originator` varchar(15) NOT NULL,
  `gateway` varchar(15) NOT NULL,
  `message` varchar(480) NOT NULL,
  `timestamp` varchar(50) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sms_data`
--

INSERT INTO `sms_data` (`sms_id`, `originator`, `gateway`, `message`, `timestamp`) VALUES
(0, '', '', '', ''),
(1, '', '', '', ''),
(2, '', '', '', ''),
(3, '', '', 'gwapa kaayo ko sa nga tananye naman', ''),
(4, '', '', 'hello mame', ''),
(5, '', '', 'heyo', ''),
(6, '', '', '', ''),
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sms_data`
--
ALTER TABLE `sms_data`
  ADD PRIMARY KEY (`sms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sms_data`
--
ALTER TABLE `sms_data`
  MODIFY `sms_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
