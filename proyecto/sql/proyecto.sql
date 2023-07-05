-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 17:15:22
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gas`
--

CREATE TABLE `gas` (
  `cuantas posee` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `requiere bombona social` int(11) NOT NULL,
  `posee codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `usuario` varchar(30) NOT NULL,
  `contra` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`usuario`, `contra`) VALUES
('admin', '123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro general`
--

CREATE TABLE `registro general` (
  `cedula` int(40) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `fecha de nacimiento` date NOT NULL,
  `estado civil` varchar(40) NOT NULL,
  `telefono` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salud`
--

CREATE TABLE `salud` (
  `medicamentos requeridos` varchar(30) NOT NULL,
  `patologias que sufre` varchar(25) NOT NULL,
  `embarazadas` varchar(25) NOT NULL,
  `discapacidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `cedula` int(30) NOT NULL,
  `tipo de vivienda` varchar(30) NOT NULL,
  `condicion` varchar(25) NOT NULL,
  `tipo de techo` varchar(25) NOT NULL,
  `tipo de piso` varchar(20) NOT NULL,
  `agua` varchar(30) NOT NULL,
  `luz` varchar(30) NOT NULL,
  `aguas negras` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro general`
--
ALTER TABLE `registro general`
  ADD PRIMARY KEY (`cedula`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
