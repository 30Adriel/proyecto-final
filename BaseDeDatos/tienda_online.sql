-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 17:42:24
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedimientoActualizarProductos` (IN `pid_producto` INT, IN `pNombre` VARCHAR(45), IN `pmarca` VARCHAR(45), IN `pprecio` DECIMAL(10,0), IN `ptalla` VARCHAR(20), IN `pcatalogo_idCATALOGO` INT)  BEGIN
update producto
set 

Nombre=pNombre,
marca=pmarca,
precio=pprecio,
talla=ptalla,
catalogo_idCATALOGO=pcatalogo_idCATALOGO
where
id_producto=pid_producto;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedimientoEliminarProductos` (IN `pid_producto` INT)  BEGIN
delete 
from producto
where id_PRODUCTO=pid_producto;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ProcedimientoInsertarProductos` (IN `id_producto` INT, IN `Nombre` VARCHAR(45), IN `marca` VARCHAR(45), IN `precio` DECIMAL(10,0), IN `talla` VARCHAR(20), IN `catalogo_idCATALOGO` INT)  BEGIN
insert into producto(id_producto,nombre,marca,precio,talla,catalogo_idCATALOGO) 
values(id_producto,nombre,marca,precio,talla,catalogo_idCATALOGO);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_ADMINISTRADOR` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `DIRECCION` varchar(45) NOT NULL,
  `TELEFONO` int(11) NOT NULL,
  `RUC` char(12) NOT NULL,
  `CORREO` varchar(45) NOT NULL,
  `CONTRASEÑA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `idCATALOGO` int(11) NOT NULL,
  `Descripción` varchar(45) NOT NULL,
  `tipo_catalogo` tinyblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_CATEGORIAS` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

CREATE TABLE `detalle_pedido` (
  `id_DETALLE_PEDIDO` int(11) NOT NULL,
  `PRODUCTO_NOMBRE` varchar(45) NOT NULL,
  `PRODUCTO_PRECIO` decimal(10,0) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `FECHA_ENTREGA` datetime NOT NULL,
  `PRODUCTO_id_PRODUCTO` int(11) NOT NULL,
  `PEDIDO_id_PEDIDO` int(11) NOT NULL,
  `ADMINISTRADOR_id_ADMINISTRADOR` int(11) NOT NULL,
  `ESTADO_id_ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_ESTADO` int(11) NOT NULL,
  `NOMBRE_ESTADO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_PEDIDO` int(11) NOT NULL,
  `FECHA` datetime NOT NULL,
  `Departamento_Envio` varchar(45) NOT NULL,
  `Distrito_Envio` varchar(45) NOT NULL,
  `Direccion_Envio` varchar(45) NOT NULL,
  `telefono_Envio` varchar(11) NOT NULL,
  `USUARIOS_id_USUARIOS` int(11) NOT NULL,
  `SISTEMA_PAGO_id_SISTEMA_PAGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_PERFIL` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `CONTRASEÑA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_PRODUCTO` int(11) NOT NULL,
  `NOMBRE` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `MARCA` varchar(45) NOT NULL,
  `PRECIO` decimal(10,0) NOT NULL,
  `DESCUENTO` decimal(10,0) DEFAULT NULL,
  `TALLA` varchar(20) DEFAULT NULL,
  `STOCK` int(11) DEFAULT NULL,
  `CATALOGO_idCATALOGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_has_categorias`
--

CREATE TABLE `producto_has_categorias` (
  `PRODUCTO_id_PRODUCTO` int(11) NOT NULL,
  `CATEGORIAS_id_CATEGORIAS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema_pago`
--

CREATE TABLE `sistema_pago` (
  `id_SISTEMA_PAGO` int(11) NOT NULL,
  `Nombre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_USUARIOS` int(11) NOT NULL,
  `NOMBRE` varchar(45) NOT NULL,
  `PERFIL_id_PERFIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_ADMINISTRADOR`);

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`idCATALOGO`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_CATEGORIAS`);

--
-- Indices de la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD PRIMARY KEY (`id_DETALLE_PEDIDO`,`PRODUCTO_id_PRODUCTO`,`PEDIDO_id_PEDIDO`,`ADMINISTRADOR_id_ADMINISTRADOR`),
  ADD KEY `fk_ORDEN_DETALLE_PRODUCTO1_idx` (`PRODUCTO_id_PRODUCTO`),
  ADD KEY `fk_ORDEN_DETALLE_PEDIDO1_idx` (`PEDIDO_id_PEDIDO`),
  ADD KEY `fk_DETALLE_PEDIDO_ADMINISTRADOR1_idx` (`ADMINISTRADOR_id_ADMINISTRADOR`),
  ADD KEY `fk_DETALLE_PEDIDO_ESTADO1_idx` (`ESTADO_id_ESTADO`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_ESTADO`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_PEDIDO`,`USUARIOS_id_USUARIOS`,`SISTEMA_PAGO_id_SISTEMA_PAGO`),
  ADD KEY `fk_ORDEN_USUARIOS1_idx` (`USUARIOS_id_USUARIOS`),
  ADD KEY `fk_ORDEN_SISTEMA_PAGO1_idx` (`SISTEMA_PAGO_id_SISTEMA_PAGO`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_PERFIL`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_PRODUCTO`),
  ADD KEY `fk_PRODUCTO_CATALOGO1_idx` (`CATALOGO_idCATALOGO`);

--
-- Indices de la tabla `producto_has_categorias`
--
ALTER TABLE `producto_has_categorias`
  ADD PRIMARY KEY (`PRODUCTO_id_PRODUCTO`,`CATEGORIAS_id_CATEGORIAS`),
  ADD KEY `fk_PRODUCTO_has_CATEGORIAS_CATEGORIAS1_idx` (`CATEGORIAS_id_CATEGORIAS`),
  ADD KEY `fk_PRODUCTO_has_CATEGORIAS_PRODUCTO1_idx` (`PRODUCTO_id_PRODUCTO`);

--
-- Indices de la tabla `sistema_pago`
--
ALTER TABLE `sistema_pago`
  ADD PRIMARY KEY (`id_SISTEMA_PAGO`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_USUARIOS`,`PERFIL_id_PERFIL`),
  ADD KEY `fk_USUARIOS_PERFIL1_idx` (`PERFIL_id_PERFIL`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pedido`
--
ALTER TABLE `detalle_pedido`
  ADD CONSTRAINT `fk_DETALLE_PEDIDO_ADMINISTRADOR1` FOREIGN KEY (`ADMINISTRADOR_id_ADMINISTRADOR`) REFERENCES `administrador` (`id_ADMINISTRADOR`),
  ADD CONSTRAINT `fk_DETALLE_PEDIDO_ESTADO1` FOREIGN KEY (`ESTADO_id_ESTADO`) REFERENCES `estado` (`id_ESTADO`),
  ADD CONSTRAINT `fk_ORDEN_DETALLE_PEDIDO1` FOREIGN KEY (`PEDIDO_id_PEDIDO`) REFERENCES `pedido` (`id_PEDIDO`),
  ADD CONSTRAINT `fk_ORDEN_DETALLE_PRODUCTO1` FOREIGN KEY (`PRODUCTO_id_PRODUCTO`) REFERENCES `producto` (`id_PRODUCTO`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_ORDEN_SISTEMA_PAGO1` FOREIGN KEY (`SISTEMA_PAGO_id_SISTEMA_PAGO`) REFERENCES `sistema_pago` (`id_SISTEMA_PAGO`),
  ADD CONSTRAINT `fk_ORDEN_USUARIOS1` FOREIGN KEY (`USUARIOS_id_USUARIOS`) REFERENCES `usuarios` (`id_USUARIOS`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `fk_PRODUCTO_CATALOGO1` FOREIGN KEY (`CATALOGO_idCATALOGO`) REFERENCES `catalogo` (`idCATALOGO`);

--
-- Filtros para la tabla `producto_has_categorias`
--
ALTER TABLE `producto_has_categorias`
  ADD CONSTRAINT `fk_PRODUCTO_has_CATEGORIAS_CATEGORIAS1` FOREIGN KEY (`CATEGORIAS_id_CATEGORIAS`) REFERENCES `categorias` (`id_CATEGORIAS`),
  ADD CONSTRAINT `fk_PRODUCTO_has_CATEGORIAS_PRODUCTO1` FOREIGN KEY (`PRODUCTO_id_PRODUCTO`) REFERENCES `producto` (`id_PRODUCTO`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_USUARIOS_PERFIL1` FOREIGN KEY (`PERFIL_id_PERFIL`) REFERENCES `perfil` (`id_PERFIL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
