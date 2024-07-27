-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-07-2024 a las 07:04:19
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
-- Base de datos: `appweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `name` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `birthday` date DEFAULT NULL,
  `domicilio` varchar(50) NOT NULL,
  `matricula` varchar(8) NOT NULL,
  `user` varchar(10) NOT NULL,
  `psw` varchar(15) NOT NULL,
  `escuela` enum('CBTIS 97','CONALEP','CETIS 48','CBTIS 235','CENTRO DE EDUCACION FORESTAL') NOT NULL,
  `motivos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`name`, `apellidos`, `birthday`, `domicilio`, `matricula`, `user`, `psw`, `escuela`, `motivos`) VALUES
('jesus', 'Lucio Calvillo', '2005-10-02', 'calle 1 #683 col. Australia, Saltillo, Coahuila', '23040048', 'jesuslucio', '123321', '', 'me llamo la atencion las carreras ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
