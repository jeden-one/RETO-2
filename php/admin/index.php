<?php
/**
 * pagina para el administrado para insertar usuarios, categorias o subcategorias
 */
include '../includes/admin.logic.php';
include '../includes/print/adminMensajes.print.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>insertar Usuario</title>
</head>

<body>
<div id="contenedor">
    <header id="header">
        <img src="../../img/ajebask.jpeg">
    </header>
    <?php mensajes(); ?>
    <form method="post" action="../actions/insertarUsuario.act.php">
        <h1>Inserta Usuario</h1>
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" autofocus>
        <input type="text" id="nombre" name="nombre" placeholder="Nombre">
        <input type="password" id="pass" name="pass" placeholder="Contraseña">
        <input type="submit" id="login" value="Registrar">
    </form>
    <form method="post" action="../actions/insertarCategoria.act.php">
        <h1>Insertar Categoria</h1>
        <input type="text" id="categoria" name="categoria" placeholder="Categoria">
        <input type="submit" id="insertarCategoria" value="Insertar">
    </form>
    <form method="post" action="../actions/insertarSubcategoria.act.php">
        <h1>Inserta Subcategoria</h1>
        <label for="categoriaSelect">Categoria: </label>
        <select id="categoriaSelect" name="categoriaSelect">
            <?php include '../includes/print/categoriaSelect.print.php'; ?>
        </select>
        <input type="text" id="subcategoria" name="subcategoria" placeholder="Subcategoria">
        <input type="submit" id="insertarSubcategoria" value="Insertar">
    </form>
</body>