-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2026 at 10:40 AM
-- Server version: 11.8.8-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u458331663_scientific`
--

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_categories`
--

CREATE TABLE `sidebar_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sidebar_categories`
--

INSERT INTO `sidebar_categories` (`id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 63, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(2, 347, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(3, 79, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(4, 73, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(5, 336, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(7, 153, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(8, 140, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(9, 100, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(10, 66, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(11, 349, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(12, 131, '2019-09-26 03:46:55', '2019-09-26 03:46:55'),
(13, 123, '2019-09-26 03:46:56', '2019-09-26 03:46:56'),
(19, 567, NULL, NULL),
(20, 568, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sidebar_categories`
--
ALTER TABLE `sidebar_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sidebar_categories`
--
ALTER TABLE `sidebar_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
