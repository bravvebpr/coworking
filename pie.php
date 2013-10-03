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
                        <span>Tu nombre:</span> <input type="text" style="width: 340px;" name="nombre_p" id="nombre_p"><br/><br/>
                        <span>El nombre de tu amigo:</span> <input type="text" style="width: 265px;" name="nombre_a" id="nombre_a"><br/>
                    </div>
                    <div class="apartados_form2">
                        <span>Lugar de residencia de tu amigo:</span> 
                        <select type="text" name="localidad" id="localidad">
                            <option selected>--- Seleccionar ---</option>
                            <option>Madrid</option>
                            <option>Leganes</option>
                        </select><br/><br/>
                        <span>El email de tu amigo:</span> <input type="text" style="width: 252px;" name="correo" id="correo"><br/>
                    </div>
                </div>
                <div class="limpiar"></div>
                <div class="boton_ayudar">
                    <input type="button" value="Ayudar a mi amigo" onclick="validarForm(this.form);">
                </div>
            </form>
            <div class="limpiar"></div>
        </div>
    </div>