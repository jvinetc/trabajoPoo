$(document).ready(function() {
    $("#rut_cli").Rut({
        format_on: 'keyup',
        on_error: function() {
            alert('El rut ingresado es incorrecto');
            $("#rut_cli").val("");
        }

    });
});

function eleccion(elemento, formulario) {
    if (elemento.checked) {
        seleccionar_todo(formulario);
    } else {
        deseleccionar_todo(formulario);
    }
}

function seleccionar_todo(formulario) {
    for (i = 0; i < formulario.elements.length; i++)
        if (formulario.elements[i].type === "checkbox")
            formulario.elements[i].checked = 1;
}
function deseleccionar_todo(formulario) {
    for (i = 0; i < formulario.elements.length; i++)
        if (formulario.elements[i].type === "checkbox")
            formulario.elements[i].checked = 0;
}
function validaSeleccion(form, indice) {
    var rutCli = form.rut_cli;
    var nomCli = form.nom_cli;
    var dirCli = form.dir_cli;
    if (nomCli.value === "") {
         alert("El nombre no puede estar vacio");
        return false;
    } else if (rutCli.value === "") {
        alert("El rut no puede estar vacio");       
        return false;
    } else if (dirCli.value === "") {
        alert("La direccion no puede estar vacia");
        return false;
    } else {
        var cont1 = 0;
        var cont2 = 0;
        indice=indice*1;
        for (i = 0; i <indice; i++) {
            var nombre1 = "producto[" + (i+1) + "]";
            var nombre2 = "cantidad[" + (i+1) + "]";
            var check = form.elements[nombre1];
            //alert(check.checked);
            var cantidad = form.elements[nombre2].value;
            if (check.checked) {
                if ((cantidad*1) <= 0) {
                    alert("Debe elegir una cantidad para el articulo");
                    return false;
                }
            }else{
                cont2++;   
            }
        }
       
        if(cont2===indice){
            alert("Debe seleccionar al menos un articulo");
            return false;
        }
        form.submit();
    }
}

function calculaTotal(precio, cantidad, indice, formulario) {
    var total = precio * cantidad;
    var nombre = "total[" + indice + "]";
    formulario.elements[nombre].value = total;
}




