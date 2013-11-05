function pop_up_add(){
    $('#draggable').fadeIn();
    var url="pop_up_crear.php";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#draggable').html(datos);
                }
            });
}
function desaparecer_pop(){
    $('#draggable').fadeOut();
}
function pop_up_edt(id){
    $('#draggable').fadeIn();
    var url="pop_up_editar.php?id="+id+"";
            $.ajax({   
                type: "GET",
                url:url,
                data:{},
                success: function(datos){       
                    $('#draggable').html(datos);
                }
            });
}
function eliminar_ft(id){
    $('#eliminar').attr('href', 'lib/borrar_f.php?id='+id+'');
    $('#pop_up_adbr').fadeIn();
}
function cerrar_pb(){
    $('#pop_up_adbr').fadeOut();
}