-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2022 a las 04:20:48
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
-- Base de datos: `paul`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alarma`
--

CREATE TABLE `alarma` (
  `nombre1` varchar(30) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Disparadores `alarma`
--
DELIMITER $$
CREATE TRIGGER `oscar` AFTER INSERT ON `alarma` FOR EACH ROW INSERT INTO alarma(nombre1) VALUE ("Se inserto un campo")
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetallePedido` int(11) NOT NULL,
  `idProductoFK` int(11) DEFAULT NULL,
  `cantidadProducto` int(11) NOT NULL,
  `precioProducto` double NOT NULL,
  `subtotalProducto` double NOT NULL,
  `idPedido` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idDetallePedido`, `idProductoFK`, `cantidadProducto`, `precioProducto`, `subtotalProducto`, `idPedido`) VALUES
(10, 10, 5, 50000, 20000, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilio`
--

CREATE TABLE `domicilio` (
  `idDomicilio` int(11) NOT NULL,
  `horaDomicilio` time NOT NULL,
  `estadoDomicilio` varchar(30) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idDomicilioFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `domicilio`
--

INSERT INTO `domicilio` (`idDomicilio`, `horaDomicilio`, `estadoDomicilio`, `idPedido`, `idDomicilioFK`) VALUES
(10, '21:03:13', 'activo', 10, 0),
(12, '20:33:37', 'activo', 0, 0);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `lista`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `lista` (
`codigo` int(100)
,`nombres` varchar(100)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `fechaPedido` date NOT NULL,
  `horaPedido` time NOT NULL,
  `totalPedido` double NOT NULL,
  `estadoPedido` varchar(30) NOT NULL,
  `pedidoaDomicilio` char(3) DEFAULT NULL,
  `idUsuarioFK` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`idPedido`, `fechaPedido`, `horaPedido`, `totalPedido`, `estadoPedido`, `pedidoaDomicilio`, `idUsuarioFK`) VALUES
(10, '2022-08-02', '19:38:40', 90000, 'activo', 'si', NULL),
(20, '2022-08-24', '20:23:26', 3000, 'desactivo', 'no', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `idProducto` int(11) NOT NULL,
  `descripProducto` varchar(100) DEFAULT NULL,
  `precioProducto` double DEFAULT NULL,
  `categoriaProducto` varchar(40) DEFAULT NULL,
  `estadoProducto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`idProducto`, `descripProducto`, `precioProducto`, `categoriaProducto`, `estadoProducto`) VALUES
(12, 'carne fria', 10000, 'pollo', 'en bodega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuario`
--

CREATE TABLE `rolusuario` (
  `idRolUsuario` int(11) NOT NULL,
  `descripRolUsuario` varchar(30) NOT NULL,
  `estadoRolUsuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int(100) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `clave`, `nombres`, `apellidos`, `correo`, `telefono`) VALUES
(1011087934, '1111', 'Oscar', 'Anzola', 'julian0519jimenez@gmail.com', '2075712'),
(1028660161, '2222', 'Andres Julian', 'Cordoba Ventura', 'andres.jcv678@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Estructura para la vista `lista`
--
DROP TABLE IF EXISTS `lista`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `lista`  AS SELECT `usuarios`.`codigo` AS `codigo`, `usuarios`.`nombres` AS `nombres` FROM `usuarios``usuarios`  ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idDetallePedido`);

--
-- Indices de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  ADD PRIMARY KEY (`idDomicilio`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  ADD PRIMARY KEY (`idRolUsuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `idDetallePedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `domicilio`
--
ALTER TABLE `domicilio`
  MODIFY `idDomicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `rolusuario`
--
ALTER TABLE `rolusuario`
  MODIFY `idRolUsuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1325888954;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `detallepedido_ibfk_1` FOREIGN KEY (`idDetallePedido`) REFERENCES `pedido` (`idPedido`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
