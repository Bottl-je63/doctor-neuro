-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2024 at 09:39 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `newsletter_subscription` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `newsletter_subscription`, `created_at`) VALUES
(1, 'first', 'abs@gmail', '1234567890', 'test', 'tew', 0, '2024-11-12 07:24:15'),
(2, 'CompanyName', 'test705306@gamil.com', '1234567890', 'test', 'd', 1, '2024-11-12 07:29:08'),
(3, 'adsa', 'dsa@gmail.com', '1234567890', 'test', 'sdfdsa', 1, '2024-11-12 09:02:47'),
(4, 'adsa', 'dsa@gmail.com', '1234567890', 'test', 'sdfdsa', 1, '2024-11-12 09:12:15'),
(5, 'saurav Singh', 'sc.ss897@gmail.com', '7053068424', 'testing', 'i am developer using this for testing purpose', 1, '2024-11-13 06:24:01'),
(6, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'testing', 'i am developer using mail for testing purpose', 1, '2024-11-13 06:27:06'),
(7, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is developer side for testing', 1, '2024-11-13 06:35:15'),
(8, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is developer side for testing', 1, '2024-11-13 06:35:17'),
(9, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is developer side pls test it', 1, '2024-11-13 06:41:08'),
(10, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is developer side pls test it', 1, '2024-11-13 06:41:16'),
(11, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is from developer side', 1, '2024-11-13 06:43:36'),
(12, 'Saurav', 'sc.ss897@gmail.com', '7053068424', 'test', 'this is developer side testing mail', 1, '2024-11-13 06:45:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
