<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <meta name="”viewport”" content="”width=device-width," initial-scale="1?">
        <title>eShow</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos.css">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="lib/validar.js"></script>
        <script src="lib/geturl.js"></script>
        <script>
            $( document ).ready(function() {
                if ($.getURLParam("er")!==null) {
                    mensaje="<li>El usuario o contrase&ntilde;a no son v&aacute;lidos</li>";
                    $('#errores').animate({'top':'-300px'}, 100, function(){
                    $('#errores ul').html(mensaje);
                    $('#errores').animate({'top':'0px'});
                    });
                  }
            });
        </script>
    </head>
<body>
    
    <div class="formulario" style="margin: 0 auto!important; float: none!important; margin-top: 30px!important;">
        <div id="errores" style="margin-left: 125px;">
        <ul>

        </ul>
    </div>
        <div class="logo"><img src="img/logo.png"></div>
        <form id="rty" action="lib/inicio_sesion.php" method="POST" style=" height:2px">
            <span style="margin-top: 223px;">Usuario</span><input type="text" id="usuario" name="usuario" style="margin-top: 221px;"><br/>
            <span>Password:</span><input type="password" id="password" name="password"><br/>
            <div class="limpiar"></div>
            <input type="button" style="margin-left: 245px;margin-top: 20px;" onClick="validar_log(this.form);" value="Entrar">
        </form>
    </div>
</body>
</html>