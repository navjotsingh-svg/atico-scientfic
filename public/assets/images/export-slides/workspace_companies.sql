-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2026 at 05:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypro`
--

-- --------------------------------------------------------

--
-- Table structure for table `workspace_companies`
--

CREATE TABLE `workspace_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workspace_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `settings` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`settings`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workspace_companies`
--

INSERT INTO `workspace_companies` (`id`, `workspace_id`, `name`, `slug`, `is_default`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'KuickFit', 'default', 1, '{\"bot_training\":{\"ai_enabled\":false,\"faq_enabled\":true,\"ai_model\":\"gpt-4o-mini\",\"system_prompt\":\"You are a helpful WhatsApp business assistant. Answer briefly and clearly using only the knowledge provided. If you do not know the answer, politely ask the customer to wait for a human agent. Keep replies under 500 characters.\",\"business_name\":\"KuickFit\",\"business_description\":\"\",\"website_knowledge\":\"\"}}', '2026-07-13 23:42:22', '2026-07-13 23:42:22'),
(2, 2, 'T', 'default', 1, '{\"bot_training\":{\"ai_enabled\":false,\"faq_enabled\":true,\"ai_model\":\"gpt-4o-mini\",\"system_prompt\":\"You are a helpful WhatsApp business assistant. Answer briefly and clearly using only the knowledge provided. If you do not know the answer, politely ask the customer to wait for a human agent. Keep replies under 500 characters.\",\"business_name\":\"T\",\"business_description\":\"\",\"website_knowledge\":\"\"}}', '2026-07-13 23:42:22', '2026-07-13 23:42:22'),
(3, 1, 'klr', 'klr', 0, '{\"bot_training\":{\"ai_enabled\":false,\"faq_enabled\":true,\"ai_model\":\"gpt-4o-mini\",\"system_prompt\":\"You are a helpful WhatsApp business assistant. Answer briefly and clearly using only the knowledge provided. If you do not know the answer, politely ask the customer to wait for a human agent. Keep replies under 500 characters.\",\"business_name\":\"klr\",\"business_description\":\"\",\"website_knowledge\":\"\"}}', '2026-07-13 23:52:54', '2026-07-13 23:52:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workspace_companies`
--
ALTER TABLE `workspace_companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `workspace_companies_workspace_id_slug_unique` (`workspace_id`,`slug`),
  ADD KEY `workspace_companies_workspace_id_is_default_index` (`workspace_id`,`is_default`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workspace_companies`
--
ALTER TABLE `workspace_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workspace_companies`
--
ALTER TABLE `workspace_companies`
  ADD CONSTRAINT `workspace_companies_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `workspaces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
