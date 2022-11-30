function cambiarEstilo(){
	document.getElementById('parrafo').style.fontSize = document.getElementById('tamanoFuente').value;
	document.getElementById('parrafo').style.backgroundColor = document.getElementById('colorFondo').value;
	document.getElementById('parrafo').style.textAlign = document.getElementById('alineacion').value;
}