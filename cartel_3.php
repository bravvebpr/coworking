<div class="cartel_3" id="cartel_3">
    <div class="contenedor_3">
        <div id="acdc_3" style="position: absolute;height: 1px;width: 10%;margin-top: 200px"></div>
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
                    echo '<img src="img/pizza_2.png" class="pizza_2" id=""alt="">';
                }else{
                    echo '<img src="img/pizza.png" class="pizza" alt="">';
                }
            }
            ?>
        </div>
    </div>
</div>