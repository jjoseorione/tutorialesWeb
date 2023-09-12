$(document).ready(init);

function init(){
    $("#descripcion").click(editarDescripcion);
    $(".materia").click(editarMateria);
    $(".hora").click(mostrarTexto);
    $(".dia").click(mostrarTexto);
}

function editarDescripcion(){
    descr = prompt("Descripción: ");
    if(descr)
        $(this).text(descr);
}

function editarMateria(){
    materia = prompt("Clase: ");
    if(materia)
        $(this).text(materia);
}

function mostrarTexto(){
    alert($(this).text());
}