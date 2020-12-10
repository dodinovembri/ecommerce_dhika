-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 05:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_dhika_code`
--

-- --------------------------------------------------------

--
-- Table structure for table `advantage`
--

CREATE TABLE `advantage` (
  `id` bigint(20) NOT NULL,
  `advantage_title` varchar(255) NOT NULL,
  `advantage_icon` varchar(100) NOT NULL,
  `advantage_description` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advantage`
--

INSERT INTO `advantage` (`id`, `advantage_title`, `advantage_icon`, `advantage_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Free Shipping', 'shipping1.jpg', 'Free shipping on all US order or order above $200', 1, '2020-11-28 03:44:44', '2020-11-28 03:44:44', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) NOT NULL,
  `blog_image` char(50) NOT NULL,
  `blog_date` date NOT NULL,
  `blog_type` varchar(50) NOT NULL,
  `blog_short_description` varchar(255) NOT NULL,
  `blog_description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `blog_image`, `blog_date`, `blog_type`, `blog_short_description`, `blog_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, '5fc36993b48a3.jpg', '2020-11-29', 'eCommerce', 'Lorem ipsum dolor sit amet, Lorem ipsum dolor sit amet,Lorem ipsum dolor sit amet.', NULL, 1, '2020-11-29 02:27:47', '2020-11-29 02:27:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `total_price` double(18,2) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `total_price`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(17, 1, 23234.00, 1, '2020-12-10 09:40:32', '2020-12-10 09:40:32', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `cart_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` bigint(20) NOT NULL,
  `price` double(18,2) NOT NULL,
  `subtotal` double(18,2) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `user_id`, `cart_id`, `product_id`, `qty`, `price`, `subtotal`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(26, 1, 17, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 09:40:32', '2020-12-10 09:40:32', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` bigint(20) NOT NULL,
  `currency_code` varchar(255) NOT NULL,
  `currency_name` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `currency_code`, `currency_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'IDR', 'Rupiah', 1, '2020-11-27 07:39:15', '2020-11-27 07:39:15', NULL, NULL),
(2, 'USD', 'Dollar', 1, '2020-11-28 03:00:28', '2020-11-28 03:00:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `languange`
--

CREATE TABLE `languange` (
  `id` bigint(20) NOT NULL,
  `languange_code` varchar(255) NOT NULL,
  `languange_name` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languange`
--

INSERT INTO `languange` (`id`, `languange_code`, `languange_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'ID', 'Indonesia', 1, '2020-11-27 07:36:25', '2020-11-27 07:36:25', NULL, NULL),
(2, 'EN', 'English', 1, '2020-11-28 02:34:26', '2020-11-28 02:34:26', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `order_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `qty` bigint(20) DEFAULT NULL,
  `price` double(18,2) DEFAULT NULL,
  `subtotal` double(18,2) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `user_id`, `order_id`, `product_id`, `qty`, `price`, `subtotal`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 1, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 06:09:48', '2020-12-10 06:09:48', 1, NULL),
(2, 1, 1, 1, 1, 465789.00, 465789.00, 1, '2020-12-10 06:09:48', '2020-12-10 06:09:48', 1, NULL),
(3, 1, 2, 2, 2, 23234.00, 46468.00, 1, '2020-12-10 06:41:11', '2020-12-10 06:41:11', 1, NULL),
(4, 1, 3, 1, 1, 465789.00, 465789.00, 1, '2020-12-10 06:46:31', '2020-12-10 06:46:31', 1, NULL),
(5, 1, 4, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 06:56:01', '2020-12-10 06:56:01', 1, NULL),
(6, 1, 5, 1, 3, 465789.00, 1397367.00, 1, '2020-12-10 08:02:52', '2020-12-10 08:02:52', 1, NULL),
(7, 1, 5, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 08:02:52', '2020-12-10 08:02:52', 1, NULL),
(8, 1, 6, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 08:04:19', '2020-12-10 08:04:19', 1, NULL),
(9, 1, 6, 1, 1, 465789.00, 465789.00, 1, '2020-12-10 08:04:19', '2020-12-10 08:04:19', 1, NULL),
(10, 1, 7, 2, 2, 23234.00, 46468.00, 1, '2020-12-10 08:05:05', '2020-12-10 08:05:05', 1, NULL),
(11, 1, 8, 1, 1, 465789.00, 465789.00, 1, '2020-12-10 08:26:28', '2020-12-10 08:26:28', 1, NULL),
(12, 1, 9, 1, 2, 465789.00, 931578.00, 1, '2020-12-10 08:31:28', '2020-12-10 08:31:28', 1, NULL),
(13, 1, 10, 1, 1, 465789.00, 465789.00, 1, '2020-12-10 08:41:02', '2020-12-10 08:41:03', 1, NULL),
(14, 1, 10, 2, 1, 23234.00, 23234.00, 1, '2020-12-10 08:41:03', '2020-12-10 08:41:03', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `total_price` double(18,2) DEFAULT NULL,
  `payment_method_id` bigint(20) DEFAULT NULL,
  `total_point_used` double(18,2) DEFAULT NULL,
  `total_voucher` double(18,2) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `user_id`, `total_price`, `payment_method_id`, `total_point_used`, `total_voucher`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 489023.00, 1, NULL, 24451.15, 2, '2020-12-10 06:09:48', '2020-12-10 06:09:48', 1, NULL),
(2, 1, 46468.00, 1, NULL, NULL, 2, '2020-12-10 06:41:11', '2020-12-10 06:41:11', 1, NULL),
(3, 1, 465789.00, 1, NULL, NULL, 2, '2020-12-10 06:46:31', '2020-12-10 06:46:31', 1, NULL),
(4, 1, 23234.00, 1, NULL, NULL, 2, '2020-12-10 06:56:01', '2020-12-10 06:56:01', 1, NULL),
(5, 1, 1420601.00, 1, NULL, 71030.05, 2, '2020-12-10 08:02:52', '2020-12-10 08:02:52', 1, NULL),
(6, 1, 465789.00, 1, NULL, NULL, 2, '2020-12-10 08:04:18', '2020-12-10 08:04:18', 1, NULL),
(7, 1, 46468.00, 1, NULL, NULL, 2, '2020-12-10 08:05:05', '2020-12-10 08:05:05', 1, NULL),
(8, 1, 465789.00, 1, NULL, NULL, 2, '2020-12-10 08:26:28', '2020-12-10 08:26:28', 1, NULL),
(9, 1, 931578.00, 1, NULL, NULL, 2, '2020-12-10 08:31:27', '2020-12-10 08:31:27', 1, NULL),
(10, 1, 489023.00, 1, NULL, NULL, 2, '2020-12-10 08:41:02', '2020-12-10 08:41:02', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` bigint(20) NOT NULL,
  `partner_name` varchar(100) NOT NULL,
  `partner_image` char(50) NOT NULL,
  `partner_link` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_name`, `partner_image`, `partner_link`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Partner 1', '5fc36d70b205c.jpg', 'http://www.google.com', 1, '2020-11-29 02:44:16', '2020-11-29 02:44:16', NULL, NULL);

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
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` bigint(20) NOT NULL,
  `payment_method_code` varchar(255) NOT NULL,
  `payment_method_name` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `payment_method_code`, `payment_method_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'CA', 'Cash', 1, '2020-12-09 08:51:38', '2020-12-09 08:51:38', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category_id` bigint(20) NOT NULL,
  `price` double(18,2) DEFAULT NULL,
  `product_image` char(50) DEFAULT NULL,
  `product_sub_image` char(50) DEFAULT NULL,
  `badge_text` varchar(30) DEFAULT NULL,
  `badge_sub_text` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_code`, `product_name`, `product_category_id`, `price`, `product_image`, `product_sub_image`, `badge_text`, `badge_sub_text`, `description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, '11190', 'prew', 4, 465789.00, '5fcc217b7ca17.jpg', '5fcc217b80afb.jpg', 'NEW', 'SALE', 'qweqw', 1, '2020-12-05 17:10:35', '2020-12-05 17:10:35', NULL, NULL),
(2, '093', 'prew', 4, 23234.00, '5fcc2da437000.jpg', '5fcc2da43a0eb.jpg', 'NEW\r\n', 'SALE', 'dsfsdf', 1, '2020-12-05 18:02:28', '2020-12-05 18:02:28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_banner`
--

CREATE TABLE `product_banner` (
  `id` bigint(20) NOT NULL,
  `product_banner_code` varchar(20) NOT NULL,
  `product_banner_image` char(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_best`
--

CREATE TABLE `product_best` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `new_price` double(18,2) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_best`
--

INSERT INTO `product_best` (`id`, `product_category_id`, `product_id`, `new_price`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 4, 1, 8000.00, 1, '2020-12-05 17:11:55', '2020-12-05 17:11:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) NOT NULL,
  `product_category_code` varchar(255) NOT NULL,
  `product_category_name` varchar(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_category_code`, `product_category_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(4, 'ACS', 'Accessories', 1, '2020-11-28 03:08:39', '2020-11-28 03:08:39', NULL, NULL),
(5, 'ACM', 'Accessories & More', 1, '2020-11-28 03:09:20', '2020-11-28 03:09:20', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_deal`
--

CREATE TABLE `product_deal` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `valid_until` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `new_price` double(18,2) DEFAULT NULL,
  `badge_text` varchar(30) DEFAULT NULL,
  `badge_sub_text` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_deal`
--

INSERT INTO `product_deal` (`id`, `product_category_id`, `product_id`, `valid_until`, `new_price`, `badge_text`, `badge_sub_text`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(2, 4, 1, '2020-12-06 00:11:34', 8000.00, 'SALE', 'NEW', 1, '2020-12-05 17:11:34', '2020-12-05 17:11:34', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_home`
--

CREATE TABLE `product_home` (
  `id` bigint(20) NOT NULL,
  `product_home_title` varchar(255) NOT NULL,
  `product_home_sub_title` varchar(255) NOT NULL,
  `product_home_description` text NOT NULL,
  `product_home_image` char(50) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_home`
--

INSERT INTO `product_home` (`id`, `product_home_title`, `product_home_sub_title`, `product_home_description`, `product_home_image`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Vegetables Big Sale', 'Fresh Farm Products', '10% certifled-organic mix of fruit and veggies. Perfect for weekly cooking and snacking!', '5fc3b66b22d55.jpg', 1, '2020-11-29 07:55:39', '2020-11-29 07:55:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_mostview`
--

CREATE TABLE `product_mostview` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `mostview_price` double(18,2) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_stock`
--

CREATE TABLE `product_stock` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_stock`
--

INSERT INTO `product_stock` (`id`, `product_id`, `stock`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 10, 1, '2020-12-06 01:11:38', '2020-12-06 01:11:38', NULL, NULL),
(2, 2, 20, 1, '2020-12-06 01:11:48', '2020-12-06 01:11:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_trend`
--

CREATE TABLE `product_trend` (
  `id` bigint(20) NOT NULL,
  `product_category_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `valid_until` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `new_price` double(18,2) DEFAULT NULL,
  `badge_text` varchar(30) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_trend`
--

INSERT INTO `product_trend` (`id`, `product_category_id`, `product_id`, `valid_until`, `new_price`, `badge_text`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 4, 1, '2020-12-06 00:11:09', 8000.00, 'SALE', 1, '2020-12-05 17:11:09', '2020-12-05 17:11:09', NULL, NULL),
(4, 4, 2, '2020-12-06 01:02:51', 8000.00, 'SALE', 1, '2020-12-05 18:02:51', '2020-12-05 18:02:51', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shop_information`
--

CREATE TABLE `shop_information` (
  `id` bigint(20) NOT NULL,
  `shop_code` varchar(50) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_logo` char(50) NOT NULL,
  `shop_description` text DEFAULT NULL,
  `shop_address` text DEFAULT NULL,
  `shop_email` varchar(50) DEFAULT NULL,
  `shop_call_us` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_information`
--

INSERT INTO `shop_information` (`id`, `shop_code`, `shop_name`, `shop_logo`, `shop_description`, `shop_address`, `shop_email`, `shop_call_us`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'SHOP001', 'Shoping Center', '5fc37a86bb11a.png', 'We are a team of designers and developers that create high quality eCommerce, WordPress, Shopify .', '4710-4890 Breckinridge USA', 'demo@hasthemes.com', '(08) 23 456 789', 1, '2020-11-29 03:40:06', '2020-11-29 03:40:06', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) NOT NULL,
  `social_media_name` varchar(255) NOT NULL,
  `social_media_link` varchar(255) NOT NULL,
  `social_media_icon` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `social_media_name`, `social_media_link`, `social_media_icon`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'Twitter', 'http://www.twitter.com', 'ion-social-twitter', 1, '2020-11-28 03:03:34', '2020-11-28 03:03:34', NULL, NULL),
(2, 'Google', 'http://www.google.com', 'ion-social-googleplus-outline', 1, '2020-11-28 03:04:03', '2020-11-28 03:04:03', NULL, NULL),
(3, 'Youtube', 'http://www.youtube.com', 'ion-social-youtube-outline', 1, '2020-11-28 03:04:25', '2020-11-28 03:04:25', NULL, NULL),
(4, 'Facebook', 'http://www.facebook.com', 'ion-social-facebook', 1, '2020-11-28 03:04:45', '2020-11-28 03:04:45', NULL, NULL),
(5, 'Instagram', 'http://www.instagram.com', 'ion-social-instagram-outline', 1, '2020-11-28 03:05:08', '2020-11-28 03:05:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dodi Novembri', 'dodinovembri32@gmail.com', '2020-11-26 14:33:57', 1, '$2y$10$0Y6NB/N3U3PKDuRnpzJV8.y1vRryU8XfcKzOYi6eJb7EUJZSfvbYa', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `voucher_code` varchar(50) NOT NULL,
  `voucher_percentage` int(11) NOT NULL,
  `voucher_description` text NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`id`, `user_id`, `voucher_code`, `voucher_percentage`, `voucher_description`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 'XBAG', 5, 'This voucher is used to pay transactions', 0, '2020-12-09 06:15:26', '2020-12-10 08:04:19', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advantage`
--
ALTER TABLE `advantage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languange`
--
ALTER TABLE `languange`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_banner`
--
ALTER TABLE `product_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_best`
--
ALTER TABLE `product_best`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_deal`
--
ALTER TABLE `product_deal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_home`
--
ALTER TABLE `product_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_mostview`
--
ALTER TABLE `product_mostview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_stock`
--
ALTER TABLE `product_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_trend`
--
ALTER TABLE `product_trend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_information`
--
ALTER TABLE `shop_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advantage`
--
ALTER TABLE `advantage`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart_detail`
--
ALTER TABLE `cart_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `languange`
--
ALTER TABLE `languange`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_banner`
--
ALTER TABLE `product_banner`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_best`
--
ALTER TABLE `product_best`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_deal`
--
ALTER TABLE `product_deal`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_home`
--
ALTER TABLE `product_home`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_mostview`
--
ALTER TABLE `product_mostview`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_stock`
--
ALTER TABLE `product_stock`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_trend`
--
ALTER TABLE `product_trend`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_information`
--
ALTER TABLE `shop_information`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
