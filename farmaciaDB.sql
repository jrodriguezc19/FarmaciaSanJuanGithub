-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 02:47:56
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int(11) NOT NULL DEFAULT 0,
  `brand_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(11, 'FarmaciaDimon', 1, 1),
(12, 'Farmacia', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `categories_id` int(11) NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int(11) NOT NULL DEFAULT 0,
  `categories_status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Pastillas', 1, 2),
(2, 'Jarabe', 1, 2),
(3, 'Inyecciones', 1, 2),
(4, 'Paliativos', 1, 2),
(5, 'Vacunas', 1, 2),
(6, 'pas', 1, 2),
(7, 'jarabes', 1, 2),
(8, 'vendas', 2, 2),
(9, 'PASTILLAS', 1, 1),
(10, 'JARABES', 1, 1),
(11, 'Pomadas', 1, 1),
(12, 'adf', 1, 2),
(13, 'Goteros', 1, 1),
(14, 'Inyectable', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order_item`
--

CREATE TABLE `order_item` (
  `id` int(15) NOT NULL,
  `productName` int(100) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `lastid` int(50) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `order_item`
--

INSERT INTO `order_item` (`id`, `productName`, `quantity`, `rate`, `total`, `lastid`, `added_date`) VALUES
(5, 2, '1', '100', '100.00', 1, '0000-00-00'),
(7, 1, '2', '30', '60.00', 3, '2022-04-15'),
(8, 2, '4', '150', '600.00', 3, '2022-04-15'),
(9, 3, '1', '200', '200.00', 3, '2022-04-15'),
(10, 1, '2', '30', '60.00', 4, '2022-04-15'),
(13, 2, '2', '150', '300.00', 2, '2022-04-15'),
(14, 3, '1', '200', '200.00', 5, '2022-05-01'),
(15, 5, '1', '250', '250.00', 6, '2022-05-01'),
(16, 5, '1', '250', '250.00', 7, '2022-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `mrp` int(100) NOT NULL,
  `bno` varchar(50) NOT NULL,
  `expdate` date NOT NULL,
  `added_date` date NOT NULL,
  `active` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `mrp`, `bno`, `expdate`, `added_date`, `active`, `status`) VALUES
(23, 'ACETAMINOFEN', 'descarga.jfif', 9, 0, '400', '2', 0, 'ANALGESICO', '2023-04-25', '2022-09-30', 2, 2),
(24, 'BROMEXINA', 'descarga (1).jfif', 11, 10, '25', '', 0, 'DOLOR DE GARGANTA', '2023-07-07', '2022-09-30', 2, 2),
(25, 'paracetamol', 'logo.png', 11, 10, '74', '', 0, 'paracetamol analgesico', '2022-10-11', '2022-10-02', 2, 2),
(26, 'jengibre', 'logo.png', 12, 10, '45', '', 0, 'para el covid', '2022-10-18', '2022-10-02', 2, 2),
(27, 'Cloranfenicol 15 ML', 'descarga (8).jfif', 11, 13, '25', '7', 0, 'Gotero para los ojos, alivia el dolor', '2022-11-23', '2022-10-03', 1, 1),
(28, 'Eritropoyetnia 2000 ML', 'descarga (7).jfif', 11, 14, '16', '195', 0, 'Eritropoyetina 2000 inyectable, congelable -10 G', '2022-10-26', '2022-10-03', 1, 1),
(29, 'Insulina inyectable 10ml', 'descarga (6).jfif', 12, 14, '18', '80', 0, 'insulina inyectable 10ml', '2022-11-29', '2022-10-03', 1, 1),
(30, 'Aspirina Forte', 'descarga (5).jfif', 12, 9, '75', '1', 0, 'analgesico', '2023-06-13', '2022-10-03', 1, 1),
(31, 'Complejo B Pastilla', 'descarga (4).jfif', 11, 9, '7', '', 0, 'complejo B 35 pastillas', '2022-09-27', '2022-10-03', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'oscarEstuardoHernandez', '3d8173a388574592fc64588af0ed61de', 'oscarestuardohernand@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indices de la tabla `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
