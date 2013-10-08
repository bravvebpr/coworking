<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="lib/colocacion.js"></script>
        <script src="lib/validar.js"></script>
        <script src="lib/selector_cartel.js"></script>
        <script src="lib/animaciones.js"></script>
        <script src="lib/jquery.scrollExtend.min.js"></script>
        <script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
        <script>animaciones=1; reg_a=0;</script>
        <script src="lib/jquery.jrumble.1.3.min.js"></script>
    </head>
    <body>
        <div class="cartel_1">
            <div class="contenedor_1">
               <?php include './cabecera.php'; ?>
                <div class="limpiar"></div>
                <div class="titulo_1" id="ancla_1">
                   EL SER HUMANO TIENE 
                </div>
                <div id="acdc_1" style="position: absolute;"></div>
                <div class="rendimiento">
                    <span style="font-size: 92px;">DE M&Aacute;XIMO</span><br/>
                    <span>RENDIMIENTO</span><br/>
                    <span style="font-size: 169px; line-height: 1;">AL DIA</span>
                </div>
                <div class="horas">Horas</div>
                <img src="img/mano.png" class="mano" alt="">
                <img src="img/ocho.png" alt="" class="ocho">
                <div class="limpiar"></div>
                <div class="sub_titulo_1">
                   &#191;QUE PUEDE HACER EN 8 HORAS?
                </div>
                <div class="limpiar"></div>
            </div>
        </div>
        <?php include 'cartel_2.php'; ?>
        <?php include 'cartel_3.php'; ?>
        <?php include 'cartel_4.php'; ?>
        <?php include 'cartel_5.php'; ?>
        <?php include 'pie.php'; ?>
        
    </body>
</html>
