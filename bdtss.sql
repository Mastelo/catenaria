-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2019 a las 05:02:14
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdtss`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estaciones`
--

CREATE TABLE `estaciones` (
  `IDESTACION` int(11) NOT NULL,
  `IDLINEA` int(11) DEFAULT NULL,
  `NOMBRE` char(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estaciones`
--

INSERT INTO `estaciones` (`IDESTACION`, `IDLINEA`, `NOMBRE`) VALUES
(1, 1, 'central'),
(2, 1, 'aroma'),
(3, 1, 'aeropuerto'),
(4, 1, 'villa coronilla'),
(5, 1, 'elfec');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea`
--

CREATE TABLE `linea` (
  `IDLINEA` int(11) NOT NULL,
  `COLOR` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `linea`
--

INSERT INTO `linea` (`IDLINEA`, `COLOR`) VALUES
(1, 'rojo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultado`
--

CREATE TABLE `resultado` (
  `IDRESULTADO` int(11) NOT NULL,
  `IDESTACION` int(11) DEFAULT NULL,
  `ESTUDIANTES` int(11) DEFAULT NULL,
  `COMERCIANTES` int(11) DEFAULT NULL,
  `TRABAJADORES` int(11) DEFAULT NULL,
  `COMUNES` int(11) NOT NULL,
  `BAJAN` int(11) DEFAULT NULL,
  `SUBEN` int(11) NOT NULL,
  `HORALLEGADA` datetime DEFAULT NULL,
  `HORASALIDA` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD PRIMARY KEY (`IDESTACION`),
  ADD KEY `FK_RELATIONSHIP_1` (`IDLINEA`);

--
-- Indices de la tabla `linea`
--
ALTER TABLE `linea`
  ADD PRIMARY KEY (`IDLINEA`);

--
-- Indices de la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`IDRESULTADO`),
  ADD KEY `FK_RELATIONSHIP_2` (`IDESTACION`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estaciones`
--
ALTER TABLE `estaciones`
  MODIFY `IDESTACION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `linea`
--
ALTER TABLE `linea`
  MODIFY `IDLINEA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `resultado`
--
ALTER TABLE `resultado`
  MODIFY `IDRESULTADO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=256;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `estaciones`
--
ALTER TABLE `estaciones`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`IDLINEA`) REFERENCES `linea` (`IDLINEA`);

--
-- Filtros para la tabla `resultado`
--
ALTER TABLE `resultado`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`IDESTACION`) REFERENCES `estaciones` (`IDESTACION`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
