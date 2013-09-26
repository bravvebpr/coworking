<?php
$archivo = file_get_contents(''.$_POST['img_select'].'.html'); 

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: co-workin.me <".$_POST['nombre_p'].">\r\n"; 
$mail = $_POST['correo'];
$asunto = 'co-working.me';
$mensaje = $archivo;
if(mail($mail,$asunto,$mensaje,$headers))
    echo "Se ha enviado un correo a su cuenta reviselo para acceder a la web";
 else
 echo "Error al enviar correo, intentelo en unos minutos, gracas";

?>