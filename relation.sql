-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2024 at 09:18 PM
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
-- Database: `relation`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`) VALUES
(1, 'Web Developement'),
(2, 'Android'),
(3, 'Databases'),
(4, 'Operating System'),
(5, 'Others\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_comment` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `id_comment`, `created_at`, `updated_at`) VALUES
(16, 'Download the latest DAT package (avvepoxxxxdat.zip) from our Security Updates site.', 27, '2024-02-07 17:44:27', '2024-02-07 17:44:27'),
(17, 'Click DAT Package For Use with McAfee ePO and download the DAT package.', 27, '2024-02-07 17:44:43', '2024-02-07 17:44:43');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(5, '1707269420.png', 1, '2024-02-07 00:30:20', '2024-02-07 00:30:20'),
(6, '1707567514.jpg', 8, '2024-02-10 11:18:34', '2024-02-10 11:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_story` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title`, `content`, `id_story`, `id_category`, `created_at`, `updated_at`) VALUES
(24, 'how to make float in css ?', 'i have elment in left side page i want to make it in center of page', 1, 1, NULL, '2024-02-09 16:50:21'),
(25, 'mysql vs sql ?', 'what is deference betwen sql & mysql ?', 1, 3, NULL, '2024-02-06 20:45:04'),
(26, 'What is an OS meaning?', 'is the program that, after being initially loaded into the computer', 1, 4, NULL, NULL),
(27, 'how to install dart', 'how to install dart', 1, 2, NULL, NULL),
(28, 'Cannot refresh edited program code', 'ServerName admin.fxmagician.com\r\n	ServerAlias www.admin.fxmagician.com\r\n	DocumentRoot /var/www/admin.fxmagician.com/public/\r\n\r\n	<Directory /var/www/admin.fxmagician.com/public>\r\n		Options All -Indexes\r\n		AllowOverride All\r\n		Require all granted\r\n	</Directory>', 1, 1, NULL, NULL),
(29, 'about useffect hook in reect js', 'when i can use dependency in uuseffect function in react js', 1, 3, '2024-02-06 19:45:09', '2024-02-06 19:45:09'),
(30, 'how to install vs code ?', 'i want to install vs code on my linux system', 10, 1, '2024-02-09 17:22:26', '2024-02-09 17:22:26'),
(31, 'about security', 'give me definition about  Cross-site scripting (XSS) ??', 3, 5, '2024-02-09 19:43:05', '2024-02-09 19:43:05'),
(32, 'هياكل البيانات', 'ماهو الفرق بين stack و linkdlist ?', 8, 5, '2024-02-10 11:26:24', '2024-02-10 11:27:36'),
(33, 'MVC Design pa in Laravel', 'how this design work ?', 12, 1, '2024-02-10 18:00:13', '2024-02-10 18:00:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(11) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `google_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `FirstName`, `LastName`, `email`, `mobile`, `confirm`, `password`, `google_id`, `created_at`, `updated_at`) VALUES
(1, 'abdel', 'abdel', 'abdel', 'oran', 4890987, '', '$2y$12$T/QlblhtY7MxH0p0NO/0HeJlYXHxuPpdMd/Jv/.dLirynM9enDK6W', '', '2024-01-31 12:46:31', '2024-01-31 12:46:31'),
(3, 'admin', 'admin', 'admin', 'alger', 456789097, '', '$2y$12$75yPWdHhxiAJqGKmkUpeA.x5x/zCupdHPpmYtj2AkVjuUQZtwvXDW', '', '2024-01-31 12:55:36', '2024-01-31 12:55:36'),
(4, 'ahmed', 'ahmed', 'mohamed', 'batna', 34567, '', '$2y$12$9g9iVLW1l.WIFJRyEZqV7OTUqtOa1NUbF9moS8PJ5ajJKFLU8V4YK', '', '2024-01-31 17:28:25', '2024-01-31 17:28:25'),
(6, 'amira', 'amira', 'amira', 'oran', 4567897, '', '$2y$12$Y8bHm4lbC7I42JzTl96KOOwDz24dph3PnMw9UD0VNrHwGKSR4eBd2', '', '2024-02-02 14:51:59', '2024-02-02 14:51:59'),
(7, 'ahmed', 'ahmed', 'mohamed', 'amzouna', 456789, 'gta', '$2y$12$r3w5QnAyEt7R2mwb6OMEPubQvfkL7dYiPDrNFRSQCX/NP8W4XSL5e', '', '2024-02-03 20:13:38', '2024-02-03 20:13:38'),
(8, 'karim123', 'karim', 'mahmoud', 'karimamah@gmail.com', 46805587, '123', '$2y$12$C9e2RCEPL11wTVwCP4oY6Oj0pJYVIcvLslph8pWZyf5luZtx79ul.', '', '2024-02-04 18:41:52', '2024-02-04 18:41:52'),
(9, 'karim123', 'karim', 'mahmoud', 'karimamah@gmail.com', 46805587, '123', '$2y$12$NWow1iZYy3hlv2zIS51KeeGXGIra02h2GU5nrf0dlivd6D3pNun2G', '', '2024-02-04 18:42:15', '2024-02-04 18:42:15'),
(10, 'anes', 'anes', 'maziane', 'ande@mezeiane.com', 66661245, '0000', '$2y$12$pQiGXC/fsNn9NVgN2.0WruwvqQtSmcqkff19ssbISixuo9thMhOka', '', '2024-02-04 18:44:04', '2024-02-04 18:44:04'),
(11, 'malak', 'malak', 'amoule', 'mallak@gmail.com', 2222222, '9999', '$2y$12$Kk2HHeC9jr1uSv87tOVrUeIb.ZJkVJGeLNsB.EcS4JzJ52/tQe/.G', '', '2024-02-04 18:46:02', '2024-02-04 18:46:02'),
(12, 'Ould Hennia Abdelkader', 'unknow', 'unknow', 'ouldhenniaabdelkader@gmail.com', 0, 'unknow', '$2y$12$aZSi39wD2DfXNxfUvO89NOFeGp8gXN0D47iCEmZtCPYGP0WRt0Fbu', '111484909699827994257', '2024-02-10 17:53:08', '2024-02-10 17:53:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_comment` (`id_comment`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profils_user_id_unique` (`user_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_story` (`id_story`),
  ADD KEY `id_categorie` (`id_category`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_comment`) REFERENCES `stories` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `stories`
--
ALTER TABLE `stories`
  ADD CONSTRAINT `stories_ibfk_1` FOREIGN KEY (`id_story`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `stories_ibfk_2` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
