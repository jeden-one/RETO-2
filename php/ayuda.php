<?php include "includes/inc_header2.php"; ?>

<form action="actions/" method="post">
    <h1>¿En qué podemos ayudarte</h1>

    <p>Indica el motivo de contacto</p>
    <select id="listaAsuntos" onchange="seleccionarValor()">
        <option value="nada">-</option>
        <option value="Modificar y borrar un anuncio">Modificar y borrar un anuncio</option>
        <option value="Problemas con mi contraseña">Problemas con mi contraseña</option>
        <option value="No puedo actualizar mis datos">No puedo actualizar mis datos</option>
        <option value="Eliminar mi cuenta">Eliminar mi cuenta</option>
        <option value="He sido victima de una estafa">He sido victima de una estafa</option>
        <option value="Sugerencia">Sugerencia</option>
    </select>

    <div id="divOcultar">
        <p>Asunto *</p>
        <input type="text" id="asunto">

        <p>Correo electrónico *</p>
        <input type="text" id="correo">

        <p>Descripción *</p>
        <textarea></textarea>

        <p>Los campos que contengan * serán de relleno obligatorio</p>
        <p>Ingrese la informacón que se le solicita. Un responsable de soporte técnico le responderá lo más pronto posible.</p>

        <input type="button" value="Enviar" onclick="enviarAyuda()">
    </div>
</form>

<?php include "includes/inc_footer.php"?>