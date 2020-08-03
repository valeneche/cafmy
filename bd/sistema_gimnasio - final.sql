-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2020 a las 22:42:55
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_gimnasio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `tipo_id` varchar(20) NOT NULL,
  `n_id` int(12) NOT NULL,
  `apellido` varchar(15) DEFAULT NULL,
  `nombre` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `cargo` varchar(15) DEFAULT NULL,
  `id_cargo` int(2) NOT NULL,
  `telefono` int(12) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `estaActivo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id_personal`, `tipo_id`, `n_id`, `apellido`, `nombre`, `sexo`, `nacimiento`, `cargo`, `id_cargo`, `telefono`, `direccion`, `correo`, `usuario`, `contrasena`, `estaActivo`) VALUES
(13, 'C.C. - Cedula de ciu', 987687, 'ghgjhg', 'hjghjghj', 'Masculino', '2020-01-01', 'Administrador', 0, 23242, 'caliente', 'cale@gmail.com', '1234', 'juan123', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `cargo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `cargo`) VALUES
(1, 'Administrador'),
(2, 'Entrenador'),
(3, 'Deportologo'),
(4, 'Nutricionista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id_servicio` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `n_clases` int(5) DEFAULT NULL,
  `duracion` time DEFAULT NULL,
  `horario` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_us` int(10) NOT NULL,
  `tipo_id` varchar(15) NOT NULL,
  `n_id` int(12) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `nacimiento` date NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` bigint(12) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `estaActivo` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_us`, `tipo_id`, `n_id`, `apellido`, `nombre`, `sexo`, `nacimiento`, `direccion`, `telefono`, `correo`, `usuario`, `contrasena`, `estaActivo`) VALUES
(2, 'C.E. - Cedula d', 18373802, 'Toro', 'Mateo', 'Masculino', '2003-07-17', 'Parqueadero', 307382929, '', 'mateo12', '728893', 0),
(9, 'C.C. - Cedula d', 4567890, 'sdfghjk', 'dfghjkl', 'Masculino', '2021-01-01', 'fghjkl', 567890, 'dfghjklÃ±', 'fghjkl90', '456789q', 1),
(11, 'C.C. - Cedula d', 1, 'a', 'b', 'Masculino', '2020-01-02', 'c', 2, 'd', 'e', 'f', 1),
(12, 'C.C. - Cedula d', 23, 'a', 'b', 'Femenino', '2017-11-01', 'ff', 333, 'sdfd', 'sd', 'sd', 1),
(13, 'C.C. - Cedula d', 1130704003, 'juan diego', 'guzman chalarca', 'Masculino', '2004-02-04', 'calle ', 2147483647, 'juandiguzman06@gmail.com', 'juan123', 'juand123', 1),
(14, 'Cedula de ciuda', 234542, 'echevrri', 'valentina', 'Femenino', '2014-11-01', 'calle 49', 123464567, 'valentinaeo12@gmail.com', 'valen123', '12345678', 1),
(15, 'Cedula de ciuda', 234542, 'echevrri', 'valentina', 'Femenino', '2014-11-01', 'calle 49', 123464567, 'valentinaeo12@gmail.com', 'valen123', '12345678', 1),
(16, 'C.C. - Cedula d', 4356789, 'Nadie', 'No nada', 'Masculino', '2001-05-12', 'calle ', 3214584890, 'valentinavadg45@', 'nada123', '12345678', 1),
(17, 'C.C. - Cedula d', 1234567, 'Javier', 'Fernandez de castro', 'Masculino', '1970-08-09', 'calle ', 4475337, 'javier@gmail.com', 'javier123', '12345678', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_us`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_us` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
