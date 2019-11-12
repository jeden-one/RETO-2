DROP DATABASE   IF     EXISTS proyecto_ajebask;

CREATE DATABASE IF NOT EXISTS proyecto_ajebask;

USE proyecto_ajebask;

/*————————————————CREAR TABLAS————————————————————*/

/*CREAR TABLA usuarios*/

CREATE TABLE usuarios (
	id int NOT NULL AUTO_INCREMENT,
	usuario varchar(50) NOT NULL UNIQUE,
	password varchar(200) NOT NULL,
	PRIMARY KEY (id)
);

/*CREAR TABLA categorias*/

CREATE TABLE categorias (
	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (id)
);

/*CREAR TABLA subcategorias*/

CREATE TABLE subcategorias (
	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL UNIQUE,
	id_categoria int NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT subcategorias_categorias_FK FOREIGN KEY (id_categoria) REFERENCES categorias (id)
);

/*CREAR TABLA anuncios*/

CREATE TABLE anuncios (
	id int NOT NULL AUTO_INCREMENT,
	titulo varchar(50) NOT NULL,
	descripcion varchar(500) NOT NULL,
	foto varchar(200) NULL,
	id_subcategoria int NOT NULL,
	id_usuario int NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT anuncios_subcategorias_FK FOREIGN KEY (id_subcategoria) REFERENCES
subcategorias (id),
	CONSTRAINT anuncios_usuarios_FK FOREIGN KEY (id_usuario) REFERENCES usuarios (id)
);

/*————————————————CREAR INSERTS————————————————————*/

/*INSERTAR usuarios*/

INSERT INTO usuarios (usuario,password) VALUES ('usuario1', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q');
INSERT INTO usuarios (usuario,password) VALUES ('usuario2', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q');
INSERT INTO usuarios (usuario,password) VALUES ('usuario3', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q');
INSERT INTO usuarios (usuario,password) VALUES ('usuario4', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q');
INSERT INTO usuarios (usuario,password) VALUES ('usuario5', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q');

/*INSERTAR categorias*/

INSERT INTO categorias(nombre) Values ('categoria1');
INSERT INTO categorias(nombre) Values ('categoria2');
INSERT INTO categorias(nombre) Values ('categoria3');
INSERT INTO categorias(nombre) Values ('categoria4');
INSERT INTO categorias(nombre) Values ('categoria5');
INSERT INTO categorias(nombre) Values ('categoria6');
INSERT INTO categorias(nombre) Values ('categoria7');

/*INSERTAR subcategorias*/

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub1',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub2',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub3',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub4',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub5',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub6',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub7',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub8',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('sub9',3);

/*INSERTAR anuncios*/

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Vendo coches', 'cosas de vender coches', 1,1);
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Ps4 chachi', 'cosas de afasfafsafasfgasga', 3,3);
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Barcos virtuales', 'cosas de barcos bien chulos', 8,2);
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('rpg barato', 'para usar con tu vecino', 6,1);
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Teles random', 'tele plasma lap', 3,3);
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Calzoncillos', 'estas usados', 5,3);
