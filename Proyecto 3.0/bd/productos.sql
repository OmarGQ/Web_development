-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 01-03-2019 a las 23:04:09
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `restaurante`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platillos`
--

DROP TABLE IF EXISTS `platillos`;
CREATE TABLE IF NOT EXISTS `platillos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(6,2) NOT NULL,
  `disponible` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `platillos`
--

INSERT INTO `platillos` (`id`, `nombre`, `precio`, `disponible`) VALUES
(1, 'Mariscos', 50.00, 1),
(2, 'Lazaña', 60.00, 1),
(3, 'Chuleta con patatas', 85.00, 0),
(4, 'Milaneza', 30.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` varchar(3) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `precio` int(6) NOT NULL,
  `clase` enum('computadora','teléfono','televicion','bocinas','videojuegos') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `clase`) VALUES
('c0', 'Notebook HP 240 G6', 5699, 'computadora'),
('c1', 'Computadora Hp 6305 Pro ', 8850, 'computadora'),
('c2', 'Notebook HP Envy 13-ah0001la', 13999, 'computadora'),
('c3', 'Notebook HP 15-da0011la', 14399, 'computadora'),
('c4', 'Apple - MacBook Pro MPXR2E/A de 13.3\"', 26999, 'computadora'),
('c5', 'Notebook HP 240 G6', 5699, 'computadora'),
('c6', 'Computadora Hp 6305 Pro ', 8850, 'computadora'),
('c7', 'Computadora Portátil 2 En 1 - Lenovo Ideapad Yoga 910-13ikb', 37277, 'computadora'),
('c8', 'Computadora Amd Dual Core + Punto De Venta Completo', 8299, 'computadora'),
('c9', 'Computadora De Escritorio Intel Celeron Monitor 19', 400, 'computadora'),
('c10', 'Notebook HP ProBook 440 G5', 19329, 'computadora'),
('c11', 'Laptop HP 15-DA0001LA 15.6\'\', Intel Celeron N4000 2.60GHz', 5649, 'computadora'),
('t0', 'Celular Xiaomi Redmi S2', 4650, 'teléfono'),
('t1', 'Xiaomi Redmi Note 5 Global', 4499, 'teléfono'),
('t2', 'Hisense L675 Pro', 1599, 'teléfono'),
('t3', 'Galaxy S9 Plus', 15999, 'teléfono'),
('t4', 'Xiaomi Redmi 6 ', 3320, 'teléfono'),
('t5', 'Huawei ANE-LX3 P20 Lite Rosa R4', 6499, 'teléfono'),
('t6', 'Stylos Sos Dingo Ng', 349, 'teléfono'),
('t7', 'W&O COLOR AZUL', 999, 'teléfono'),
('t8', 'Huawei Y6', 3189, 'teléfono'),
('t9', 'iPhone 7 Plus', 5837, 'teléfono'),
('s0', 'TCL 720p de 32\" Roku Smart TV', 2999, 'televicion'),
('s1', 'Samsung UN55NU7300FXZX Smart TV Curvo 55\"', 17999, 'televicion'),
('s2', 'TV LG 43\" 4K Ultra HD Smart TV LED 43UJ6200', 7999, 'televicion'),
('s3', 'JVC LED 32\" HD Smart TV SI32HS', 4799, 'televicion'),
('s4', 'Pantalla sceptre x322b-srr 32\" + chromecast', 1975, 'televicion'),
('s5', 'Television Spectra 32  Vga Facturada', 2499, 'televicion'),
('s6', 'Hisense 40H5D Smart TV 40\"', 5699, 'televicion'),
('s7', 'Ghia TV-514 23.6\" HD Negro', 2099, 'televicion'),
('s8', 'Hisense 32H3D', 2999, 'televicion'),
('s9', 'Samsung 24\" LT24D310NHS/ZX', 2719, 'televicion'),
('s10', 'LG 43UK6250PUB 43\" 4K HDR Smart Tv', 9999, 'televicion'),
('s11', 'smart tv led Samsung un50mu6103fxzx', 8999, 'televicion'),
('s12', 'LG 43lj5500 43\" Smart Tv', 6940, 'televicion'),
('m0', 'Pioneer - Minicomponente X-CM56W ', 5498, 'bocinas'),
('m1', 'LG - Minicomponente X Boom OJ98 ', 11998, 'bocinas'),
('m2', 'Pioneer - Minicomponente X-CM56B ', 5499, 'bocinas'),
('m3', 'LG - Minicomponente X Boom CJ45 ', 2990, 'bocinas'),
('m4', 'LG - Minicomponente One Body OM4560', 3849, 'bocinas'),
('m5', 'Panasonic - Minicomponente Onebody SC-UA70 ', 12999, 'bocinas'),
('m6', 'Sony - Minicomponente con Bluetooth y NFC MHC-V50D', 6999, 'bocinas'),
('v0', 'Consola Nintendo Nes Classic Edition', 2399, 'videojuegos'),
('v1', 'Nintendo Switch Joy-con 32gb', 7005, 'videojuegos'),
('v2', 'Consola super nintendo clasic mini ', 596, 'videojuegos'),
('v3', 'My Arcade Mini Consola Retro - Burguer Time Edition ', 1948, 'videojuegos'),
('v4', 'PlayStation Consola PS4 1 TB', 7699, 'videojuegos'),
('v5', 'PSega Consola Clasica Genesis', 999, 'videojuegos'),
('v6', 'Consola Nintendo 2ds Ocarina Of Time', 2399, 'videojuegos'),
('v7', 'Consola Xbox One 1 TB', 4599, 'videojuegos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `ciudad` varchar(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `postal` int(9) NOT NULL,
  `f_nacimiento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `targeta` int(10) NOT NULL,
  `tipo_t` enum('Banorte','Banamex','Bancomer','Santander','HSBC','Scotiabank') NOT NULL,
  `f_vencimento1` int(3) NOT NULL,
  `f_vencimento2` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
