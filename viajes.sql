-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2021 a las 12:04:54
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `viajes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idpasaporte` int(11) NOT NULL,
  `nombres` varchar(15) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `edad` int(2) NOT NULL,
  `Fnacimiento` date NOT NULL,
  `nacionalidad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idpasaporte`, `nombres`, `apellidos`, `edad`, `Fnacimiento`, `nacionalidad`) VALUES
(2369998, 'william jose', 'aguilar barat', 46, '1994-06-03', 'venezuela'),
(74529800, 'juan', 'antonio perez', 40, '1980-05-20', 'españa'),
(78888410, 'daniela paola', 'rodriguez', 26, '1994-08-03', 'venezuela'),
(84752109, 'daniel pedro', 'alvarado romero', 15, '2005-12-12', 'peru'),
(190247153, 'Willy Ernesto', 'Aguilar Herrera', 20, '2000-12-21', 'venezuela'),
(469870231, 'javier pastore', 'lenglet', 34, '1996-08-12', 'español'),
(901247521, 'Dilainy Gabriel', 'Pirela Araque', 22, '1999-03-24', 'Australia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idpasaporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idpasaporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=901247522;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
