<?php
include "database/mysql.php";

if (isset($_COOKIE["usuario"])) {
    $dbh = connect();

    $resultado = searchUsuarioOneEmail($dbh,$_COOKIE["usuario"]);

    $nombre = $resultado ->nombre;
    $usuario = $resultado ->usuario;
    $password = $resultado->password;
    $descripcion = $resultado->descripcion;

    close($dbh);
} else {
    header("location: login.php?action=editarPerfil");
}

if (isset($_GET["filas"])) {
    echo "  " . $_GET["filas"] . " filas modificadas";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/editarPerfil.css">
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../../img/aje_logo.png">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

    <form id="Datos" action="actions/editarPerfil.act.php" method="post" enctype="multipart/form-data">
        <h1>Editar Perfil</h1>


        <input type="hidden" name="passwordPasar" value="<?php echo $password ?>">
        <label>Foto: <input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"></label>
        <label>Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>"> </label>
        <label>Contraseña: <input type="text" name="password" value=""> </label>
        <label>Repite contraseña: <input type="text" name="repetirPassword" value=""></label>
        <label>Email: <input type="text" name="email" value="<?php echo $usuario ?>"></label>
        <label>Descripcion: <textarea name="descripcion" value="<?php echo $descripcion ?>"></textarea></label>

        <input type="submit" value="Actualizar Usuario">
    </form>

    <?php include("includes/inc_footer.php") ?>
</div>

</body>

</html>

