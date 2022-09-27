-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 03:02:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gym`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `monto` varchar(200) NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_cierre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `edad` text NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `dpi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `id_detalles` int(200) NOT NULL,
  `id_pedido` varchar(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(100) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `imagen` varchar(2000) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `moneda` varchar(200) NOT NULL,
  `simbolo_moneda` varchar(200) NOT NULL,
  `por_dia` int(200) NOT NULL,
  `impuesto_diario` float NOT NULL,
  `impuesto_producto` float NOT NULL,
  `impuesto_planes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `direccion`, `telefono`, `imagen`, `correo`, `moneda`, `simbolo_moneda`, `por_dia`, `impuesto_diario`, `impuesto_producto`, `impuesto_planes`) VALUES
(1, 'GIMNASIO FITNESSCLUB', 'Barrio San Juan, San Agustin Ac.', '35694155', 'logo.jpg', 'fitnessclubgym@gmail.com', 'Quetzal', 'Q', 10, 1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(208, 5, 'se ha desconectado el sistema en ', '2022-09-11 10:22:38'),
(209, 13, 'se ha desconectado el sistema en ', '2022-09-11 10:22:56'),
(210, 5, 'se ha desconectado el sistema en ', '2022-09-11 11:00:22'),
(211, 13, 'se ha desconectado el sistema en ', '2022-09-11 11:01:01'),
(212, 5, 'se ha desconectado el sistema en ', '2022-09-12 19:06:40'),
(213, 5, 'se ha desconectado el sistema en ', '2022-09-12 19:10:48'),
(214, 5, 'se ha desconectado el sistema en ', '2022-09-12 21:08:58'),
(215, 5, 'se ha desconectado el sistema en ', '2022-09-12 21:10:52'),
(216, 5, 'se ha desconectado el sistema en ', '2022-09-12 21:11:15'),
(217, 5, 'se ha desconectado el sistema en ', '2022-09-12 21:17:02'),
(218, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:26:57'),
(219, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:31:58'),
(220, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:38:20'),
(221, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:41:17'),
(222, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:42:40'),
(223, 5, 'se ha desconectado el sistema en ', '2022-09-13 16:54:48'),
(224, 5, 'se ha desconectado el sistema en ', '2022-09-14 12:24:17'),
(225, 5, 'se ha desconectado el sistema en ', '2022-09-14 12:50:24'),
(226, 5, 'se ha desconectado el sistema en ', '2022-09-15 21:46:30'),
(227, 5, 'se ha desconectado el sistema en ', '2022-09-15 22:37:09'),
(228, 5, 'se ha desconectado el sistema en ', '2022-09-15 22:44:23'),
(229, 5, 'se ha desconectado el sistema en ', '2022-09-16 11:14:44'),
(230, 5, 'se ha desconectado el sistema en ', '2022-09-16 11:41:04'),
(231, 5, 'se ha desconectado el sistema en ', '2022-09-16 17:02:53'),
(232, 5, 'se ha desconectado el sistema en ', '2022-09-16 17:25:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(200) NOT NULL,
  `num_pedido` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_sesion` int(100) NOT NULL,
  `id_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id_plan` int(200) NOT NULL,
  `nombre_plan` varchar(200) NOT NULL,
  `tipo_tiempo` varchar(200) NOT NULL,
  `numero_tiempo` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `planes`
--

INSERT INTO `planes` (`id_plan`, `nombre_plan`, `tipo_tiempo`, `numero_tiempo`, `descripcion`, `precio`) VALUES
(15, 'Plan Semanal', 'dias', '7', 'Dias', '50'),
(16, 'Plan 15 Dias', 'dias', '15', 'Dias', '90'),
(17, 'Plan Mensual', 'meses', '1', 'Mes', '150');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_asistencia`
--

CREATE TABLE `plan_asistencia` (
  `id_plan_asistencia` int(200) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `plan_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_cliente`
--

CREATE TABLE `plan_cliente` (
  `id_plan_cliente` int(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_cliente` int(200) NOT NULL,
  `id_plan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_pro` int(100) NOT NULL,
  `nombre_pro` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `precio_venta` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_pro`, `nombre_pro`, `descripcion`, `unidad`, `precio_venta`, `imagen`, `stock`) VALUES
(4, 'Deporade Uva', 'Sabor Uva', '1', '5', 'DeporadeUva.png', '100'),
(5, 'Deporade Naranja', 'Sabor Naranja', '1', '5', 'DeporadeNaranja.png', '100'),
(6, 'Deporade Fresa', 'Sabor Fresa', '1', '5', 'DeporadeFresa.png', '100'),
(7, 'Deporade Chicle', 'Sabor Chicle', '1', '5', 'DeporadeChicle.png', '100'),
(8, 'Agua', 'Agua Purificada', '1', '5', 'Agua.png', '100');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `id_temporal` int(200) NOT NULL,
  `plan` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal`
--

INSERT INTO `temporal` (`id_temporal`, `plan`, `cliente`) VALUES
(1, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_pedido`
--

CREATE TABLE `temporal_pedido` (
  `id_temporal` int(200) NOT NULL,
  `id_pedido` varchar(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_productos`
--

CREATE TABLE `temporal_productos` (
  `id_temporal` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal_productos`
--

INSERT INTO `temporal_productos` (`id_temporal`, `cliente`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_ventas_dia`
--

CREATE TABLE `temporal_ventas_dia` (
  `id_temporal` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal_ventas_dia`
--

INSERT INTO `temporal_ventas_dia` (`id_temporal`, `cliente`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `imagen`, `tipo`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(5, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', 'admin.png', 'administrador', 'Misael ', 'Moran', '30880832', 'misamora1661@gmail.com'),
(14, 'Instructor', 'a1Bz20ydqelm8m1wql175cca0310b93021a7d3cfb3e4877ab6', 'empleado.png', 'empleado', 'Ronald', 'De Leon', '40641772', 'instructor@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_diaria`
--

CREATE TABLE `venta_diaria` (
  `id_venta_diaria` int(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`id_detalles`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `plan_asistencia`
--
ALTER TABLE `plan_asistencia`
  ADD PRIMARY KEY (`id_plan_asistencia`);

--
-- Indices de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  ADD PRIMARY KEY (`id_plan_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_pedido`
--
ALTER TABLE `temporal_pedido`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_productos`
--
ALTER TABLE `temporal_productos`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_ventas_dia`
--
ALTER TABLE `temporal_ventas_dia`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta_diaria`
--
ALTER TABLE `venta_diaria`
  ADD PRIMARY KEY (`id_venta_diaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  MODIFY `id_detalles` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `plan_asistencia`
--
ALTER TABLE `plan_asistencia`
  MODIFY `id_plan_asistencia` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  MODIFY `id_plan_cliente` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temporal_pedido`
--
ALTER TABLE `temporal_pedido`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `temporal_productos`
--
ALTER TABLE `temporal_productos`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temporal_ventas_dia`
--
ALTER TABLE `temporal_ventas_dia`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `venta_diaria`
--
ALTER TABLE `venta_diaria`
  MODIFY `id_venta_diaria` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
