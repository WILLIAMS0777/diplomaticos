-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2022 a las 14:51:35
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
-- Estructura de tabla para la tabla `automovil`
--

CREATE TABLE `automovil` (
  `idplaca` int(11) NOT NULL,
  `placa` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `modelo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `automovil`
--

INSERT INTO `automovil` (`idplaca`, `placa`, `color`, `modelo`) VALUES
(1, '1235ytu', NULL, NULL),
(2, '9874ghu', NULL, NULL),
(3, '888888', NULL, NULL),
(777777, NULL, NULL, NULL);

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
(22, 'REUNION PARA AVIVERSARIO', 'Te invitamos a ver la información de los más recientes y a navegar por nuestro Sitio Web Institucional, que fue renovado recientemente para ofrecer una experiencia sencilla amigable y dinámica a nuestros usuarios.', 'comu_1667629911.png', 'eliminar', '2022-11-05', 1),
(23, 'REUNION PARA AVIVERSARIO', 'hola', 'comu_1667633332.jpg', 'eliminar', '2022-11-05', 2),
(25, 'EVENTO DEPORTIVORRRR', 'Te invitamos a ver la información de los más recientes y a navegar por nuestro Sitio Web Institucional, que fue renovado recientemente para ofrecer una experiencia sencilla amigable y dinámica a nuestros usuarios.', 'comu_1667637172.png', 'eliminar', '2022-11-05', 1),
(26, 'COMUNICADO', 'Se entiende por comunicado una Nota, Reporte, un Parte o una declaración oficial y autorizada destinada a dar a conocer cierta información, a un público extenso, información que es difundida a través de los medios de comunicación impresos o electrónicos.', '', 'activo', '2022-11-10', 1),
(27, 'COMUNICADO', 'Se entiende por comunicado una Nota, Reporte, un Parte o una declaración oficial y autorizada destinada a dar a conocer cierta información, a un público extenso, información que es difundida a través de los medios de comunicación impresos o electrónicos.', '', 'activo', '2022-11-10', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `iddias` int(11) NOT NULL,
  `dia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`iddias`, `dia`) VALUES
(1, 'LUNES'),
(2, 'MARTES'),
(3, 'MIERCOLES'),
(4, 'JUEVES'),
(5, 'VIERNES'),
(6, 'SABADO'),
(7, 'DOMINGO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diastt`
--

CREATE TABLE `diastt` (
  `iddiastt` int(11) NOT NULL,
  `diasttcol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `egresos`
--

CREATE TABLE `egresos` (
  `idegresos` int(11) NOT NULL,
  `destino` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `ideventos` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(45) DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`ideventos`, `titulo`, `descripcion`, `imagen`, `fecha_evento`, `estado`) VALUES
(5, 'CIVIL', 'comunicadotrgtg', 'eve_1666747667.png', '2022-10-26', 'eliminar'),
(6, 'EVENTO DEPORTIVO', 'El evento deportivo se realizara en la zona de rio seco', 'eve_1666747979.jpg', '2022-10-26', 'activo'),
(7, 'SISTEMAS', 'hola', 'eve_1667170184.jpg', '2022-10-30', 'eliminar'),
(8, 'EVENTO DEPORTIVO', 'Se entiende por comunicado una Nota, Reporte, un Parte o una declaración oficial y autorizada destinada a dar a conocer cierta información, a un público extenso, información que es difundida a través de los medios de comunicación impresos o electrónicos.', 'eve_1668097010.jpg', '2022-11-10', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora_salida`
--

CREATE TABLE `hora_salida` (
  `idhora_salida` int(11) NOT NULL,
  `hora_salida` time DEFAULT NULL,
  `iddias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `hora_salida`
--

INSERT INTO `hora_salida` (`idhora_salida`, `hora_salida`, `iddias`) VALUES
(1, '05:00:00', 1),
(2, '06:00:00', 2),
(3, '04:00:00', 3),
(4, '07:00:00', 4),
(5, '07:10:00', 5),
(6, '07:20:00', 6),
(7, '08:00:00', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `idingresos` int(11) NOT NULL,
  `idsocio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`idingresos`, `idsocio`) VALUES
(1, 5),
(2, 6);

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
(2, 'l.png', 'SINDICATO MIXTO DE TRANSPORTES \"DIPLOMÁTICOS\"', 'apazafermin686@gmail.com', '74001213', 'facebook', 'RIO SECO TERMINAR INTERPROVINCIAL', 'google', 'La institucion es un sindicato de transportes llamado \"DIPLOMATICOS\"', 'El Sindicato Mixto de Transportes “Diplomáticos” tiene como misión proporcionar un apoyo a todos los socios, con el objetivo de crecer, proveer un buen servicio a los clientes en el transporte de los mismos y también ser eficaz como sindicato de transportes.', 'La visión del Sindicato Mixto de Transportes “Diplomáticos” es brindar el mejor servicio de transporte y también ser eficaz en el servicio de los clientes y también como sindicato crecer en lo social e institucional del sindicato.', 'El sindicato Mixto de Transportes “Diplomáticos” tiene como objetivo proteger, unir, organizar y representar a todos los socios quienes transportan los pasajeros a su destino y también brindar el servicio necesario a los clientes. El sindicato está conformado por un cuerpo directorio que ejercen sus funciones.', 'FERMIN MAMANI APAZA', 'fer.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `idmenus` int(11) NOT NULL,
  `menus` varchar(100) DEFAULT NULL,
  `m_estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`idmenus`, `menus`, `m_estado`) VALUES
(1, 'adminUsuario', 'activo'),
(2, 'privilegios', 'activo'),
(3, 'graficos', 'eliminar'),
(4, 'menus', 'activo'),
(5, 'menus', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `ci` varchar(45) DEFAULT NULL,
  `expedido` varchar(10) DEFAULT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `paterno` varchar(45) DEFAULT NULL,
  `materno` varchar(45) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `ci`, `expedido`, `imagen`, `nombre`, `paterno`, `materno`, `celular`, `direccion`) VALUES
(1, '9254480', 'LP', NULL, 'WILLIAMS', 'QUISPE', 'QUISPE', 60558206, 'tunari fab'),
(46, '925448197', 'LP', NULL, 'RICHART', 'QUISPE', 'QUISPE', 60666666, NULL),
(47, '12345678', 'LP', NULL, 'WILSON', 'CRUZZZZ', 'CRUZ', 87451236, NULL),
(48, '4892516', 'LP', NULL, 'FERMIN', 'MAMANI', 'APAZA', 74001213, NULL);

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

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`idprivilegios`, `p_estado`, `idrol`, `idmenus`) VALUES
(1, 'activo', 1, 1),
(2, 'activo', 1, 3),
(3, 'activo', 1, 2),
(4, 'activo', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `idprogramacion` int(11) NOT NULL,
  `idplaca` int(11) NOT NULL,
  `iddias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`idprogramacion`, `idplaca`, `iddias`) VALUES
(15, 1, 1),
(16, 2, 2);

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
-- Estructura de tabla para la tabla `socio`
--

CREATE TABLE `socio` (
  `idsocio` int(11) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `idplaca` int(11) NOT NULL,
  `idpersona` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `socio`
--

INSERT INTO `socio` (`idsocio`, `imagen`, `idplaca`, `idpersona`, `estado`) VALUES
(5, 'soc_1667541499.png', 3, 1, 'activo'),
(6, 'soc_1667541499.png', 3, 46, 'activo'),
(7, 'soc_1667541499.png', 2, 1, 'activo'),
(8, 'soc_1667541499.png', 1, 46, 'activo');

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
-- Estructura de tabla para la tabla `tipo_ingreso`
--

CREATE TABLE `tipo_ingreso` (
  `idtipo_ingreso` int(11) NOT NULL,
  `ingreso_sindicato` varchar(45) DEFAULT NULL,
  `aportes_semestral` varchar(45) DEFAULT NULL,
  `aporte_hojaruta` varchar(45) DEFAULT NULL,
  `multas` varchar(45) DEFAULT NULL,
  `idingresos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_ingreso`
--

INSERT INTO `tipo_ingreso` (`idtipo_ingreso`, `ingreso_sindicato`, `aportes_semestral`, `aporte_hojaruta`, `multas`, `idingresos`) VALUES
(3, '1500', '20', '20', '20', 1);

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
(18, '', 'riq', '119b33ded79bc43350cad3026727bed2549c7648', 'eliminar', '2022-10-26', NULL, 46, 1),
(19, '', 'son', 'f0cbc0ee7d5556a0827bb60017d6a8268514baa7', 'eliminar', '2022-10-26', NULL, 47, 1),
(20, 'user_1667502667.jpg', 'fermin', '099f57e08940cc7faa58798f0d2fd06ff0fb3133', 'activo', '2022-11-03', NULL, 48, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `automovil`
--
ALTER TABLE `automovil`
  ADD PRIMARY KEY (`idplaca`);

--
-- Indices de la tabla `comunicado`
--
ALTER TABLE `comunicado`
  ADD PRIMARY KEY (`idcomunicado`),
  ADD KEY `fk_comunicado_tipo1_idx` (`idtipo`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`iddias`);

--
-- Indices de la tabla `diastt`
--
ALTER TABLE `diastt`
  ADD PRIMARY KEY (`iddiastt`);

--
-- Indices de la tabla `egresos`
--
ALTER TABLE `egresos`
  ADD PRIMARY KEY (`idegresos`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`ideventos`);

--
-- Indices de la tabla `hora_salida`
--
ALTER TABLE `hora_salida`
  ADD PRIMARY KEY (`idhora_salida`),
  ADD UNIQUE KEY `hora_salida_UNIQUE` (`hora_salida`),
  ADD KEY `fk_hora_salida_diag1_idx` (`iddias`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`idingresos`),
  ADD KEY `fk_ingresos_socio1_idx` (`idsocio`);

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
  ADD KEY `fk_programacion_placa1_idx` (`idplaca`),
  ADD KEY `fk_programacion_dias1_idx` (`iddias`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idrol`);

--
-- Indices de la tabla `socio`
--
ALTER TABLE `socio`
  ADD PRIMARY KEY (`idsocio`),
  ADD KEY `fk_socio_placa1_idx` (`idplaca`),
  ADD KEY `fk_socio_persona1_idx` (`idpersona`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`idtipo`);

--
-- Indices de la tabla `tipo_ingreso`
--
ALTER TABLE `tipo_ingreso`
  ADD PRIMARY KEY (`idtipo_ingreso`),
  ADD KEY `fk_tipo_ingresos1_idx` (`idingresos`);

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
-- AUTO_INCREMENT de la tabla `automovil`
--
ALTER TABLE `automovil`
  MODIFY `idplaca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=777778;

--
-- AUTO_INCREMENT de la tabla `comunicado`
--
ALTER TABLE `comunicado`
  MODIFY `idcomunicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `dias`
--
ALTER TABLE `dias`
  MODIFY `iddias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `diastt`
--
ALTER TABLE `diastt`
  MODIFY `iddiastt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `ideventos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `hora_salida`
--
ALTER TABLE `hora_salida`
  MODIFY `idhora_salida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `idingresos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `idinstitucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `idmenus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  MODIFY `idprivilegios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `idprogramacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idrol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `socio`
--
ALTER TABLE `socio`
  MODIFY `idsocio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `idtipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_ingreso`
--
ALTER TABLE `tipo_ingreso`
  MODIFY `idtipo_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comunicado`
--
ALTER TABLE `comunicado`
  ADD CONSTRAINT `fk_comunicado_tipo1` FOREIGN KEY (`idtipo`) REFERENCES `tipo` (`idtipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `hora_salida`
--
ALTER TABLE `hora_salida`
  ADD CONSTRAINT `fk_hora_salida_diag1` FOREIGN KEY (`iddias`) REFERENCES `dias` (`iddias`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD CONSTRAINT `fk_ingresos_socio1` FOREIGN KEY (`idsocio`) REFERENCES `socio` (`idsocio`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `fk_programacion_dias1` FOREIGN KEY (`iddias`) REFERENCES `dias` (`iddias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_programacion_placa1` FOREIGN KEY (`idplaca`) REFERENCES `automovil` (`idplaca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `socio`
--
ALTER TABLE `socio`
  ADD CONSTRAINT `fk_socio_persona1` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_socio_placa1` FOREIGN KEY (`idplaca`) REFERENCES `automovil` (`idplaca`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tipo_ingreso`
--
ALTER TABLE `tipo_ingreso`
  ADD CONSTRAINT `fk_tipo_ingresos1` FOREIGN KEY (`idingresos`) REFERENCES `ingresos` (`idingresos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_persona` FOREIGN KEY (`idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_rol1` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`) ON DELETE NO ACTION ON UPDATE NO ACTION;

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `e` ON SCHEDULE EVERY 24 HOUR STARTS '2022-10-24 23:32:56' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN

        UPDATE programacion set hora_salida=addtime(hora_salida, '0:30:0') WHERE hora_salida<>'15:00:00';
        UPDATE programacion set hora_salida='04:30:00' WHERE hora_salida='15:00:00';
        
    END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
