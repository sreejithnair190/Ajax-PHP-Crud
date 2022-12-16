-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test2`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `phone`) VALUES
(4, 'Testf', 'One', 'test01@gmail.com', 1234567890),
(5, 'Test', 'Two', 'test02@gmail.com', 1234567892),
(6, 'Test', 'Three', 'test03@gmail.com', 1234567893),
(7, 'Test', 'Four', 'test04@gmail.com', 1234567493),
(8, 'Test', 'Five', 'qww@gmail.com', 877976994),
(9, 'Test', 'SIx', 'qwasw@gmail.com', 2147483647),
(10, 'Test', 'Seven', 'test07@gmail.com', 2147483647),
(11, 'Test', 'Eight', 'test08@gmail.com', 2147483647),
(12, 'Test', 'Nine', 'test09@gmail.com', 2147483647),
(13, 'Test', 'Ten', 'test10@gmail.com', 2147483647),
(14, 'Test', 'Eleven', 'test11@gmail.com', 2147483647),
(15, 'Test', 'Twelve', 'test12@gmail.com', 2147483647),
(17, 'Test', 'Fourteen', 'test14@gmail.com', 2111111112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
