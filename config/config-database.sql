CREATE TABLE `pisa_customers` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `address` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetA` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `nearStreetB` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `phone` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;