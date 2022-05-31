--Creación tabla

CREATE TABLE pedidos
(idpedido INT(10) AUTO_INCREMENT NOT NULL,
 codpedido VARCHAR(20),
 descripcion VARCHAR(20),
 CONSTRAINT pk_pedidos PRIMARY KEY (idpedido));
 
--creación trigger genera automáticamente el campo CODPEDIDO

DROP TRIGGER IF EXISTS `trigger_pedidos`;
DELIMITER //
CREATE TRIGGER `trigger_pedidos`
BEFORE INSERT ON `pedidos`
FOR EACH ROW
BEGIN
  SET NEW.codpedido=CONCAT('P00-',LAST_INSERT_ID()+1);
END//
DELIMITER ;

-- En la tabla se inserta solo la DESCRIPCION y automáticamente se genera el idpedido y el codpedido
INSERT INTO pedidos (descripcion) VALUES ('prueba');