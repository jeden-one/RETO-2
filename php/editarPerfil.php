<?php
include "database/mysql.php";

if (isset($_GET["usuario"])) {
    $dbh = connect();

    $resultado = searchUsuario($dbh,$_GET["usuario"]);

    $nombre = $resultado ->nombre;
    $usuario = $resultado ->usuario;
    $password = $resultado->password;
    $descripcion = $resultado->descripcion;

    close($dbh);
}

if (isset($_GET["filas"])) {
    ?>
    <script>alert('<?php $_GET["filas"] ?> filas modificadas')</script>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../CSS/editarPerfil.css">
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../img/aje_logo.png>
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

    <form id="Datos" action="actions/editarPerfil.act.php" method="post">
        <h1>Editar Perfil</h1>

        <label><input type="hidden" name="id"></label>
        <label>Foto: <input type="file"></label>
        <label>Nombre: <input type="text" name="nombre" value="<?php echo $nombre ?>"> </label>
        <label>Contraseña: <input type="password" name="password" value="<?php echo $password ?>"> </label>
        <label>Email: <input type="email" name="email" value="<?php echo $usuario ?>"></label>
        <label>Descripcion: <textarea name="descripcion" value="<?php echo $descripcion ?>"></textarea></label>

        <input type="button" value="Actualizar Usuario">
    </form>

    <?php include("includes/inc_footer.php") ?>
</div>

</body>

</html>

