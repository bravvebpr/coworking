<?php
$conexion = mysql_connect("localhost", "proyecto", "proyecto");
mysql_select_db("proyecto", $conexion);

mysql_query("DELETE FROM `centros` WHERE id={$_GET['id']}");

$error=  mysql_error();
        mysql_close($conexion);
if($error!="")
    echo $error;
else
    header("Location: ../listado.php");
?>
