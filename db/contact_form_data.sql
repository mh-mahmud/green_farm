-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2025 at 06:42 PM
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
-- Table structure for table `contact_form_data`
--

DROP TABLE IF EXISTS `contact_form_data`;
CREATE TABLE IF NOT EXISTS `contact_form_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_message` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_form_data`
--

INSERT INTO `contact_form_data` (`id`, `full_name`, `email`, `phone`, `subject`, `contact_message`, `created_at`, `updated_at`) VALUES
(1, 'Asif Nazrul', 'asif@gmail.com', '01717761611', 'This is a hello world message', 'As an employer you compete for the best talent. Consider Talvette your hiring partner and access thousands of vetted candidates from our talent pool. Our experienced Skills Assessors will interview and match you to candidates who are a technical and cultural fit.', '2025-02-15 18:37:24', '2025-02-15 18:37:24'),
(2, 'Asif Nazrul', 'mehedihasanfiroz32@gmail.com', '01717761611', 'This is a hello world message', 'As an employer you compete for the best talent. Consider Talvette your hiring partner and access thousands of vetted candidates from our talent pool. Our experienced Skills Assessors will interview and match you to candidates who are a technical and cultural fit.', '2025-02-15 18:39:06', '2025-02-15 18:39:06'),
(3, 'Saleh Ahmed', 'saleh@ymail.com', '01919010203', 'We need a help between our product', 'As an employer you compete for the best talent. Consider Talvette your hiring partner and access thousands of vetted candidates from our talent pool. Our experienced Skills Assessors will interview and match you to candidates who are a technical and cultural fit.', '2025-02-15 18:40:23', '2025-02-15 18:40:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
