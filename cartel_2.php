<div class="cartel_2" id="cartel_2">
    <div class="contenedor_2">

        <div style="float: left; width: 332px; margin-top: 60px;">
            <?php 
            $cont=0;
            for($x=0; $x<4; $x++){
                echo '<img src="img/tele.png" alt="" class="tele_inf" id="tele_'.$cont.'">'; 
                $cont++;
            }
            ?>
        </div>
        <div class="mensaje_2">
            <div style="font-size: 60px;" id="mensaje_2_1">VER</div>
            <div id="acdc_2"></div>
            <br/>
            <div style="color: #F8FF37; font-size: 247px; letter-spacing: -23px; margin-left: -40px;margin-top: -110px;" id="mensaje_2_2">14</div><br/>
            <div style="font-size: 2.7em; line-height: 45px; margin-top: -75px;" id="mensaje_2_3">CAP&Iacute;TULOS<br/>DE</div><br/>
            <div class="friends" id="mensaje_2_4">Friends</div>
        </div>
        <div style="float: left; width: 332px; margin-top: 60px;">
            <?php for($x=0; $x<4; $x++){
                echo '<img src="img/tele.png" alt="" class="tele_inf" id="tele_'.$cont.'">'; 
                $cont++;
            }
            ?>
        </div>
        <div class="limpiar"></div>
        <?php for($x=0; $x<6; $x++){
            echo '<img src="img/tele.png" alt="" class="tele_inf" id="tele_'.$cont.'">'; 
            $cont++;
        }
        ?> 
        <div class="limpiar"></div>
    </div>
</div>