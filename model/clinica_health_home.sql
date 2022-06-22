-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2022 a las 18:58:21
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_health_home`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_sistema`
--

CREATE TABLE `admin_sistema` (
  `user` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `rol` int(11) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admin_sistema`
--

INSERT INTO `admin_sistema` (`user`, `pass`, `rol`, `creacion`, `actualizacion`, `delete`) VALUES
('juan', '1234', 4, '2022-05-19 16:36:59.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliares_admin`
--

CREATE TABLE `auxiliares_admin` (
  `id_aux` bigint(8) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `auxiliares_admin`
--

INSERT INTO `auxiliares_admin` (`id_aux`, `creacion`, `actualizacion`, `delete`) VALUES
(5, '0000-00-00 00:00:00.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id_cita` bigint(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `hora_cita` time NOT NULL,
  `estado_pago_cita` tinyint(1) NOT NULL,
  `asistencia_cita` tinyint(1) NOT NULL,
  `id_prof` bigint(8) NOT NULL,
  `id_pac` bigint(8) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id_cita`, `fecha_cita`, `hora_cita`, `estado_pago_cita`, `asistencia_cita`, `id_prof`, `id_pac`, `creacion`, `actualizacion`, `delete`) VALUES
(2, '0000-00-00', '04:38:00', 0, 0, 4, 3, '2022-05-19 16:37:55.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultorios`
--

CREATE TABLE `consultorios` (
  `id_consult` varchar(3) NOT NULL,
  `estado_consult` tinyint(1) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `consultorios`
--

INSERT INTO `consultorios` (`id_consult`, `estado_consult`, `creacion`, `actualizacion`, `delete`) VALUES
('C01', 1, '2022-05-13 17:10:24.000000', NULL, NULL),
('C02', 1, '2022-05-13 17:12:05.000000', NULL, NULL),
('C03', 1, '2022-05-13 17:12:21.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `id_espec` tinyint(2) NOT NULL,
  `descrip_espec` varchar(30) NOT NULL,
  `costo_espec` int(6) NOT NULL,
  `estado_espec` tinyint(1) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id_espec`, `descrip_espec`, `costo_espec`, `estado_espec`, `creacion`, `actualizacion`, `delete`) VALUES
(1, 'Medicina general ', 50000, 1, '2022-05-13 17:25:27.000000', NULL, NULL),
(2, 'Odontología ', 70000, 1, '2022-05-13 17:25:27.000000', NULL, NULL),
(3, 'Dermatología ', 60000, 1, '2022-05-13 17:26:43.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_pac` bigint(8) NOT NULL,
  `genero` char(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_pac`, `genero`, `fecha_nacimiento`, `creacion`, `actualizacion`, `delete`) VALUES
(3, 'm', '2022-05-10', '2022-05-19 16:33:17.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_pers` bigint(8) NOT NULL,
  `t_doc_pers` varchar(5) NOT NULL,
  `num_doc_pers` varchar(20) NOT NULL,
  `rol` int(11) NOT NULL,
  `p_nombre_pers` varchar(20) NOT NULL,
  `s_nombre_pers` varchar(20) DEFAULT NULL,
  `p_apellido_pers` varchar(20) NOT NULL,
  `s_apellido_pers` varchar(20) DEFAULT NULL,
  `tel_pers` bigint(10) NOT NULL,
  `correo_pers` varchar(30) NOT NULL,
  `estado_pers` tinyint(1) NOT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_pers`, `t_doc_pers`, `num_doc_pers`, `rol`, `p_nombre_pers`, `s_nombre_pers`, `p_apellido_pers`, `s_apellido_pers`, `tel_pers`, `correo_pers`, `estado_pers`, `pass`, `creacion`, `actualizacion`, `delete`) VALUES
(3, 'CC', '1001096345', 3, 'Estevan ', NULL, 'Hernandez ', NULL, 3158160563, 'gerardogeet@hotmail.com ', 1, '1234', '2022-05-19 16:25:47.000000', NULL, NULL),
(4, 'CC', '1023002526', 1, 'Manuel ', NULL, 'Rodolfo ', NULL, 3212900450, 'rasquinbol@outlook.com', 1, '1234', '2022-05-19 16:25:47.000000', NULL, NULL),
(5, 'CE', '1000160563', 2, 'Alejandro', NULL, 'Velázquez ', NULL, 3143204068, 'alejo@chamo.com', 1, 'chamo3000', '2022-05-19 16:27:44.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesionales`
--

CREATE TABLE `profesionales` (
  `id_prof` bigint(8) NOT NULL,
  `dias_laborales` varchar(20) NOT NULL,
  `franja_horaria` varchar(20) NOT NULL,
  `id_consult` varchar(3) NOT NULL,
  `id_espec` tinyint(2) NOT NULL,
  `creacion` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `actualizacion` datetime(6) DEFAULT NULL,
  `delete` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesionales`
--

INSERT INTO `profesionales` (`id_prof`, `dias_laborales`, `franja_horaria`, `id_consult`, `id_espec`, `creacion`, `actualizacion`, `delete`) VALUES
(4, 'lunes - viernes', 'de sol a sol ', 'C01', 1, '2022-05-19 16:31:40.000000', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `descrip_rol` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `descrip_rol`) VALUES
(4, 'administrador'),
(2, 'auxiliar administrativo'),
(3, 'paciente'),
(1, 'profesional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_doc`
--

CREATE TABLE `tipo_doc` (
  `t_doc` varchar(5) NOT NULL,
  `descrip_tdoc` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_doc`
--

INSERT INTO `tipo_doc` (`t_doc`, `descrip_tdoc`) VALUES
('CC', 'Cedula de ciudadanía'),
('CE', 'Cedula de extranjería '),
('PAP', 'Pasaporte '),
('TI', 'Tarjeta de identidad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_sistema`
--
ALTER TABLE `admin_sistema`
  ADD PRIMARY KEY (`user`),
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `auxiliares_admin`
--
ALTER TABLE `auxiliares_admin`
  ADD PRIMARY KEY (`id_aux`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_prof` (`id_prof`),
  ADD KEY `id_pac` (`id_pac`);

--
-- Indices de la tabla `consultorios`
--
ALTER TABLE `consultorios`
  ADD PRIMARY KEY (`id_consult`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id_espec`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_pac`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_pers`),
  ADD KEY `t_doc_pers` (`t_doc_pers`) USING BTREE,
  ADD KEY `rol` (`rol`);

--
-- Indices de la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD PRIMARY KEY (`id_prof`),
  ADD KEY `id_consult` (`id_consult`),
  ADD KEY `id_espec` (`id_espec`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `descrip_rol` (`descrip_rol`);

--
-- Indices de la tabla `tipo_doc`
--
ALTER TABLE `tipo_doc`
  ADD PRIMARY KEY (`t_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id_cita` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id_espec` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_pers` bigint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `admin_sistema`
--
ALTER TABLE `admin_sistema`
  ADD CONSTRAINT `admin_sistema_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `auxiliares_admin`
--
ALTER TABLE `auxiliares_admin`
  ADD CONSTRAINT `auxiliares_admin_ibfk_1` FOREIGN KEY (`id_aux`) REFERENCES `personas` (`id_pers`);

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `profesionales` (`id_prof`),
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`id_pac`) REFERENCES `pacientes` (`id_pac`);

--
-- Filtros para la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD CONSTRAINT `pacientes_ibfk_1` FOREIGN KEY (`id_pac`) REFERENCES `personas` (`id_pers`);

--
-- Filtros para la tabla `personas`
--
ALTER TABLE `personas`
  ADD CONSTRAINT `personas_ibfk_1` FOREIGN KEY (`t_doc_pers`) REFERENCES `tipo_doc` (`t_doc`),
  ADD CONSTRAINT `personas_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesionales`
--
ALTER TABLE `profesionales`
  ADD CONSTRAINT `profesionales_ibfk_1` FOREIGN KEY (`id_prof`) REFERENCES `personas` (`id_pers`),
  ADD CONSTRAINT `profesionales_ibfk_2` FOREIGN KEY (`id_espec`) REFERENCES `especialidades` (`id_espec`) ON UPDATE CASCADE,
  ADD CONSTRAINT `profesionales_ibfk_3` FOREIGN KEY (`id_consult`) REFERENCES `consultorios` (`id_consult`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
