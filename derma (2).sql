-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2023 a las 20:44:03
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
  `fecha` date DEFAULT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

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
(21, 'prueba2', 'f1.jpg', 'prueba', 'naiodnaiwn', 200, 'Facial', 0, 120, 'ml', 'ioadnwmoiando', 3),
(20, 'Babytoppp', 'f1.jpg', 'prueba', 'naiodnaiwn', 200, 'Facial', 0, 120, 'ml', 'ioadnwmoiando', 3),
(4, 'Babytopppp', 'babytop.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Ninguno', 50, 1, 'Pieza', 'Duis pretium erat lobortis nisi elementum efficitur.', 3),
(5, 'Bellageno', 'bellageno.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 700, 'Corporal', 0, 225, 'g', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
(6, 'Sun Secure', 'bloqueador.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Facial', 10, 200, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 9),
(7, 'FotoProtector', 'fusionsport.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, 'Cabello', 0, 250, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
(8, 'Minoxidil', 'minoxidil.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 300, 'Cabello', 10, 100, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 9),
(9, 'ProtexSOL', 'protex.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Nutracéuticos', 50, 125, 'g', 'Duis pretium erat lobortis nisi elementum efficitur.', 3),
(10, 'Smart Party', 'smart party.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1500, 'Ninguno', 0, 1, 'Pieza', 'Duis pretium erat lobortis nisi elementum efficitur.', 2),
(11, 'InCellium', 'spray.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 500, 'Nutracéuticos', 0, 250, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
(12, 'Topialyse', 'topialyse.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 490, 'Cabello', 0, 200, 'ml', 'Duis pretium erat lobortis nisi elementum efficitur.', 9);

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
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `directo`
--
ALTER TABLE `directo`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
