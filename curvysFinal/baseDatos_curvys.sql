-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-06-2022 a las 10:52:10
-- Versión del servidor: 10.5.12-MariaDB
-- Versión de PHP: 7.3.32

DROP DATABASE IF EXISTS id18972540_id18972541_curvys;
CREATE DATABASE id18972540_id18972541_curvys;
USE id18972540_id18972541_curvys;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id18972540_id18972541_curvys`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `IdCliente` int(11) NOT NULL,
  `nombreCliente` varchar(50) NOT NULL,
  `clienteApellido1` varchar(50) NOT NULL,
  `clienteApellido2` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `direccion1` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `codigoPostal` varchar(15) DEFAULT NULL,
  `pais` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`IdCliente`, `nombreCliente`, `clienteApellido1`, `clienteApellido2`, `telefono`, `direccion1`, `password`, `ciudad`, `codigoPostal`, `pais`) VALUES
(103, 'Pepe', 'Perez', 'Galan ', '679689477', '92, Calle Oca', 'proyectodaw', 'Madrid', '28025', 'Spain'),
(104, 'Juanito', 'Jimenez', 'Jim ', '679687477', '92, General Ricardos', 'proyectodaw1', 'Paris', '12857', 'France'),
(105, 'Jaimito', 'Rodriguez', 'Zidane ', '679697477', '15, Calle Laguna', 'proyectodaw2', 'Berlin', '849161', 'Germany');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallesPedido`
--
DROP TABLE IF EXISTS `detallesPedido`;
CREATE TABLE `detallesPedido` (
  `numeroPedido` int(11) NOT NULL,
  `codigoProducto` varchar(15) NOT NULL,
  `cantidadPedida` int(11) NOT NULL,
  `precioUnidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallesPedido`
--
INSERT INTO `detallesPedido` (`numeroPedido`, `codigoProducto`, `cantidadPedida`, `precioUnidad`) VALUES
(1, 'P00-2', 50, 55.09),
(1, 'P00-3', 30, 75.46),
(2, 'P00-3', 25, 35.09),
(4, 'P00-1', 1, 33.30),
(4, 'P00-2', 1, 33.30),
(8, 'P00-1', 1, 32.52),
(8, 'P00-3', 1, 33.30),
(9, 'P00-1', 7, 32.52),
(10, 'P00-1', 1, 32.52),
(11, 'P00-1', 1, 32.52),
(12, 'P00-45', 1, 15.66),
(12, 'P00-46', 1, 18.25),
(13, 'P00-16', 1, 22.50),
(13, 'P00-26', 1, 30.60),
(14, 'P00-45', 1, 15.66),
(14, 'P00-46', 1, 18.25),
(15, 'P00-45', 1, 15.66),
(16, 'P00-45', 1, 15.66),
(17, 'P00-46', 1, 18.25),
(18, 'P00-45', 1, 15.66),
(19, 'P00-63', 1, 32.52),
(19, 'P00-64', 1, 16.23),
(20, 'P00-48', 1, 21.60),
(21, 'P00-1', 2, 32.52),
(21, 'P00-58', 1, 50.23),
(22, 'P00-45', 1, 15.66),
(23, 'P00-45', 1, 15.66),
(23, 'P00-57', 2, 45.60),
(24, 'P00-63', 1, 32.52),
(25, 'P00-46', 1, 18.25),
(26, 'P00-27', 2, 35.52),
(27, 'P00-14', 1, 45.60),
(28, 'P00-18', 1, 56.58),
(28, 'P00-19', 1, 39.45),
(29, 'P00-17', 1, 45.69),
(30, 'P00-51', 1, 20.40),
(31, 'P00-19', 2, 39.45),
(31, 'P00-40', 1, 22.55),
(31, 'P00-41', 1, 32.55),
(32, 'P00-70', 1, 28.54),
(32, 'P00-72', 1, 26.50),
(33, 'P00-46', 2, 18.25),
(33, 'P00-49', 1, 20.05);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `IdEmpleado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`IdEmpleado`, `nombre`, `apellido`, `email`, `password`) VALUES
(1002, 'Sergio', 'Anes', 'sergio.agalann@gmail.com', 'anessergio'),
(1056, 'Maria', 'Perez', 'mariaperez@gmail.com', 'perezmaria'),
(1076, 'Miguel', 'Jimenez', 'migueljimenez@gmail.com', 'jimenezmiguel');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineasProducto`
--
DROP TABLE IF EXISTS `lineasProducto`;
CREATE TABLE `lineasProducto` (
  `lineaProducto` varchar(50) NOT NULL,
  `descripcion` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lineasProducto`
--

INSERT INTO `lineasProducto` (`lineaProducto`, `descripcion`) VALUES
('Abrigo', 'Abrigos en rebajas'),
('Camisas', 'Camisas que no marcan'),
('Camisetas', 'Maravillosas camisetas'),
('Cazadoras', 'Cazadoras entretiempo'),
('Complementos', 'Complementos dorado'),
('Faldas', 'Faldas de temporada'),
('Pantalones', 'Increibles pantalones'),
('Punto', 'Punto con estilo increible'),
('Sobrecamisas', 'Blazer a la moda'),
('Vaqueros', 'Vaqueros de lo mejor'),
('Vestidos', 'Vestidos playeros'),
('Zapatos', 'Zapatos con estilo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE `pagos` (
  `IdCliente` int(11) NOT NULL,
  `checkNumber` varchar(50) NOT NULL,
  `fechaPago` date NOT NULL,
  `cantidad` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`IdCliente`, `checkNumber`, `fechaPago`, `cantidad`) VALUES
(103, '4FL16607AP1984740', '2022-06-12', 134.00),
(103, '5NU29151E3592342V', '2022-06-12', 20.40),
(103, '6BW02123W4714680M', '2022-06-12', 55.04),
(103, 'HQ336336', '2004-10-19', 6066.78),
(103, 'JM555205', '2003-06-05', 14571.44),
(104, '8W70218773334060D', '2022-06-12', 56.55),
(104, 'OM314933', '2004-12-18', 1676.14),
(105, 'LM555205', '2012-08-09', 20214.79);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE `pedidos` (
  `numeroPedido` int(10) NOT NULL,
  `fechaPedido` date NOT NULL,
  `fechaEnvio` date DEFAULT NULL,
  `estado` varchar(15) NOT NULL,
  `precioTotal` decimal(10,2) NOT NULL,
  `IdCliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`numeroPedido`, `fechaPedido`, `fechaEnvio`, `estado`, `precioTotal`, `IdCliente`) VALUES
(1, '2022-01-06', '2022-01-10', 'Shipped', 20.50, 103),
(2, '2022-05-16', '2022-05-18', 'Shipped', 200.30, 103),
(4, '2022-06-03', NULL, 'Shipped', 66.60, 103),
(8, '2022-06-03', NULL, 'Shipped', 65.82, 103),
(9, '2022-06-03', NULL, 'Shipped', 227.64, 103),
(10, '2022-06-04', NULL, 'Shipped', 32.52, 103),
(11, '2022-06-05', NULL, 'Shipped', 32.52, 103),
(12, '2022-06-11', NULL, 'Shipped', 33.91, 103),
(13, '2022-06-12', NULL, 'Shipped', 53.10, 103),
(14, '2022-06-12', NULL, 'Shipped', 33.91, 103),
(15, '2022-06-12', NULL, 'Shipped', 15.66, 103),
(16, '2022-06-12', NULL, 'Shipped', 15.66, 103),
(17, '2022-06-12', NULL, 'Shipped', 18.25, 103),
(18, '2022-06-12', NULL, 'Shipped', 15.66, 103),
(19, '2022-06-12', NULL, 'Shipped', 48.75, 103),
(20, '2022-06-12', NULL, 'Shipped', 21.60, 103),
(21, '2022-06-12', NULL, 'Shipped', 115.27, 103),
(22, '2022-06-12', NULL, 'Shipped', 15.66, 103),
(23, '2022-06-12', NULL, 'Shipped', 106.86, 103),
(24, '2022-06-12', NULL, 'Shipped', 32.52, 103),
(25, '2022-06-12', NULL, 'Shipped', 18.25, 103),
(26, '2022-06-12', NULL, 'Shipped', 71.04, 103),
(27, '2022-06-12', NULL, 'Shipped', 45.60, 103),
(28, '2022-06-12', NULL, 'Shipped', 96.03, 103),
(29, '2022-06-12', NULL, 'Shipped', 45.69, 103),
(30, '2022-06-12', NULL, 'Shipped', 20.40, 103),
(31, '2022-06-12', NULL, 'Shipped', 134.00, 103),
(32, '2022-06-12', NULL, 'Shipped', 55.04, 103),
(33, '2022-06-12', NULL, 'Shipped', 56.55, 104);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--
DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `codigoProducto` varchar(10) NOT NULL,
  `nombreProducto` varchar(70) NOT NULL,
  `lineaProducto` varchar(50) NOT NULL,
  `descripcionProducto` text NOT NULL,
  `cantidadStock` smallint(6) NOT NULL,
  `precioCompra` decimal(10,2) NOT NULL,
  `img` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoProducto`, `nombreProducto`, `lineaProducto`, `descripcionProducto`, `cantidadStock`, `precioCompra`, `img`) VALUES
('P00-1', 'Camiseta basica de color negro ', 'Camisetas', 'camiseta de color negro', 0, 32.52, '../../../img/camiseta1.png'),
('P00-14', 'Abrigo con capucha', 'Abrigo', 'capucha de pelo color burdeos largo', 2, 45.60, '../../../img/abrigo1.png'),
('P00-16', 'Camisa manga tres cuartos', 'Camisas', 'Camisa blanca ', 253, 22.50, '../../../img/camisa1.png'),
('P00-17', 'Abrigo fruncido', 'Abrigo', 'Abrigo fruncido, color negro tres cuartos', 411, 45.69, '../../../img/abrigo2.png'),
('P00-18', 'Abrigo leopardo', 'Abrigo', 'Abrigo bicolor, negro y estampado leopardo', 57, 56.58, '../../../img/abrigo3.png'),
('P00-19', 'Chubasquero primavera', 'Abrigo', 'Chubasquero color azul, lavable a maquina', 122, 39.45, '../../../img/abrigo4.png'),
('P00-2', 'Camiseta estampada', 'Camisetas', 'Camiseta con estampado florar en tonos azules', 0, 33.30, '../../../img/camiseta2.png'),
('P00-20', 'Abrigo plumas', 'Abrigo', 'Abrigo plumas sinteticas color negro ', 28, 62.30, '../../../img/abrigo5.png'),
('P00-21', 'Abrigo ajustado', 'Abrigo', 'Abrigo ajustado azul electrico con cremallera', 62, 43.66, '../../../img/abrigo6.png'),
('P00-22', 'Camisa manga bordada', 'Camisas', 'Camisa burdeos lavable a maquina', 154, 31.50, '../../../img/camisa2.png'),
('P00-24', 'Camisa sin mangas', 'Camisas', 'Camisa con estampado, sin mangas', 0, 20.53, '../../../img/camisa4.png'),
('P00-25', 'Camisa fluorescente', 'Camisas', 'Camisa estampado fluorescente', 85, 16.25, '../../../img/camisa5.png'),
('P00-26', 'Camisa estampado floral', 'Camisas', 'Camisa con estampado', 229, 30.60, '../../../img/camisa3.png'),
('P00-27', 'Cazadora flores', 'Cazadoras', 'Cazadora estampado floral con cremallera y goma. ', 23, 35.52, '../../../img/cazadora1.png'),
('P00-28', 'Cazadora vaquera', 'Cazadoras', 'Cazadora vaquera de color amarillo con botones metalicos.', 42, 38.60, '../../../img/cazadora2.png'),
('P00-29', 'Cazadora informal', 'Cazadoras', 'Cazadora negra, tres cuartos preparada para cualquier evento. ', 16, 27.55, '../../../img/cazadora3.png'),
('P00-3', 'Camiseta hombro descubierto', 'Camisetas', 'Camiseta en color burdeos se algodon ', 539, 33.30, '../../../img/camiseta3.png'),
('P00-30', 'Cazadora manga estampada', 'Cazadoras', 'Cazadora larga con manga estampada, bolsillos con cremallera y lavable a máquina.', 32, 52.36, '../../../img/cazadora4.png'),
('P00-31', 'Cazadora paño', 'Cazadoras', 'Cazadora de paño color marrón, doble cremallera y cuello camisero. ', 22, 46.52, '../../../img/cazadora5.png'),
('P00-32', 'Cazadora vaquera', 'Cazadoras', 'Cazadora vaquera, fruncido medio, botones metálicos y tachuelas decorativas. ', 21, 28.52, '../../../img/cazadora6.png'),
('P00-33', 'Pulsera dorada', 'Complementos', 'Pulsera rígida en tono dorado. ', 562, 12.22, '../../../img/complemento1.png'),
('P00-34', 'Bolso', 'Complementos', 'Bolso blanco, tamaño mediano con bolsillos.', 325, 22.50, '../../../img/complemento2.png'),
('P00-35', 'Pendientes', 'Complementos', 'Pendientes dorados.', 300, 8.95, '../../../img/complemento3.png'),
('P00-36', 'Bolso', 'Complementos', 'Bolso rejilla, tamaño mediano.', 362, 31.25, '../../../img/complemento4.png'),
('P00-37', 'Anillo', 'Complementos', 'Anillo color rosa, tamaño grande.', 156, 9.60, '../../../img/complemento5.png'),
('P00-38', 'Sombrero', 'Complementos', 'Sobrero color negro con ala completa.', 425, 15.26, '../../../img/complemento6.png'),
('P00-39', 'Falda', 'Faldas', 'Falda con tirantes y botones dorados de largo medio.', 522, 15.22, '../../../img/falda1.png'),
('P00-4', 'Camiseta sin mangas', 'Camisetas', 'Camiseta color rosa con manga ancha', 620, 17.20, '../../../img/camiseta4.png'),
('P00-40', 'Falda larga', 'Faldas', 'Falda larga con estampado de colores. ', 304, 22.55, '../../../img/falda2.png'),
('P00-41', 'Falda hippie', 'Faldas', 'Falda larga con estampado lila. ', 221, 32.55, '../../../img/falda3.png'),
('P00-42', 'Falda larga', 'Faldas', 'Falda larga con estampado rosa. ', 105, 27.50, '../../../img/falda4.png'),
('P00-43', 'Falda volantes', 'Faldas', 'Falda larga con estampado azul y verde. ', 422, 31.25, '../../../img/falda5.png'),
('P00-44', 'Falda amarilla', 'Faldas', 'Falda larga con estampado amarillo. ', 406, 18.60, '../../../img/falda6.png'),
('P00-45', 'Pantalon ancho', 'Pantalones', 'Pantalon ancho, con estampado floral en tonos verdes ', 93, 15.66, '../../../img/pantalon1.png'),
('P00-46', 'Pantalón puño', 'Pantalones', 'Pantalón negro con puño muy favorecedor ', 106, 18.25, '../../../img/pantalon2.png'),
('P00-47', 'Pantalón pata elefante', 'Pantalones', 'Pantalon de vestir en tono verde ', 202, 17.44, '../../../img/pantalon3.png'),
('P00-48', 'Pantalón pirata', 'Pantalones', 'Pantalón en tono negro de verano', 155, 21.60, '../../../img/pantalon4.png'),
('P00-49', 'Pantalón tres cuartos', 'Pantalones', 'Pantalón deportivo', 99, 20.05, '../../../img/pantalon5.png'),
('P00-5', 'Camiseta cuello pico', 'Camisetas', 'Camiseta blanca con cuello pico color beige', 356, 15.20, '../../../img/camiseta5.png'),
('P00-50', 'Pantalón informal', 'Pantalones', 'Pantalón negro para cualquier ocasión', 105, 19.60, '../../../img/pantalon6.png'),
('P00-51', 'Chaqueta tres cuartos', 'Punto', 'Chaqueta color negro manga tres cuartos, de tacto suave y lavable a máquina.', 80, 20.40, '../../../img/punto1.png'),
('P00-52', 'Chaqueta de vestir', 'Punto', 'Chaqueta en blanco y negro de vestir', 105, 19.66, '../../../img/punto2.png'),
('P00-53', 'Chaqueta informal', 'Punto', 'Chaqueta color gris, de tacto suave y lavable a máquina.', 96, 18.60, '../../../img/punto3.png'),
('P00-54', 'Chaqueta suave', 'Punto', 'Chaqueta color negro manga tres cuartos, de tacto suave fantástica para cualquier ocasión.', 202, 25.40, '../../../img/punto4.png'),
('P00-55', 'Chaqueta caida amplia', 'Punto', 'Chaqueta color rojo, de tacto suave y lavable a máquina.', 165, 32.20, '../../../img/punto5.png'),
('P00-56', 'Chaqueta fruncida', 'Punto', 'Chaqueta color marrón con manga abombada.', 205, 18.55, '../../../img/punto6.png'),
('P00-57', 'Sobrecamisa estampada', 'Sobrecamisas', 'Sobrecamisa con estampado en blaco y negro de largo tres cuartos. ', 400, 45.60, '../../../img/sobrecamisa1.png'),
('P00-58', 'Sobrecamisa seda', 'Sobrecamisas', 'Sobrecamisa color verde con un botón no lavable a máquina. ', 299, 50.23, '../../../img/sobrecamisa2.png'),
('P00-59', 'Sobrecamisa con cuello', 'Sobrecamisas', 'Sobrecamisa con margarita en color amarillo', 225, 35.60, '../../../img/sobrecamisa3.png'),
('P00-6', 'Camiseta manga bordada', 'Camisetas', 'Camiseta en color burdeos con corte en c', 254, 12.54, '../../../img/camiseta6.png'),
('P00-60', 'Sobrecamisa con botones', 'Sobrecamisas', 'Sobrecamisa básica con bolsillo en color verde', 522, 35.26, '../../../img/sobrecamisa4.png'),
('P00-61', 'Sobrecamisa elegante', 'Sobrecamisas', 'Sobrecamisa color negro de vestir con manga estampada', 325, 40.60, '../../../img/sobrecamisa5.png'),
('P00-62', 'Sobrecamisa sport', 'Sobrecamisas', 'Sobrecamisa color negro para uso diario', 555, 36.60, '../../../img/sobrecamisa6.png'),
('P00-63', 'Vaquero clásico', 'Vaqueros', 'Vaquero clásico con puño, en color oscuro.', 226, 32.52, '../../../img/vaquero1.png'),
('P00-64', 'Vaquero sport', 'Vaqueros', 'Vaquero sport pirata con cordón ajustable', 124, 16.23, '../../../img/vaquero2.png'),
('P00-65', 'Vaquero ajustado', 'Vaqueros', 'Vaquero ajustado, color oscuro y degradado.', 323, 29.99, '../../../img/vaquero3.png'),
('P00-66', 'Vaquero pirata', 'Vaqueros', 'Vaquero color blanco, ajustado', 105, 25.17, '../../../img/vaquero4.png'),
('P00-67', 'Vaquero con cintura', 'Vaqueros', 'Vaquero con cintura ancha y pata elefante, de color claro.', 125, 32.44, '../../../img/vaquero5.png'),
('P00-68', 'Vaquero doble cintura', 'Vaqueros', 'Vaquero color negro, con cintura elástica gris.', 360, 35.50, '../../../img/vaquero6.png'),
('P00-69', 'Vestido largo', 'Vestidos', 'Vestido largo, color azul eléctrico con manca corta y cuello redondo', 605, 29.54, '../../../img/vestido1.png'),
('P00-7', 'Camisa escote v', 'Camisas', 'Camisa con escote en contraste', 55, 30.62, '../../../img/camisa6.png'),
('P00-70', 'Vestido estampado', 'Vestidos', 'Vestido largo, con estampado rosa y planco de vuelo', 501, 28.54, '../../../img/vestido2.png'),
('P00-71', 'Vestido mariposas', 'Vestidos', 'Vestido corto, con estampado de mariposas en color negro y manga corta', 705, 27.40, '../../../img/vestido3.png'),
('P00-72', 'Vestido haxagonos', 'Vestidos', 'Vestido corto, con estampado rojo y dorado', 581, 26.50, '../../../img/vestido4.png'),
('P00-73', 'Vestido colgante', 'Vestidos', 'Vestido corto con colgante en el cuello de color azul y ribete en dorado', 485, 32.60, '../../../img/vestido5.png'),
('P00-74', 'Vestido corto', 'Vestidos', 'Vestido corto, manga corta, estampado en rojo.', 59, 25.60, '../../../img/vestido6.png'),
('P00-75', 'Sandalia con broche', 'Zapatos', 'Sandalia en tono gris, con broche al tobillo plana.', 952, 42.56, '../../../img/zapato1.png'),
('P00-76', 'chancla con refuerzo', 'Zapatos', 'chancla con topos negros y refuerzo al tobillo.', 802, 26.65, '../../../img/zapato2.png'),
('P00-77', 'chancla plana', 'Zapatos', 'Chancla plana con estampado en gris', 152, 25.60, '../../../img/zapato3.png'),
('P00-78', 'zapato tacón', 'Zapatos', 'Zapato tacon aguja, con broche al tobillo', 820, 52.15, '../../../img/zapato4.png'),
('P00-79', 'Zapato tacón ancho', 'Zapatos', 'Zapato en color gris de ante.', 225, 42.56, '../../../img/zapato5.png'),
('P00-80', 'Zapato plano', 'Zapatos', 'Zapato con estampado floral en tonos naranjas.', 700, 31.60, '../../../img/zapato6.png');

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `trigger_productos2` BEFORE INSERT ON `productos` FOR EACH ROW BEGIN
  INSERT INTO tablaPivoteProductos VALUES (NULL);
  SET NEW.codigoProducto=CONCAT('P00-',LAST_INSERT_ID());
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaPivoteProductos`
--
DROP TABLE IF EXISTS `tablaPivoteProductos`;
CREATE TABLE `tablaPivoteProductos` (
  `codigoProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tablaPivoteProductos`
--

INSERT INTO `tablaPivoteProductos` (`codigoProducto`) VALUES
(1),
(2),
(10),
(11),
(12),
(13),
(14),
(15),
(16),
(17),
(18),
(19),
(20),
(21),
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32),
(33),
(34),
(35),
(36),
(37),
(38),
(39),
(40),
(41),
(42),
(43),
(44),
(45),
(46),
(47),
(48),
(49),
(50),
(51),
(52),
(53),
(54),
(55),
(56),
(57),
(58),
(59),
(60),
(61),
(62),
(63),
(64),
(65),
(66),
(67),
(68),
(69),
(70),
(71),
(72),
(73),
(74),
(75),
(76),
(77),
(78),
(79),
(80),
(81),
(82),
(83),
(84),
(85),
(86),
(87),
(88);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Indices de la tabla `detallesPedido`
--
ALTER TABLE `detallesPedido`
  ADD PRIMARY KEY (`numeroPedido`,`codigoProducto`),
  ADD KEY `codigoProducto` (`codigoProducto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`IdEmpleado`);

--
-- Indices de la tabla `lineasProducto`
--
ALTER TABLE `lineasProducto`
  ADD PRIMARY KEY (`lineaProducto`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`IdCliente`,`checkNumber`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`numeroPedido`),
  ADD KEY `IdCliente` (`IdCliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `lineaProducto` (`lineaProducto`);

--
-- Indices de la tabla `tablaPivoteProductos`
--
ALTER TABLE `tablaPivoteProductos`
  ADD PRIMARY KEY (`codigoProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `numeroPedido` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tablaPivoteProductos`
--
ALTER TABLE `tablaPivoteProductos`
  MODIFY `codigoProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallesPedido`
--
ALTER TABLE `detallesPedido`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`numeroPedido`) REFERENCES `pedidos` (`numeroPedido`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`codigoProducto`) REFERENCES `productos` (`codigoProducto`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`IdCliente`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`IdCliente`) REFERENCES `clientes` (`IdCliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`lineaProducto`) REFERENCES `lineasProducto` (`lineaProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
