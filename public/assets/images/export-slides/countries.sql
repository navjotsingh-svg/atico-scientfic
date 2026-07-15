-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2026 at 10:39 AM
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
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `phone_length` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `phone_length`) VALUES
(1, 'AF', 'Afghanistan', 93, NULL),
(2, 'AL', 'Albania', 355, NULL),
(3, 'DZ', 'Algeria', 213, NULL),
(4, 'AS', 'American Samoa', 1684, NULL),
(5, 'AD', 'Andorra', 376, NULL),
(6, 'AO', 'Angola', 244, NULL),
(7, 'AI', 'Anguilla', 1264, NULL),
(8, 'AQ', 'Antarctica', 0, NULL),
(9, 'AG', 'Antigua And Barbuda', 1268, NULL),
(10, 'AR', 'Argentina', 54, NULL),
(11, 'AM', 'Armenia', 374, NULL),
(12, 'AW', 'Aruba', 297, NULL),
(13, 'AU', 'Australia', 61, NULL),
(14, 'AT', 'Austria', 43, NULL),
(15, 'AZ', 'Azerbaijan', 994, NULL),
(16, 'BS', 'Bahamas The', 1242, NULL),
(17, 'BH', 'Bahrain', 973, NULL),
(18, 'BD', 'Bangladesh', 880, NULL),
(19, 'BB', 'Barbados', 1246, NULL),
(20, 'BY', 'Belarus', 375, NULL),
(21, 'BE', 'Belgium', 32, NULL),
(22, 'BZ', 'Belize', 501, NULL),
(23, 'BJ', 'Benin', 229, NULL),
(24, 'BM', 'Bermuda', 1441, NULL),
(25, 'BT', 'Bhutan', 975, NULL),
(26, 'BO', 'Bolivia', 591, NULL),
(27, 'BA', 'Bosnia and Herzegovina', 387, NULL),
(28, 'BW', 'Botswana', 267, NULL),
(29, 'BV', 'Bouvet Island', 0, NULL),
(30, 'BR', 'Brazil', 55, NULL),
(31, 'IO', 'British Indian Ocean Territory', 246, NULL),
(32, 'BN', 'Brunei', 673, NULL),
(33, 'BG', 'Bulgaria', 359, NULL),
(34, 'BF', 'Burkina Faso', 226, NULL),
(35, 'BI', 'Burundi', 257, NULL),
(36, 'KH', 'Cambodia', 855, NULL),
(37, 'CM', 'Cameroon', 237, NULL),
(38, 'CA', 'Canada', 1, NULL),
(39, 'CV', 'Cape Verde', 238, NULL),
(40, 'KY', 'Cayman Islands', 1345, NULL),
(41, 'CF', 'Central African Republic', 236, NULL),
(42, 'TD', 'Chad', 235, NULL),
(43, 'CL', 'Chile', 56, NULL),
(44, 'CN', 'China', 86, NULL),
(45, 'CX', 'Christmas Island', 61, NULL),
(46, 'CC', 'Cocos (Keeling) Islands', 672, NULL),
(47, 'CO', 'Colombia', 57, NULL),
(48, 'KM', 'Comoros', 269, NULL),
(49, 'CG', 'Congo', 242, NULL),
(50, 'CD', 'Congo The Democratic Republic Of The', 242, NULL),
(51, 'CK', 'Cook Islands', 682, NULL),
(52, 'CR', 'Costa Rica', 506, NULL),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, NULL),
(54, 'HR', 'Croatia (Hrvatska)', 385, NULL),
(55, 'CU', 'Cuba', 53, NULL),
(56, 'CY', 'Cyprus', 357, NULL),
(57, 'CZ', 'Czech Republic', 420, NULL),
(58, 'DK', 'Denmark', 45, NULL),
(59, 'DJ', 'Djibouti', 253, NULL),
(60, 'DM', 'Dominica', 1767, NULL),
(61, 'DO', 'Dominican Republic', 1809, NULL),
(62, 'TP', 'East Timor', 670, NULL),
(63, 'EC', 'Ecuador', 593, NULL),
(64, 'EG', 'Egypt', 20, NULL),
(65, 'SV', 'El Salvador', 503, NULL),
(66, 'GQ', 'Equatorial Guinea', 240, NULL),
(67, 'ER', 'Eritrea', 291, NULL),
(68, 'EE', 'Estonia', 372, NULL),
(69, 'ET', 'Ethiopia', 251, NULL),
(70, 'XA', 'External Territories of Australia', 61, NULL),
(71, 'FK', 'Falkland Islands', 500, NULL),
(72, 'FO', 'Faroe Islands', 298, NULL),
(73, 'FJ', 'Fiji Islands', 679, NULL),
(74, 'FI', 'Finland', 358, NULL),
(75, 'FR', 'France', 33, NULL),
(76, 'GF', 'French Guiana', 594, NULL),
(77, 'PF', 'French Polynesia', 689, NULL),
(78, 'TF', 'French Southern Territories', 0, NULL),
(79, 'GA', 'Gabon', 241, NULL),
(80, 'GM', 'Gambia The', 220, NULL),
(81, 'GE', 'Georgia', 995, NULL),
(82, 'DE', 'Germany', 49, NULL),
(83, 'GH', 'Ghana', 233, NULL),
(84, 'GI', 'Gibraltar', 350, NULL),
(85, 'GR', 'Greece', 30, NULL),
(86, 'GL', 'Greenland', 299, NULL),
(87, 'GD', 'Grenada', 1473, NULL),
(88, 'GP', 'Guadeloupe', 590, NULL),
(89, 'GU', 'Guam', 1671, NULL),
(90, 'GT', 'Guatemala', 502, NULL),
(91, 'XU', 'Guernsey and Alderney', 44, NULL),
(92, 'GN', 'Guinea', 224, NULL),
(93, 'GW', 'Guinea-Bissau', 245, NULL),
(94, 'GY', 'Guyana', 592, NULL),
(95, 'HT', 'Haiti', 509, NULL),
(96, 'HM', 'Heard and McDonald Islands', 0, NULL),
(97, 'HN', 'Honduras', 504, NULL),
(98, 'HK', 'Hong Kong S.A.R.', 852, NULL),
(99, 'HU', 'Hungary', 36, NULL),
(100, 'IS', 'Iceland', 354, NULL),
(101, 'IN', 'India', 91, NULL),
(102, 'ID', 'Indonesia', 62, NULL),
(103, 'IR', 'Iran', 98, NULL),
(104, 'IQ', 'Iraq', 964, NULL),
(105, 'IE', 'Ireland', 353, NULL),
(106, 'IL', 'Israel', 972, NULL),
(107, 'IT', 'Italy', 39, NULL),
(108, 'JM', 'Jamaica', 1876, NULL),
(109, 'JP', 'Japan', 81, NULL),
(110, 'XJ', 'Jersey', 44, NULL),
(111, 'JO', 'Jordan', 962, NULL),
(112, 'KZ', 'Kazakhstan', 7, NULL),
(113, 'KE', 'Kenya', 254, NULL),
(114, 'KI', 'Kiribati', 686, NULL),
(115, 'KP', 'Korea North', 850, NULL),
(116, 'KR', 'Korea South', 82, NULL),
(117, 'KW', 'Kuwait', 965, NULL),
(118, 'KG', 'Kyrgyzstan', 996, NULL),
(119, 'LA', 'Laos', 856, NULL),
(120, 'LV', 'Latvia', 371, NULL),
(121, 'LB', 'Lebanon', 961, NULL),
(122, 'LS', 'Lesotho', 266, NULL),
(123, 'LR', 'Liberia', 231, NULL),
(124, 'LY', 'Libya', 218, NULL),
(125, 'LI', 'Liechtenstein', 423, NULL),
(126, 'LT', 'Lithuania', 370, NULL),
(127, 'LU', 'Luxembourg', 352, NULL),
(128, 'MO', 'Macau S.A.R.', 853, NULL),
(129, 'MK', 'Macedonia', 389, NULL),
(130, 'MG', 'Madagascar', 261, NULL),
(131, 'MW', 'Malawi', 265, NULL),
(132, 'MY', 'Malaysia', 60, NULL),
(133, 'MV', 'Maldives', 960, NULL),
(134, 'ML', 'Mali', 223, NULL),
(135, 'MT', 'Malta', 356, NULL),
(136, 'XM', 'Man (Isle of)', 44, NULL),
(137, 'MH', 'Marshall Islands', 692, NULL),
(138, 'MQ', 'Martinique', 596, NULL),
(139, 'MR', 'Mauritania', 222, NULL),
(140, 'MU', 'Mauritius', 230, NULL),
(141, 'YT', 'Mayotte', 269, NULL),
(142, 'MX', 'Mexico', 52, NULL),
(143, 'FM', 'Micronesia', 691, NULL),
(144, 'MD', 'Moldova', 373, NULL),
(145, 'MC', 'Monaco', 377, NULL),
(146, 'MN', 'Mongolia', 976, NULL),
(147, 'MS', 'Montserrat', 1664, NULL),
(148, 'MA', 'Morocco', 212, NULL),
(149, 'MZ', 'Mozambique', 258, NULL),
(150, 'MM', 'Myanmar', 95, NULL),
(151, 'NA', 'Namibia', 264, NULL),
(152, 'NR', 'Nauru', 674, NULL),
(153, 'NP', 'Nepal', 977, NULL),
(154, 'AN', 'Netherlands Antilles', 599, NULL),
(155, 'NL', 'Netherlands The', 31, NULL),
(156, 'NC', 'New Caledonia', 687, NULL),
(157, 'NZ', 'New Zealand', 64, NULL),
(158, 'NI', 'Nicaragua', 505, NULL),
(159, 'NE', 'Niger', 227, NULL),
(160, 'NG', 'Nigeria', 234, NULL),
(161, 'NU', 'Niue', 683, NULL),
(162, 'NF', 'Norfolk Island', 672, NULL),
(163, 'MP', 'Northern Mariana Islands', 1670, NULL),
(164, 'NO', 'Norway', 47, NULL),
(165, 'OM', 'Oman', 968, NULL),
(166, 'PK', 'Pakistan', 92, NULL),
(167, 'PW', 'Palau', 680, NULL),
(168, 'PS', 'Palestinian Territory Occupied', 970, NULL),
(169, 'PA', 'Panama', 507, NULL),
(170, 'PG', 'Papua new Guinea', 675, NULL),
(171, 'PY', 'Paraguay', 595, NULL),
(172, 'PE', 'Peru', 51, NULL),
(173, 'PH', 'Philippines', 63, NULL),
(174, 'PN', 'Pitcairn Island', 0, NULL),
(175, 'PL', 'Poland', 48, NULL),
(176, 'PT', 'Portugal', 351, NULL),
(177, 'PR', 'Puerto Rico', 1787, NULL),
(178, 'QA', 'Qatar', 974, NULL),
(179, 'RE', 'Reunion', 262, NULL),
(180, 'RO', 'Romania', 40, NULL),
(181, 'RU', 'Russia', 70, NULL),
(182, 'RW', 'Rwanda', 250, NULL),
(183, 'SH', 'Saint Helena', 290, NULL),
(184, 'KN', 'Saint Kitts And Nevis', 1869, NULL),
(185, 'LC', 'Saint Lucia', 1758, NULL),
(186, 'PM', 'Saint Pierre and Miquelon', 508, NULL),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, NULL),
(188, 'WS', 'Samoa', 684, NULL),
(189, 'SM', 'San Marino', 378, NULL),
(190, 'ST', 'Sao Tome and Principe', 239, NULL),
(191, 'SA', 'Saudi Arabia', 966, NULL),
(192, 'SN', 'Senegal', 221, NULL),
(193, 'RS', 'Serbia', 381, NULL),
(194, 'SC', 'Seychelles', 248, NULL),
(195, 'SL', 'Sierra Leone', 232, NULL),
(196, 'SG', 'Singapore', 65, NULL),
(197, 'SK', 'Slovakia', 421, NULL),
(198, 'SI', 'Slovenia', 386, NULL),
(199, 'XG', 'Smaller Territories of the UK', 44, NULL),
(200, 'SB', 'Solomon Islands', 677, NULL),
(201, 'SO', 'Somalia', 252, NULL),
(202, 'ZA', 'South Africa', 27, NULL),
(203, 'GS', 'South Georgia', 0, NULL),
(204, 'SS', 'South Sudan', 211, NULL),
(205, 'ES', 'Spain', 34, NULL),
(206, 'LK', 'Sri Lanka', 94, NULL),
(207, 'SD', 'Sudan', 249, NULL),
(208, 'SR', 'Suriname', 597, NULL),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, NULL),
(210, 'SZ', 'Swaziland', 268, NULL),
(211, 'SE', 'Sweden', 46, NULL),
(212, 'CH', 'Switzerland', 41, NULL),
(213, 'SY', 'Syria', 963, NULL),
(214, 'TW', 'Taiwan', 886, NULL),
(215, 'TJ', 'Tajikistan', 992, NULL),
(216, 'TZ', 'Tanzania', 255, NULL),
(217, 'TH', 'Thailand', 66, NULL),
(218, 'TG', 'Togo', 228, NULL),
(219, 'TK', 'Tokelau', 690, NULL),
(220, 'TO', 'Tonga', 676, NULL),
(221, 'TT', 'Trinidad And Tobago', 1868, NULL),
(222, 'TN', 'Tunisia', 216, NULL),
(223, 'TR', 'Turkey', 90, NULL),
(224, 'TM', 'Turkmenistan', 7370, NULL),
(225, 'TC', 'Turks And Caicos Islands', 1649, NULL),
(226, 'TV', 'Tuvalu', 688, NULL),
(227, 'UG', 'Uganda', 256, NULL),
(228, 'UA', 'Ukraine', 380, NULL),
(229, 'AE', 'United Arab Emirates', 971, NULL),
(230, 'GB', 'United Kingdom', 44, NULL),
(231, 'US', 'United States', 1, NULL),
(232, 'UM', 'United States Minor Outlying Islands', 1, NULL),
(233, 'UY', 'Uruguay', 598, NULL),
(234, 'UZ', 'Uzbekistan', 998, NULL),
(235, 'VU', 'Vanuatu', 678, NULL),
(236, 'VA', 'Vatican City State (Holy See)', 39, NULL),
(237, 'VE', 'Venezuela', 58, NULL),
(238, 'VN', 'Vietnam', 84, NULL),
(239, 'VG', 'Virgin Islands (British)', 1284, NULL),
(240, 'VI', 'Virgin Islands (US)', 1340, NULL),
(241, 'WF', 'Wallis And Futuna Islands', 681, NULL),
(242, 'EH', 'Western Sahara', 212, NULL),
(243, 'YE', 'Yemen', 967, NULL),
(244, 'YU', 'Yugoslavia', 38, NULL),
(245, 'ZM', 'Zambia', 260, NULL),
(246, 'ZW', 'Zimbabwe', 263, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
