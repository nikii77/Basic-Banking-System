-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 06:44 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankd`
--

-- --------------------------------------------------------

--
-- Table structure for table `trans`
--

CREATE TABLE `trans` (
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `saccount` bigint(30) NOT NULL,
  `raccount` bigint(30) NOT NULL,
  `balance` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trans`
--

INSERT INTO `trans` (`sender`, `receiver`, `saccount`, `raccount`, `balance`, `date`) VALUES
('Pooja', 'Raj', 987656, 987654, 500, '2021-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `aadhar` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `accountno` bigint(20) NOT NULL,
  `balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `mobile`, `aadhar`, `email`, `accountno`, `balance`) VALUES
('Manan', 1236547896, 12365478998, 'm@gmail.com', 123654, 50000),
('nikhil', 7410852369, 741258963012, 'ni@gmail.com', 741258, 20000),
('nikita', 9874563219, 987654321002, 'n@gmail.com', 789654, 25000),
('Pooja', 7412589630, 741085296312, 'p@gmail.com', 987656, 14500),
('Praj', 7412589633, 741085296315, 'Pra@gmail.com', 987456, 15000),
('Priya', 7412589632, 741085296314, 'pri@gmail.com', 987658, 50000),
('Raj', 7410852963, 741085296310, 'r@gmail.com', 987654, 50500),
('Raju', 9638527410, 741085296311, 'rr@gmail.com', 987655, 20000),
('Riya', 7412589631, 741085296313, 'ri@gmail.com', 987657, 10000),
('shweta', 7410258963, 741085296316, 's@gmail.com', 987659, 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `i2` (`name`),
  ADD UNIQUE KEY `i3` (`aadhar`),
  ADD UNIQUE KEY `i4` (`accountno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
