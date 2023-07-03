-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-07-2023 a las 04:37:01
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

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `nombre`, `correo`, `mensaje`) VALUES
(1, 'said', 'said@gmail.com', 'hola');

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
(1, 'INE.jpg', '24', '2212054136', 'Ninguno', 'Vitaminas', 'Ninguno', '', 'Dermatitis', 'Facial', '20 de marzo del 2021 y 20 de marzo del 2022', 'lunes 22 de junio a las 13 pm', 'Oxxo', '2023-06-05', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id_cuenta` int(20) NOT NULL,
  `cuenta` varchar(50) NOT NULL,
  `titular` varchar(90) NOT NULL,
  `banco` varchar(70) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id_cuenta`, `cuenta`, `titular`, `banco`) VALUES
(1, '0987654321234567', 'Said Castillo Marin', 'BBVA');

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
(1, 'Said', 'Castillo Marin', 2212054136, '133 poniente', '2925-D', '', 'Centro', 64540, 'Tehuacan', 'Puebla', 3),
(2, 'Said', 'castillo marin', 2212054136, '133 poniente', '2925-D', '1daw', 'Centro', 64540, 'Tehuacan', 'Puebla', 3);

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
(1, 1, 175, 3, 9);

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

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `metodo`, `id_producto`, `id_usuario`, `cantidad`, `fecha`, `status`) VALUES
(1, 'Transferencia', 5, 3, 4, '2023-06-05', 'Entregado');

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
(22, 'prueba', 'gelnettoyant.jpg', 'pakwdmai0nwdia', 'maoiwmndioandwo', 200, 'Boutique', 0, 12, 'ml', 'ioadnwmoiando', 5),
(4, 'Babytopppp', 'babytop.jpg', 'Nam mauris orci, dapibus a massa sed, sagittis dapibus ante. Praesent vitae nulla turpis. Morbi maximus, mi vitae faucibus ullamcorper, mauris dui auctor mauris, finibus lacinia mauris mi sit amet turpis.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 350, 'Ninguno', 50, 1, 'Pieza', 'Duis pretium erat lobortis nisi elementum efficitur.', 5),
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
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `correo`, `password`, `roll`) VALUES
(1, 'Said', 'said557@gmail.com', '79da43fa20c8853e460452c050b5bde1f6b47d03', 1),
(3, 'Said', 'hola@gmail.com', '1fb10b98df5e0c7df18c82924fdad0ff97514bab', 0);

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
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `consulta`
--
ALTER TABLE `consulta`
  MODIFY `id_consulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `id_cuenta` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id_dato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `directo`
--
ALTER TABLE `directo`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
