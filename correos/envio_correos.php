<?php
$conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
mysql_select_db("db496705092", $conexion);
$env = mysql_query("SELECT correo, localidad FROM  `envios` WHERE  `correo`='{$_POST['tuemail']}' and `localidad`='{$_POST['localidad']}'");
$u=mysql_fetch_array($env);
if($u['correo']==""){
    mysql_query("INSERT INTO  `envios` (`correo`, `numeros_envio`, `localidad`) VALUES ('{$_POST['tuemail']}', '1', '{$_POST['localidad']}')");
   }
else{
    $n_env = mysql_query("SELECT id, numeros_envio FROM envios where correo='{$_POST['tuemail']}' and `localidad`='{$_POST['localidad']}'");
    $n_e=mysql_fetch_array($n_env);
    $n=$n_e['numeros_envio'];
    $n++;
    mysql_query("UPDATE  `envios` SET  `numeros_envio` =  $n WHERE  `id` ={$n_e['id']}");
}
$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
$longitudCadena=strlen($cadena);
$pass = "";
$longitudPass=10;
for($i=1 ; $i<=$longitudPass ; $i++){
$pos=rand(0,$longitudCadena-1);
$codigo_cup .= substr($cadena,$pos,1);}
$datos = mysql_query("SELECT nombre, tlf, direccion, descripcion, imagen, url FROM centros where id='{$_POST['localidad']}'");

$filae = mysql_fetch_array($datos);

mysql_close($conexion);
if($_POST['img_select']=="correo2"){require './correo2.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo3"){require './correo4.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo4"){require './correo3.php';$archivo = $cartel2;}
if($_POST['img_select']=="correo5"){require './correo5.php';$archivo = $cartel2;}
$uniqueid = uniqid('np');
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/alternative;boundary=" . $uniqueid . "\r\n";
$message = "";
$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
$message .= "Content-type: text/plain;charset=utf-8\r\n\r\n";
//$message .= "";
$message .= "\r\n\r\n--" . $uniqueid . "\r\n";
$message .= "Content-type: text/html;charset=utf-8\r\n\r\n";
$message .= $archivo;
$message .= "\r\n\r\n--" . $uniqueid . "--";
$headers .= "From: info@alfadentalteam.es <info@alfadentalteam.es>\r\n";
$mail = $_POST['correo'];
$asunto = 'co-working.me este es el asunto';
if (mail($mail, $asunto, $message, $headers)){
    header('Location: ../email_correcto.php');
}
else
    header('Location: ../email_incorrecto.php');