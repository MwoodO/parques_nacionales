-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2021 a las 07:06:21
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parquesnacionales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`usuario`, `contrasena`) VALUES
('fgonzalez', '1234fgonz'),
('jperez', '1234perez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardaparques`
--

CREATE TABLE `guardaparques` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apaterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amaterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(13) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `guardaparques`
--

INSERT INTO `guardaparques` (`usuario`, `contrasena`, `rut`, `nombre`, `apaterno`, `amaterno`, `telefono`) VALUES
('eruiz2021', 'eruiz2021', '19471552-6', 'Edmundo', 'Ruiz', 'Galvarino', '+56970257884');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parquess`
--

CREATE TABLE `parquess` (
  `idparque` int(10) NOT NULL,
  `nparque` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `aforomax` int(11) NOT NULL,
  `comuna` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `accesos` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `parquess`
--

INSERT INTO `parquess` (`idparque`, `nparque`, `aforomax`, `comuna`, `region`, `accesos`) VALUES
(1, 'Parque nacional Lauca', 250, 'Putre', 'Arica y Parinacota', 1),
(9, 'Parque Nacional Conguillio', 200, 'Curacautin', 'La Araucania', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visitantes`
--

CREATE TABLE `visitantes` (
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apaterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amaterno` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `visitantes`
--

INSERT INTO `visitantes` (`correo`, `contrasena`, `rut`, `nombre`, `apaterno`, `amaterno`, `telefono`) VALUES
('holanda@gmail.com', '84003042', '12555845-5', 'homero', 'simpson', 'simpson', '+56985123657');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `guardaparques`
--
ALTER TABLE `guardaparques`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `parquess`
--
ALTER TABLE `parquess`
  ADD PRIMARY KEY (`idparque`);

--
-- Indices de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`correo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
