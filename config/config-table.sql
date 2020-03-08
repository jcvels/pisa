SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `pisa_customers` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetA` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetB` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

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

CREATE TABLE `pisa_products` (
  `id` int(11) NOT NULL,
  `productClass` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `productDescription` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `productPrice` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE `pisa_promos` (
  `id` int(11) NOT NULL,
  `class` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `description` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `content` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `price` float NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE `pisa_shifts` (
  `id` int(11) NOT NULL,
  `state` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `opentimestamp` datetime NOT NULL,
  `closetimestamp` datetime NOT NULL,
  `orderQtty` int(11) NOT NULL,
  `orderTotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

CREATE TABLE `pisa_users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `passHash` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

ALTER TABLE `pisa_customers`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_orders`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_promos`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_shifts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pisa_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

ALTER TABLE `pisa_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

ALTER TABLE `pisa_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE `pisa_promos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

ALTER TABLE `pisa_shifts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;
