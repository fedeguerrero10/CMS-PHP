-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-11-2021 a las 20:48:02
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cms`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `cat_id` int(11) NOT NULL,
  `cat_titulo` varchar(300) NOT NULL,
  `link` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`cat_id`, `cat_titulo`, `link`) VALUES
(5, 'Informacion Relevante', ''),
(6, 'Sobre Nosotros', ''),
(7, 'Contacto', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_titulo` varchar(255) NOT NULL,
  `post_autor` varchar(255) NOT NULL,
  `post_fecha` date NOT NULL,
  `post_img` text NOT NULL,
  `post_contenido` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`post_id`, `post_cat_id`, `post_titulo`, `post_autor`, `post_fecha`, `post_img`, `post_contenido`) VALUES
(5, 1, 'esta es una prueba', 'admin', '2012-11-21', 'salon2.jpg', 'esta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una pruebaesta es una prueba'),
(6, 1, 'Vuelven salones de fiestas a Córdoba con aforo y burbujas', 'admin', '2012-11-21', 'salon3.jpg', 'Los salones de fiestas ya están habilitados para funcionar en la ciudad de Córdoba con un 50% de aforo, anunció este martes la Municipalidad tras una reunión con los representantes del sector. Las fiestas serán hasta las 2 de la mañana y los salones podrán funcionar a la mitad del límite de capacidad'),
(7, 1, 'esta es una prueba', 'admin', '2012-11-21', 'imgbackground.jpg', 'La Asociación Dependientes de Eventos Sociales Privados y Afines (ADESPA) había presentado un nuevo protocolo sanitario al COE, a la espera de ser aceptado. La provincia realizó una serie de modificaciones pero aprobó las solicitudes. Sin embargo, este martes, las autoridades municipales dieron lugar a las propuestas iniciales de la asociación.\r\n\r\nDe esta manera, y de cara a las fiestas de egreso y de fin de año, los salones de fiesta podrán tener un aforo del 50%, la posibilidad de bailar en formato burbuja y una extensión horaria más extensa que la otrogada por provincia.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
