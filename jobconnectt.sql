-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2025 at 12:57 PM
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
-- Database: `jobconnectt`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `portfolio` varchar(255) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `cover_letter` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `email`, `portfolio`, `file_path`, `cover_letter`, `created_at`) VALUES
(1, 'Wawan', 'wawan@gmail.com', NULL, 'uploads/686b9bec83e39.pdf', NULL, '2025-07-07 10:05:32'),
(2, 'Wawan', 'wawan@gmail.com', NULL, 'uploads/686b9c1c256ef.pdf', NULL, '2025-07-07 10:06:20'),
(3, 'Wawan', 'wawan@gmail.com', NULL, 'uploads/686b9c2350607.pdf', NULL, '2025-07-07 10:06:27'),
(4, 'Wawan', 'wawan@gmail.com', NULL, 'uploads/686b9c4fce089.pdf', NULL, '2025-07-07 10:07:11'),
(6, 'Wawan', 'wawan@gmail.com', 'https://www.kaggle.com/', 'uploads/686b9d2adf356.pdf', 'nn', '2025-07-07 10:10:50'),
(7, 'Wawan', 'wawan@gmail.com', 'https://www.kaggle.com/', 'uploads/686b9db2e2245.pdf', 'nn', '2025-07-07 10:13:06'),
(8, 'Wawan', 'wawan@gmail.com', 'https://www.kaggle.com/', 'uploads/686b9e031cdd1.pdf', 'nn', '2025-07-07 10:14:27'),
(9, 'Wawan', 'wawan@gmail.com', 'https://www.kaggle.com/', 'uploads/686b9e194fcb2.pdf', 'nnn', '2025-07-07 10:14:49'),
(10, 'Roiyan', 'wawan@gmail.com', 'https://www.kaggle.com/', 'uploads/686b9e9a545b2.pdf', 'amam', '2025-07-07 10:16:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
