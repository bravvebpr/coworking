<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_panel.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="lib/panel_gest.js"></script>
    </head>
    <body>
        <div class="pop_up_panel">
            <div class="cabecera_pop_up">Crear nuevo centro <div class="cerrar_pop" onclick="desaparecer_pop();">X</div></div>
            <form style="margin: 77px; margin-top: 50px; margin-bottom: 50px;" action="lib/insertar_f.php" method="POST" enctype="multipart/form-data">
                Localidad<br/><input type="text" name="localidad"><br/>
                Nombre<br/><input type="text" name="nombre"><br/>
                Telefono<br/><input type="text" name="tlf"><br/>
                Direccion<br/><input type="text" name="direccion"><br/>
                Descripcion<br/><textarea class="text_frm" name="descripcion"></textarea><br/>
                <div class="archivo">
                    Subir Imagen:</p><p><span><input id="uploadImage" name="uploadImage" style="height: 150px" type="file" onChange="ver(newg.uploadImage.value);"/></span>
                    <span style="position: absolute; margin-top: -86px; margin-left: 147px;">&Oacute; arrastrala aqui</span>
                </div>
                URL<br/><input type="text" name="url"><br/>
                <input type="submit" value="GUARDAR" onclick="validarPop_up_editor(this.form);">
            </form>
        </div>
    </body>
</html>
