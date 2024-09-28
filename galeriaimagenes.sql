-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 01-07-2018 a las 22:47:13
-- Versión del servidor: 5.0.51
-- Versión de PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `publicaciones`
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=14 ;

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
