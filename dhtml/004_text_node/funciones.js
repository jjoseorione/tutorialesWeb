function cambiarTexto(){
	texto = prompt("Escribe el texto nuevo");
	if(!texto)
		texto = "Te dije que escribieras algo >:(";
	document.getElementById('titulo').childNodes[0].nodeValue = texto;
}