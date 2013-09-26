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
$(window).scroll(function(){
    if ($(window).scrollTop() === $(document).height() - $(window).height()){
        control++;
        if(control===1){
            $('body, html').stop(true, true).animate({
                scrollTop: $('#carga_2').offset().top//vamos al ancla para ver la animacion
             },1000);
            var url="cartel_2.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#carga_2').html(datos);
                }
            });
        }
/*------------------------------------CARGA 3------------------------------------------*/
        if(control===2){
            $('body, html').stop(true, true).animate({
                scrollTop: $('#carga_3').offset().top//vamos al ancla para ver la animacion
             },1000);
            var url="cartel_3.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#carga_3').html(datos);
                }
            });
        }
/*--------------------------------CARGA 4------------------------------------------*/
        if(control===4){
            $('body, html').stop(true, true).animate({
                scrollTop: $('#carga_4').offset().top//vamos al ancla para ver la animacion
             },1000);
            var url="cartel_4.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#carga_4').html(datos);
                }
            });
        }
/*--------------------------------CARGA 5------------------------------------------*/
        if(control===7){
            $('body, html').stop(true, true).animate({
                scrollTop: $('#carga_5').offset().top//vamos al ancla para ver la animacion
             },1000);
            var url="cartel_5.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#carga_5').html(datos);
                }
            });
        }
         if(control===17){
            $('body, html').stop(true, true).animate({
                scrollTop: $('#carga_pie').offset().top//vamos al ancla para ver la animacion
             },1000);
            var url="pie.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#carga_pie').html(datos);
                }
            });
         }
    }
});