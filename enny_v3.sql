-- phpMyAdmin SQL Dump
-- version 3.5.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-07-2013 a las 22:07:25
-- Versión del servidor: 5.1.70-cll
-- Versión de PHP: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cajarone_enny_v3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aspectos`
--

CREATE TABLE IF NOT EXISTS `aspectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `active` binary(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `aspectos`
--

INSERT INTO `aspectos` (`id`, `id_tipo`, `nombre`, `descripcion`, `active`) VALUES
(1, 2, 'Aspecto ambiental 1', 'Aspecto ambientaloso', '1'),
(2, 2, 'aspecto ambiental 2', 'safasdf', '1'),
(3, 2, 'aspecto 3', 'troix', '1'),
(4, 4, 'Aspecto 5', 'ASDF', '1'),
(5, 4, 'Aspecto 6', 'Aspectos', '0'),
(6, 14, 'Aspecto 80', 'este es otro aspecto', '1'),
(7, 4, 'Otro aspecto', '', '0'),
(8, 20, 'Agua potable', 'Bañarse solo una vez al mes para ahorrar agua', '1'),
(9, 25, 'Residuos quimicos', '', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checklist`
--

CREATE TABLE IF NOT EXISTS `checklist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuerpo` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Volcado de datos para la tabla `checklist`
--

INSERT INTO `checklist` (`id`, `cuerpo`, `status`, `id_widget`, `creado`) VALUES
(23, 'Ahorrar agua', 0, 23, '2013-07-04 18:42:52'),
(11, 'Apropiada a la naturaleza de sus actividades, productos y servicios.', 1, 23, '2013-04-14 16:53:01'),
(17, 'Apropiada a la magnitud de sus actividades, productos y servicios.', 1, 23, '2013-04-14 20:52:26'),
(18, 'Apropiada a los impactos ambientales de sus actividades productos y servios.', 0, 23, '2013-04-14 21:14:44'),
(19, 'Incluye un compromiso de mejora continua y prevenci?n de la contaminaci?n.', 1, 23, '2013-04-14 21:14:44'),
(20, 'Incluye el compromiso de cumplir con los requisitos legales aplicables y con otros requisitos que la organizaci?n suscriba relacionados con sus aspectos ambientales.', 0, 23, '2013-04-14 21:17:03'),
(21, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 1, 23, '2013-04-14 21:17:38'),
(22, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 0, 23, '2013-07-02 20:56:30'),
(28, '1', 0, 44, '2013-07-07 03:30:04'),
(29, 'se cumple', 1, 44, '2013-07-07 03:30:04'),
(30, 'es factible', 1, 44, '2013-07-07 03:30:04'),
(31, 'ya se chingó el checklist', 0, 47, '2013-07-12 02:22:37'),
(32, 'Ya jala el checklist', 1, 47, '2013-07-12 02:45:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cuerpo` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `cuerpo`, `id_usuario`, `id_widget`, `creado`) VALUES
(29, 'coment', 0, 1, '2013-02-26 22:38:12'),
(30, 'coment 2', 0, 1, '2013-02-26 22:38:17'),
(31, 'coment 2', 0, 1, '2013-02-26 22:38:35'),
(32, 'holis', 0, 1, '2013-02-26 22:38:43'),
(33, 'que buen post', 0, 3, '2013-02-26 22:39:09'),
(34, 'Comentario en el tec', 0, 3, '2013-02-27 00:23:11'),
(35, 'sdfsdf', 0, 25, '2013-04-15 05:38:17'),
(36, 'sdfsdf', 4, 26, '2013-04-15 05:42:03'),
(37, 'Tengo una mejora que puede funcionar, enfatizar en la docencia', 2, 27, '2013-04-15 05:50:42'),
(40, 'Se me ocurri? una mejora a la Pol?tica Ambiental', 5, 27, '2013-04-17 14:26:47'),
(41, 'asfasd', 5, 27, '2013-04-17 14:27:08'),
(42, 'les parece si agendamos reuni?n para actualizar la PA?', 2, 27, '2013-04-17 14:31:14'),
(43, 'Mejorar la PA', 4, 28, '2013-04-17 16:55:02'),
(44, 'Mejorar la PA', 4, 29, '2013-04-17 18:13:45'),
(45, 'Reuni?n de enny', 2, 27, '2013-04-21 23:32:44'),
(46, 'Estaria bueno que el nombre del objetivo apareciera en la vista del objetivo que estanmos viendo.', 1, 27, '2013-05-15 00:55:59'),
(47, 'YOLO\r\n', 2, 27, '2013-07-02 21:53:13'),
(50, 'Que royo', 1, 27, '2013-07-03 23:49:59'),
(51, 'Almorranas en el yoyo.', 1, 27, '2013-07-03 23:50:11'),
(52, 'Saquen las chelas!', 1, 27, '2013-07-04 00:17:47'),
(53, 'Hola! :D', 7, 27, '2013-07-04 16:34:37'),
(54, 'probando la integraci?n\r\n', 1, 27, '2013-07-04 19:52:32'),
(55, 'Saludos', 16, 27, '2013-07-04 22:03:35'),
(56, 'asdf', 19, 43, '2013-07-07 03:28:20'),
(57, 'hola', 19, 43, '2013-07-07 03:28:32'),
(58, 'Estoy muy interesado en discutir sobre la basura.', 16, 46, '2013-07-12 02:20:23'),
(59, 'comenten lo que quieran.', 16, 46, '2013-07-12 02:21:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estrategias`
--

CREATE TABLE IF NOT EXISTS `estrategias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(11) NOT NULL,
  `id_etapa` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `imagen` varchar(120) NOT NULL,
  `plazo` date NOT NULL,
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`,`id_organizacion`,`id_etapa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `estrategias`
--

INSERT INTO `estrategias` (`id`, `id_organizacion`, `id_etapa`, `nombre`, `descripcion`, `imagen`, `plazo`, `created`) VALUES
(1, 1, 1, 'Reducción de agua', 'Dejar de bañarse para cuidar el agua', 'thumbnail_1_12.jpg', '2013-12-31', '0000-00-00 00:00:00'),
(2, 1, 2, 'Reduccion de energia', 'Ya no ver tele', 'default.jpg', '2014-05-31', '0000-00-00 00:00:00'),
(3, 1, 1, 'Reduccion de aire', 'Aguantar la respiración para no consumir/contaminar el aire', 'default.jpg', '2015-12-25', '0000-00-00 00:00:00'),
(4, 1, 2, 'Reduccion de papel', 'Reutilizar la servilletas para usar menos', 'default.jpg', '2013-12-31', '0000-00-00 00:00:00'),
(7, 1, 3, 'Reducir producción de basura', 'reducir la cantidad de basura que se produce por mes al mínimo.', 'thumbnail_1_7.jpg', '2013-08-30', '2013-07-11 21:16:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etapas`
--

CREATE TABLE IF NOT EXISTS `etapas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `etapas`
--

INSERT INTO `etapas` (`id`, `nombre`, `descripcion`) VALUES
(1, 'etapa uno', 'blblb'),
(2, 'etepa dos', 'blbllb'),
(3, 'etapa tres', ''),
(4, 'etapa cuatro', ''),
(5, 'etapa cinco', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE IF NOT EXISTS `eventos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estrategia` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_evento` date DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `id_estrategia`, `id_widget`, `nombre`, `descripcion`, `fecha_evento`, `created`) VALUES
(1, 1, 0, 'Pinche partyson', 'partyson loco en la empresa.', '2013-06-30', '0000-00-00 00:00:00'),
(2, 1, 0, 'Junta de SGA', 'junta importante.', '2013-07-09', '0000-00-00 00:00:00'),
(3, 1, 39, 'Reforestacion', 'Plantemos ', '2013-07-06', '2013-07-06 18:42:59'),
(4, 1, 45, 'reforestacion', 'plantemos ', '2013-07-15', '2013-07-07 02:34:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leyes`
--

CREATE TABLE IF NOT EXISTS `leyes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `tipo` varchar(120) NOT NULL,
  `autoridad` varchar(120) NOT NULL,
  `actualizacion` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `ult_act` date NOT NULL,
  `articulo` varchar(120) NOT NULL,
  `nivel` varchar(120) NOT NULL,
  `requisitos` text NOT NULL,
  `fuente` varchar(255) NOT NULL,
  `cumple` varchar(10) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` binary(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `leyes`
--

INSERT INTO `leyes` (`id`, `id_organizacion`, `nombre`, `tipo`, `autoridad`, `actualizacion`, `descripcion`, `ult_act`, `articulo`, `nivel`, `requisitos`, `fuente`, `cumple`, `created`, `active`) VALUES
(1, 1, 'Ley de proteccion ambiental', 'Ley', 'SAGARPA', 'No', 'Ley para proteger al ambiente', '2002-11-02', '65', 'Federal', 'NA', 'sagarpa.com', 'Si', '2013-07-04 21:28:20', '\0'),
(3, 1, 'Ley de Herodes', 'Ley', 'Herodes', '11.89.34', 'Desccripcion ley de Herodes', '2013-06-04', '56 seccion 459 parrafo 45', 'Otro', 'Ninguno', 'NA', 'Si', '2013-07-11 21:29:28', '\0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metas`
--

CREATE TABLE IF NOT EXISTS `metas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estrategia` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `nombre` varchar(120) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edo_actual` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edo_inicial` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edo_meta` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_meta` date DEFAULT NULL,
  `creada` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `metas`
--

INSERT INTO `metas` (`id`, `id_estrategia`, `id_widget`, `nombre`, `descripcion`, `edo_actual`, `edo_inicial`, `edo_meta`, `fecha_meta`, `creada`) VALUES
(1, 0, 0, 'Metanfetaminas', 'esta es una meta feliz', NULL, NULL, NULL, '2013-06-30', '0000-00-00 00:00:00'),
(2, 0, 0, 'Metroid', 'Samus was a girl all the time.', NULL, NULL, NULL, '2013-07-10', '0000-00-00 00:00:00'),
(4, 1, 35, 'meta feliz', 'esta es una meta feliz (:', '10', '10', '20', '2013-08-14', '2013-07-04 21:56:03'),
(5, 1, 42, 'asd', 'asd', '1', '1', '2', '2013-07-06', '2013-07-06 22:27:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organizaciones`
--

CREATE TABLE IF NOT EXISTS `organizaciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(120) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `colonia` varchar(120) NOT NULL,
  `cp` varchar(120) NOT NULL,
  `ciudad_estado` varchar(120) NOT NULL,
  `giro` varchar(120) NOT NULL,
  `tamano` varchar(120) NOT NULL,
  `logo` varchar(150) NOT NULL DEFAULT 'logos/no_logo.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `organizaciones`
--

INSERT INTO `organizaciones` (`id`, `nombre`, `direccion`, `colonia`, `cp`, `ciudad_estado`, `giro`, `tamano`, `logo`) VALUES
(1, 'Enny', 'Casa de Chente', 'No me la se', '58000', 'Morelia, Mich.', 'Consultoría', 'Chica', 'logos/1_logo.jpg'),
(3, 'Apple', 'Sillicon Valley #456', 'Centro', '12000', 'Morelia, Mich.', 'Tecnolog', 'Grande', 'logos/no_logo.jpg'),
(5, 'a', 'a', 'a', '12345', 'a', 'a', 'Chica', 'logos/no_logo.jpg'),
(6, 'Mexico', 'Los Pinos', 'Centro', '10000', 'DF', 'Gobierno', 'Grande', 'logos/6_logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE IF NOT EXISTS `procesos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(11) NOT NULL,
  `id_padre` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `active` binary(1) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `id_organizacion`, `id_padre`, `nombre`, `active`, `created`) VALUES
(3, 1, 0, 'tituriru', '1', '2013-07-10 22:40:11'),
(4, 1, 0, 'proceso 2', '1', '2013-07-11 02:41:32'),
(5, 1, 0, 'Proceso 3', '1', '2013-07-12 01:33:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text`
--

CREATE TABLE IF NOT EXISTS `text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` text NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `text`
--

INSERT INTO `text` (`id`, `descripcion`, `id_widget`, `creado`) VALUES
(7, 'El SNEST establece el compromiso de orientar todas sus actividades del Proceso Educativo, hacia el respeto del medio ambiente; cumplir la legislaci?n ambiental aplicable y otros requisitos ambientales que se suscriban, promover en su personal, clientes y partes interesadas la prevenci?n de la contaminaci?n y el uso racional de los recursos, mediante la implementaci?n, operaci?n y mejora continua de un Sistema de Gesti?n Ambiental, conforme a la norma ISO 14001:2004/NMX-SAA-14001-IMNC-2004.--', 3, '2013-04-06 21:47:49'),
(9, 'f', 4, '2013-04-06 21:47:50'),
(10, 'k', 5, '2013-04-06 23:34:02'),
(19, '999', 4, '2013-04-07 21:46:07'),
(21, 'tres', 10, '2013-04-14 04:01:03'),
(22, 'Cosa jon', 11, '2013-04-14 05:27:55'),
(23, 'dos', 12, '2013-04-14 05:52:40'),
(24, 'mama', 13, '2013-04-14 06:27:45'),
(25, 'luna', 14, '2013-04-14 06:34:59'),
(26, 'poliglota', 15, '2013-04-14 06:42:57'),
(27, 'Redacta tu pol?tica ambiental de acuerdo a los requisitos mostrados.\r\n\r\nRecuerda que la creaci?on de tu pol?tica es un proceso iterativo.\r\n', 16, '2013-04-14 06:54:11'),
(28, '324', 36, '2013-07-06 03:34:20'),
(29, 'sdf', 37, '2013-07-06 03:35:13'),
(30, 'sadf', 40, '2013-07-07 03:26:34'),
(31, 'asdf', 41, '2013-07-07 03:27:23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_aspectos`
--

CREATE TABLE IF NOT EXISTS `tipos_aspectos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `active` binary(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `tipos_aspectos`
--

INSERT INTO `tipos_aspectos` (`id`, `id_organizacion`, `nombre`, `descripcion`, `active`) VALUES
(2, 1, 'Tipo 1', 'Tipo de Aspecto 1', '0'),
(3, 1, 'Tipo 2', 'Tipo de aspecto 2', '0'),
(4, 1, 'Tipo 3', 'tipo 3 de aspectos', '0'),
(5, 1, 'Tipo 4', 'sdfsd', '0'),
(6, 1, 'tipo 5', 'fsdf', '0'),
(7, 1, 'tipo 6', 'dgdf', '0'),
(8, 1, 'tipo 7', 'sfc', '0'),
(9, 1, 'Tipo 8', 'eegdg', '0'),
(10, 1, 'Tipo 9', 'sfsf', '0'),
(11, 1, 'Tipo 10', 'descripcion de tipo 10', '0'),
(12, 1, 'Tipo 11', 'sdfgsdf', '0'),
(13, 1, 'Tipo 12', 'fgsgdfg', '0'),
(14, 1, 'Tipo 13', 'fsdfsd', '0'),
(15, 1, 'Tipo 14', 'sdsdgs sdgsdgsd dsf sd sgd', '0'),
(16, 1, 'Tipo 15', 'Esta es una descripcion mas larga pra ver de ejemplo en la vista larga long caaat etc etc lorem ipsum', '0'),
(17, 1, 'Tipo 14', 'Este tipo se refiere a actividades relacionadas con el campo.', '0'),
(18, 1, 'Tipo 15', '', '0'),
(19, 1, 'Tipo 17', '', '0'),
(20, 1, 'Agua', 'Aspectos relacionados al agua', '1'),
(21, 1, 'Aire', 'Aspectos relacionados al aire', '1'),
(22, 1, 'Residuos', 'Aspectos relacionados con residuos', '1'),
(23, 6, 'Agua', 'Aspectos relacionados al agua.', '0'),
(24, 6, 'Aire', 'Aspectos relacionados al aire', '1'),
(25, 6, 'Residuos', 'Aspectos relacionados con residuos', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `avatar` varchar(150) NOT NULL,
  `puesto` varchar(120) NOT NULL,
  `active` binary(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `id_organizacion`, `nombre`, `apellido`, `sexo`, `email`, `password`, `created`, `avatar`, `puesto`, `active`) VALUES
(1, 1, 'Vito', 'Corleone', 'H', 'a@a.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-29 01:23:39', 'avatars/1_avatar.jpg', 'Presidente', '\0'),
(2, 1, 'Julio', 'Flores', 'H', 'julio@kno.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-30 03:18:26', 'avatars/hombre.png', '', '\0'),
(8, 12, 'Enrique', 'Martinez', 'H', 'mexico@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 21:03:56', 'avatars/hombre.png', '', '\0'),
(11, 15, 'Paulina', 'Rivas', 'M', 'prueba@tec.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 00:48:00', 'avatars/mujer.png', '', '\0'),
(12, 1, 'Esclavo', 'Uno', 'H', 'esclavo@esclavo.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 03:55:44', 'avatars/hombre.png', 'Barrendero', '\0'),
(15, 1, 'Esclava', 'Dos', 'M', 'esclava@esclava.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 05:01:48', 'avatars/mujer.png', 'Barrendero', '\0'),
(16, 1, 'edward', 'pm', 'H', 'edward_beats@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 22:02:58', 'avatars/16_avatar.JPG', 'Developer', '\0'),
(17, 3, 'Steve', 'Jobs', 'H', 'apple@a.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-06 17:40:03', 'avatars/hombre.png', 'CEO', '\0'),
(18, 5, 'a', 'a', 'H', 'a@ac.com', '827ccb0eea8a706c4c34a16891f84e7b', '2013-07-07 03:21:26', 'avatars/hombre.png', 'sdfds', '\0'),
(19, 6, 'Enrique', 'Pe', 'H', 'Penanieto@mex.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-07 03:23:06', 'avatars/19_avatar.jpg', 'Presidente', '\0'),
(20, 6, 'Felipe', 'Corleone', 'H', 'fecal@harvard.edu', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-07 02:39:10', 'avatars/hombre.png', 'Ex Presidente', '\0'),
(21, 1, 'David Enrique', 'Sandoval', 'H', 'davide.acv@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-11 04:18:28', 'avatars/hombre.png', 'Designer', '\0'),
(22, 1, 'David', 'Nunez', 'H', 'davidnhz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-11 04:19:43', 'avatars/hombre.png', 'Developer', '\0'),
(23, 1, 'Ana Luisa', 'Alvarez', 'M', 'alaz.beat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-11 04:21:13', 'avatars/mujer.png', 'Designer', '\0'),
(24, 1, 'Maria Fernanda', 'Martinez', 'M', 'chinilla91@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-11 04:22:22', 'avatars/mujer.png', 'Manager', '\0'),
(25, 1, 'Diego', 'Chapitas', 'H', 'silvernn357@gmail.com', 'd59d1dadf57f3c11c37a1011c809325b', '2013-07-11 21:18:33', 'avatars/hombre.png', 'Developer', '\0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `widget_obj`
--

CREATE TABLE IF NOT EXISTS `widget_obj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(120) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `config` text NOT NULL,
  `id_estrategia` int(11) NOT NULL,
  `creado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `widget_obj`
--

INSERT INTO `widget_obj` (`id`, `tipo`, `nombre`, `config`, `id_estrategia`, `creado`, `active`) VALUES
(16, 'text', 'Instrucciones_01', '', 1, '2013-04-14 06:54:11', 1),
(23, 'check', 'Requisitos de PA', '', 1, '2013-04-14 16:53:01', 1),
(27, 'comentario', 'Comentarios', '', 1, '2013-04-15 05:50:42', 1),
(35, 'meta', 'Metas_01', '', 1, '2013-07-05 02:56:03', 1),
(36, 'text', 'texto', '', 1, '2013-07-06 03:34:20', 0),
(37, 'text', 'sdf', '', 2, '2013-07-06 03:35:13', 1),
(38, 'evento', 'Evento', '', 1, '2013-07-06 17:41:50', 0),
(39, 'evento', 'Evento', '', 1, '2013-07-06 18:42:59', 0),
(40, 'text', '1', '', 1, '2013-07-07 03:26:34', 0),
(41, 'text', 'sadf', '', 1, '2013-07-07 03:27:23', 0),
(42, 'meta', 'as', '', 1, '2013-07-07 03:27:59', 0),
(43, 'comentario', 'comentario', '', 1, '2013-07-07 03:28:20', 0),
(44, 'check', 'checklist', '', 1, '2013-07-07 03:30:04', 0),
(45, 'evento', 'Calendario', '', 1, '2013-07-07 02:34:19', 1),
(46, 'comentario', 'Comentarios sobre basura', '', 7, '2013-07-12 02:20:23', 1),
(47, 'check', 'revisar', '', 7, '2013-07-12 02:22:37', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
