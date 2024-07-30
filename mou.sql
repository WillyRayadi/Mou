-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 30, 2024 at 08:07 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mou_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Elektronik', '2024-07-24 02:16:22', '2024-07-24 02:16:22'),
(3, 'Smartphone', '2024-07-24 02:18:26', '2024-07-24 02:18:26');

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
-- Table structure for table `kerjasamas`
--

CREATE TABLE `kerjasamas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kerjasamas`
--

INSERT INTO `kerjasamas` (`id`, `nama`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'TEst', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_01_013108_create_mo_u_s_table', 1),
(6, '2022_04_01_162717_create_kerjasamas_table', 1),
(7, '2024_07_23_084238_create_signatures_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mou_items`
--

CREATE TABLE `mou_items` (
  `id` int NOT NULL,
  `mou_id` int NOT NULL,
  `products` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  `product_size` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `product_color` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mou_items`
--

INSERT INTO `mou_items` (`id`, `mou_id`, `products`, `quantity`, `product_size`, `product_color`, `created_at`, `updated_at`) VALUES
(1, 13, 'Abc', 5, '10 x 10', 'Coklat', '2024-07-25 04:04:46', '2024-07-25 09:55:20'),
(2, 14, 'AC Portable', 10, '1kg', 'hitam', '2024-07-25 19:35:45', '2024-07-25 19:35:45'),
(3, 16, 'Test Barang', 1, '1cm', 'putih', '2024-07-25 21:26:40', '2024-07-25 21:26:40'),
(4, 17, 'Test Barang', 2, '1kg', 'hitam', '2024-07-25 23:55:30', '2024-07-25 23:55:30'),
(5, 18, 'Test Barangkuh', 1, '1cm', 'putih', '2024-07-26 00:04:17', '2024-07-26 00:11:28'),
(6, 19, 'AC Portable', 2, '1kg', 'hitam', '2024-07-26 00:13:36', '2024-07-26 00:13:36'),
(7, 20, 'TV Digital', 1, '1kg', 'hitam', '2024-07-29 05:33:22', '2024-07-29 05:33:22'),
(8, 21, 'Samsung Galaxy A', 1, '1', 'Hitam', '2024-07-29 05:42:31', '2024-07-29 05:42:31'),
(9, 22, 'Apple iPhone 13 Pro Max', 1, '1cm', 'Rose Gold', '2024-07-30 00:30:16', '2024-07-30 00:30:16'),
(10, 23, 'AC Portable', 1, '1', 'Rose Gold', '2024-07-30 00:47:52', '2024-07-30 00:47:52');

-- --------------------------------------------------------

--
-- Table structure for table `mo_u_s`
--

CREATE TABLE `mo_u_s` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileMoU` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denganPihak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuMulai` date NOT NULL,
  `waktuSelesai` date NOT NULL,
  `textMoU` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Berlaku','Hampir Berakhir','Tidak Berlaku','Selesai','Ditolak') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mo_u_s`
--

INSERT INTO `mo_u_s` (`id`, `judul`, `fileMoU`, `denganPihak`, `waktuMulai`, `waktuSelesai`, `textMoU`, `status`, `created_at`, `updated_at`) VALUES
(23, 'Test MoU', '052sPRyXUv.pdf', 'PT Berkah Jaya Abadi', '2024-07-30', '2025-07-30', 'dasdsad', 'Ditolak', '2024-07-30 00:47:52', '2024-07-30 01:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `mou_id` bigint UNSIGNED NOT NULL,
  `signature` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`, `role`, `phone_number`) VALUES
(1, 'john', '$2y$10$Ef3vmVHQi9yA1ZYP8kKG2OZmgi5kdKM4Kdzp5FjKiRul7EFY6NqHS', '2024-07-23 21:53:09', '2024-07-23 21:53:09', 'admin', ''),
(2, 'Mann', '$2y$10$M13dMM8p9bprAimMZJoBNOmtuu1x9MWzted2qKRYO2g0/CZYfOCUS', '2024-07-24 00:36:15', '2024-07-24 00:36:15', 'mitra', ''),
(3, 'steve', '$2y$10$I50pHGwAwcYDwOUhvX/GBuxt.syxMuQp.x5EUmjJOax81sZ3wwA02', '2024-07-25 19:34:36', '2024-07-25 19:34:36', 'admin', ''),
(4, 'mitra', '$2y$10$U4kUDvwjePd.2NV7fGaJ8OYapPhiX0FU7R9Ma/lKFXo095rINUL0K', '2024-07-26 00:12:38', '2024-07-26 00:12:38', ' mitra', ''),
(5, 'Supervisor', '$2y$10$wIlz/DfeXJ45HYgsFBQviOVRT.hiH79U4H9fyFsGnrIEw.0zRo35m', '2024-07-26 00:19:41', '2024-07-26 00:19:41', 'admin', '083823999435'),
(7, 'Mad Dog', '$2y$10$7r4sfx7/6bZG67qd1R3a4u6u3f6ASRREkSP34OlzQiyKor4soXUi6', '2024-07-26 00:57:08', '2024-07-26 00:57:21', 'mitra', '087875860358'),
(8, 'Ceisya', '$2y$10$z2VDj9W0jbhkQuoOEYzJc.E1DdVqIhcRlHwX51OEOPeDi09l/dXy6', '2024-07-30 00:17:41', '2024-07-30 00:17:41', 'mitra', '081212778206'),
(9, 'Mala', '$2y$10$T/HXseLdoC01VSePRcvvVeIN8R4P1xpYuxj4jUlx/CZsXUpRIsHOm', '2024-07-30 00:18:17', '2024-07-30 00:18:17', 'mitra', '08745452023');

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
-- Indexes for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kerjasamas_nama_unique` (`nama`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mou_items`
--
ALTER TABLE `mou_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mo_u_s`
--
ALTER TABLE `mo_u_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `signatures_user_id_foreign` (`user_id`),
  ADD KEY `signatures_mou_id_foreign` (`mou_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mou_items`
--
ALTER TABLE `mou_items`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mo_u_s`
--
ALTER TABLE `mo_u_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `signatures`
--
ALTER TABLE `signatures`
  ADD CONSTRAINT `signatures_mou_id_foreign` FOREIGN KEY (`mou_id`) REFERENCES `mo_u_s` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `signatures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
