<?php
include "database/mysql.php";

if (isset($_GET["usuario"])) {
    $dbh = connect();

    $_SESSION["usuario"] = $_GET["usuario"];

    $resultado = searchUsuario($dbh,$_SESSION["usuario"]);

    $nombre = $resultado ->nombre;
    $usuario = $resultado ->usuario;
    $password = $resultado->password;
    $descripcion = $resultado->descripcion;

    close($dbh);
} else {
    header("location: login.php");
}

if (isset($_GET["filas"])) {
    echo "  " . $_GET["filas"] . " filas modificadas";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/editarPerfil.css">
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../img/aje_logo.png>
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

    <form id="Datos" action="actions/editarPerfil.act.php?usuario=<?php echo $_SESSION["usuario"]; ?>" method="post">
        <h1>Editar Perfil</h1>

        <label><input type="hidden" name="id"></label>
        <label>Foto: <input type="file"></label>
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

