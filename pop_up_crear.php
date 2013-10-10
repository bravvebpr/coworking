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
                Descripcion<br/><input type="text" name="descripcion"><br/>
                <p>Subir Imagen:</p><p><input id="uploadImage" name="uploadImage" type="file" onChange="ver(newg.uploadImage.value);"/>
                URL<br/><input type="text" name="url"><br/>
                <input type="submit" value="GUARDAR">
            </form>
        </div>
    </body>
</html>
