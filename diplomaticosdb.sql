-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-10-2022 a las 05:46:52
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diplomaticosdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicado`
--

CREATE TABLE `comunicado` (
  `idcomunicado` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `idtipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comunicado`
--

INSERT INTO `comunicado` (`idcomunicado`, `titulo`, `descripcion`, `imagen`, `estado`, `fecha_registro`, `idtipo`) VALUES
(21, 'CIVIL', 'hola', 'comu_1664412305.jpg', 'eliminar', '2022-09-29', 1),
(22, 'SISTEMAS', 'comunicado', 'comu_1664412373.jpg', 'activo', '2022-09-29', 2),
(23, 'HOLA', 'holas', 'comu_1664423459.png', 'activo', '2022-09-29', 2),
(24, 'HELLO', 'hellos', 'comu_1664423485.jpg', 'eliminar', '2022-09-29', 1),
(25, 'HEY', 'hey', 'comu_1664423506.jpg', 'activo', '2022-09-29', 1),
(26, 'SISTEMASR', 'sistemas', 'comu_1664428457.jpg', 'activo', '2022-09-29', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ideventos` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(45) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ideventos`, `titulo`, `descripcion`, `imagen`, `fecha_evento`) VALUES
(1, 'evento deportivo', 'la realizacion de evento deportivo en el sind', NULL, '2022-09-22'),
(2, 'evento deportivo', 'la realizacion de evento deportivo en el sind', NULL, '2022-09-22'),
(3, 'evento deportivo', 'la realizacion de evento deportivo en el sind', NULL, '2022-09-22'),
(4, 'evento deportivo', 'fffffffffffffffffffffffffff', NULL, '2022-09-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `idinstitucion` int(11) NOT NULL,
  `in_logo` varchar(45) DEFAULT NULL,
  `in_nombre` varchar(45) DEFAULT NULL,
  `in_correo` varchar(45) DEFAULT NULL,
  `in_celular` varchar(45) DEFAULT NULL,
  `in_facebook` varchar(45) DEFAULT NULL,
  `in_ubicacion` varchar(45) DEFAULT NULL,
  `in_google_maps` varchar(45) DEFAULT NULL,
  `in_descripcion` text,
  `in_mision` text,
  `in_vision` text,
  `in_objetivo` text,
  `in_nombre_strio_general` varchar(45) DEFAULT NULL,
  `in_imagen_strio_general` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`idinstitucion`, `in_logo`, `in_nombre`, `in_correo`, `in_celular`, `in_facebook`, `in_ubicacion`, `in_google_maps`, `in_descripcion`, `in_mision`, `in_vision`, `in_objetivo`, `in_nombre_strio_general`, `in_imagen_strio_general`) VALUES
(1, NULL, 'wils', 'wils@gmail.com', '44444444', 'face', 'chejepampa', 'google', 'Discurso oral o escrito en el que se explica cómo es una cosa, una persona o un lugar para ofrecer una imagen o una idea completa de ellos.', 'Encargo o poder que un gobierno le da a una persona, especialmente a un diplomático, para ir a desempeñar un trabajo o una determinada función en algún lugar.\r\n\"misión diplomática\"', 'Percepción de las realidades físicas a través de la vista.\r\n\"tengo una mala visión de los objetos que están a lo lejos\"', '[persona] Que hace juicios de valor atendiendo a los hechos y la lógica, y no a los propios sentimientos o sensaciones.\r\n\"las implicaciones afectivas impiden que una madre sea objetiva con sus hijos\"', 'fermin', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `idmenus` int(11) NOT NULL,
  `menus` varchar(100) DEFAULT NULL,
  `m_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `ci` varchar(45) DEFAULT NULL,
  `expedido` varchar(10) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `ci`, `expedido`, `nombre`, `paterno`, `materno`, `celular`, `direccion`) VALUES
(1, '9254480', 'LP', 'WILLIAMS', 'QUISPE', 'QUISPE', 60558206, 'tunari fab'),
(2, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(3, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(4, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(5, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(6, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(7, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(8, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(9, '9254481', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(10, '9254481', NULL, '', '', '', NULL, NULL),
(11, '9254485', 'CBB', 'WILLIAMS', 'QUISPE', 'QUISPE', 88564651, NULL),
(12, '9254487', 'LP', 'COMPUTACION', 'QUISPE', 'MAMANI', 12345678, NULL),
(13, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(14, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(15, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(16, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(17, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(18, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(19, '9254488', 'CBB', 'RICHAR', 'QUISPE', 'QUISPE', 12345678, NULL),
(20, '9254483', 'BN', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(21, '25434', 'CBB', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(22, '25434', 'CBB', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(23, '25434', 'CBB', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(24, '25434', 'CBB', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(25, '25434', 'CBB', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(26, '854372', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(27, '854372', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(28, '854372', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(29, '854372', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(30, '92544814', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(31, '92544814', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(32, '92544814', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(33, '92544818', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(34, '92544816', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(35, '92544819', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345676, NULL),
(36, '92544885', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 12345678, NULL),
(37, '92544809', 'LP', 'RICHAR', 'QUISPE', 'MAMANI', 12345676, NULL),
(38, '92544815', 'LP', 'MICROSOFT OFFICE', 'QUISPE', 'MAMANI', 12345678, NULL),
(39, '92544804', 'LP', 'RICHAR', 'MAMANI', 'MAMANI', 12345678, NULL),
(40, '9999999', 'LP', 'ABRAHAM', 'QUISPE', 'QUISPE', 1236985, NULL),
(41, '8888888', 'LP', 'ROD', 'QUISPE', 'MAMANI', 44444444, NULL),
(42, 'ttt', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 60666666, NULL),
(43, 'ttt', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 60666666, NULL),
(44, 'ttt', 'CBB', 'RICHAR', 'QUISPE', 'MAMANI', 60666666, NULL),
(45, '925448198', 'CBB', 'RICHAR', '', 'MAMANI', 1236985, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `idprivilegios` int(11) NOT NULL,
  `p_estado` varchar(45) DEFAULT NULL,
  `idrol` int(11) NOT NULL,
  `idmenus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `idprogramacion` int(11) NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `dia_programacion` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `placa` varchar(45) DEFAULT NULL,
  `idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`idprogramacion`, `hora_salida`, `dia_programacion`, `descripcion`, `placa`, `idpersona`) VALUES
(2, '04:00:00', 'DOMINGO', 'primer minibus', NULL, 0),
(3, '06:00:00', 'lunes', 'la movilidad es blanca', '1235ytu', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL,
  `roles` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idrol`, `roles`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'ENCARGADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `idtipo` int(11) NOT NULL,
  `tipos` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`idtipo`, `tipos`) VALUES
(1, 'emergencia'),
(2, 'formal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `pass` varchar(200) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `fecha_registro` date DEFAULT NULL,
  `update` datetime DEFAULT NULL,
  `idpersona` int(11) NOT NULL,
  `idrol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `imagen`, `name`, `pass`, `estado`, `fecha_registro`, `update`, `idpersona`, `idrol`) VALUES
(1, 'user_1663649482.jpg', 'wil', '9a0378ef1bf1713c8f63a8af1eb0f0c8a6ecc5f4', 'activo', '2022-09-02', '2022-09-02 14:15:57', 1, 1),
(2, '', 'williams', 'b49a5780a99ea81284fc0746a78f84a30e4d5c73', 'eliminar', '2022-09-06', '2022-09-19 17:39:42', 10, 1),
(3, 'user_1662439844.jpg', 'wils', '55f59fb896941433eeddc18c9801ed3cddaec003', 'eliminar', '2022-09-06', '2022-09-06 00:50:44', 11, 1),
(4, 'user_1662440104.jpg', 'dar', '08fb52cf0b3735a314211e242d1b09700519b162', 'eliminar', '2022-09-06', '2022-09-19 18:31:56', 12, 1),
(5, 'user_1662440674.jpg', 'jul', '18a6de6a0925c55116694e1a03e79c0c06251723', 'eliminar', '2022-09-06', '2022-09-06 01:04:34', 20, 1),
(6, '', 'wilsh', '55f59fb896941433eeddc18c9801ed3cddaec003', 'eliminar', '2022-09-06', '2022-09-19 17:39:34', 33, 1),
(7, '', 'juan', 'b49a5780a99ea81284fc0746a78f84a30e4d5c73', 'eliminar', '2022-09-06', '2022-09-19 17:39:28', 35, 1),
(8, '', 'williamsy', 'b49a5780a99ea81284fc0746a78f84a30e4d5c73', 'eliminar', '2022-09-06', '2022-09-19 17:39:16', 36, 1),
(9, 'user_1663609948.jpg', 'ric', 'ff4dc518fb3d5d20a81fd1c6faff577641edf4b9', 'eliminar', '2022-09-19', '2022-09-19 16:36:41', 37, 1),
(10, 'user_1663617438.jpg', 'rrr', '8578173555a47d4ea49e697badfda270dee0858f', 'eliminar', '2022-09-19', '2022-09-19 16:36:31', 38, 1),
(11, 'user_1664286929.jpg', 'ttt', '99ebdbd711b0e1854a6c2e93f759efc2af291fd0', 'inactivo', '2022-09-19', '2022-09-19 16:36:44', 39, 1),
(12, 'user_1664286916.png', 'abr', '6d90efc27fd7d7821bf3a03a851dd0bc453d7539', 'eliminar', '2022-09-19', '2022-09-19 16:47:39', 40, 1),
(13, 'user_1663649413.png', 'rod', 'f9f03903429036ef609ed7ca822fddfa76155c29', 'eliminar', '2022-09-20', '2022-09-19 19:05:32', 41, 1),
(14, 'user_1664766942.jpg', 'uuu', '7823372203bd98aeb10e6f33a6ce7dab12d13423', 'inactivo', '2022-10-03', NULL, 42, 1),
(15, 'user_1664766943.jpg', 'uuu', '7823372203bd98aeb10e6f33a6ce7dab12d13423', 'activo', '2022-10-03', NULL, 43, 1),
(16, 'user_1664766943.jpg', 'uuu', '7823372203bd98aeb10e6f33a6ce7dab12d13423', 'inactivo', '2022-10-03', NULL, 44, 1),
(17, '', 'as', 'df211ccdd94a63e0bcb9e6ae427a249484a49d60', 'activo', '2022-10-03', NULL, 45, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comunicado`
--
ALTER TABLE `comunicado`
  ADD PRIMARY KEY (`idcomunicado`),
  ADD KEY `fk_comunicado_tipo1_idx` (`idtipo`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ideventos`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`idinstitucion`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`idmenus`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`idprivilegios`),
  ADD KEY `fk_privilegios_rol1_idx` (`idrol`),
  ADD KEY `fk_privilegios_menus1_idx` (`idmenus`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`idprogramacion`),
  ADD KEY `fk_programacion_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_usuario_persona_idx` (`idpersona`),
  ADD KEY `fk_usuario_rol1_idx` (`idrol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comunicado`
--
ALTER TABLE `comunicado`
  MODIFY `idcomunicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ideventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idinstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `idmenus` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idprivilegios` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `idprogramacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comunicado`
--
ALTER TABLE `comunicado`
  ADD CONSTRAINT `fk_comunicado_tipo1` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD CONSTRAINT `fk_privilegios_menus1` FOREIGN KEY (`idmenus`) REFERENCES `menus` (`idmenus`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_privilegios_rol1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `fk_programacion_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
