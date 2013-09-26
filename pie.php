<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="lib/colocacion.js"></script>
    </head>
    <body>
        <div class="pie">
            <div class="contenedor_pie">
                <div class="pop-up"></div>
                <div class="imagen_pop-up">
                    <img src="" alt="" id="img_pop_gr">
                </div>
                
                <span class="idea">Si conoces a alguien en esta situaci&oacute;n, ayudale, lo est&aacute; pidiendo a gritos.</span>
                <img src="img/megafono.png" alt="" ><br/>
                <span class="idea">
                    Env&iacute;a un email a los conocidos con este problema para darles un toque de atenci&oacute;n y practiquen co-worwing.<br/>
                    Para ello rellena el siguiente formulario:
                </span>
                <form name="formulario" id="formulario" action="correos/envio_correos.php" method="post">
                    <span class="txt_form">Nombre de tu amigo:</span> <input type="text" class="inp_form" name="nombre_a"><br/>
                    <span class="txt_form">Tu nombre:</span> <input type="text" class="inp_form" name="nombre_p"><br/>
                    <span class="txt_form">Correo de tu amigo:</span> <input type="text" class="inp_form" name="correo"><br/>
                    <span class="txt_form">Localidad:</span> 
                    <select class="inp_form">
                        <option value="1">Leganés</option>
                        <option value="2">Madrid</option>
                    </select><br/>
                    <input type="hidden" name="img_select" id="img_select" value="correo2">
                   <!--pintamos las miniaturas-->
                    <?php
                    for($x=2;$x<=4;$x++){
                        echo '<div class="miniaturas" style="margin-left: 0px;">
                                  <img src="img/miniatura_'.$x.'jpg" alt=""><br/>
                                  <a href="#" id="'.$x.'">+ ver ejemplo</a>
                              </div>';
                    }
                    ?>
                    <input type="submit" value="ENVIAR">
                </form>
                <div class="limpiar"></div>
                <span class="idea">Una idea original de <a href="http://compartiroficinamadrid.es/" target="_blank"><strong>www.freelandstudio.com</strong></a></span>
                <img src="img/logofs.png" alt="">
           </div>
        </div>
    </body>
</html>