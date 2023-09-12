$(document).ready(init);

function init(){
    $("#areaComentarios").on("focus", limpiaArea);
}

function limpiaArea(){
    $(this).text("");
}