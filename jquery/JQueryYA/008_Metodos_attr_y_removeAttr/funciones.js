$(document).ready(init);

function init(){
    $("#boton1").click(agregarEstilo);
    $("#boton2").click(obtenerEstilo);
    $("#boton3").click(eliminarEstilo);
}

function agregarEstilo(){
    estiloNuevo = prompt("Escriba los estilos: ") + ";";
    let estiloActual = $("#tabla").attr("style");
    if(estiloActual)
        estiloNuevo = estiloActual + estiloNuevo;
    $("#tabla").attr("style", estiloNuevo);
    console.log(estiloNuevo);
}

function obtenerEstilo(){
    alert($("#tabla").attr("style"));
}

function eliminarEstilo(){
    $("#tabla").removeAttr("style");
    console.log("Estilo eliminado");
}