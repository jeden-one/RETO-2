<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>insertar Usuario</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
<div id="contenedor">
    <header id="header">
        <img src="../../img/ajebask.jpeg">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>
    <form method="post" action="../actions/insertarUsuario.act.php">
        <h1>Inserta Usuario</h1>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" autofocus>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="password" id="pass" name="pass" placeholder="Contraseña">
        <input type="submit" id="login" value="Registrar">
    </form>
</body>