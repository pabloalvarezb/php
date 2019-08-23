-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2019 a las 21:59:54
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdregistroacademico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `RUT_ADMINISTRADOR` int(8) NOT NULL,
  `DV` varchar(1) NOT NULL,
  `NOMBRES_ADM` varchar(30) NOT NULL,
  `APELLIDOS_ADM` varchar(30) NOT NULL,
  `USUARIO` varchar(20) NOT NULL,
  `CLAVE` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`RUT_ADMINISTRADOR`, `DV`, `NOMBRES_ADM`, `APELLIDOS_ADM`, `USUARIO`, `CLAVE`) VALUES
(16843009, '4', 'Pablo', 'Alvarez', 'pablo', 'alvarez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `RUT_ALUMNO` int(8) NOT NULL,
  `DV` varchar(1) DEFAULT NULL,
  `NOMBRES` varchar(30) DEFAULT NULL,
  `APELLIDOS` varchar(30) DEFAULT NULL,
  `EDAD` int(2) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `CIUDAD` varchar(20) DEFAULT NULL,
  `PROVINCIA` varchar(20) DEFAULT NULL,
  `TELEFONO` int(9) DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `SEXO` varchar(10) DEFAULT NULL,
  `PAIS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`RUT_ALUMNO`, `DV`, `NOMBRES`, `APELLIDOS`, `EDAD`, `FECHA_NACIMIENTO`, `CIUDAD`, `PROVINCIA`, `TELEFONO`, `DIRECCION`, `SEXO`, `PAIS`) VALUES
(16843009, '4', 'Pablo', 'Alvarez', 0, '1999-04-17', 'ConcepciÃ³n', 'BiobÃ­o', 956450236, 'Anibal Pinto 36, 709', 'Masculino', 'Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_modulo`
--

CREATE TABLE `alumno_modulo` (
  `RUT_ALUMNO` int(8) NOT NULL,
  `COD_MODULO` varchar(6) NOT NULL,
  `NOTA_EVAL1` decimal(10,0) DEFAULT NULL,
  `NOTA_EVAL2` decimal(10,0) DEFAULT NULL,
  `NOTA_EVAL3` decimal(10,0) DEFAULT NULL,
  `NOTA_EX1` decimal(10,0) DEFAULT NULL,
  `NOTA_EX2` decimal(10,0) DEFAULT NULL,
  `EXAMEN` tinyint(1) DEFAULT NULL,
  `NOTA_FINAL` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `COD_CARRERA` varchar(6) NOT NULL,
  `NOMBRE_CARRERA` varchar(100) NOT NULL,
  `DESCRIPCION_CARRERA` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`COD_CARRERA`, `NOMBRE_CARRERA`, `DESCRIPCION_CARRERA`) VALUES
('asdf', 'Tecnico en Programacion', 'Carrera del area informatica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `RUT_DOCENTE` int(8) NOT NULL,
  `DV` varchar(1) DEFAULT NULL,
  `NOMBRES` varchar(30) DEFAULT NULL,
  `APELLIDOS` varchar(30) DEFAULT NULL,
  `EDAD` int(2) DEFAULT NULL,
  `FECHA_NACIMIENTO` date DEFAULT NULL,
  `CIUDAD` varchar(20) DEFAULT NULL,
  `PROVINCIA` varchar(20) DEFAULT NULL,
  `TELEFONO` int(9) DEFAULT NULL,
  `DIRECCION` varchar(30) DEFAULT NULL,
  `SEXO` varchar(10) DEFAULT NULL,
  `PROFESION` varchar(20) DEFAULT NULL,
  `POSGRADOS` varchar(20) DEFAULT NULL,
  `PAIS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`RUT_DOCENTE`, `DV`, `NOMBRES`, `APELLIDOS`, `EDAD`, `FECHA_NACIMIENTO`, `CIUDAD`, `PROVINCIA`, `TELEFONO`, `DIRECCION`, `SEXO`, `PROFESION`, `POSGRADOS`, `PAIS`) VALUES
(10843009, '4', 'Marcelo', 'Paredes', 40, '1979-08-10', 'concepcion', 'concepcion', 987450236, 'concepcion', 'Masculino', 'Ingeniero en informa', 'desconocido', 'chile'),
(17089732, '3', 'Carol', 'Alvarado', 30, '1989-08-16', 'ConcepciÃ³n', 'BiobÃ­o', 956450236, 'Anibal Pinto 36, 709', 'Femenino', 'Terapeuta', 'ninguna', 'Chile');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente_modulo`
--

CREATE TABLE `docente_modulo` (
  `RUT_DOCENTE` int(8) NOT NULL,
  `COD_MODULO` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `COD_MODULO` varchar(6) NOT NULL,
  `NOMBRE_MODULO` varchar(100) DEFAULT NULL,
  `COD_CARRERA` varchar(6) DEFAULT NULL,
  `SEMESTRE` varchar(10) DEFAULT NULL,
  `SEDE` varchar(30) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `FECHA_TERMINO` date DEFAULT NULL,
  `SALA` varchar(3) DEFAULT NULL,
  `BLOQUE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`COD_MODULO`, `NOMBRE_MODULO`, `COD_CARRERA`, `SEMESTRE`, `SEDE`, `FECHA_INICIO`, `FECHA_TERMINO`, `SALA`, `BLOQUE`) VALUES
('123', 'Taller de programacion', 'asdf', 'Segundo', 'Barros Arana', '2019-08-01', '2019-08-31', '509', 'PEV');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`RUT_ADMINISTRADOR`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`RUT_ALUMNO`),
  ADD KEY `RUT_ALUMNO` (`RUT_ALUMNO`) USING BTREE;

--
-- Indices de la tabla `alumno_modulo`
--
ALTER TABLE `alumno_modulo`
  ADD PRIMARY KEY (`RUT_ALUMNO`,`COD_MODULO`),
  ADD KEY `COD_MODULO` (`COD_MODULO`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`COD_CARRERA`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`RUT_DOCENTE`),
  ADD KEY `RUT_DOCENTE` (`RUT_DOCENTE`);

--
-- Indices de la tabla `docente_modulo`
--
ALTER TABLE `docente_modulo`
  ADD PRIMARY KEY (`RUT_DOCENTE`,`COD_MODULO`),
  ADD KEY `COD_MODULO` (`COD_MODULO`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`COD_MODULO`),
  ADD KEY `COD_MODULO` (`COD_MODULO`) USING BTREE,
  ADD KEY `COD_CARRERA_2` (`COD_CARRERA`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_modulo`
--
ALTER TABLE `alumno_modulo`
  ADD CONSTRAINT `alumno_modulo_ibfk_1` FOREIGN KEY (`RUT_ALUMNO`) REFERENCES `alumnos` (`RUT_ALUMNO`),
  ADD CONSTRAINT `alumno_modulo_ibfk_2` FOREIGN KEY (`COD_MODULO`) REFERENCES `modulos` (`COD_MODULO`);

--
-- Filtros para la tabla `docente_modulo`
--
ALTER TABLE `docente_modulo`
  ADD CONSTRAINT `docente_modulo_ibfk_1` FOREIGN KEY (`COD_MODULO`) REFERENCES `modulos` (`COD_MODULO`),
  ADD CONSTRAINT `docente_modulo_ibfk_2` FOREIGN KEY (`RUT_DOCENTE`) REFERENCES `docentes` (`RUT_DOCENTE`);

--
-- Filtros para la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD CONSTRAINT `modulos_ibfk_1` FOREIGN KEY (`COD_CARRERA`) REFERENCES `carreras` (`COD_CARRERA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
