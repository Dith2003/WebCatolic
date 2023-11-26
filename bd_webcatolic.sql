-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-11-2023 a las 18:30:59
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_webcatolic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `Id_actividad` int(11) NOT NULL,
  `Actividad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `Id_administrador` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido_Paterno` varchar(50) DEFAULT NULL,
  `Apellido_Materno` varchar(50) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `Id_alumno` int(11) NOT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncio`
--

CREATE TABLE `anuncio` (
  `Id_anuncio` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `Fecha_de_creacion` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `contenido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arch_alumno`
--

CREATE TABLE `arch_alumno` (
  `Id` int(11) NOT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Id_proceso` int(11) DEFAULT NULL,
  `Archivo_nombre` varchar(100) DEFAULT NULL,
  `Archivo_ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arch_padrinos`
--

CREATE TABLE `arch_padrinos` (
  `Id` int(11) NOT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Id_proceso` int(11) DEFAULT NULL,
  `Archivo_nombre` varchar(100) DEFAULT NULL,
  `Archivo_ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arch_tutor`
--

CREATE TABLE `arch_tutor` (
  `Id` int(11) NOT NULL,
  `Id_usuario` int(11) DEFAULT NULL,
  `Id_proceso` int(11) DEFAULT NULL,
  `Archivo_nombre` varchar(100) DEFAULT NULL,
  `Archivo_ruta` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `Id_asistencia` int(11) NOT NULL,
  `Id_actividad` int(11) DEFAULT NULL,
  `Id_catequista` int(11) DEFAULT NULL,
  `Id_alumno` int(11) DEFAULT NULL,
  `Asistencia` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catequista`
--

CREATE TABLE `catequista` (
  `Id_catequista` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellidos` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripciones`
--

CREATE TABLE `inscripciones` (
  `Id_inscripciones` int(11) NOT NULL,
  `DT_nombre` varchar(50) DEFAULT NULL,
  `DT_Apellidos` varchar(100) DEFAULT NULL,
  `DT_Domicilio` varchar(255) DEFAULT NULL,
  `DT_Telefono` int(10) DEFAULT NULL,
  `DT_Email` varchar(100) DEFAULT NULL,
  `DA_Nombre` varchar(50) DEFAULT NULL,
  `DA_Apellidos` varchar(100) DEFAULT NULL,
  `DA_Edad` int(11) DEFAULT NULL,
  `DA_Sexo` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `Id_noticias` int(11) NOT NULL,
  `titulo` varchar(100) DEFAULT NULL,
  `Fecha_de_creacion` date DEFAULT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  `contenido` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proceso`
--

CREATE TABLE `proceso` (
  `Id_proceso` int(11) NOT NULL,
  `proceso` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Id_usuario` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido_Paterno` varchar(50) DEFAULT NULL,
  `Apellido_Materno` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`Id_actividad`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`Id_administrador`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`Id_alumno`),
  ADD KEY `Id_usuario` (`Id_usuario`);

--
-- Indices de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  ADD PRIMARY KEY (`Id_anuncio`);

--
-- Indices de la tabla `arch_alumno`
--
ALTER TABLE `arch_alumno`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_proceso` (`Id_proceso`);

--
-- Indices de la tabla `arch_padrinos`
--
ALTER TABLE `arch_padrinos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_proceso` (`Id_proceso`);

--
-- Indices de la tabla `arch_tutor`
--
ALTER TABLE `arch_tutor`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_usuario` (`Id_usuario`),
  ADD KEY `Id_proceso` (`Id_proceso`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`Id_asistencia`),
  ADD KEY `Id_actividad` (`Id_actividad`),
  ADD KEY `Id_catequista` (`Id_catequista`),
  ADD KEY `Id_alumno` (`Id_alumno`);

--
-- Indices de la tabla `catequista`
--
ALTER TABLE `catequista`
  ADD PRIMARY KEY (`Id_catequista`);

--
-- Indices de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  ADD PRIMARY KEY (`Id_inscripciones`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`Id_noticias`);

--
-- Indices de la tabla `proceso`
--
ALTER TABLE `proceso`
  ADD PRIMARY KEY (`Id_proceso`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `Id_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `Id_administrador` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `Id_alumno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `anuncio`
--
ALTER TABLE `anuncio`
  MODIFY `Id_anuncio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `arch_alumno`
--
ALTER TABLE `arch_alumno`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `arch_padrinos`
--
ALTER TABLE `arch_padrinos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `arch_tutor`
--
ALTER TABLE `arch_tutor`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `Id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `catequista`
--
ALTER TABLE `catequista`
  MODIFY `Id_catequista` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inscripciones`
--
ALTER TABLE `inscripciones`
  MODIFY `Id_inscripciones` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `Id_noticias` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proceso`
--
ALTER TABLE `proceso`
  MODIFY `Id_proceso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`);

--
-- Filtros para la tabla `arch_alumno`
--
ALTER TABLE `arch_alumno`
  ADD CONSTRAINT `arch_alumno_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`),
  ADD CONSTRAINT `arch_alumno_ibfk_2` FOREIGN KEY (`Id_proceso`) REFERENCES `proceso` (`Id_proceso`);

--
-- Filtros para la tabla `arch_padrinos`
--
ALTER TABLE `arch_padrinos`
  ADD CONSTRAINT `arch_padrinos_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`),
  ADD CONSTRAINT `arch_padrinos_ibfk_2` FOREIGN KEY (`Id_proceso`) REFERENCES `proceso` (`Id_proceso`);

--
-- Filtros para la tabla `arch_tutor`
--
ALTER TABLE `arch_tutor`
  ADD CONSTRAINT `arch_tutor_ibfk_1` FOREIGN KEY (`Id_usuario`) REFERENCES `usuario` (`Id_usuario`),
  ADD CONSTRAINT `arch_tutor_ibfk_2` FOREIGN KEY (`Id_proceso`) REFERENCES `proceso` (`Id_proceso`);

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`Id_actividad`) REFERENCES `actividad` (`Id_actividad`),
  ADD CONSTRAINT `asistencia_ibfk_2` FOREIGN KEY (`Id_catequista`) REFERENCES `catequista` (`Id_catequista`),
  ADD CONSTRAINT `asistencia_ibfk_3` FOREIGN KEY (`Id_alumno`) REFERENCES `alumno` (`Id_alumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
