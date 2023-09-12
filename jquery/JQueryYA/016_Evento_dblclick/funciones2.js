$(document).ready(init);
const dodgerblue = "rgb(30, 144, 255)";
const green = "rgb(0, 128, 0)";
const yellow = "rgb(255, 255, 0)";

function init(){
    $("#caja").on("click", cajaClic);
    $("#caja").on("dblclick", cajaDobleClic);
}

function cajaClic(){
    if($(this).css("background-color") != dodgerblue)
        $(this).css("background-color", dodgerblue);
    else
        $(this).css("background-color", yellow);
}

function cajaDobleClic(){
    if($(this).css("background-color") != green)
        $(this).css("background-color", green);
    else
        $(this).css("background-color", yellow);
}