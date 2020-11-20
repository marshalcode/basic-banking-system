-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 07:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gript1`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `sender`, `reciever`, `amount`, `date`) VALUES
(1, 'rahul', 'abhishek', 100, '2020-11-20 17:49:29'),
(2, 'harsh', 'abhishek', 100, '2020-11-20 17:51:01'),
(3, 'param', 'abhishek', 100, '2020-11-20 17:51:10'),
(4, 'ajay', 'abhishek', 100, '2020-11-20 17:51:22'),
(5, 'vijay', 'abhishek', 100, '2020-11-20 17:51:30'),
(6, 'monika', 'abhishek', 100, '2020-11-20 17:51:38'),
(7, 'geetika', 'abhishek', 100, '2020-11-20 17:51:45'),
(8, 'nishant', 'abhishek', 100, '2020-11-20 17:51:54'),
(9, 'abhi', 'abhishek', 100, '2020-11-20 17:52:02'),
(10, 'abhishek', 'harsh', 100, '2020-11-20 17:52:14'),
(11, 'abhishek', 'param', 100, '2020-11-20 17:52:27'),
(12, 'abhishek', 'ajay', 100, '2020-11-20 17:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` double DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `amount`) VALUES
(1, 'Abhishek', 'abhishek@gmail.com', 10600),
(2, 'harsh', 'harsh@gmail.com', 10000),
(3, 'Param', 'param@gmail.com', 10000),
(4, 'Ajay', 'ajay@gmail.com', 10000),
(5, 'Vijay', 'vijay@gmail.com', 9900),
(6, 'Monika', 'monika@gmail.com', 9900),
(7, 'geetika', 'geetika@gmail.com', 9900),
(8, 'Nishant', 'nishanth@gmail.com', 9900),
(9, 'abhi', 'abhi@gmail.com', 9900),
(10, 'Rahul', 'rahul@gmail.com', 9900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
