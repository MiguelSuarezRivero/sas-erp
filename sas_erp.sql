-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 08-10-2019 a las 14:09:34
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sas_erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuestionarios`
--

CREATE TABLE `cuestionarios` (
  `hotel` varchar(8) NOT NULL,
  `recomendaria` int(1) NOT NULL,
  `acompanamiento` int(1) NOT NULL,
  `motivo` int(1) NOT NULL,
  `edad` int(2) NOT NULL,
  `entrada` date NOT NULL,
  `duracion` int(1) NOT NULL,
  `estado_hotel` int(1) NOT NULL,
  `limpieza_hotel` int(1) NOT NULL,
  `familia_hotel` int(1) NOT NULL,
  `minus_hotel` int(1) NOT NULL,
  `variedad_comidas` int(1) NOT NULL,
  `calidad_comidas` int(1) NOT NULL,
  `decoracion` int(1) NOT NULL,
  `limpieza_bar` int(1) NOT NULL,
  `animacion` int(1) NOT NULL,
  `piscinas` int(1) NOT NULL,
  `playa` int(1) NOT NULL,
  `guarderia` int(1) NOT NULL,
  `limpieza_hab` int(1) NOT NULL,
  `tam_hab` int(1) NOT NULL,
  `equipamiento` int(1) NOT NULL,
  `tam_ban` int(1) NOT NULL,
  `tiendas` int(1) NOT NULL,
  `transporte` int(1) NOT NULL,
  `bares_zona` int(1) NOT NULL,
  `oferta_tiempo` int(1) NOT NULL,
  `dis_playa` int(1) NOT NULL,
  `amabilidad` int(1) NOT NULL,
  `idiomas` int(1) NOT NULL,
  `recepcion` int(1) NOT NULL,
  `reclamaciones` int(1) NOT NULL,
  `comentarios` varchar(1000) NOT NULL,
  `dormitorios` int(1) NOT NULL,
  `habitacion` int(1) NOT NULL,
  `catalogo` int(1) NOT NULL,
  `estrellas` int(1) NOT NULL,
  `calidad_precio` int(1) NOT NULL,
  `operador` int(2) NOT NULL,
  `num_habitacion` varchar(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `calle` varchar(50) NOT NULL,
  `codigo` varchar(10) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usuario_grabado` varchar(30) NOT NULL,
  `fecha_grabado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`name`, `pass`, `status`) VALUES
('A', 'A', 0),
('B', 'B', 1),
('C', 'C', 2),
('Maria Hessels', 'maria20', 1),
('Miguel Suarez', '12345', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuestionarios`
--
ALTER TABLE `cuestionarios`
  ADD UNIQUE KEY `fecha_grabado` (`fecha_grabado`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
