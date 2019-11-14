DROP DATABASE   IF     EXISTS proyecto_ajebask;

CREATE DATABASE IF NOT EXISTS proyecto_ajebask;

USE proyecto_ajebask;

/*————————————————CREAR TABLAS————————————————————*/

/*CREAR TABLA usuarios*/

CREATE TABLE usuarios (
	id int NOT NULL AUTO_INCREMENT,
	usuario varchar(50) NOT NULL UNIQUE,
	password varchar(200) NOT NULL,
	nombre varchar(50) NOT NULL UNIQUE,
	foto varchar(200) NULL,
	descripcion varchar(500) NULL,
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
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
	id_subcategoria int NOT NULL,
	id_usuario int NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT anuncios_subcategorias_FK FOREIGN KEY (id_subcategoria) REFERENCES
subcategorias (id),
	CONSTRAINT anuncios_usuarios_FK FOREIGN KEY (id_usuario) REFERENCES usuarios (id)
);

/*————————————————CREAR INSERTS————————————————————*/

/*INSERTAR usuarios*/

INSERT INTO usuarios (usuario,password,nombre) VALUES ('usuario1', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa1');
INSERT INTO usuarios (usuario,password,nombre) VALUES ('usuario2', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa2');
INSERT INTO usuarios (usuario,password,nombre) VALUES ('usuario3', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa3');
INSERT INTO usuarios (usuario,password,nombre) VALUES ('usuario4', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa4');
INSERT INTO usuarios (usuario,password,nombre) VALUES ('usuario5', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa5');

/*INSERTAR categorias*/

INSERT INTO categorias(nombre) Values ('Alimentación');
INSERT INTO categorias(nombre) Values ('Videojuegos');
INSERT INTO categorias(nombre) Values ('Motor');
INSERT INTO categorias(nombre) Values ('Bricolaje');
INSERT INTO categorias(nombre) Values ('Deporte');
INSERT INTO categorias(nombre) Values ('Electrónica');
INSERT INTO categorias(nombre) Values ('Informática');
INSERT INTO categorias(nombre) Values ('Literatura');
INSERT INTO categorias(nombre) Values ('Música');
INSERT INTO categorias(nombre) Values ('Moda');
INSERT INTO categorias(nombre) Values ('Mascotas');

/*INSERTAR subcategorias*/

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Productos frescos',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Carnes',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Conservas',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Pescados',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Lácteos',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Congelados',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Bebidas y licores',1);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Dulces',1);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Consolas',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Accesorios consolas',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Playstation',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Nintendo',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Xbox',2);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('PC',2);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Coches',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Motos',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Furgonetas',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Camiones',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Coches eléctricos / Híbridos',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Piezas coches',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Piezas motos',3);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Accesorios vehículos',3);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Pintura',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Ferretería',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Herramientas',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Electricidad',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Fontanería',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Decoración interior',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Decoración exterior',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Muebles',4);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Iluminación',4);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Ciclismo',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Baloncesto',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Fútbol',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Tenis',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Atletismo',5);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Hockey',5);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Componentes electrónica',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Cableado',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Herramientas electrónica',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Soldadores',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Sonido',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Vídeo',6);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Placas controladoras',6);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Servicios informáticos y soporte',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Software',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('PC y MAC',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Componentes',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Monitores',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Tablet',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Smartphone',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Portátil',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Accesorios portátil',7);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Accesorios smartphone / tablet',7);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Aventura',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Ciencia ficción',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Biografía',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Romántica',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Infantil',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Histórica',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Policíaca',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Audiolibro',8);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Libros de partituras',8);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Reproductores',9);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Tocadiscos',9);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Vinilos',9);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Clásica',9);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('CD',9);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Unisex',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Mujer',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Hombre',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Niño',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Niña',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Joyería',10);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Complementos',10);

INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Perros',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Gatos',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Animales acuáticos',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Aves',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Equinos',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Reptiles',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Arácnidos y animales exóticos',11);
INSERT INTO subcategorias (nombre,id_categoria) VALUES ('Ganado',11);

/*INSERTAR anuncios*/

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo coches', 'cosas de vender coches', 1,1,'coche.jpeg');
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Ps4 chachi', 'cosas de afasfafsafasfgasga', 3,3,'coche.jpeg');
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Barcos virtuales', 'cosas de barcos bien chulos', 8,2,'coche.jpeg');
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('rpg barato', 'para usar con tu vecino', 6,1,'coche.jpeg');
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Teles random', 'tele plasma lap', 3,3,'coche.jpeg');
INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Calzoncillos', 'estas usados', 5,3,'coche.jpeg');
