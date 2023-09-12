jQuery(document).ready(init);

function init(){
    jQuery("#unirseBoton").click(muestraSignUp);
}

function muestraSignUp(){
    let form = jQuery("#unirseForm");
    form.html(
            '<div style="text-align: right">' +
                '<a id="eliminarForm">[X]</a>' +
            '</div>' +
            '<p>' +
                '<div><label for="correo">Correo Electrónico:</label></div>' +
                '<div><input type="email" id="correo"></div>' +
            '</p>' +
            '<p>' +
                '<div><label for="contrasena1">Contraseña:</label></div>' +
                '<div><input type="password" id="contrasena1"></p></div>' +
            '<p>' +
                '<div><label for="contrasena2">Repetir contraseña:</label></div>' +
                '<div><input type="password" id="contrasena2"></div>' +
            '</p>' +
            '<button id="noQuiero" type="button">Registrarme</button>'
        );
    form.css("border", "1px solid black");
    jQuery("#eliminarForm").click(eliminaForm);
    jQuery("#noQuiero").click(function(){alert("No quiero");});
}

function eliminaForm(){
    console.log("Entró a eliminaForm");
    let form = jQuery("#unirseForm");
    if(form.html()){
        form.html("");
        form.css("border", "none");
        console.log("Se eliminó form");
    }
    else
        console.log("No hay form para eliminar");
}