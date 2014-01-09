-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-12-2013 a las 08:13:54
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `diccionario`
--
CREATE DATABASE IF NOT EXISTS `diccionario` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `diccionario`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE IF NOT EXISTS `datos` (
  `nombre` varchar(20) NOT NULL,
  `concepto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`nombre`, `concepto`) VALUES
('wasabi', 'Su fuerza, más que en el picor, reside en los vapores que se transmiten a lo largo de las fosas nasales y que producen una sensación de ardor.'),
('Intel Corei7', ' es una nomenclatura que designa procesadores de gama alta de la marca Intel'),
('MariaDB', 'MariaDB es un sistema de gestión de bases de datos derivado de MySQL con licencia GPL.'),
('Oracle', 'es una de las mayores compañías de software del mundo. Sus productos van desde bases de datos hasta sistemas de gestión.'),
('javascript', 'es un lenguaje de programación interpretado, dialecto del estándar ECMAScript.'),
('html', 'HyperText Markup Language («lenguaje de marcas de hipertexto»), hace referencia al lenguaje de marcado para la elaboración de páginas web.'),
('xhtml', 'Siglas del inglés eXtensible HyperText Markup Language. XHTML es básicamente HTML expresado como XML válid.'),
('c++', ' es un lenguaje de programación diseñado a mediados de los años 1980 por Bjarne Stroustrup. La intención de su creación fue el extender al exitoso lenguaje de programación C con mecanismos que permita'),
('java', 'Es un lenguaje de programación de propósito general, concurrente, orientado a objetos y basado en clases que fue diseñado específicamente para tener tan pocas dependencias de implementación como fuera'),
('Twitter', 'los mensajes son públicos, pudiendo difundirse privadamente mostrándolos únicamente a unos seguidores determinados. Los usuarios pueden tuitear desde la web del servicio, con aplicaciones oficiales ex'),
('Microblogging', 's un servicio que permite a sus usuarios enviar y publicar mensajes breves,1 generalmente solo de texto. Las opciones para el envío de los mensajes varían desde sitios web, a través de SMS, mensajería'),
('Plurk', 'es una red social y de microblogs gratuita que permite a los usuarios enviar actualizaciones (también llamadas Plurks) en forma de mensajes cortos que pueden llegar a tener una longitud de 140 caracte'),
('Google Buzz', 'fue una red social producida por Google que funcionó como añadido a Gmail. Este producto fue anunciado y lanzado el 9 de febrero de 2010.1 Se anunció su desaparición el 14 de octubre de 2011.'),
('FriendFeed', ' es un agregador en tiempo real que permite ver en un solo lugar las actualizaciones de noticias de medios y redes sociales, blogs y microblogs, así como de cualquier fuente de noticias en formatos RS'),
('Facebook', ' es un sitio web de redes sociales creado por Mark Zuckerberg y fundado junto a Eduardo Saverin, Chris Hughes y Dustin Moskovitz. Originalmente era un sitio para estudiantes de la Universidad de Harva');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
