$(document).ready(init);

function init(){
    $("#areaComentarios").focus(limpiaArea);
}

function limpiaArea(){
    $(this).text("");
}