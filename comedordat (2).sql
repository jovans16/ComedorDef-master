-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2025 a las 00:44:50
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
-- Base de datos: `comedordat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lotes`
--

CREATE TABLE `lotes` (
  `id_lote` int(10) NOT NULL,
  `numero_lote` int(10) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `cantidad_pollos` int(10) NOT NULL,
  `peso_promedio` decimal(12,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `lotes`
--

INSERT INTO `lotes` (`id_lote`, `numero_lote`, `fecha_ingreso`, `cantidad_pollos`, `peso_promedio`) VALUES
(1, 1, '2025-04-01', 6, 2),
(2, 1, '2025-04-07', 6, 2),
(3, 1, '2025-04-08', 6, 2),
(4, 10, '2025-04-08', 16, 1),
(5, 28, '2025-04-16', 33, 1),
(6, 30, '2025-04-18', 20, 4),
(7, 8, '2025-04-01', 26, 3),
(8, 4, '2025-04-06', 12, 3),
(9, 19, '2025-03-19', 50, 500),
(10, 10, '2025-03-07', 13, 1),
(11, 100, '2025-04-30', 150, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `id` int(10) NOT NULL,
  `fechaAlimentacion` date NOT NULL,
  `VecesAlimentado` int(10) NOT NULL,
  `horaAlimentado` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `fechaAlimentacion`, `VecesAlimentado`, `horaAlimentado`) VALUES
(1, '2025-04-02', 8, '14:58:18.606000'),
(2, '2025-04-30', 12, '20:00:18.606000'),
(3, '2025-04-20', 15, '16:15:18.120000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`) VALUES
(1, 'Paty', 'paty12.dsr@gmail.com', '$2y$10$gzC3U4fJA2D2OgOmwAl9fOAXLMTAoMV8pYEIUkEO/nTGccwNaGp/6'),
(2, 'Jovanni', 'jovani90.jdt@gmail.com', '$2y$10$oDsHNjyIvFu7V8m8SbVeE.nCTF3ig37qMM9uaQbTPuCUNZ.j5J3fS'),
(3, 'Lalo', 'lalo15.lemr@gmail.com', '$2y$10$hFpjq5ZDnD9H94yCV/767egnjviFc03asyqJgVqnp7jJGz.H4n9EK'),
(4, 'Naty', 'naty22.nar@gmail.com', '$2y$10$JTjvLQY/SCL3VPaJ9DYu/.dhdX7V60fCn6Yq3RAvFRW3PeBWayp3e'),
(5, 'Lalo', 'lalo20.lemr@gmail.com', '$2y$10$gK/90iHMARaf.W2Ss9m8rOVLT4x6K8VX1aUXVmYqjGjpeUns1Fb6y');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lotes`
--
ALTER TABLE `lotes`
  ADD PRIMARY KEY (`id_lote`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
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
-- AUTO_INCREMENT de la tabla `lotes`
--
ALTER TABLE `lotes`
  MODIFY `id_lote` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
