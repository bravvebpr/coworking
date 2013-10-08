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
    /*-----------------------------------------------*/
    $('.tele_inf').hide();
    $('#mensaje_2_1').hide();
    $('#mensaje_2_2').hide();
    $('#mensaje_2_3').hide();
    $('#mensaje_2_4').hide();
    /*---------------------------------------------*/
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
//                            if(alto_v<772){
//                                $('body, html').stop(true, true).animate({
//                                    scrollTop: $('#ancla_1').offset().top//vamos al ancla para ver la animacion
//                                 },1000);}
                            $('.sub_titulo_1').fadeIn('slow');
                        });
                            });
                        });
                    });
                });
            });
        });
    });
});
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*++++++++++++++++++++++++++++++++++++Segunda animacion++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/

function interaccion_2(){
$('#mensaje_2_1').fadeIn(1000, function(){
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
//                                                            n_tele=0;
//                                                            setInterval(function(){
//                                                                if(n_tele<=13){
//                                                                    $('#tele_'+n_tele+'').attr("src", "img/tele.gif");
//                                                                    n_tele++;
//                                                                }
//                                                            }, 200);
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
/*++++++++++++++++++++++++++++++++++++TERCERA ANIMACION++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*//////////////////COLCOCACION/////////////////////////*/
function interaccion_3() {
    ancho_v=$(window).width();
    $('#girar').css({'margin-left':'-'+(ancho_v/2-200)+'px'});
   
/*///////////////////ANIMACION/////////////////////////*/
var angle = 0;
setInterval(function(){
    if(angle<=359)  {
    angle+=3;
     $("#girar").rotate(angle);}
},20);
$('#girar').animate({'margin-left':'326px'}, 2900, function(){
    $('.pizza').attr("src", "img/pizza_11.png");
//    $('.pizza_2').attr("src", "img/pizza_22.png");
        setTimeout(function(){
            $('.pizza').attr("src", "img/pizza_12.png");
            $('.pizza_2').attr("src", "img/pizza_22.png");
        },1000);
        setTimeout (function(){
            $('.pizza').attr("src", "img/pizza_13.png");
            $('.pizza_2').attr("src", "img/pizza_23.png");
        }, 2000);    
        setTimeout (function(){
            $('.pizza').attr("src", "img/pizza_14.png");
            $('.pizza_2').attr("src", "img/pizza_24.png");
        }, 3000);
        setTimeout (function(){
            $('.pizza').attr("src", "img/pizza_t.png");
            $('.pizza_2').attr("src", "img/pizza_25.png");
        }, 4000);
        setTimeout (function(){
            $('.pizza_2').attr("src", "img/pizza_t.png");
        }, 5000);
        setTimeout (function(){
            $('.pizza').attr("src", "img/pizza.png");
            $('.pizza_2').attr("src", "img/pizza_2.png");
        }, 6500);
});
}
/*++++++++++++++++++++++++++++++++++++TERCERA ANIMACION++++++++++++++++++++++++++*/
/*+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++*/
/*//////////////////COLCOCACION/////////////////////////*/
function interaccion_4() {
    setTimeout(function (){ $('#poner').animate({'font-size':'32px'}, 1000, function(){
        $('#num_lavadoras').animate({'font-size':'161px'}, 1000, function(){
            $('#let_lavadoras').animate({'font-size':'50px'}, 1000, function(){
                var angle = 0;
                setInterval(function(){
                    angle+=5;
                     $(".bombo").rotate(angle);
                },1);
            });
        });
    });
    }, 1000);
}
function interaccion_5() {
    var angle = 0;
    setInterval(function(){
        angle+=3;
         $("#bombo_5").rotate(angle);
    },1);
    setInterval(function(){
         $("#pompa").animate({'width':'25px', 'margin-left':'-240px'}, 1000, function (){
             $("#pompa").animate({'width':'36px', 'margin-left':'-246px'}, 1000);
         });
    },2000);
}