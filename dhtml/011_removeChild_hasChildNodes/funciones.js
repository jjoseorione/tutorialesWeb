let contador = 2;

function agregarNodo(){
	let texto = prompt("Escribe algo: ");
	if(!texto)
		alert("Oh pues >:(");
	else{
		var nuevoTexto = document.createTextNode(" || Texto No. " + (contador-1) + ": '" + texto + "'");
		document.getElementById("parrafo").appendChild(nuevoTexto);
		contador++;
	}
}

function eliminarUltimoNodo(){
	let parraf = document.getElementById("parrafo");
	if(parraf.hasChildNodes()){
		parraf.removeChild(parraf.lastChild);
		contador--;
	}
	else{
		alert("Te acabaste los hijos");
		contador = 1;
	}
}

function eliminarPrimerNodo(){
	let parraf = document.getElementById("parrafo");
	if(parraf.hasChildNodes()){
		parraf.removeChild(parraf.firstChild);
		//contador--;
	}
	else{
		alert("Te acabaste los hijos");
		contador = 1;
	}
}