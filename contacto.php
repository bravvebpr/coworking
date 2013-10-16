<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Contacto</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="lib/validar.js"></script>
        <script src="lib/jquery.scrollExtend.min.js"></script>
    </head>
    <body style="background: #f34d25; padding-top: 30px;">
        <div class="contenedor_contacto">
            <?php include './cabecera.php'; ?>
             <div class="cont_form">
                <form action="lib/envio_mensaje.php" method="post">
                    <div class="apartados_form3">
                        <span>Email:</span><br/> <input type="text" style="width: 345px;" name="email" id="email" placeholder="Email"><br/><br/>
                        <span>Asunto:</span><br/> <input type="text" style="width: 345px;" name="asunto" id="asunto" placeholder="Asunto"><br/><br/>
                        <span>Nombre:</span><br/> <input type="text" style="width: 345px;" name="nombre" id="nombre" placeholder="Nombre"><br/><br/>
                        <span>Telefono:</span><br/> <input type="text" style="width: 345px;" name="number" id="number" placeholder="Telefono">
                    </div>
                    <div class="limpiar"></div>
                    <div class="mensaje">
                        <textarea type="text" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                    </div>
                    <div class="boton_ayudar">
                        <input type="button" value="Enviar" onclick="validarCorreo(this.form);">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
