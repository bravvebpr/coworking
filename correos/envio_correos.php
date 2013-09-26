<?php
$archivo = file_get_contents('correo2.html'); 

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Hoy en el Mundo <osquitarbs@gmail.com>\r\n"; 
$mail = "albertominaya91@gmail.com";
$asunto = 'Bienvenido a hoy en el mundo';
$mensaje = $archivo;
if(mail($mail,$asunto,$mensaje,$headers))
    echo "Se ha enviado un correo a su cuenta reviselo para acceder a la web";
 else
 echo "Error al enviar correo, intentelo en unos minutos, gracas";

?>