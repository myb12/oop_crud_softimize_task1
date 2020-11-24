-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 05:04 PM
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
-- Database: `task-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cylinder` varchar(20) NOT NULL,
  `displacement` varchar(50) NOT NULL,
  `transmission` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `torque` varchar(50) NOT NULL,
  `fuel_capacity` varchar(50) NOT NULL,
  `braking_system` varchar(20) NOT NULL,
  `engine` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `name`, `image`, `cylinder`, `displacement`, `transmission`, `power`, `torque`, `fuel_capacity`, `braking_system`, `engine`) VALUES
(9, 'Volvo', '1864778011_1606233591.jpg', '4-cylinder', '1200cc', '6-speed', '75 hp', '200 Nm', '35 litres', 'ABS', 'diesel'),
(10, 'Opel', '436211499_1606233650.jpg', '3-cylinder', '1500 cc', '5-speed', '85 hp', '220 Nm', '42 litres', 'EBD', 'petrol'),
(11, 'Audi', '1033284570_1606233708.jpg', '3-cylinder', '100 cc', '5-speed', '60 hp', '170 Nm', '30 litres', 'EBD', 'electric'),
(12, 'Mercedes', '1811619719_1606233763.jpg', '4-cylinder', '1800 cc', '6-speed', '100 hp', '250 Nm', '42 litres', 'ABS', 'diesel');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
