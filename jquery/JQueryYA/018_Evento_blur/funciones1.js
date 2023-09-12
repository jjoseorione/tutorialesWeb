$(document).ready(init);

function init(){
    $("#areaComentarios").focus(limpiaArea);
    $("#areaComentarios").blur(rellenaTexto);
}

function limpiaArea(){
    $(this).text("");
}

function rellenaTexto(){
    if(!$(this).text())
        $(this).text("Quiero comentar que...")
}