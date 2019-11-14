<?php

/**
 * Conectar a la base de datos
 *
 * @return PDO variable para poder conectarse en cada sentencia
 */
function connect()
{
    $dbname = 'proyecto_ajebask';
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

/**
 * Cerrar la base de datos
 *
 * @param $dbh variable para editar la conexion a la base de datos
 */
function close($dbh)
{
    $dbh == null;
}

/**
 * buscar todas las subcategorias y sus categorias
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed array de objetos de la busqueda
 */
function searchSubcategoriaAll($dbh)
{
    $stmt = $dbh->prepare("SELECT s.id id_subcategoria, s.nombre subcategoria, c.id id_Categoria, c.nombre categoria
FROM subcategorias s, categorias c
WHERE c.id=s.id_categoria;");
    if ($stmt->execute() === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar una subcategoria y su categoria por nombre
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $nombre nombre de la subcategoria
 * @return mixed un objeto de la busqueda
 */
function searchSubcategoriaOne($dbh, $nombre)
{
    $data = array(
        'nombre' => $nombre,
    );
    $stmt = $dbh->prepare("SELECT s.id id_subcategoria, s.nombre subcategoria, c.id id_Categoria, c.nombre categoria
FROM subcategorias s, categorias c
WHERE c.id=s.id_categoria AND s.nombre=:nombre;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}

/**
 * Buscar subcategoria a partir del i de la categoria
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id_categoria id de la categoria
 * @return bool
 */
function searchSubcategoriaByIdCategoria($dbh, $id_categoria)
{
    $data = array(
        'id_categoria' => $id_categoria,
    );
    $stmt = $dbh->prepare("SELECT s.id id_subcategoria, s.nombre subcategoria, c.id id_categoria, c.nombre categoria
FROM subcategorias s, categorias c
WHERE c.id=s.id_categoria AND s.id_categoria=:id_categoria;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar todas las categorias
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed un array de objetos de la busqueda
 */
function searchCategoriaAll($dbh)
{
    $stmt = $dbh->prepare("SELECT id, nombre FROM categorias;");
    if ($stmt->execute() === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar una categoria por nombre
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $nombre nombre de la categoria
 * @return mixed un objeto de la busqueda
 */
function searchCategoriaOne($dbh, $nombre)
{
    $data = array(
        'nombre' => $nombre,
    );
    $stmt = $dbh->prepare("SELECT id, nombre FROM categorias WHERE nombre=:nombre;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}

/**
 * buscar todos los anuncios
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioAll($dbh)
{
    $stmt = $dbh->prepare("SELECT a.id anuncio, titulo, a.descripcion descripcionAnuncio, a.foto fotoAnuncio,a.fecha_creacion fechaCreacion,
 s.nombre subcategoria, c.nombre categria, u.nombre nombreUsuario 
FROM anuncios a, subcategorias s, categorias c, usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario;");
    if ($stmt->execute() === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar anuncios por titulo
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $titulo titulo del anuncio
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioByTitulo($dbh, $titulo)
{
    $data = array(
        'titulo' => $titulo,
    );
    $stmt = $dbh->prepare("SELECT id, titulo, descripcion, foto, s.nombre subcategoria, c.nombre categria, usuario 
FROM anuncios a, subcategorias s, categorias c, usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND titulo=:titulo;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * Buscar anuncios por usuario
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id_usuario id del usuario
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioByUsuario($dbh, $id_usuario)
{
    $data = array(
        'id_usuario' => $id_usuario,
    );
    $stmt = $dbh->prepare("SELECT id, titulo, descripcion, foto, s.nombre subcategoria, c.nombre categria, usuario 
FROM anuncios a, subcategorias s, categorias c, usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_usuario=:id_usuario;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar anuncios por subcategoria
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id_subcategoria id de la subcategoria
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioBySubcategoria($dbh, $id_subcategoria)
{
    $data = array(
        'id_subcategoria' => $id_subcategoria,
    );
    $stmt = $dbh->prepare("SELECT id, titulo, descripcion, foto, s.nombre subcategoria, c.nombre categria, usuario 
FROM anuncios a, subcategorias s, categorias c, usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_subcategoria=:id_subcategoria;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar anuncios por categoria
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id_categoria id de la categoria
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioByCategoria($dbh, $id_categoria)
{
    $data = array(
        'id_categoria' => $id_categoria,
    );
    $stmt = $dbh->prepare("SELECT id, titulo, descripcion, foto, s.nombre subcategoria, c.nombre categria, usuario 
FROM anuncios a, subcategorias s, categorias c, usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_categoria=:id_categoria;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * Buscar todos los usuarios
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed array de objetos de la busqueda
 */
function searchUsuarioAll($dbh)
{
    $stmt = $dbh->prepare("SELECT id, usuario FROM usuarios;");
    if ($stmt->execute() === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar un usuario por email
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $usuario nombre del usuario
 * @return mixed un objeto de la busqueda
 */
function searchUsuarioOneEmail($dbh, $usuario)
{
    $data = array(
        'usuario' => $usuario,
    );
    $stmt = $dbh->prepare("SELECT id, usuario,password FROM usuarios WHERE usuario=:usuario;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}

/**
 * buscar un usuario por nombre
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $nombre nombre del usuario
 * @return mixed un objeto de la busqueda
 */
function searchUsuarioOneNombre($dbh, $nombre)
{
    $data = array(
        'nombre' => $nombre,
    );
    $stmt = $dbh->prepare("SELECT id, usuario FROM usuarios WHERE nombre=:nombre;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}

/**
 * buscar un usuario por nombre
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $usuario nombre del usuario
 * @param $pass contraseña del usuario
 * @return mixed un objeto de la busqueda
 */
function searchUsuarioAndPassword($dbh, $usuario, $pass)
{
    $data = array(
        'usuario' => $usuario,
        'password' => $pass,
    );
    $stmt = $dbh->prepare("SELECT id, usuario FROM usuarios WHERE usuario=:usuario AND password=:password;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}

/**
 * insertar un anuncio
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados del anuncio
 * @return mixed cantidad de filas afectadas
 */
function insertAnuncio($dbh, $data)
{
    $stmt = $dbh->prepare("INSERT INTO anuncios(titulo,descripcion,foto,id_subcategoria,id_usuario)
    VALUES (:titulo,:descripcion,:foto,:id_subcategoria,:id_usuario);");
    $stmt->execute($data);
    return $stmt->rowCount();
}

/**
 * eliminar un anuncio
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id id del anuncio
 * @return mixed cantidad de las filas afectadas
 */
function deleteAnuncio($dbh, $id)
{
    $data = array(
        'id' => $id,
    );
    $stmt = $dbh->prepare("DELETE FROM anuncios WHERE id=:id;");
    $stmt->execute($data);
    return $stmt->rowCount();
}

/**
 * editar un anuncio
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados del anuncio
 * @return mixed cantidad de filas afectadas
 */
function updateAnuncioOne($dbh, $data)
{
    $stmt = $dbh->prepare("UPDATE anuncios 
SET titulo=:titulo,descripcion=:descripcion, foto=:foto, id_subcategoria=:id_subcategoria,id_usuario=:usuario
where id=:id;");
    $stmt->execute($data);
    return $stmt->rowCount();
}

/**
 * Función para actualizar los datos del usuario
 *
 * @param $dbh
 * @param $nombre
 * @param $contraseña
 * @param $usuario
 * @param $descripcion
 * @param $id
 * @return mixed
 */
function updateUsuarioOne($dbh, $nombre, $contraseña, $usuario, $descripcion, $id)
{
    $data = array(
        'id' => $id,
        'nombre' => $nombre,
        'usuario' => $usuario,
        'contraseña' => $contraseña,
        'descripcion' => $descripcion

    );
    $stmt = $dbh->prepare("UPDATE usuarios
    SET usuario=:usuario,nombre=:nombre,contraseña=:contraseña,descripcion=:descripcion
    WHERE id=:id");
    $stmt->execute($data);
    return $stmt->rowCount();
}

/**
 * Función para sacar el id de un usuario
 *
 * @param $dbh
 * @param $nombre
 * @return bool
 */
function searchUserIdByNombre($dbh, $nombre)
{
    $data = array(
        'nombre' => $nombre
    );
    $stmt = $dbh->prepare("SELECT id FROM usuarios WHERE nombre=:nombre");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchObject();
    } else {
        return false;
    }
}