-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 05:36 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ztontarn_toa`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `titleTH` text NOT NULL,
  `titleEN` text NOT NULL,
  `titleCN` text NOT NULL,
  `detailTH` text NOT NULL,
  `detailEN` text NOT NULL,
  `detailCN` text NOT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `createAT` timestamp NOT NULL DEFAULT current_timestamp(),
  `updateAT` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_amupur`
--

CREATE TABLE `tb_amupur` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_day`
--

CREATE TABLE `tb_day` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_layout`
--

CREATE TABLE `tb_layout` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `height` double(6,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_logs`
--

CREATE TABLE `tb_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_log` enum('frontend','backend') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_log` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_line` int(11) DEFAULT NULL,
  `error_url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` enum('main','secondary') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `delete_status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_model`
--

CREATE TABLE `tb_model` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_model_list`
--

CREATE TABLE `tb_model_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `model_id` int(11) DEFAULT NULL,
  `code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `check_point` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `broken_item` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_music`
--

CREATE TABLE `tb_music` (
  `id` int(11) NOT NULL,
  `playlist_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `music` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_playlist`
--

CREATE TABLE `tb_playlist` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `volume` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pre_record`
--

CREATE TABLE `tb_pre_record` (
  `id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `task_active` tinyint(1) NOT NULL DEFAULT 1,
  `task_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `task_date` date DEFAULT NULL,
  `task_duration` int(11) DEFAULT NULL,
  `task_start` time DEFAULT NULL,
  `task_end` time DEFAULT NULL,
  `task_repeat` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `task_loop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_province`
--

CREATE TABLE `tb_province` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_record_from_user`
--

CREATE TABLE `tb_record_from_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `length` int(11) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role_list`
--

CREATE TABLE `tb_role_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `read` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `add` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `edit` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `delete` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_setting`
--

CREATE TABLE `tb_setting` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name_image` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tambon`
--

CREATE TABLE `tb_tambon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amupur_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_task_repeat`
--

CREATE TABLE `tb_task_repeat` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_translate`
--

CREATE TABLE `tb_translate` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_th` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'on',
  `delete_status` enum('on','off') COLLATE utf8mb4_unicode_ci DEFAULT 'off',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'user', '1234', 'U', '2022-08-04 05:27:37', '2022-08-04 06:47:16'),
(3, 'admin', '1234', 'A', '2022-08-23 07:58:22', '2022-08-23 07:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_zone`
--

CREATE TABLE `tb_zone` (
  `id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `color` varchar(7) NOT NULL,
  `image` varchar(255) NOT NULL,
  `source` int(2) DEFAULT 0,
  `volume` int(11) NOT NULL DEFAULT 100,
  `x_value` double(7,4) DEFAULT NULL,
  `y_value` double(7,4) DEFAULT NULL,
  `frame_id` int(3) DEFAULT NULL,
  `output_id` int(3) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('pending','inactive','active','banned') COLLATE utf8mb4_unicode_ci DEFAULT 'active',
  `theme` enum('B','W') COLLATE utf8mb4_unicode_ci DEFAULT 'B',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `firstname`, `lastname`, `username`, `password`, `remember_token`, `detail`, `status`, `theme`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Orange', 'Dev', 'admin', '$2y$10$Xrh7POXf2fH2kRtOpQEru.RJkG1yPg45pdd51x/2OqrizQTKnQgDO', NULL, NULL, 'active', 'W', NULL, '2022-06-13 14:53:04', '2023-01-25 13:26:25'),
(2, 'U', 'Orange', 'User', 'user', '$2y$10$zCTGmUbliM91BgTCaPRGneNacO1vnu7w90DsPg6GK0DeazT6/cTBi', NULL, NULL, 'active', 'W', NULL, NULL, '2023-01-25 13:25:55'),
(3, 'U', 'Nattachai', 'Supharojanee', 'nattachai', '$2y$10$zCTGmUbliM91BgTCaPRGneNacO1vnu7w90DsPg6GK0DeazT6/cTBi', NULL, NULL, 'active', 'B', NULL, '2022-08-23 21:46:52', '2022-09-01 17:58:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_amupur`
--
ALTER TABLE `tb_amupur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_day`
--
ALTER TABLE `tb_day`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_layout`
--
ALTER TABLE `tb_layout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_logs`
--
ALTER TABLE `tb_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_model`
--
ALTER TABLE `tb_model`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_model_list`
--
ALTER TABLE `tb_model_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_music`
--
ALTER TABLE `tb_music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_playlist`
--
ALTER TABLE `tb_playlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pre_record`
--
ALTER TABLE `tb_pre_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_province`
--
ALTER TABLE `tb_province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_record_from_user`
--
ALTER TABLE `tb_record_from_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_role_list`
--
ALTER TABLE `tb_role_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_setting`
--
ALTER TABLE `tb_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tambon`
--
ALTER TABLE `tb_tambon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_task_repeat`
--
ALTER TABLE `tb_task_repeat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_translate`
--
ALTER TABLE `tb_translate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_zone`
--
ALTER TABLE `tb_zone`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_amupur`
--
ALTER TABLE `tb_amupur`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_day`
--
ALTER TABLE `tb_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_layout`
--
ALTER TABLE `tb_layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_logs`
--
ALTER TABLE `tb_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_model`
--
ALTER TABLE `tb_model`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_model_list`
--
ALTER TABLE `tb_model_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_music`
--
ALTER TABLE `tb_music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_playlist`
--
ALTER TABLE `tb_playlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pre_record`
--
ALTER TABLE `tb_pre_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_province`
--
ALTER TABLE `tb_province`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_record_from_user`
--
ALTER TABLE `tb_record_from_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_role_list`
--
ALTER TABLE `tb_role_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_setting`
--
ALTER TABLE `tb_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tambon`
--
ALTER TABLE `tb_tambon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_task_repeat`
--
ALTER TABLE `tb_task_repeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_translate`
--
ALTER TABLE `tb_translate`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_zone`
--
ALTER TABLE `tb_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
