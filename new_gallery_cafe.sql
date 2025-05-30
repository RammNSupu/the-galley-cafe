-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 05, 2024 at 06:25 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_gallery_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `quantity` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int NOT NULL,
  `emp_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `NIC` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','staff') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `NIC`, `role`) VALUES
(325, 'Smith', '123457', 'admin'),
(245, 'John', '234507', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE IF NOT EXISTS `menu_items` (
  `item_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL,
  `type` enum('Sri Lankan','Chinese','Italian','Indian','Mexican','Beverage') COLLATE utf8mb4_general_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `special_offer` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`item_id`, `name`, `description`, `type`, `price`, `special_offer`, `image`) VALUES
(1, 'Egg Hoppers', 'A Sri Lankan classic with egg perfection.', 'Sri Lankan', 350.00, 0, ''),
(2, 'Egg Kottu', 'Savory egg scrambled into spiced kottu.', 'Sri Lankan', 2100.00, 0, ''),
(3, 'Pol roti', 'Traditional coconut roti, perfect with curry.', 'Sri Lankan', 500.00, 0, ''),
(4, 'string hoppers', 'Soft, steamed strands of rice flour.', 'Sri Lankan', 420.00, 0, ''),
(5, 'Fish Bun\r\n', '\r\nFluffy bun filled with spicy fish.\r\n', 'Sri Lankan', 200.00, 0, ''),
(6, 'Kung Pao Chicken\r\n', '\r\nSpicy stir-fried chicken with peanuts.\r\n', 'Chinese', 1900.00, 0, ''),
(7, 'Hot pot\r\n\r\n', '\r\nFlavorful broth with assorted meats and veggies.\r\n\r\n\r\n', 'Chinese', 3100.00, 0, ''),
(8, 'Sweet and Sour Pork\r\n', '\r\nA perfect balance of sweet and tangy.\r\n\r\n', 'Chinese', 2000.00, 0, ''),
(9, 'Dumplings\r\n', '\r\nSoft dough pockets filled with savory goodness.\r\n', 'Chinese', 1945.00, 0, ''),
(10, 'Fried Tofu\r\n', '\r\nCrispy tofu bites with a savory flavor.\r\n\r\n', 'Chinese', 1430.00, 0, ''),
(11, 'Lasagne\r\n', '\r\nA classic dish, baked to perfection.\r\n', 'Italian', 1400.00, 0, ''),
(12, 'Cheesy Pizza\r\n', '\r\nMelted cheese atop a perfect crust.\r\n', 'Italian', 1800.00, 0, ''),
(13, 'Spaghetti alla Carbonara\r\n', '\r\nAuthentic, creamy, and full of flavor.\r\n\r\n', 'Italian', 1600.00, 0, ''),
(14, 'Ribollita\r\n', '\r\nRich, slow-cooked vegetables and bread.\r\n', 'Italian', 950.00, 0, ''),
(15, 'Fettuccine al Pomodoro\r\n', '\r\nA vibrant mix of tomatoes and fettuccine.\r\n', 'Italian', 2000.00, 0, ''),
(16, 'Biriyani\r\n', '\r\nA perfect blend of spices and rice.\r\n', 'Indian', 1350.00, 0, ''),
(17, 'Paratha (5 pieces )\r\n\r\n\r\n', '\r\nCrispy layers with a soft center.\r\n\r\n', 'Indian', 500.00, 0, ''),
(18, 'Dhosa', '\r\nPaper-thin crepe with a burst of flavor.\r\n\r\n', 'Indian', 550.00, 0, ''),
(19, 'Samosa\r\n', '\r\nSpiced filling wrapped in crispy perfection.\r\n\r\n', 'Indian', 450.00, 0, ''),
(20, 'Butter Naan\r\n', '\r\nButtery, soft naan with a perfect char.\r\n\r\n', 'Indian', 350.00, 0, ''),
(21, 'Burritos\r\n\r\n\r\n', '\r\nA warm, handheld meal with savory fillings.\r\n\r\n', 'Mexican', 1300.00, 0, ''),
(22, 'Chilaquiles\r\n', '\r\nCrispy tortillas soaked in spicy salsa.\r\n\r\n\r\n', 'Mexican', 2370.00, 0, ''),
(23, 'Huevos Rancheros\r\n', '\r\nEggs topped with spicy tomato salsa.\r\n\r\n', 'Mexican', 1600.00, 0, ''),
(24, 'Mexican Rice\r\n', '\r\nSavory, spiced rice with a bold flavor\r\n', 'Mexican', 1250.00, 0, ''),
(25, 'Tacos with chicken, fresh vegetables\r\n', '\r\nFresh chicken tacos with crunchy veggies.\r\n\r\n', 'Mexican', 1650.00, 0, ''),
(26, 'Iced-coffee\r\n', '\r\n\"Refreshing cold brew with rich flavor.\r\n\r\n', 'Beverage', 640.00, 0, ''),
(28, 'Mango-juice\r\n', '\r\nSweet, juicy mango for a fruity burst.\r\n\r\n', 'Beverage', 690.00, 0, ''),
(29, 'Lime-mojito\r\n', '\r\nZesty lime with minty freshness.\r\n\r\n', 'Beverage', 420.00, 0, ''),
(30, 'Indian masala chai\r\n', 'A warm blend of tea and Indian spices.\r\n\r\n', 'Beverage', 220.00, 0, ''),
(31, 'Iced-milo\r\n', '\r\nA refreshing iced version of your favorite Milo.\r\n\r\n', 'Beverage', 780.00, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `quantity` int NOT NULL,
  `total amount` decimal(10,2) NOT NULL,
  `status` enum('pending','confirmed','cancelled') COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `fullName` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `mobileNumber` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_time` time NOT NULL,
  `no_of_guests` int NOT NULL,
  `message` text COLLATE utf8mb4_general_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `fullName`, `email`, `mobileNumber`, `reservation_date`, `reservation_time`, `no_of_guests`, `message`, `created_at`) VALUES
(1, 'Nipuni Peries', ' rammuthunishsupu@gmail.com', ' 34534757', '2024-11-05', '15:42:00', 1, '', '2024-10-04 10:06:45'),
(2, 'nimashi sulakkana', ' rammuthunishsupu@gmail.com', '  075345543', '2024-10-22', '21:15:00', 4, 'hiiii', '2024-10-04 10:46:01'),
(3, 'Nipuni Peries', ' nipunfernano@gmail.com', '  0723445554', '2024-10-18', '16:21:00', 10, 'nipuni', '2024-10-04 10:47:16'),
(4, 'nimashi sulakkana', ' rammuthunishsupu@gmail.com', '  075345543', '2024-11-09', '16:22:00', 20, 'again', '2024-10-04 10:49:06'),
(5, 'Sanaru Nimsara', ' sandarunimsara5822@gmail.com', '  0723434544', '2024-10-21', '23:33:00', 1, '', '2024-10-04 18:00:26'),
(6, 'nimashi sulakkana', ' rammuthunishsupu@gmail.com', '  075345543', '2024-10-17', '23:40:00', 1, '', '2024-10-04 18:06:22'),
(7, 'nimashi sulakkana', ' rammuthunishsupu@gmail.com', '  075345543', '2024-10-09', '00:57:00', 1, 'for a small celebration', '2024-10-05 04:28:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `phonenumber` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','staff','customer') COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `phonenumber`, `username`, `password`, `email`, `role`, `created_at`) VALUES
(7, 'nimashi sulakkana', ' 075345543', ' nima34', 'abv123', 'rammuthunishsupu@gmail.com', 'customer', '2024-10-03 10:51:52'),
(8, 'Nipuni Peries', ' 0723445554', ' nipu123', 'nipuni', 'nipunfernano@gmail.com', 'customer', '2024-10-04 06:36:35'),
(9, 'Nirasha', ' 0751234570', ' nira23', 'nira123', 'nira23@gmail.com', 'customer', '2024-10-04 16:28:18'),
(10, 'Sanaru Nimsara', ' 0723434544', ' san2005', 'san2005', 'sandarunimsara5822@gmail.com', 'customer', '2024-10-04 17:59:34'),
(11, 'nimashi', ' 0712347024', ' nima', '12345', 'nima@gmail.com', 'customer', '2024-10-05 03:59:57');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
