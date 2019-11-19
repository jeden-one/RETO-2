<?php
include "includes/inc_editarPerfil.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Perfil</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/editarPerfil.css" rel="stylesheet" >
    <script src="../script/goIndex.js"></script>
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../../img/aje_logo.png" onclick="goIndex()">
    </header>

    <h1>Editar Perfil</h1>
    <img id="fotoPerfil" src="../img/<?php echo $nombreFoto;?>" alt="">
    <form id="datos" action="actions/editarPerfil.act.php" method="post" enctype="multipart/form-data">
        <?php mensajeRespuesta() ?>
        <input type="hidden" name="passwordPasar" value="<?php echo $password;?>">
        <label>Foto: </label><input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
        <label>Nombre: </label><input type="text" name="nombre" value="<?php echo $nombre;?>">
        <label>Contraseña: </label><input type="text" name="password" value="">
        <label>Repite contraseña: </label><input type="text" name="repetirPassword" value="">
        <label>Email: </label><input type="text" name="email" value="<?php echo $usuario;?>">
        <label>Descripcion: </label><textarea name="descripcion" value="<?php echo $descripcion;?>"><?php echo $descripcion;?></textarea>

        <input type="submit" value="Actualizar Usuario">
    </form>

    <?php include("includes/inc_footer.php") ?>
</div>

</body>

</html>

