<?php
/**
 * sentencias de la para conectarse a la base de datos para insertar, editar, borrar o consultar
 */

/**
 * Conectar a la base de datos
 *
 * @return PDO variable para poder conectarse en cada sentencia
 */
function connect()
{
    $dbname = 'proyecto_ajebask';
    $host = 'localhost';
    $user = 'jeden';
    $pass = 'jeden';
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
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
 * Buscar subcategoria a partir del id de la categoria
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
    $stmt = $dbh->prepare("SELECT id, nombre FROM categorias ORDER BY id;");
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
        'titulo' => '%' . $titulo . '%'
    );

    $stmt = $dbh->prepare("SELECT a.id id,a.titulo titulo, a.foto fotoAnuncio, u.nombre nombreUsuario,
 a.fecha_creacion fechaCreacion
    FROM anuncios a, usuarios u 
    WHERE u.id=a.id_usuario AND titulo LIKE :titulo");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar anuncios por titulo
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $usuario email del usuario
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioByNombreUsuario($dbh, $usuario)
{
    $data = array(
        'usuario' => '%' . $usuario . '%'
    );

    $stmt = $dbh->prepare("SELECT a.id id,a.titulo titulo, a.foto fotoAnuncio, u.nombre nombreUsuario,
 a.fecha_creacion fechaCreacion
    FROM anuncios a, usuarios u 
    WHERE u.id=a.id_usuario AND u.nombre LIKE :usuario");
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
 * @param $usuario el email del usuario
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioByUsuario($dbh, $usuario)
{
    $data = array(
        'usuario' => $usuario,
    );
    $stmt = $dbh->prepare("SELECT a.id idAnuncio,a.titulo titulo, a.foto foto, a.fecha_creacion fecha_creacion,
u.usuario nombreUsuario, a.descripcion descripcion,s.id subcategoria,s.id_categoria categoria
FROM usuarios u, anuncios a,subcategorias s
WHERE u.id = a.id_usuario AND a.id_subcategoria=s.id AND u.usuario=:usuario;");
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
        'id_subcategoria' => $id_subcategoria
    );
    $stmt = $dbh->prepare("SELECT a.id id,a.titulo titulo, a.foto fotoAnuncio,a.id_subcategoria subcategoria,
 u.nombre nombreUsuario, a.fecha_creacion fechaCreacion
    FROM anuncios a, usuarios u 
    WHERE u.id=a.id_usuario AND a.id_subcategoria=:id_subcategoria;");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * buscar anuncios por subcategoria pero sin el anuncio elegido
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $id_subcategoria id de la subcategoria
 * @param $id_anuncio id del anuncio elegido
 * @return mixed array de objetos de la busqueda
 */
function searchAnuncioBySubcategoriaSinUnAnuncio($dbh, $id_subcategoria, $id_anuncio)
{
    $data = array(
        'id_subcategoria' => $id_subcategoria,
        'id_anuncio' => $id_anuncio
    );
    $stmt = $dbh->prepare("SELECT a.id id,a.titulo titulo, a.foto fotoAnuncio,a.id_subcategoria subcategoria,
 u.nombre nombreUsuario, a.fecha_creacion fechaCreacion, u.foto fotoUsuario
    FROM anuncios a, usuarios u 
    WHERE u.id=a.id_usuario AND a.id_subcategoria=:id_subcategoria and a.id!=:id_anuncio;");
    if ($stmt->execute($data) === true) {
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
    $stmt = $dbh->prepare("SELECT id, usuario,password,nombre,foto,descripcion FROM usuarios WHERE usuario=:usuario;");
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
SET titulo=:titulo,descripcion=:descripcion, foto=:foto, id_subcategoria=:id_subcategoria,id_usuario=:id_usuario
where id=:id;");
    $stmt->execute($data);
    return $stmt->rowCount();
}

/**
 * editar los datos del usuario
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados del usuario
 * @return mixed cantidad de filas afectadas
 */
function updateUsuarioOne($dbh, $data)
{
    $stmt = $dbh->prepare("UPDATE usuarios
    SET usuario=:usuario,nombre=:nombre,password=:password,foto=:foto,descripcion=:descripcion
    WHERE id=:id");
    $stmt->execute($data);
    return $stmt->rowCount();
}


/**
 * insertar un usuario (solo admin)
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados del usuario
 * @return mixed cantidad de filas afectadas
 */
function insertUsuario($dbh, $data)
{
    $stmt = $dbh->prepare("INSERT INTO usuarios (usuario,password,nombre,foto) VALUES (:usuario,:password,:nombre,:foto)");
    $stmt->execute($data);
    return $stmt->rowCount();
}
/**
 * insertar una categoria (solo admin)
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados de la categoria
 * @return mixed cantidad de filas afectadas
 */
function insertCategoria($dbh, $data)
{
    $stmt = $dbh->prepare("INSERT INTO categorias (nombre) VALUES (:nombre)");
    $stmt->execute($data);
    return $stmt->rowCount();
}
/**
 * insertar una subcategoria (solo admin)
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $data array asociativo con todos los apartados de la subcategoria
 * @return mixed cantidad de filas afectadas
 */
function insertSubcategoria($dbh, $data)
{
    $stmt = $dbh->prepare("INSERT INTO categorias (nombre,id_categoria) VALUES (:nombre,:categoria)");
    $stmt->execute($data);
    return $stmt->rowCount();
}
/**
 * buscar por coincidencia en titulo y nombre usuario
 *
 * @param $dbh variable para conectarse a la base de datos
 * @param $busqueda datos insertado en el cuadro de busqueda
 * @return mixed lista de objetos de la busqueda
 */
function searchAnuncioByBusqueda($dbh, $busqueda)
{
    $data = array(
        'busqueda' => '%' . $busqueda . '%'
    );

    $stmt = $dbh->prepare("SELECT a.id id,a.titulo titulo, a.foto fotoAnuncio,a.id_subcategoria subcategoria,
 u.nombre nombreUsuario, a.fecha_creacion fechaCreacion, a.descripcion descripcion, u.foto fotoUsuario, u.usuario usuario, sc.nombre subcat, c.nombre cat
    FROM anuncios a, usuarios u, subcategorias sc, categorias c
    WHERE u.id=a.id_usuario AND a.id_subcategoria=sc.id AND sc.id_categoria=c.id AND (titulo LIKE :busqueda OR u.nombre LIKE :busqueda)");
    if ($stmt->execute($data) === true) {
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    } else {
        return false;
    }
}

/**
 * busca la cantidad de anuncios creados
 *
 * @param $dbh variable para conectarse a la base de datos
 * @return mixed la cantidad de anuncios creados
 */
function counterAnuncios($dbh)
{
    $stmt = $dbh->prepare("SELECT count(*) FROM anuncios");
    if ($stmt->execute() === true) {
        $cont = $stmt->fetchColumn();
        return $cont;
    } else {
        return false;
    }
}

