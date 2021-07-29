-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-07-2021 a las 01:48:35
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
-- Estructura de tabla para la tabla `agendavisita`
--

CREATE TABLE `agendavisita` (
  `correo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parque` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `acompanantes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `agendavisita`
--

INSERT INTO `agendavisita` (`correo`, `parque`, `fecha`, `acompanantes`, `codigo`) VALUES
('holanda@gmail.com', 9, '2021-07-30', '3', 1),
('se@gmail.com', 9, '2021-07-31', '7', 6),
('holanda@gmail.com', 9, '2021-07-18', '6', 11),
('holanda@gmail.com', 2, '2021-07-31', '4', 13);

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
('', '', '', '', '', '', ''),
('eruiz2021', 'eruiz2021', '19471552-6', 'Edmundo', 'Ruiz', 'Galvarino', '+56970257884'),
('fgonzalez', '84003042', '19292880-k', 'juan', 'perez', 'perez', '+56978443042'),
('gohan2021', 'dragonballz', '888888-0', 'gohan', 'son', 'son', '55515119118'),
('seba', '84003422', '19292880-2', 'Sebastian', 'Troncoso', 'Troncoso', '+598995329583'),
('seba555', '555seba', '19292880-8', 'Sebastian', 'Troncoso', 'Troncoso', '995329583');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardavisita`
--

CREATE TABLE `guardavisita` (
  `codigoagenda` int(11) NOT NULL,
  `acompañantes` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `horaentrada` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `guardavisita`
--

INSERT INTO `guardavisita` (`codigoagenda`, `acompañantes`, `horaentrada`) VALUES
(1, '5', '13:00:00');

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
(1, 'Parque Nacional Volcan Isluga', 200, 'colchane', 'Tarapaca', 1),
(2, 'Parque Nacional Morro Moreno', 200, 'Antofagasta', 'Antofagasta', 1),
(3, 'Parque Nacional Pan de Azucar', 250, 'Taltal', 'Atacama', 1),
(4, 'Parque Nacional Bosque Fray Jorge', 200, 'Ovalle', 'Coquimbo', 1),
(5, 'Parque Nacional La Campana', 200, 'Olmue', 'Valparaiso', 1),
(6, 'Parque Nacional Las Palmas de Cocalan', 250, 'Las cabras', 'Libertador General Bernardo OHiggins', 1),
(7, 'Parque Nacional Las siete tazas', 250, 'Molina', 'Maule', 1),
(8, 'Parque Nacional Laguna del Laja', 200, 'Antuco', 'Bio-Bio', 1),
(9, 'Parque Nacional Conguillio', 200, 'Curacautin', 'La Araucania', 1),
(10, 'Parque nacional Pumalin', 200, 'Chaiten', 'Los Lagos', 1),
(11, 'Parque Nacional Cerro Castillo', 250, 'Coyhaique', 'Aysen del General Carlos Ibanez del Campo', 1),
(12, 'Parque Nacional Torres del Paine', 250, 'Torres del paine', ' Magallanes y Antartica Chilena', 1),
(13, 'Parque Nacional Rio Clarillo', 250, 'pirque', 'Metropolitana de Santiago', 1),
(14, 'Parque Nacional Alerce Costero', 250, 'La union', 'Los Rios', 1),
(15, 'Parque nacional Lauca', 250, 'Putre', 'Arica y Parinacota', 1),
(16, 'Reserva Nacional Nuble\r\n', 250, 'Pinto', 'Nuble', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnoguarda`
--

CREATE TABLE `turnoguarda` (
  `usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `parque` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `horainicio` time NOT NULL,
  `horafinal` time NOT NULL,
  `codigo` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `turnoguarda`
--

INSERT INTO `turnoguarda` (`usuario`, `parque`, `fecha`, `horainicio`, `horafinal`, `codigo`) VALUES
('eruiz2021', 1, '2021-07-30', '09:00:00', '17:30:00', 1);

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
('', '', '', '', '', '', ''),
('holanda@gmail.com', '84003042', '12555845-5', 'homero', 'simpson', 'simpson', '+56985123657'),
('se@gmail.com', '84003042', '19292888-k', 'ttt', 'tt', 'tt', '+56978003042');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `agendavisita`
--
ALTER TABLE `agendavisita`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `correo` (`correo`),
  ADD KEY `parque` (`parque`);

--
-- Indices de la tabla `guardaparques`
--
ALTER TABLE `guardaparques`
  ADD PRIMARY KEY (`usuario`);

--
-- Indices de la tabla `guardavisita`
--
ALTER TABLE `guardavisita`
  ADD KEY `codigoagenda` (`codigoagenda`);

--
-- Indices de la tabla `parquess`
--
ALTER TABLE `parquess`
  ADD PRIMARY KEY (`idparque`);

--
-- Indices de la tabla `turnoguarda`
--
ALTER TABLE `turnoguarda`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `parque` (`parque`);

--
-- Indices de la tabla `visitantes`
--
ALTER TABLE `visitantes`
  ADD PRIMARY KEY (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agendavisita`
--
ALTER TABLE `agendavisita`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `turnoguarda`
--
ALTER TABLE `turnoguarda`
  MODIFY `codigo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agendavisita`
--
ALTER TABLE `agendavisita`
  ADD CONSTRAINT `agendavisita_ibfk_1` FOREIGN KEY (`parque`) REFERENCES `parquess` (`idparque`),
  ADD CONSTRAINT `agendavisita_ibfk_2` FOREIGN KEY (`correo`) REFERENCES `visitantes` (`correo`);

--
-- Filtros para la tabla `guardavisita`
--
ALTER TABLE `guardavisita`
  ADD CONSTRAINT `guardavisita_ibfk_1` FOREIGN KEY (`codigoagenda`) REFERENCES `agendavisita` (`codigo`);

--
-- Filtros para la tabla `turnoguarda`
--
ALTER TABLE `turnoguarda`
  ADD CONSTRAINT `turnoguarda_ibfk_1` FOREIGN KEY (`parque`) REFERENCES `parquess` (`idparque`),
  ADD CONSTRAINT `turnoguarda_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `guardaparques` (`usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
