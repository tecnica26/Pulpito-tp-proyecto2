-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 14:58:48
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
  `nombre` text NOT NULL,
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
(4, 'Train to busan', 'https://i.blogs.es/37d099/train-to-busan-poster/1366_2000.jpg', 'Un virus se expande por Corea del Sur, zombificando a los infectados, los pasajeros de un tren intentarán sobrevivir hasta llegar a Busan', 'Link: https://www.youtube.com/watch?v=B24RcWTh6zo'),
(5, 'Is this it', 'https://upload.wikimedia.org/wikipedia/en/0/09/The_Strokes_-_Is_This_It_cover.png', 'Disco debut de The Strokes, banda yankee de rock. Lanzado el 30 de julio de 2001. ', 'https://www.youtube.com/watch?v=BXkm6h6uq0k'),
(6, 'EL GOL DE MARADONA A LOS INGLESES ANIME | Gol del siglo', 'https://i.ytimg.com/vi/lrP8JYdCxkE/maxresdefault.jpg', 'Nunca es mal momento para recordar el gol de Maradona a Inglaterra y más si es animado. Fue un 22/07/86 en México.', 'https://www.youtube.com/watch?v=lrP8JYdCxkE'),
(7, 'Sex education', 'https://www.amica.it/wp-content/uploads/2021/09/1-1.jpg?v=1113145', 'Serie sobre adolescentes con problemas y relaciones cambiantes que determinaran el futuro de los protagonistas y de sus sentimientos. Escenas sexuales, no faltaran, pero casi siempre con un toque de humor. Esta serie ya cuenta con 3 temporadas, mira el trailer de la ultima!', 'https://www.youtube.com/watch?v=IGqEi5FjpCI'),
(8, 'Red dead redemption 2', 'https://cdn1.epicgames.com/epic/offer/RDR2PC1227_Epic%20Games_860x1148-860x1148-b4c2210ee0c3c3b843a8de399bfe7f5c.jpg', 'El juego está ambientado en el Salvaje Oeste de América, en el año 1899. Trata sobre un forajido, que se vera envuelto en caos, debido a los conflictos que tiene su banda con el gobierno, ya que su tiempo se estaba acabando, el mundo estaba cambiando y por eso, los salvajes tenian que desaparecer.', 'https://www.youtube.com/watch?v=IjZwoOwxqtM'),
(9, 'Spider-man: Un nuevo universo', 'https://es.web.img2.acsta.net/pictures/18/10/03/19/36/5818625.jpg', 'En un universo donde Peter Parker ha muerto, un joven llamado Miles Morales es el nuevo Spider-Man. Luego, llegara otro Peter Parker de otra diemension que tratará de enseñarle a Miles como ser un mejor Spider-Man. Pero no será el único Spider Man en entrar a este universo, 4 versiones mas aparecerán y buscarán regresar a su universo antes de que toda la realidad colapse.', 'https://www.youtube.com/watch?v=-RSseKOWpEQ'),
(10, 'porcel kapito', 'data:image/jpeg;base64,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', 'el mas kapito', 'awijfaoiwfpajwfpaj');

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
(22, 'gary', '03b083fd0aadc8883198881ba88111ab'),
(23, 'admin', '7f4c1f4c2132086f9925dd679f048e72');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
