<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../CSS/editarPerfil.css">
    <script src="index.js"></script>
</head>

<body>
<div id="contenedor5">
    <header id="header">
        <img src="../img/ajebask.jpeg">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

    <div id="Datos">
        <h1>Editar Perfil</h1>

        <label>Nombre: <input type="text" name="nombre"> </label>
        <label>Contraseña: <input type="password" name="contraseña"> </label>
        <label>Email: <input type="email" name="email"></label>


        <input type="button" value="Guardar">
    </div>

    <?php include("Includes/inc_footer.php")?>
</div>

</body>

</html>

