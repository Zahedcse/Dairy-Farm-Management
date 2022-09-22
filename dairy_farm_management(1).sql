-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 22, 2022 at 05:34 PM
-- Server version: 5.7.33
-- PHP Version: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dairy_farm_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `calves`
--

CREATE TABLE `calves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cow_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_obtain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `ob_date` date DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calves`
--

INSERT INTO `calves` (`id`, `cow_id`, `cname`, `gender`, `type`, `h_obtain`, `breed`, `dob`, `ob_date`, `status`, `created_at`, `updated_at`) VALUES
(2, NULL, 'jgjgh', 'Female', 'Heifer', 'purchased', 'jersey', '2022-09-17', '2022-09-23', 1, '2022-09-20 09:35:58', '2022-09-20 09:35:58'),
(4, NULL, 'Lali-junior', 'Female', 'Heifer', 'purchased', 'native', '2022-09-29', '2022-10-06', 1, '2022-09-22 17:34:02', '2022-09-22 17:34:02'),
(5, 3, 'Lali-junior', 'Male', 'Bull', 'born', 'sahiwal', '2022-09-28', NULL, 1, '2022-09-22 17:34:22', '2022-09-22 17:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `cows`
--

CREATE TABLE `cows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `next_preg_date` date DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buying_price` double DEFAULT NULL,
  `milk_per_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant_status` tinyint(1) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_vaccine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vaccines` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ob_date` date DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_obtain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cows`
--

INSERT INTO `cows` (`id`, `name`, `gender`, `breed`, `dob`, `next_preg_date`, `height`, `weight`, `buying_price`, `milk_per_day`, `pregnant_status`, `type`, `prev_vaccine`, `vaccines`, `ob_date`, `age`, `h_obtain`, `created_at`, `updated_at`) VALUES
(2, 'Bala', 'Male', 'sindhi', '2022-09-29', NULL, '656', '5656', 76867, NULL, NULL, 'Bull', 'Yes', '[\"Anthrax\"]', '2022-09-15', '0 y,0 m and 6 d', 'purchased', '2022-09-20 08:08:39', '2022-09-22 16:59:42'),
(3, 'Famala', 'Female', 'mirkadim-cattle', '2022-09-23', '2022-09-08', '56', '56', 67657, '67', 0, 'Heifer', 'Yes', '[\"Anthrax\"]', '2022-09-15', '0 y,0 m and 0 d', 'purchased', '2022-09-21 20:52:49', '2022-09-22 17:01:35'),
(4, 'Mala1', 'Female', 'jersey', '2022-09-28', '2022-09-14', '56', '677', 56, '56', 0, 'Heifer', 'Yes', '[\"Anthrax\"]', NULL, '0 y,0 m and 5 d', 'born', '2022-09-22 17:03:53', '2022-09-22 17:05:01');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(90, '2014_10_12_000000_create_users_table', 1),
(91, '2014_10_12_100000_create_password_resets_table', 1),
(92, '2019_02_25_231036_create_scheduled_notifications_table', 1),
(93, '2019_08_19_000000_create_failed_jobs_table', 1),
(94, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(95, '2021_09_10_130000_add_meta_to_scheduled_notifications', 1),
(96, '2022_08_26_224609_create_cows_table', 1),
(97, '2022_08_31_063027_create_milks_table', 1),
(98, '2022_09_04_070104_create_calves_table', 1),
(99, '2022_09_04_082958_create_pregnancies_table', 1),
(100, '2022_09_11_110332_create_notifications_table', 1),
(101, '2022_09_11_124643_create_vaccines_table', 1),
(102, '2022_09_13_101553_create_vaccine_catalogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `milks`
--

CREATE TABLE `milks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cow_id` bigint(20) UNSIGNED NOT NULL,
  `date_recorded` date NOT NULL,
  `litre_collected` double NOT NULL,
  `price_per_litre` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milks`
--

INSERT INTO `milks` (`id`, `cow_id`, `date_recorded`, `litre_collected`, `price_per_litre`, `created_at`, `updated_at`) VALUES
(2, 4, '2022-09-22', 65, 56, '2022-09-22 17:33:35', '2022-09-22 17:33:35'),
(3, 3, '2022-09-22', 67, 67, '2022-09-22 17:33:44', '2022-09-22 17:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
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
-- Table structure for table `pregnancies`
--

CREATE TABLE `pregnancies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregnancy_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semen_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `push_date` date NOT NULL,
  `start_date` date NOT NULL,
  `del_date` date NOT NULL,
  `semen_cost` double NOT NULL,
  `other_cost` double NOT NULL,
  `total` double DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pregnancies`
--

INSERT INTO `pregnancies` (`id`, `name`, `pregnancy_type`, `semen_type`, `push_date`, `start_date`, `del_date`, `semen_cost`, `other_cost`, `total`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Bali', 'Manual', 'sindhi', '2022-09-23', '2022-09-25', '2023-07-05', 56000, 565, 56565, 'rtdrtyr', '2022-09-20 08:12:49', '2022-09-22 17:05:21'),
(2, 'Mala1', 'Automatic', 'sahiwal', '2022-09-23', '2022-09-23', '2023-07-03', 12000, 12345, 24345, 'hfghfgh', '2022-09-22 17:08:09', '2022-09-22 17:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `scheduled_notifications`
--

CREATE TABLE `scheduled_notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `target_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notification` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_at` datetime NOT NULL,
  `sent_at` datetime DEFAULT NULL,
  `rescheduled_at` datetime DEFAULT NULL,
  `cancelled_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `meta` json DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scheduled_notifications`
--

INSERT INTO `scheduled_notifications` (`id`, `target_id`, `target_type`, `target`, `notification_type`, `notification`, `send_at`, `sent_at`, `rescheduled_at`, `cancelled_at`, `created_at`, `updated_at`, `meta`) VALUES
(1, NULL, 'App\\Models\\Cow', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}', 'App\\Notifications\\BirthdayNotification', 'O:38:\"App\\Notifications\\BirthdayNotification\":1:{s:3:\"cow\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}}', '2022-09-22 02:52:32', NULL, NULL, NULL, '2022-09-21 20:52:32', '2022-09-21 20:52:32', '[]'),
(2, NULL, 'App\\Models\\Cow', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}', 'App\\Notifications\\BirthdayNotification', 'O:38:\"App\\Notifications\\BirthdayNotification\":1:{s:3:\"cow\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}}', '2022-09-22 02:52:48', NULL, NULL, NULL, '2022-09-21 20:52:49', '2022-09-21 20:52:49', '[]'),
(3, NULL, 'App\\Models\\Cow', 'O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}', 'App\\Notifications\\BirthdayNotification', 'O:38:\"App\\Notifications\\BirthdayNotification\":1:{s:3:\"cow\";O:45:\"Illuminate\\Contracts\\Database\\ModelIdentifier\":5:{s:5:\"class\";s:14:\"App\\Models\\Cow\";s:2:\"id\";N;s:9:\"relations\";a:0:{}s:10:\"connection\";N;s:15:\"collectionClass\";N;}}', '2022-09-22 23:03:53', NULL, NULL, NULL, '2022-09-22 17:03:53', '2022-09-22 17:03:53', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin12', 'admin@dairy.com', NULL, '$2y$10$3asL5OecHDcfYVsRT9t/zukko0ft6luHp6nBc3Q9Di4Yw4h8jmlL2', NULL, '2022-09-19 07:53:23', '2022-09-19 07:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `vaccines`
--

CREATE TABLE `vaccines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cow_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `note` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vaccine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_catalogs`
--

CREATE TABLE `vaccine_catalogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdays` int(11) NOT NULL,
  `vrepeat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vdose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vaccine_catalogs`
--

INSERT INTO `vaccine_catalogs` (`id`, `vname`, `vdays`, `vrepeat`, `vdose`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Anthrax', 120, 'Yes', 'Annually in endemic areas.', '4 months and above', '2022-09-20 08:00:38', '2022-09-22 17:22:56'),
(2, 'BDV', 60, 'No', NULL, 'Push this after 2 months', '2022-09-22 17:23:29', '2022-09-22 17:23:29'),
(3, 'BRSV', 365, 'No', NULL, 'Once a Year Use 2.0 ml using Injection.', '2022-09-22 17:24:10', '2022-09-22 17:24:10'),
(4, 'BVD', 90, 'Yes', '(Vial: 30 ml)', 'Every Three Months', '2022-09-22 17:25:02', '2022-09-22 17:25:02'),
(5, 'PI3', 120, 'No', '3ml, midneck injection push.', 'After 4 Months', '2022-09-22 17:25:34', '2022-09-22 17:25:34'),
(6, 'Vitamin A', 60, 'Yes', 'Oral Single Tablet', 'Twice a Month', '2022-09-22 17:26:06', '2022-09-22 17:26:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calves`
--
ALTER TABLE `calves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `calves_cow_id_foreign` (`cow_id`);

--
-- Indexes for table `cows`
--
ALTER TABLE `cows`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cows_name_unique` (`name`);

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
-- Indexes for table `milks`
--
ALTER TABLE `milks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `milks_cow_id_foreign` (`cow_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `pregnancies`
--
ALTER TABLE `pregnancies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheduled_notifications`
--
ALTER TABLE `scheduled_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vaccines_cow_id_foreign` (`cow_id`);

--
-- Indexes for table `vaccine_catalogs`
--
ALTER TABLE `vaccine_catalogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calves`
--
ALTER TABLE `calves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cows`
--
ALTER TABLE `cows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `milks`
--
ALTER TABLE `milks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pregnancies`
--
ALTER TABLE `pregnancies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scheduled_notifications`
--
ALTER TABLE `scheduled_notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vaccines`
--
ALTER TABLE `vaccines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vaccine_catalogs`
--
ALTER TABLE `vaccine_catalogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `calves`
--
ALTER TABLE `calves`
  ADD CONSTRAINT `calves_cow_id_foreign` FOREIGN KEY (`cow_id`) REFERENCES `cows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `milks`
--
ALTER TABLE `milks`
  ADD CONSTRAINT `milks_cow_id_foreign` FOREIGN KEY (`cow_id`) REFERENCES `cows` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vaccines`
--
ALTER TABLE `vaccines`
  ADD CONSTRAINT `vaccines_cow_id_foreign` FOREIGN KEY (`cow_id`) REFERENCES `cows` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
