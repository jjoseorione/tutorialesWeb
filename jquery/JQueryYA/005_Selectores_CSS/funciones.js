$(document).ready(inicializarEventos);

function inicializarEventos(){
    $("#boton1").click(ocultarItem);        //Ocultar todos los items
    $("#boton2").click(ocultarLista);       //Ocultar toda la lista
    console.log("Funciones JQuery cargadas");
}

function ocultarItem(){
    $("#lista1 li").hide();                 //Se ocultan los elementos li descendientes de #lista1
    console.log("Finaliza ocultarItem");
}

function ocultarLista(){
    $("#lista1").hide();                    //Se oculta toda la lista1
    //$("#lista1").css("display","none");   //También puede usarse esta sintaxis
    console.log("Finaliza ocultarLista");
}