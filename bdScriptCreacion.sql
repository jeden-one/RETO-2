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

INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario1', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa1','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario2', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa2','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario3', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa3','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario4', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa4','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario5', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa5','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('usuario6', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','enpresa6','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('Jon', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','jon santos','logodefecto.png');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('Eric', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','eric muñoz','eric.jpg');
INSERT INTO usuarios (usuario,password,nombre,foto) VALUES ('Miguel', '$2y$10$nkA9LB1SmjxpGMkH4wgH7uUjeopQBr4kwWU6uD77EONf5c5OJTb1q','miguel barros','senor.jpg');



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
('Vendo coches', 'cosas de vender coches', 15,6,'coche.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo todoterreno', 'cosas de vender todoterrenos', 15,7,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo camisetas', 'cosas de vender camisetas', 70,6,'camiseta.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo camisetas', 'cosas de vender camisetas', 67,7,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo camiseta básica', 'camiseta manchada', 69,8,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo camiseta básica', 'camiseta manchada', 68,6,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo balon', 'camiseta manchada', 34,2,'balon.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo canasta', 'chiquita canasta', 33,4,'canasta.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo playstation 4', ' se vende sin mando', 9,8,'play.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('playsation 4', 'camiseta manchada', 11,5,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Vendo xbox one', 'xbox sin juegos', 13,3,'xbox.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('xbox one', 'xbox sin juegos', 9,2,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('oveja', 'oveja que esta totalmente descarriada', 83,3,'oveja.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('oveja acuatica', 'oveja que nada', 79,8,'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Tocadisco de los 40', 'tocadisco de mi abuelo', 66,1,'tocadisco.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('portatil', 'portatil de gran calidad', 52,6,'portatil.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('el principito', 'el libro más emociannate de la historia', 59,2, 'libro.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('smartphone', 'un movil de ultima generacion', 51,5, 'movil.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('placa controladora', 'placa un poco anticuada', 45,9, 'default.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Cámara', 'cámara canon se vende por falta de uso ', 43,9, 'camara.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('grifo', 'grifo en muy buen estado', 27,4, 'grifo.jpg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('palmera', 'palmera para decorar el interior o exterior de tu casa', 28,1, 'palmera.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('monster', 'bebida energética con la que aguntaras todo el dia', 7,3, 'monster.jpeg');

INSERT INTO anuncios (titulo, descripcion,id_subcategoria,id_usuario,foto) VALUES
('Brownies', 'brownies caseros, con extra de chocolate', 8,9, 'dulce.jpeg');


