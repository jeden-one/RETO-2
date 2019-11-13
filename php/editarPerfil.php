<?php
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
    <link rel="stylesheet" href="../css/editarPerfil.css">
    <script src="../script/index.js"></script>
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
        <label>Nombre: <input type="text" name="nombre"> </label>
        <label>Contraseña: <input type="password" name="password"> </label>
        <label>Email: <input type="email" name="email"></label>
        <label>Descripcion: <textarea name="descripcion" rows="10" cols="50"></textarea></label>

        <input type="button" value="Actualizar Usuario">
    </form>

    <?php include("includes/inc_footer.php") ?>
</div>

</body>

</html>

