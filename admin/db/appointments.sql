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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
