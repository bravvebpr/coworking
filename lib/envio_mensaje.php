<?php

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: Co-working.me <hoyenelmundoweb1@gmail.com>\r\n";
$mail = $_POST['email'];
$asunto = $_POST['asunto'];
$mensaje = '
<p style="background-color:#f34d25;background-image:-moz-linear-gradient(center top,#d10a0d,#650506);background:-moz-linear-gradient(top,#d10a0d,#650506);background:-o-linear-gradient(top,#d10a0d,#650506);border:1px solid #6e6e6e;color:white;font-size:1.2em;font-weight:bold;text-align:center;padding-bottom:1%;padding-top:1%;border-radius:1em">
   ' . $_POST['nombre'] . ' quiere contactar contigo, su numero de telefono es '. $_POST['number'] . '</p>
  </p><p style="background-color:#b7f5ec;background-image:-moz-linear-gradient(center top,#d10a0d,#650506);background:-moz-linear-gradient(top,#d10a0d,#650506);background:-o-linear-gradient(top,#d10a0d,#650506);border:1px solid #6e6e6e;color:#000000;font-size:14px;font-weight:bold;text-align:center;padding-bottom:1%;padding-top:1%;border-radius:1em"><strong>Mensaje: </strong>' . $_POST['mensaje'] . ' 
      <p>
';
if (mail($mail, $asunto, $mensaje, $headers)){
   
    echo $asunto;
    echo $mensaje;
}
else
    echo "Error al enviar correo, intentelo en unos minutos, gracas";
?>
