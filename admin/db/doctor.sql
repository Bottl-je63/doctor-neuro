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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `department` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `phone`, `department`, `doctor`, `date`, `message`, `created_at`) VALUES
(1, 'CompanyName', 'sauravsingh@pandaguys.in', '7053068424', 'Cardiac Clinic', 'Dr. Akther Hossain', '0000-00-00', 'vb', '2024-11-12 12:05:55'),
(2, 'adsa', 'sauravsingh@pandaguys.in', '7053068424', 'Gastroenterology', 'Dr. Akther Hossain', '2024-10-10', 'ok', '2024-11-13 08:50:55'),
(3, 'adsa', 'sauravsingh@pandaguys.in', '7053068424', 'Gastroenterology', 'Dr. Akther Hossain', '2024-10-10', 'ok', '2024-11-13 08:51:25'),
(4, 'first', 'sc.ss897@gmail.com', '7053068424', 'Cardiac Clinic', 'Dr. Akther Hossain', '2024-10-10', 'f', '2024-11-13 08:51:46'),
(5, 'fname', 'sc.ss897@gmail.com', '7053068424', 'Gastroenterology', 'Dr. Jovis Karon', '2024-10-10', 'df', '2024-11-13 08:57:12'),
(6, 'adsa', 'sc.ss897@gmail.com', '7053068424', 'Cardiac Clinic', 'Dr. Akther Hossain', '2024-10-10', 'fd', '2024-11-13 08:57:57'),
(7, 'adsa', 'sc.ss897@gmail.com', '7053068424', 'Neurology', 'Dr. Dery Alex', '2024-10-10', 'fd', '2024-11-13 09:05:58'),
(8, 'contactNumber', 'test705306@gamil.com', '7053068424', 'Neurology', 'Dr. Akther Hossain', '2024-10-10', 'd', '2024-11-13 09:07:30'),
(9, 'CompanyName', 'sc.ss897@gmail.com', '1234567890', 'Neurology', 'Dr. Akther Hossain', '2024-10-10', 'f', '2024-11-13 09:09:13'),
(10, 'CompanyName', 'sc.ss897@gmail.com', '7053068424', 'Neurology', 'Dr. Akther Hossain', '2024-11-12', 'u', '2024-11-13 09:19:29');

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

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `news` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `first_name`, `last_name`, `phone`, `email`, `password`, `news`, `created_at`) VALUES
(1, 'Edin', 'Burge', '1234567890', 'sauravsingh@pandaguys.in', '$2y$10$uFEDCOGn/v9x/ZPKvD29LeWhZCLGGQ1AHPfjkKixzAZSmWPFQpXEy', 0, '2024-11-12 06:22:42'),
(2, 'Edin', 'Burge', '7053068424', 'pimisir6512@outlook.com', '$2y$10$mHm1Gid7QU2kQfCbKZGxBu67Qg9o4vCTqKrFR.3iG.zHGHYLWcPPu', 0, '2024-11-12 06:26:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
