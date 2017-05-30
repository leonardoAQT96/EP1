-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2017 a las 06:28:43
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzeria`
--
CREATE DATABASE IF NOT EXISTS `pizzeria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pizzeria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Especialidades', 'Especialidades de la casa'),
(2, 'Pizzas', 'Pizzas disponibles'),
(3, 'Paquetes', 'Paquetes que se ofrecen'),
(4, 'Entradas', 'Las entradas que se pueden ofrecer'),
(5, 'Postres', 'Existen diferentes tipos (helados)'),
(6, 'Bebidas', 'existen diferentes refrescos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `direccion`, `telefono`) VALUES
(1, 'Miguel', 'Av. Roble verde #15 col. Delfines', NULL),
(2, 'Leonardo', 'oiwdjsio', '7771892064'),
(3, 'Leonardo', 'oiwdjsio', '7771892064'),
(4, 'Leonardo', 'oiwdjsio', '7771892064'),
(5, 'Leonardo', 'oiwdjsio', '7771892064'),
(6, 'Leonardo', 'oiwdjsio', '7771892064'),
(7, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `fecha` datetime(6) DEFAULT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `estado` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `fecha`, `cliente_id`, `estado`) VALUES
(1, '2017-05-18 16:04:43.000000', 1, 'Pendiente'),
(2, '2017-05-29 23:20:57.000000', 2, 'Pendiente'),
(3, '2017-05-29 23:20:57.000000', 3, 'Pendiente'),
(4, '2017-05-29 23:21:03.000000', 4, 'Pendiente'),
(5, '2017-05-29 23:21:03.000000', 5, 'Pendiente'),
(6, '2017-05-29 23:21:04.000000', 6, 'Pendiente'),
(7, '2017-05-29 23:23:23.000000', 7, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_producto`
--

CREATE TABLE `pedido_producto` (
  `id` int(11) NOT NULL,
  `pedido_id` int(11) DEFAULT NULL,
  `producto_id` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pedido_producto`
--

INSERT INTO `pedido_producto` (`id`, `pedido_id`, `producto_id`, `cantidad`) VALUES
(13, 7, 1, 3),
(14, 7, 2, 2),
(15, 7, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `precio` decimal(6,2) DEFAULT NULL,
  `categoria_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `categoria_id`) VALUES
(1, 'Pizza hawaiana', 'Pizza con jamón y piña', '150.00', 1),
(2, 'Pizza mexicana', 'Pizza con frijoles, chile, chorizo', '150.00', 1),
(3, 'Refresco de 2 litros', 'Coca cola 2 litros', '30.00', 4),
(4, 'Ensalada de la casa', 'Ensalada con las mejores hojas verdes y aderezos de la casa', '100.00', 3),
(6, 'zxcxzc', 'xcxzcz', '332.00', 1),
(7, 'sdjhjh', 'dscsad', '212.00', 3),
(10, 'dfvcx', 'sdfsdf', '234.00', 2),
(12, 'sasdas', 'sdsvfdv', '22.00', 6),
(13, 'sdfdf', 'dfsdf', '32.00', 5),
(14, 'dmjhgfdszSADAS', 'dsf', '1.00', 5),
(15, 'qw', 'fdsf', '32.00', 4),
(17, 'asxdasxasxa', 'asdasfas', '9999.99', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pedido_cliente_idx` (`cliente_id`);

--
-- Indices de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pproducto_producto_idx` (`producto_id`),
  ADD KEY `pproducto_pedido_idx` (`pedido_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_categoria_idx` (`categoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pedido_producto`
--
ALTER TABLE `pedido_producto`
  ADD CONSTRAINT `pproducto_pedido` FOREIGN KEY (`pedido_id`) REFERENCES `pedido` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pproducto_producto` FOREIGN KEY (`producto_id`) REFERENCES `producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_categoria` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
