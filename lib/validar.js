function validarForm(form) {
    sw=0;
    cr=0;
    mensaje="";
  if(form.nombre_a.value.length===0) { 
    mensaje+="Falta el nombre de tu amigo\n";
    sw=1;
  } 
  
  if(form.nombre_p.value.length===0) { 
    mensaje+="Falta el nombre\n";
    sw=1;
  } 
  
  if(form.correo.value.length===0) { 
    mensaje+="Falta email\n";
    sw=1;cr=1;
  } 
  
  valor= form.correo.value;
  if(cr===0){
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){
            mensaje+="El e-mail no es valido\n";
            sw=1;
        }
    }
    
  if(form.localidad.value.length===0) { 
        mensaje+="Falta localidad\n";
        sw=1;cr=1;
      }
      
  if(form.img_select.value.length===0) { 
        mensaje+="Falta elegir imagen\n";
        sw=1;cr=1;
      }
    
    if (sw===0)
         form.submit();
    else
            alert(mensaje);
   }
