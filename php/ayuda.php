<?php
/**
 * pagina del boton de ayuda del footer donde mandas un correo a un correo de notifcaciones de ajebask
 */
include "database/mysql.php" ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Ajebask</title>
        <link href="../css/general.css" rel="stylesheet">
        <link href="../css/ayuda.css" rel="stylesheet">
        <link href="../css/normalize.css" rel="stylesheet">
        <script src="../script/librerias/SmtpJS.com-v3.0.0/SmtpJS.js"></script>
        <script src="../script/envioCorreo.js"></script>
        <script src="../script/librerias/jQuery/jquery-3.4.1.js"></script>
        <script src="../script/ayuda.js"></script>
        <script src="../script/enrutado.js"></script>
        <script src="../script/validaciones.js"></script>
        <script>
            window.onload=function () {
                document.getElementById("listaAsuntos").selectedIndex =0;
            }
        </script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
    <div id="contenedor2">
        <header>
            <img src="../img/aje_logo.png" onclick="goIndex()">
        </header>
        <div id="bloque">
            <h1 id="titulo">¿En qué podemos ayudarte?</h1>
            <form action="#" method="post" id="datos">
                <p>Indica el motivo de contacto</p>
                <select id="listaAsuntos" onchange="seleccionarValor()">
                    <option value="nada" selected>-</option>
                    <option value="Modificar y borrar un anuncio">Modificar y borrar un anuncio</option>
                    <option value="Problemas con mi contraseña">Problemas con mi contraseña</option>
                    <option value="No puedo actualizar mis datos">No puedo actualizar mis datos</option>
                    <option value="Eliminar mi cuenta">Eliminar mi cuenta</option>
                    <option value="He sido victima de una estafa">He sido victima de una estafa</option>
                    <option value="Sugerencia">Sugerencia</option>
                </select>
                <div id="divOcultar">
                    <label for="asunto">Asunto: </label>
                    <input type="text" id="asunto">

                    <label for="correo">Correo: </label>
                    <input type="text" id="correo">

                    <label for="textarea">Textarea: </label>
                    <textarea id="textarea" autogrow></textarea>

                    <input type="button" value="Enviar"
                           onclick="enviarAyuda($('#correo').val(),$('#asunto').val(),$('#listaAsuntos option:selected').text(),$('#textarea').val())">
                </div>
            </form>
        </div>


<?php include "includes/print/footer.print.php" ?>
