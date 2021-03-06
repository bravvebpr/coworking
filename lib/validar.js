function validarForm(form) {
    sw = 0;
    cr = 0;
    mensaje = "";
    if (form.nombre_p.value.length === 0) {
        mensaje += "<li>Falta tu nombre</li>";
        sw = 1;
    }
    
     if (form.tuemail.value.length === 0) {
        mensaje += "<li>Falta tu email</li>";
        sw = 1;
        cr = 1;
    }
    
    valor = form.tuemail.value;
    if (cr === 0) {
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)) {
            mensaje += "<li>Tu e-mail no es valido</li>";
            sw = 1;
        }
    }
    
    if (form.nombre_a.value.length === 0) {
        mensaje += "<li>Falta el nombre de tu amigo</li>";
        sw = 1;
    }
   
    if (form.correo.value.length === 0) {
        mensaje += "<li>Falta el email de tu amigo</li>";
        sw = 1;
        cr = 1;
    }
    
    valor = form.correo.value;
    if (cr === 0) {
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)) {
            mensaje += "<li>El e-mail de tu amigo no es valido</li>";
            sw = 1;
        }
    }
    if (form.localidad.value.length === 0) {
        mensaje += "<li>Falta la localidad</li>";
        sw = 1;
        cr = 1;
    }

    if (form.img_select.value.length === 0) {
        mensaje += "<li>Falta elegir un cartel</li>";
        sw = 1;
        cr = 1;
    }

    if (sw === 0)
        form.submit();
    else{
        $('#lista_errores_pie').html(mensaje);
        $('#errores_pie').animate({'left':'0px'});
    }
}
function cerrar_errores(){
        $('#errores_pie').animate({'left':'-365px'});
}
function validarCorreo(form) {
    sw = 0;
    cr = 0;
    mensaje = "";
    if (form.email.value.length === 0) {
        mensaje += "<li>Falta e-mail\n";
        sw = 1;
        cr = 1;
    }

    valor = form.email.value;
    if (cr === 0) {
        if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/.test(valor)) {
            mensaje += "<li>El e-mail no es valido</li>";
            sw = 1;
        }
    }

    if (form.asunto.value.length === 0) {
        mensaje += "<li>Falta el asunto</li>";
        sw = 1;
    }

    if (form.nombre.value.length === 0) {
        mensaje += "<li>Falta el nombre</li>";
        sw = 1;
    }

    if (form.mensaje.value.length === 0) {
        mensaje += "<li>Falta el mensaje</li>";
        sw = 1;
    }

    if (form.number.value.length > 0) {
        var expresionRegular1 = /^([0-9])*$/;
        if (!expresionRegular1.test(number.value))
            mensaje += ("<li>Numero telefono incorrecto</li>");
    }

    if (sw === 0)
        form.submit();
    else {
        $('#lista_errores_pie').html(mensaje);
        $('#errores_pie').animate({'left':'0px'});
    }
}

function validarLogin(form) {
    sw = 0;
    cr = 0;
    mensaje = "";
    if (form.usuario.value.length === 0) {
        mensaje += "Falta el usuario\n";
        sw = 1;
    }

    if (form.password.value.length === 0) {
        mensaje += "Falta la contraseña\n";
        sw = 1;
    }

    if (sw === 0)
        form.submit();
    else {
        alert(mensaje);
        mensaje++;

    }
    return false;
}

function validarPop_up_editor(form) {
    sw = 0;
    cr = 0;
    mensaje = "";
    if (form.localidad.value.length === 0) {
        mensaje += "Falta la localidad\n";
        sw = 1;
    }

    if (form.nombre.value.length === 0) {
        mensaje += "Falta el nombre\n";
        sw = 1;
    }

    if (form.tlf.value.length === 0) {
        mensaje += "Falta el telefono\n";
        sw = 1;
    }

    if (form.direccion.value.length === 0) {
        mensaje += "Falta la direcci&oacute;n\n";
        sw = 1;
    }

    if (form.descripcion.value.length === 0) {
        mensaje += "Falta la descripci&oacute;n\n";
        sw = 1;
    }

    if (form.uploadImage.value.length === 0) {
        mensaje += "Falta cargar la imagen\n";
        sw = 1;
    }

    if (form.url.value.length === 0) {
        mensaje += "Falta el URL\n";
        sw = 1;
    }

    if (sw === 0)
        form.submit();
    else {
        alert(mensaje);
    }

}