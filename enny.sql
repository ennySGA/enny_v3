-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 03-07-2013 a las 16:49:47
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `enny`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `estrategias`
-- 

CREATE TABLE `estrategias` (
  `id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- 
-- Volcar la base de datos para la tabla `estrategias`
-- 

INSERT INTO `estrategias` VALUES (1);
INSERT INTO `estrategias` VALUES (2);

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
-- Estructura de tabla para la tabla `leyes`
-- 

CREATE TABLE `leyes` (
  `id` int(11) NOT NULL auto_increment,
  `nombre` varchar(120) NOT NULL,
  `tipo` varchar(120) NOT NULL,
  `autoridad` varchar(120) NOT NULL,
  `actualizacion` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `ult_act` date NOT NULL,
  `articulo` varchar(120) NOT NULL,
  `nivel` varchar(120) NOT NULL,
  `requisitos` varchar(255) NOT NULL,
  `fuente` varchar(120) NOT NULL,
  `cumple` varchar(2) NOT NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `id_organizacion` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `leyes`
-- 

INSERT INTO `leyes` VALUES (1, 'Ley de tu mamá', 'Ley', 'PFP', 'No', 'Ley de tu puta madre', '2013-07-02', '145', 'Local', 'NA', 'http://tumama.com', 'No', '2013-07-02 17:37:18', 1);
INSERT INTO `leyes` VALUES (2, 'ley', 'Ley', 'no hay', 'as', 'tampoco', '1212-12-12', '56', 'Local', 'NA', 'google.com', 'Si', '2013-07-02 19:47:55', 1);
INSERT INTO `leyes` VALUES (3, 'ley loca', 'Norma', 'sagarpa', '', 'menos cero nada.', '2013-04-24', '65', 'Estatal', 'NA', 'www.sagarpa.com', 'No', '2013-07-02 21:24:53', 1);
INSERT INTO `leyes` VALUES (4, 'ley bien pinche loca a la verga', 'Norma', 'el pputo FBI cabrones', 'todas puto todas', 'esta es una pinche descripcion bien vergas we, pero cabron asi de a madres', '0000-00-00', 'el 34', 'Federal', 'todos a la verga', 'www.hom.com', 'Si', '2013-07-02 21:29:42', 1);
INSERT INTO `leyes` VALUES (5, 'ley 5', 'Otro', 'CIA', 'no', 'decripcion djjd', '2013-01-02', '345', 'Federal', 'NA', 'elrincondelvago.com', 'Si', '2013-07-03 11:19:01', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `metas`
-- 

CREATE TABLE `metas` (
  `id` int(11) NOT NULL,
  `id_estrategia` int(11) NOT NULL,
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

INSERT INTO `metas` VALUES (1, 1, 'Metanfetaminas', 'esta es una meta feliz', NULL, NULL, NULL, '2013-06-30');
INSERT INTO `metas` VALUES (2, 1, 'Metroid', 'Samus was a girl all the time.', NULL, NULL, NULL, '2013-07-10');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- 
-- Volcar la base de datos para la tabla `organizaciones`
-- 

INSERT INTO `organizaciones` VALUES (1, 'Enny', 'Casa de Chente', 'No me la sé', '58001', 'Morelia, Mich.', 'Servicio de algo', 'Chica', 'logos/1_logo.jpg');
INSERT INTO `organizaciones` VALUES (13, 'tec', 'esa', 'otra', '10000', 'Ciudad de Mexico', 'Petroleo', 'Grande', 'logos/no_logo.jpg');
INSERT INTO `organizaciones` VALUES (12, 'Pemex', 'Los Pinos', 'Centro', '10000', 'Ciudad de Mexico', 'Petroleo', 'Grande', 'logos/12_logo.jpg');

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 1, 'DonVito', 'aaa', 'H', 'a@a.com', '827ccb0eea8a706c4c34a16891f84e7b', '2013-06-28 20:23:39', 'avatars/1_avatar.jpg');
INSERT INTO `usuarios` VALUES (2, 1, 'Julio', 'Flores', 'H', 'julio@kno.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-29 22:18:26', 'avatars/hombre.png');
INSERT INTO `usuarios` VALUES (8, 12, 'Enrique', 'Martinez', 'H', 'mexico@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 16:03:56', 'avatars/hombre.png');
INSERT INTO `usuarios` VALUES (9, 0, 'paulina', 'rivas', 'M', 's@s.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 16:48:49', 'avatars/mujer.png');
