
CREATE TABLE `aspectos` (
  `id` int(11) NOT NULL auto_increment,
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `active` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Volcar la base de datos para la tabla `aspectos`
-- 

INSERT INTO `aspectos` VALUES (1, 2, 'Aspecto ambiental 1', 'Aspecto ambientaloso', 0x31);
INSERT INTO `aspectos` VALUES (2, 2, 'aspecto ambiental 2', 'safasdf', 0x31);
INSERT INTO `aspectos` VALUES (3, 2, 'aspecto 3', 'troix', 0x31);
INSERT INTO `aspectos` VALUES (4, 4, 'Aspecto 5', 'ASDF', 0x31);
INSERT INTO `aspectos` VALUES (5, 4, 'Aspecto 6', 'Aspectos', 0x30);
INSERT INTO `aspectos` VALUES (6, 14, 'Aspecto 80', 'este es otro aspecto', 0x31);
INSERT INTO `aspectos` VALUES (7, 4, 'Otro aspecto', '', 0x30);
INSERT INTO `aspectos` VALUES (8, 20, 'Agua potable', '', 0x31);
INSERT INTO `aspectos` VALUES (9, 25, 'Residuos quimicos', '', 0x30);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

-- 
-- Volcar la base de datos para la tabla `checklist`
-- 

INSERT INTO `checklist` VALUES (23, 'Ahorrar agua', 0, 23, '2013-07-04 13:42:52');
INSERT INTO `checklist` VALUES (11, 'Apropiada a la naturaleza de sus actividades, productos y servicios.', 1, 23, '2013-04-14 11:53:01');
INSERT INTO `checklist` VALUES (17, 'Apropiada a la magnitud de sus actividades, productos y servicios.', 1, 23, '2013-04-14 15:52:26');
INSERT INTO `checklist` VALUES (18, 'Apropiada a los impactos ambientales de sus actividades productos y servios.', 0, 23, '2013-04-14 16:14:44');
INSERT INTO `checklist` VALUES (19, 'Incluye un compromiso de mejora continua y prevenci?n de la contaminaci?n.', 1, 23, '2013-04-14 16:14:44');
INSERT INTO `checklist` VALUES (20, 'Incluye el compromiso de cumplir con los requisitos legales aplicables y con otros requisitos que la organizaci?n suscriba relacionados con sus aspectos ambientales.', 0, 23, '2013-04-14 16:17:03');
INSERT INTO `checklist` VALUES (21, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 1, 23, '2013-04-14 16:17:38');
INSERT INTO `checklist` VALUES (22, 'Proporcionar el marco de referencia para establecer y revisar los objetivos y las metas ambientales.', 0, 23, '2013-07-02 15:56:30');
INSERT INTO `checklist` VALUES (28, '1', 0, 44, '2013-07-06 22:30:04');
INSERT INTO `checklist` VALUES (29, 'se cumple', 1, 44, '2013-07-06 22:30:04');
INSERT INTO `checklist` VALUES (30, 'es factible', 1, 44, '2013-07-06 22:30:04');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

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
INSERT INTO `comentarios` VALUES (55, 'Saludos', 16, 27, '2013-07-04 17:03:35');
INSERT INTO `comentarios` VALUES (56, 'asdf', 19, 43, '2013-07-06 22:28:20');
INSERT INTO `comentarios` VALUES (57, 'hola', 19, 43, '2013-07-06 22:28:32');

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
  `id` int(11) NOT NULL auto_increment,
  `id_estrategia` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `nombre` varchar(120) collate utf8_spanish_ci default NULL,
  `descripcion` varchar(255) collate utf8_spanish_ci default NULL,
  `fecha_evento` date default NULL,
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

-- 
-- Volcar la base de datos para la tabla `eventos`
-- 

INSERT INTO `eventos` VALUES (1, 1, 0, 'Pinche partyson', 'partyson loco en la empresa.', '2013-06-30', '0000-00-00 00:00:00');
INSERT INTO `eventos` VALUES (2, 1, 0, 'Junta de SGA', 'junta importante.', '2013-07-09', '0000-00-00 00:00:00');
INSERT INTO `eventos` VALUES (3, 1, 39, 'Reforestacion', 'Plantemos árboles', '2013-07-06', '2013-07-06 13:42:59');
INSERT INTO `eventos` VALUES (4, 1, 45, 'reforestacion', 'plantemos árboles', '2013-07-15', '2013-07-06 21:34:19');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `leyes`
-- 

CREATE TABLE `leyes` (
  `id` int(11) NOT NULL auto_increment,
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
  `created` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `active` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- Volcar la base de datos para la tabla `leyes`
-- 

INSERT INTO `leyes` VALUES (1, 1, 'Ley de proteccion ambiental', 'Ley', 'SAGARPA', 'No', 'Ley para proteger al ambiente', '2002-11-02', '65', 'Federal', 'NA', 'sagarpa.com', 'Si', '2013-07-04 16:28:20', 0x00);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `metas`
-- 

CREATE TABLE `metas` (
  `id` int(11) NOT NULL auto_increment,
  `id_estrategia` int(11) NOT NULL,
  `id_widget` int(11) NOT NULL,
  `nombre` varchar(120) collate utf8_spanish_ci default NULL,
  `descripcion` varchar(255) collate utf8_spanish_ci default NULL,
  `edo_actual` varchar(45) collate utf8_spanish_ci default NULL,
  `edo_inicial` varchar(45) collate utf8_spanish_ci default NULL,
  `edo_meta` varchar(45) collate utf8_spanish_ci default NULL,
  `fecha_meta` date default NULL,
  `creada` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

-- 
-- Volcar la base de datos para la tabla `metas`
-- 

INSERT INTO `metas` VALUES (1, 0, 0, 'Metanfetaminas', 'esta es una meta feliz', NULL, NULL, NULL, '2013-06-30', '0000-00-00 00:00:00');
INSERT INTO `metas` VALUES (2, 0, 0, 'Metroid', 'Samus was a girl all the time.', NULL, NULL, NULL, '2013-07-10', '0000-00-00 00:00:00');
INSERT INTO `metas` VALUES (4, 1, 35, 'meta feliz', 'esta es una meta feliz (:', '10', '10', '20', '2013-08-14', '2013-07-04 21:56:03');
INSERT INTO `metas` VALUES (5, 1, 42, 'asd', 'asd', '1', '1', '2', '2013-07-06', '2013-07-06 22:27:59');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Volcar la base de datos para la tabla `organizaciones`
-- 

INSERT INTO `organizaciones` VALUES (1, 'Enny', 'Casa de Chente', 'No me la se', '58000', 'Morelia, Mich.', 'Servicio de algo', 'Chica', 'logos/1_logo.jpg');
INSERT INTO `organizaciones` VALUES (3, 'Apple', 'Sillicon Valley #456', 'Centro', '12000', 'Morelia, Mich.', 'Tecnología', 'Grande', 'logos/no_logo.jpg');
INSERT INTO `organizaciones` VALUES (5, 'a', 'a', 'a', '12345', 'a', 'a', 'Chica', 'logos/no_logo.jpg');
INSERT INTO `organizaciones` VALUES (6, 'Mexico', 'Los Pinos', 'Centro', '10000', 'DF', 'Gobierno', 'Grande', 'logos/6_logo.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
INSERT INTO `text` VALUES (28, '324', 36, '2013-07-05 22:34:20');
INSERT INTO `text` VALUES (29, 'sdf', 37, '2013-07-05 22:35:13');
INSERT INTO `text` VALUES (30, 'sadf', 40, '2013-07-06 22:26:34');
INSERT INTO `text` VALUES (31, 'asdf', 41, '2013-07-06 22:27:23');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tipos_aspectos`
-- 

CREATE TABLE `tipos_aspectos` (
  `id` int(11) NOT NULL auto_increment,
  `id_organizacion` int(11) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `descripcion` text NOT NULL,
  `active` binary(1) NOT NULL default '1',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- 
-- Volcar la base de datos para la tabla `tipos_aspectos`
-- 

INSERT INTO `tipos_aspectos` VALUES (2, 1, 'Tipo 1', 'Tipo de Aspecto 1', 0x30);
INSERT INTO `tipos_aspectos` VALUES (3, 1, 'Tipo 2', 'Tipo de aspecto 2', 0x30);
INSERT INTO `tipos_aspectos` VALUES (4, 1, 'Tipo 3', 'tipo 3 de aspectos', 0x30);
INSERT INTO `tipos_aspectos` VALUES (5, 1, 'Tipo 4', 'sdfsd', 0x30);
INSERT INTO `tipos_aspectos` VALUES (6, 1, 'tipo 5', 'fsdf', 0x30);
INSERT INTO `tipos_aspectos` VALUES (7, 1, 'tipo 6', 'dgdf', 0x30);
INSERT INTO `tipos_aspectos` VALUES (8, 1, 'tipo 7', 'sfc', 0x30);
INSERT INTO `tipos_aspectos` VALUES (9, 1, 'Tipo 8', 'eegdg', 0x30);
INSERT INTO `tipos_aspectos` VALUES (10, 1, 'Tipo 9', 'sfsf', 0x30);
INSERT INTO `tipos_aspectos` VALUES (11, 1, 'Tipo 10', 'descripcion de tipo 10', 0x30);
INSERT INTO `tipos_aspectos` VALUES (12, 1, 'Tipo 11', 'sdfgsdf', 0x30);
INSERT INTO `tipos_aspectos` VALUES (13, 1, 'Tipo 12', 'fgsgdfg', 0x30);
INSERT INTO `tipos_aspectos` VALUES (14, 1, 'Tipo 13', 'fsdfsd', 0x30);
INSERT INTO `tipos_aspectos` VALUES (15, 1, 'Tipo 14', 'sdsdgs sdgsdgsd dsf sd sgd', 0x30);
INSERT INTO `tipos_aspectos` VALUES (16, 1, 'Tipo 15', 'Esta es una descripcion mas larga pra ver de ejemplo en la vista larga long caaat etc etc lorem ipsum', 0x30);
INSERT INTO `tipos_aspectos` VALUES (17, 1, 'Tipo 14', 'Este tipo se refiere a actividades relacionadas con el campo.', 0x30);
INSERT INTO `tipos_aspectos` VALUES (18, 1, 'Tipo 15', '', 0x30);
INSERT INTO `tipos_aspectos` VALUES (19, 1, 'Tipo 17', '', 0x30);
INSERT INTO `tipos_aspectos` VALUES (20, 1, 'Agua', 'Aspectos relacionados al agua', 0x31);
INSERT INTO `tipos_aspectos` VALUES (21, 1, 'Aire', 'Aspectos relacionados al aire', 0x31);
INSERT INTO `tipos_aspectos` VALUES (22, 1, 'Residuos', 'Aspectos relacionados con residuos', 0x31);
INSERT INTO `tipos_aspectos` VALUES (23, 6, 'Agua', 'Aspectos relacionados al agua.', 0x30);
INSERT INTO `tipos_aspectos` VALUES (24, 6, 'Aire', 'Aspectos relacionados al aire', 0x31);
INSERT INTO `tipos_aspectos` VALUES (25, 6, 'Residuos', 'Aspectos relacionados con residuos', 0x31);

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
  `active` binary(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- Volcar la base de datos para la tabla `usuarios`
-- 

INSERT INTO `usuarios` VALUES (1, 1, 'Vito', 'Corleone', 'H', 'a@a.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-28 20:23:39', 'avatars/1_avatar.jpg', 'Presidente', 0x00);
INSERT INTO `usuarios` VALUES (2, 1, 'Julio', 'Flores', 'H', 'julio@kno.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-06-29 22:18:26', 'avatars/hombre.png', '', 0x00);
INSERT INTO `usuarios` VALUES (8, 12, 'Enrique', 'Martinez', 'H', 'mexico@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 16:03:56', 'avatars/hombre.png', '', 0x00);
INSERT INTO `usuarios` VALUES (11, 15, 'Paulina', 'Rivas', 'M', 'prueba@tec.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 19:48:00', 'avatars/mujer.png', '', 0x00);
INSERT INTO `usuarios` VALUES (12, 1, 'Esclavo', 'Uno', 'H', 'esclavo@esclavo.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-03 22:55:44', 'avatars/hombre.png', 'Barrendero', 0x00);
INSERT INTO `usuarios` VALUES (15, 1, 'Esclava', 'Dos', 'M', 'esclava@esclava.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 00:01:48', 'avatars/mujer.png', 'Barrendero', 0x00);
INSERT INTO `usuarios` VALUES (16, 2, 'edward', 'pm', 'H', 'edward_beats@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-04 17:02:58', 'avatars/16_avatar.jpg', '', 0x00);
INSERT INTO `usuarios` VALUES (17, 3, 'Steve', 'Jobs', 'H', 'apple@a.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-06 12:40:03', 'avatars/hombre.png', 'CEO', 0x00);
INSERT INTO `usuarios` VALUES (18, 5, 'a', 'a', 'H', 'a@ac.com', '827ccb0eea8a706c4c34a16891f84e7b', '2013-07-06 22:21:26', 'avatars/hombre.png', 'sdfds', 0x00);
INSERT INTO `usuarios` VALUES (19, 6, 'Enrique', 'Peña Nieto', 'H', 'Penanieto@mex.com', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-06 22:23:06', 'avatars/19_avatar.jpg', 'Presidente', 0x00);
INSERT INTO `usuarios` VALUES (20, 6, 'Felipe', 'Corleone', 'H', 'fecal@harvard.edu', 'e10adc3949ba59abbe56e057f20f883e', '2013-07-06 21:39:10', 'avatars/hombre.png', 'Ex Presidente', 0x00);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

-- 
-- Volcar la base de datos para la tabla `widget_obj`
-- 

INSERT INTO `widget_obj` VALUES (16, 'text', 'Instrucciones_01', '', 1, '2013-04-14 01:54:11', 1);
INSERT INTO `widget_obj` VALUES (23, 'check', 'Requisitos de PA', '', 1, '2013-04-14 11:53:01', 1);
INSERT INTO `widget_obj` VALUES (27, 'comentario', 'Comentarios', '', 1, '2013-04-15 00:50:42', 1);
INSERT INTO `widget_obj` VALUES (35, 'meta', 'Metas_01', '', 1, '2013-07-04 21:56:03', 1);
INSERT INTO `widget_obj` VALUES (36, 'text', 'texto', '', 1, '2013-07-05 22:34:20', 1);
INSERT INTO `widget_obj` VALUES (37, 'text', 'sdf', '', 2, '2013-07-05 22:35:13', 1);
INSERT INTO `widget_obj` VALUES (38, 'evento', 'Evento', '', 1, '2013-07-06 12:41:50', 0);
INSERT INTO `widget_obj` VALUES (39, 'evento', 'Evento', '', 1, '2013-07-06 13:42:59', 0);
INSERT INTO `widget_obj` VALUES (40, 'text', '1', '', 1, '2013-07-06 22:26:34', 1);
INSERT INTO `widget_obj` VALUES (41, 'text', 'sadf', '', 1, '2013-07-06 22:27:23', 1);
INSERT INTO `widget_obj` VALUES (42, 'meta', 'as', '', 1, '2013-07-06 22:27:59', 1);
INSERT INTO `widget_obj` VALUES (43, 'comentario', 'comentario', '', 1, '2013-07-06 22:28:20', 1);
INSERT INTO `widget_obj` VALUES (44, 'check', 'checklist', '', 1, '2013-07-06 22:30:04', 1);
INSERT INTO `widget_obj` VALUES (45, 'evento', 'Calendario', '', 1, '2013-07-06 21:34:19', 1);
