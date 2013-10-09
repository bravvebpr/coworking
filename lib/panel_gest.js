function pop_up_add(){
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