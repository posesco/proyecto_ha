# Creacion de la BD

DROP DATABASE IF EXISTS proyecto_ha;
CREATE DATABASE IF NOT EXISTS proyecto_ha character set utf8mb4;
USE proyecto_ha;

# Creacion de la tablas
CREATE TABLE IF NOT EXISTS usuarios (
 id INT (255) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 usuario VARCHAR (25) NOT NULL,
 email VARCHAR (25) NOT NULL UNIQUE,
 pass VARCHAR (255) NOT NULL,
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS entradas (
 id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
 usuario_id INT (255) UNSIGNED NOT NULL,
 titulo VARCHAR (50) NOT NULL,
 descripcion MEDIUMTEXT,
 imagen VARCHAR (50),
 fecha DATETIME DEFAULT CURRENT_TIMESTAMP,
 CONSTRAINT fk_E_U FOREIGN KEY(usuario_id) REFERENCES usuarios(id)
)ENGINE = INNODB;

# Insercion de Datos

INSERT INTO usuarios (usuario, email, pass)
  VALUES ('admin', 'admin@admin.com', '$2y$04$mGlJQ5opPa.hZ/.LKPZCP.7/Y8P/gEUSFPwrWm/P6105D7cg.coM.');

INSERT INTO entradas(usuario_id, titulo, descripcion, imagen)
  VALUES (1,'1er Post','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vulputate, dolor sed vehicula bibendum, mauris ligula rutrum mi, eu','https://wiedii.co/img/verticalwiedii.svg');
