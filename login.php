<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>co-working.me</title>
        <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/estilos_panel.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script src="lib/colocacion.js"></script>
        <script src="lib/validar.js"></script>
        <script src="lib/jquery.jrumble.1.3.min.js"></script>
    </head>
    <body style="background: #F34D25;">
        <div class="contenedor_formulario">
            <div class="logo"><img src="img/header.png"></div>
            <div class="formulario_login">
                <form action="lib/inicio_sesion.php" method="POST">
                    <span>Usuario</span><br/>
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario"><br/><br/>
                    <span>Password:</span><br/>
                    <input type="password" id="password" name="password" placeholder="Contrase&ntilde;a"><br/><br/>
                    <div class="limpiar"></div>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </div>
    </body>