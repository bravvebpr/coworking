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
    <body style="background: #f34d25;">
        <div class="contenedor_contacto">
            <?php include './cabecera.php'; ?>
            <div class="cont_form">
            <form action="lib/envio_mensaje.php" method="post">
                <input type="hidden" name="img_select" id="img_select" value="">
                <div class="formulary">
                    <div class="apartados_form3">
                        <span>Email:</span> <input type="text" style="width: 345px;" name="email" id="email"><br/><br/>
                        <span>Asunto:</span> <input type="text" style="width: 334px;" name="asunto" id="asunto"><br/><br/>
                    </div>
                    <div class="apartados_form4">
                        <span>Nombre:</span> <input type="text" style="width: 252px;" name="nombre" id="nombre"><br/><br/>
                        <span>Telefono:</span> <input type="text" style="width: 244px;" name="number" id="number"><br/><br/>
                    </div>
                </div>
                <div class="limpiar"></div>
                <div class="mensaje">
                    <textarea type="text" name="mensaje" id="mensaje"></textarea>
                </div>
                <div class="boton_ayudar">
                    <input type="button" value="Enviar" onclick="validarCorreo(this.form);">
                </div>
            </form>
           </div>
        </div>
    </body>
</html>
