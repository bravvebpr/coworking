/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++Primera animacion++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
$(window).resize(function() {
        ancho_v=$(window).width();
        alto_v=$(window).height();
        margen_izquierdo=(ancho_v-1000)/2;
        $('.horas').css({'left':''+(margen_izquierdo+300)+'px'}, 1000);
        $('.ocho').css({'left':''+(margen_izquierdo)+'px'}, 1000);
    });
$(document).ready(function() {
if(animaciones===1){
    /*//////////////////COLCOCACION/////////////////////////*/
    ancho_v=$(window).width();
    alto_v=$(window).height();
    $('.titulo_1').css({'margin-left':'-'+ancho_v+'px', 'margin-right':''+ancho_v+'px'});
    $('.rendimiento').css({'margin-top':'-'+(alto_v+100)+'px'});
    $('.ocho').css({'left':'-290px'});
    $('.horas').css({'left':'-240px'});
    $('.sub_titulo_1').hide();
    /*///////////////////ANIMACION/////////////////////////*/
    margen_izquierdo=(ancho_v-1000)/2;
    $('.titulo_1').animate({'margin-left':'-0px', 'margin-right':'0px'}, 1000, function(){
        $('.mano').animate({'left':''+(margen_izquierdo-840)+'px'}, 1000);
        $('.ocho').animate({'left':''+(margen_izquierdo)+'px'}, 1000, function(){
            $('.mano').animate({'left':'-1000px'}, 1000, function(){
                $('.mano').animate({'left':''+(margen_izquierdo-840+300)+'px'}, 1000);
                 $('.horas').animate({'left':''+(margen_izquierdo+300)+'px'}, 1000, function(){
                     $('.mano').animate({'left':'-1000px'}, 1000, function(){
                        $('.rendimiento').animate({'margin-top':'35px'}, 1000, function(){
                        $('.rendimiento').animate({'margin-top':'25px'}, 250, function(){
                        $('.rendimiento').animate({'margin-top':'35px'}, 250, function(){
                            if(alto_v<772){
                                $('body, html').stop(true, true).animate({
                                    scrollTop: $('#ancla_1').offset().top//vamos al ancla para ver la animacion
                                 },1000);}
                            $('.sub_titulo_1').fadeIn('slow');
                        });
                            });
                        });
                    });
                });
            });
        });
    });
    animaciones++;
}
});
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++Segunda animacion++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

/*//////////////////COLCOCACION/////////////////////////*/
$(document).ready(function() {
if (animaciones===2){
    $('.tele_inf').hide();
    $('#mensaje_2_1').hide();
    $('#mensaje_2_2').hide();
    $('#mensaje_2_3').hide();
    $('#mensaje_2_4').hide();

/*///////////////////ANIMACION/////////////////////////*/

$('#mensaje_2_1').fadeIn(1000, function(){animaciones++;
    $('#mensaje_2_2').fadeIn(700, function(){
        $('#mensaje_2_3').fadeIn(700, function(){
            $('#mensaje_2_4').fadeIn(700, function(){
    $('#tele_0').fadeIn(200, function(){
        $('#tele_1').fadeIn(200, function(){
             $('#tele_2').fadeIn(200, function(){
                 $('#tele_3').fadeIn(200, function(){
                     $('#tele_4').fadeIn(200, function(){
                         $('#tele_5').fadeIn(200, function(){
                            $('#tele_6').fadeIn(200, function(){
                                $('#tele_7').fadeIn(200, function(){
                                    $('#tele_8').fadeIn(200, function(){
                                        $('#tele_9').fadeIn(200, function(){
                                            $('#tele_10').fadeIn(200, function(){
                                                $('#tele_11').fadeIn(200, function(){
                                                    $('#tele_12').fadeIn(200, function(){
                                                        $('#tele_13').fadeIn(200, function(){
                     
                                                     });
                                                });
                                           });
                                        });
                                    });
                                  });
                                });
                             });
                         });
                     });
                 });
             });
        });
    }) ; 
});
});
});
});
     
}
});
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++TERCERA ANIMACION++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*//////////////////COLCOCACION/////////////////////////*/
$(document).ready(function() {
if (animaciones===3){
    animaciones=4;
    ancho_v=$(window).width();
    $('#girar').css({'margin-left':'-'+(ancho_v/2-147)+'px'});
   
/*///////////////////ANIMACION/////////////////////////*/
//var angle = 0;
//setInterval(function(){
//    if(angle<=359)  {
//    angle+=3;
//     $("#girar").rotate(angle);}
//},20);
//$('#girar').animate({'margin-left':'326px'}, 2900);


}
});
$(document).ready(function() {
if (animaciones===4){
    $('#pr1').jrumble();
    animaciones=5;
//    setInterval(function(){
//        $('.lavadoras').animate({'margin-left':'-1px', 'margin-top':'-1px'}, 10, function(){
//                $('.lavadoras').animate({'margin-left':'0px', 'margin-top':'0px'}, 10);
//        });
//    },20);
$('#pr1').trigger('startRumble');
}
});
