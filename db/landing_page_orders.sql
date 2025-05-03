-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2025 at 09:58 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `landing_page_orders`
--

DROP TABLE IF EXISTS `landing_page_orders`;
CREATE TABLE IF NOT EXISTS `landing_page_orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `session_id` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `full_name` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `billing_address` text COLLATE utf8mb3_unicode_ci,
  `custom_order_id` varchar(10) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `order_phone_number` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `unit_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `quantity` int DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `final_price` decimal(10,2) DEFAULT NULL,
  `coupon` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `payment_status` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `payment_type` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pay_amount` decimal(10,2) DEFAULT NULL,
  `delivery_charge` decimal(10,2) NOT NULL DEFAULT '0.00',
  `delivery_location` varchar(50) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT 'Pending',
  `order_note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `delivery_note` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `order_status` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `cancel_reason` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `possible_delivery_date` datetime DEFAULT NULL,
  `delivery_date` datetime DEFAULT NULL,
  `cancel_date` datetime DEFAULT NULL,
  `sms_response` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `landing_page_orders`
--

INSERT INTO `landing_page_orders` (`id`, `user_id`, `session_id`, `full_name`, `billing_address`, `custom_order_id`, `order_phone_number`, `total_price`, `unit_price`, `quantity`, `discount`, `final_price`, `coupon`, `payment_status`, `payment_type`, `pay_amount`, `delivery_charge`, `delivery_location`, `delivery_status`, `order_note`, `delivery_note`, `order_status`, `cancel_reason`, `possible_delivery_date`, `delivery_date`, `cancel_date`, `sms_response`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, 'Gulshan badda, Dhaka', '6ESFA9', '01722432578', '1000.00', '1000.00', 1, '0.00', '1060.00', NULL, 'NOT PAID', 'Cash on Delivery', NULL, '60.00', 'inside_dhaka', 'Pending', NULL, NULL, 'PROCESSING', NULL, '2025-05-05 03:30:02', NULL, NULL, NULL, '2025-05-03 09:30:02', '2025-05-03 09:30:02'),
(2, NULL, NULL, 'Hasan ALi', 'Gulshan, Badda Link Road', '6OSO0A', '01717909090', '4000.00', '1000.00', 4, '0.00', '4110.00', NULL, 'NOT PAID', 'Cash on Delivery', NULL, '110.00', 'outside_dhaka', 'Pending', NULL, NULL, 'PROCESSING', NULL, '2025-05-05 03:50:52', NULL, NULL, '{\"response_code\":202,\"message_id\":45570072,\"success_message\":\"SMS Submitted Successfully 1\",\"error_message\":\"\"}', '2025-05-03 09:50:52', '2025-05-03 09:50:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
