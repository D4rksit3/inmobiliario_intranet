-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-10-2024 a las 14:51:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

CREATE TABLE `alquileres` (
  `ID_Alquiler` int(11) NOT NULL,
  `ID_Propiedad` int(11) DEFAULT NULL,
  `ID_Cliente` int(11) DEFAULT NULL,
  `Fecha_Inicio` date NOT NULL,
  `Fecha_Fin` date NOT NULL,
  `Precio_Alquiler` decimal(10,2) NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`ID_Alquiler`, `ID_Propiedad`, `ID_Cliente`, `Fecha_Inicio`, `Fecha_Fin`, `Precio_Alquiler`, `Estado`) VALUES
(1, 3, 4, '2024-01-01', '2025-01-01', 150000.00, 'Activo'),
(2, 1, 2, '2024-01-20', '2024-07-20', 1000.00, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `ID_Anuncio` int(11) NOT NULL,
  `ID_Propiedad` int(11) DEFAULT NULL,
  `Descripción` text NOT NULL,
  `Fecha_Publicacion` date NOT NULL,
  `Estado` enum('Activo','Inactivo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`ID_Anuncio`, `ID_Propiedad`, `Descripción`, `Fecha_Publicacion`, `Estado`) VALUES
(1, 1, 'Apartamento en el centro', '2024-01-15', 'Activo'),
(2, 2, 'Casa con jardín amplio', '2024-01-20', 'Inactivo'),
(3, 4, 'Terreno para construcción', '2024-02-05', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_Cliente` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` varchar(20) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_Cliente`, `Nombre`, `Apellido`, `Email`, `Telefono`, `Direccion`) VALUES
(1, 'Juan', 'Pérez', 'juan.perez@email.com', '987654321', 'Calle Falsa 123'),
(2, 'Ana', 'Gómez', 'ana.gomez@email.com', '912345678', 'Avenida Siempre Viva 456'),
(3, 'Luis', 'Martínez', 'luis.martinez@email.com', '934567890', 'Calle Comercio 789'),
(4, 'María', 'Rodríguez', 'maria.rodriguez@email.com', '911223344', 'Calle Verde 321'),
(19, 'asdasd', 'asdasd', 'ancymye5@gamefox.net', '987654332', 'ad131');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedades`
--

CREATE TABLE `propiedades` (
  `ID_Propiedad` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Dirección` varchar(255) NOT NULL,
  `Precio` decimal(10,2) NOT NULL,
  `Descripción` text DEFAULT NULL,
  `Estado` enum('Disponible','Vendido','Alquilado') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propiedades`
--

INSERT INTO `propiedades` (`ID_Propiedad`, `Tipo`, `Dirección`, `Precio`, `Descripción`, `Estado`) VALUES
(1, 'Apartamento', 'Calle Falsa 123', 150000.00, 'Apartamento en el centro', 'Disponible'),
(2, 'Casa', 'Avenida Siempre Viva 456', 250000.00, 'Casa con jardín amplio', 'Vendido'),
(3, 'Local Comercial', 'Calle Comercio 789', 200000.00, 'Local en zona comercial', 'Alquilado'),
(4, 'Terreno', 'Calle Verde 321', 100000.00, 'Terreno para construcción', 'Disponible'),
(9, 'qqqqq', 'asdsd', 2423.00, 'sdzfs', 'Disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `ID_Venta` int(11) NOT NULL,
  `ID_Propiedad` int(11) DEFAULT NULL,
  `ID_Cliente` int(11) DEFAULT NULL,
  `Fecha` date NOT NULL,
  `Precio_Venta` decimal(10,2) NOT NULL,
  `Estado` enum('Completada','Pendiente') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`ID_Venta`, `ID_Propiedad`, `ID_Cliente`, `Fecha`, `Precio_Venta`, `Estado`) VALUES
(1, 2, 1, '2024-01-15', 250000.00, 'Completada'),
(2, 3, 2, '2024-02-10', 200000.00, 'Completada'),
(3, 1, 3, '2024-03-05', 150000.00, 'Pendiente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD PRIMARY KEY (`ID_Alquiler`),
  ADD KEY `ID_Propiedad` (`ID_Propiedad`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`ID_Anuncio`),
  ADD KEY `ID_Propiedad` (`ID_Propiedad`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_Cliente`);

--
-- Indices de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  ADD PRIMARY KEY (`ID_Propiedad`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`ID_Venta`),
  ADD KEY `ID_Propiedad` (`ID_Propiedad`),
  ADD KEY `ID_Cliente` (`ID_Cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquileres`
--
ALTER TABLE `alquileres`
  MODIFY `ID_Alquiler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `ID_Anuncio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_Cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `propiedades`
--
ALTER TABLE `propiedades`
  MODIFY `ID_Propiedad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `ID_Venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `alquileres_ibfk_1` FOREIGN KEY (`ID_Propiedad`) REFERENCES `propiedades` (`ID_Propiedad`),
  ADD CONSTRAINT `alquileres_ibfk_2` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`);

--
-- Filtros para la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`ID_Propiedad`) REFERENCES `propiedades` (`ID_Propiedad`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`ID_Propiedad`) REFERENCES `propiedades` (`ID_Propiedad`),
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`ID_Cliente`) REFERENCES `clientes` (`ID_Cliente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
