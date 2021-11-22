-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 13:29:59
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pulpito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `img_link` text NOT NULL,
  `descripcion` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `obras`
--

INSERT INTO `obras` (`id`, `nombre`, `img_link`, `descripcion`, `link`) VALUES
(1, 'Happy Together', 'https://variety.com/wp-content/uploads/2017/10/rexfeatures_5867685c.jpg', 'Película sobre una pareja gay que llega a Argentina desde Hong Kong buscando una mejor vida. Dirigida por Wong Kar-wai.', 'https://www.youtube.com/watch?v=5VPvFaAWX9U'),
(2, 'Naruto cumpliendo su sueño', 'https://pm1.narvii.com/6996/6da8df2f295459581959007c08d806969919ef06r1-1250-1808v2_hq.jpg', 'En la imagen podemos apreciar a un papucho cumpliendo su sueño que tuvo desde muy pequeño', 'Link: https://www.youtube.com/watch?v=lyLofKyC6kw\r\n'),
(3, 'Koe no katachi', 'https://cl.buscafs.com/www.tomatazos.com/public/uploads/images/142036/142036_800x1200.jpg', 'Es una película sobre un estudiante de primaria sorda, en donde le hacen bullying sus nuevo compañeros de escuela', 'https://es.wikipedia.org/wiki/Koe_no_Katachi_(pel%C3%ADcula)'),
(4, 'Train to busan', 'https://i.blogs.es/37d099/train-to-busan-poster/1366_2000.jpg', 'Un virus se expande por Corea del Sur, zombificando a los infectados, los pasajeros de un tren intentarán sobrevivir hasta llegar a Busan', 'Link: https://www.youtube.com/watch?v=B24RcWTh6zo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_usuario`, `contrasenia`) VALUES
(16, 'nike', '41fd220f05ed0d8c56e3b83af87d45d7'),
(17, 'adidas', '28a34010e84b881fb087359c7e280a08'),
(18, 'puma', 'd9f32436125b47e03d11fbf1fa62424a'),
(19, 'kappa', 'fe1480ff8b6ed22e7723cda0145ef23d'),
(20, 'goku', 'bef27466a245ce3ec692bd25409c2549'),
(21, 'brandon', 'fc275ac3498d6ab0f0b4389f8e94422c'),
(22, 'gary', '03b083fd0aadc8883198881ba88111ab');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
