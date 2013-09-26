sw=0;
cr=0;
mensaje="";
function validarForm(formulario) {
  if(formulario.nombre_a.value.length===0) { 
    mensaje+="Falta el nombre\n";
    sw=1;
  } 
  
  if(formulario.nombre_p.value.length===0) { 
    mensaje+="Falta el nombre\n";
    sw=1;
  } 
  
  if(formulario.correo.value.length===0) { 
    mensaje+="Falta email\n";
    sw=1;cr=1;
  } 
  
  valor= formulario.correo.value;
  if(cr===0){
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)){
            mensaje+="El e-mail no es valido\n";
            sw=1;
        }
    }
    
  if(formulario.localidad.value.length===0) { 
        mensaje+="Falta localidad\n";
        sw=1;cr=1;
      }
      
  if(formulario.img_select.value.length===0) { 
        mensaje+="Falta elegir imagen\n";
        sw=1;cr=1;
      }
    
    if (sw===0)
         return true;
    else
        {
            alert(mensaje);
            return false;
        }
   }
