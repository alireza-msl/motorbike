-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2018 at 09:13 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `motorbike`
--

-- --------------------------------------------------------

--
-- Table structure for table `motorbikes`
--

CREATE TABLE `motorbikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `model` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,0) NOT NULL,
  `img_path` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_id` int(11) NOT NULL,
  `published_at` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `motorbikes`
--

INSERT INTO `motorbikes` (`id`, `model`, `color`, `weight`, `price`, `img_path`, `admin_id`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 'طزر', 'لذدباذ', '34567', '34567', NULL, 100, NULL, '2018-12-06 03:23:32', '2018-12-06 03:23:32'),
(2, 'c150', 'قرمز', '1200', '12000000', NULL, 100, NULL, '2018-12-06 03:26:52', '2018-12-06 03:26:52'),
(3, 'honda 125', 'قهوه ای', '2000', '4300000', NULL, 100, NULL, '2018-12-06 04:35:00', '2018-12-06 04:35:00'),
(4, 'pulse 180', 'قرمز', '2000', '4300000', NULL, 100, NULL, '2018-12-06 04:35:57', '2018-12-06 04:35:57'),
(5, 'pulse RS 200', 'آبی', '2000', '18000000', NULL, 100, NULL, '2018-12-06 04:36:21', '2018-12-06 04:36:21'),
(6, 'RTR 200', 'سفید', '2000', '18000000', NULL, 100, NULL, '2018-12-06 04:36:50', '2018-12-06 04:36:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motorbikes`
--
ALTER TABLE `motorbikes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motorbikes`
--
ALTER TABLE `motorbikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
