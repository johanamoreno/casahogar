-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-11-2021 a las 05:14:58
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `casahogar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `edad` varchar(5) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`id`, `nombre`, `edad`, `foto`, `descripcion`, `tipo`) VALUES
(1, 'Luky', '9', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/mascota2.jpg?alt=media&token=ac3f63cf-9b2c-4d72-a314-6cf153e98147', 'cocker', 1),
(3, 'Piolin', '3', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/mascota1.jpg?alt=media&token=c3991aa5-c741-48bb-b846-3dd05b89da3b', 'Hermoso pajaro', 3),
(4, 'Juana', '10', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/mascota3.jpg?alt=media&token=fd029329-47cc-4d17-865d-b07066efc8ca', 'Iguana', 5),
(5, 'Flecha Veloz', '9', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/mascota4.jpg?alt=media&token=114257ed-bbe6-443b-a1bd-4f5f68fcac92', 'Caballo pura sangre', 4),
(6, 'Garfield', '3', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/mascota5.jpg?alt=media&token=350fd47f-46b3-4b58-a491-5a34a1a93ffd', 'Gato cachorros', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `precio` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `foto`, `precio`, `descripcion`, `tipo`) VALUES
(3, 'Cuido Gatos Adultos', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/cuido2.jpg?alt=media&token=b245bcc7-86c1-49f2-97ea-daad73ed66f2', 7000, 'Cuido para gatos adultos', 1),
(4, 'Cuido Gatos', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/cuido3.jpg?alt=media&token=1ddddb7e-092b-46ee-9312-e42ba635b2af', 7000, 'comida para gatos', 2),
(5, 'Comida En Lata', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/cuido4.jpg?alt=media&token=ce86d2eb-46ad-42dc-9db5-cf37c4113051', 4000, 'comida en lata para cachorros', 1),
(6, 'Cuido Para Gatos', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/cuido5.jpg?alt=media&token=514da23a-9d59-442e-b5f4-3ddb285ab349', 6000, 'cuido para gatos', 2),
(8, 'Cuido Para Perros', 'https://firebasestorage.googleapis.com/v0/b/fotoscasahogarjam.appspot.com/o/cuido1.jpg?alt=media&token=6080c1a5-795e-43c6-bf8b-c19ddd66c053', 38000, 'Cuido para perros adultos', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
