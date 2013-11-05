<?php
session_start();
if ($_SESSION["usuario"] == "")
    header("Location: login.php");
?>
<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);

mysql_query("DELETE FROM `centros` WHERE id={$_GET['id']}");

$error=  mysql_error();
        mysql_close($conexion);
if($error!="")
    echo $error;
else
    header("Location: ../listado.php");
?>
