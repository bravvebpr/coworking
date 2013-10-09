<?php
$conexion = mysql_connect("localhost", "proyecto", "proyecto");
mysql_select_db("proyecto", $conexion);

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
