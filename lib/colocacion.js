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
        alto+=40;
        $('.cartel_4').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>697){
        alto=($(window).height()-748)/2;
        alto+=20;
        $('.cartel_5').css({'padding-top':''+alto+'px'});
        alto+=75;
        $('.sub_contenedor_5').css({'padding-bottom':''+alto+'px'});
    }
    if($(window).height()>520){
        alto=($(window).height()-520)/2;
        $('.imagen_pop-up').css({'margin-top':''+alto+'px'});
    }
    alto=($(window).height());
    $('.pop-up').css({'height':''+alto+'px'});
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
        alto+=40;
        $('.cartel_4').css({'padding-bottom':''+alto+'px', 'padding-top':''+alto+'px'});
    }
    if($(window).height()>697){
        alto=($(window).height()-748)/2;
        alto+=20;
        $('.cartel_5').css({'padding-top':''+alto+'px'});
        alto+=75;
        $('.sub_contenedor_5').css({'padding-bottom':''+alto+'px'});
    }
    if($(window).height()>520){
        alto=($(window).height()-520)/2;
        $('.imagen_pop-up').css({'margin-top':''+alto+'px'});
    }
    alto=($(window).height());
    $('.pop-up').css({'height':''+alto+'px'});
});
    /*-----------------------------------AJAX----------------------------*/
/*------------------------------------CARGA 2------------------------------------------*/
jQuery(document).ready(
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
        control=4; 
    }
}
);
///*------------------------------------CARGA 3------------------------------------------*/
//        if(control===2){
//            $('body, html').stop(true, true).animate({
//                scrollTop: $('#cartel_3').offset().top//vamos al ancla para ver la animacion
//             },1000, function(){control++;});
//        }
///*--------------------------------CARGA 4------------------------------------------*/
//        if(control===3){
//            $('body, html').stop(true, true).animate({
//                scrollTop: $('#cartel_4').offset().top//vamos al ancla para ver la animacion
//             },1000, function(){control++;});
//        }
///*--------------------------------CARGA 5------------------------------------------*/
//        if(control===4){
//            $('body, html').stop(true, true).animate({
//                scrollTop: $('#cartel_5').offset().top//vamos al ancla para ver la animacion
//             },1000, function(){control++;});
//        }
///*--------------------------------PIE------------------------------------------*/
//         if(control===5){
//            $('body, html').stop(true, true).animate({
//                scrollTop: $('#pie').offset().top//vamos al ancla para ver la animacion
//             },1000, function(){control++;});
//         }
});
