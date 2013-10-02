<div class="pie" id="pie">
    <div class="contenedor_pie">
        <div class="pop-up"></div>
        <div class="imagen_pop-up">
            <div class="cerrar" id="cerrar">X</div>
            <img alt="" id="img_pop_gr" src="">
        </div>

        <span class="idea">Si conoces a alguien en esta situaci&oacute;n, ayudale, lo est&aacute; pidiendo a gritos.</span>
        <img src="img/megafono.png" alt="" ><br/>
        <span class="idea">
            Env&iacute;a un email a los conocidos con este problema para darles un toque de atenci&oacute;n y practiquen co-worwing.<br/>
            Para ello rellena el siguiente formulario:
        </span>
        <form action="correos/envio_correos.php" method="post">
            <span class="txt_form">Nombre de tu amigo:</span> <input type="text" class="inp_form" name="nombre_a" id="nombre_a"><br/>
            <span class="txt_form">Tu nombre:</span> <input type="text" class="inp_form" name="nombre_p" id="nombre_p"><br/>
            <span class="txt_form">Correo de tu amigo:</span> <input type="text" class="inp_form" name="correo" id="correo"><br/>
            <span class="txt_form">Localidad:</span> 
            <select name="localidad" id="localidad" class="inp_form">
                <option value="">--Seleccionar--</option>
                <option value="1">Leganés</option>
                <option value="2">Madrid</option>
            </select><br/>
            <input type="hidden" name="img_select" id="img_select" value="">
            <br/>
           <!--pintamos las miniaturas-->
            <?php
            for($x=2;$x<=5;$x++){
                echo '<div class="miniaturas">
                          <img src="img/miniatura_'.$x.'.jpg" id="cart_'.$x.'" alt=""><br/>
                          <a href="#" id="ver_'.$x.'">+ ver ejemplo</a>
                      </div>';
            }
            ?>

           <div class="limpiar"></div>
            <br/>
            <input type="button" value="ENVIAR" onclick="validarForm(this.form);">
        </form>
        <div class="limpiar"></div>
        <span class="idea">Una idea original de <a href="http://compartiroficinamadrid.es/" target="_blank"><strong>www.freelandstudio.com</strong></a></span>
        <img src="img/logofs.png" alt="">
   </div>
</div>