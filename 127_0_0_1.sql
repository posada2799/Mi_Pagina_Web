-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2026 a las 04:37:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `more_fashions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `precio` decimal(10,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `password`, `fecha_nacimiento`, `fecha_registro`) VALUES
(1, 'esteban', 'posada', 'juan.posada2799@gmail.com', '3132553477', '$2y$10$292A7KFIZgholpfB6.bRw.zsGOmIJyx.CXH86ztPXYiFJp5R3Zj56', '1999-03-27', '2026-02-27 17:24:09'),
(2, 'marina ', 'posada', 'mary22@gmail.com', '2223456543', '$2y$10$oWTjuJeR.9OfNpP9wqRQBOxfPbKUQt2rRlAng3TSDVhkZ8eViCWWi', '1995-03-02', '2026-02-27 18:14:21'),
(3, '', '', '', '', '', '0000-00-00', '2026-03-25 02:58:50'),
(8, 'edwin', 'oswaldo', 'edwin24@hotmail.com', '3132553477', '1234', '1976-02-27', '2026-03-25 03:08:17'),
(14, 'edwin', 'oswaldo', 'nuevo_test@gmail.com', '3132553477', '$2y$10$g8hZFlGvpflvRJkqLBtwrejqhKcYJyGQ1XjlnLRoDGIITkyH5uT46', '1997-03-27', '2026-03-25 03:12:31'),
(15, 'evelin', 'camila', 'camila27@gmail.com', '1234567890', '$2y$10$tNkW3qrUfdQGDtdXw5BiheGthymloAfqGPJyToSsQALupaX2m1zlS', '2001-02-27', '2026-04-23 01:10:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correo` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Base de datos: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__bookmark`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__bookmark: #1932 - Table &#039;phpmyadmin.pma__bookmark&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__bookmark: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__bookmark`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__central_columns`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__central_columns: #1932 - Table &#039;phpmyadmin.pma__central_columns&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__central_columns: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__central_columns`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__column_info`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__column_info: #1932 - Table &#039;phpmyadmin.pma__column_info&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__column_info: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__column_info`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__designer_settings`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__designer_settings: #1932 - Table &#039;phpmyadmin.pma__designer_settings&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__designer_settings: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__designer_settings`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__export_templates`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__export_templates: #1932 - Table &#039;phpmyadmin.pma__export_templates&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__export_templates: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__export_templates`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__favorite`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__favorite: #1932 - Table &#039;phpmyadmin.pma__favorite&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__favorite: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__favorite`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__history`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__history: #1932 - Table &#039;phpmyadmin.pma__history&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__history: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__history`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__navigationhiding`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__navigationhiding: #1932 - Table &#039;phpmyadmin.pma__navigationhiding&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__navigationhiding: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__navigationhiding`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__pdf_pages`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__pdf_pages: #1932 - Table &#039;phpmyadmin.pma__pdf_pages&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__pdf_pages: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__pdf_pages`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__recent`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__recent: #1932 - Table &#039;phpmyadmin.pma__recent&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__recent: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__recent`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__relation`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__relation: #1932 - Table &#039;phpmyadmin.pma__relation&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__relation: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__relation`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__savedsearches`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__savedsearches: #1932 - Table &#039;phpmyadmin.pma__savedsearches&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__savedsearches: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__savedsearches`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_coords`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__table_coords: #1932 - Table &#039;phpmyadmin.pma__table_coords&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__table_coords: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__table_coords`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_info`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__table_info: #1932 - Table &#039;phpmyadmin.pma__table_info&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__table_info: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__table_info`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__table_uiprefs`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__table_uiprefs: #1932 - Table &#039;phpmyadmin.pma__table_uiprefs&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__table_uiprefs: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__table_uiprefs`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__tracking`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__tracking: #1932 - Table &#039;phpmyadmin.pma__tracking&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__tracking: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__tracking`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__userconfig`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__userconfig: #1932 - Table &#039;phpmyadmin.pma__userconfig&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__userconfig: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__userconfig`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__usergroups`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__usergroups: #1932 - Table &#039;phpmyadmin.pma__usergroups&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__usergroups: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__usergroups`&#039; en la linea 1

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pma__users`
--
-- Error leyendo la estructura de la tabla phpmyadmin.pma__users: #1932 - Table &#039;phpmyadmin.pma__users&#039; doesn&#039;t exist in engine
-- Error leyendo datos de la tabla phpmyadmin.pma__users: #1064 - Algo está equivocado en su sintax cerca &#039;FROM `phpmyadmin`.`pma__users`&#039; en la linea 1
--
-- Base de datos: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
