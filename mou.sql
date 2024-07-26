-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2024 at 07:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerjasamas`
--

CREATE TABLE `kerjasamas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` text DEFAULT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
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
  `id` int(11) NOT NULL,
  `mou_id` int(11) NOT NULL,
  `products` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `product_size` varchar(200) NOT NULL,
  `product_color` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mou_items`
--

INSERT INTO `mou_items` (`id`, `mou_id`, `products`, `quantity`, `product_size`, `product_color`, `created_at`, `updated_at`) VALUES
(1, 13, 'Abc', 5, '10 x 10', 'Coklat', '2024-07-25 04:04:46', '2024-07-25 09:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `mo_u_s`
--

CREATE TABLE `mo_u_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `fileMoU` varchar(255) DEFAULT NULL,
  `denganPihak` varchar(255) DEFAULT NULL,
  `waktuMulai` date NOT NULL,
  `waktuSelesai` date NOT NULL,
  `textMoU` text DEFAULT NULL,
  `status` enum('Berlaku','Hampir Berakhir','Tidak Berlaku','Selesai') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mo_u_s`
--

INSERT INTO `mo_u_s` (`id`, `judul`, `fileMoU`, `denganPihak`, `waktuMulai`, `waktuSelesai`, `textMoU`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Pembangunan Rumah', 'ApqyVxIOLq.pdf', 'BCA', '2024-07-24', '2026-07-24', 'dadada', 'Selesai', '2024-07-23 23:50:52', '2024-07-24 07:33:40'),
(7, 'dada', 'yEaUnNMY81.pdf', 'indentation', '2024-07-25', '2024-08-25', 'dada', 'Hampir Berakhir', '2024-07-24 07:34:12', '2024-07-25 09:38:58'),
(8, 'nn', 'ewvIS41nb3.pdf', 'nn', '2024-07-24', '2024-08-24', 'mmm', 'Selesai', '2024-07-24 07:38:58', '2024-07-25 09:59:39'),
(9, 'aada', 'gUQYQF7PO9.pdf', 'dada', '2024-07-24', '2024-08-24', 'adaa', 'Hampir Berakhir', '2024-07-24 07:44:20', '2024-07-25 09:38:58'),
(10, 'nadna', '9hJ7YEy9A0.pdf', 'adaada', '2024-07-24', '2024-08-24', 'dadadada', 'Hampir Berakhir', '2024-07-24 07:45:05', '2024-07-25 09:38:58'),
(11, 'test', 'FileMoU/wajFqDwHW6MW1gLEHYUHTfm21Vn6cB4MeBJeTcLD.pdf', 'bca', '2024-07-16', '2024-08-16', 'Momom', 'Hampir Berakhir', '2024-07-25 04:00:12', '2024-07-25 09:38:58'),
(12, 'test', 'FileMoU/CAZmn0r964RmAFvKxppvmf7Ho6yBZHlxEJJsONrO.pdf', 'bca', '2024-07-16', '2024-08-16', 'Momom', 'Hampir Berakhir', '2024-07-25 04:03:24', '2024-07-25 09:38:58'),
(13, 'test', 'FileMoU/6HdgAXxHIZ9UxZ2Nm4j0lEEu1dhBi9p1f6afykGe.pdf', 'bca', '2024-07-16', '2024-08-16', 'Momom', 'Hampir Berakhir', '2024-07-25 04:04:46', '2024-07-25 09:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mou_id` bigint(20) UNSIGNED NOT NULL,
  `signature` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `updated_at`, `role`) VALUES
(1, 'john', '$2y$10$Ef3vmVHQi9yA1ZYP8kKG2OZmgi5kdKM4Kdzp5FjKiRul7EFY6NqHS', '2024-07-23 21:53:09', '2024-07-23 21:53:09', 'admin'),
(2, 'Mann', '$2y$10$M13dMM8p9bprAimMZJoBNOmtuu1x9MWzted2qKRYO2g0/CZYfOCUS', '2024-07-24 00:36:15', '2024-07-24 00:36:15', 'mitra');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mou_items`
--
ALTER TABLE `mou_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mo_u_s`
--
ALTER TABLE `mo_u_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signatures`
--
ALTER TABLE `signatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
