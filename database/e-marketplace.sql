-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 18, 2020 at 05:25 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES
(1, 'Maroon Seersucker', 799),
(2, 'Navy AOP', 799),
(3, 'Navy & Red', 849),
(4, 'White AOP', 799),
(5, 'Hancock White', 759),
(6, 'Hancock Grey', 759),
(7, 'English Black', 759),
(8, 'Grey Classic Print', 799),
(9, 'Red & Blue Checked', 899),
(10, 'Roadster Grey Checked', 899),
(11, 'Blue & Brown Checked', 899),
(12, 'Highlander White Solid', 799),
(13, 'MONTIVITTON Navy', 399),
(14, 'MONTIVITTON Black', 399),
(15, 'Fastrack Smart Band', 1499),
(16, 'Fastrack Men Matte-Black', 3299),
(17, 'Fossil Men Grey', 7999),
(18, 'Hilfiger Black', 4999),
(19, 'MI Smart Band 3i', 1399),
(20, 'CUSTOM White', 899),
(21, 'Fossil Modern Black', 5999),
(22, 'Armani Exchange Silver', 8999),
(23, 'Mast & Harbour Off-White', 799),
(24, 'SAMSUNG Galaxy Smartwatch', 13999),
(25, 'Micky Printed T', 499),
(26, 'Blue Haze T', 399),
(27, 'Vanilla White T', 399),
(28, 'Bold Red T', 399),
(29, 'Nimbus Grey T', 399),
(30, 'Tropical Blue T', 499),
(31, 'Meteor Grey T', 399),
(32, 'Micky Trio Call T', 499),
(33, 'World Peace T', 499),
(34, 'Lost In Time T', 499),
(35, 'Iron Man Of War T', 599),
(36, '90\'s Vibe Panel T', 599),
(37, 'ROYAL SON Square', 559),
(38, 'HRX Brownline', 2999),
(39, 'I DEE Square', 2599),
(40, 'ROYAL SON Round', 559),
(41, 'Fossil Oval', 3999),
(42, 'WROGN Rectangle', 1799),
(43, 'ROYAL SON Black', 599),
(44, 'CRIBA Aviator', 699),
(45, 'Carlton London', 859),
(46, 'WROGN Round', 1799),
(47, 'Fossil Wayfarer', 5499),
(48, 'Voyage Square', 899),
(49, 'Brown Derbys by El Paso', 899),
(50, 'Prolific Cut Out Mojaris', 699),
(51, 'Walkstyle by El Paso', 699),
(52, 'Red Tape Mid-Top Flat Boots', 1299),
(53, 'Mast & Harbour Sneakers', 1599),
(54, 'Highlander Grey Sneakers', 899),
(55, 'Highlander White Sneakers', 899),
(56, 'Cole Haan Sneakers', 1299),
(57, 'AfroJack Grey Gym Shoes', 659),
(58, 'Eego Trekking Shoes', 899),
(59, 'Puma Grey Mesh Shoes', 4999),
(60, 'ADIDAS Woven Running Shoes', 3899);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `items` (`pid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
