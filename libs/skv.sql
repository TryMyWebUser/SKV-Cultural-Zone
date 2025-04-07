-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 06:12 AM
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
-- Database: `skv`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'skv', 'skvculturalzone@gmail.com', 'skv@2025', '2025-04-05 10:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `cate-content`
--

CREATE TABLE `cate-content` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dec` longtext NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `img`, `title`, `page`, `created_at`) VALUES
(14, '../uploads/Category/67f0eb290052f.png', 'Carnatic', 'class', '2025-04-05 14:04:49'),
(15, '../uploads/Category/67f0ebb14ffd6.png', 'Western', 'class', '2025-04-05 14:07:05'),
(16, '../uploads/Category/67f0ebc2a0bbf.png', 'Dance', 'class', '2025-04-05 14:07:22'),
(17, '../uploads/Category/67f0ec65979d3.png', 'Hindi', 'course', '2025-04-05 14:10:05'),
(18, '../uploads/Category/67f0ec76797f6.png', 'Sanskrit', 'course', '2025-04-05 14:10:22'),
(19, '../uploads/Category/67f0ec87734b8.png', 'English', 'course', '2025-04-05 14:10:39'),
(20, '../uploads/Category/67f0ec95bc32c.png', 'Drawing', 'course', '2025-04-05 14:10:53'),
(21, '../uploads/Category/67f0eca688da2.png', 'Karate', 'course', '2025-04-05 14:11:10'),
(22, '../uploads/Category/67f0ecb5cb678.png', 'Handwriting', 'course', '2025-04-05 14:11:25'),
(23, '../uploads/Category/67f0ecc4aaef5.png', 'Chess', 'course', '2025-04-05 14:11:40'),
(24, '../uploads/Category/67f0ecd321ea4.png', 'Carrom', 'course', '2025-04-05 14:11:55'),
(25, '../uploads/Category/67f0ece1399fe.png', 'Yoga', 'course', '2025-04-05 14:12:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub-category`
--

CREATE TABLE `sub-category` (
  `id` int(11) NOT NULL,
  `img` varchar(1024) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub-category`
--

INSERT INTO `sub-category` (`id`, `img`, `title`, `category`, `created_at`) VALUES
(6, '../uploads/Sub_Category/67f0ebde772bf.png', 'Vocal', 'Carnatic', '2025-04-05 14:07:50'),
(7, '../uploads/Sub_Category/67f0ebed012a1.png', 'Veena', 'Carnatic', '2025-04-05 14:08:05'),
(8, '../uploads/Sub_Category/67f0ebfa9e472.png', 'Flute', 'Carnatic', '2025-04-05 14:08:18'),
(9, '../uploads/Sub_Category/67f0ec0a7f8ca.png', 'Violin', 'Carnatic', '2025-04-05 14:08:34'),
(10, '../uploads/Sub_Category/67f0ec1887a08.png', 'Harmonium', 'Carnatic', '2025-04-05 14:08:48'),
(11, '../uploads/Sub_Category/67f0ec28c611d.png', 'Mridangam', 'Carnatic', '2025-04-05 14:09:04'),
(12, '../uploads/Sub_Category/67f0ec37c4218.png', 'Tabla', 'Carnatic', '2025-04-05 14:09:19'),
(13, '../uploads/Sub_Category/67f0ec46a8824.png', 'Voice Culture', 'Carnatic', '2025-04-05 14:09:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cate-content`
--
ALTER TABLE `cate-content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub-category`
--
ALTER TABLE `sub-category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cate-content`
--
ALTER TABLE `cate-content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sub-category`
--
ALTER TABLE `sub-category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
