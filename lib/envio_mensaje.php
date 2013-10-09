<?php

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= 'From: Co-working.me <' . $_POST['email'] . '>\r\n';
$mail = $_POST['email'];
$asunto ='<p><strong style="font-size:23px;">' . $_POST['asunto'] . '</strong>';

if($_POST['number']=="")
    $sw_nn = "No ha dejado numero";
else
    $sw_nn = "su numero es " .$_POST['number'] ."";
$mensaje = '<p><strong style="font-size:18px;">' . $_POST['nombre'] . '</strong> quiere contactar contigo.</br></br>
    <strong style="font-size:18px;">Telefono:</strong></br>' . $sw_nn . '</p>
  <p><strong style="font-size:18px;">Mensaje:</strong></br> ' . $_POST['mensaje'] . ' 
   ';
if (mail($mail, $asunto, $mensaje, $headers)) {

    echo $asunto;
    echo $mensaje;
}
else
    echo "Error al enviar correo, intentelo en unos minutos, gracas";
?>
