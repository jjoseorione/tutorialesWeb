let contador = 1;

function agregarNodo(){
	let texto = prompt("Escribe algo: ");
	if(!texto)
		alert("Oh pues >:(");
	else{
		var nuevoTexto = document.createTextNode(" || Texto No. " + contador + ": '" + texto + "'");
		document.getElementById("parrafo").appendChild(nuevoTexto);
		contador++;
	}
	

}