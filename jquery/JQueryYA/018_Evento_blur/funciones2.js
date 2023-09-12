$(document).ready(init);

function init(){
    $("#areaComentarios").on("focus", limpiaArea);
    $("#areaComentarios").on("blur", rellenaTexto);
}

function limpiaArea(){
    $(this).text("");
}

function rellenaTexto(){
    if(!$(this).text())
        $(this).text("Quiero comentar que...");
}