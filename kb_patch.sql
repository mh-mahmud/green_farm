-- 22-09-2025
ALTER TABLE `products` ADD `product_serial` TINYINT NULL DEFAULT NULL AFTER `product_code`;
ALTER TABLE `products` CHANGE `product_serial` `product_serial` INT NULL DEFAULT NULL; 