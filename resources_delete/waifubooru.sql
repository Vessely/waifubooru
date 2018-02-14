-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2018 a las 01:15:54
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `waifubooru`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ayuda`
--

CREATE TABLE `ayuda` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `problem` longtext NOT NULL,
  `date_c` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ayuda`
--

INSERT INTO `ayuda` (`id`, `name`, `email`, `problem`, `date_c`) VALUES
(1, 'alberto', 'ejkjk@gmail.com', 'rascocoamsn', '13-02-2018'),
(2, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(3, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(4, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(5, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(6, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(7, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(8, 'Alberto Ocaranza', 'ocalbernza@gmail.com', 'Â¿Para cuando estarÃ¡ lista la secciÃ³n de imagenes?', '13-02-2018'),
(9, 'Roberto', 'roberto@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(10, 'Roberto', 'roberto@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(11, 'Maria', 'maria@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(12, 'Maria', 'maria@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(13, 'Maria', 'maria@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(14, 'Maria', 'maria@gmail.com', 'El formulario tiende a enviarse dos veces.', '13-02-2018'),
(15, 'marina diamandis', 'marina@gmail.com', 'No existe la secciÃ³n de imagenes.', '13-02-2018'),
(16, 'marina diamandis', 'marina@gmail.com', 'No existe la secciÃ³n de imagenes.', '13-02-2018'),
(17, 'Alberto', 'ocalbernza@gmail.com', 'No existen las imagenes.', '14-02-2018');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ayuda`
--
ALTER TABLE `ayuda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
