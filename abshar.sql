-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 07:01 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abshar`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `icon` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `description`, `is_active`, `icon`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'فطریه', 'فطریه', NULL, 1, 'icon-cash3', NULL, '2023-06-09 05:21:57', '2023-06-09 05:21:57'),
(2, 0, 'کفاره', 'کفاره', NULL, 1, 'icon-cash3', NULL, '2023-06-09 05:22:13', '2023-06-09 05:22:13'),
(3, 0, 'صدقه', 'صدقه', NULL, 1, 'icon-cash3', NULL, '2023-06-09 05:22:29', '2023-06-09 05:22:29'),
(4, 0, 'دونیت', 'دونیت', NULL, 1, 'icon-cash3', NULL, '2023-06-09 05:22:44', '2023-06-09 05:22:44'),
(5, 4, 'درمان', 'درمان', NULL, 1, 'icon-gift', NULL, '2023-06-09 05:23:05', '2023-06-09 05:23:05'),
(6, 4, 'ایتام', 'ایتام', NULL, 1, 'icon-man-woman', NULL, '2023-06-09 05:23:31', '2023-06-09 05:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `collected_amount` int(11) NOT NULL,
  `remaining_amount` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `description` text DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `total_amount`, `category_id`, `collected_amount`, `remaining_amount`, `start_date`, `end_date`, `is_active`, `description`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'پروژه اول', 50000000, 5, 0, 50000000, '2023-06-09', '2024-06-09', 1, NULL, NULL, '2023-06-09 05:24:38', '2023-06-09 16:53:09');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_04_073356_create_categories_table', 1),
(6, '2023_06_04_084607_create_donations_table', 1),
(7, '2023_06_04_085912_create_news_table', 1),
(8, '2023_06_04_090157_create_contact_us_table', 1),
(9, '2023_06_08_154738_create_transaction_table', 1),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(11, '2023_06_10_134502_create_permission_tables', 3),
(12, '2023_06_14_122354_create_orders_table', 4),
(13, '2023_06_14_122917_create_orders_table', 5),
(14, '2023_06_14_181811_create_orders_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(5, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\Role', 15),
(5, 'App\\Models\\Role', 16),
(6, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 5),
(6, 'App\\Models\\Role', 15),
(6, 'App\\Models\\Role', 16),
(7, 'App\\Models\\User', 5),
(7, 'App\\Models\\Role', 15),
(7, 'App\\Models\\Role', 16),
(8, 'App\\Models\\Role', 14),
(8, 'App\\Models\\Role', 16),
(9, 'App\\Models\\User', 2),
(9, 'App\\Models\\Role', 14),
(9, 'App\\Models\\Role', 16),
(10, 'App\\Models\\Role', 14),
(10, 'App\\Models\\Role', 15),
(10, 'App\\Models\\Role', 16);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(14, 'App\\Models\\User', 1),
(14, 'App\\Models\\User', 4),
(14, 'App\\Models\\User', 5),
(15, 'App\\Models\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `donation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `amount` int(10) UNSIGNED NOT NULL,
  `gateway_name` varchar(255) NOT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `donation_id`, `category_id`, `f_name`, `l_name`, `phone`, `email`, `status`, `amount`, `gateway_name`, `payment_status`, `description`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 10000, 'zarinpal', 0, NULL, '2023-06-14 13:59:01', '2023-06-14 13:59:01'),
(2, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 10000, 'zarinpal', 0, NULL, '2023-06-17 07:02:28', '2023-06-17 07:02:28'),
(3, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 50000, 'zarinpal', 0, NULL, '2023-06-17 07:05:22', '2023-06-17 07:05:22'),
(4, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 10000, 'zarinpal', 0, NULL, '2023-06-17 07:06:28', '2023-06-17 07:06:28'),
(5, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 10000, 'zarinpal', 0, NULL, '2023-06-17 07:09:57', '2023-06-17 07:09:57'),
(6, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 8810000, 'zarinpal', 0, NULL, '2023-06-17 07:18:07', '2023-06-17 07:18:07'),
(7, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 8810000, 'zarinpal', 0, NULL, '2023-06-17 07:23:53', '2023-06-17 07:23:53'),
(8, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 6000000, 'zarinpal', 0, NULL, '2023-06-17 07:28:51', '2023-06-17 07:28:51'),
(9, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 6000000, 'zarinpal', 0, NULL, '2023-06-17 07:31:19', '2023-06-17 07:31:19'),
(10, NULL, 1, 'zahra', 'abedizadeh', '09367021936', 'abedizadeh009@gmail.com', 0, 6000000, 'zarinpal', 0, NULL, '2023-06-17 08:37:52', '2023-06-17 08:37:52'),
(11, NULL, 1, NULL, NULL, '09336344816', NULL, 0, 44410000, 'zarinpal', 0, NULL, '2023-06-17 08:47:46', '2023-06-17 08:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(5, 'write-article', 'نوشتن مقاله', 'web', '2023-06-10 13:40:46', '2023-06-10 13:40:46'),
(6, 'edit-article', 'ویرایش مقاله', 'web', '2023-06-10 13:41:29', '2023-06-10 13:41:29'),
(7, 'delete-article', 'حذف مقاله', 'web', '2023-06-10 13:41:54', '2023-06-10 13:41:54'),
(8, 'add-user', 'افزودن کاربر', 'web', '2023-06-10 13:42:18', '2023-06-10 13:42:18'),
(9, 'edit-user', 'ویرایش کاربر', 'web', '2023-06-10 13:42:50', '2023-06-10 13:42:50'),
(10, 'delete-user', 'حذف کاربر', 'web', '2023-06-10 13:43:44', '2023-06-10 13:43:44');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `guard_name`, `created_at`, `updated_at`) VALUES
(14, 'admin', 'ادمین', 'web', '2023-06-10 14:11:08', '2023-06-10 14:11:08'),
(15, 'writer', 'نویسنده', 'web', '2023-06-10 14:12:22', '2023-06-10 14:12:22'),
(16, 'super-admin', 'ادمین اصلی', 'web', '2023-06-12 16:46:35', '2023-06-12 16:46:35');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `l_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `f_name`, `l_name`, `phone`, `city`, `postal_code`, `avatar`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ali', NULL, NULL, NULL, NULL, NULL, NULL, 'ali@gmail.com', NULL, '1234', NULL, NULL, NULL, 1, NULL, NULL, NULL),
(2, 'زهرا', NULL, NULL, NULL, NULL, NULL, NULL, 'zahraabedizadeh@yahoo.com', NULL, '$2y$10$2daEfF2qWki04xAjkkDhNO9gT6GsDtuhnBEdorURXihrY7h1qQUve', NULL, NULL, NULL, 1, NULL, '2023-06-10 06:50:34', '2023-06-10 06:50:34'),
(3, 'zahra', NULL, NULL, NULL, NULL, NULL, NULL, 'zahra@yahoo.com', NULL, '$2y$10$YpmN6FGUzGP8UjvglI407.R/Khps4FrH6ODba/kpylOrMq5QxIS7e', NULL, NULL, NULL, 1, NULL, '2023-06-10 07:09:39', '2023-06-10 07:09:39'),
(4, 'زهرا', NULL, NULL, NULL, NULL, NULL, NULL, 'zahraabedi@yahoo.com', NULL, '$2y$10$FfEZKV0pmYb92umzbq04p.IRRxEmgKJgx/J6Ylsd745uFwNUHba0q', NULL, NULL, NULL, 1, NULL, '2023-06-10 07:23:53', '2023-06-10 07:23:53'),
(5, 'zahra', NULL, NULL, NULL, NULL, NULL, NULL, 'zahra@gmail.com', NULL, '$2y$10$lxWN9BabT1gUoW7kVrdSGukBKjON0litQiapI0P7frj6nd2rCmbGO', NULL, NULL, NULL, 1, NULL, '2023-06-10 07:35:04', '2023-06-10 07:35:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donations_category_id_foreign` (`category_id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_donation_id_foreign` (`donation_id`),
  ADD KEY `orders_category_id_foreign` (`category_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_donation_id_foreign` FOREIGN KEY (`donation_id`) REFERENCES `donations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
