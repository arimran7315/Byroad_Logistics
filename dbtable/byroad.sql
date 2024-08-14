-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 09:11 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `byroad`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `addBy` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `category`, `image`, `tag`, `addBy`, `created_at`, `updated_at`) VALUES
(1, 'THE ULTIMATE GUIDE TO CHOOSING THE RIGHT AUTO TRANSPORT COMPANY', 'In today\'s fast-paced world, the need for auto transport services has become increasingly prevalent. Whether you\'re relocating to a new city, purchasing a vehicle online, or attending an out-of-state event, finding a reliable auto transport company is essential for ensuring the safe and timely delivery of your vehicle. With numerous options available in the market, choosing the right auto transport company can seem like a daunting task. However, with careful consideration and research, you can find a reputable company that meets your needs and provides peace of mind throughout the shipping process.', 'Auto Transport', 'blog/iFeVayPLZJVo9CukafhXYttrGjW9cZjgJw94rPaR.jpg', 'Auto Transport', 'admin', '2024-05-10 03:02:05', '2024-05-10 03:02:05'),
(2, 'TIPS FOR SAFE VEHICLE SHIPPING', 'In today\'s globalized world, vehicle shipping has become increasingly common, whether you\'re relocating to a new city, purchasing a car online, or sending a vehicle to a loved one. While the prospect of shipping your vehicle may seem daunting, following some simple guidelines can ensure a smooth and safe transport process.', 'Tips', 'blog/xEaDo1Jl8LHf1B4ny5zIa0czuYZ9sry3Z3WRKRpr.jpg', 'Tips', 'admin', '2024-05-10 03:05:13', '2024-05-10 03:05:13');

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
(7, '2024_05_07_102550_create_users_table', 1),
(8, '2024_05_07_124202_create_qoutes_table', 1),
(9, '2024_05_10_052219_create_blogs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `qoutes`
--

CREATE TABLE `qoutes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `make` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `miles` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qoutes`
--

INSERT INTO `qoutes` (`id`, `from`, `to`, `name`, `email`, `phone`, `date`, `make`, `model`, `year`, `condition`, `career`, `miles`, `created_at`, `updated_at`) VALUES
(1, 'Faisalabad', 'Islamabad', 'Meer Hadi', 'meerhadi1058@gmail.com', '03061061544', '2024-05-11', 'Honda', 'Civic', '2022', 'Inoperable', 'Enclosed', '158', '2024-05-10 04:36:51', '2024-05-10 04:36:51'),
(2, 'Faisalabad', 'Islamabad', 'Meer Hadi', 'meerhadi1058@gmail.com', '03061061544', '2024-05-11', 'Honda', 'Civic', '2022', 'Inoperable', 'Enclosed', '158', '2024-05-10 04:38:59', '2024-05-10 04:38:59'),
(3, 'Peshawar City Tehsil', 'Islamabad', 'Abdul Rehman', 'abdulrehman.sherserve@gmail.com', '03061061544', '2024-05-21', 'Chrolla', 'GLI', '2000', 'Operable', 'Open', '88', '2024-05-10 04:59:24', '2024-05-10 04:59:24'),
(4, 'Peshawar City Tehsil', 'Islamabad', 'Abdul Rehman', 'abdulrehman.sherserve@gmail.com', '03061061544', '2024-05-21', 'Chrolla', 'GLI', '2000', 'Operable', 'Open', '88', '2024-05-10 05:00:22', '2024-05-10 05:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin.admin@gmail.com', 'admin', '2024-05-10 02:59:00', '2024-05-10 02:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qoutes`
--
ALTER TABLE `qoutes`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `qoutes`
--
ALTER TABLE `qoutes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
