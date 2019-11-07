<?php


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

function searchSubcategoriaAll($dbh)
{
    $stmt = $dbh->prepare("SELECT nombre FROM Subcategorias;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function searchSubcategoriaOne($dbh, $nombre)
{
    $data = array(
        'nombre' => $nombre,
    );
    $stmt = $dbh->prepare("SELECT nombre FROM Subcategorias WHERE nombre=:nombre;");
    $stmt->execute($data);
    return $stmt->fetchObject();
}
function searchSubcategoriaAndCategoriaAll($dbh){
    $stmt=$dbh->prepare("SELECT s.nombre, c.nombre
FROM Subcategorias s, Categorias c
WHERE c.id=s.id_categoria;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function searchCategoriaAll($dbh){
    $stmt = $dbh->prepare("SELECT nombre FROM Categoria;");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

$dbh=connect();
searchSubcategoriaAndCategoriaAll($dbh);
