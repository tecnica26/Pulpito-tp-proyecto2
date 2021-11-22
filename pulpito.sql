-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2021 a las 20:00:34
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

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
(9, 'Spider-man: Un nuevo universo', 'https://es.web.img2.acsta.net/pictures/18/10/03/19/36/5818625.jpg', 'En un universo donde Peter Parker ha muerto, un joven llamado Miles Morales es el nuevo Spider-Man. Luego, llegara otro Peter Parker de otra diemension que tratará de enseñarle a Miles como ser un mejor Spider-Man. Pero no será el único Spider Man en entrar a este universo, 4 versiones mas aparecerán y buscarán regresar a su universo antes de que toda la realidad colapse.', 'https://www.youtube.com/watch?v=-RSseKOWpEQ');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
