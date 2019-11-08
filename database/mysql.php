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
FROM Subcategorias s, Categorias c
WHERE c.id=s.id_categoria;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
FROM Subcategorias s, Categorias c
WHERE c.id=s.id_categoria AND s.nombre=:nombre;");
    $stmt->execute($data);
    return $stmt->fetchObject();
}

/**
 * buscar todas las categorias
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed un array de objetos de la busqueda
 */
function searchCategoriaAll($dbh)
{
    $stmt = $dbh->prepare("SELECT id, nombre FROM Categorias;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
    $stmt = $dbh->prepare("SELECT id, nombre FROM Categorias WHERE nombre=:nombre;");
    $stmt->execute($data);
    return $stmt->fetchObject();
}

/**
 * buscar todos los anuncios
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioAll($dbh)
{
    $stmt = $dbh->prepare("SELECT id, titulo, descripcion, foto, s.nombre subcategoria, c.nombre categria, usuario 
FROM Anuncios a, Subcategorias s, Categorias c, Usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
FROM Anuncios a, Subcategorias s, Categorias c, Usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND titulo=:titulo;");
    $stmt->execute($data);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
FROM Anuncios a, Subcategorias s, Categorias c, Usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_usuario=:id_usuario;");
    $stmt->execute($data);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
FROM Anuncios a, Subcategorias s, Categorias c, Usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_subcategoria=:id_subcategoria;");
    $stmt->execute($data);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
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
FROM Anuncios a, Subcategorias s, Categorias c, Usuarios u 
WHERE s.id=a.id_subcategoria AND c.id=s.id_categoria AND u.id=a.id_usuario AND id_categoria=:id_categoria;");
    $stmt->execute($data);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

/**
 * buscar todos los usuarios
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed array de objetos de la busqueda
 */
function searchUsuarioAll($dbh)
{
    $stmt = $dbh->prepare("SELECT id, usuario FROM Usuarios;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

/**
 * buscar un usuario por nombre
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $usuario nombre del usuario
 * @return mixed un objeto de la busqueda
 */
function searchUsuarioOne($dbh, $usuario)
{
    $data = array(
        'usuario' => $usuario,
    );
    $stmt = $dbh->prepare("SELECT id, usuario FROM Usuarios WHERE usuario=:usuario;");
    $stmt->execute($data);
    return $stmt->fetchObject();
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
    $stmt = $dbh->prepare("INSERT INTO Anuncios(titulo,descripcion,foto,id_subcategoria,id_usuario)
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
    $stmt = $dbh->prepare("DELETE FROM Anuncios WHERE id=:id;");
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
    $stmt = $dbh->prepare("UPDATE Anuncios 
SET titulo=:titulo,descripcion=:descripcion, foto=:foto, id_subcategoria=:id_subcategoria,id_usuario=:usuario
where id=:id;");
    $stmt->execute($data);
    return $stmt->rowCount();
}

$dbh=connect();
$categorias=searchCategoriaAll($dbh);
foreach ($categorias as $value){
    echo $value->id;
    echo $value->nombre;
}
