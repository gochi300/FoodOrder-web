-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2020 at 06:38 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_order_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2014_10_12_000000_create_products_table', 1),
(4, '2014_10_12_000000_create_notifications_table', 2),
(5, '2014_10_12_000000_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderNumber` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `userId`, `subject`, `message`, `orderNumber`, `created_at`, `updated_at`) VALUES
(1, 1, 'Test Notification', 'Lorem ipsum habitasse suspendisse aptent dapibus ligula conubia libero, massa molestie aliquam urna ornare nulla justo enim pretium, velit scelerisque laoreet rutrum per mollis sollicitudin.', NULL, '2019-11-02 13:54:14', '2019-11-02 13:54:14'),
(6, 1, 'Order ready', 'Order 1572785714988 is ready for collection', NULL, '2019-11-03 12:51:33', '2019-11-03 12:51:33'),
(7, 1, 'Order placed', 'Order 1572793141185 has been placed. Thank you for your purchase', NULL, '2019-11-03 12:59:02', '2019-11-03 12:59:02'),
(8, 1, 'Order ready', 'Order 1572793141185 is ready for collection', NULL, '2019-11-03 12:59:58', '2019-11-03 12:59:58'),
(9, 1, 'Order placed', 'Order 1573393774743 has been placed. Thank you for your purchase', NULL, '2019-11-10 11:49:34', '2019-11-10 11:49:34'),
(10, 1, 'Order ready', 'Order 1573393774743 is ready for collection', NULL, '2019-11-10 11:49:45', '2019-11-10 11:49:45'),
(11, 1, 'Order ready', 'Order 1573393774743 is ready for collection', NULL, '2019-11-10 11:50:03', '2019-11-10 11:50:03'),
(12, 1, 'Order ready', 'Order 1573393774743 is ready for collection', NULL, '2019-11-10 11:50:08', '2019-11-10 11:50:08'),
(13, 1, 'Order ready', 'Order 1573393774743 is ready for collection', NULL, '2019-11-10 11:50:13', '2019-11-10 11:50:13'),
(14, 1, 'Order ready', 'Order 1573393774743 is ready for collection', NULL, '2019-11-10 12:01:44', '2019-11-10 12:01:44'),
(15, 1, 'Order placed', 'Order 1573993269137 has been placed. Thank you for your purchase', 1573993269137, '2019-11-17 10:21:09', '2019-11-17 10:21:09'),
(16, 1, 'Order placed', 'Order 1574991233917 has been placed. Thank you for your purchase', 1574991233917, '2019-11-28 23:33:54', '2019-11-28 23:33:54'),
(17, 1, 'Order placed', 'Order 1576428176809 has been placed. Thank you for your purchase', 1576428176809, '2019-12-15 14:42:54', '2019-12-15 14:42:54'),
(18, 1, 'Order ready', 'Order 1576428176809 is ready for collection', NULL, '2019-12-15 14:44:35', '2019-12-15 14:44:35'),
(19, 1, 'Order placed', 'Order 1576428377526 has been placed. Thank you for your purchase', 1576428377526, '2019-12-15 14:46:15', '2019-12-15 14:46:15'),
(20, 1, 'Order placed', 'Order 1576428495797 has been placed. Thank you for your purchase', 1576428495797, '2019-12-15 14:48:13', '2019-12-15 14:48:13'),
(21, 1, 'Order placed', 'Order 1576428827889 has been placed. Thank you for your purchase', 1576428827889, '2019-12-15 14:53:45', '2019-12-15 14:53:45'),
(22, 1, 'Order placed', 'Order 1576429001660 has been placed. Thank you for your purchase', 1576429001660, '2019-12-15 14:56:39', '2019-12-15 14:56:39'),
(23, 1, 'Order placed', 'Order 1576429226955 has been placed. Thank you for your purchase', 1576429226955, '2019-12-15 15:00:24', '2019-12-15 15:00:24'),
(24, 1, 'Order placed', 'Order 1576429583115 has been placed. Thank you for your purchase', 1576429583115, '2019-12-15 15:06:20', '2019-12-15 15:06:20'),
(25, 1, 'Order placed', 'Order 1576429780161 has been placed. Thank you for your purchase', 1576429780161, '2019-12-15 15:09:37', '2019-12-15 15:09:37'),
(26, 1, 'Order placed', 'Order 1576429959290 has been placed. Thank you for your purchase', 1576429959290, '2019-12-15 15:12:36', '2019-12-15 15:12:36'),
(27, 1, 'Order placed', 'Order 1576430021878 has been placed. Thank you for your purchase', 1576430021878, '2019-12-15 15:13:39', '2019-12-15 15:13:39'),
(28, 1, 'Order placed', 'Order 1576430050128 has been placed. Thank you for your purchase', 1576430050128, '2019-12-15 15:14:07', '2019-12-15 15:14:07'),
(29, 1, 'Order placed', 'Order 1576430137226 has been placed. Thank you for your purchase', 1576430137226, '2019-12-15 15:15:34', '2019-12-15 15:15:34'),
(30, 1, 'Order placed', 'Order 1576430253024 has been placed. Thank you for your purchase', 1576430253024, '2019-12-15 15:17:30', '2019-12-15 15:17:30'),
(31, 1, 'Order placed', 'Order 1576430650498 has been placed. Thank you for your purchase', 1576430650498, '2019-12-15 15:24:08', '2019-12-15 15:24:08'),
(32, 1, 'Order placed', 'Order 1576430849068 has been placed. Thank you for your purchase', 1576430849068, '2019-12-15 15:27:26', '2019-12-15 15:27:26'),
(33, 1, 'Order placed', 'Order 1576431095026 has been placed. Thank you for your purchase', 1576431095026, '2019-12-15 15:31:32', '2019-12-15 15:31:32'),
(34, 1, 'Order placed', 'Order 1576431528962 has been placed. Thank you for your purchase', 1576431528962, '2019-12-15 15:38:46', '2019-12-15 15:38:46'),
(35, 1, 'Order placed', 'Order 1576431825306 has been placed. Thank you for your purchase', 1576431825306, '2019-12-15 15:43:42', '2019-12-15 15:43:42'),
(36, 1, 'Order placed', 'Order 1576432063739 has been placed. Thank you for your purchase', 1576432063739, '2019-12-15 15:47:41', '2019-12-15 15:47:41'),
(37, 1, 'Order placed', 'Order 1572785714988 has been placed. Thank you for your purchase', 1572785714988, '2019-12-16 09:51:34', '2019-12-16 09:51:34'),
(38, 1, 'Order placed', 'Order 1576497190290 has been placed. Thank you for your purchase', 1576497190290, '2019-12-16 09:53:10', '2019-12-16 09:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `productId` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderNumber` bigint(20) NOT NULL,
  `userId` int(11) NOT NULL,
  `orderQty` int(11) NOT NULL,
  `totalPrice` int(11) NOT NULL,
  `orderStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderTime` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productId`, `productName`, `orderNumber`, `userId`, `orderQty`, `totalPrice`, `orderStatus`, `orderTime`, `created_at`, `updated_at`) VALUES
(39, 8, 'Chicken and chips', 1572785714988, 1, 1, 35, 'pending', 'Mon 16 Dec, 2019 13:37:37', '2019-12-16 09:51:34', '2019-12-16 09:51:34'),
(40, 7, 'Fanta', 1572785714988, 1, 1, 8, 'pending', 'Mon 16 Dec, 2019 13:37:37', '2019-12-16 09:51:34', '2019-12-16 09:51:34'),
(41, 5, 'Nshima with beef and vegetables', 1576497190290, 1, 5, 55, 'pending', 'Mon 16 Dec, 2019 13:53:10', '2019-12-16 09:53:10', '2019-12-16 09:53:10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productPrice` int(11) NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `productCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `productPrice`, `productImage`, `productCategory`, `created_at`, `updated_at`) VALUES
(3, 'Nshima with fish and vegetables', 45, '1571574174-1.jpg', 'food', '2019-10-20 10:22:55', '2019-10-20 10:22:55'),
(5, 'Nshima with beef and vegetables', 55, '1571579280-1.jpg', 'food', '2019-10-20 11:48:00', '2019-10-20 11:48:00'),
(6, 'Coca Cola', 8, '1572107428-1.jpg', 'drinks', '2019-10-26 14:30:28', '2019-10-26 14:30:28'),
(7, 'Fanta', 8, '1572183163-1.jpg', 'drinks', '2019-10-27 11:32:43', '2019-10-27 11:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@foodorder.com', '$2y$10$GG7IUV/Cp0Gj4lHUf3azQ.l9epM/T4Nlse6T9zwDaQNVXON9LjZRO', '66KD0p5Y8pb6zQhQEZUpGslnNuWYes0dDPAsTESs8YsscnOiVudc6i0a0mpG', '2019-10-19 19:34:30', '2019-10-19 19:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `users_android`
--

CREATE TABLE `users_android` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobileNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nrcNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateOfBirth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_android`
--

INSERT INTO `users_android` (`id`, `fullName`, `mobileNumber`, `nrcNumber`, `dateOfBirth`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Chuck Norris', '123445566', '123456/10/1', 'Fri 01 Nov, 2019', '123456', '2019-11-02 09:13:46', '2019-11-02 09:13:46'),
(8, 'John Doe', '0977123456', '12345/10/1', 'Fri 01 Nov, 2019', '123456', '2019-11-02 09:35:36', '2019-11-02 09:35:36'),
(9, 'mubita simalumba', '0969600842', '205902/81/1', 'Thu 22 Nov, 1900', '123456', '2019-11-03 12:56:52', '2019-11-03 12:56:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_android`
--
ALTER TABLE `users_android`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_android`
--
ALTER TABLE `users_android`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
