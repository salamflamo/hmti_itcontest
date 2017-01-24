-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2017 at 12:07 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itcontest`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(61, '2014_10_12_000000_create_users_table', 1),
(62, '2014_10_12_100000_create_password_resets_table', 1),
(63, '2017_01_21_021901_create_tahap1', 1),
(64, '2017_01_21_171445_create_scores_table', 1),
(65, '2017_01_23_161234_create_tahap2s_table', 1),
(66, '2017_01_23_172032_create_tahap3s_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`id`, `nis`, `name`, `score`, `created_at`, `updated_at`) VALUES
(1, 'a11201408644', 'Farah Oktarina', 490, '2017-01-23 09:35:29', '2017-01-23 10:39:24'),
(3, 'a11201408645', 'Faradilla', 85, '2017-01-23 11:10:38', '2017-01-23 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `tahap1s`
--

CREATE TABLE `tahap1s` (
  `id` int(10) UNSIGNED NOT NULL,
  `one` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `five` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `six` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seven` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tahap1s`
--

INSERT INTO `tahap1s` (`id`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `created_at`, `updated_at`) VALUES
(1, 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', 'b', '2017-01-23 09:35:29', '2017-01-23 09:36:10'),
(3, 'a', 'a', 'a', 'a', 'a', 'a', 'b', 'a', 'a', 'a', '2017-01-23 11:10:38', '2017-01-23 11:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `tahap2s`
--

CREATE TABLE `tahap2s` (
  `id` int(10) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL,
  `one` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `five` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `six` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seven` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `eight` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nine` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tahap2s`
--

INSERT INTO `tahap2s` (`id`, `point`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `created_at`, `updated_at`) VALUES
(1, 30, 'a', 'b', 'a', 'a', 'a', 'a', 'b', 'b', 'a', 'a', '2017-01-23 09:44:40', '2017-01-23 10:18:24'),
(3, 20, 'a', 'a', 'a', 'b', 'b', 'a', 'b', 'a', 'a', 'b', '2017-01-23 11:44:23', '2017-01-23 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `tahap3s`
--

CREATE TABLE `tahap3s` (
  `id` int(10) UNSIGNED NOT NULL,
  `point` int(11) NOT NULL,
  `one` char(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `four` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `five` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tahap3s`
--

INSERT INTO `tahap3s` (`id`, `point`, `one`, `two`, `three`, `four`, `five`, `created_at`, `updated_at`) VALUES
(1, 100, 'a', 'a', 'a', 'a', 'b', '2017-01-23 10:35:46', '2017-01-23 10:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nis`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Farah Oktarina', 'a11201408644', '$2y$10$16v3.QAR294WV/g/X7PMWu120Q5qSh66QnjpEfrmYnrrfrc81jreK', 'YRPacfGhYtszxvKCJU7tIrjaQAGb4SKvgM4LLnVrdO7CLF7dqP8yjNk1tJnb', '2017-01-23 09:35:17', '2017-01-23 10:45:39'),
(3, 'Faradilla', 'a11201408645', '$2y$10$KU30b2LC/KG42wkqoQuoA.0pViBrxJedr.kJ0kDr135rSF0RBGGCC', 'uhVCFbG8dN3rfTIq3SdznKis8jfxoZl34vNvNs7Ujnv6wZVRsQMmYOPwgyJo', '2017-01-23 11:08:42', '2017-01-23 11:47:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahap1s`
--
ALTER TABLE `tahap1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahap2s`
--
ALTER TABLE `tahap2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahap3s`
--
ALTER TABLE `tahap3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nis_unique` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tahap1s`
--
ALTER TABLE `tahap1s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tahap2s`
--
ALTER TABLE `tahap2s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tahap3s`
--
ALTER TABLE `tahap3s`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
