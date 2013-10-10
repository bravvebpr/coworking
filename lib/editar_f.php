<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);

mysql_query("UPDATE `centros` SET `localidad`='{$_POST['localidad']}',`nombre`='{$_POST['nombre']}',`tlf`='{$_POST['tlf']}',
    `direccion`='{$_POST['direccion']}',`descripcion`='{$_POST['descripcion']}',`imagen`='{$_POST['imagen']}',`url`='{$_POST['url']}'
        WHERE id={$_POST['id']}");

$error=  mysql_error();
        mysql_close($conexion);
if($error!="")
    echo $error;
else
    header("Location: ../listado.php");
?>
