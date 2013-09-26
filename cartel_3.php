<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
        <script src="lib/colocacion.js"></script>
        <script src="lib/animaciones.js"></script>
        
    </head>
    <body>
        <div class="cartel_3">
            <div class="contenedor_3">
                <div>
                    <div id="girar">
                        <img src="img/circulo.png" class="circulo_blanco" alt="">
                        <div class="titulo_pizza">
                            <span style="font-size: 46px; line-height: 166px;">&Oacute; COMER</span><br/> 
                            <span style="font-size: 166px;">27</span><br/>
                            <span style="font-size: 41px;">PORCIONES</span><br/>
                            <span style="font-size: 41px;">DE PIZZA</span>
                        </div>
                    </div>
                    <?php for($x=1; $x<=27; $x++){
                        if ($x%2==0){
                            echo '<img src="img/pizza_2.png" class="pizza" alt="">';
                        }else{
                            echo '<img src="img/pizza.png" class="pizza" alt="">';
                        }
                         
                    }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>