-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2020 a las 22:40:46
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reserva`
--
CREATE DATABASE IF NOT EXISTS `reserva` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reserva`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL,
  `nomCompleto` text NOT NULL,
  `email` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `sexo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `nomCompleto`, `email`, `telefono`, `sexo`) VALUES
(17, 'Daiana Elizabeth Alvarez Ayllón', 'elizabethalvarez@gmail.com', 123456789, ''),
(18, 'Christine D’Clario', 'christine_43@gmail.com', 1123458699, 'Femenino'),
(19, 'Harold Velazquez', 'harold_velazquez52@gmail.com', 1136548744, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarse`
--

CREATE TABLE `registrarse` (
  `id` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `correo` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registrarse`
--

INSERT INTO `registrarse` (`id`, `nombre`, `correo`, `pwd`) VALUES
(65, 'Harold Velazquez', 'harold_velazquez52@gmail.com', 'harold123456'),
(66, 'Daiana Alvarez', 'daiana_32@gmail.com', '123456'),
(67, 'Christine D’Clario', 'christine_43@gmail.com', 'Christine123456');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva1`
--

CREATE TABLE `reserva1` (
  `id` int(11) NOT NULL,
  `lugar` text NOT NULL,
  `pais` text NOT NULL,
  `fechaE` datetime NOT NULL,
  `fechaS` datetime NOT NULL,
  `adultos` int(11) NOT NULL,
  `cantNiño` text NOT NULL,
  `edad` text NOT NULL,
  `habitacion` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `apellido` text NOT NULL,
  `email` text NOT NULL,
  `telefono` int(11) NOT NULL,
  `tituloTarjeta` text NOT NULL,
  `tipoTarjeta` text NOT NULL,
  `numTarjeta` int(11) NOT NULL,
  `cvc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reserva1`
--

INSERT INTO `reserva1` (`id`, `lugar`, `pais`, `fechaE`, `fechaS`, `adultos`, `cantNiño`, `edad`, `habitacion`, `nombre`, `apellido`, `email`, `telefono`, `tituloTarjeta`, `tipoTarjeta`, `numTarjeta`, `cvc`) VALUES
(24, 'Dubai', 'Emiratos Árabes Unidos', '2021-01-04 10:30:00', '2021-01-11 06:45:00', 2, '---', '---', 1, 'Daiana', 'Alvarez', 'daiana_32@gmail.com', 1132526833, 'Daiana Alvarez', 'Tarjeta Visa', 123456789, 789),
(25, 'Rosario', 'Argentina', '2020-11-02 07:45:00', '2020-11-09 18:50:00', 2, '1', '5', 2, 'Christine', 'D’Clario', 'christine_43@gmail.com', 1123458699, 'Christine D’Clario', 'Tarjeta Visa', 321654987, 987),
(26, 'Tel Aviv', 'Israel', '2020-11-16 09:00:00', '2020-11-23 20:00:00', 1, '---', '---', 1, 'Harold', 'Velazquez', 'harold_velazquez52@gmail.com', 1136548744, 'Harold Velazquez', 'Tarjeta Visa', 456789123, 123);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `registrarse`
--
ALTER TABLE `registrarse`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reserva1`
--
ALTER TABLE `reserva1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `registrarse`
--
ALTER TABLE `registrarse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT de la tabla `reserva1`
--
ALTER TABLE `reserva1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
