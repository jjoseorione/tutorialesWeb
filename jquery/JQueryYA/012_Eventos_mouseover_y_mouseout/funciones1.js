jQuery(document).ready(init);
var cont = 1;
var textoAnterior = "";


function init(){
    let boton = jQuery("#botonFin");
    console.log("dentro de init");
    boton.mouseover(mueveBoton);
    boton.mouseout(mouseFuera);
}

function mueveBoton(){
    let boton = jQuery("#botonFin");
    console.log("dentro de mueveBoton")
    if(cont == 1){
        console.log("dentro de mueveBoton cont = " + cont);
        textoAnterior = boton.text();
        boton.css("margin", "6em");
        boton.css("font-weight", "strong");
        boton.text("QUE NO PRESIONES");
        boton.css("background-color", "#f00");
        cont++;
    }
    else if(cont == 2){
        console.log("dentro de mueveBoton cont = " + cont);
        boton.css("margin-left", "12em");
        boton.css("margin-top", "0");
        boton.text("TE DIJE QUE NO");
        boton.css("background-color", "#d80000");
        cont++;
    }
    else if(cont == 3){
        console.log("dentro de mueveBoton cont = " + cont);
        boton.css("margin-left", "18em");
        boton.css("margin-top", "6em");
        boton.text("Ya me estás cansando");
        boton.css("background-color", "#c00000");
        cont++;
    }
    else if(cont == 4){
        boton.removeAttr("style");
        boton.text("Haz lo que quieras");
        boton.css("background-color", "#a80000");
        cont++;
    }
    else if(cont == 5){
        boton.removeAttr("style");
        boton.text("Cuidado con eso");
        cont++;
    }
}

function mouseFuera(){
    let boton = jQuery("#botonFin");
    if(cont == 6){
        boton.text(textoAnterior);
        cont = 1;
    }
}