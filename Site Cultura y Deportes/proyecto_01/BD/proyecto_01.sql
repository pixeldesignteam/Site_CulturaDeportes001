-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2016 a las 02:45:12
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_01`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombreAlumno` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `carrera` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `idBeca` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`idAlumno`, `foto`, `nombreAlumno`, `direccion`, `carrera`, `email`, `idBeca`) VALUES
(25, '13887017_10154474314769658_2710500495618788518_n.jpg', '1', '2', 'ingenieria', '3', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `a_plasticas`
--

CREATE TABLE `a_plasticas` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(10) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `baloncesto`
--

CREATE TABLE `baloncesto` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `beca`
--

CREATE TABLE `beca` (
  `idBeca` int(11) NOT NULL,
  `nombreBeca` varchar(15) NOT NULL,
  `descripcion` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b_guerra`
--

CREATE TABLE `b_guerra` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `b_salon`
--

CREATE TABLE `b_salon` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coro`
--

CREATE TABLE `coro` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_folklorica`
--

CREATE TABLE `d_folklorica` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escolta`
--

CREATE TABLE `escolta` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `futbol`
--

CREATE TABLE `futbol` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guitarra`
--

CREATE TABLE `guitarra` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historialmedico`
--

CREATE TABLE `historialmedico` (
  `idHistorial` int(11) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `enfermedades` varchar(100) NOT NULL,
  `altura` varchar(5) NOT NULL,
  `peso` varchar(5) NOT NULL,
  `tipoSangre` varchar(5) NOT NULL,
  `idAlumno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idHorario` int(11) NOT NULL,
  `hora` varchar(15) NOT NULL,
  `dia` varchar(15) NOT NULL,
  `cuatrimestre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lugar`
--

CREATE TABLE `lugar` (
  `idLugar` int(11) NOT NULL,
  `nombreLugar` varchar(20) NOT NULL,
  `direccion` int(50) NOT NULL,
  `idTaller` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mojigangas`
--

CREATE TABLE `mojigangas` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `privilegios` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `matricula`, `foto`, `nombre`, `password`, `direccion`, `telefono`, `email`, `privilegios`) VALUES
(2, 13001776, 'foto.jpg', 'aletzis', '12345', 'calle', '1234567890', 'email@email.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE `taller` (
  `idTaller` int(11) NOT NULL,
  `nombreTaller` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `idProfesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teatro`
--

CREATE TABLE `teatro` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voleibol`
--

CREATE TABLE `voleibol` (
  `id_alumno` int(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nombre_alumno` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carrera` varchar(15) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `idBeca` (`idBeca`);

--
-- Indices de la tabla `a_plasticas`
--
ALTER TABLE `a_plasticas`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `baloncesto`
--
ALTER TABLE `baloncesto`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `beca`
--
ALTER TABLE `beca`
  ADD PRIMARY KEY (`idBeca`);

--
-- Indices de la tabla `b_guerra`
--
ALTER TABLE `b_guerra`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `b_salon`
--
ALTER TABLE `b_salon`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `coro`
--
ALTER TABLE `coro`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `d_folklorica`
--
ALTER TABLE `d_folklorica`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `escolta`
--
ALTER TABLE `escolta`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `futbol`
--
ALTER TABLE `futbol`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `guitarra`
--
ALTER TABLE `guitarra`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  ADD PRIMARY KEY (`idHistorial`),
  ADD KEY `idAlumno` (`idAlumno`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idHorario`);

--
-- Indices de la tabla `lugar`
--
ALTER TABLE `lugar`
  ADD PRIMARY KEY (`idLugar`),
  ADD KEY `idTaller` (`idTaller`);

--
-- Indices de la tabla `mojigangas`
--
ALTER TABLE `mojigangas`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`);

--
-- Indices de la tabla `taller`
--
ALTER TABLE `taller`
  ADD PRIMARY KEY (`idTaller`),
  ADD KEY `idProfesor` (`idProfesor`);

--
-- Indices de la tabla `teatro`
--
ALTER TABLE `teatro`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `voleibol`
--
ALTER TABLE `voleibol`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `idAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `a_plasticas`
--
ALTER TABLE `a_plasticas`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `baloncesto`
--
ALTER TABLE `baloncesto`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `beca`
--
ALTER TABLE `beca`
  MODIFY `idBeca` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `b_guerra`
--
ALTER TABLE `b_guerra`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `b_salon`
--
ALTER TABLE `b_salon`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `coro`
--
ALTER TABLE `coro`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `d_folklorica`
--
ALTER TABLE `d_folklorica`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `escolta`
--
ALTER TABLE `escolta`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `futbol`
--
ALTER TABLE `futbol`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `guitarra`
--
ALTER TABLE `guitarra`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `historialmedico`
--
ALTER TABLE `historialmedico`
  MODIFY `idHistorial` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idHorario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lugar`
--
ALTER TABLE `lugar`
  MODIFY `idLugar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `mojigangas`
--
ALTER TABLE `mojigangas`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `taller`
--
ALTER TABLE `taller`
  MODIFY `idTaller` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `teatro`
--
ALTER TABLE `teatro`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `voleibol`
--
ALTER TABLE `voleibol`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
