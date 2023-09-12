$(document).ready(init);

function init(){
    $(document).mousemove(mostrarCoordenadas);
}

function mostrarCoordenadas(event){
    $("#corx").text("Coordenada X: " + event.clientX);
    $("#cory").text("Coordenada Y: " + event.clientY);
}