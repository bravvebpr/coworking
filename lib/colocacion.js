$(document).ready(function() {
    if($(window).height()>852){
        alto=($(window).height()-852)/2;
        alto+=10;
        $('.cartel_1').css({'padding-bottom':''+(80+alto)+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>722){
        alto=($(window).height()-722)/2;
        alto+=20;
        $('.cartel_2').css({'padding-bottom':''+(20+alto)+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>689){
        alto=($(window).height()-689)/2;
        alto+=20;
        $('.cartel_3').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>748){
        alto=($(window).height()-748)/2;
        tam=$(window).height()-(alto*2)+40;
        alto+=40;
        $('.cartel_4').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px', 'height':''+tam+'px'});
    }
    
    if($(window).height()>697){
        alto=($(window).height()-748)/2;
        alto+=20;
        $('.cartel_5').css({'padding-top':''+alto+'px'});
        alto+=75;
        $('.sub_contenedor_5').css({'padding-bottom':''+alto+'px'});
    }
    if($(window).width()>1000){
        ancho=($(window).width()-1000)/2;
        $('.contenedor_4').css({'margin-left':''+ancho+'px'});
    }
    ancho_p=$(window).width();
    if (ancho_p>=1000){
        ancho_p=ancho_p/2;
        $('#pompa').css({'left':''+(ancho_p-30)+'px'});
    }else{
        $('#pompa').css({'left':'468px'});
    }
    ancho_p=$(window).width();
    if(ancho_p>1000){
        ancho_p=(ancho_p-1000)/2;
        $('.lavadora_5').css({'left':''+ancho_p+'px'});
    }
});
$(window).resize(function() {
    if($(window).height()>852){
        alto=($(window).height()-852)/2;
        alto+=10;
        $('.cartel_1').css({'padding-bottom':''+(80+alto)+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>722){
        alto=($(window).height()-722)/2;
        alto+=20;
        $('.cartel_2').css({'padding-bottom':''+(20+alto)+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>689){
        alto=($(window).height()-689)/2;
        alto+=20;
        $('.cartel_3').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>748){
        alto=($(window).height()-748)/2;
        tam=$(window).height()-(alto*2)+40;
        alto+=40;
        $('.cartel_4').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px', 'height':''+tam+'px'});
    }
    if($(window).height()>697){
        alto=($(window).height()-748)/2;
        alto+=20;
        $('.cartel_5').css({'padding-top':''+alto+'px'});
        alto+=75;
        $('.sub_contenedor_5').css({'padding-bottom':''+alto+'px'});
    }
    if($(window).width()>1000){
        ancho=($(window).width()-1000)/2;
        $('.contenedor_4').css({'margin-left':''+ancho+'px'});
    }

    ancho_p=$(window).width();
    if (ancho_p>=1000){
        ancho_p=ancho_p/2;
        $('#pompa').css({'left':''+(ancho_p-30)+'px'});
    }else{
        $('#pompa').css({'left':'468px'});
    }
    ancho_p=$(window).width();
    if(ancho_p>1000){
        ancho_p=(ancho_p-1000)/2;
        $('.lavadora_5').css({'left':''+ancho_p+'px'});
    }
});
    /*-----------------------------------AJAX----------------------------*/
/*------------------------------------CARGA 2------------------------------------------*/
jQuery(window).load(
function() {
    control=1;
    jQuery('#acdc_1').onScrollBeyond(
         function() {
        if(control===1){
            $('body, html').stop(true, true).animate({
                        scrollTop: $('#cartel_2').offset().top//vamos al ancla para ver la animacion
                     },1000);
            control=2; interaccion_2();
        }
    }
    );
    jQuery('#acdc_2').onScrollBeyond(
     function() {
    if(control===2){
        $('body, html').stop(true, true).animate({
                    scrollTop: $('#cartel_3').offset().top//vamos al ancla para ver la animacion
                 },1000);
        control=3; interaccion_3();
    }
}
);

jQuery('#acdc_3').onScrollBeyond(
     function() {
    if(control===3){
        $('body, html').stop(true, true).animate({
                    scrollTop: $('#cartel_4').offset().top//vamos al ancla para ver la animacion
                 },1000);
        control=4; interaccion_4();
    }
}
);
jQuery('#acdc_4').onScrollBeyond(
     function() {
    if(control===4){
        $('body, html').stop(true, true).animate({
                    scrollTop: $('#cartel_5').offset().top//vamos al ancla para ver la animacion
                 },1000);
        control=5; interaccion_5();
    }
}
);
  
jQuery('#acdc_5').onScrollBeyond(
     function() {
    if(control===5){
        $('body, html').stop(true, true).animate({
                    scrollTop: $('#pie').offset().top//vamos al ancla para ver la animacion
                 },1000);
        control=6; interaccion_6();
    }
}
);

});
