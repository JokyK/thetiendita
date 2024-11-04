-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2024 a las 22:57:14
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
-- Base de datos: `tienditadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `dui` char(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `sexo` char(1) NOT NULL,
  `direccion` varchar(40) NOT NULL,
  `telefono` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`dui`, `nombre`, `apellido`, `sexo`, `direccion`, `telefono`) VALUES
('12345678-9', 'Juan', 'Pérez', 'M', 'Avenida La Libertad, San Salvador', '77412345'),
('13579246-0', 'Carlos', 'Hernández', 'M', 'Calle Las Flores, San Miguel', '77987654'),
('14725836-4', 'Sofía', 'Reyes', 'F', 'Calle San Antonio, San Salvador', '77654321'),
('24681357-2', 'Laura', 'López', 'F', 'Avenida 25 de Enero, San Salvador', '77876543'),
('25896314-5', 'Diego', 'Castillo', 'M', 'Avenida Monseñor Romero, San Salvador', '77787654'),
('32145698-3', 'Andrés', 'Martínez', 'M', 'Calle Los Heroes, San Salvador', '77567890'),
('36925814-0', 'Valeria', 'Maldonado', 'F', 'Calle 12 de Octubre, San Salvador', '77965432'),
('65432109-8', 'Ana', 'Ramírez', 'F', 'Calle La Paz, San Salvador', '77412356'),
('78945612-3', 'José', 'Torres', 'M', 'Calle Cuarta, Santa Tecla', '77345678'),
('98765432-1', 'María', 'González', 'F', 'Calle del Sol, Santa Tecla', '77454321');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `num_factura` varchar(5) NOT NULL,
  `nrc_proveedor` char(10) NOT NULL,
  `cod_producto` char(5) NOT NULL,
  `fecha_compra` date NOT NULL,
  `cantidad` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`num_factura`, `nrc_proveedor`, `cod_producto`, `fecha_compra`, `cantidad`) VALUES
('F001', 'NRC001234', 'P001', '2024-09-20', 3),
('F002', 'NRC001235', 'P002', '2024-09-21', 10),
('F003', 'NRC001236', 'P003', '2024-09-22', 5),
('F004', 'NRC001237', 'P004', '2024-09-23', 2),
('F005', 'NRC001238', 'P005', '2024-09-24', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `cod_producto` char(5) NOT NULL,
  `nombre_producto` varchar(25) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `cantidad` smallint(6) NOT NULL,
  `precio` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`cod_producto`, `nombre_producto`, `descripcion`, `cantidad`, `precio`) VALUES
('P001', 'Laptop', 'Laptop con 16GB RAM', 10, 1200),
('P002', 'Mouse', 'Mouse inalámbrico', 25, 25),
('P003', 'Teclado', 'Teclado mecánico', 15, 80),
('P004', 'Monitor', 'Monitor 24 pulgadas', 8, 300),
('P005', 'Impresora', 'Impresora láser', 5, 150),
('P006', 'Webcam', 'Webcam 1080p', 20, 50),
('P007', 'Microfono', 'Micrófono USB', 12, 60),
('P008', 'Pendrive', 'Pendrive 32GB', 30, 15),
('P009', 'Disco Duro', 'Disco duro externo 1TB', 7, 100),
('P010', 'Router', 'Router Wi-Fi 5', 9, 80);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `nrc` char(10) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` char(9) NOT NULL,
  `celular` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`nrc`, `nombre`, `direccion`, `email`, `telefono`, `celular`) VALUES
('NRC001234', 'Computadoras El Salvador', 'Avenida Juan Pablo II, San Salvador', 'computadoras.elsalvador@gmail.', '22650000', '78501234'),
('NRC001235', 'Tecnología y Soluciones', 'Calle 3, San Salvador', 'tecnologiasoluciones@gmail.com', '22760000', '78123456'),
('NRC001236', 'Electrodomésticos y Más', 'Avenida Central, Santa Tecla', 'electrodomesticosymas@gmail.co', '22830000', '79654321'),
('NRC001237', 'Redes y Sistemas', 'Calle San Antonio, San Salvador', 'redessistemas@gmail.com', '22340000', '79432100'),
('NRC001238', 'Mundo Digital', 'Calle La Paz, San Salvador', 'mundodigital@gmail.com', '22250000', '77432123'),
('NRC001239', 'Tecnología Global', 'Avenida 25 de Enero, San Salvador', 'tecnologiaglobal@gmail.com', '22660000', '75987654'),
('NRC001240', 'Infocomputación', 'Calle Cuarta, San Miguel', 'infocomputacion@gmail.com', '26250000', '77712345'),
('NRC001241', 'Dispositivos Avanzados', 'Calle Los Heroes, San Salvador', 'dispositivosavanzados@gmail.co', '22440000', '77654321'),
('NRC001242', 'Hardware y Software', 'Avenida Monseñor Romero, San Salvador', 'hardwaresoftware@gmail.com', '22880000', '78123457'),
('NRC001243', 'Soluciones Informáticas', 'Calle 12 de Octubre, San Salvador', 'solucionesinformaticas@gmail.c', '22630000', '77543210');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(30) NOT NULL,
  `contra` varchar(20) NOT NULL,
  `tipo` varchar(16) NOT NULL,
  `ultimo_acceso` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `contra`, `tipo`, `ultimo_acceso`) VALUES
('Angel', '1234', 'administrador', '2024-09-03 22:00:00'),
('Jhomar', '1234', 'administrador', '2024-09-04 02:01:00'),
('Katheryn', '25', 'administrador', '2024-09-04 01:46:00'),
('Lucia', '321', 'administrador', '2024-09-04 01:46:00'),
('Maria', '1234', 'usuario', '2024-09-04 01:46:00'),
('MC DONALDS', '1234', 'usuario', '2024-09-23 21:47:00'),
('Pedro', '888', 'operador', '2024-09-04 01:47:00'),
('Ramon', '999', 'operador', '2024-09-04 01:47:00'),
('Taco Bell', '1234', 'usuario', '2024-09-23 21:47:00'),
('Test', '1234', 'administrador', '2024-09-02 23:54:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `num_factura` varchar(5) NOT NULL,
  `dui` char(10) NOT NULL,
  `cod_producto` char(5) NOT NULL,
  `cantidad` smallint(6) NOT NULL,
  `fecha_venta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`num_factura`, `dui`, `cod_producto`, `cantidad`, `fecha_venta`) VALUES
('F001', '12345678-9', 'P001', 1, '2024-09-22'),
('F002', '13579246-0', 'P002', 2, '2024-09-23'),
('F003', '14725836-4', 'P003', 1, '2024-09-24'),
('F004', '24681357-2', 'P004', 1, '2024-09-24'),
('F005', '25896314-5', 'P005', 1, '2024-09-24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`dui`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`num_factura`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `nrc_proveedor` (`nrc_proveedor`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`cod_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`nrc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`num_factura`),
  ADD KEY `cod_producto` (`cod_producto`),
  ADD KEY `dui` (`dui`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compras_ibfk_2` FOREIGN KEY (`nrc_proveedor`) REFERENCES `proveedores` (`nrc`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`dui`) REFERENCES `cliente` (`dui`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`cod_producto`) REFERENCES `productos` (`cod_producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
