
<div class="pie" id="pie">
    <div class="contenedor_pie">
        <div class="pop-up"></div>
        <div class="imagen_pop-up">
            <div class="cerrar" id="cerrar">
                <img src="img/mas_pop-up.png" alt="">
            </div>
            <img alt="" id="img_pop_gr" src="">
        </div>
        <!---------------------------------------------------------------------------->     


        <h1 class="cabezera">SI CONOCES A ALG&Uacute;N AMIGO O FAMILIAR EN ESTA SITUACI&Oacute;N</h1>
        <div class="ayuda">AY&Uacute;DALE</div>
        <div  class="gritos">EST&Aacute; PIDIENDO A GRITOS</div>
        <img class="img_pie" src="img/megafono.png" alt="" ><br/>
        <div class="contenedor_log">
            <div class="titulo_cont">
                <span class="interrogacion_1">¿</span>
                COMO PUEDES AYUDARLES
                <span class="interrogacion_2">?</span>
            </div>
            <div class="texto_1">
                <strong style="color: #62d5f7;">1. Cu&eacute;ntale que es el coworking de una manera divertida.<br/></strong>
                <span> 
                    El coworking es una forma de trabajo enfocada hacia la socializaci&oacute;n, colaboraci&oacute;n y rendimiento del freelance &oacute; aut&oacute;nomo.<br/>
                    La soledad y falta de recursos de los emprendedores conlleva el fracaso a muchos de ellos, este es el motivo de que los espacios coworking est&eacute;n proliferando r&aacute;pidamente por toda España.
                    Como todo concepto nuevo, la adopci&oacute;n del mismo pasa por la colaboraci&oacute;n y ayuda de todos, pero sobretodo por la identificaci&oacute;n del sujeto que precisa el servicio, para ello te damos 
                    a elegir entre tres divertidos emails q mandaremos a “tu emprendedor” de forma gratuita, con el &uacute;nico fin de ayudarle en su aventura.<br/>
                </span>
                <strong>Selecciona el email que m&aacute;s te guste...</strong>
            </div>

            <br/>
            <!--pintamos las miniaturas-->
            <div class="img_miniatura">
                <?php
                $titulosImagen = array("", "", "Si la tele es su perdici&oacuten", "Si come entre horas", "Si ademas es ama de casa", "Si le pasa todo lo anterior");
                for ($x = 2; $x <= 5; $x++) {
                    echo '<div class="miniaturas">
                                    <span class="titulo_cartel">' . $titulosImagen[$x] . '</span><br/>
                                  <img src="img/miniatura_' . $x . '.jpg" id="cart_' . $x . '" alt=""><br/>
                                  <div class="mas_miniaturas">
                                  <img id="ver_' . $x . '" src="img/mas.png" alt="mas">
                                  </div>
                                  
                              </div>';
                }
                ?>

                <div class="limpiar"></div>
            </div>
            <div class="texto_1">
                <strong style="color: #62d5f7;">
                    2. Reg&aacute;lale 15 d&iacute;as de coworking en el mejor espacio de su ciudad.<br/>
                </strong>
                <span>
                    No es su cumpleaños, ni tampoco su aniversario, pero quizás nunca recibirá mejor regalo por 
                    tu parte que esta ayuda en su carrera profesional, dale ese empujoncito que le falta para
                    salir de casa regalándole “coworking” as&iacute; conseguirá nuevos contactos, representatividad y 
                    posibles proyectos nuevos, y todo gracias a tu ayuda.&nbsp;&nbsp;&nbsp;<b>Rellena estos sencillos campos...</b><br/>
                </span>
            </div>
            <form action="correos/envio_correos.php" method="post">
                <input type="hidden" name="img_select" id="img_select" value="">
                <div class="formulary">
                    <div class="apartados_form1">
                        <span>Tu nombre:</span> <input type="text" style="width: 331px;" name="nombre_p" id="nombre_p"><br/><br/>
                        <span>El nombre de tu amigo:</span> <input type="text" style="width: 258px;" name="nombre_a" id="nombre_a"><br/>
                    </div>
                    <div class="apartados_form2">
                        <span>Lugar de residencia de tu amigo:</span>
                        <?php
                        $conexion = mysql_connect("db496705092.db.1and1.com", "dbo496705092", "Anab5210");
                        mysql_select_db("db496705092", $conexion);
                        $datos = mysql_query("SELECT localidad FROM centros");
                        ?>
                        <div class="localidad">

                            <select type="text" name="localidad" id="localidad">
                                <option selected>--- Seleccionar ---</option>
                            <?php
                                while ($fila = mysql_fetch_array($datos)) {
                            ?>
                                    <option value="<?php echo $fila['localidad']; ?>"><?php echo $fila['localidad']; ?></option>
                            <?php
                                }mysql_close($conexion); 
                            ?>
                            </select>
                        </div>
                        <br/><br/>
                        <span>El email de tu amigo:</span> <input type="text" style="width: 252px;;" name="correo" id="correo"><br/>
                    </div>
                </div>
                <div class="limpiar"></div>
                <div class="boton_ayudar">
                    <input type="button" value="Ayudar a mi amigo" onclick="validarForm(this.form);">
                </div>
            </form>
            <div class="limpiar"></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://alfadentalteam.es" data-lang="es">Twittear</a>
            <script>!function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                            if (!d.getElementById(id)) {
                                js = d.createElement(s);
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore(js, fjs);
                            }
                        }(document, 'script', 'twitter-wjs');</script>

            <div data-href="https://alfadentalteam.es" data-width="The pixel width of the plugin" data-height="The pixel height of the plugin" data-show-faces="true" data-send="false" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" fb-xfbml-state="rendered">
                <span style="height: 29px; width: 450px;">
                    <iframe id="fe22dbfd" name="f35ff6258c" scrolling="no" title="Like this content on Facebook." class="fb_ltr" src="https://www.facebook.com/plugins/like.php?api_key=113869198637480&amp;channel_url=https%3A%2F%2Fs-static.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D27%23cb%3Df380100104%26domain%3Ddevelopers.facebook.com%26origin%3Dhttps%253A%252F%252Fdevelopers.facebook.com%252Ff1a437ec78%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=https%3A%2F%2Falfadentalteam.es&amp;layout=standard&amp;locale=es_ES&amp;node_type=link&amp;sdk=joey&amp;send=false&amp;show_faces=true&amp;width=450" style="border: none; overflow: hidden; height: 29px; width: 450px;"></iframe>
                </span>
            </div>

            <!-- Place this tag where you want the share button to render. -->
            <div class="g-plus" data-action="share" data-href="http://alfadentalteam.es/"></div>

            <!-- Place this tag after the last share tag. -->
            <script type="text/javascript">
                window.___gcfg = {lang: 'es'};

                (function() {
                    var po = document.createElement('script');
                    po.type = 'text/javascript';
                    po.async = true;
                    po.src = 'https://apis.google.com/js/plusone.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(po, s);
                })();
            </script>
        </div>
    </div>
</div>