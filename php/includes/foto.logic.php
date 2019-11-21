<?php
/**
 * todo lo relacionado con la subida de fotos a la base de datos
 */
$rutaFotoTemporal = $_FILES['foto']["tmp_name"];
$array = explode('.', $_FILES['foto']["name"]);
// Capturamos el último elemento del array anterior que vendría a ser la extensión
$ext = end($array);
//cambiar el nombre de la foto por si hay coincidencias
$nombreFoto = microtime() . '.' . $ext;
$nuevaRuta = "../../img/" . $nombreFoto;
//Movemos el archivo desde su ubicación temporal hacia la nueva ruta
move_uploaded_file($rutaFotoTemporal, $nuevaRuta);

