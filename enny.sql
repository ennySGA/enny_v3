-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 04-07-2013 a las 15:06:51
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `enny_v3`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `checklist`
-- 

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL auto_increment,
  `cuerpo` text NOT NULL,
  `status` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Volcar la base de datos para la tabla `checklist`
-- 

INSERT INTO `checklist` VALUES (23, 'Ahorrar agua', 1, 23, '2013-07-04 13:42:52');
INSERT INTO `checklist` VALUES (11, 'Apropiada a la naturaleza de sus actividades, productos y servicios.', 1, 23, '2013-04-14 11:53:01');
INSERT INTO `checklist` VALUES (17, 'Apropiada a la magnitud de sus actividades, productos y servicios.', 1, 23, '2013-04-14 15:52:26');
INSERT INTO `checklist` VALUES (18, 'Apropiada a los impactos ambientales de sus actividades productos y servios.', 0, 23, '2013-04-14 16:14:44');
INSERT INTO `checklist` VALUES (19, 'Incluye un compromiso de mejora continua y prevenci?n de la contaminaci?n.', 1, 23, '2013-04-14 16:14:44');
INSERT INTO `checklist` VALUES (20, 'Incluye el compromiso de cumplir con los requisitos legales aplicables y con otros requisitos que la organizaci?n suscriba relacionados con sus aspectos ambientales.', 0, 23, '2013-04-14 16:17:03');
INSERT INTO `checklist` VALUES (21, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 1, 23, '2013-04-14 16:17:38');
INSERT INTO `checklist` VALUES (22, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 1, 23, '2013-07-02 15:56:30');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `comentarios`
-- 

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL auto_increment,
  `cuerpo` text NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

-- 
-- Volcar la base de datos para la tabla `comentarios`
-- 

INSERT INTO `comentarios` VALUES (29, 'coment', 0, 1, '2013-02-26 16:38:12');
INSERT INTO `comentarios` VALUES (30, 'coment 2', 0, 1, '2013-02-26 16:38:17');
INSERT INTO `comentarios` VALUES (31, 'coment 2', 0, 1, '2013-02-26 16:38:35');
INSERT INTO `comentarios` VALUES (32, 'holis', 0, 1, '2013-02-26 16:38:43');
INSERT INTO `comentarios` VALUES (33, 'que buen post', 0, 3, '2013-02-26 16:39:09');
INSERT INTO `comentarios` VALUES (34, 'Comentario en el tec', 0, 3, '2013-02-26 18:23:11');
INSERT INTO `comentarios` VALUES (35, 'sdfsdf', 0, 25, '2013-04-15 00:38:17');
INSERT INTO `comentarios` VALUES (36, 'sdfsdf', 4, 26, '2013-04-15 00:42:03');
INSERT INTO `comentarios` VALUES (37, 'Tengo una mejora que puede funcionar, enfatizar en la docencia', 2, 27, '2013-04-15 00:50:42');
INSERT INTO `comentarios` VALUES (40, 'Se me ocurri? una mejora a la Pol?tica Ambiental', 5, 27, '2013-04-17 09:26:47');
INSERT INTO `comentarios` VALUES (41, 'asfasd', 5, 27, '2013-04-17 09:27:08');
INSERT INTO `comentarios` VALUES (42, 'les parece si agendamos reuni?n para actualizar la PA?', 2, 27, '2013-04-17 09:31:14');
INSERT INTO `comentarios` VALUES (43, 'Mejorar la PA', 4, 28, '2013-04-17 11:55:02');
INSERT INTO `comentarios` VALUES (44, 'Mejorar la PA', 4, 29, '2013-04-17 13:13:45');
INSERT INTO `comentarios` VALUES (45, 'Reuni?n de enny', 2, 27, '2013-04-21 18:32:44');
INSERT INTO `comentarios` VALUES (46, 'Estaria bueno que el nombre del objetivo apareciera en la vista del objetivo que estanmos viendo.', 1, 27, '2013-05-14 19:55:59');
INSERT INTO `comentarios` VALUES (47, 'YOLO\r\n', 2, 27, '2013-07-02 16:53:13');
INSERT INTO `comentarios` VALUES (50, 'Que royo', 1, 27, '2013-07-03 18:49:59');
INSERT INTO `comentarios` VALUES (51, 'Almorranas en el yoyo.', 1, 27, '2013-07-03 18:50:11');
INSERT INTO `comentarios` VALUES (52, 'Saquen las chelas!', 1, 27, '2013-07-03 19:17:47');
INSERT INTO `comentarios` VALUES (53, 'Hola! :D', 7, 27, '2013-07-04 11:34:37');
INSERT INTO `comentarios` VALUES (54, 'probando la integración\r\n', 1, 27, '2013-07-04 14:52:32');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estrategias`
-- 

CREATE TABLE `estrategias` (
  `id` int(11) NOT NULL auto_increment,
  `id_organizacion` int(11) NOT NULL,
  `id_etapa` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `plazo` date NOT NULL,
  PRIMARY KEY  (`id`,`id_organizacion`,`id_etapa`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `estrategias`
-- 

INSERT INTO `estrategias` VALUES (1, 1, 1, 'Reduccion de agua', 'Dejar de ba?arse para cuidar el agua', '2013-12-31');
INSERT INTO `estrategias` VALUES (2, 2, 1, 'Reduccion de energia', 'Ya no ver tele', '2014-05-31');
INSERT INTO `estrategias` VALUES (3, 3, 1, 'Reduccion de aire', 'Aguantar la respiracion para no consumir/contaminar el aire', '2015-12-25');
INSERT INTO `estrategias` VALUES (4, 1, 2, 'Reduccion de papel', 'Reutilizar la servilletas para usar menos', '2013-12-31');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `eventos`
-- 

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `id_estrategia` int(11) NOT NULL,
  `nombre` varchar(120) collate utf8_spanish_ci default NULL,
  `descripcion` varchar(255) collate utf8_spanish_ci default NULL,
  `fecha_evento` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `eventos`
-- 

INSERT INTO `eventos` VALUES (1, 1, 'Pinche partyson', 'partyson loco en la empresa.', '2013-06-30');
INSERT INTO `eventos` VALUES (2, 1, 'Junta de SGA', 'junta importante.', '2013-07-09');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `metas`
-- 

CREATE TABLE `metas` (
  `id` int(11) NOT NULL,
  `id_estrategia` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `nombre` varchar(120) collate utf8_spanish_ci default NULL,
  `descripcion` varchar(255) collate utf8_spanish_ci default NULL,
  `estado_actual` varchar(45) collate utf8_spanish_ci default NULL,
  `estado_inicial` varchar(45) collate utf8_spanish_ci default NULL,
  `estado_lograr` varchar(45) collate utf8_spanish_ci default NULL,
  `fecha_meta` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `metas`
-- 

INSERT INTO `metas` VALUES (1, 1, 0, 'Metanfetaminas', 'esta es una meta feliz', NULL, NULL, NULL, '2013-06-30');
INSERT INTO `metas` VALUES (2, 1, 0, 'Metroid', 'Samus was a girl all the time.', NULL, NULL, NULL, '2013-07-10');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `organizaciones`
-- 

CREATE TABLE `organizaciones` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(120) NOT NULL,
  `direccion` varchar(120) NOT NULL,
  `colonia` varchar(120) NOT NULL,
  `cp` varchar(120) NOT NULL,
  `ciudad_estado` varchar(120) NOT NULL,
  `giro` varchar(120) NOT NULL,
  `tamano` varchar(120) NOT NULL,
  `logo` varchar(150) NOT NULL default 'logos/no_logo.jpg',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

-- 
-- Volcar la base de datos para la tabla `organizaciones`
-- 

INSERT INTO `organizaciones` VALUES (1, 'Enny', 'Casa de Chente', 'No me la se', '58000', 'Morelia, Mich.', 'Servicio de algo', 'Chica', 'logos/1_logo.jpg');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `text`
-- 

CREATE TABLE `text` (
  `id` int(11) NOT NULL auto_increment,
  `descripcion` text NOT NULL,
  `id_widget` int(11) NOT NULL,
  `creado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

-- 
-- Volcar la base de datos para la tabla `text`
-- 

INSERT INTO `text` VALUES (7, 'El SNEST establece el compromiso de orientar todas sus actividades del Proceso Educativo, hacia el respeto del medio ambiente; cumplir la legislaci?n ambiental aplicable y otros requisitos ambientales que se suscriban, promover en su personal, clientes y partes interesadas la prevenci?n de la contaminaci?n y el uso racional de los recursos, mediante la implementaci?n, operaci?n y mejora continua de un Sistema de Gesti?n Ambiental, conforme a la norma ISO 14001:2004/NMX-SAA-14001-IMNC-2004.--', 3, '2013-04-06 16:47:49');
INSERT INTO `text` VALUES (9, 'f', 4, '2013-04-06 16:47:50');
INSERT INTO `text` VALUES (10, 'k', 5, '2013-04-06 18:34:02');
INSERT INTO `text` VALUES (19, '999', 4, '2013-04-07 16:46:07');
INSERT INTO `text` VALUES (21, 'tres', 10, '2013-04-13 23:01:03');
INSERT INTO `text` VALUES (22, 'Cosa jon', 11, '2013-04-14 00:27:55');
INSERT INTO `text` VALUES (23, 'dos', 12, '2013-04-14 00:52:40');
INSERT INTO `text` VALUES (24, 'mama', 13, '2013-04-14 01:27:45');
INSERT INTO `text` VALUES (25, 'luna', 14, '2013-04-14 01:34:59');
INSERT INTO `text` VALUES (26, 'poliglota', 15, '2013-04-14 01:42:57');
INSERT INTO `text` VALUES (27, 'Redacta tu política ambiental de acuerdo a los requisitos mostrados.\r\n\r\nRecuerda que la creacióon de tu política es un proceso iterativo.\r\n', 16, '2013-04-14 01:54:11');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `usuarios`
-- 

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `avatar` varchar(150) NOT NULL,
  `puesto` varchar(120) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 1, 'Vito', 'Corleone', 'H', 'a@a.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-28 20:23:39', 'avatars/1_avatar.jpg', 'Presidente');
INSERT INTO `usuarios` VALUES (2, 1, 'Julio', 'Flores', 'H', 'julio@kno.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-29 22:18:26', 'avatars/hombre.png', '');
INSERT INTO `usuarios` VALUES (8, 12, 'Enrique', 'Martinez', 'H', 'mexico@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 16:03:56', 'avatars/hombre.png', '');
INSERT INTO `usuarios` VALUES (11, 15, 'Paulina', 'Rivas', 'M', 'prueba@tec.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 19:48:00', 'avatars/mujer.png', '');
INSERT INTO `usuarios` VALUES (12, 1, 'Esclavo', 'Uno', 'H', 'esclavo@esclavo.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 22:55:44', 'avatars/hombre.png', 'Barrendero');
INSERT INTO `usuarios` VALUES (15, 1, 'Esclava', 'Dos', 'M', 'esclava@esclava.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 00:01:48', 'avatars/mujer.png', 'Barrendero');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `widget_obj`
-- 

CREATE TABLE `widget_obj` (
  `id` int(11) NOT NULL auto_increment,
  `tipo` varchar(120) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `config` text NOT NULL,
  `id_estrategia` int(11) NOT NULL,
  `creado` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

-- 
-- Volcar la base de datos para la tabla `widget_obj`
-- 

INSERT INTO `widget_obj` VALUES (16, 'text', 'Instrucciones_01', '', 1, '2013-04-14 01:54:11', 1);
INSERT INTO `widget_obj` VALUES (23, 'check', 'Requisitos de PA', '', 1, '2013-04-14 11:53:01', 1);
INSERT INTO `widget_obj` VALUES (27, 'comentario', 'Comentarios', '', 1, '2013-04-15 00:50:42', 1);
