DROP DATABASE IF EXISTS curvys;
CREATE DATABASE curvys;
USE curvys;

/*Estructura de la tabla clientes */
DROP TABLE IF EXISTS clientes;
CREATE TABLE clientes (
  IdCliente int(11) NOT NULL,
  nombreCliente varchar(50) NOT NULL,
  clienteApellido1 varchar(50) NOT NULL,
  clienteApellido2 varchar(50) NOT NULL,
  telefono varchar(50) NOT NULL,
  direccion1 varchar(50) NOT NULL,
  direccion2 varchar(50) DEFAULT NULL,
  ciudad varchar(50) NOT NULL,
  codigoPostal varchar(15) DEFAULT NULL,
  pais varchar(50) NOT NULL,
  PRIMARY KEY (IdCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Estructura de la tabla lineasProducto */
DROP TABLE IF EXISTS lineasProducto;
CREATE TABLE lineasProducto (
  lineaProducto varchar(50) NOT NULL,
  descripcion varchar(4000) DEFAULT NULL,
  PRIMARY KEY (lineaProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Estructura de la tabla pedidos */
DROP TABLE IF EXISTS pedidos;
CREATE TABLE pedidos (
  numeroPedido int(11),
  fechaPedido date NOT NULL,
  fechaEnvío date DEFAULT NULL,
  estado varchar(15) NOT NULL,
  comentarios text,
  IdCliente int(11) NOT NULL,
  PRIMARY KEY (numeroPedido),
  KEY IdCliente (IdCliente),
  CONSTRAINT orders_ibfk_1 FOREIGN KEY (IdCliente) REFERENCES clientes (IdCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Estructura de la tabla productos */
DROP TABLE IF EXISTS productos;
CREATE TABLE productos (
  codigoProducto varchar(15),
  nombreProducto varchar(70) NOT NULL,
  lineaProducto varchar(50) NOT NULL,
  descripcionProducto text NOT NULL,
  cantidadStock smallint(6) NOT NULL,
  precioCompra decimal(10,2) NOT NULL,
  img varchar(255),
  PRIMARY KEY (codigoProducto),
  KEY lineaProducto (lineaProducto),
  CONSTRAINT products_ibfk_1 FOREIGN KEY (lineaProducto) REFERENCES lineasProducto (lineaProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Estructura de la tabla detallesPedido */
DROP TABLE IF EXISTS detallesPedido;
CREATE TABLE detallesPedido (
  numeroPedido int(11),
  codigoProducto varchar(15) NOT NULL,
  cantidadPedida int(11) NOT NULL,
  precioUnidad decimal(10,2) NOT NULL,
  PRIMARY KEY (numeroPedido,codigoProducto),
  KEY codigoProducto (codigoProducto),
  CONSTRAINT orderdetails_ibfk_1 FOREIGN KEY (numeroPedido) REFERENCES pedidos (numeroPedido),
  CONSTRAINT orderdetails_ibfk_2 FOREIGN KEY (codigoProducto) REFERENCES productos (codigoProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*Estructura de la tabla pagos */
DROP TABLE IF EXISTS pagos;
CREATE TABLE pagos (
  IdCliente int(11) NOT NULL,
  checkNumber varchar(50) NOT NULL,
  fechaPago date NOT NULL,
  cantidad decimal(10,2) NOT NULL,
  PRIMARY KEY (IdCliente,checkNumber),
  CONSTRAINT payments_ibfk_1 FOREIGN KEY (IdCliente) REFERENCES clientes (IdCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Estructura de la tabla empleados */
DROP TABLE IF EXISTS empleados;
CREATE TABLE empleados (
  IdEmpleado int(11) NOT NULL,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  PRIMARY KEY (IdEmpleado)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


/*TRIGGERS*/
delimiter $ 
CREATE TRIGGER numero_Pedido BEFORE INSERT ON pedidos FOR EACH ROW 
	BEGIN 
		DECLARE numero_Pedido int;
        SET numero_Pedido = (SELECT ifnull(max(numeroPedido), 0) FROM pedidos) +1;
        SET new.numeroPedido=numero_Pedido;
end $

delimiter $ 
CREATE TRIGGER codigo_productos BEFORE INSERT ON productos FOR EACH ROW 
	BEGIN 
		DECLARE codigo_producto int;
        SET codigo_producto = (SELECT ifnull(max(convert(substring(codigoProducto,3), signed integer)), 0) FROM productos) +1;
        SET new.codigoProducto=CONCAT('P-',LPAD(codigo_producto,3,'0'));		
end $

delimiter $ 
CREATE TRIGGER id_cliente BEFORE INSERT ON clientes FOR EACH ROW 
	BEGIN 
		DECLARE id_cliente int;
        SET id_cliente = (SELECT ifnull(max(IdCliente), 100) FROM clientes) +1;
        SET new.IdCliente=id_cliente;
end $

delimiter $ 
CREATE TRIGGER id_empleado BEFORE INSERT ON empleados FOR EACH ROW 
	BEGIN 
		DECLARE id_empleado int;
        SET id_empleado = (SELECT ifnull(max(IdEmpleado), 0) FROM empleados) +1;
        SET new.IdEmpleado=id_empleado;
end $


/*INSERCIONES*/
/*Datos de la tabla clientes */
insert into clientes(nombreCliente,clienteApellido1,clienteApellido2,telefono,direccion1,direccion2,ciudad,codigoPostal,pais) values 
('Pepe','Perez','Galán ','679689477','92, Calle Oca',NULL,'Madrid','28025','Spain'),
('Juanito','Jimenez','Jim ','679687477','92, General Ricardos',NULL,'París','12857','France'),
('Jaimito','Rodriguez','Zidane ','679697477','15, Calle Laguna',NULL,'Berlin','849161','Germany');

/*Datos de la tabla lineasProducto */
insert into lineasProducto(lineaProducto,descripcion) values 
('Camisetas','Maravillosas camisetas'),
('Pantalones','Increíbles pantalones');

/*Datos de la tabla pedidos */
insert into pedidos(fechaPedido,fechaEnvío,estado,comentarios,IdCliente) values 
('2003-01-06','2003-01-10','Shipped',NULL,103);

/*Datos de la tabla productos */
insert into productos(nombreProducto,lineaProducto,descripcionProducto,cantidadStock,precioCompra,img) values 
('Camiseta básica','Camisetas','Care for water: producido utilizando menos agua. Etiquetamos bajo el nombre Join Life las prendas que se producen utilizando tecnologías y materias primas que nos ayudan a reducir el impacto medioambiental de nuestros productos. ',540,'33.30',NULL),
('Pantalón pliegues','Pantalones','Pantalón de tiro alto con cintura deconstruida. Bolsillos laterales y falsos bolsillos de vivo y con solapa en espalda.',6553,'43.26',NULL);

/*Datos de la tabla detallesPedido */
insert  into detallesPedido(numeroPedido, codigoProducto, cantidadPedida,precioUnidad) values 
(1, 'P-001', 50,'55.09'),
(1, 'P-002', 30, '75.46');

/*Datos de la tabla pagos */
insert  into pagos(IdCliente,checkNumber,fechaPago,cantidad) values 
(101,'HQ336336','2004-10-19','6066.78'),
(101,'JM555205','2003-06-05','14571.44'),
(102,'OM314933','2004-12-18','1676.14'),
(103,'LM555205','2012-08-09','20214.79');

/*Datos de la tabla empleados */
insert  into empleados(nombre,apellido,email) values 
('Sergio','Anes','sergio.agalann@gmail.com'),
('Maria','Pérez','mariaperez@gmail.com'),
('Miguel','Jiménez','migueljimenez@gmail.com');





