-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2026 at 10:42 AM
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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) NOT NULL,
  `table_name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-02-18 23:26:33', '2019-02-18 23:26:33'),
(2, 'browse_bread', NULL, '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(3, 'browse_database', NULL, '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(4, 'browse_media', NULL, '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(5, 'browse_compass', NULL, '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(6, 'browse_menus', 'menus', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(7, 'read_menus', 'menus', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(8, 'edit_menus', 'menus', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(9, 'add_menus', 'menus', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(10, 'delete_menus', 'menus', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(11, 'browse_roles', 'roles', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(12, 'read_roles', 'roles', '2019-02-18 23:26:34', '2019-02-18 23:26:34'),
(13, 'edit_roles', 'roles', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(14, 'add_roles', 'roles', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(15, 'delete_roles', 'roles', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(16, 'browse_users', 'users', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(17, 'read_users', 'users', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(18, 'edit_users', 'users', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(19, 'add_users', 'users', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(20, 'delete_users', 'users', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(21, 'browse_settings', 'settings', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(22, 'read_settings', 'settings', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(23, 'edit_settings', 'settings', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(24, 'add_settings', 'settings', '2019-02-18 23:26:35', '2019-02-18 23:26:35'),
(25, 'delete_settings', 'settings', '2019-02-18 23:26:36', '2019-02-18 23:26:36'),
(26, 'browse_hooks', NULL, '2019-02-18 23:26:39', '2019-02-18 23:26:39'),
(32, 'browse_categories', 'categories', '2019-02-20 02:01:04', '2019-02-20 02:01:04'),
(33, 'read_categories', 'categories', '2019-02-20 02:01:04', '2019-02-20 02:01:04'),
(34, 'edit_categories', 'categories', '2019-02-20 02:01:04', '2019-02-20 02:01:04'),
(35, 'add_categories', 'categories', '2019-02-20 02:01:04', '2019-02-20 02:01:04'),
(36, 'delete_categories', 'categories', '2019-02-20 02:01:04', '2019-02-20 02:01:04'),
(37, 'browse_sizes', 'sizes', '2019-02-20 01:47:41', '2019-02-20 01:47:41'),
(38, 'read_sizes', 'sizes', '2019-02-20 01:47:41', '2019-02-20 01:47:41'),
(39, 'edit_sizes', 'sizes', '2019-02-20 01:47:41', '2019-02-20 01:47:41'),
(40, 'add_sizes', 'sizes', '2019-02-20 01:47:41', '2019-02-20 01:47:41'),
(41, 'delete_sizes', 'sizes', '2019-02-20 01:47:41', '2019-02-20 01:47:41'),
(42, 'browse_pizzas', 'pizzas', '2019-02-20 02:04:37', '2019-02-20 02:04:37'),
(43, 'read_pizzas', 'pizzas', '2019-02-20 02:04:37', '2019-02-20 02:04:37'),
(44, 'edit_pizzas', 'pizzas', '2019-02-20 02:04:37', '2019-02-20 02:04:37'),
(45, 'add_pizzas', 'pizzas', '2019-02-20 02:04:37', '2019-02-20 02:04:37'),
(46, 'delete_pizzas', 'pizzas', '2019-02-20 02:04:37', '2019-02-20 02:04:37'),
(47, 'browse_pizza_sizes', 'pizza_sizes', '2019-02-20 02:18:07', '2019-02-20 02:18:07'),
(48, 'read_pizza_sizes', 'pizza_sizes', '2019-02-20 02:18:07', '2019-02-20 02:18:07'),
(49, 'edit_pizza_sizes', 'pizza_sizes', '2019-02-20 02:18:07', '2019-02-20 02:18:07'),
(50, 'add_pizza_sizes', 'pizza_sizes', '2019-02-20 02:18:07', '2019-02-20 02:18:07'),
(51, 'delete_pizza_sizes', 'pizza_sizes', '2019-02-20 02:18:07', '2019-02-20 02:18:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
