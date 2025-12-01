-- 22-09-2025
ALTER TABLE `products` ADD `product_serial` TINYINT NULL DEFAULT NULL AFTER `product_code`;
ALTER TABLE `products` CHANGE `product_serial` `product_serial` INT NULL DEFAULT NULL;

ALTER TABLE `products` ADD `product_sell_type` VARCHAR(255) NULL DEFAULT NULL AFTER `product_type`;

CREATE TABLE IF NOT EXISTS `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `review_title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `unit_details` (
  `id` int NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `products` ADD `unit_wise_price` JSON NULL DEFAULT NULL AFTER `discount_price`;

ALTER TABLE `carts` ADD `unit_weight` VARCHAR(255) NULL DEFAULT NULL AFTER `unit_price`;
ALTER TABLE `order_details` ADD `unit_weight` VARCHAR(255) NULL DEFAULT NULL AFTER `unit_price`;

ALTER TABLE `products` ADD `youtube_url` TEXT NULL DEFAULT NULL AFTER `status`;
ALTER TABLE `products` ADD `delivery_charge_inside_dhaka` DECIMAL(10,2) NULL DEFAULT NULL AFTER `youtube_url`, ADD `delivery_charge_outside_dhaka` DECIMAL(10,2) NULL DEFAULT NULL AFTER `delivery_charge_inside_dhaka`;
