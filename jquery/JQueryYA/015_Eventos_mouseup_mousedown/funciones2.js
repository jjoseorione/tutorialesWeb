let caja;
let documento;
let x1 = 0;
let y1 = 0;     
let top0 = 0;
let left0 = 0;          
let movimiento = false;
$(document).ready(init);
console.log("Hola");

function init(){
    caja = $("#caja");
    documento = $(document);
    caja.on("mousedown", activaMovimiento);
    documento.on("mousemove", moverCaja);
    caja.on("mouseup", desactivaMovimiento);
    console.log("init finalizado");
}

function activaMovimiento(event){
    x1 = event.pageX;       //Posición del mouse al dar clic
    y1 = event.pageY;
    top0 = Number((caja.css("top").substring(0, caja.css("top").length-2)));    //Top original al dar clic
    left0 = Number((caja.css("left").substring(0, caja.css("left").length-2))); //Left original al dar clic
    movimiento = true;
}

function moverCaja(event){
    if(movimiento){
        let x2 = event.pageX;       //Posición del mouse al moverlo
        let y2 = event.pageY;
        let x = x2 - x1;            //Aumento en la posición
        let y = y2 - y1;            //Auento en la posición
        despX = x + left0 + "px";
        despY = y + top0 + "px";
        caja.css("top", despY);
        caja.css("left", despX);
        caja.text("X: " + despX + "Y: " + despY);
    }
}

function desactivaMovimiento(event){
    movimiento = false;
}