-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 17:35:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parque_diversiones`
--
CREATE DATABASE IF NOT EXISTS `parque_diversiones` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `parque_diversiones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `Id_comida` int(30) NOT NULL,
  `Comida` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comida`
--

INSERT INTO `comida` (`Id_comida`, `Comida`) VALUES
(1, 'Hamburguesa'),
(2, 'Pizza'),
(3, 'Perro Caliente'),
(4, 'Helado'),
(5, 'Palomitas de maiz'),
(6, 'Pincho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `Id_ingreso` int(50) NOT NULL,
  `Documento` int(12) NOT NULL,
  `Nombre` varchar(25) NOT NULL,
  `Apellido` varchar(25) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `Telefono` bigint(11) NOT NULL,
  `Fecha_ingreso` date NOT NULL,
  `Id_juego` int(30) NOT NULL,
  `Id_comida` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`Id_ingreso`, `Documento`, `Nombre`, `Apellido`, `Correo`, `Telefono`, `Fecha_ingreso`, `Id_juego`, `Id_comida`) VALUES
(1, 123123123, 'DADASD', 'ASDASDA', 'asdasd@sadas.asd', 2147483647, '2024-03-07', 2, 1),
(2, 111111, 'OHANY', 'GARCIA', 'ohany@gmail.com', 1111111111, '2024-03-01', 1, 1),
(3, 2222222, 'CAROLINA', 'RANGEL', 'carolina@gmail.com', 3104042907, '2024-03-05', 2, 3),
(4, 3333333, 'ANDRES', 'INIESTA', 'andres@gmail.com', 94037265849, '2024-03-06', 6, 2),
(5, 444444, 'ALVARADO', 'MONTES', 'alvarado@gmail.com', 1234567890, '2024-03-22', 2, 3),
(6, 34232522, 'DANIEL', 'RAMIREZ', 'daniel@gmail.com', 3152668498, '2024-03-30', 7, 4),
(7, 3463463, 'JHON', 'RIOS', 'jhon@gmail.com', 3213668448, '2024-04-12', 3, 4),
(8, 5439343, 'LAURA', 'JIMENEZ', 'jime@gmail.com', 3157642132, '2024-05-23', 10, 2),
(9, 2147483647, 'SAUL', 'RUIZ', 'hernan@gmail.com', 93852392321, '2024-05-16', 4, 3),
(10, 49534936, 'TATIANA', 'ORTIZ', 'tati@gmail.com', 2147483647, '2024-03-02', 7, 6),
(11, 2147483647, 'LUISA', 'ALAVAREZ', 'luisa@gmail.com', 9465827463, '2024-08-01', 1, 1),
(12, 569439283, 'LORENA', 'MOTTA', 'lore@gmail.com', 1254327432, '2024-03-23', 3, 3),
(13, 354387, 'FREDY', 'PARRA', 'fredy@gmail.com', 867985345, '2024-03-22', 3, 3),
(14, 78388534, 'ANDERSON', 'GARZON', 'ander@gmail.com', 82056372849, '2024-03-15', 7, 1),
(15, 27439534, 'MAURICIO', 'FUENTES', 'maur@gmail.com', 2147483647, '2024-03-13', 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juego`
--

CREATE TABLE `juego` (
  `Id_juego` int(30) NOT NULL,
  `Juego` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juego`
--

INSERT INTO `juego` (`Id_juego`, `Juego`) VALUES
(1, 'Canicas'),
(2, 'Tiro al blanco'),
(3, 'Loteria'),
(4, 'Tiro a la botella'),
(5, 'Futbolito'),
(6, 'Chute al blanco'),
(7, 'Lanzamiento de aros'),
(8, 'Dardos'),
(9, 'Pesca'),
(10, 'Caña de botella');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`Id_comida`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`Id_ingreso`);

--
-- Indices de la tabla `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`Id_juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `Id_comida` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `Id_ingreso` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `juego`
--
ALTER TABLE `juego`
  MODIFY `Id_juego` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
