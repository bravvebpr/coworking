<?php

$cartel2='<!DOCTYPE html>
<html>
    <head>
        <title>Television</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body style="background: #9be9dd;">
        <table style="width: 800px; margin:0 auto;" >
            <tr>
                <td colspan="6" style="color:#333; padding-bottom: 40px">
                    <strong>Hola '.$_POST['nombre_a'].',<br/><br/>

                        Soy '.$_POST['nombre_p'].', te mando este email porque tengo algo importante que decirte, 
                        pues bien, como sabes el día tiene 8 horas de máximo rendimiento y 
                        aunque yo se que eres capad de utilizar ese tiempo en...</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding-top: 23px"></td>
                <td rowspan="3" colspan="2" style="vertical-align: top; text-align:center;">
                    <strong style="color: #fff; font-size: 45px;">VER</strong><br/>
                    <strong style="color: #f8ff37;font-size: 183px;line-height: 136px;letter-spacing: -5px;" >14</strong><br/>
                    <strong style="color: #fff;font-size: 31px;line-height: 41px;padding-left: 16px;">CAP&Iacute;TULOS</strong><br/>
                    <strong style="color: #fff;font-size: 35px;line-height: 27px;">DE</strong><br/>
                    <img src="http://alfadentalteam.es/correos/img/Friends.png" alt="">
                </td>
            </tr>
            <tr>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
            </tr>
            <tr>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td> 
            </tr>    
            <tr>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
                <td><img src="http://alfadentalteam.es/correos/img/tele.png" alt=""></td>
            </tr>  
            <tr>
                <td colspan="6" style="padding-top: 20px; color: #111;">
                    <span style="font-size: 18px;"> ... que es algo que no todo el mundo es capad de hacer ;) , te recomiendo que utilices esas horas en algo más productivo, 
                        como trabajar en tu proyecto emprendedor, en el que todos confiamos y te apoyamos, por eso, he decidido regalarte algo.<br/><br/>

                        Hay un espacio de coworking en tu ciudad que acoge a emprendedores como tú, ofreciéndoles un lugar de trabajo totalmente equipado con sala de reuniones,
                        recepción, ADSL, limpieza, etc.. y donde surgen diversas sinergias, colaboraciones y amistades entre sus miembros.<br/><br/>

                        Me gustaría que lo probases, por eso te regalo <span style="color: #0087B9;">15 días totalmente gratuitos</span> en:<br/><br/>
                    </span>
                </td>
            </tr>
        </table>
        <table style="width: 795px; margin:0 auto; background: #e27130; border: solid 10px #e27130;  border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px" >
            <tr>
                <td rowspan="2">
                    <img style="margin-bottom: -4px; margin-left: 10px;" src="http://alfadentalteam.es/lib/'.$filae['imagen'].'" alt="logo">
                </td>

                <td colspan="1" style="padding-left: 15px;">
                    <strong style="font-size: 14px;">
                        ' . $filae['nombre'] . '<br/>
                        <a href="' . $filae['url'] . '">' .substr($filae['url'], 7) . '</a><br/>
                        ' . $filae['direccion'] . '
                    </strong>
                </td>
                <td style="float: right; background: #333; border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px; padding-left: 35px; padding-right: 35px; padding-bottom: 5px; padding-top: 5px;">
                    <strong style="color: #fff; font-size: 22px;">CUPON:&nbsp;&nbsp;'.$codigo_cup.'</strong>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="color: #fff; font-size: 14px; padding-left: 15px; padding-top: 15px;">
                    <strong>
                        ' . $filae['descripcion'] . '
                        <span style="float: right; color: #333; margin-top: 18px;">Cupon personal para '.$_POST['nombre_a'].'</span>
                    </strong>
                </td>
            </tr>
        </table>
        <table style="width: 800px; margin:0 auto;">
            <tr>
                <td style="padding-top: 20px;color: #333; padding-bottom: 50px;">
                    <strong>Imprime este cupón para presentarlo en “espacio coworking” y recibir tu regalo.
                        No lo dudes, la red de contactos es importantisima para todo emprendedor,
                        salir de casa te ayudará a centrarte en tu trabajo.
                    </strong>
                </td>
            </tr>
        </table>
    </body>
</html>
';
?>