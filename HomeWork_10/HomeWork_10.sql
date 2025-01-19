-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2025 at 04:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`) VALUES
(1, 'Electronics', '2025-01-15 15:08:28'),
(2, 'Clothing', '2025-01-15 15:08:28'),
(3, 'Books', '2025-01-15 15:08:28'),
(4, 'Home Appliances', '2025-01-15 15:08:28'),
(5, 'Toys', '2025-01-15 15:08:28'),
(6, 'Sports', '2025-01-15 15:08:28'),
(7, 'Beauty', '2025-01-15 15:08:28'),
(8, 'Automotive', '2025-01-15 15:08:28'),
(9, 'Grocery', '2025-01-15 15:08:28'),
(10, 'Health', '2025-01-15 15:08:28'),
(12, 'Steam', '2025-01-15 15:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`, `created_at`) VALUES
(1, 'Telephone', 'Epic pog ', 800.00, 1, '2025-01-15 15:08:39'),
(2, 'T-shirt', 'Cotton T-shirt in various colors.', 19.99, 2, '2025-01-15 15:08:39'),
(3, 'Novel', 'A bestselling novel.', 14.99, 3, '2025-01-15 15:08:39'),
(4, 'Blender', 'High-speed blender for smoothies.', 89.99, 4, '2025-01-15 15:08:39'),
(5, 'Lego Set', 'Creative building blocks.', 49.99, 5, '2025-01-15 15:08:39'),
(6, 'Baseball Bat', 'Metal Bat', 200.00, 6, '2025-01-15 15:30:50'),
(7, 'Cosmetics Set', 'Everything for beauty', 100.00, 7, '2025-01-15 15:31:17'),
(8, 'Somehting', 'idk', 10000.00, 8, '2025-01-15 15:31:39'),
(9, 'Pack of Chips', 'Crunchy', 3.00, 9, '2025-01-15 15:31:57'),
(10, 'Ibuprophen', '0_0', 5.00, 10, '2025-01-15 15:32:17'),
(11, 'Dota 2', 'Sike', 0.00, 12, '2025-01-15 15:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
