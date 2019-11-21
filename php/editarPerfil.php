<?php
/**
 * pagina donde editas el perfil
 */
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script/enrutado.js"></script>
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../../img/aje_logo.png" onclick="goIndex()">
    </header>

    <h1>Editar Perfil</h1>
    <div id="divImg">
        <img id="fotoPerfil" src="../img/<?php echo $nombreFoto; ?>" alt="">
    </div>
    <form id="datos" action="actions/editarPerfil.act.php" method="post" enctype="multipart/form-data">
        <?php mensajeRespuesta() ?>
        <input type="hidden" name="passwordPasar" value="<?php echo $password; ?>">
        <input type="hidden" name="fotoPasar" value="<?php echo $nombreFoto ?>">
        <input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
        <label>Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre; ?>">
        <label>Contraseña: </label><input type="text" name="password" value="">
        <label>Repite contraseña: </label><input type="text" name="repetirPassword" value="">
        <label>Email: </label><input type="text" name="email" value="<?php echo $usuario; ?>">
        <label>Descripcion: </label><textarea name="descripcion"
                                              value="<?php echo $descripcion; ?>"><?php echo $descripcion; ?></textarea>
        <input type="submit" value="Actualizar Usuario">
    </form>

    <?php include("includes/print/footer.print.php") ?>
</div>

</body>

</html>
