-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2021 at 02:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `widform`
--

-- --------------------------------------------------------

--
-- Table structure for table `infodata`
--

CREATE TABLE `infodata` (
  `sno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone no` int(20) NOT NULL,
  `stime` datetime(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infodata`
--

INSERT INTO `infodata` (`sno`, `name`, `email`, `phone no`, `stime`) VALUES
(1, 'zeeshan', 'zeeshan@xyz.com', 999888777, '2021-03-31 01:43:01.000000'),
(2, 'Rohan', 'rohan@wxy.com', 999888666, '0000-00-00 00:00:00.000000'),
(19, 'rohan', 'rohan@travel.com', 9999999, '2021-04-01 23:31:28.000000'),
(20, 'johnson', 'john@hotmail.com', 909076566, '2021-04-01 23:33:55.000000'),
(21, 'zeeshan', 'kashsharma@gmail.com', 9999999, '2021-04-02 01:16:12.000000'),
(22, 'ehtesham', 'xairt@gmail.com', 2147483647, '2021-04-02 16:59:41.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infodata`
--
ALTER TABLE `infodata`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infodata`
--
ALTER TABLE `infodata`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
