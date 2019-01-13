-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 16-03-2018 a las 15:16:56
-- Versión del servidor: 5.7.17-log
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `nuevavictoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_familiar`
--

CREATE TABLE `grupo_familiar` (
  `cedula_miembro` varchar(50) NOT NULL,
  `nacionalidad_miembro` varchar(1) NOT NULL,
  `nombres_miembro` varchar(100) NOT NULL,
  `apellidos_miembro` varchar(100) NOT NULL,
  `fecha_nacimiento_miembro` date NOT NULL,
  `sexo_miembro` varchar(50) NOT NULL,
  `edad_miembro` varchar(50) NOT NULL,
  `telefono_miembro` varchar(100) NOT NULL,
  `correo_miembro` varchar(100) NOT NULL,
  `serial_miembro` varchar(100) NOT NULL,
  `codigo_miembro` varchar(100) NOT NULL,
  `estado_civil_miembro` varchar(50) NOT NULL,
  `parentesco_miembro` varchar(50) NOT NULL,
  `estudia_miembro` varchar(50) NOT NULL,
  `grado_instruccion_miembro` varchar(100) NOT NULL,
  `trabaja_miembro` varchar(50) NOT NULL,
  `profesion_oficio_miembro` varchar(100) NOT NULL,
  `lugar_trabajo_miembro` varchar(100) NOT NULL,
  `enfermedad_miembro` varchar(100) NOT NULL,
  `discapacidad_miembro` varchar(100) NOT NULL,
  `vota_donde_miembro` varchar(100) NOT NULL,
  `cedulaj` varchar(100) NOT NULL,
  `ingreso_mensual_m` varchar(100) NOT NULL,
  `institucion_m` varchar(100) NOT NULL,
  `medicamento_m` varchar(100) NOT NULL,
  `asistido_m` varchar(100) NOT NULL,
  `embarazada_m` varchar(100) NOT NULL,
  `control_m` varchar(100) NOT NULL,
  `vive_casa_m` varchar(100) NOT NULL,
  `numero_casa_m` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes_familia`
--

CREATE TABLE `jefes_familia` (
  `cedula` varchar(100) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `sexo` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `vive_casa` varchar(50) NOT NULL,
  `profesion_oficio` varchar(100) NOT NULL,
  `trabaja` varchar(50) NOT NULL,
  `lugar_trabajo` varchar(100) NOT NULL,
  `ingreso_mensual` varchar(100) NOT NULL,
  `grado_instruccion` varchar(50) NOT NULL,
  `estudia` varchar(50) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `vota_donde` varchar(100) NOT NULL,
  `enfermedad` varchar(100) NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `discapacitado` varchar(100) NOT NULL,
  `asistido` varchar(100) NOT NULL,
  `embarazada` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL DEFAULT '',
  `control` varchar(50) NOT NULL,
  `serial_carnet` varchar(50) NOT NULL DEFAULT '',
  `codigo_carnet` varchar(50) NOT NULL,
  `numero_casaj` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(50) NOT NULL,
  `user` varchar(200) NOT NULL,
  `passadmin` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `user`, `passadmin`, `pass`) VALUES
(42, 'invitado', 'e1ff6d901f7d7ffe9c24caca28cd621a995d832b', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1'),
(44, 'root', '63982e54a7aeb0d89910475ba6dbd3ca6dd4e5a1', '67a74306b06d0c01624fe0d0249a570f4d093747');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_geografica`
--

CREATE TABLE `ubicacion_geografica` (
  `numero_casa` int(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `parroquia` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `numero_familias` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  ADD PRIMARY KEY (`cedula_miembro`),
  ADD KEY `cedulaj` (`cedulaj`);

--
-- Indices de la tabla `jefes_familia`
--
ALTER TABLE `jefes_familia`
  ADD PRIMARY KEY (`cedula`),
  ADD KEY `jefes_familia_ibfk_1` (`numero_casaj`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion_geografica`
--
ALTER TABLE `ubicacion_geografica`
  ADD PRIMARY KEY (`numero_casa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupo_familiar`
--
ALTER TABLE `grupo_familiar`
  ADD CONSTRAINT `grupo_familiar_ibfk_1` FOREIGN KEY (`cedulaj`) REFERENCES `jefes_familia` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jefes_familia`
--
ALTER TABLE `jefes_familia`
  ADD CONSTRAINT `jefes_familia_ibfk_1` FOREIGN KEY (`numero_casaj`) REFERENCES `ubicacion_geografica` (`numero_casa`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
