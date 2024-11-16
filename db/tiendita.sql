-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2024 a las 05:29:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `suits`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_producto`
--

CREATE TABLE `t_producto` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(200) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `unidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_producto`
--

INSERT INTO `t_producto` (`id_producto`, `producto`, `precio`, `unidades`) VALUES
(1, 'papas', 18, 4),
(2, 'chocolate', 10, 11),
(3, 'refresco', 20, 40),
(4, 'test', 12, 3),
(5, 'queso', 40, 3),
(11, 'Chocolate', 20, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuario`
--

CREATE TABLE `t_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_usuario`
--

INSERT INTO `t_usuario` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`) VALUES
(13, 'diego', 'bollas', 'diego', '$2y$10$lZuRM1onodDGvD6MygHy8eFfth8rnDqUxZo2wjwOQjsuUOXTtm9Ty'),
(14, 'test1', 'test1', 'test3', '$2y$10$lZuRM1onodDGvD6MygHy8eFfth8rnDqUxZo2wjwOQjsuUOXTtm9Ty'),
(15, 'test2', 'test', 'prueba1', '$2y$10$lZuRM1onodDGvD6MygHy8eFfth8rnDqUxZo2wjwOQjsuUOXTtm9Ty'),
(18, 'andrea', 'martinez', 'anm0109@gmail.com', '$2y$10$pZxJ0M0rjYQ/oFXyuRlGGe9DQduBo9HoEeHd10Yt9USESISFrrnpW'),
(19, 'anyyy', 'Mtz', 'anm@gmail.com', '$2y$10$EARLYjMDrt1R30n4JqJzKuOaRuxA9iofuMhrrwkxED60Tu5hWuWMu'),
(20, 'ivan', 'palma', 'ivanp@gmail.com', '$2y$10$NR4vvTSA/QJCfTYj4rPz7ejVb5cJNYfrK/29xFlRSVbwaRYfOOv0a');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_producto`
--
ALTER TABLE `t_producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_producto`
--
ALTER TABLE `t_producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t_usuario`
--
ALTER TABLE `t_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
