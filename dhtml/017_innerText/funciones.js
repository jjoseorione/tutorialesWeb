function cambiarTitulo(){
	var nuevoTitulo = document.getElementById("text1").value;
	if(nuevoTitulo){
		if (document.getElementById("titulo1").innerText == nuevoTitulo)
			alert("¿El mismo? Cámbiale algo.");
		else
			document.getElementById("titulo1").innerText = nuevoTitulo;
	}
	else
		alert("Primero escribe algo, mamón.");

}