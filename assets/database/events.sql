-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2022 a las 22:30:38
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `events`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `events`
--

INSERT INTO `events` (`id`, `name`, `month`, `description`) VALUES
(5, 'Charla sobre Angular', 'Junio', 'Angular es un framework para aplicaciones web desarrollado en TypeScript, de código abierto, mantenido por Google, que se utiliza para crear y mantener aplicaciones web de una sola página.'),
(6, 'Charla sobre JavaScript', 'Julio', 'JavaScript es un lenguaje de programación interpretado, dialecto del estándar ECMAScript. Se define como orientado a objetos, ​ basado en prototipos, imperativo, débilmente tipado y dinámico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `last_names` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `isLogged` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `names`, `last_names`, `age`, `email`, `password`, `role`, `isLogged`) VALUES
(9, 'Juanito', 'Alimaña', 22, 'admin@user.com', '123', 'admin', 0),
(10, 'usuario1', 'usuario1', 32, 'usuario1@user.com', '123', 'user', 0),
(11, 'usuario2', 'usuario2', 23, 'usuario2@user.com', '123', 'user', 0),
(12, 'usuario3', 'usuario3', 54, 'usuario3@user.com', '123', 'user', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_evento`
--

CREATE TABLE `usuario_evento` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `semana` varchar(255) NOT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `dia` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario_evento`
--

INSERT INTO `usuario_evento` (`id`, `id_user`, `id_event`, `semana`, `hora`, `fecha`, `dia`) VALUES
(13, 10, 5, '1', '2', NULL, 'Martes'),
(14, 10, 6, '1', '1', NULL, 'Miércoles'),
(15, 10, 5, '2', '1', NULL, 'Lunes'),
(16, 11, 5, '2', '1', NULL, 'Lunes'),
(17, 11, 5, '1', '1', NULL, 'Lunes'),
(18, 11, 6, '1', '1', NULL, 'Miércoles'),
(19, 12, 5, '1', '1', NULL, 'Lunes'),
(20, 12, 6, '1', '1', NULL, 'Lunes'),
(21, 12, 5, '4', '1', NULL, 'Lunes'),
(22, 12, 5, '3', '1', NULL, 'Lunes'),
(23, 12, 6, '4', '1', NULL, 'Lunes'),
(24, 9, 5, '1', '1', NULL, 'Lunes');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_evento`
--
ALTER TABLE `usuario_evento`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario_evento`
--
ALTER TABLE `usuario_evento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
