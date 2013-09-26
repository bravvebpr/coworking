<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <<script src="lib/jquery-1.7.2.min.js"></script>
        <script src="lib/colocacion.js"></script>
        <script src="lib/animaciones.js"></script>
        <script src="lib/jquery.jrumble.1.3.min.js"></script>
        <script src="lib/prettify.js"></script>
    </head>
    <body>
        <div class="cartel_4">
            <div class="contenedor_4">
                <div>
                    <?php for($x=0; $x<4; $x++)
                        echo '<img src="img/lavadora.png" alt="" class="lavadoras">'; 
                    ?>
                </div>
                <div style="float: left">
                    <?php for($x=0; $x<2; $x++)
                        echo '<img src="img/lavadora.png" alt="" class="lavadoras">'; 
                    ?>
                </div>
                <div class="contenido_lavadora">
                    <span class="letras_lavadoras">&Oacute; PONER</span> <span class="numero_lavadoras">11</span><br/>
                    <span class="letras_lavadoras">LAVADORAS</span> 
                </div>
                <img src="img/lavadora.png" alt="" class="lavadoras" style="float: left">
                 <div class="limpiar"></div>
                 <div>
                    <?php for($x=0; $x<4; $x++)
                        echo '<img src="img/lavadora.png" alt="" class="lavadoras">'; 
                    ?>
                </div>
                <div class="limpiar"></div>
            </div>
        </div>
    </body>
</html>
