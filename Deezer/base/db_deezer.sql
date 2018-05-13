-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 13-05-2018 a las 08:26:19
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_deezer`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_albumes`
--

DROP TABLE IF EXISTS `tbl_albumes`;
CREATE TABLE IF NOT EXISTS `tbl_albumes` (
  `codigo_album` int(11) NOT NULL,
  `codigo_artista` int(11) NOT NULL,
  `codigo_genero` int(11) NOT NULL,
  `nombre_album` varchar(100) DEFAULT NULL,
  `url_imagen` varchar(500) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `cantidad_canciones` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigo_album`),
  KEY `fk_tbl_albumes_tbl_artistas_idx` (`codigo_artista`),
  KEY `fk_tbl_albumes_tbl_genero1_idx` (`codigo_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_albumes`
--

INSERT INTO `tbl_albumes` (`codigo_album`, `codigo_artista`, `codigo_genero`, `nombre_album`, `url_imagen`, `duracion`, `cantidad_canciones`) VALUES
(1, 1, 1, 'Metallica - Master of Puppets (1986)', 'music/Metallica - Master of Puppets (1986)/cover.jpg', 54, 8),
(2, 2, 2, 'ACDC - Powerage (1978)', 'music/ACDC - Powerage (1978)/cover.jpg', 50, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_artistas`
--

DROP TABLE IF EXISTS `tbl_artistas`;
CREATE TABLE IF NOT EXISTS `tbl_artistas` (
  `codigo_artista` int(11) NOT NULL,
  `nombre_artista` varchar(100) DEFAULT NULL,
  `url_imagen` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`codigo_artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_artistas`
--

INSERT INTO `tbl_artistas` (`codigo_artista`, `nombre_artista`, `url_imagen`) VALUES
(1, 'Metallica', NULL),
(2, 'AC/DC', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_canciones`
--

DROP TABLE IF EXISTS `tbl_canciones`;
CREATE TABLE IF NOT EXISTS `tbl_canciones` (
  `codigo_cancion` int(11) NOT NULL,
  `codigo_album` int(11) NOT NULL,
  `codigo_artista` int(11) NOT NULL,
  `nombre_cancion` varchar(100) DEFAULT NULL,
  `url_cancion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`codigo_cancion`),
  KEY `fk_tbl_canciones_tbl_albumes1_idx` (`codigo_album`),
  KEY `fk_tbl_canciones_tbl_artistas1_idx` (`codigo_artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_canciones`
--

INSERT INTO `tbl_canciones` (`codigo_cancion`, `codigo_album`, `codigo_artista`, `nombre_cancion`, `url_cancion`) VALUES
(1, 1, 1, 'Battery', 'music/Metallica - Master of Puppets (1986)/01 - Battery.mp3'),
(2, 1, 1, 'Master Of Puppets', 'music/Metallica - Master of Puppets (1986)/02 - Master Of Puppets.mp3'),
(3, 2, 2, 'Rock \'N\' Roll Damnation', 'music/ACDC - Powerage (1978)/01. AC DC - Rock \'N\' Roll Damnation.mp3'),
(4, 2, 2, '02. AC DC - Down Payment Blues', 'music/ACDC - Powerage (1978)/02. AC DC - Down Payment Blues.mp3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_favoritas`
--

DROP TABLE IF EXISTS `tbl_favoritas`;
CREATE TABLE IF NOT EXISTS `tbl_favoritas` (
  `codigo_favoritas` int(11) NOT NULL,
  `codigo_usuario` int(11) NOT NULL,
  `codigo_cancion` int(11) NOT NULL,
  PRIMARY KEY (`codigo_favoritas`),
  KEY `fk_tbl_favoritas_tbl_usuarios1_idx` (`codigo_usuario`),
  KEY `fk_tbl_favoritas_tbl_canciones1_idx` (`codigo_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

DROP TABLE IF EXISTS `tbl_genero`;
CREATE TABLE IF NOT EXISTS `tbl_genero` (
  `codigo_genero` int(11) NOT NULL,
  `nombre_genero` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`codigo_genero`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`codigo_genero`, `nombre_genero`) VALUES
(1, 'Metal'),
(2, 'Rock'),
(3, 'Rap'),
(4, 'Pop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipos_usuarios`
--

DROP TABLE IF EXISTS `tbl_tipos_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_tipos_usuarios` (
  `codigo_tipo_usuario` int(11) NOT NULL,
  `tipo_usuario` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_tipos_usuarios`
--

INSERT INTO `tbl_tipos_usuarios` (`codigo_tipo_usuario`, `tipo_usuario`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `codigo_usuario` int(11) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `sexo` int(11) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `nombre_usuario` varchar(100) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `direccion` varchar(500) DEFAULT NULL,
  `codigopostal` varchar(45) DEFAULT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `url_imagen_perfil` varchar(100) DEFAULT NULL,
  `codigo_tipo_usuario` int(11) NOT NULL,
  PRIMARY KEY (`codigo_usuario`),
  KEY `fk_tbl_usuarios_tbl_tipos_usuarios1_idx` (`codigo_tipo_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`codigo_usuario`, `correo`, `contrasena`, `sexo`, `edad`, `nombre_usuario`, `apellido`, `fecha`, `direccion`, `codigopostal`, `ciudad`, `telefono`, `url_imagen_perfil`, `codigo_tipo_usuario`) VALUES
(1, 'admin@unah.hn', 'admin', 2, 24, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'naruo@unah.hn', 'naruto', 2, 25, 'Naruto', 'Uzumaki', NULL, NULL, NULL, NULL, NULL, NULL, 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_albumes`
--
ALTER TABLE `tbl_albumes`
  ADD CONSTRAINT `fk_tbl_albumes_tbl_artistas` FOREIGN KEY (`codigo_artista`) REFERENCES `tbl_artistas` (`codigo_artista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_albumes_tbl_genero1` FOREIGN KEY (`codigo_genero`) REFERENCES `tbl_genero` (`codigo_genero`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_canciones`
--
ALTER TABLE `tbl_canciones`
  ADD CONSTRAINT `fk_tbl_canciones_tbl_albumes1` FOREIGN KEY (`codigo_album`) REFERENCES `tbl_albumes` (`codigo_album`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_canciones_tbl_artistas1` FOREIGN KEY (`codigo_artista`) REFERENCES `tbl_artistas` (`codigo_artista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_favoritas`
--
ALTER TABLE `tbl_favoritas`
  ADD CONSTRAINT `fk_tbl_favoritas_tbl_canciones1` FOREIGN KEY (`codigo_cancion`) REFERENCES `tbl_canciones` (`codigo_cancion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_favoritas_tbl_usuarios1` FOREIGN KEY (`codigo_usuario`) REFERENCES `tbl_usuarios` (`codigo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD CONSTRAINT `fk_tbl_usuarios_tbl_tipos_usuarios1` FOREIGN KEY (`codigo_tipo_usuario`) REFERENCES `tbl_tipos_usuarios` (`codigo_tipo_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
