<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);
$datos = mysql_query("SELECT * FROM centros WHERE id='{$_GET['id']}'");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link rel="icon" type="image/png" href="img/favicon.png">
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_panel.css">
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="lib/panel_gest.js"></script>
        <script src="lib/validar.js"></script>
    </head>
    <body>
        <div class="pop_up_panel">
            <div class="cabecera_pop_up">Editar un centro <div class="cerrar_pop" onclick="desaparecer_pop();">X</div></div>
            <form style="margin: 77px; margin-top: 50px; margin-bottom: 50px;" action="lib/editar_f.php" method="POST" enctype="multipart/form-data">
                <?php $filae = mysql_fetch_array($datos) ?>
                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                Localidad<br/><input type="text" name="localidad" value="<?php echo $filae['localidad']; ?>"><br/>
                Nombre<br/><input type="text" name="nombre" value="<?php echo $filae['nombre']; ?>"><br/>
                Telefono<br/><input type="text" name="tlf" value="<?php echo $filae['tlf']; ?>"><br/>
                Direccion<br/><input type="text" name="direccion" value="<?php echo $filae['direccion']; ?>"><br/>
                Descripcion<br/><textarea class="text_frm" name="descripcion"><?php echo $filae['descripcion']; ?></textarea><br/>
                Subir Imagen:<p><span><input id="uploadImage" value="<?php echo $filae['imagen']; ?>" name="uploadImage" type="file" onChange="ver(newg.uploadImage.value);"/></span>
                    URL<br/><input type="text" name="url" value="<?php echo $filae['url']; ?>"><br/>
                    <input type="button" value="GUARDAR" onclick="validarPop_up_editor(this.form);">
            </form> 
        </div>
    </body>
</html>
