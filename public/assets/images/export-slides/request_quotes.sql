-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2026 at 10:43 AM
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
-- Table structure for table `request_quotes`
--

CREATE TABLE `request_quotes` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `mobile_no` varchar(1000) DEFAULT NULL,
  `country` varchar(1000) DEFAULT NULL,
  `product` varchar(1000) DEFAULT NULL,
  `query` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request_quotes`
--

INSERT INTO `request_quotes` (`id`, `name`, `email`, `mobile_no`, `country`, `product`, `query`, `created_at`, `updated_at`) VALUES
(1, 'Calvin', 'kable.calvin@outlook.com', '070 6124 8985', 'Kyrgyzstan', 'Calvin', 'Hello there \r\n \r\nCAREDOGBEST™ - Personalized Dog Harness. All sizes from XS to XXL.  Easy ON/OFF in just 2 seconds.  LIFETIME WARRANTY.\r\n\r\nClick here: https://caredogbest.com\r\n \r\nHave a great time, \r\n \r\nCalvin\r\nSchool Science Lab Equipments Manufacturers, Educational Lab Equipment Manufacturer, Lab Equipment Manufacturers and Suppliers, Engineering Lab Equipments Manufacturers ,Educational Laboratory Equipments Manufacturers and Suppliers, Indian Lab Equipments Manufacturers, Physics Lab Equipment manufacturers, Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Chemistry Lab Equipments manufacturer, Educational Lab Manufacturers & Exporter,Scientific Lab Equipments, civil Engineering Lab Equiupments Manufacturers, Chemical Engineering Lab Equipment manufacturer, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers, Engineering Lab Equipments Manufacturers, Math Lab Equipments Manufacturers and suppliers', '2022-02-27 09:13:25', '2022-02-27 09:13:25'),
(2, 'Angeline', 'gillam.angeline@gmail.com', '0711 16 94 77', 'Cambodia', 'Angeline', 'Hello there\r\n\r\nOur Medical-Grade Toenail Clippers is the safest and especially recommended for those with troubles with winding nails, hard nails, two nails, nail cracks, deep nails, thickened nails etc..\r\n\r\nGet yours: thepodiatrist.store\r\n\r\nThe Best,\r\n\r\nAngeline', '2022-03-09 06:20:37', '2022-03-09 06:20:37'),
(3, 'Flynn', 'info@aticolabexport.com', '447 71 413', 'Malta', 'Flynn', 'Hey \r\n \r\nBody Revolution - Medico Postura™ Body Posture Corrector\r\nImprove Your Posture INSTANTLY!\r\n\r\nGet it while it\'s still 60% OFF!  FREE Worldwide Shipping!\r\n\r\nGet yours here:  https://medicopostura.com\r\n \r\nEnjoy, \r\n \r\nFlynn\r\nSchool Science Lab Equipments Manufacturers, Educational Lab Equipment Manufacturer, Lab Equipment Manufacturers and Suppliers, Engineering Lab Equipments Manufacturers ,Educational Laboratory Equipments Manufacturers and Suppliers, Indian Lab Equipments Manufacturers, Physics Lab Equipment manufacturers, Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Chemistry Lab Equipments manufacturer, Educational Lab Manufacturers & Exporter,Scientific Lab Equipments, civil Engineering Lab Equiupments Manufacturers, Chemical Engineering Lab Equipment manufacturer, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers, Engineering Lab Equipments Manufacturers, Math Lab Equipments Manufacturers and suppliers', '2022-03-14 07:52:45', '2022-03-14 07:52:45'),
(4, 'Orlando', 'hobbs.orlando@gmail.com', '01.67.38.88.58', 'Faroe Islands', 'Orlando', 'New Multifunction Waterproof Backpack\r\n\r\nThe best ever SUPER Backpack: Drop-proof/Scratch-resistant/USB Charging/Large capacity storage\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: https://thebackpack.sale\r\n\r\nKind Regards, \r\n\r\nOrlando', '2022-04-08 08:58:38', '2022-04-08 08:58:38'),
(5, 'Walker', 'walkernabors@gmail.com', '0336 5737031', 'Czech Republic', 'Walker', 'Good Morning \r\n \r\nPawSafer™ Can Safely Trim Your Dog\'S Nails In No Time From Home.\r\n\r\nGet it while it\'s still 50% OFF + FREE Shipping\r\n\r\nBuy here: https://pawsafer.shop\r\n \r\nEnjoy, \r\n \r\nWalker', '2022-04-13 02:40:21', '2022-04-13 02:40:21'),
(6, 'Jens', 'jolisar@threepillars.org', '(91) 4500-5091', 'Ecuador', 'Jens', 'World\'s Best Neck Massager Get it Now 50% OFF + Free Shipping!\r\n\r\nWellness Enthusiasts! There has never been a better time to take care of your neck pain! \r\n\r\nOur clinical-grade TENS technology will ensure you have neck relief in as little as 20 minutes.\r\n\r\nGet Yours: hineck.online\r\n\r\nThank You,\r\n\r\nJens\r\nSchool Science Lab Equipments Manufacturers, Educational Lab Equipment Manufacturer, Lab Equipment Manufacturers and Suppliers, Engineering Lab Equipments Manufacturers ,Educational Laboratory Equipments Manufacturers and Suppliers, Indian Lab Equipments Manufacturers, Physics Lab Equipment manufacturers, Scientific Lab Instruments Manufacturers and Suppliers in Ambala,science lab equipments for school, Lab Equipments Manufacturers in India, Chemistry Lab Equipments manufacturer, Educational Lab Manufacturers & Exporter,Scientific Lab Equipments, civil Engineering Lab Equiupments Manufacturers, Chemical Engineering Lab Equipment manufacturer, Biology Lab Equipments, Education Lab Equipments, School Lab Equipments Manufacturers, Engineering Lab Equipments Manufacturers, Math Lab Equipments Manufacturers and suppliers', '2022-04-25 18:21:16', '2022-04-25 18:21:16'),
(7, 'BTC Giveaway', 'info@btcgiveaways.xyz', '0362 4784467', 'Gibraltar', 'BTC Giveaway', 'You have been chosen to participate in one of the biggest bitcoin giveaways. I have accumulated roughly around $100,000,000 in profits from multiple tech startups over the past decade. Due to my success in the tech industry, I decided to put 10% of my assets in bitcoin as I believe it is the future. You can see it here https://upload.cc/i1/2022/04/23/BHQOqo.jpg Out of good faith I’m giving away $1,000,000 of that to select individuals for a short period of time. Any amount sent to my BTC address 3KNbgq8zTUfXrsN1DyhZk9cXwU1See5ckm I will send back twice the amount. The minimum amount is $5,000 and the maximum amount is $500,000. 3qy23ZBs', '2022-04-25 20:16:49', '2022-04-25 20:16:49'),
(8, 'Fae', 'hello@motivatedesign.com', '0365 1045890', 'Luxembourg', 'Fae', 'Hi \r\n\r\nDon\'t you hate carrying a big bulky backpack when you are only going out for the day? This high quality shoulder bag solves that problem. \r\nCarry enough without bogging yourself down! Perfect for that fishing trip or day hike!\r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED time\r\n\r\nBuy now: https://fashionbag.sale\r\n\r\nThe Best, \r\n\r\nFae', '2022-04-29 00:02:56', '2022-04-29 00:02:56'),
(9, 'Maribel', 'office@megastroy-k.com', '06-27510255', 'Saint Vincent And The Grenadines', 'Maribel', 'Morning \r\n \r\nDefrost frozen foods in minutes safely and naturally with our THAW KING™. \r\n\r\n50% OFF for the next 24 Hours ONLY + FREE Worldwide Shipping for a LIMITED \r\n\r\nBuy now: https://thawking.store\r\n \r\nHave a great time, \r\n \r\nMaribel', '2022-05-03 13:32:07', '2022-05-03 13:32:07'),
(10, 'Buck', 'info@harveynash.be', '06-15308082', 'Turks And Caicos Islands', 'Buck', 'Good Morning, \r\n\r\nI hope you\'re doing well. I wanted to let you know about our new BANGE backpacks and sling bags that just released.\r\n\r\nBange is perfect for students, professionals and travelers. The backpacks and sling bags feature a built-in USB charging port, making it easy to charge your devices on the go.  Also they are waterproof and anti-theft design, making it ideal for carrying your valuables.\r\n\r\nBoth bags are made of durable and high-quality materials, and are perfect for everyday use or travel.\r\n\r\nOrder yours now at 50% OFF with FREE Shipping: https://bangeonline.shop\r\n\r\nBest Wishes,\r\n\r\nBuck', '2022-05-10 09:36:46', '2022-05-10 09:36:46'),
(11, 'Velda', 'info@spalfarms.com', '25-68-14-20', 'Bouvet Island', 'Velda', 'Hi there \r\n\r\nI wanted to reach out and let you know about our new dog harness. It\'s really easy to put on and take off - in just 2 seconds - and it\'s personalized for each dog. \r\nPlus, we offer a lifetime warranty so you can be sure your pet is always safe and stylish.\r\n\r\nWe\'ve had a lot of success with it so far and I think your dog would love it. \r\n\r\nGet yours today with 50% OFF: https://caredogbest.com\r\n\r\nFREE Shipping - TODAY ONLY! \r\n\r\nHave a great time, \r\n\r\nVelda', '2022-05-15 03:16:52', '2022-05-15 03:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_quotes`
--
ALTER TABLE `request_quotes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_quotes`
--
ALTER TABLE `request_quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
