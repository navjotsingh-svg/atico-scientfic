-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2026 at 10:44 AM
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
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `review` varchar(1000) DEFAULT NULL,
  `rating` varchar(1000) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `product_id`, `name`, `email`, `review`, `rating`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2413, 'CuEIWqajjhJpI', 'jDUPSt.qmpqbtq@monochord.xyz', 'qyEbVffuqvmTrtpysN', '1', 0, '2023-11-23 15:51:48', '2023-11-23 15:51:48', NULL),
(2, 2413, 'icpSqahdYWivRSy', 'IoOXVN.dbqmbbb@monochord.xyz', 'mHdJSzRyiSCIKqPIfHEjlzpm', '1', 0, '2023-12-02 08:46:37', '2023-12-02 08:46:37', NULL),
(3, 2413, 'Watson', 'qbsKyt.hwcwmhq@tonetics.biz', 'Ayaan Lynn', '1', 0, '2023-12-13 17:42:27', '2023-12-13 17:42:27', NULL),
(4, 2413, 'Lucia', 'pYfadH.btjjjd@sandcress.xyz', 'Zainab Andrade', '1', 0, '2023-12-24 20:00:52', '2023-12-24 20:00:52', NULL),
(5, 2413, 'Dakari', 'EzxXwD.wthpmt@kerfuffle.asia', 'Cain Bryant', '1', 0, '2023-12-28 23:28:29', '2023-12-28 23:28:29', NULL),
(6, 2413, 'Natalie', 'tbyips.djchqhc@rightbliss.beauty', 'Saige Long', '1', 0, '2024-01-03 11:49:24', '2024-01-03 11:49:24', NULL),
(7, 2413, 'Magnolia', 'bTmkjP.qhccbwdw@anaphora.team', 'Saige Mckee', '1', 0, '2024-01-26 11:44:23', '2024-01-26 11:44:23', NULL),
(8, 2413, 'Oaklyn', 'BudhHH.qwtpmpq@rightbliss.beauty', 'Mathias Hanson', '1', 0, '2024-02-12 06:30:04', '2024-02-12 06:30:04', NULL),
(9, 2413, 'Joanna', 'FXzRuY.mwpwjpp@wisefoot.club', 'Hazel Duke', '1', 0, '2024-02-22 12:52:54', '2024-02-22 12:52:54', NULL),
(10, 2413, 'Gabriel', 'bYrmIO.bmdwmbp@silesia.life', 'Araya Marshall', '1', 0, '2024-02-23 22:34:21', '2024-02-23 22:34:21', NULL),
(11, 2413, 'Miriam', 'WEEAvF.twctbww@carnana.art', 'Linda Ellis', '1', 0, '2024-03-06 10:36:08', '2024-03-06 10:36:08', NULL),
(12, 2413, 'sardar', 'qqdhjbqcqb.qj@monochord.xyz', 'sardar farr', '1', 0, '2024-03-25 10:26:27', '2024-03-25 10:26:27', NULL),
(13, 2413, 'Levell', 'qwpjcwwddd.qj@rightbliss.beauty', 'Levell Buzzian', '1', 0, '2024-04-25 04:14:31', '2024-04-25 04:14:31', NULL),
(14, 2413, 'Maliak', 'qwmpbhmpjj.qj@rightbliss.beauty', 'Maliak Passananti', '1', 0, '2024-04-27 00:17:26', '2024-04-27 00:17:26', NULL),
(15, 2413, 'Ambrea', 'qmhdtpjmbc.qj@rightbliss.beauty', 'Ambrea Piburn', '1', 0, '2024-04-28 19:47:08', '2024-04-28 19:47:08', NULL),
(16, 2413, 'Sharniece', 'qmbqhqhhqh.qj@rightbliss.beauty', 'Sharniece Coforov', '1', 0, '2024-04-30 09:39:31', '2024-04-30 09:39:31', NULL),
(17, 2413, 'Shelton', 'qmpwjbtdcw.qj@rightbliss.beauty', 'Shelton Snyder', '1', 0, '2024-05-02 04:01:11', '2024-05-02 04:01:11', NULL),
(18, 2413, 'Armanni', 'hjjdwmdphd.qj@rightbliss.beauty', 'Armanni Musci', '1', 0, '2024-05-03 22:42:16', '2024-05-03 22:42:16', NULL),
(19, 2413, 'Arnes', 'hjwbdqwdmh.qj@rightbliss.beauty', 'Arnes Twardzicki', '1', 0, '2024-05-09 02:55:16', '2024-05-09 02:55:16', NULL),
(20, 2413, 'Redouane', 'hqqhhbmpdw.qj@rightbliss.beauty', 'Redouane Hambrecht', '1', 0, '2024-05-10 02:45:23', '2024-05-10 02:45:23', NULL),
(21, 2413, 'Jadia', 'hqmhpwtbqc.qj@rightbliss.beauty', 'Jadia Simile', '1', 0, '2024-05-12 04:21:52', '2024-05-12 04:21:52', NULL),
(22, 2413, 'Dekiya', 'htbtwtqjbh.qj@rightbliss.beauty', 'Dekiya Raith', '1', 0, '2024-05-16 07:23:05', '2024-05-16 07:23:05', NULL),
(23, 2413, 'Bessy', 'hdjpbqtbcd.qj@rightbliss.beauty', 'Bessy Morban', '1', 0, '2024-05-17 14:38:28', '2024-05-17 14:38:28', NULL),
(24, 2413, 'Maytee', 'hdtdtbdwhj.qj@rightbliss.beauty', 'Maytee Santantonio', '1', 0, '2024-05-18 06:10:35', '2024-05-18 06:10:35', NULL),
(25, 2413, 'Annabellah', 'hdcqqmcjpc.qj@rightbliss.beauty', 'Annabellah Calvary', '1', 0, '2024-05-18 20:28:19', '2024-05-18 20:28:19', NULL),
(26, 2413, 'Aisla', 'hbqdwpwbww.qj@rightbliss.beauty', 'Aisla Ihle-hansen', '1', 0, '2024-05-19 23:38:12', '2024-05-19 23:38:12', NULL),
(27, 2413, 'Ilfar', 'hbcwbcqqjj.qj@rightbliss.beauty', 'Ilfar Sydanmaanlakka', '1', 0, '2024-05-21 05:25:37', '2024-05-21 05:25:37', NULL),
(28, 2413, 'Alaynnah', 'hchhhdtcqh.qj@rightbliss.beauty', 'Alaynnah Cuaquira reina', '1', 0, '2024-05-22 11:57:04', '2024-05-22 11:57:04', NULL),
(29, 2413, 'Sthephanie', 'hcdmjwdwcw.qj@rightbliss.beauty', 'Sthephanie Brendemuehl', '1', 0, '2024-05-23 02:50:59', '2024-05-23 02:50:59', NULL),
(30, 2413, 'Mural', 'hcpbmhcqhd.qj@rightbliss.beauty', 'Mural Mirfakhrai', '1', 0, '2024-05-23 23:32:04', '2024-05-23 23:32:04', NULL),
(31, 2413, 'Edony', 'hpjhpcptwj.qj@rightbliss.beauty', 'Edony Borella', '1', 0, '2024-05-25 07:03:45', '2024-05-25 07:03:45', NULL),
(32, 2413, 'Celisha', 'hphmcjwctc.qj@rightbliss.beauty', 'Celisha Feibel', '1', 0, '2024-05-26 12:38:13', '2024-05-26 12:38:13', NULL),
(34, 2413, 'Cirsten', 'hwtcmptccj.qj@rightbliss.beauty', 'Cirsten Torbati', '1', 0, '2024-05-31 17:13:24', '2024-05-31 17:13:24', NULL),
(35, 2413, 'Shaneese', 'hmqpdmpdhw.qj@rightbliss.beauty', 'Shaneese Wohlfeiler altavilla', '1', 0, '2024-06-04 16:53:42', '2024-06-04 16:53:42', NULL),
(36, 2413, 'Onur', 'hmpqqpmmdj.qj@rightbliss.beauty', 'Onur Kanjugovic', '1', 0, '2024-06-07 13:38:30', '2024-06-07 13:38:30', NULL),
(37, 2413, 'Ngozichukwu', 'tjhdwchdbh.qt@rightbliss.beauty', 'Ngozichukwu Carrachino', '1', 0, '2024-06-10 05:15:43', '2024-06-10 05:15:43', NULL),
(38, 2413, 'Eller', 'tjbqpjtpjw.qt@rightbliss.beauty', 'Eller Pakdil', '1', 0, '2024-06-11 12:48:16', '2024-06-11 12:48:16', NULL),
(39, 2413, 'Amaira', 'tqjbtwchhj.qj@rightbliss.beauty', 'Amaira Mauruschat', '1', 0, '2024-06-14 09:12:35', '2024-06-14 09:12:35', NULL),
(40, 2413, 'Chontelle', 'tqbmjcwpth.qj@rightbliss.beauty', 'Chontelle Kriebel', '1', 0, '2024-06-17 17:36:25', '2024-06-17 17:36:25', NULL),
(41, 2413, 'Elizet', 'tqwbmjmmww.qj@rightbliss.beauty', 'Elizet Meineri', '1', 0, '2024-06-19 14:11:46', '2024-06-19 14:11:46', NULL),
(42, 2413, 'Jarib', 'thqhpbqhdd.qj@silesia.life', 'Jarib Legon', '1', 0, '2024-06-20 23:36:43', '2024-06-20 23:36:43', NULL),
(43, 2413, 'Navan', 'thccdttpbc.qj@silesia.life', 'Navan Dieltiens', '1', 0, '2024-06-23 09:23:03', '2024-06-23 09:23:03', NULL),
(44, 2413, 'Arybella', 'thmthpbjqh.qj@silesia.life', 'Arybella Clayberg', '1', 0, '2024-06-24 15:31:00', '2024-06-24 15:31:00', NULL),
(45, 2413, 'Navidad', 'tthjqqchcw.qj@silesia.life', 'Navidad Mendrick', '1', 0, '2024-06-26 05:43:49', '2024-06-26 05:43:49', NULL),
(46, 2413, 'Saveion', 'ttptpmwpwj.qj@silesia.life', 'Saveion Charity', '1', 0, '2024-06-30 09:06:28', '2024-06-30 09:06:28', NULL),
(47, 2413, 'Ernesta', 'tdjjcdjjtc.qj@silesia.life', 'Ernesta Mwapachu', '1', 0, '2024-07-02 03:55:53', '2024-07-02 03:55:53', NULL),
(48, 2413, 'Netta', 'tdhpdwqhmh.qj@silesia.life', 'Netta Towler', '1', 0, '2024-07-04 05:35:51', '2024-07-04 05:35:51', NULL),
(49, 2413, 'Carmina', 'tdbdthhbdw.qj@silesia.life', 'Carmina Ruckel', '1', 0, '2024-07-05 22:46:44', '2024-07-05 22:46:44', NULL),
(50, 2413, 'Deveyon', 'tdwqqctwjd.qj@silesia.life', 'Deveyon Dhindsa', '1', 0, '2024-07-07 15:23:10', '2024-07-07 15:23:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
