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
  password varchar(50) NOT NULL,
  ciudad varchar(50) NOT NULL,
  codigoPostal varchar(15) DEFAULT NULL,
  pais varchar(50) NOT NULL,
  PRIMARY KEY (IdCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla clientes */
insert  into clientes(IdCliente,nombreCliente,clienteApellido1,clienteApellido2,telefono,direccion1,password,ciudad,codigoPostal,pais) values 
(103,'Pepe','Perez','Galán ','679689477','92, Calle Oca','proyectodaw','Madrid','28025','Spain'),
(104,'Juanito','Jimenez','Jim ','679687477','92, General Ricardos','proyectodaw1','París','12857','France'),
(105,'Jaimito','Rodriguez','Zidane ','679697477','15, Calle Laguna','proyectodaw2','Berlin','849161','Germany');


/*Estructura de la tabla lineasProducto */
DROP TABLE IF EXISTS lineasProducto;
CREATE TABLE lineasProducto (
  lineaProducto varchar(50) NOT NULL,
  descripcion varchar(4000) DEFAULT NULL,
  PRIMARY KEY (lineaProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla lineasProducto */
insert into lineasProducto(lineaProducto,descripcion) values 
('Camisetas','Maravillosas camisetas'),
('Pantalones','Increíbles pantalones');

/*Estructura de la tabla pedidos */
DROP TABLE IF EXISTS pedidos;
CREATE TABLE pedidos (
  numeroPedido int(11) NOT NULL,
  fechaPedido date NOT NULL,
  fechaEnvío date DEFAULT NULL,
  estado varchar(15) NOT NULL,
  comentarios text,
  IdCliente int(11) NOT NULL,
  PRIMARY KEY (numeroPedido),
  KEY IdCliente (IdCliente),
  CONSTRAINT orders_ibfk_1 FOREIGN KEY (IdCliente) REFERENCES clientes (IdCliente)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla pedidos */
insert into pedidos(numeroPedido,fechaPedido,fechaEnvío,estado,comentarios,IdCliente) values 
(1,'2003-01-06','2003-01-10','Shipped',NULL,103);

/*Estructura de la tabla productos */
DROP TABLE IF EXISTS productos;
CREATE TABLE productos (
  codigoProducto varchar(15) NOT NULL,
  nombreProducto varchar(70) NOT NULL,
  lineaProducto varchar(50) NOT NULL,
  descripcionProducto text NOT NULL,
  cantidadStock smallint(6) NOT NULL,
  precioCompra decimal(10,2) NOT NULL,
  img varchar(1000) DEFAULT NULL,
  PRIMARY KEY (codigoProducto),
  KEY lineaProducto (lineaProducto),
  CONSTRAINT products_ibfk_1 FOREIGN KEY (lineaProducto) REFERENCES lineasProducto (lineaProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla productos */
insert into productos(codigoProducto,nombreProducto,lineaProducto,descripcionProducto,cantidadStock,precioCompra,img) values 
('P-001','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-002','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-003','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-004','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-005','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-006','Camiseta básica','Camisetas','Care for water: producido utilizando menos agua.',540,'33.30','http://localhost:81/curvys/img/camisa.png'),
('P-007','Pantalón pliegues','Pantalones','Pantalón de tiro alto con cintura deconstruida. Bolsillos laterales y falsos bolsillos de vivo y con solapa en espalda.',6553,'43.26','http://localhost:81/curvys/img/camisa.png');

/*Estructura de la tabla detallesPedido */
DROP TABLE IF EXISTS detallesPedido;
CREATE TABLE detallesPedido (
  numeroPedido int(11) NOT NULL,
  codigoProducto varchar(15) NOT NULL,
  cantidadPedida int(11) NOT NULL,
  precioUnidad decimal(10,2) NOT NULL,
  PRIMARY KEY (numeroPedido,codigoProducto),
  KEY codigoProducto (codigoProducto),
  CONSTRAINT orderdetails_ibfk_1 FOREIGN KEY (numeroPedido) REFERENCES pedidos (numeroPedido),
  CONSTRAINT orderdetails_ibfk_2 FOREIGN KEY (codigoProducto) REFERENCES productos (codigoProducto)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla detallesPedido */
insert into detallesPedido(numeroPedido, codigoProducto, cantidadPedida,precioUnidad) values 
(1, 'P-001', 50,'55.09'),
(1, 'P-002', 30, '75.46');

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

/*Datos de la tabla pagos */
insert into pagos(IdCliente,checkNumber,fechaPago,cantidad) values 
(103,'HQ336336','2004-10-19','6066.78'),
(103,'JM555205','2003-06-05','14571.44'),
(104,'OM314933','2004-12-18','1676.14'),
(105,'LM555205','2012-08-09','20214.79');

/*Estructura de la tabla empleados */
DROP TABLE IF EXISTS empleados;
CREATE TABLE empleados (
  IdEmpleado int(11) NOT NULL,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(50) NOT NULL,
  PRIMARY KEY (IdEmpleado)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Datos de la tabla empleados */
insert into empleados(IdEmpleado,nombre,apellido,email,password) values 
(1002,'Sergio','Anes','sergio.agalann@gmail.com','anessergio'),
(1056,'Maria','Pérez','mariaperez@gmail.com','perezmaria'),
(1076,'Miguel','Jiménez','migueljimenez@gmail.com','jimenezmiguel');
