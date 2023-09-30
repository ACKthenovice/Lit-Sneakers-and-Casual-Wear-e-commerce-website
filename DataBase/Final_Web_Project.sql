-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 11:46 AM
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
-- Database: `final_web_project`
--
CREATE DATABASE IF NOT EXISTS `final_web_project` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `final_web_project`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `user_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `user_name`, `email`, `phone`, `user_password`) VALUES
(1, 'Aye Chan Ko@Samuel', 'samuelayechanko@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'ak', 'pshitangonsamuel@gmail.com', NULL, '50f5a2afd2479fa4dc9d6bfdd64b6ef8'),
(3, 'ack', 'blablah@gmail.com', NULL, 'e35cf7b66449df565f93c607d5a81d09');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `billing_address` varchar(100) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `order_status` varchar(50) DEFAULT NULL,
  `total_amount` decimal(65,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_name`, `phone`, `email`, `customer_id`, `billing_address`, `order_date`, `order_status`, `total_amount`) VALUES
(1, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-26', 'on_hold', 488.00),
(2, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-27', 'on_hold', 19.00),
(3, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-28', 'on_hold', 19.00),
(4, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-28', 'on_hold', 59.00),
(5, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-29', 'on_hold', 59.00),
(6, 'Aye Chan Ko@Samuel', 2147483647, 'samuelayechanko@gmail.com', 1, 'Yangon', '2023-09-29', 'on_hold', 59.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(6,2) DEFAULT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `product_name`, `product_image`, `customer_id`, `quantity`, `unit_price`, `order_date`) VALUES
(1, 1, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 3, 19.00, '2023-09-26'),
(2, 1, 2, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 3, 139.00, '2023-09-26'),
(3, 1, 3, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 1, 11.00, '2023-09-26'),
(4, 2, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 1, 19.00, '2023-09-27'),
(5, 3, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 1, 19.00, '2023-09-28'),
(6, 4, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 3, 19.00, '2023-09-28'),
(7, 5, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 3, 19.00, '2023-09-29'),
(8, 6, 1, 'Addidas', '../images/web images/Product images/addidas.jpg', 1, 3, 19.00, '2023-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `brandname` varchar(50) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `img_url`, `brandname`, `grade`) VALUES
(2, 'Addidas', 139, '../images/web images/Product images/addidas.jpg', NULL, 1),
(3, 'Addidas', 12, '../images/web images/Product images/addidas.jpg', NULL, 1),
(4, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(5, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(6, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(7, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(8, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(9, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(10, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(11, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(12, 'Addidas', NULL, '../images/web images/Product images/addidas.jpg', NULL, 1),
(22, 'New Balance', 13, '../images/web images/Product images/nike-zoom.jpg', '550', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
