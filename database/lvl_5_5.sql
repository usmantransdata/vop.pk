-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2017 at 09:38 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvl_5.5`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_template`
--

CREATE TABLE `assign_template` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `template_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assign_template`
--

INSERT INTO `assign_template` (`id`, `name`, `template_id`, `created_at`, `updated_at`) VALUES
(1, 'New User Registration Email', 1, NULL, NULL),
(2, 'Forgot Password Email', 2, NULL, NULL),
(129, 'Welcome Email', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `title`, `subject`, `avatar`, `template`, `created_at`) VALUES
(1, '{!! $user->name !!}', 'Thank You For Registration!', NULL, '<!-- 3 column layout with 20px spacing -->\r\n<table width=\"400\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\">\r\n  <tbody><tr>\r\n    <td width=\"120\">\r\n      <h2>Column 1</h2>\r\n      <p>What\'s the best part about TCP jokes? I get to keep telling them until you get them.</p>\r\n    </td>\r\n    <td width=\"20\"> </td>\r\n    <td width=\"120\"></td><td width=\"20\"></td><td width=\"120\"><br></td></tr></tbody></table>', NULL),
(2, 'Forgot Password', 'Forgot Password', NULL, '<p>dsadsadsadasdasdsadad<b>dasdasdsad</b></p>', NULL),
(3, 'Confirmation email', 'Verification', NULL, '<p>dsadsadsadasdasdsadad<b>dasdasdsad</b></p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_11_15_141507_create_permission_tables', 2),
(4, '2017_11_15_142114_create_posts_table', 3),
(6, '2017_11_15_145143_add_status_to_users', 4),
(7, '2017_11_15_145954_create_users_activation_table', 4),
(9, '2017_11_20_123100_add_author_id_to_users_table', 5),
(10, '2017_11_20_135807_create_email_template_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(1, 1, 'App\\User'),
(2, 2, 'App\\User'),
(2, 8, 'App\\User'),
(2, 10, 'App\\User');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('user@gmail.com', '$2y$10$wKT2lpGRPxbr9cnLYgMOW.Adv0NDJkG3ZYHneGVjvj6k17D2hkszW', '2017-11-22 09:46:33'),
('hecki@gmail.com', '$2y$10$VZf/jCzecV0gAwlwlFd1nulVmXZDbREmRGF/Dx7IznoUqLFc14JRm', '2017-11-22 11:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Administer roles & permissions', 'web', '2017-11-15 09:31:19', '2017-11-15 09:31:19'),
(2, 'Create Post', 'web', '2017-11-15 09:36:36', '2017-11-15 09:37:55'),
(3, 'Delete Post', 'web', '2017-11-15 09:38:02', '2017-11-15 09:38:02'),
(4, 'Add Users', 'web', '2017-11-15 09:38:08', '2017-11-15 09:38:08'),
(5, 'Edit Post', 'web', '2017-11-15 09:38:14', '2017-11-15 09:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`, `author_id`, `created_at`, `updated_at`) VALUES
(1, 'new title of a post', 'hello new post how\'s you been', 'new-title-of-a-post', 1, '2017-11-20 07:20:19', '2017-11-20 07:20:19'),
(2, 'DataTables', 'dsdad', 'datatables', 1, '2017-11-20 07:25:01', '2017-11-20 07:25:01');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2017-11-15 09:35:46', '2017-11-15 09:35:46'),
(2, 'User', 'web', '2017-11-15 09:38:50', '2017-11-15 09:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `verification_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `verified`, `verification_token`) VALUES
(1, 'hecki', 'hecki@gmail.com', '$2y$10$1Cc6Vd6h7jsm5X91fLH2Veb67Cu/0Mzdfq5iuxFIyczWmjNl.F30G', 'nQDJWwtCtIU59n7h9mOCkx5lSMVn0rUdu1YxXfTlolJ4Zv73OMrcXscAfmRI', '2017-11-15 08:49:05', '2017-11-16 10:10:12', 1, ''),
(2, 'user', 'user@gmail.com', '$2y$10$1Cc6Vd6h7jsm5X91fLH2Veb67Cu/0Mzdfq5iuxFIyczWmjNl.F30G', 'JQyqbeDyTSP4fq7yYUjRg8ayPJHBlAnZpBy07ZolqlnDtIMU3VflKSA6DPbW', '2017-11-15 09:39:23', '2017-11-16 10:13:03', 1, NULL),
(10, 'fiaz', 'abc@gmail.com', '$2y$10$N1NTgMGW/d5MOKqbq/nqFuxGv5nRH8/CHNRGEKZBz9cz5QTNUJYRS', 'uyca9NUzplKiutGBkhIHtZjZNMgTYswIAD5RJcqPgQUmijYxY3ebcFlQZr9Y', '2017-11-15 10:48:21', '2017-11-16 10:14:50', 1, NULL),
(11, 'rohan', 'rohan@gmail.com', '$2y$10$TgIFLT8hzOs2SPjcwV5G2O8Ptcq0llosbqHR5Byl7dTUgTkHqwXHu', 'GqYWUldi8KuE4IwEEhK7w0wgH1GpikU3aBhbQREJZFhFxASdjuCbuCNutxLr', '2017-11-17 10:55:37', '2017-11-17 10:55:38', 1, NULL),
(81, 'Dsadasd', 'dsada@gmail.com', '$2y$10$BRQw1awepjmyV4ae28NzEutfbApUO87dgn/phWZjTDqZ4RlyeyxP.', NULL, '2017-11-22 06:28:04', '2017-11-22 06:28:04', 0, 'ong5Z7Ig4fcONwNwHsVTjfQlP'),
(82, 'dsad', 'dsadas@gmail.com', '$2y$10$nMc8IlYrUBYemfyRZF1TKuhEud7cjntDL6WDsnBQUXatWlEj3FMSa', NULL, '2017-11-22 06:28:51', '2017-11-22 06:28:51', 0, 'zDWybrCpGNDZvXBzLmSUDcn00'),
(85, 'fiaz', '123@gmail.com', '$2y$10$14dzEf2IwOfAzcUweMwXD.aVG3q9vQrDeJ6aVTrsZ/60.SvteRes2', NULL, '2017-11-22 06:54:22', '2017-11-22 06:54:22', 0, 'T6p5SfN7UGq1JUhCWffaXih02'),
(123, 'verification', 'verification@gmail.com', '$2y$10$L7ma/qYZ50t83x7ZNjKb/eHUiX3XizwnE1DHfF88xS3ulpbFoNnhi', NULL, '2017-11-22 10:55:25', '2017-11-22 10:55:25', 0, 'ngyQ1Z7dO5EyQRzOd68fS0vyX'),
(124, 'fdsffs', 'fdsh@gmail.com', '$2y$10$s2YmiNdxEVM7xbu0ANcXcumgVYwmDZx1l4lMMBvN2qZpgKQF../Mi', NULL, '2017-11-22 10:56:30', '2017-11-22 10:56:30', 0, 'Ob5b0znZFhRxtOhr9I5SfQB5g'),
(125, 'asdaddsa', 'hdasd@gmail.com', '$2y$10$DyLszkCMu.J9G.uBmBXR2.X/4AeDhYkg.ZavuwLlt4141bqDAd2zu', NULL, '2017-11-22 10:57:00', '2017-11-22 10:57:00', 0, 'guRJzgfI7Tpmn9T7sdlJtCm6l'),
(126, 'hecki', 'hecki123@gmail.com', '$2y$10$DBS5abu/Oro9F2Py3CIhxu0kGBSLOisYM5psk2yLnYW1VMpQ8gKZi', NULL, '2017-11-22 11:03:59', '2017-11-22 11:03:59', 0, 'Hy8ilyZpg6s0HARFEVpz5uMsX'),
(127, 'dasd', 'dsad@gmail.com', '$2y$10$yoCZIr2GEmQM2OhgEdEl.udjHgSjpu1q85YO.7uOvJh.DyT9tyJOG', NULL, '2017-11-23 03:06:22', '2017-11-23 03:06:23', 0, 'jdo4385mz707UfiPZiYurAi4b');

-- --------------------------------------------------------

--
-- Table structure for table `users_activation`
--

CREATE TABLE `users_activation` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_template`
--
ALTER TABLE `assign_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users_activation`
--
ALTER TABLE `users_activation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_activation_id_user_foreign` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_template`
--
ALTER TABLE `assign_template`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users_activation`
--
ALTER TABLE `users_activation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users_activation`
--
ALTER TABLE `users_activation`
  ADD CONSTRAINT `users_activation_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
