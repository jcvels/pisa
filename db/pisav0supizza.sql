-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2020 at 08:20 AM
-- Server version: 10.1.41-MariaDB-0+deb9u1
-- PHP Version: 7.0.33-0+deb9u6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pisav0supizza`
--
CREATE DATABASE IF NOT EXISTS `pisav0supizza` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `pisav0supizza`;

-- --------------------------------------------------------

--
-- Table structure for table `pisa_customers`
--

CREATE TABLE `pisa_customers` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetA` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetB` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pisa_customers`
--

INSERT INTO `pisa_customers` (`id`, `name`, `address`, `nearStreetA`, `nearStreetB`, `phone`, `creation`) VALUES
(1, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA', 'Aguaribay', 'Madrid', '1134634296', '2020-01-17 03:30:05');

-- --------------------------------------------------------

--
-- Table structure for table `pisa_orders`
--

CREATE TABLE `pisa_orders` (
  `id` int(11) NOT NULL,
  `orderShift` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `customerName` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `customerAddress` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `customerPhone` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `customerOrder` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `orderSubtotal` float NOT NULL,
  `orderDiscount` float NOT NULL,
  `orderSurcharge` float NOT NULL,
  `orderPayment` float NOT NULL,
  `orderChange` float NOT NULL,
  `totalOrder` float NOT NULL,
  `notes` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pisa_orders`
--

INSERT INTO `pisa_orders` (`id`, `orderShift`, `stateid`, `customerName`, `customerAddress`, `customerPhone`, `customerOrder`, `orderSubtotal`, `orderDiscount`, `orderSurcharge`, `orderPayment`, `orderChange`, `totalOrder`, `notes`, `creation`) VALUES
(17, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 2x Promo 1 (3x Muzzarella ) ($1040)<br>5x Hamburguesa Hamburguesa de Prueba ($35)<br>3x Bebida Producto Bebida de Prueba ($12)<br>', 1087, 0, 0, 1500, 413, 1087, 'Entregar antes de las 12Hs', '2020-02-02 20:00:00'),
(18, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 1x Promo 2 (1x Napolitana 12x Empanadas) ($450)<br>1x Bebida Producto Bebida de Prueba ($4)<br>', 454, 0, 0, 500, 46, 454, '.', '2020-02-02 20:01:02'),
(19, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 1x Promo 1 (3x Muzzarella ) ($520)<br>2x Promo 2 (1x Napolitana 12x Empanadas) ($900)<br>', 1420, 0, 0, 5000, 3580, 1420, '.', '2020-02-02 20:12:54'),
(20, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 2x Promo 1 (3x Muzzarella ) ($1040)<br>', 1040, 0, 0, 2000, 960, 1040, '.', '2020-02-02 20:13:41'),
(21, 18, 60, 'Juan', 'Tucuman 12345 [ PerÃ³n  / Jujuy ]', '42908477', ' 1x Promo 1 (3x Muzzarella ) ($520)<br>', 520, 0, 0, 0, -520, 520, '.', '2020-02-02 20:14:03'),
(22, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 2x Promo 1 (3x Muzzarella ) ($1040)<br>41x PorciÃ³n de Pizza Napolitana de Prueba ($410)<br>', 1450, 0, 0, 2000, 550, 1450, '.', '2020-02-02 20:33:25'),
(23, 18, 60, 'Newsan', 'Roque PÃ©rez 3650, Buenos Aires [ Jaramillo / C. Larralde ]', '45455100', ' 1x Bebida Producto Bebida de Prueba ($4)<br>', 4, 0, 0, 8, 4, 4, 'Es una empresa. Interno 634.', '2020-02-04 00:06:01'),
(24, 18, 60, 'Jorge Pauvels', 'Cuzco 532, 2do D, CABA [ Aguaribay / Madrid ]', '1134634296', ' 1x Pizza Producto Pizza de Prueba ($1)<br>1x Bebida Producto Bebida de Prueba ($4)<br>', 5, 0, 0, 34, 29, 5, 'Entregar sin demoras', '2020-02-08 02:53:49'),
(25, 18, 70, 'Newsan', 'Roque PÃ©rez 3650, Buenos Aires [ Jaramillo / C. Larralde ]', '45455100', ' 2x Hamburguesa Hamburguesa de Prueba ($14)<br>1x Bebida Producto Bebida de Prueba ($4)<br>', 18, 0, 0, 20, 2, 18, '.', '2020-02-08 02:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `pisa_products`
--

CREATE TABLE `pisa_products` (
  `id` int(11) NOT NULL,
  `productClass` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `productDescription` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `productPrice` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pisa_products`
--

INSERT INTO `pisa_products` (`id`, `productClass`, `productDescription`, `productPrice`, `creation`) VALUES
(1, 'Pizza', 'Producto Pizza de Prueba', 1, '2020-01-16 20:33:57'),
(2, 'Milanesa', 'Milanesa de Prueba', 8, '2020-01-16 20:34:40'),
(3, 'Empanada', 'Producto Empanada de Prueba', 3, '2020-01-17 00:17:14'),
(4, 'Bebida', 'Producto Bebida de Prueba', 4, '2020-01-17 03:04:36'),
(19, 'Hamburguesa', 'Hamburguesa de Prueba', 7, '2020-02-02 06:08:47'),
(20, 'Minutas', 'Minuta', 9, '2020-02-02 06:23:17'),
(21, 'PorciÃ³n de Pizza', 'Napolitana de Prueba', 10, '2020-02-02 06:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `pisa_promos`
--

CREATE TABLE `pisa_promos` (
  `id` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `content` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pisa_promos`
--

INSERT INTO `pisa_promos` (`id`, `class`, `description`, `content`, `price`, `creation`) VALUES
(44, 'PromociÃ³n Pizza', 'Promo 1', '3x Muzzarella ', 520, '2020-02-02 02:03:28'),
(45, 'PromociÃ³n Pizza', 'Promo 2', '1x Napolitana   12x Empanadas', 450, '2020-02-02 02:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `pisa_shifts`
--

CREATE TABLE `pisa_shifts` (
  `id` int(11) NOT NULL,
  `state` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `opentimestamp` datetime NOT NULL,
  `closetimestamp` datetime NOT NULL,
  `orderQtty` int(11) NOT NULL,
  `orderTotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `pisa_shifts`
--

INSERT INTO `pisa_shifts` (`id`, `state`, `opentimestamp`, `closetimestamp`, `orderQtty`, `orderTotalAmount`) VALUES
(3, 'close', '2020-02-01 17:02:55', '2020-02-01 17:07:47', 0, 0),
(4, 'close', '2020-02-01 17:05:22', '2020-02-01 17:07:24', 0, 0),
(14, 'close', '2020-02-02 01:04:44', '2020-02-02 01:07:40', 0, 0),
(15, 'close', '2020-02-02 01:07:48', '2020-02-02 01:07:54', 0, 0),
(16, 'close', '2020-02-02 01:11:01', '2020-02-02 03:55:07', 0, 0),
(17, 'close', '2020-02-02 03:55:18', '2020-02-02 03:55:31', 0, 0),
(18, 'close', '2020-02-02 03:55:38', '2020-02-08 01:44:35', 0, 0),
(19, 'open', '2020-02-08 01:46:41', '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pisa_users`
--

CREATE TABLE `pisa_users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `passHash` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pisa_customers`
--
ALTER TABLE `pisa_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pisa_orders`
--
ALTER TABLE `pisa_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pisa_products`
--
ALTER TABLE `pisa_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pisa_promos`
--
ALTER TABLE `pisa_promos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pisa_shifts`
--
ALTER TABLE `pisa_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pisa_users`
--
ALTER TABLE `pisa_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pisa_customers`
--
ALTER TABLE `pisa_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pisa_orders`
--
ALTER TABLE `pisa_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `pisa_products`
--
ALTER TABLE `pisa_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pisa_promos`
--
ALTER TABLE `pisa_promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `pisa_shifts`
--
ALTER TABLE `pisa_shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
