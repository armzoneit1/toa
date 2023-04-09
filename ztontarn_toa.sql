-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2023 at 03:40 AM
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
-- Table structure for table `tb_day`
--

CREATE TABLE `tb_day` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_day`
--

INSERT INTO `tb_day` (`id`, `name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday'),
(6, 'Saturday'),
(7, 'Sunday');

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

--
-- Dumping data for table `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `_id`, `name`, `url`, `icon`, `position`, `sort`, `status`, `delete_status`, `created`, `updated`, `deleted`) VALUES
(1, NULL, 'ผู้ใช้งาน', '/user_add', 'user', 'main', 1, 'on', 'off', '2022-08-04 11:50:41', '2022-08-17 10:28:51', NULL),
(4, NULL, 'Layout', '/layout', 'layers', 'main', 2, 'on', 'off', '2022-08-09 17:20:57', '2022-08-17 10:28:55', NULL),
(5, NULL, 'Playlist', '/playlist', 'fast-forward', 'main', 3, 'on', 'off', '2022-08-10 20:38:09', '2022-08-17 10:28:55', NULL),
(6, NULL, 'Project Setting', '/setting', 'settings', 'main', 4, 'on', 'off', '2022-08-19 16:25:50', '2022-08-19 16:25:50', NULL),
(7, NULL, 'Pre-Record', '/pre_record', 'mic', 'main', 5, 'on', 'off', '2022-08-19 17:18:54', '2022-08-19 17:18:54', NULL);

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
-- Table structure for table `tb_pre_record_repeat`
--

CREATE TABLE `tb_pre_record_repeat` (
  `id` int(11) NOT NULL,
  `record_id` int(11) NOT NULL,
  `day_id` int(11) DEFAULT NULL,
  `repeat_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

--
-- Dumping data for table `tb_setting`
--

INSERT INTO `tb_setting` (`id`, `name`, `image`, `name_image`, `created_at`, `updated_at`) VALUES
(1, 'The Mall Group', 'upload/layout/layout23082022-112206.png', 'A', '2022-11-01 07:42:31', '2022-11-01 07:42:31');

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
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_pre_record_repeat`
--
ALTER TABLE `tb_pre_record_repeat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `record_id` (`record_id`),
  ADD KEY `day_id` (`day_id`),
  ADD KEY `repeat_id` (`repeat_id`);

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
-- Indexes for table `tb_task_repeat`
--
ALTER TABLE `tb_task_repeat`
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
-- AUTO_INCREMENT for table `tb_day`
--
ALTER TABLE `tb_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `tb_pre_record_repeat`
--
ALTER TABLE `tb_pre_record_repeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_task_repeat`
--
ALTER TABLE `tb_task_repeat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_zone`
--
ALTER TABLE `tb_zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pre_record_repeat`
--
ALTER TABLE `tb_pre_record_repeat`
  ADD CONSTRAINT `tb_pre_record_repeat_ibfk_1` FOREIGN KEY (`record_id`) REFERENCES `tb_pre_record` (`id`),
  ADD CONSTRAINT `tb_pre_record_repeat_ibfk_2` FOREIGN KEY (`day_id`) REFERENCES `tb_day` (`id`),
  ADD CONSTRAINT `tb_pre_record_repeat_ibfk_3` FOREIGN KEY (`repeat_id`) REFERENCES `tb_task_repeat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
