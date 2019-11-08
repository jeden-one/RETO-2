DROP DATABASE   IF     EXISTS proyecto_ajebask;

CREATE DATABASE IF NOT EXISTS proyecto_ajebask;

USE proyecto_ajebask;

/*————————————————CREAR TABLAS————————————————————*/

/*CREAR TABLA USUARIOS*/

CREATE TABLE Usuarios (
	id int NOT NULL AUTO_INCREMENT,
	usuario varchar(50) NOT NULL UNIQUE,
	password varchar(50) NOT NULL,
	PRIMARY KEY (id)
);

/*CREAR TABLA CATEGORIAS*/

CREATE TABLE Categorias (
	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL UNIQUE,
	PRIMARY KEY (id)
);

/*CREAR TABLA SUBCATEGORIAS*/

CREATE TABLE Subcategorias (
	id int NOT NULL AUTO_INCREMENT,
	nombre varchar(50) NOT NULL UNIQUE,
	id_categoria int NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT Subcategorias_Categorias_FK FOREIGN KEY (id_categoria) REFERENCES Categorias (id)
);

/*CREAR TABLA ANUNCIOS*/

CREATE TABLE Anuncios (
	id int NOT NULL AUTO_INCREMENT,
	titulo varchar(50) NOT NULL,
	descripcion varchar(500) NOT NULL,
	foto varchar(200) NULL,
	id_subcategoria int NOT NULL,
	id_usuario int NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT Anuncios_Subcategorias_FK FOREIGN KEY (id_subcategoria) REFERENCES
Subcategorias (id),
	CONSTRAINT Anuncios_Usuarios_FK FOREIGN KEY (id_usuario) REFERENCES Usuarios (id)
);

/*————————————————CREAR INSERTS————————————————————*/

/*INSERTAR USUARIOS*/

INSERT INTO Usuarios (usuario,password) VALUES ('usuario1', 123);
INSERT INTO Usuarios (usuario,password) VALUES ('usuario2', 123);
INSERT INTO Usuarios (usuario,password) VALUES ('usuario3', 123);
INSERT INTO Usuarios (usuario,password) VALUES ('usuario4', 123);
INSERT INTO Usuarios (usuario,password) VALUES ('usuario5', 123);

/*INSERTAR CATEGORIAS*/

INSERT INTO Categorias(nombre) Values ('categoria1');
INSERT INTO Categorias(nombre) Values ('categoria2');
INSERT INTO Categorias(nombre) Values ('categoria3');
INSERT INTO Categorias(nombre) Values ('categoria4');
INSERT INTO Categorias(nombre) Values ('categoria5');
INSERT INTO Categorias(nombre) Values ('categoria6');
INSERT INTO Categorias(nombre) Values ('categoria7');

/*INSERTAR SUBCATEGORIAS*/

INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub1',1);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub2',1);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub3',2);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub4',3);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub5',4);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub6',4);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub7',5);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub8',2);
INSERT INTO Subcategorias (nombre,id_categoria) VALUES ('sub9',3);

/*INSERTAR ANUNCIOS*/

INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Vendo coches', 'cosas de vender coches', 1,1);
INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Ps4 chachi', 'cosas de afasfafsafasfgasga', 3,3);
INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Barcos virtuales', 'cosas de barcos bien chulos', 8,2);
INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('rpg barato', 'para usar con tu vecino', 6,1);
INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Teles random', 'tele plasma lap', 3,3);
INSERT INTO Anuncios (titulo, descripcion,id_subcategoria,id_usuario) VALUES
('Calzoncillos', 'estas usados', 5,3);
