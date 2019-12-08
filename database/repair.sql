-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 11:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `address`, `created_at`, `updated_at`) VALUES
(2, 'kathmandu', '2019-09-05 12:18:07', '2019-09-05 12:18:07'),
(6, 'Lalitpur', '2019-11-03 12:14:10', '2019-11-03 12:14:10'),
(7, 'Bhaktapur', '2019-11-03 12:14:19', '2019-11-03 12:14:19');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '$2y$10$0z91dfYLdnIO5hnP7DWVn.gY/CaEzw8TVF/W2MtvQTlGbtSCT554q', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `fname`, `email`, `password`, `address`, `phone`, `service_id`, `created_at`, `updated_at`) VALUES
(2, 'Ram Bahadur', 'ram@gmail.com', '$2y$10$BWM8iZm.jt9yCUHpxy/1eeoDhEl05qnPNml78V0C66sf/ENPYiN7q', 'Changunarayan', 986621565, '0', '2019-09-04 23:19:28', '2019-09-04 23:19:28'),
(3, 'Billu Khadka', 'billu@gmail.com', '$2y$10$Cu3Ns2pkJtk3BGs3zNaFle.VX4edp6TZ1CPpHNVSq0lCBpf7J9yy2', 'Basantapur', 986036, '0', '2019-09-20 05:16:13', '2019-09-20 05:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

 CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by_admin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `fname`, `password`, `address`, `phone`, `email`, `image`, `service`, `verified`, `status`, `added_by_admin`, `created_at`, `updated_at`) VALUES
(14, 'Shahrukh Khan', '$2y$10$zzpoceZXGlselp6CFNrPk.K.AFmwMncqqwNHqkWgcGqRQljsREOJq', 'kathmandu', '984561265', 'shahrukh@gmail.com', '/uploads/employee_images/1571475701IMG_20151016_115633 - Copy.jpg', 'Electrician', '1', 'Available', '1', '2019-10-19 03:16:41', '2019-11-05 00:45:42'),
(15, 'Rajesh Hamal', '$2y$10$g/km5qWNsgE8Tr.CjEoMde1vUXTZF.CoGk1uUtyqxfKo8S9op5T/G', 'kathmandu', '9860365404', 'rh@gmail.com', '/uploads/employee_images/1572597881IMG_20160228_202954_454.jpg', 'Electrician', '1', 'Busy', '1', '2019-11-01 02:59:41', '2019-11-03 12:11:56'),
(18, 'Akshay Kumar', '$2y$10$MaSCxEr8IZHawH02OVipue5rSwWtcy8CU6zzFyRM50mCj8NJMFSh.', 'Lalitpur', '9854612365', 'ak@gmail.com', '/uploads/employee_images/1572600415IMG_20160802_135141.jpg', 'Painting', '1', '', '1', '2019-11-01 03:41:55', '2019-11-01 03:41:55'),
(19, 'Hritik Roshan', '$2y$10$xrFjmdh5ENR0gXjxMnYF8.0oMB0uD53u7E2Xk52H50poEdL2Zx/7u', 'Lalitpur', '98456923665', 'roshan@gmail.com', '/uploads/employee_images/1572804067Screenshot_2016-03-08-19-25-17.png', 'Carpentery', '1', 'Available', '1', '2019-11-03 12:16:07', '2019-11-03 12:16:07'),
(20, 'Saugat Malla', '$2y$10$CQ0pCcBSbX3UTxljKiXmHelO.nn2QneU/JfrwE9QlU4FS6HQw/jv6', 'Bhaktapur', '9847067396', 'sm@yahoo.com', '/uploads/employee_images/1572804131Screenshot_2016-03-10-09-29-06.png', 'Painting', '1', 'Available', '1', '2019-11-03 12:17:11', '2019-11-05 00:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(3, 'efdasda', '/uploads/gallery/1571135229ac-repair.jpg', '2019-10-15 04:42:09', '2019-10-15 04:42:09'),
(4, 'cscas', '/uploads/gallery/1571135365cover.jpg', '2019-10-15 04:44:25', '2019-10-15 04:44:25'),
(5, 'sascac', '/uploads/gallery/1571135390roofer-carpenter-working-on-roof-260nw-748292161.webp', '2019-10-15 04:44:50', '2019-10-15 04:44:50');

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
(9, '2019_07_06_125835_create_galleries_table', 2),
(20, '2014_10_12_000000_create_users_table', 3),
(21, '2014_10_12_100000_create_password_resets_table', 3),
(22, '2019_07_03_192137_create_employees_table', 3),
(23, '2019_07_04_020749_create_customers_table', 3),
(24, '2019_07_04_023157_create_services_table', 3),
(25, '2019_07_04_054453_create_admins_table', 3),
(26, '2019_07_05_182056_add_columns_to_users_table', 3),
(27, '2019_07_05_203256_create_sitesettings_table', 3),
(28, '2019_07_06_125952_create_gallery_table', 3),
(29, '2019_09_04_080417_create_requested_services_table', 3),
(30, '2019_09_05_171252_create_addresses_table', 4),
(31, '2019_09_06_054234_add_status_column_in_table_requested_services', 5),
(32, '2019_10_06_040700_create_slide_descs_table', 6),
(33, '2019_11_04_053130_create_time_descs_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requested_services`
--

CREATE TABLE `requested_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `service_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hear_about_us` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assigned_by_admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requested_services`
--

INSERT INTO `requested_services` (`id`, `user_id`, `employee_id`, `service_name`, `time`, `message`, `hear_about_us`, `address`, `assigned_by_admin`, `created_at`, `updated_at`, `status`) VALUES
(21, 2, 14, 'Electrician', '12pm-03pm', 'I have a electricity problem in my bathroom.', 'Facebook', 'kathmandu', '0', '2019-11-03 10:40:53', '2019-11-03 10:46:19', 'Completed'),
(27, 2, 14, 'Electrician', '12pm-03pm', 'sdfs', 'Google', 'kathmandu', '1', '2019-11-03 21:44:46', '2019-11-05 00:45:42', 'Completed'),
(28, 2, NULL, 'Electrician', '03pm-06pm', 'kj,m ,m', 'Facebook', 'Bhaktapur', '0', '2019-11-03 22:08:48', '2019-11-03 22:08:48', 'Available'),
(29, 2, 14, 'Electrician', '12pm-03pm', 'scjca', 'Friends', 'kathmandu', '0', '2019-11-05 00:33:18', '2019-11-05 00:44:19', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `sname`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Carpentery', 'Repair and make new wood furnitures', 'uploads/services/1571131647roofer-carpenter-working-on-roof-260nw-748292161.webp', '2019-10-15 03:42:27', '2019-10-15 03:42:27'),
(9, 'Painting', 'Paint your house and other materials in the house', 'uploads/services/1571131845professional-house-painters.jpeg', '2019-10-15 03:45:45', '2019-10-15 03:45:45'),
(11, 'Electrician', 'Repair and renew all the wiring and electrical materials', 'uploads/services/1571134709images.jfif', '2019-10-15 04:33:29', '2019-10-15 04:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `sitesettings`
--

CREATE TABLE `sitesettings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sitesettings`
--

INSERT INTO `sitesettings` (`id`, `name`, `email`, `address`, `phone`, `e_phone`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'Hamro Marmat Sewa', 'hamromarmatsewa@gmail.com', 'Kirtipur,Kathmandu', '9860365404', '075-520222', 'https://www.facebook.com/iamsurazg', 'http://www.twitter.com', 'https://www.instagram.com/su__raz/', NULL, '2019-10-13 01:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `slide_descs`
--

CREATE TABLE `slide_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_descs`
--

INSERT INTO `slide_descs` (`id`, `title`, `desc`, `image`, `created_at`, `updated_at`) VALUES
(7, 'Get most benifit as minimum Price', 'dvhslzj.vhlkjszdbvksjzdvgnbkj,shdmnvbkj,', '/uploads/gallery/1572852115banner_slider_3.jpg', '2019-11-04 01:36:55', '2019-11-04 01:36:55'),
(8, 'Find best Services', 'All the services required by the customers are available', '/uploads/gallery/1572853024banner_slider_2.jpg', '2019-11-04 01:52:04', '2019-11-04 01:52:04');

-- --------------------------------------------------------

--
-- Table structure for table `time_descs`
--

CREATE TABLE `time_descs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `weekdays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekdays_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekends` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weekends_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `time_descs`
--

INSERT INTO `time_descs` (`id`, `weekdays`, `weekdays_time`, `weekends`, `weekends_time`, `created_at`, `updated_at`) VALUES
(1, 'Sunday-Thursday', '8:00am-7:00pm', 'Friday', '8:00am-2:00pm', '2019-11-04 00:47:36', '2019-11-04 01:09:51'),
(2, 'Sunday-Thursday', '8:00am-5:00pm', 'Friday', '8:00am-2:00pm', '2019-11-04 00:59:07', '2019-11-04 00:59:07'),
(3, 'Sunday-Thursday', '8:00am-6:00pm', 'Friday', '8:00am-3:00pm', '2019-11-04 00:59:36', '2019-11-04 00:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `requested_services`
--
ALTER TABLE `requested_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sitesettings`
--
ALTER TABLE `sitesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_descs`
--
ALTER TABLE `slide_descs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_descs`
--
ALTER TABLE `time_descs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `requested_services`
--
ALTER TABLE `requested_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sitesettings`
--
ALTER TABLE `sitesettings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slide_descs`
--
ALTER TABLE `slide_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `time_descs`
--
ALTER TABLE `time_descs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
