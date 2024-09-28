-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 12-07-2018 a las 00:33:21
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `velcar`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `galeriaimagenes`
-- 

CREATE TABLE `galeriaimagenes` (
  `id` int(100) NOT NULL auto_increment,
  `archivo` varchar(100) collate utf8_spanish_ci NOT NULL,
  `directorio` varchar(100) collate utf8_spanish_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=20 ;

-- 
-- Volcar la base de datos para la tabla `galeriaimagenes`
-- 

INSERT INTO `galeriaimagenes` VALUES (1, 'balon.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (2, 'carro.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (3, '1.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (4, '2.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (5, '3.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (6, '4.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (7, '5.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (8, '6.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (9, '7.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (10, '8.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (11, '9.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (12, '10.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (13, 'braa.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (14, 'client-1.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (15, 'team-4.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (16, 'team-2.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (17, 'team-1.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (18, 'team-3.jpg', 'prueba');
INSERT INTO `galeriaimagenes` VALUES (19, 'client-2.jpg', 'prueba');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `login`
-- 

CREATE TABLE `login` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pasadmin` varchar(250) NOT NULL,
  `rol` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- 
-- Volcar la base de datos para la tabla `login`
-- 

INSERT INTO `login` VALUES (1, 'Administrador', '', 'admin@gmail.com', '123456', 1);
INSERT INTO `login` VALUES (2, 'Joseph', '12345', 'josephg059@gmail.com', '', 2);
INSERT INTO `login` VALUES (4, 'joseph', '12345', 'joseph@gmail.com', '', 2);
INSERT INTO `login` VALUES (5, 'paul', '1234', 'paul@gmail.com', '', 2);
INSERT INTO `login` VALUES (7, 'ismael', '', 'ismael@gmail.com', '123', 2);
INSERT INTO `login` VALUES (8, 'Jonathan', '123', 'belffegor123@gmail.com', '', 2);
INSERT INTO `login` VALUES (9, 'alan', '123', 'pyes@sad.com', '', 2);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `subir`
-- 

CREATE TABLE `subir` (
  `ID` int(100) NOT NULL auto_increment,
  `USUARIO` int(100) NOT NULL,
  `FECHA` datetime NOT NULL,
  `CONTENIDO` text collate utf8_spanish_ci NOT NULL,
  `IMAGEN` varchar(200) collate utf8_spanish_ci NOT NULL,
  `COMENTARIOS` int(100) NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=44 ;

-- 
-- Volcar la base de datos para la tabla `subir`
-- 

INSERT INTO `subir` VALUES (4, 0, '2018-06-03 14:32:53', 'Hola guapo', '4FD4139CFC70.jpg', 1);
INSERT INTO `subir` VALUES (5, 0, '2018-06-03 14:37:20', 'kijasdiokls', '590546EDF4B4.jpg', 1);
INSERT INTO `subir` VALUES (14, 0, '2018-06-03 16:05:47', 'jj', '141F8B285C18C3.jpg', 1);
INSERT INTO `subir` VALUES (16, 0, '2018-06-03 16:38:52', 'jkk', '16EB2E1F965F6C.jpg', 1);
INSERT INTO `subir` VALUES (19, 0, '2018-06-03 16:47:45', 'HOOO', '19E9D0632325B7.jpg', 1);
INSERT INTO `subir` VALUES (20, 0, '2018-06-03 16:49:46', 'KIKE', '200F55C5F873E6.jpg', 1);

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `tbl_documentos`
-- 

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) unsigned NOT NULL auto_increment,
  `titulo` varchar(150) default NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) unsigned default NULL,
  `tipo` varchar(150) default NULL,
  `nombre_archivo` varchar(255) default NULL,
  PRIMARY KEY  (`id_documento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

-- 
-- Volcar la base de datos para la tabla `tbl_documentos`
-- 

INSERT INTO `tbl_documentos` VALUES (14, '', '', 4036536, 'application/pdf', 'tarjetamadre.pdf');
