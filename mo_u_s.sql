-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 24, 2024 at 03:21 PM
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
-- Database: `mou`
--

-- --------------------------------------------------------

--
-- Table structure for table `mo_u_s`
--

CREATE TABLE `mo_u_s` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileMoU` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `denganPihak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waktuMulai` date DEFAULT NULL,
  `waktuSelesai` date DEFAULT NULL,
  `textMoU` text COLLATE utf8mb4_unicode_ci,
  `status` enum('Berlaku','Hampir Berakhir','Tidak Berlaku','Selesai') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mo_u_s`
--

INSERT INTO `mo_u_s` (`id`, `judul`, `fileMoU`, `denganPihak`, `waktuMulai`, `waktuSelesai`, `textMoU`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Test MOU', 'FileMoU/4mCJw32mOVy19XGMBYYdOayJlCyKqanOSTnsrscB.pdf', 'PT Maju Mundur Cantik', '2024-07-24', '2025-07-24', NULL, 'Selesai', '2024-07-23 20:37:14', '2024-07-24 07:08:17'),
(4, 'Test Kerjasama MOU', 'FileMoU/mKVEVGMkfwUPM62aYYTzHTCsYBI6ZXbfU3s1aeYN.pdf', 'PT Codehouse', '2024-07-24', '2024-07-31', 'Test', 'Selesai', '2024-07-24 06:17:56', '2024-07-24 08:17:46'),
(5, 'Testing Lagi MOU', 'FileMoU/dmzueoTH4GPQmcxRRL3ec9xfJkrfYROxspiHaZHO.pdf', 'PT Berkah Jaya Abadi', '2024-07-24', '2024-08-24', 'ini adalah testing mou', 'Hampir Berakhir', '2024-07-24 06:47:19', '2024-07-24 08:16:35'),
(7, 'dasdsd', 'FileMoU/AL0UiiT26PJOmDC144aWB7ouDjBUAGYJguw5y7DE.pdf', 'dsadsd', '2024-07-24', '2025-07-24', 'dsadds', 'Selesai', '2024-07-24 07:10:41', '2024-07-24 07:10:53'),
(8, 'jhjhjhjhj', 'FileMoU/5SaVRUhOBZdS58xtsC7WcQjpvm14st5KfA144BzB.pdf', 'hghghg', '2024-07-24', '2025-07-24', 'hjhj', 'Berlaku', '2024-07-24 07:57:08', '2024-07-24 07:57:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mo_u_s`
--
ALTER TABLE `mo_u_s`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mo_u_s`
--
ALTER TABLE `mo_u_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
