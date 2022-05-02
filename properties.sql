-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2022 at 12:46 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkerte_essentialyfe`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bedroom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `bathroom` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `guest` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `sqft` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1200) COLLATE utf8_unicode_ci NOT NULL,
  `vacation` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `venue` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `film` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `ltfr` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `pool` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `name`, `address`, `area`, `price`, `bedroom`, `bathroom`, `guest`, `sqft`, `description`, `image`, `vacation`, `venue`, `film`, `ltfr`, `pool`, `reg_date`) VALUES
(46, 'The Oceanus One', '7911 Oceanus Dr                              ', 'Hollywood Hills, CA                          ', '$-----', '5', '5.5', '12', '4,944', 'Unassigned Description', 'The Oceanus (3).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-17 23:14:22'),
(47, 'The Anzio One', '11037 Anzio Rd, Los Angeles, CA 90077        ', 'Bel Air, CA       ', '$----', '8', '11', '20', '10,800', 'Unassigned Description', 'Anzio - Bel Air, 8 bd, 11 ba, 10,800sqft, Double gated, private tennis court, office, sun room, wine cellar, breakfast area, formal entry, gym, home theatre, card room. -92.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:00:14'),
(48, 'The Sunset Plaza One', '1232 Sunset Plaza Dr, Los Angeles, CA 90069  ', 'Beverly Hills, CA', '$----', '7', '8', '16', '13,000', 'Unassigned Description', 'sunset plaza (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-11 22:20:33'),
(50, 'The Appian One', '8765 Appian Way, Los Angeles, CA 90046       ', 'Beverly Hills , CA     ', '$----', '5', '6', '10', '4,809', 'Unassigned Description', 'fb4a9b296f9e0ddace46ed48e5e82121-d_d_cropped (32)_cropped (32).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:02:06'),
(52, 'The Arden One', '511 N Arden Dr, Beverly Hills, CA 90210      ', 'Beverly Hills, CA    ', '$----', '6', '9', '15', '9,304', 'Unassigned Description', '2.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 23:57:16'),
(53, 'The Bellagio One', ' 11647 Bellagio Rd, Los Angeles, CA 90049    ', 'Bel Air, CA   ', '$45,000', '8', '7', '16', '4,800', 'Unassigned Description', '007.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:05:51'),
(54, 'The Beverly Park One', '70 Beverly Park, Beverly Hills, CA 90210     ', 'Beverly Park, CA', '$----', '7', '10', '17', '14,000', 'Unassigned Description', '001.webp', '', 'on', 'on', 'on', 'Y', '2022-03-11 22:24:32'),
(55, 'The Blue Jay Two', '1506 Blue Jay Way, Los Angeles, CA 90069     ', 'Hollywood Hills, CA     ', '$----', '4', '4', '8', '3,891', 'Unassigned Description', 'DSC07095.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:08:48'),
(56, 'The Carla Ridge One', '   ', 'Beverly Hills, CA   ', '$----', '4', '4', '10', '3,281', 'Unassigned Description', 'Carla Ridge - Beverly Hills, 4 Bd, 5 Ba, 4,281 SF, Modern, Pool, Open Floor Plan, Stunning Views, Private-Gated-2.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:09:14'),
(57, 'The Carla Ridge Two', '1705 Carla Rdg, Beverly Hills, CA 90210    ', 'Beverly Hills, CA    ', '$----', '5', '7', '11', '6,500', 'Unassigned Description', '0004.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:10:25'),
(58, 'The Carla Ridge Three', '1620 Carla Rdg, Beverly Hills, CA 90210   ', 'Beverly Hills, CA   ', '$----', '6', '8', '12', '9,393', 'Unassigned Description', '001 (1).webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:10:37'),
(59, 'The Chandler One', '13918 Chandler Blvd, Van Nuys, CA 91401   ', 'Sherman Oaks, CA   ', '$----', '7', '7', '14', '7,236', 'Unassigned Description', 'SO-17.jpg', '', 'on', 'on', '', 'Y', '2022-03-11 22:26:41'),
(60, 'The Chandler Two', '13340 Chandler Blvd, Van Nuys, CA 91401  ', 'Sherman Oaks, CA  ', '$----', '6', '8', '12', '6,000', '', '0054.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:13:48'),
(61, 'The Cherokee One', '829 N Cherokee Ave, Los Angeles, CA 90038  ', 'Hollywood, CA  ', '$----', '5', '6', '10', '4,565', 'Unassigned Description', '006.webp', '', 'on', 'on', '', 'Y', '2022-03-09 19:15:33'),
(62, 'The Coldwater One', '2819 Coldwater Canyon Dr, Beverly Hills, CA 9', 'Beverly Hills, CA  ', '$----', '4', '5', '9', '4,775', 'Unassigned Description', '079.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:16:51'),
(63, 'The Huston One', '11146 Huston St, North Hollywood, CA 91601  ', 'Studio City, CA  ', '$----', '2', '1', '4', '1,653', 'Unassigned Description', '001 (2).webp', 'on', '', 'on', 'on', 'N', '2022-03-09 19:18:08'),
(64, 'The Otsego One', '14729 Otsego St, Sherman Oaks, CA 91403     ', 'Sherman Oaks, CA     ', '$----', '5', '5', '10', '4,0000', 'Unassigned Description', '0020.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 22:00:51'),
(65, 'The Leghorn One', '5344 Leghorn Ave, Van Nuys, CA 91401         ', 'Sherman Oaks, CA         ', '$----', '9', '10', '19', '9,410', 'Unassigned Description', '_MG_1624skalicky  .jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:20:07'),
(66, 'The Dawnridge One', '1414 Dawnridge Dr, Beverly Hills, CA 90210   ', 'Beverly Hills, CA    ', '$----', '5', '6', '10', '4,582', 'Unassigned Description', 'Dawnridge Dr - Beverly Hills, 5 Bedroom, 7 Bathroom, Rooftop, BBQ, Views, Multi-level-32.jpg', 'on', 'on', 'on', 'on', 'N', '2022-03-09 19:22:37'),
(67, 'The Doheny One', '1814 N Doheny Dr, Los Angeles, CA 90069  ', 'Beverly Hills, CA  ', '$----', '5', '7', '10', '8,290', 'Unassigned Description', '1814Marcheeta-mls-b.jpg', '', 'on', 'on', '', 'Y', '2022-03-09 19:23:44'),
(68, 'The Wallace One', '1039 Wallace Rdg, Beverly Hills, CA 90210   ', 'Beverly Hills, CA   ', '$----', '3', '5', '6', '3,469', 'Unassigned Description', 'house8.jpg', '', 'on', 'on', '', 'Y', '2022-03-09 19:25:08'),
(69, 'The Dumetz One', '22254 Dumetz Rd, Woodland Hills, CA 91364   ', 'Woodland Hills, CA   ', '$----', '5', '4', '10', '3,984', 'Unassigned Description', '0046.jpg', '', 'on', 'on', '', 'Y', '2022-03-09 19:26:32'),
(70, 'The Hartford One', '903 Hartford Way, Beverly Hills, CA 90210  ', 'Beverly Hills, CA  ', '$----', '6', '10', '12', '7,638', 'Unassigned Description', '92436982-46bd-4bbe-8ff3-b6bdfd314fe1.webp', '', 'on', 'on', '', 'Y', '2022-03-09 19:28:03'),
(71, 'The Hercules Two', '2110 Hercules Dr, Los Angeles, CA 90046  ', 'Hollywood Hills, CA  ', '$----', '5', '5.5', '10', '6,300', 'Unassigned Description', 'Screenshot_4.png', '', 'on', 'on', '', 'Y', '2022-03-07 22:36:10'),
(72, 'The Hidden Valley One', '9476 Hidden Valley Pl, Beverly Hills, CA 9021', 'Beverly Hills, CA   ', '$----', '3', '2', '6', '2,388', 'Unassigned Description', 'Hidden Valley Pl - Beverly Hills, 3 Bd, 4 Ba, Newly Renovated, Large Backyard, Private, Mini Basketball, Putting Green, Gym-Office, Canyon Views-3.jpg', 'on', 'on', 'on', 'on', 'N', '2022-03-09 19:30:16'),
(73, 'The Chandler Three', '13348 Chandler Blvd, Van Nuys, CA 91401     ', 'Sherman Oaks, CA     ', '$----', '6', '6', '14', '4,719', 'Unassigned Description', 'SR20034103_29_1.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-14 00:38:18'),
(74, 'The Hutton One', 'Unassigned Address   ', 'Beverly Hills, CA   ', '$----', '8', '8', 'Unassigned Guests', '7,000', 'Unassigned Description', 'Hutton - Beverly Hills, 8 Bd, 8 Ba, 7,000 SF, Trophy Compound, Home Theater, Massage Room, Gym, Pool, Half Bball, Putting Green, 20-Car Motor Court, Gated Driveway -4.jpg', 'on', 'on', 'on', '', 'Y', '2022-03-08 01:02:27'),
(75, 'The Linda Flora One', '1201 Linda Flora Dr, Los Angeles, CA 90049   ', 'Bel Air, CA     ', '$----', '6', '8', '13', '9,297', 'Unassigned Description', 'BSS_6678.jpg', 'on', 'on', 'on', '', 'Y', '2022-03-09 19:34:06'),
(76, 'The Rexford One', 'Unassigned Address   ', 'Beverly Hills, CA   ', '$----', '8', '9', '18', '13,159', 'Unassigned Description', '1.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:31:20'),
(77, 'The Outpost One', '1805 Outpost Dr, Los Angeles, CA 90068  ', 'Hollywood Heights, CA  ', '$----', '5', '5', '10', '4,712', 'Unassigned Description', 'cf440d8b223667188e31766ac599af84-d_d.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:41:38'),
(78, 'The Rossmore One', '145 N Rossmore Ave, Los Angeles, CA 90004   ', 'Central LA, CA   ', '$----', '6', '6.5', '12', '8,163', 'Unassigned Description', '004.webp', '', 'on', 'on', '', 'Y', '2022-03-09 19:43:56'),
(79, 'The Sierra Alta One', '1307 Sierra Alta Way, Los Angeles, CA 90069  ', 'Beverly Hills, CA  ', '$----', '5', '10', '10', '13,820', 'Unassigned Description', '10.jpg', 'on', 'on', '', 'on', 'Y', '2022-03-09 19:45:25'),
(80, 'The Solar One', '2462 Solar Dr, Los Angeles, CA 90046  ', 'Hollywood Hills, CA  ', '$----', '7', '8.5', '14', '10,000', 'Unassigned Description', '1 (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 19:47:31'),
(81, 'The Sunset Plaza Two', '1653 Sunset Plaza Dr, West Hollywood, CA 9006', 'Hollywood Hills, CA  ', '$----', '3', '3.5', '6', '2,000', 'Unassigned Description', '01.jpeg', 'on', 'on', 'on', 'on', 'N', '2022-03-07 22:45:42'),
(82, 'The Sunset Plaza Four', '1717 Sunset Plaza Dr, Los Angeles, CA 90069  ', 'Hollywood Hills, CA    ', '$----', '4', '5', '8', '3,000', 'Unassigned Description', '01 (2).jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-11 21:31:52'),
(83, 'The Sunset Plaza Three', '2231 Sunset Plaza Dr, Los Angeles, CA 90069  ', 'Hollywood Hills, CA  ', '$----', '4.', '4.5', '8', '4,831', 'Unassigned Description', 'a6aa935948a7a2234f907ee9c5678ee6l-m3147155592xd-w1020_h770_q80.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 22:46:08'),
(84, 'The Addison One', '12549 Addison St, Valley Village, CA 91607   ', 'Sherman Village, CA   ', '$----', '8', '10', '18', '11,342', 'Unassigned Description', 'WhatsApp Image 2021-12-01 at 10.19.53 AM.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 23:41:32'),
(85, 'The Sadie One', '575 Sadie Rd, Topanga, CA 90290  ', 'Topanga, CA  ', '$----', '4', '3', '8', '', 'Unassigned Description', '002.jpg', 'on', '', '', 'on', 'Y', '2022-03-09 19:59:06'),
(93, 'The Rancho One', '3350 Rancho Del Monico Rd, Covina, CA 91724  ', 'Covina, CA ', '$----', '5', '10', '12', '8,130', 'Unassigned Description', 'Pool View 1.JPG', 'on', 'on', 'on', '', 'y', '2022-03-09 20:00:31'),
(94, 'The Wyton One', '10350 Wyton Dr, Los Angeles, CA 90024  ', 'Westwood, CA ', '$----', '7', '12', '16', '19,900', 'Unassigned Description', 'Backyard 2.png', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:02:11'),
(95, 'The Sunset Plaza Five', '1514 Sunset Plaza Dr, Los Angeles, CA 90069  ', 'Beverly Hills, CA', '$----', '4', '4', '8', '3,490', 'Unassigned Description', '003.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 23:04:32'),
(96, 'The Palm One', '527 N Palm Dr, Beverly Hills, CA 90210   ', 'Beverly Hills, CA ', '$----', '6', '10', '13', '11,438', 'Unassigned Description', '005.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:05:28'),
(97, 'The Copacabana One', '23427 W Copacabana St, Malibu, CA 90265  ', 'Malibu, CA ', '$----', '4', '3.5', 'Unassigned Guests', '3,604', 'Unassigned Description', 'Copacabana 007 (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:07:45'),
(98, 'The Nichols Canyon One', '2145 Nichols Canyon Rd, Los Angeles, CA 90046', 'Beverly Hills, CA  ', '$----', '4', '6', '8', '5,500', 'Unassigned Description', 'Canyon Masterpiece 044.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:11:13'),
(99, 'The Deep Dell One', '6446 Deep Dell Pl, Los Angeles, CA 90068', 'Hollywood Hills, CA', '$----', '7', '8', '16', '6,597', 'Unassigned Description', 'Deep Dell 2 - Hollywood Hills, 7BR, 8BA, 6597 Sq-ft, Spanish Style, Game Room, Theater, Rooftop Deck, Pool, Spa, View-69.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 23:12:21'),
(100, 'The Drexel One', '6406 Drexel Ave, Los Angeles, CA 90048', 'Fairfax, CA', '$----', '5', '5.5', '12', '3,889', 'Unassigned Description', '1 (2).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 23:17:31'),
(101, 'The Edinburgh One', '953 N Edinburgh Ave, Los Angeles, CA 90046', 'Westhollywood, CA', '$----', '4', '3', '10', '2,853', 'Unassigned Description', 'Edinburgh (57).jpg', 'on', 'on', 'on', 'on', 'N', '2022-03-07 23:22:28'),
(102, 'The Evanview One', '8835 Evanview Dr, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '6', '8', '14', '6,366', 'Unassigned Description', '108 Pool.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 23:34:56'),
(103, 'The Franklin Two', '8435 Franklin Ave, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '5', '5', '12', '3,205', 'Unassigned Description', '030.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-07 23:44:46'),
(104, 'The Franklin Three', '8575 Franklin Ave, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '3', '5', '6', '7,148', 'Unassigned Description', 'maxresdefault.jpg', '', 'on', 'on', '', 'Y', '2022-03-08 00:36:41'),
(106, 'The Achilles One', '2463 Achilles Dr, Los Angeles, CA 90046  ', 'Hollywood Hills, CA  ', '$----', '4', '5', '9', '4,727', 'Unassigned Description', '33 (2).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:22:12'),
(107, 'The Ives Place One', '1267 St Ives Pl, Los Angeles, CA ', 'Hollywood Hills, CA ', '$----', '3', '4', '10', '3,848', 'Unassigned Description', '11.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:24:16'),
(108, 'The Java Drive One', '13425 Java Dr, Beverly Hills, CA 90210 ', 'Beverly Hills, CA ', '$----', '3', '3', '10', '3,069', 'Unassigned Description', 'Thumbnail.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:25:48'),
(109, 'The La Jolla One', '808 N La Jolla Ave, Los Angeles, CA 90046 ', 'West Hollywood, CA ', '$----', '3', '4', '10', '4,335', 'Unassigned Description', 'La Jolla Ave - 03.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:27:10'),
(110, 'The La Jolla Two', '424 N La Jolla Ave, Los Angeles, CA ', 'West Hollywood, CA ', '$----', '4', '5', '10', 'Unassigned Sq. Ft', 'Unassigned Description', '005.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-09 20:28:23'),
(111, 'The Laurel Pass One', '2753 Laurel Pass, Los Angeles, CA 90046   ', 'Beverly Hills, CA   ', '$24,000', '3', '3', '8', '2,551', 'Unassigned Description', '006 (1).webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 18:48:17'),
(112, 'The Camden Two', '517 N Camden Dr, Beverly Hills, CA 90210  ', 'Beverly Hills, CA  ', '$----', '7', '9', '16', '11,000', 'Unassigned Description', '24.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-11 22:54:10'),
(113, 'The Harper Two', '523 N Harper Ave, Los Angeles, CA 90048  ', 'West Hollywood, CA  ', '$----', '5', '7', '12', '4,189', 'Unassigned Description', 'Harper 1 (48).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-17 20:55:33'),
(114, 'The Camden One | Coming Soon', '710 N Camden Dr, Beverly Hills, CA 9021 ', 'Beverly Hills, CA ', '$----', '----', '----', '----', '----', 'Unassigned Description', 'Camden Two.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-11 22:54:25'),
(115, 'The Maple One', '709 N Maple Dr, Beverly Hills, CA 90210', 'The Beverly Hills Flats', '$----', '8', '10', '17', '9,992', 'Unassigned Description', '2cbbda28f1435351ca1f2e453f34001d-uncropped_scaled_within_1536_1152.webp', '', 'on', 'on', '', 'Y', '2022-03-14 18:55:14'),
(116, 'The Carla Ridge Four', '1610 Carla Rdg, Beverly Hills, CA 90210 ', 'Beverly Hills, CA', '$----', '5', '5.5', '10', '4,376', 'Unassigned Description', '0.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:34:18'),
(117, 'The Mount Olympus Two', '2393 Mount Olympus Dr, Los Angeles, CA 90046 ', 'Hollywood Hills, CA', '$----', '5', '5', '12', '4,512', 'Unassigned Description', 'Mount Olympus 2 (9).webp', 'on', '', 'on', 'on', 'Y', '2022-03-15 19:43:19'),
(118, 'The Mulholland One', '13318 Mulholland Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '9', '10', '20', '10,000', 'Unassigned Description', '002.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 20:00:45'),
(119, 'The Mulholland Two', '13810 Mulholland Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '7', '10', '18', '15,000', 'Unassigned Description', 'DJI_0108.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 20:06:01'),
(120, 'The Mulholland Four', '15105 Mulholland Dr, Los Angeles, CA 90077', 'Bel Air, CA', '$----', '5', '8', '12', '10,463', 'Unassigned Description', 'The Mulholland Four (7).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 20:43:17'),
(121, 'The Ogden One', '735 N Ogden Dr, Los Angeles, CA 90046', 'West Hollywood, CA', '$----', '3', '2', '8', '1,680', 'Unassigned Description', 'Melrose - West Hollywood, 3 Bd, 2 Ba, 1,680 SF, Spanish Style, Large Yard, Guest House, Melrose Village-28.jpg', 'on', '', '', 'on', 'N', '2022-03-14 21:23:09'),
(122, 'The Ogden Two', '741 N Ogden Dr, Los Angeles, CA 90046', 'West Hollywood, CA', '$----', '3', '2.5', '8', '1,450', 'Unassigned Description', 'Ogden 2 (2).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 22:18:56'),
(123, 'The Orum One', '11490 Orum road, Bel Air, CA 90049  ', 'Bel Air, CA  ', '$----', '9', '15', '20', '18,850', 'Unassigned Description', '032.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:56:51'),
(124, 'The Palm Two', '614 N Palm Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '6', '11', '14', '8,457', 'Unassigned Description', '2ae196a4cb3706e786a361765f762c04-d_d.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 22:45:24'),
(125, 'The Robmar One', '1441 Robmar Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '7', '7.5', '16', '7,600', 'Unassigned Description', 'Robmar Mansion (64).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 22:54:12'),
(126, 'The Roscomare Two', '1801 Roscomare Rd, Los Angeles, CA 90077 ', 'Bel Air, CA ', '$----', '4', '5', '10', '2,972', 'Unassigned Description', 'Screenshot_1.png', 'on', 'on', 'on', 'on', 'Y', '2022-03-14 23:47:43'),
(127, 'The Roscomare Three', '2031 Roscomare Rd, Los Angeles, CA 90077', 'Bel Air, CA', '$----', '7', '8', '16', '8,125', 'Unassigned Description', 'The Roscomare Three (1).jpg', 'on', 'on', '', 'on', 'Y', '2022-03-15 00:58:08'),
(128, 'The Mulholland Three', '7218 Mulholland Dr, Los Angeles, CA 90068', 'Hollywood Hills, CA', '$----', '6', '9', '16', '7,135', 'Unassigned Description', 'The Mulholland Three (36).webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 01:20:34'),
(129, 'The San Marco One', '2407 N San Marco Dr, Los Angeles, CA 90068', 'East Hollywood Hills, CA', '$----', '3', '4.5', '8', '3,000', 'Unassigned Description', '23. Pool View.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 01:27:44'),
(130, 'The Shadow Hills Mansion', 'Unassigned Address', '----', '$----', '7', '10', '16', '9,645', 'Unassigned Description', 'Photo Sep 10, 2 28 51 PM.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 01:32:32'),
(131, 'The Shangri La One', '9914 Shangri La Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '6', '8', '14', '14,000', 'Unassigned Description', 'The Shangri La One (34).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 01:46:39'),
(132, 'The Crescent Two', '912 N Crescent Heights Blvd, Los Angeles, CA ', 'West Hollywood, CA', '$----', '4', '4', '10', '3,250', 'Unassigned Description', '046.psd.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:05:59'),
(133, 'The Cordell One', '9260 Cordell Dr, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '4', '4', '10', '3,091', 'Unassigned Description', 'Cordell Dr (7).webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:08:41'),
(134, 'The Gardner One', '----', '----', '$----', '5', '6', '12', '5,506', 'Unassigned Description', 'Gardner Modern - West Hollywood, 5 Bd + Office, 6 Ba, 5,506 SF, Modern, Pool-Hot Tub, Indoor-Outdoor Living, Theater-5.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:11:34'),
(135, 'The Petit One', '5026 Petit Ave, Encino, CA 91436 ', 'Encino, CA', '$----', '4', '5', '10', '4,056', 'Unassigned Description', 'Modern Sherman (36).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 19:40:59'),
(136, 'The Roscomare One', '----', '----', '$----', '4', '5', '10', '4,200', 'Unassigned Description', 'genMid.SR21165755_26_1.jpg', 'on', '', '', 'on', 'Y', '2022-03-15 20:02:08'),
(137, 'The Sunset One', '8425 W Sunset Blvd, West Hollywood, CA 90069', 'West Hollywood, CA', '$----', '5', '5', '12', '3,000', 'Unassigned Description', '1916131dfe9856f7159ef665dcabc0ffl-m2166849878xd-w1020_h770_q80.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 22:23:49'),
(138, 'The Stonewood One', '510 Stonewood Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '4', '4', '10', '5,573', 'Unassigned Description', '4.webp', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 22:27:11'),
(139, 'The Stradella One', '10755 Stradella Ct, Los Angeles, CA 90077 ', 'Bel Air, CA ', '$----', '6', '9', '14', '13,000', 'Unassigned Description', 'IMG_0082.jpg', '', 'on', 'on', '', 'Y', '2022-03-15 22:45:25'),
(140, 'The Stradella Two', '1100 Stradella Rd, Los Angeles, CA 90077', 'Bel Air, CA', '$----', '3', '4', '8', '3,810', 'Unassigned Description', '21-787478_21_0.jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 22:48:58'),
(141, 'The Summitridge One', '1436 Summitridge Dr, Beverly Hills, CA 90210v', 'Beverly Hills, CA', '$----', '4', '5.5', '10', '6,500', 'Unassigned Description', 'f21288299dc68b5653b4367d15a52f20-uncropped_scaled_within_1536_1152.webp', '', 'on', 'on', '', 'Y', '2022-03-15 22:54:58'),
(142, 'The Sweetzer One', '510 N Sweetzer Ave, Los Angeles, CA 90048', 'West Hollywood, CA', '$----', '4', '5', '10', '3,800', 'Unassigned Description', '0044.jpg', 'on', '', 'on', 'on', 'Y', '2022-03-15 23:01:12'),
(143, 'The Sweetzer Two', '508 N Sweetzer Ave, Los Angeles, CA 90048 ', 'West Hollywood, CA ', '$----', '4', '5', '10', '3,900', 'Unassigned Description', '0003.jpg', 'on', '', 'on', 'on', 'Y', '2022-03-15 23:11:18'),
(144, 'The Sycamore One', '307 S Sycamore Ave, Los Angeles, CA 90036', 'Fairfax, CA', '$----', '5', '5.5', '12', '4,465', 'Unassigned Description', '1 (3).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 23:16:28'),
(145, 'The Donna One', '5711 Donna Ave, Tarzana, CA 91356', 'Tarzana, CA', '$----', '4', '4', '10', '4,841', 'Unassigned Description', '7f821684e1ddc3b6c45cc1ba61072fb3-uncropped_scaled_within_1536_1152.webp', '', 'on', 'on', '', 'Y', '2022-03-15 23:24:54'),
(146, 'The Terryview One', '10901 Terryview Dr, Studio City, CA 91604', 'Studio City, CA', '$----', '4', '4', '10', '2,887', 'Unassigned Description', 'Terryview Dr (19).jpg', '', 'on', 'on', '', 'N', '2022-03-15 23:27:41'),
(147, 'The Alfred One', '441 N Alfred St, Los Angeles, CA 90048', 'Beverly Grove, CA', '$----', '5', '5.5', '12', '5,506', 'Unassigned Description', 'Alfredo Villa (52).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 23:48:45'),
(148, 'The Almont One', '147 S Almont Dr, Los Angeles, CA 90048', 'Beverly Hills, CA', '$----', '5', '6', '12', '4,835', 'Unassigned Description', 'Photo Feb 04, 4 19 37 PM.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-15 23:52:40'),
(149, 'The Sarbonne One', '777 Sarbonne Rd, Los Angeles, CA 90077 ', 'Bel Air, CA ', '$----', '7', '11', '16', '50,457', 'Unassigned Description', '021.webp', '', 'on', 'on', '', 'Y', '2022-03-16 00:02:02'),
(150, 'The Beverly Park Two', '54 Beverly Park Way, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '8', '12', '18', '17,200', 'Unassigned Description', 'The Beverly Park Two (12).jpg', '', 'on', 'on', '', 'Y', '2022-03-16 01:05:26'),
(151, 'The Blue Jay One', '----', '----', '$----', '5', '5.5', '12', '5,688', 'Unassigned Description', '1 (3).jpeg', 'on', 'on', 'on', 'on', 'Y', '2022-03-16 01:11:08'),
(152, 'The Blue Jay Three', '1505 Blue Jay Way, Los Angeles, CA 90069', 'Hollywood Hills, CA', '$----', '3', '3', '8', '2,692', 'Unassigned Description', 'Franklin Three (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-16 01:14:50'),
(153, 'The Califa One', '1506 Blue Jay Way, Los Angeles, CA 90069', 'Woodland Hills, CA', '$----', '5', '6', '12', '6,800', 'Unassigned Description', 'MLS-31.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-16 01:21:11'),
(154, 'The Harper One', '515 N Harper Ave, Los Angeles, CA 90048', 'Beverly Grove, CA', '$----', '5', '6', '12', '6,000', 'Unassigned Description', 'The Harper Two (11).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-03-17 20:57:46'),
(155, 'The Saint Ives Dr Two', '8931 Saint Ives Dr, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '4', '6', '10', '4,600', 'Unassigned Description', 'Saint Ives Dr 2 (1).jpg', '', 'on', 'on', '', 'Y', '2022-03-29 00:28:25'),
(156, 'The Alpine Three', '807 N Alpine Dr, Beverly Hills, CA 90210', 'Beverly Hills Flats, CA', '$----', '6', '8', '14', '7,778', 'Unassigned Description', 'Screen Shot 2021-10-11 at 3.23.46 PM_cropped (2).jpg', '', 'on', 'on', '', 'Y', '2022-04-08 23:20:52'),
(157, 'The Alpine Two', '926 N Alpine Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '6', '8', '14', '5,148', 'Unassigned Description', 'The Alpine Two (1).webp', 'on', 'on', 'on', 'on', 'Y', '2022-04-08 23:26:23'),
(158, 'The Alta One', '616 N Alta Dr, Beverly Hills, CA 90210', 'The Beverly Hills Flats, CA', '$----', '6', '10', '14', '6,446', 'Unassigned Description', 'The Alta 1 (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 00:04:30'),
(159, 'The Alpine One', '901 N. Alpine Dr. Bevery Hills, CA 90210', 'Beverly Hills Flats, CA', '$----', '11', '16', '24', '24,977', 'Unassigned Description', '001 (1).jpg', '', 'on', 'on', '', 'Y', '2022-04-09 00:23:40'),
(160, 'The Alta Two', '623 N Alta Dr, Beverly Hills, CA 90210', 'Beverly Hills Flats, CA', '$----', '6', '6', '14', '7,100', 'Unassigned Description', 'Alta 2 (38).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 00:31:49'),
(161, 'The Barrington One', '314 N Barrington Ave, Los Angeles, CA 90049', 'Westwood, CA', '$----', '5', '9', '12', '8,497', 'Unassigned Description', '21-746906_26_3 (1).jpg', '', '', 'on', '', 'Y', '2022-04-09 00:45:03'),
(162, 'The Beverly One', '721 N Beverly Dr, Beverly Hills, CA 90210', 'Beverly Hill Flats, CA', '$----', '5', '8', '12', '7,000', 'Unassigned Description', 'The Beverly One (8).webp', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 00:53:21'),
(163, 'The Beverly Two', '2048 N Beverly Dr, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '4', '4.5', '10', '3,700', 'Unassigned Description', 'Beverly 2 (6).jpeg', 'on', 'on', 'on', 'on', 'N', '2022-04-09 00:57:04'),
(164, 'The Birdview One', '7332 Birdview Ave, Malibu, CA 90265', 'Malibu, CA', '$----', '6', '7', '14', '5,716', 'Unassigned Description', 'gallery_2 (7).jpeg', '', 'on', 'on', '', 'Y', '2022-04-09 01:00:21'),
(165, 'The Blix One', '11241 Blix St, North Hollywood, CA 91602', 'North Hollywood, CA', '$----', '4', '3.5', '10', '3,887', 'Unassigned Description', '89086ec3576d4f3928a7cb3a2c0a80c1-uncropped_scaled_within_1536_1152.webp', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 01:05:46'),
(166, 'The Bode One', '1 Bode Dr, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '5', '8', '12', '10,000', 'Unassigned Description', 'Bode 1 (31).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 01:11:24'),
(167, 'The Briarcrest One', '2500 Briarcrest Rd, Beverly Hills, CA 90210', 'Beverly Hills, CA', '$----', '4', '6', '10', '5,860', 'Unassigned Description', 'The Briarcrest One (2).webp', 'on', 'on', 'on', 'on', 'Y', '2022-04-09 01:13:40'),
(168, 'The Cassandra One', '18641 Cassandra St, Tarzana, CA 91356', 'Tarzana, CA', '$----', '6', '6', '14', '6,815', 'Unassigned Description', 'Cassandra - Tarzana, 5 Bd, 6 Ba, 6,815 SF, Modern Cape Cod, Multi Level, Pool, Outdoor BBQ _ Kitchen, Theater-47.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-14 00:18:01'),
(169, 'The Castilian One', '2321 Castilian Dr, Los Angeles, CA 90068 ', 'Hollywood Hills, CA ', '$----', '5', '8', '12', '9,000', 'Unassigned Description', 'The Castilian One (17).jpg', '', 'on', 'on', 'on', 'Y', '2022-04-14 00:24:06'),
(170, 'The Chalon One', '10979 Chalon Rd, Los Angeles, CA 90077', 'Bel Air, CA', '$----', '12', '25', '26', '31,000', 'Unassigned Description', '104.png', '', 'on', 'on', '', 'Y', '2022-04-14 00:26:44'),
(171, 'The Chandler Five', '13347 Chandler Blvd, Van Nuys, CA 91401', 'Sherman Oaks, CA', '$----', '6', '6', '14', '4,800', 'Unassigned Description', 'The Chandler 5 (1).jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-14 00:31:20'),
(172, 'The Chandler Four', '13847 Chandler Blvd, Van Nuys, CA 91401', 'Sherman Oaks, CA', '$----', '3', '2', '8', '2,012', 'Unassigned Description', 'Photo Jun 15, 9 14 41 AM.jpg', 'on', '', 'on', 'on', 'N', '2022-04-14 00:35:04'),
(173, 'The Chantilly One', '1006 Chantilly Rd, Los Angeles, CA 90077', 'Bel Air, CA', '$----', '7', '10', '16', '10,000', 'Unassigned Description', '2 (1).jpg', 'on', 'on', '', 'on', 'Y', '2022-04-14 00:40:48'),
(174, 'The Clerendon One', '3352 Clerendon Rd, Beverly Hills, CA 90210', 'Sherman Oaks, CA', '$----', '6', '6', '14', '8,245', 'Unassigned Description', 'The Cleredon One (7).psd.jpg', 'on', 'on', 'on', 'on', 'Y', '2022-04-14 00:44:25'),
(175, 'The Collina One', '1100 La Collina Dr, Beverly Hills, CA 90210 ', 'The Beverly Hills Flats, CA ', '$----', '6', '9', '14', '10,000', 'Unassigned Description', 'The Collina One (1).webp', 'on', 'on', 'on', 'on', 'Y', '2022-04-14 00:49:30'),
(176, 'The Cordell Two', '9115 Cordell Dr, Los Angeles, CA 90069', 'Beverly Hills, CA', '$----', '3', '6', '8', '4,524', 'Unassigned Description', 'Cordell 2 (8) (1).jpg', '', 'on', 'on', '', 'Y', '2022-04-14 00:59:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
