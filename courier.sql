-- phpMyAdmin SQL Dump
-- version 5.1.4deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2024 at 12:37 PM
-- Server version: 8.0.33-0ubuntu0.22.10.2
-- PHP Version: 8.1.7-1ubuntu3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_22_114536_create_packages_table', 2),
(6, '2024_03_22_230438_create_quotes_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `sender_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `current_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tracking_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `sender_name`, `sender_phone`, `sender_email`, `sender_address`, `reciever_name`, `reciever_phone`, `reciever_email`, `reciever_address`, `country`, `package_type`, `package_weight`, `shipment_method`, `status`, `comment`, `current_location`, `tracking_id`, `created_at`, `updated_at`) VALUES
(1, 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Okenyi Victor', '08157401872', 'nonsovictor709@gmail.com', 'Ediro', 'Monaco', 'Cloth', '40', 'Land', 'Shipped', 'We Are On The Way', 'Cotonous', 'TH220457SH', '2024-03-22 11:41:19', '2024-06-25 20:17:44'),
(2, 'Samson igwe', '07088366968', 'nonsovictor709@gmail.com', 'Enugu', 'John emma', '07088366968', 'victech50@gmail.com', 'Ifo', 'Barbados', 'Cloth', '78', 'Air', 'Processed', NULL, 'Lagos', 'TH273348SH', '2024-03-22 13:47:34', '2024-03-22 14:30:09'),
(4, 'Jesse jagsz', '08157401872', 'nonso709@gmail.com', 'Enugu', 'Femi seun', '08157401872', 'victor709@gmail.com', 'Enugu', 'Nigeria', 'Shoes', '60', 'Air', 'On The Way', '<p>jdkd dd dklldld dklkld</p>', 'Lagos', 'TH422855SH', '2024-03-24 20:38:46', '2024-03-24 20:38:46'),
(7, 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Nigeria', 'Cloth', '60', 'Land', 'Pending', 'I am writing to express my strong interest to serve at START INNOVATION HUB. With a passion for creating responsive and engaging websites and five years of experience designing web applications that exceed clients\' expectations, I believe I would be a valuable addition to your team.', 'Lagos', 'TH657800SH', '2024-03-24 21:04:41', '2024-03-25 11:05:01'),
(8, 'Amaechi Kiddo', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Victor Noni', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Nigeria', 'Cloth', '60', 'Land', 'Pending', NULL, 'Lagos', 'TH489552SH', '2024-03-24 21:08:27', '2024-03-24 21:16:57'),
(9, 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Nigeria', 'Bags', '60', 'Sea', 'Processed', NULL, 'Lagos', 'TH90086SH', '2024-03-24 21:29:17', '2024-03-24 21:29:17'),
(10, 'Victor Nonso', '08157401872', 'nonsovictor709@gmail.com', 'Enugu', 'Dominic King', '08055167789', 'dominicking1234@proton.me', '104, Opebi Road', 'Nigeria', 'Cloth', '60', 'Air', 'Pending', 'on the way', 'Lagos', 'SL529064SH', '2024-07-17 09:45:45', '2024-07-17 09:45:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$12$qdePOsIbDha.Ba9NmNzLcO3fGPSJkcCd4GIoWP6ivCOTb7Xlhr756', '2024-07-17 10:21:10');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `freight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `name`, `email`, `number`, `freight`, `departure`, `type`, `weight`, `created_at`, `updated_at`) VALUES
(3, 'okenyi', 'amaechi@yahoo.com', '08157401872', 'Land', 'ifo', 'load', '20', '2024-03-25 00:00:24', '2024-03-25 00:00:24'),
(4, 'Victor Nonso', 'nonsovictor709@gmail.com', '08157401872', 'Land', 'ifo', 'load', '45', '2024-03-25 00:03:27', '2024-03-25 00:03:27'),
(5, 'Victor Nonso', 'nonsovictor709@gmail.com', '08157401872', 'Land', 'ifo', 'fooad', '45', '2024-03-25 00:05:55', '2024-03-25 00:05:55'),
(6, 'Victor Godwin', 'nonsovictor@gmail.com', '08157401872', 'Land', 'ifo', 'load', '45', '2024-03-25 11:06:32', '2024-03-25 11:06:32'),
(7, 'Victor Nonso', 'nonsovictor709@gmail.com', '08157401872', 'Land', 'ifo', 'fooad', '45', '2024-07-04 18:44:17', '2024-07-04 18:44:17'),
(8, 'Crown Prince', 'ui@gmail.com', '08055167789', 'Air', 'ifo', 'engine', '45', '2024-07-04 19:09:53', '2024-07-04 19:09:53'),
(9, 'Noni victor', 'nonsopro@proton.me', '08037714043', 'Sea', 'london', 'engine', '100', '2024-07-04 19:16:49', '2024-07-04 19:16:49'),
(10, 'Jesse Jack', 'jack@gmail.com', '08037714043', 'Sea', 'uk', 'laptop', '10', '2024-07-05 09:52:42', '2024-07-05 09:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$ZHUncYAxLDRKX5hzh.M9uusvFc0bSE/ArtWaMwVoPbSJz0XNbWqx6', '9n00B7imkcXdMhe1AU07Cipl2hHpvwZ57kyJkWBIILimiBzGjx3YTLcLo7Jj', NULL, '2024-07-17 09:41:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
