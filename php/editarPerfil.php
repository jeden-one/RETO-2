<?php
include "includes/editarPerfil.logic.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/editarPerfil.css" rel="stylesheet">
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../../img/aje_logo.png">
        <p>
            <strong>
                <?php $dbh = connect();
                $cont = counterAnuncios($dbh);
                echo $cont; ?>
            </strong> anuncios publicados
        </p>
    </header>

    <form id="Datos" action="actions/editarPerfil.act.php" method="post" enctype="multipart/form-data">
        <?php mensajeRespuesta() ?>
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

    <?php include("includes/print/footer.print.php") ?>
</div>

</body>

</html>

