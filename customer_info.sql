-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2025 at 08:38 AM
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
-- Database: `customer_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(200) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `telephone` varchar(250) DEFAULT NULL,
  `product_code` int(100) DEFAULT NULL,
  `order_number` int(100) DEFAULT NULL,
  `quantity_ordered` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `location`, `telephone`, `product_code`, `order_number`, `quantity_ordered`) VALUES
(40, 'fabrice', 'rubavu', '0793622719', 17, 58, 0),
(45, 'Rukundo', 'kicukiro', '07888888', 17, 63, 10),
(57, 'rwema', 'Rubavu', '0793 622 719', 17, 75, 0),
(60, 'rwema', 'Rubavu', '0793 622 719', 22, 78, 0),
(63, 'test', 'Rubavu', '0793 622 719', 17, 81, 0),
(66, 'test', 'Rubavu', '0793 622 719', 22, 84, 0),
(69, 'test', 'Rubavu', '0793 622 719', 17, 87, 0),
(72, 'test', 'Rubavu', '0793 622 719', 22, 90, 0),
(75, 'rwema', 'Rubavu', '0793 622 719', 17, 93, 0),
(78, 'rwema', 'Rubavu', '0793 622 719', 22, 96, 0),
(79, 'Elyse', 'Rubavu', '078452267', 17, 97, 0),
(81, 'Elyse', 'Rubavu', '078452267', 22, 99, 0),
(82, 'Elyse', 'Rubavu', '078452267', 23, 100, 3);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_number` int(100) NOT NULL,
  `order_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_number`, `order_date`) VALUES
(29, '25-01-14 21:33'),
(30, '25-01-14 21:33'),
(31, '25-01-14 21:34'),
(32, '25-01-14 21:34'),
(33, '25-01-14 21:34'),
(34, '25-01-14 22:53'),
(35, '25-01-14 22:53'),
(36, '25-01-14 23:00'),
(37, '25-01-15 08:23'),
(38, '25-01-15 08:23'),
(39, '25-01-15 08:28'),
(40, '25-01-15 08:28'),
(41, '25-01-19 07:03'),
(42, '25-01-19 07:03'),
(43, '25-01-19 07:11'),
(44, '25-01-19 07:12'),
(45, '25-01-19 07:12'),
(46, '25-01-19 07:13'),
(47, '25-01-19 07:14'),
(48, '25-01-19 07:14'),
(49, '25-01-19 07:14'),
(50, '25-01-19 07:16'),
(51, '25-01-19 07:17'),
(52, '25-01-19 07:17'),
(53, '25-01-19 07:17'),
(54, '25-01-19 07:17'),
(55, '25-01-19 07:17'),
(56, '25-01-21 18:24'),
(57, '25-01-21 18:24'),
(58, '25-01-21 18:24'),
(59, '25-01-21 18:24'),
(60, '25-01-21 18:24'),
(61, '25-01-21 18:31'),
(62, '25-01-21 18:31'),
(63, '25-01-21 18:31'),
(64, '25-01-21 18:31'),
(65, '25-01-21 18:31'),
(66, '25-01-22 06:26'),
(67, '25-01-22 06:26'),
(68, '25-01-22 06:26'),
(69, '25-01-22 06:26'),
(70, '25-01-22 06:26'),
(71, '25-01-22 06:26'),
(72, '25-01-22 06:31'),
(73, '25-01-22 06:35'),
(74, '25-01-22 06:35'),
(75, '25-01-22 06:35'),
(76, '25-01-22 06:35'),
(77, '25-01-22 06:35'),
(78, '25-01-22 06:35'),
(79, '25-01-22 06:39'),
(80, '25-01-22 06:39'),
(81, '25-01-22 06:39'),
(82, '25-01-22 06:39'),
(83, '25-01-22 06:39'),
(84, '25-01-22 06:39'),
(85, '25-01-22 06:42'),
(86, '25-01-22 06:42'),
(87, '25-01-22 06:42'),
(88, '25-01-22 06:42'),
(89, '25-01-22 06:42'),
(90, '25-01-22 06:42'),
(91, '25-01-22 06:46'),
(92, '25-01-22 06:46'),
(93, '25-01-22 06:46'),
(94, '25-01-22 06:46'),
(95, '25-01-22 06:46'),
(96, '25-01-22 06:46'),
(97, '25-01-22 08:03'),
(98, '25-01-22 08:03'),
(99, '25-01-22 08:03'),
(100, '25-01-22 08:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productCode` int(11) NOT NULL,
  `productName` varchar(200) DEFAULT NULL,
  `product_quantity` int(11) DEFAULT NULL,
  `unit_price` decimal(30,0) DEFAULT NULL,
  `total_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productCode`, `productName`, `product_quantity`, `unit_price`, `total_price`) VALUES
(17, 'pizza', 120, 10000, 30000),
(22, 'bugger1', 10, 1000, 0),
(23, 'pain france', 7, 3500, 35000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(300) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `userName`, `Password`, `email`) VALUES
(18, 'test', '123', 'test@hotmail.com'),
(83, 'lh', 'lk', 'hl'),
(85, 'hy', '123', 'hy@hotmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `order_number` (`order_number`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_number` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productCode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`product_code`) REFERENCES `products` (`productCode`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`order_number`) REFERENCES `order` (`order_number`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
