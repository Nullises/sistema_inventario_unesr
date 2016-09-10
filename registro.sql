-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-05-2016 a las 03:15:25
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consumibles`
--

CREATE TABLE `consumibles` (
  `id_consumibles` int(11) NOT NULL,
  `articulo` varchar(50) NOT NULL,
  `modelo_consumible` varchar(50) NOT NULL,
  `proveedor_consumible` varchar(50) NOT NULL,
  `codigo_consumible` int(4) NOT NULL,
  `fecha_consumible` date NOT NULL,
  `cant_consumible` int(11) NOT NULL,
  `precio_unit_consumible` float NOT NULL,
  `total_consumible` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `id_equipos` int(11) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `modelo_equipo` varchar(50) NOT NULL,
  `marca_equipo` varchar(50) NOT NULL,
  `proveedor_equipo` varchar(50) NOT NULL,
  `fecha_equipo` date NOT NULL,
  `cant_equipo` int(11) NOT NULL,
  `precio_unit_equipo` float NOT NULL,
  `total_equipo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partes`
--

CREATE TABLE `partes` (
  `id_partes` int(11) NOT NULL,
  `periferico` varchar(50) NOT NULL,
  `modelo_parte` varchar(50) NOT NULL,
  `marca_parte` varchar(50) NOT NULL,
  `proveedor_parte` varchar(50) NOT NULL,
  `fecha_parte` date NOT NULL,
  `cant_parte` int(11) NOT NULL,
  `precio_unit_parte` float NOT NULL,
  `total_parte` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `contrasena` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contrasena`) VALUES
(17, 'Texanico', 'texanico@gmail.com', 'ef8ec2d17787acb29474ef1e778e73f2'),
(19, 'Morella Swanson', 'morella@gmail.com', '3f303dfddb0406c87fef642f79e32452'),
(27, 'Hanlet Vargas', 'hanletvargas@hotmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(28, 'Cosme', 'cosme@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(29, 'Raul', 'raul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(30, 'Rito', 'rito@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(31, 'Jeimy Lovera', 'jeimy@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(32, 'Daniel Naider', 'barrabita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(33, 'Sorita', 'sorita@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(34, 'Mimi', 'mimi@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(36, 'Gabriel', 'gabriel@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(45, 'oso', 'oso@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(51, 'Norm', 'norman@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(52, 'Alberto', 'alberto@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(53, 'Keila Samaca', 'keila_csm@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(54, 'MonicaSandoval', 'monica@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consumibles`
--
ALTER TABLE `consumibles`
  ADD PRIMARY KEY (`id_consumibles`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`id_equipos`);

--
-- Indices de la tabla `partes`
--
ALTER TABLE `partes`
  ADD PRIMARY KEY (`id_partes`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consumibles`
--
ALTER TABLE `consumibles`
  MODIFY `id_consumibles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `id_equipos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `partes`
--
ALTER TABLE `partes`
  MODIFY `id_partes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
