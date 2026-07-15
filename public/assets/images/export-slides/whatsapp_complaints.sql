-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 14, 2026 at 07:31 AM
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
-- Table structure for table `whatsapp_complaints`
--

CREATE TABLE `whatsapp_complaints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workspace_id` bigint(20) UNSIGNED NOT NULL,
  `workspace_company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `whatsapp_contact_id` bigint(20) UNSIGNED DEFAULT NULL,
  `whatsapp_conversation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `reference_number` varchar(40) NOT NULL,
  `customer_name` varchar(120) DEFAULT NULL,
  `customer_phone` varchar(40) DEFAULT NULL,
  `body` text NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'open',
  `assigned_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `resolved_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `whatsapp_complaints`
--
ALTER TABLE `whatsapp_complaints`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `whatsapp_complaints_workspace_id_reference_number_unique` (`workspace_id`,`reference_number`),
  ADD KEY `whatsapp_complaints_workspace_company_id_foreign` (`workspace_company_id`),
  ADD KEY `whatsapp_complaints_whatsapp_contact_id_foreign` (`whatsapp_contact_id`),
  ADD KEY `whatsapp_complaints_whatsapp_conversation_id_foreign` (`whatsapp_conversation_id`),
  ADD KEY `whatsapp_complaints_assigned_user_id_foreign` (`assigned_user_id`),
  ADD KEY `whatsapp_complaints_workspace_id_status_index` (`workspace_id`,`status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `whatsapp_complaints`
--
ALTER TABLE `whatsapp_complaints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `whatsapp_complaints`
--
ALTER TABLE `whatsapp_complaints`
  ADD CONSTRAINT `whatsapp_complaints_assigned_user_id_foreign` FOREIGN KEY (`assigned_user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `whatsapp_complaints_whatsapp_contact_id_foreign` FOREIGN KEY (`whatsapp_contact_id`) REFERENCES `whatsapp_contacts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `whatsapp_complaints_whatsapp_conversation_id_foreign` FOREIGN KEY (`whatsapp_conversation_id`) REFERENCES `whatsapp_conversations` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `whatsapp_complaints_workspace_company_id_foreign` FOREIGN KEY (`workspace_company_id`) REFERENCES `workspace_companies` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `whatsapp_complaints_workspace_id_foreign` FOREIGN KEY (`workspace_id`) REFERENCES `workspaces` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
