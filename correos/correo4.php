<?php

$cartel2='<!DOCTYPE html>
<html>
    <head>
        <title>Pizzas</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body style="background: #968479">
        <table style="width: 800px; background: #968479; margin:0 auto; margin-top: 57px;" >
            <tbody>
                <tr>
                    <td colspan="9" style="font-size: 18px; color:#fff; padding-bottom: 40px;">
                        <strong>Hola '.$_POST['nombre_a'].',<br/><br/>

                            Soy '.$_POST['nombre_p'].', te mando este email porque tengo algo importante que decirte, 
                            pues bien, como sabes el día tiene 8 horas de máximo rendimiento y 
                            aunque yo se que eres capad de utilizar ese tiempo en...</strong>
                    </td>
                </tr>
                <tr>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                </tr>
                <tr>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td colspan="3">
                        <img src="http://alfadentalteam.es/correos/img/pizza27.png" alt="">
                    </td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>

                </tr>
                <tr>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza_2.png" alt=""></td>
                    <td><img src="http://alfadentalteam.es/correos/img/pizza.png" alt=""></td>
                </tr> 
                <tr>
                    <td colspan="9" style="padding-top: 20px; color: #fff;">
                        <p style="font-size: 18px;"> ... que es algo que no todo el mundo es capad de hacer ;) , te recomiendo que utilices esas horas en algo más productivo, 
                            como trabajar en tu proyecto emprendedor, en el que todos confiamos y te apoyamos, por eso, he decidido regalarte algo.<br/><br/>

                            Hay un espacio de coworking en tu ciudad que acoge a emprendedores como tú, ofreciéndoles un lugar de trabajo totalmente equipado con sala de reuniones,
                            recepción, ADSL, limpieza, etc.. y donde surgen diversas sinergias, colaboraciones y amistades entre sus miembros.<br/><br/>

                            Me gustaría que lo probases, por eso te regalo <span style="color: #87d3ef;">15 días totalmente gratuitos</span> en:<br/><br/>
                        </p>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 795px; margin:0 auto; background: #e27130; border: solid 10px #e27130;  border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px" >
            <tbody>
                <tr>
                    <td rowspan="4">
                        <img style="margin-bottom: -4px; margin-left: 10px;" src="http://alfadentalteam.es/lib/'.$filae['imagen'].'" alt="imagen">
                    </td>
                    <td style="padding-left: 15px;">
                        <span style="color: #141414; font-weight: bold; font-size: 15px;">'.$filae['nombre'].'</span><br/>
                        <a href="'.$filae['url'].'" style="color: #141414; text-decoration: none; font-weight: bold; font-size: 15px;">'.substr($filae['url'], 7).'</a><br/>
                    </td>
                    <td style="background: #333;width: 197px; text-align: center; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; padding-left: 10px; padding-right: 10px;">
                        <strong style="color: #fff; font-size: 22px;">CUPON:&nbsp;&nbsp;'.$codigo_cup.'</strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        <span style="padding-left: 15px; color: #141414; font-weight: bold; font-size: 15px;">'.$filae['direccion'].'</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="color: #fff; font-size: 15px; padding-left: 15px; padding-top: 15px;">
                        <strong>'.$filae['descripcion'].'</strong>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <span style="font-weight: bold; color: #000;">Cupon personal para '.$_POST['nombre_a'].'</span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table style="width: 800px; margin:0 auto;">
            <tbody>
                <tr>
                    <td style="background: #968479; font-size: 18px; padding-top: 20px;color: #fff; padding-bottom: 50px;">
                        <strong>Imprime este cupón para presentarlo en “espacio coworking” y recibir tu regalo.
                            No lo dudes, la red de contactos es importantisima para todo emprendedor,
                            salir de casa te ayudará a centrarte en tu trabajo.
                        </strong>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
';
?>