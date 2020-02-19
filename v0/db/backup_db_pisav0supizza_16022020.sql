-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 01:03 PM
-- Server version: 10.1.44-MariaDB-0+deb9u1
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
-- Database: `epiz_24935169_pisadata`
--
CREATE DATABASE IF NOT EXISTS `epiz_24935169_pisadata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `epiz_24935169_pisadata`;

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
(1, '1', '1', '1', '1', '1', '2020-02-08 21:04:52'),
(2, 'juliana loto', 'el cano 1611  ', 'emilio la marca', 'y posada', '11', '2020-02-08 23:04:16'),
(3, 'antonio parra', 'av coronel escalada 1927', 'pacheco', 'es para el seguridad de pacheco golf bancalari', '1', '2020-02-08 23:23:11'),
(4, 'abuela ', 'el cano', 'ombu ', 'alvear', '1', '2020-02-08 23:37:10'),
(5, 'no', 'santa maria de oro 974', 'alvear', 'itusiango', '2', '2020-02-08 23:40:10'),
(6, 'cliente', 'becquer 1087', 'ombu', 'alvear', '11', '2020-02-10 06:32:12'),
(7, 'cliente', 'camacua 3858', 'la', 'cortada', '11', '2020-02-10 07:36:47'),
(8, 'cliente', 'afuera', 'afuera', 'afuera', '11', '2020-02-10 07:40:38'),
(9, 'cliente', 'blandengues 132', 'pasillp', 'pasillo', '11', '2020-02-10 07:46:02'),
(10, 'clientes', 'blandengues 132', 'pasillo', 'pasillo', '11', '2020-02-10 07:48:04'),
(11, 'cliente', 'afuara', 'espera', 'el cliente', '11', '2020-02-10 08:00:25'),
(12, 'cliente', 'espera ', 'afuera', 'el cano', '11', '2020-02-10 08:02:51'),
(13, 'cliente', 'el cano', '1058', 'espera', '11', '2020-02-10 08:04:46'),
(14, 'susana', 'ombu ', 'cano', 'aa', '11', '2020-02-10 08:08:11'),
(15, 'qq', 'cano', '1058', 'espera', '11', '2020-02-10 08:10:07'),
(16, 'cliente', 'cano 1058', 'afuera', 'espera', '11', '2020-02-10 08:16:15'),
(17, 'cli', 'afuera', 'clie', 'calle', '11', '2020-02-10 08:18:33'),
(18, 'migel', 'el cano', 'alvear', 'ombu', '11', '2020-02-10 08:20:32'),
(19, 'clientes', 'el cano', 'ombu', 'alvear', '11', '2020-02-10 08:22:52'),
(20, 'cliente', 'alarcom 38', 'boulog surmer', 'y rincon', '11', '2020-02-10 08:25:54'),
(21, 'clientes', 'peleg111', 'galla', 'pino', '111', '2020-02-10 08:28:05'),
(22, 'v', 'el cano 1264', 'ombu', 'll', '11', '2020-02-10 08:30:01'),
(23, 'ds', 'cano 1264', 'ombu', 'alvear', '12', '2020-02-10 08:31:42'),
(24, 'cliente', 'mitre415', 'esquina', 'belgrano', '11', '2020-02-10 08:43:35'),
(25, 'ww', 'camacua 3586', 'ventura martines', 'y pelegrini', '11', '2020-02-10 09:56:52'),
(26, 'd', 'gallardo 2851', 'boulongsurmer', 'esquina', '11', '2020-02-10 09:59:05'),
(27, 'cliente', 'gallardo 2851', 'boulogne sur mer', 'savedra', '11', '2020-02-10 10:01:47'),
(28, 'clientes', 'gallardo 2851', 'boulong sur mer', 'belgrano', '11', '2020-02-10 10:04:36'),
(29, 'cliente', 'gallardo 2851', 'boulogne sur mer', 'belgrano', '11', '2020-02-10 10:07:54'),
(30, 'Jorge', 'Alsina 234', 'PavÃ³n', 'Santa Fe', '3463', '2020-02-10 22:13:54'),
(31, 'cliente', 'don bosco 738', 'gallardo', 'pelegrini', '11', '2020-02-10 22:16:15'),
(32, 'MICA', 'GALLARDO 1237', 'ENYT', 'CANO', '11', '2020-02-11 02:56:30'),
(33, 'clientes', 'gaiiardo', 'peoee', 'ddd', '11', '2020-02-11 17:07:28'),
(34, 'cliente', 'Don bosco', '738', 'lizandro', '11', '2020-02-11 17:08:15'),
(35, 'clientes', 'gallardo', 'donbosco', 'lizzandro', '111', '2020-02-11 17:11:23'),
(36, 'gabriel', 'gallardo', 'eeee', 'rrrrr', '11', '2020-02-11 17:14:49'),
(37, 'carlos', 'camacua 3542', 'carlos pelegrini', 'ventura martines', '1154640209', '2020-02-11 23:20:49'),
(38, '0scar', 'el cano', 'alveas', ' ombu', '11', '2020-02-11 23:40:45'),
(39, 'fjlorencia', 'carlos pelegrini 824', 'gallardo', 'itisiango', '11', '2020-02-11 23:49:13'),
(40, 'ema', 'dantealigheri 1318', 'osanam', 'y camacua', '11', '2020-02-11 23:57:19'),
(41, 'lll', 'dantealigheri 1318', 'osanam', 'camacua', '1133964646', '2020-02-12 00:03:05'),
(42, 'no', 'dantealigheri 1318', 'osanam', 'y camacua', '1133964646', '2020-02-12 00:08:28'),
(43, 'cliente', 'afueraespera', 'espera', 'afuera', '11', '2020-02-12 02:01:51'),
(44, 'romi', 'el cano 158', 'ombu', 'alvear', '11', '2020-02-12 02:03:34'),
(45, 'oooo', 'leopoldo lugones 1872', 'alado del easy', 'easy', '11', '2020-02-12 15:48:20'),
(46, 'espera en el local', 'el cano 1058', 'ombu', 'alvear', '99', '2020-02-13 04:18:30'),
(47, 'eeee', 'lugones 650', 'lizandro la torre', 'posada', '100', '2020-02-13 04:22:15'),
(48, 'eeee', 'don bosco 771', 'gallardo', 'la torre', '101', '2020-02-13 04:25:07'),
(49, 'eeee', 'gallardo 3310', 'esquina ', 'blandengues', '102', '2020-02-13 04:33:19'),
(50, 'eeee', 'ombu 3319 ', 'lugones', 'aligheri', '103', '2020-02-13 04:44:52'),
(51, 'eeee', 'cano 1058', 'clalvear', 'y ombu', '204', '2020-02-13 04:51:49'),
(52, 'eeee', 'el cano', 'eitusiango', 'gallardo', '105', '2020-02-13 04:56:57'),
(53, 'eee', 'gallardo 3810', 'becquer', 'alvear', '106', '2020-02-13 05:01:01'),
(54, 'eeeee', 'pasaje corriente 3669 ', 'martines', '9 de  julio', '107', '2020-02-13 05:07:00'),
(55, 'eeee', 'pasaje corrientes 3669', 'martinez', '9 de julio', '111', '2020-02-13 05:14:06'),
(56, 'eeee', 'pasaje corrientes 3669', 'martinez', 'y 9 de julio', '108', '2020-02-13 05:18:01'),
(57, 'eeee', 'pasaje corrientes 3669', 'martinez', '9 de julio', '108', '2020-02-13 05:24:52'),
(58, 'cliente', 'gallardo 3657', 'ventura martinez ', 'pelegrini', '99', '2020-02-14 00:14:02'),
(59, 'los dos deliveri estan enamorados', 'el cano 1058', 'alvear', 'ombu', '99', '2020-02-14 01:09:49'),
(60, 'cliente', 'gallardo3310  ', 'esquina ', 'blandengues', '99', '2020-02-14 01:19:14'),
(61, 'clientes', 'el cano 1058', 'alvear', 'ombu', 'esperan', '2020-02-14 01:29:24'),
(62, 'cliente', 'savedra 894', 'latorre', 'gallardo', '11', '2020-02-14 01:35:35');

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
(1, 1, 70, 'juliana loto', 'el cano 1611 [ emilio la marca / y posada ]', '11', ' 1x Empanada Carne ($40)<br>', 40, 0, 10, 50, 0, 50, '.', '2020-02-08 23:04:39'),
(2, 1, 70, 'antonio parra', 'av coronel escalada 1927 [ pacheco / es para el seguridad de pacheco golf bancalari ]', '1', ' 1x Pizza PedidoYa JamÃ³n ($270)<br>', 270, 0, 0, 0, 0, 0, 'pago oline', '2020-02-08 23:24:52'),
(3, 1, 70, 'abuela', 'el cano [ ombu / alvear ]', '1', ' 2x Milanesa Al Plato Napolitana Con Pure ($580)<br>', 580, 0, 0, 0, -580, 580, '.', '2020-02-08 23:37:29'),
(4, 1, 70, 'juliana loto', 'el cano 1611 [ emilio la marca / y posada ]', '11', ' 1x Pizza Muzzarella ($240)<br>', 240, 0, 0, 0, -240, 240, '.', '2020-02-09 23:48:46'),
(5, 1, 60, 'cliente', 'becquer 1087 [ ombu / alvear ]', '11', ' 1x Pizza Fugazzeta ($290)<br>1x Pizza Calabreza ($270)<br>', 560, 260, 0, 0, -300, 300, '.', '2020-02-10 06:34:24'),
(6, 1, 60, 'cliente', 'camacua 3858 [ la / cortada ]', '11', ' 1x Pizza JamÃ³n ($260)<br>1x PorciÃ³n de Pizza PorciÃ³n De Papas Fritas Grande ($170)<br>', 430, 0, 0, 0, -430, 430, 'su-pizza agradese su compra', '2020-02-10 07:37:28'),
(7, 1, 60, 'cliente', 'afuera [ afuera / afuera ]', '11', ' 1x Pizza Napolitana ($270)<br>', 270, 0, 0, 0, -270, 270, 'gracias', '2020-02-10 07:40:42'),
(8, 1, 60, 'clientes', 'blandengues 132 [ pasillo / pasillo ]', '11', ' 2x Pizza Muzzarella ($480)<br>1x PorciÃ³n de Pizza PorciÃ³n De Papas Fritas Grande ($170)<br>', 650, 0, 0, 0, -650, 650, '.', '2020-02-10 07:48:18'),
(9, 1, 60, 'cliente', 'afuara [ espera / el cliente ]', '11', ' 2x Empanada Carne ($80)<br>2x Empanada Cebolla ($80)<br>2x Empanada roquefort ($80)<br>1x Milanesa Sandwich Simple Lechuga y Tomate ($190)<br>2x Bebida cerveza brahma 473 ml ($180)<br>1x Bebida 2,25 manaos de lima ($65)<br>', 675, 0, 0, 0, -675, 675, '.', '2020-02-10 08:00:36'),
(10, 1, 60, 'cliente', 'el cano [ 1058 / espera ]', '11', ' 1x Pizza Fugazzeta ($290)<br>1x Pizza Calabreza ($270)<br>', 560, 260, 0, 0, -300, 300, 'espera afuera', '2020-02-10 08:05:22'),
(11, 1, 60, 'susana', 'ombu [ cano / aa ]', '11', ' 1x Promo 2 (1x Napo 12x Empanadas) ($450)<br>', 450, 0, 0, 0, -450, 450, '.', '2020-02-10 08:08:24'),
(12, 1, 60, 'qq', 'cano [ 1058 / espera ]', '11', ' 1x Pizza Napolitana y JamÃ³n ($290)<br>', 290, 0, 0, 0, -290, 290, '.', '2020-02-10 08:10:20'),
(13, 1, 60, 'cliente', 'alarcom 38 [ boulog surmer / y rincon ]', '11', ' 1x Pizza Napolitana ($270)<br>', 270, 0, 0, 0, -270, 270, '.', '2020-02-10 08:26:06'),
(14, 1, 60, 'ds', 'cano 1264 [ ombu / alvear ]', '12', ' 1x Pizza JamÃ³n ($260)<br>', 260, 0, 0, 0, -260, 260, '.', '2020-02-10 08:31:51'),
(15, 1, 60, 'cliente', 'mitre415 [ esquina / belgrano ]', '11', ' 1x Milanesa Tortilla ($210)<br>4x Empanada Carne ($160)<br>', 370, 0, 0, 0, -370, 370, '.', '2020-02-10 08:45:41'),
(16, 1, 60, 'ww', 'camacua 3586 [ ventura martines / y pelegrini ]', '11', ' 6x Empanada Carne ($240)<br>', 240, 10, 0, 0, -230, 230, '.', '2020-02-10 09:57:16'),
(17, 1, 60, 'cliente', 'don bosco 738 [ gallardo / pelegrini ]', '11', ' 1x Minutas PorciÃ³n De Papas Fritas Grande ($170)<br>1x PedidoYa Promo 13 (1x Milanesa A Caballo 1x Tortilla) ($380)<br>', 550, 0, 40, 0, -590, 590, 'pago oline', '2020-02-10 22:17:01'),
(18, 1, 60, 'MICA', 'GALLARDO 1237 [ ENYT / CANO ]', '11', ' 1x Promo 8 (1x Sandwiches Full 1x Papas Fritas) ($300)<br>1x Bebida fanta 2.25 ($200)<br>', 500, 50, 0, 1000, 550, 450, '.', '2020-02-11 02:57:24'),
(19, 2, 60, 'clientes', 'gallardo [ donbosco / lizzandro ]', '111', ' 1x Hamburguesa Completa Lechuga Tomate JamÃ³n y Queso ($150)<br>', 150, 0, 0, 0, -150, 150, '.', '2020-02-11 17:11:36'),
(20, 2, 70, 'gabriel', 'gallardo [ eeee / rrrrr ]', '11', ' 1x Hamburguesa Completa Lechuga Tomate JamÃ³n y Queso ($150)<br>', 150, 0, 0, 0, -150, 150, '.', '2020-02-11 17:15:01'),
(21, 2, 60, 'carlos', 'camacua 3542 [ carlos pelegrini / ventura martines ]', '1154640209', ' 2x Promo 10 (1x Sandwiches Completo 1x Papas Fritas) ($480)<br>', 480, 0, 0, 0, -480, 480, 'casa del fondo', '2020-02-11 23:20:56'),
(22, 2, 60, '0scar', 'el cano [ alveas / ombu ]', '11', ' 1x Milanesa Sandwich Completo Lechuga Tomate JamÃ³n y Queso ($230)<br>', 230, 0, 0, 0, -230, 230, '.', '2020-02-11 23:40:55'),
(23, 2, 70, 'lll', 'dantealigheri 1318 [ osanam / camacua ]', '1133964646', ' 1x Bebida cocacola 2.25l ($200)<br>', 200, 0, 0, 0, -200, 200, '.', '2020-02-12 00:04:13'),
(24, 2, 60, 'no', 'dantealigheri 1318 [ osanam / y camacua ]', '1133964646', ' 1x Promo 2 (1x Napo 12x Empanadas) ($450)<br>1x Bebida cocacola 2.25l ($200)<br>', 650, 10, 0, 0, -640, 640, '6 pollo 6 carne', '2020-02-12 00:09:21'),
(25, 2, 60, 'espera en el local', 'el cano 1058 [ ombu / alvear ]', '99', ' 1x Minutas Cono De Papas Fritas ($75)<br>', 75, 0, 0, 0, -75, 75, 'ya pago', '2020-02-13 04:18:56'),
(26, 2, 60, 'eeee', 'lugones 650 [ lizandro la torre / posada ]', '100', ' 1x Promo 3 (1x Muzzarella 1x Napolitana 1x Fugazeta) ($540)<br>', 540, 0, 0, 0, -540, 540, '.', '2020-02-13 04:22:27'),
(27, 2, 60, 'eeee', 'don bosco 771 [ gallardo / la torre ]', '101', ' 2x Promo 10 (1x Sandwiches Completo 1x Papas Fritas) ($480)<br>1x Minutas porcion de papas grande ($170)<br>', 650, 0, 0, 0, -650, 650, '.', '2020-02-13 04:25:15'),
(28, 2, 60, 'eeee', 'gallardo 3310 [ esquina / blandengues ]', '102', ' 1x Promo 9 (1x Sandwiches Simples 1x Papas Fritas) ($200)<br>', 200, 0, 0, 0, -200, 200, '.', '2020-02-13 04:33:33'),
(29, 2, 60, 'eeee', 'ombu 3319 [ lugones / aligheri ]', '103', ' 1x Pizza Muzzarella ($240)<br>', 240, 0, 0, 0, -240, 240, '.', '2020-02-13 04:45:10'),
(30, 2, 60, 'eeee', 'cano 1058 [ clalvear / y ombu ]', '204', ' 1x Promo 9 (1x Sandwiches Simples 1x Papas Fritas) ($200)<br>', 200, 0, 0, 0, -200, 200, '.', '2020-02-13 04:52:00'),
(31, 2, 60, 'eeee', 'el cano [ eitusiango / gallardo ]', '105', ' 1x Pizza Pizzanesa Napolitana ($390)<br>', 390, 0, 0, 0, -390, 390, '.', '2020-02-13 04:57:05'),
(32, 2, 60, 'eee', 'gallardo 3810 [ becquer / alvear ]', '106', ' 1x Promo 7 (2x Muzzarella 1x JamÃ³n) ($550)<br>', 550, 0, 0, 0, -550, 550, '.', '2020-02-13 05:01:10'),
(33, 2, 60, 'eeee', 'pasaje corrientes 3669 [ martinez / 9 de julio ]', '108', ' ', 250, 0, 0, 0, -250, 250, '.', '2020-02-13 05:26:31'),
(34, 2, 60, 'cliente', 'gallardo 3657 [ ventura martinez / pelegrini ]', '99', ' 1x Pizza Muzzarella ($240)<br>', 240, 0, 0, 0, -240, 240, 'el cliente abona justo', '2020-02-14 00:14:29'),
(35, 2, 60, 'los dos deliveri estan enamorados', 'el cano 1058 [ alvear / ombu ]', '99', ' 1x Pizza Pizzanesa Napolitana ($390)<br>', 390, 0, 0, 0, -390, 390, 'ya pagaron', '2020-02-14 01:10:09'),
(36, 2, 60, 'cliente', 'gallardo3310 [ esquina / blandengues ]', '99', ' 1x Promo 9 (1x Sandwiches Simples 1x Papas Fritas) ($200)<br>', 200, 0, 0, 0, -200, 200, 'paga justo', '2020-02-14 01:19:34'),
(37, 2, 60, 'clientes', 'el cano 1058 [ alvear / ombu ]', 'esperan', ' 1x Promo 2 (1x Napo 12x Empanadas) ($450)<br>1x Bebida 2,25 manaos de lima ($65)<br>', 515, 0, 0, 0, -515, 515, '5 de carne 3 pollo 3 capreses 1 roquefort', '2020-02-14 01:30:26');

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
(22, 'Empanada', 'Carne', 40, '2020-02-08 17:03:02'),
(23, 'Empanada', 'Pollo', 40, '2020-02-08 17:03:16'),
(24, 'Empanada', 'JamÃ³n y queso', 40, '2020-02-08 17:04:03'),
(25, 'Empanada', 'Caprese', 40, '2020-02-08 17:04:25'),
(26, 'Empanada', 'Cebolla', 40, '2020-02-08 17:04:45'),
(27, 'Hamburguesa', 'Simple Lechuga y Tomate', 120, '2020-02-08 17:05:03'),
(28, 'Hamburguesa', 'Completa Lechuga Tomate JamÃ³n y Queso', 150, '2020-02-08 17:10:04'),
(29, 'Hamburguesa', 'Full Full Hamburguesa Doble Queso', 190, '2020-02-08 17:10:47'),
(30, 'Minutas', 'Sandwich Milanesa Simple Lechuga y Tomate', 190, '2020-02-08 17:12:21'),
(31, 'Milanesa', 'Sandwich Completo Lechuga Tomate JamÃ³n y Queso', 230, '2020-02-08 17:13:00'),
(32, 'Minutas', 'Sandwich Full Lechuga Tomate JamÃ³n Queso Huevo y Papas Fritas', 250, '2020-02-08 17:14:00'),
(33, 'Milanesa', 'Al Plato Con Papas Fritas', 260, '2020-02-08 17:14:43'),
(34, 'Milanesa', 'Al Plato Napolitana Con Pure', 290, '2020-02-08 17:15:13'),
(35, 'Minutas', 'Bondiola Con Papas Fritas', 290, '2020-02-08 17:16:37'),
(36, 'Minutas', 'Cono De Papas Fritas', 75, '2020-02-08 17:17:07'),
(37, 'Minutas', 'PorciÃ³n De Papas Fritas Grande', 170, '2020-02-08 17:17:44'),
(39, 'PorciÃ³n de Pizza', 'Faina', 45, '2020-02-08 17:19:43'),
(40, 'Pizza', 'Muzzarella', 240, '2020-02-08 17:23:58'),
(41, 'Pizza', 'JamÃ³n', 260, '2020-02-08 17:24:27'),
(42, 'Pizza', 'JamÃ³n y MorrÃ³n', 290, '2020-02-08 17:24:52'),
(43, 'Pizza', 'JamÃ³n y Huevo', 290, '2020-02-08 17:25:10'),
(44, 'Pizza', 'Napolitana y JamÃ³n', 290, '2020-02-08 17:25:56'),
(45, 'Pizza', 'Napolitana', 270, '2020-02-08 17:26:23'),
(46, 'Pizza', 'Muzzarella y Huevo', 265, '2020-02-08 17:26:48'),
(47, 'Pizza', 'Fugazzeta', 290, '2020-02-08 17:27:13'),
(48, 'Pizza', 'Roquefordt', 320, '2020-02-08 17:27:43'),
(49, 'Pizza', 'Primavera', 300, '2020-02-08 17:28:02'),
(50, 'Pizza', 'Salchipizza', 280, '2020-02-08 17:28:22'),
(51, 'Pizza', 'PapÃ¡s Fritas', 250, '2020-02-08 17:28:47'),
(52, 'Pizza', 'Natural', 250, '2020-02-08 17:29:05'),
(53, 'Pizza', 'Completa', 310, '2020-02-08 17:29:31'),
(54, 'Pizza', 'Calabreza', 270, '2020-02-08 17:29:49'),
(55, 'Pizza', 'Palmitos', 250, '2020-02-08 17:30:10'),
(56, 'Pizza', 'Provenzal', 240, '2020-02-08 17:30:35'),
(57, 'Pizza', 'Siciliana', 270, '2020-02-08 17:30:57'),
(58, 'Pizza', 'Anchoas', 280, '2020-02-08 17:31:12'),
(59, 'Pizza', 'Caprese', 290, '2020-02-08 17:31:32'),
(60, 'Pizza', 'Salame', 240, '2020-02-08 17:32:04'),
(61, 'Pizza', 'Pizzanesa Napolitana', 390, '2020-02-08 17:32:35'),
(62, 'Pizza', 'Especial SU-PIZZA', 350, '2020-02-08 17:32:54'),
(63, 'Pizza', 'Papas y Huevos', 300, '2020-02-08 17:33:17'),
(64, 'Pizza', 'PedidoYa Muzzarella', 260, '2020-02-08 19:18:18'),
(65, 'Pizza', 'PedidoYa JamÃ³n', 270, '2020-02-08 19:19:22'),
(66, 'Pizza', 'PedidoYa JamÃ³n y Morrones', 290, '2020-02-08 19:19:42'),
(67, 'Pizza', 'PedidoYa JamÃ³n y Huevo', 300, '2020-02-08 19:20:39'),
(68, 'Pizza', 'PedidoYa Napolitana y JamÃ³n', 300, '2020-02-08 19:20:59'),
(69, 'Pizza', 'PedidoYa Napolitana', 280, '2020-02-08 19:21:14'),
(70, 'Pizza', 'PedidoYa Fugazzetta', 300, '2020-02-08 19:21:27'),
(71, 'Pizza', 'PedidoYa Roquefort', 350, '2020-02-08 19:21:44'),
(72, 'Pizza', 'PedidoYa Primavera', 350, '2020-02-08 19:22:07'),
(73, 'Pizza', 'PedidoYa Salchipizza', 300, '2020-02-08 19:22:20'),
(74, 'Pizza', 'PedidoYa Papa Fritas', 280, '2020-02-08 19:22:37'),
(75, 'Pizza', 'PedidoYa Natural', 270, '2020-02-08 19:22:55'),
(76, 'Pizza', 'PedidoYa Completa', 330, '2020-02-08 19:23:06'),
(77, 'Pizza', 'PedidoYa Calabresa', 280, '2020-02-08 19:23:29'),
(78, 'Pizza', 'PedidoYa Palmito', 300, '2020-02-08 19:23:38'),
(79, 'Pizza', 'PedidoYa Provenzal', 260, '2020-02-08 19:23:49'),
(80, 'Pizza', 'PedidoYa Siciliana', 280, '2020-02-08 19:24:04'),
(81, 'Pizza', 'PedidoYa Anchoas', 300, '2020-02-08 19:24:14'),
(82, 'Pizza', 'PedidoYa Caprese', 300, '2020-02-08 19:24:26'),
(83, 'Pizza', 'PedidoYa Salame', 280, '2020-02-08 19:24:36'),
(84, 'Pizza', 'PedidoYa Pisanesa Napolitana', 450, '2020-02-08 19:24:51'),
(85, 'Pizza', 'PedidoYa Fritas y Huevo', 320, '2020-02-08 19:25:30'),
(86, 'Pizza', 'PedidoYa SU-PIZZA', 400, '2020-02-08 19:26:58'),
(87, 'Hamburguesa', 'PedidoYa Lechuga y Tomate', 160, '2020-02-08 19:42:08'),
(88, 'Empanada', 'Empanadas x6', 230, '2020-02-08 19:43:38'),
(89, 'Pizza', 'Empanadas x12', 460, '2020-02-08 19:44:05'),
(90, 'Empanada', 'PedidoYa carne', 50, '2020-02-08 19:52:20'),
(91, 'Empanada', 'PedidoYa pollo', 50, '2020-02-08 19:53:00'),
(92, 'Empanada', 'PedidoYa jamon y queso', 50, '2020-02-08 19:53:49'),
(93, 'Empanada', 'PedidoYa capreses', 50, '2020-02-08 19:54:15'),
(94, 'Empanada', 'PedidoYa cebolla', 50, '2020-02-08 19:54:44'),
(95, 'Empanada', 'PedidoYa roquefort', 50, '2020-02-08 19:55:17'),
(96, 'Empanada', 'PedidoYa empanadas x6', 270, '2020-02-08 19:56:31'),
(97, 'Empanada', 'PedidoYa empanadas x12', 540, '2020-02-08 19:57:10'),
(98, 'Minutas', 'PedidoYa sandwuiches simple', 250, '2020-02-08 20:03:23'),
(99, 'Minutas', 'PedidoYa sandwiches completo', 260, '2020-02-08 20:04:33'),
(100, 'Minutas', 'PedidoYa sandwiches full con fritas', 275, '2020-02-08 20:05:20'),
(101, 'Minutas', 'PedidoYa mila alplato con fritas ', 310, '2020-02-08 20:05:50'),
(102, 'Minutas', 'PedidoYa napo con pure', 370, '2020-02-08 20:06:17'),
(103, 'Minutas', 'PedidoYa bondiola con fritas ', 300, '2020-02-08 20:06:58'),
(104, 'Minutas', 'PedidoYa cono de fritas', 85, '2020-02-08 20:07:28'),
(105, 'Minutas', 'PedidoYa porcion de fritas chica', 150, '2020-02-08 20:08:02'),
(106, 'Minutas', 'PedidoYa porcion de fritas grandes', 170, '2020-02-08 20:08:40'),
(107, 'Minutas', 'PedidoYa tortillas de papas', 250, '2020-02-08 20:09:06'),
(108, 'Hamburguesa', 'PedidoYa hamburgesas simple', 100, '2020-02-08 20:09:54'),
(109, 'Hamburguesa', 'PedidoYa hamburguesa completa', 150, '2020-02-08 20:10:27'),
(110, 'Hamburguesa', 'PedidoYa hamburguesa full full', 200, '2020-02-08 20:11:12'),
(111, 'Bebida', ' cocacola 2.25l', 200, '2020-02-08 20:13:55'),
(112, 'Bebida', 'coca cola 1.5l', 150, '2020-02-08 20:14:25'),
(113, 'Bebida', 'fanta 2.25', 200, '2020-02-08 20:15:35'),
(114, 'Bebida', 'fanta 1,5', 150, '2020-02-08 20:16:01'),
(115, 'Bebida', 'coca cola 600', 55, '2020-02-08 20:17:20'),
(116, 'Bebida', 'manaos 600', 40, '2020-02-08 20:17:49'),
(117, 'Bebida', '2,25 manaos de lima', 65, '2020-02-08 20:19:13'),
(118, 'Bebida', 'manaos 2,25 de cola ', 65, '2020-02-08 20:19:50'),
(119, 'Bebida', 'manaos de naranja 2,25', 65, '2020-02-08 20:20:31'),
(120, 'Bebida', 'manaos pomelo blanco 2,25', 65, '2020-02-08 20:22:33'),
(121, 'Bebida', 'sprite 2,25', 200, '2020-02-08 20:23:20'),
(122, 'Bebida', 'sprite 600 ', 50, '2020-02-08 20:23:47'),
(123, 'Bebida', 'sprite 1,5l', 150, '2020-02-08 20:24:58'),
(124, 'Bebida', 'speed 250 ml', 60, '2020-02-08 20:26:27'),
(125, 'Bebida', 'cerveza brahma 473 ml', 90, '2020-02-08 20:28:10'),
(126, 'Minutas', 'porcion chica de papas', 150, '2020-02-09 23:25:23'),
(127, 'Minutas', 'porcion de papas grande', 170, '2020-02-09 23:26:04'),
(128, 'Minutas', 'fritas grande', 170, '2020-02-10 06:48:12'),
(129, 'Empanada', 'roquefort', 40, '2020-02-10 07:53:08');

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
(46, 'PromociÃ³n Pizza', 'Promo 1', '3x Muzzas', 520, '2020-02-08 16:40:00'),
(47, 'PromociÃ³n Pizza', 'Promo 2', '1x Napo   12x Empanadas', 450, '2020-02-08 16:40:56'),
(48, 'PromociÃ³n Pizza', 'Promo 3', '1x Muzzarella 1x Napolitana 1x Fugazeta', 540, '2020-02-08 16:41:48'),
(49, 'PromociÃ³n Pizza', 'Promo 4', '1x Muzzarella 1x Jamon y Morron 1x Napolitana', 590, '2020-02-08 16:46:38'),
(50, 'PromociÃ³n Pizza', 'Promo 5', '1x Napolitana 6x Empanadas', 430, '2020-02-08 16:49:56'),
(51, 'PromociÃ³n Pizza', 'Promo 6', '1x Salchipizza 1x Muzzarella', 400, '2020-02-08 16:50:32'),
(52, 'PromociÃ³n Pizza', 'Promo 7', '2x Muzzarella 1x JamÃ³n', 550, '2020-02-08 16:51:11'),
(53, 'PromociÃ³n Minuta', 'Promo 8', '1x Sandwiches Full   1x Papas Fritas', 300, '2020-02-08 16:51:58'),
(54, 'PromociÃ³n Minuta', 'Promo 9', '1x Sandwiches Simples 1x Papas Fritas', 200, '2020-02-08 16:52:41'),
(55, 'PromociÃ³n Minuta', 'Promo 10', '1x Sandwiches Completo 1x Papas Fritas', 240, '2020-02-08 16:53:35'),
(56, 'PromociÃ³n Pizza', 'Promo 11', '1x Napolitana 1x JamÃ³n y MorrÃ³n 1x Fugazeta ', 670, '2020-02-08 16:54:38'),
(57, 'PromociÃ³n Pizza', 'Promo 12', '1x Muzzarella 6x Empanadas', 370, '2020-02-08 16:55:36'),
(58, 'PromociÃ³n Minuta', 'Promo 13', '1x Milanesa a Caballo 1x Tortilla', 350, '2020-02-08 16:56:20'),
(59, 'PromociÃ³n Minuta', 'Promo 14', '1x Pizzanesa Napolitana 1x Cocacola', 460, '2020-02-08 16:57:06'),
(61, 'PromociÃ³n Pizza', 'PedidoYa Promo 1', '3x Muzzarella', 730, '2020-02-08 19:27:49'),
(62, 'PromociÃ³n Pizza', 'PedidoYa Promo 2', '1x Napolitana 12x Empanadas', 720, '2020-02-08 19:28:29'),
(63, 'PromociÃ³n Pizza', 'PedidoYa Promo 3', '1x Muzzarella 1x Napolitana 1x Fugazzetta', 760, '2020-02-08 19:29:21'),
(64, 'PromociÃ³n Pizza', 'PedidoYa Promo 4', '1x Muzzarella 1x JamÃ³n 1x Napolitana', 750, '2020-02-08 19:29:57'),
(65, 'PromociÃ³n Pizza', 'PedidoYa Promo 5', '1x Napolitana 6x Empanadas', 520, '2020-02-08 19:30:46'),
(66, 'PromociÃ³n Pizza', 'PedidoYa Promo 6', '1x Muzzarella 1x Salchipizza', 540, '2020-02-08 19:31:07'),
(67, 'PromociÃ³n Pizza', 'PedidoYa Promo 7', '2x Muzzarella 1x JamÃ³n', 730, '2020-02-08 19:31:29'),
(68, 'PromociÃ³n Minuta', 'PedidoYa Promo 8', '1x Sandwich Full 1x Papas Fritas', 320, '2020-02-08 19:32:49'),
(69, 'PromociÃ³n Minuta', 'PedidoYa Promo 9', '1x Sandwich Simple 1x Papas Fritas', 260, '2020-02-08 19:33:21'),
(70, 'PromociÃ³n Minuta', 'PedidoYa Promo 10', '1x Sandwich Completo 1x Papas Fritas', 280, '2020-02-08 19:33:52'),
(71, 'PromociÃ³n Pizza', 'PedidoYa Promo 11', '1x Napolitana 1x JamÃ³n 1x Fugazzetta', 820, '2020-02-08 19:36:38'),
(72, 'PromociÃ³n Pizza', 'PedidoYa Promo 12', '1x Muzzarella 6x Empanadas', 470, '2020-02-08 19:37:11'),
(73, 'PromociÃ³n Pizza', 'PedidoYa Promo 13', '1x Milanesa A Caballo 1x Tortilla', 380, '2020-02-08 19:37:38'),
(74, 'PromociÃ³n Minuta', 'PedidoYa Promo 14', '1x Hamburguesa Completa 1x Papas Fritas', 345, '2020-02-08 19:38:13'),
(75, 'PromociÃ³n Minuta', 'PedidoYa Promo 15', '1x Hamburguesa Simple 1x Papas Fritas', 280, '2020-02-08 19:38:37');

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
(1, 'close', '2020-02-08 18:37:47', '2020-02-11 00:16:38', 18, 5535),
(2, 'close', '2020-02-11 13:56:27', '2020-02-16 13:00:30', 19, 5940);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `pisa_orders`
--
ALTER TABLE `pisa_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `pisa_products`
--
ALTER TABLE `pisa_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `pisa_promos`
--
ALTER TABLE `pisa_promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `pisa_shifts`
--
ALTER TABLE `pisa_shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
