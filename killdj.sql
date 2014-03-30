-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-03-2014 a las 04:28:23
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `killdj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE IF NOT EXISTS `discos` (
  `id` varchar(200) NOT NULL,
  `grupo` varchar(80) NOT NULL,
  `album` varchar(200) NOT NULL,
  `portada` varchar(200) NOT NULL,
  `salida` int(4) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `precio` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id`, `grupo`, `album`, `portada`, `salida`, `genero`, `pais`, `precio`) VALUES
('1', 'Artic Monkeys', 'AM', 'arctic_monkeys_am-portada.jpg', 2013, 'rock', 'Inglaterra', 320),
('2', 'The Killers', 'Runaways', 'The-Killers.jpeg', 2012, 'rock', 'Inglaterra', 500),
('3', 'The Strokes', 'Angles', 'angles.jpg', 2011, 'rock', 'Inglaterra', 290);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE IF NOT EXISTS `paises` (
  `pais` varchar(200) NOT NULL,
  PRIMARY KEY (`pais`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`pais`) VALUES
('Estados Unidos'),
('Francia'),
('Holanda'),
('Inglaterra'),
('Mexico');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
