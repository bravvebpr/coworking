<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);

$v_ses = mysql_query("SELECT usuario, password FROM usuarios WHERE usuario='{$_POST['usuario']}' and password='{$_POST['password']}'");

echo mysql_error();
$i_usuario = mysql_fetch_array($v_ses);
if ($i_usuario != "") {
    session_start();
    $_SESSION["usuario"] = $i_usuario['nombre'];
    ;
    header("Location: ../listado.php");
}
else
    header("Location: ../login.php?er=1");
?>
