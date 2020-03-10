-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-03-2020 a las 12:46:09
-- Versión del servidor: 10.3.22-MariaDB-log
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anevico_qasms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `ID` int(11) NOT NULL,
  `usuarios_ID` int(11) NOT NULL,
  `folio` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_rep` date NOT NULL,
  `reporto` varchar(50) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `atendio` varchar(50) NOT NULL,
  `verificentros_ID` int(11) NOT NULL,
  `tipo_mant` varchar(50) NOT NULL,
  `desc_falla` varchar(50) NOT NULL,
  `desc_solucion` varchar(50) NOT NULL,
  `refacc` varchar(50) NOT NULL,
  `fecha_atencion` date NOT NULL,
  `datos_tecnico` varchar(50) NOT NULL,
  `recibo` varchar(50) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`ID`, `usuarios_ID`, `folio`, `fecha`, `fecha_rep`, `reporto`, `cargo`, `atendio`, `verificentros_ID`, `tipo_mant`, `desc_falla`, `desc_solucion`, `refacc`, `fecha_atencion`, `datos_tecnico`, `recibo`, `active`) VALUES
(1, 3, '54645', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(2, 3, '16546', '0000-00-00', '2019-11-15', '', '', '', 8, 'limpieza', 'no funciona la compu', '', '', '0000-00-00', '', '', 1),
(3, 2, '16546', '0000-00-00', '2019-11-15', '', '', '', 8, 'limpieza', 'no funciona la compu', '', '', '0000-00-00', '', '', 1),
(4, 2, '666666', '0000-00-00', '2019-11-05', '', '', '', 8, 'limpieza', 'holi', '', '', '0000-00-00', '', '', 1),
(5, 2, '666666', '0000-00-00', '2019-11-05', '', '', '', 8, 'limpieza', 'holi', '', '', '0000-00-00', '', '', 1),
(6, 2, '45321', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(7, 2, '1', '0000-00-00', '0000-00-00', 'daniela', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(8, 2, '1', '0000-00-00', '0000-00-00', 'daniela', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(9, 2, '1', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(10, 2, '2', '0000-00-00', '0000-00-00', 'borrego', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(11, 2, '5', '0000-00-00', '0000-00-00', 'Daniela prueba ', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(12, 2, '5', '0000-00-00', '0000-00-00', 'Daniela prueba ', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(13, 2, '2', '0000-00-00', '0000-00-00', 'borrego', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(14, 2, '5', '0000-00-00', '2019-11-14', 'daniela bueno', '', '', 8, 'limpieza', 'computadora', '', '', '0000-00-00', '', 'sss', 1),
(15, 2, '5', '0000-00-00', '2019-11-14', 'daniela bueno', 'jefa', '', 8, 'limpieza', 'computadora', '', '', '0000-00-00', '', 'sss', 1),
(16, 2, '555555', '0000-00-00', '2019-11-06', 'daniela ya bueno ahora si', 'jega', '', 8, 'limpieza', 'holiiiis', '', '', '0000-00-00', '', 'sssss', 1),
(17, 2, '555555', '0000-00-00', '2019-11-06', 'daniela ya bueno ahora si', 'jega', '', 8, 'limpieza', 'holiiiis', '', '', '0000-00-00', '', 'sssss', 1),
(18, 2, '2', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(19, 2, '2', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(20, 2, '8', '0000-00-00', '0000-00-00', 'asd', 's', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(21, 2, '8', '0000-00-00', '0000-00-00', 'asd', 's', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(22, 2, '', '0000-00-00', '0000-00-00', 'hola', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(23, 2, '', '0000-00-00', '0000-00-00', 'hola', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(24, 2, '', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(25, 2, '', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(26, 2, '', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(27, 2, '5', '0000-00-00', '0000-00-00', 'Daniela prueba ', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(28, 2, '', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(29, 2, '', '0000-00-00', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(30, 2, '', '0000-00-00', '0000-00-00', 'aaaa', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(31, 2, '', '2019-11-13', '0000-00-00', 'aaaa', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(32, 2, '53489156', '2019-11-13', '2019-11-21', 'borrego', 'jefa', '', 8, 'limpieza', 'sdf', '', '', '0000-00-00', '', 'dfdf', 1),
(33, 2, '', '2019-11-13', '0000-00-00', 'ssss', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(34, 2, '', '2019-11-13', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(35, 2, '', '2019-11-13', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(36, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(37, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(38, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(39, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(40, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(41, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(42, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(43, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(44, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(45, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(46, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(47, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(48, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 8, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', 'vv', 1),
(49, 2, '988988', '2019-11-13', '2019-11-16', 'daniela', 'jefa', '', 4, 'limpieza', 'cxcvxcv', '', '', '0000-00-00', '', '', 1),
(50, 1, '5555555', '2019-11-13', '2019-11-07', '', '', 'boreguin', 0, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(51, 1, '111', '2019-11-13', '2019-11-12', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(52, 1, '9', '2019-11-13', '2019-11-12', 'Daniela prueba ', 'programar', 'horacio', 0, 'limpieza', 'esta muy descompuesto todo', '', '', '0000-00-00', '', '', 1),
(53, 1, '', '2019-11-18', '2019-11-05', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(54, 2, '', '2019-11-18', '0000-00-00', '', '', '', 8, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(55, 1, '99', '2019-11-19', '0000-00-00', '', '', '', 0, 'limpieza', '', '', '', '2019-11-21', '', '', 1),
(56, 1, '987', '2019-11-19', '2019-11-06', '', '', 'selene chavez', 2, 'preventivo', '', 'se cambio el mouse', 'nuevo mouse', '2019-11-22', 'Daniela perez perez', 'fernando rustrian', 1),
(57, 2, '43', '2019-11-19', '2019-11-06', 'Montserrat Perez', 'desarrollador', 'borre', 0, 'limpieza', 'No sirve mi mouse', 'no servia', '', '2019-11-07', 'marco horacio moreno', '', 1),
(58, 2, '81', '2019-11-19', '2019-11-13', 'Daniela montserrat perez perez', 'desarrollador', '', 0, 'limpieza', 'Tengo problemas con el teclado', '', '', '2019-11-21', '', 'muy satisfecho', 1),
(59, 2, '88', '2019-11-19', '2019-11-06', 'horacio moreno', 'jefe', 'fernando', 0, 'limpieza', 'no sirve mi pantalal', 'no servia', 'nueva pantalla', '2019-11-16', 'fernando ruistrian ruiz', 'muy satisfecho', 1),
(60, 2, '7652491083', '2019-11-19', '2019-11-13', 'Daniela prueba ', 'ssda', '', 0, 'limpieza', 'ssss', '', '', '0000-00-00', '', 'sds', 1),
(61, 2, '9506831472', '2019-11-19', '2019-11-13', 'amado', 'ayudante', '', 0, 'limpieza', 'se fue la luz', 'ya quedo', '', '0000-00-00', '', 'muy bien', 1),
(62, 2, '5496712803', '2019-11-19', '0000-00-00', '', '', '', 0, 'limpieza', '', '', '', '0000-00-00', '', '', 1),
(63, 2, '0412567893', '2019-11-21', '2019-11-12', 'Cecilia perez', 'administrador', 'elias', 0, 'limpieza', 'El dispostivo esta bloqueado', 'se recupero la contrasena', 'ninguna', '2019-11-13', 'ELias sdfe ', 'muy satisfecho', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relacion`
--

CREATE TABLE `relacion` (
  `ID` int(11) NOT NULL,
  `usuarios_ID` int(11) NOT NULL,
  `verificentros_ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relacion`
--

INSERT INTO `relacion` (`ID`, `usuarios_ID`, `verificentros_ID`) VALUES
(1, 1, 1),
(2, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tipo_usuario` varchar(20) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `user`, `password`, `tipo_usuario`, `active`) VALUES
(1, 'prueba', 'contrasena', 'admin', 1),
(2, 'hola', 'hola', 'cliente', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `verificentros`
--

CREATE TABLE `verificentros` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `verificentros`
--

INSERT INTO `verificentros` (`ID`, `nombre`, `active`) VALUES
(1, 'Fernandez del Castillo', 1),
(2, 'anevi', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `relacion`
--
ALTER TABLE `relacion`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `verificentros`
--
ALTER TABLE `verificentros`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT de la tabla `relacion`
--
ALTER TABLE `relacion`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `verificentros`
--
ALTER TABLE `verificentros`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
