-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-10-2021 a las 15:33:53
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conAptos`
--
CREATE DATABASE IF NOT EXISTS `conAptos` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `conAptos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Acabados`
--

CREATE TABLE `Acabados` (
  `id` int(11) NOT NULL,
  `numApto` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `resane` decimal(60,0) DEFAULT NULL,
  `ventanas` decimal(60,0) DEFAULT NULL,
  `impermeabilizacion` decimal(60,0) DEFAULT NULL,
  `repello` decimal(60,0) DEFAULT NULL,
  `enchape` decimal(60,0) DEFAULT NULL,
  `estuco` decimal(60,0) DEFAULT NULL,
  `pintura` decimal(60,0) DEFAULT NULL,
  `pisoFlotante` decimal(60,0) DEFAULT NULL,
  `Barrederas` decimal(60,0) DEFAULT NULL,
  `puertas` decimal(60,0) DEFAULT NULL,
  `aseo` decimal(60,0) DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `Acabados`
--

INSERT INTO `Acabados` (`id`, `numApto`, `resane`, `ventanas`, `impermeabilizacion`, `repello`, `enchape`, `estuco`, `pintura`, `pisoFlotante`, `Barrederas`, `puertas`, `aseo`, `status`) VALUES
(1, '101', '5', '20', '20', '30', '30', '30', '30', '30', '30', '30', '30', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Aptos`
--

CREATE TABLE `Aptos` (
  `id` int(11) NOT NULL,
  `numApto` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Porcentaje` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `Observaciones` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `Aptos`
--

INSERT INTO `Aptos` (`id`, `numApto`, `Estado`, `Porcentaje`, `Observaciones`, `status`) VALUES
(1, '101', 'pendiente', '50%', 'se encuentra sin ventanas', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Acabados`
--
ALTER TABLE `Acabados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Aptos`
--
ALTER TABLE `Aptos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Acabados`
--
ALTER TABLE `Acabados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `Aptos`
--
ALTER TABLE `Aptos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
