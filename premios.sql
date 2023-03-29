-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 29-03-2023 a las 12:54:42
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `premios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premios`
--

CREATE TABLE `premios` (
  `id` int NOT NULL,
  `premio` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `importe` decimal(9,2) NOT NULL,
  `año` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `premios`
--

INSERT INTO `premios` (`id`, `premio`, `importe`, `año`) VALUES
(6, 'Premio 6', 3000.00, 1999),
(6, 'Premio 6', 3000.00, 2022),
(6, 'Premio 6', 3000.00, 2023),
(11, 'Premio 11', 1000.00, 1999),
(11, 'Premio 11', 1000.00, 2022),
(11, 'Premio 11', 1000.00, 2023),
(12, 'Premio 12', 4000.00, 1999),
(12, 'Premio 12', 4000.00, 2022),
(12, 'Premio 12', 4000.00, 2023),
(14, 'Premio 14', 2500.00, 1999),
(14, 'Premio 14', 2500.00, 2022),
(14, 'Premio 14', 2500.00, 2023),
(17, 'Premio 17', 3000.00, 1999),
(17, 'Premio 17', 3000.00, 2022),
(17, 'Premio 17', 3000.00, 2023),
(18, 'Premio 18', 1000.00, 1999),
(18, 'Premio 18', 1000.00, 2022),
(18, 'Premio 18', 1000.00, 2023),
(22, 'Premio 22', 4000.00, 1999),
(22, 'Premio 22', 4000.00, 2022),
(22, 'Premio 22', 4000.00, 2023),
(25, 'Premio 25', 1000.00, 1999),
(25, 'Premio 25', 1000.00, 2022),
(25, 'Premio 25', 1000.00, 2023),
(34, 'Premio 34', 2500.00, 1999),
(34, 'Premio 34', 2500.00, 2022),
(34, 'Premio 34', 2500.00, 2023),
(35, 'Premio 35', 4000.00, 1999),
(35, 'Premio 35', 4000.00, 2022),
(35, 'Premio 35', 4000.00, 2023),
(36, 'Premio 36', 1000.00, 1999),
(36, 'Premio 36', 1000.00, 2022),
(36, 'Premio 36', 1000.00, 2023),
(37, 'Premio 37', 2500.00, 1999),
(37, 'Premio 37', 2500.00, 2022),
(37, 'Premio 37', 2500.00, 2023),
(39, 'Premio 39', 2500.00, 1999),
(39, 'Premio 39', 2500.00, 2022),
(39, 'Premio 39', 2500.00, 2023),
(42, 'Premio 42', 2500.00, 1999),
(42, 'Premio 42', 2500.00, 2022),
(42, 'Premio 42', 2500.00, 2023),
(47, 'Premio 47', 4000.00, 1999),
(47, 'Premio 47', 4000.00, 2022),
(47, 'Premio 47', 4000.00, 2023),
(49, 'Premio 49', 1000.00, 1999),
(49, 'Premio 49', 1000.00, 2022),
(49, 'Premio 49', 1000.00, 2023),
(52, 'Premio 52', 4000.00, 1999),
(52, 'Premio 52', 4000.00, 2022),
(52, 'Premio 52', 4000.00, 2023),
(53, 'Premio 53', 2500.00, 1999),
(53, 'Premio 53', 2500.00, 2022),
(53, 'Premio 53', 2500.00, 2023),
(55, 'Premio 55', 1000.00, 1999),
(55, 'Premio 55', 1000.00, 2022),
(55, 'Premio 55', 1000.00, 2023),
(58, 'Premio 58', 4000.00, 1999),
(58, 'Premio 58', 4000.00, 2022),
(58, 'Premio 58', 4000.00, 2023),
(60, 'Premio 60', 4000.00, 1999),
(60, 'Premio 60', 4000.00, 2022),
(60, 'Premio 60', 4000.00, 2023),
(62, 'Premio 62', 3000.00, 1999),
(62, 'Premio 62', 3000.00, 2022),
(62, 'Premio 62', 3000.00, 2023),
(66, 'Premio 66', 3000.00, 1999),
(66, 'Premio 66', 3000.00, 2022),
(66, 'Premio 66', 3000.00, 2023),
(67, 'Premio 67', 3000.00, 1999),
(67, 'Premio 67', 3000.00, 2022),
(67, 'Premio 67', 3000.00, 2023);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `premios`
--
ALTER TABLE `premios`
  ADD UNIQUE KEY `id` (`id`,`año`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
