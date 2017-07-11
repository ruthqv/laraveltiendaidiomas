-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-07-2017 a las 19:04:01
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendaidiomas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `langs`
--

CREATE TABLE `langs` (
  `id_lang` int(11) NOT NULL,
  `iso_code` varchar(4) NOT NULL,
  `name` varchar(32) NOT NULL,
  `lang` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `langs`
--

INSERT INTO `langs` (`id_lang`, `iso_code`, `name`, `lang`) VALUES
(1, 'en', 'english', 'en'),
(2, 'es', 'español', 'es');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_10_102613_create_table_product_langs', 2),
(4, '2017_07_11_044327_create_table_users_newfields', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_product` int(10) UNSIGNED NOT NULL,
  `product_id_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` char(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_product`, `product_id_category`, `sku`, `price`, `image`, `created_at`) VALUES
(6, '', 'fdsfsdf', '30.00', 'abrigo.jpg', NULL),
(27, NULL, 'rew', '32.00', 'dress.jpg', NULL),
(28, NULL, '785', '54.00', 'vestido.jpg', NULL),
(29, NULL, 'tyh5', '87.00', 'camisa.jpg', NULL),
(34, NULL, 'sas', '21.00', 'jersey.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product_langs`
--

CREATE TABLE `product_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `name` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `product_langs`
--

INSERT INTO `product_langs` (`id`, `id_product`, `id_lang`, `name`, `description`, `features`, `created_at`) VALUES
(3, 6, 2, 'Prof. Ayden Jones I', 'CastellanoRem quibusdam consectetur mollitia aliquam sunt dolores et. Quae et ut tempora aliquam. Delectus molestiae itaque accusamus aut. Eum amet ut qui sapiente.', 'Mollitia qui ut qui non autem voluptatibus aut.', NULL),
(4, 6, 1, 'Prof. Ayden Jones I', 'InglesNobis a dolores inventore modi eum delectus. Et voluptatem est labore placeat. Molestiae possimus ea autem nihil rerum sunt.', 'Sint voluptatem temporibus laborum.', NULL),
(18, 27, 1, '', '', '', NULL),
(19, 27, 2, '', '', '', NULL),
(20, 28, 1, '', '', '', NULL),
(21, 28, 2, '', '', '', NULL),
(22, 29, 1, '', '', '', NULL),
(23, 29, 2, '', '', '', NULL),
(32, 34, 1, '', '', '', NULL),
(33, 34, 2, '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(160) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'prueba', 'rqvaquero@gmail.com', '$2y$10$sbd1RJslZaXiAXzH/dxYWO2WL2VzBrr1j8xg1TrBwvG9dUL0sWGFa', 'mFUZhuPt5dGRkKPgO9PxvyaBSKK94aqoAG7Xl1f7SxYQDXsETrgFf0bSdmHb', '2017-07-11 02:56:41', '2017-07-11 02:56:41', 'admin'),
(2, 'ruth', 'user@user.com', '$2y$10$INWqUJxGWBNxPHsNwXlxg.ht8aLQ6YwIsgWg545kLoeumqs2wvgoC', 'ZfOTKU16YX08IgGR10YkujNk4WV11VTI6iEO7ojcNgQMewEwMzqbJYSMvW5P', '2017-07-11 03:28:01', '2017-07-11 03:28:01', 'user');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id_lang`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indices de la tabla `product_langs`
--
ALTER TABLE `product_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `langs`
--
ALTER TABLE `langs`
  MODIFY `id_lang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `product_langs`
--
ALTER TABLE `product_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
