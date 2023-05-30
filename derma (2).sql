-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2023 a las 19:14:04
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `derma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `subtotal_cart` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_usuario`, `id_producto`, `cantidad`, `subtotal_cart`) VALUES
(35, 56, 5, 1, 700),
(10, 2, 2, 4, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `mensaje` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nombre`, `correo`, `mensaje`) VALUES
(3, 'awda', 'as@gmail.com', 's'),
(4, 'awda', 'as@gmail.com', 's'),
(5, 'awda', 'as@gmail.com', 'mdoinmda'),
(6, 'awda', 'as@gmail.com', 'mdoinmda'),
(7, 'said', 'said557@outlook.es', 'ass'),
(8, 'said', 'sa@gmail.com', 'asd1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consulta`
--

CREATE TABLE `consulta` (
  `id_consulta` int(11) NOT NULL,
  `identificacion` varchar(100) NOT NULL,
  `edad` varchar(20) NOT NULL,
  `telefono` varchar(40) NOT NULL,
  `enfermedades` varchar(100) NOT NULL,
  `medicamentos` varchar(120) NOT NULL,
  `antecedentes` varchar(80) NOT NULL,
  `alergias` varchar(90) NOT NULL,
  `motivo` varchar(90) NOT NULL,
  `tratamiento` varchar(90) NOT NULL,
  `vacuna` varchar(90) NOT NULL,
  `cita` varchar(120) NOT NULL,
  `estatus` varchar(40) NOT NULL,
  `fecha` date DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `consulta`
--

INSERT INTO `consulta` (`id_consulta`, `identificacion`, `edad`, `telefono`, `enfermedades`, `medicamentos`, `antecedentes`, `alergias`, `motivo`, `tratamiento`, `vacuna`, `cita`, `estatus`, `fecha`, `id_usuario`) VALUES
(1, 'f1.jpg', '24', '2212054136', 'ninguna', 'ninguno', 'ninguno', 'ninguno', 'Dermatitis', 'minoxidil', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de mayo a las 13 pm', 'Ninguno', NULL, 44),
(2, 'f2.jpg', '24', '2212054136', 'ninguna', 'ninguno', 'ninguno', 'ninguno', 'Dermatitis', 'minoxidil', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de mayo a las 13 pm', 'Ninguno', NULL, 44),
(3, 'f2.jpg', '24', '2212054136', 'ninguna', 'ninguno', 'ninguno', 'ninguno', 'Dermatitis', 'minoxidil', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de mayo a las 13 pm', 'Oxxo', NULL, 44),
(4, 'f2.jpg', '24', '2212054136', 'ninguna', 'ninguno', 'ninguno', 'ninguno', 'Dermatitis', 'minoxidil', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de mayo a las 13 pm', 'Oxxo', NULL, 44),
(5, 'f1.jpg', '24', '2212054136', 'ninguna', 'ninguno', '', '', 'Dermatitis', '', '', '', 'Ninguno', NULL, 44),
(6, 'f1.jpg', '24', '2212054136', 'ninguna', 'ninguno', 'ninguno', '', 'Dermatitis', 'minoxidil', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de mayo a las 13 pm', 'Oxxo', NULL, 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id_cuenta` int(11) NOT NULL,
  `cuenta` int(50) NOT NULL,
  `titular` varchar(90) NOT NULL,
  `banco` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id_cuenta`, `cuenta`, `titular`, `banco`) VALUES
(1, 1234567890, 'Said Castillo Marin', 'BBVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id_dato` int(11) NOT NULL,
  `nombre` varchar(90) DEFAULT NULL,
  `apellidos` varchar(90) DEFAULT NULL,
  `telefono` bigint(40) DEFAULT NULL,
  `calle` varchar(150) DEFAULT NULL,
  `exterior` varchar(80) DEFAULT NULL,
  `interior` varchar(80) DEFAULT NULL,
  `colonia` varchar(150) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `estado` varchar(80) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id_dato`, `nombre`, `apellidos`, `telefono`, `calle`, `exterior`, `interior`, `colonia`, `cp`, `ciudad`, `estado`, `id_usuario`) VALUES
(1, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(2, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(3, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(4, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(5, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(6, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(7, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(8, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(9, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(10, 'Said', 'as', 1221910, 'dwamoka', '2123', 'adm12', 'centro', 12341, 'Tehuacan', 'Puebla', 44),
(11, 'Said', 'as', 1221910, 'dwamoka', '2123', 'adm12', 'centro', 12341, 'Tehuacan', 'Puebla', 44),
(12, 'Said', 'as', 1221910, 'dwamoka', '2123', 'adm12', 'centro', 12341, 'Tehuacan', 'Puebla', 44),
(13, 'Said', 'as', 1221910, 'dwamoka', '2123', 'adm12', 'de las flores', 12341, 'Tehuacan', 'Puebla', 44),
(14, 'Said', 'as', 1221910, 'dwamoka', '2123', 'adm12', 'de las flores', 12341, 'Tehuacan', 'Puebla', 44),
(15, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(16, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(17, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(18, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(19, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '3idaio', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(20, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(21, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(22, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', '', 64540, 'Tehuacan', '', 44),
(23, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', '', 64540, 'Tehuacan', 'Puebla', 44),
(24, '', '', 0, '', '', '', '', 0, '', '', 44),
(25, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(26, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(27, '', '', 0, '', '', '', '', 0, '', '', 44),
(28, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(29, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(30, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(31, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(32, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(33, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(34, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(35, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(36, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(37, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(38, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '3idaio', '', 64540, 'Tehuacan', '120912', 44),
(39, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'kmaodq0', 64540, 'Tehuacan', '120912', 44),
(40, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(41, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(42, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(43, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', '120912', 44),
(44, 'said', 'castillo marin', 0, '133 poniente', '2925-D', '1213912', 'awdi', 34850, 'Puebla', 'Puebla', 44),
(45, 'said', 'Castillo', 2212054136, '133 poniente', '2925-D', '2361172844', 'Centro', 64540, 'Puebla', 'Puebla', 44),
(46, 'said', 'Castillo', 2212054136, '133 poniente', '2925-D', '', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(47, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '2361172844', 'Centro', 64540, 'Puebla', 'Puebla', 44),
(48, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(49, 'said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 44),
(50, 'Said', 'Castillo Marin', 2212054136, '', '', '', '', 0, '', '', 44),
(51, 'Said', 'Castillo Marin', 2212054136, 'las flores', '16', '', 'Centro', 34850, 'Teotitlan', 'Oaxaca', 44),
(52, 'Said', 'Castillo Marin', 2212054136, 'las flores', '16', '', 'Centro', 34850, 'Teotitlan', 'Oaxaca', 44);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directo`
--

CREATE TABLE `directo` (
  `id_compra` int(11) NOT NULL,
  `cant` int(11) NOT NULL,
  `tot` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `directo`
--

INSERT INTO `directo` (`id_compra`, `cant`, `tot`, `id_usuario`, `id_producto`) VALUES
(46, 5, 1750, 44, 4),
(45, 5, 1750, 44, 4),
(44, 1, 1500, 44, 10),
(43, 1, 490, 44, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `metodo` varchar(40) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `metodo`, `id_producto`, `id_usuario`, `cantidad`, `fecha`) VALUES
(1, 'Oxxo', 4, 44, 2, '2023-05-28'),
(2, 'Oxxo', 4, 44, 3, '2023-05-28'),
(3, 'Oxxo', 6, 44, 2, '2023-05-28'),
(4, 'Oxxo', 12, 44, 1, '2023-05-28'),
(5, 'Oxxo', 12, 44, 1, '2023-05-28'),
(6, 'Oxxo', 7, 44, 1, '2023-05-28'),
(7, 'Oxxo', 8, 44, 1, '2023-05-29'),
(8, 'Oxxo', 11, 44, 4, '2023-05-29'),
(9, 'Oxxo', 5, 44, 1, '2023-05-29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `producto` varchar(64) NOT NULL,
  `imagen` varchar(64) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `resumen` varchar(64) NOT NULL,
  `precio` int(11) NOT NULL,
  `categoria` varchar(80) NOT NULL,
  `promocion` int(11) NOT NULL,
  `porcion` int(11) NOT NULL,
  `tipo` varchar(80) NOT NULL,
  `recomendaciones` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto`, `imagen`, `descripcion`, `resumen`, `precio`, `categoria`, `promocion`, `porcion`, `tipo`, `recomendaciones`, `stock`) VALUES
(3, 'Sensifine', 'aguagel.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, 'Facial', 10, 150, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 1),
(4, 'Babytop', 'babytop.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Ninguno', 50, 1, 'Pieza', 'Duis pretium erat lobortis nisi elementum efficitur.', 3),
(5, 'Bellageno', 'bellageno.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 700, 'Corporal', 0, 225, 'g', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
(6, 'Sun Secure', 'bloqueador.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Facial', 10, 200, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 10),
(7, 'FotoProtector Fusion Gel ISDIN', 'fusionsport.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 400, 'Cabello', 20, 250, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 10),
(8, 'Minoxidil', 'minoxidil.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 300, 'Cabello', 10, 100, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 15),
(9, 'ProtexSOL', 'protex.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Nutracéuticos', 50, 125, 'g', 'Duis pretium erat lobortis nisi elementum efficitur.', 3),
(10, 'Smart Party', 'smart party.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1500, 'Ninguno', 0, 1, 'Pieza', 'Duis pretium erat lobortis nisi elementum efficitur.', 2),
(11, 'InCellium', 'spray.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, 'Nutracéuticos', 0, 250, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
(12, 'Topialyse', 'topialyse.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 490, 'Cabello', 0, 200, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(64) NOT NULL,
  `correo` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `roll` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo`, `password`, `roll`) VALUES
(1, 'Doctora', 'doctora@gmail.com', 'doctora12345', 1),
(2, 'said', 'thecookie777@gmail.com', 'said12345', 0),
(47, 'mohamed', 'ggg@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(46, 'mohamed', 'ggh@gmail.com', '0df912d43218e9da7ef5df65134a553680cdd53f', 0),
(45, 'mohamed', 'mo@gmail.com', 'd377cab9e1bf664dca92361d16c7ec87f8198922', 0),
(43, 'said', 'said2@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(42, 'said', 'said1@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(41, 'said', 'jejeje@gmail.com', '3befc96b274b06f4d529b167f3f5bfb041606e50', 0),
(40, 'said', 'jeje@gmai.com', '3befc96b274b06f4d529b167f3f5bfb041606e50', 0),
(39, 'said', 'gg@gmail.com', 'ff7c4f776e7ceed9da3b33700fab9124660d476d', 0),
(38, 'said', 'qq@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(37, 'sasasaasa', 'q@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(36, 'sasasa', 'w@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(35, 'asddd', 'as@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(34, 'said', 'holaaa@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(33, 'prueba', 'prueba@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(32, 'prueba', 'a1@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(44, 'said', 'said557@outlook.es', '2621c1355c00362647d7736992678ab456b45494', 0),
(31, 'saiaa', 'hola2@gmail.com', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', 0),
(48, 'mohamed', 'ali@gmai.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(49, 'mohamed', 'bb@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(50, 'mohamed', 'bb2@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(51, 'said', 'asdfg@gmail.com', '2621c1355c00362647d7736992678ab456b45494', 0),
(52, 'zaid', 'bely@gmail.com', '1a7d6dbd493f642783d8b9971500dc992f7704e9', 0),
(53, 'said castillo', 'ggs@gmail.com', 'a873b4a5e7f5f40f9b8274db2718b0d9bbf82d59', 0),
(54, 'claudia', 'claudia@gmail.com', '1a7d6dbd493f642783d8b9971500dc992f7704e9', 0),
(55, 'caludia', 'claudia2@gmail.com', '1a7d6dbd493f642783d8b9971500dc992f7704e9', 0),
(56, 'Emmanuel', 'hola@gmail.com', '1fb10b98df5e0c7df18c82924fdad0ff97514bab', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `consulta`
--
ALTER TABLE `consulta`
  ADD PRIMARY KEY (`id_consulta`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id_dato`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `directo`
--
ALTER TABLE `directo`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `directo`
--
ALTER TABLE `directo`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
