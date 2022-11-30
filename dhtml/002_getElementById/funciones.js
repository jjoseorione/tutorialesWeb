function cambiarColor(){
	if(document.getElementById('titulo').style.color != 'blue')
		document.getElementById('titulo').style.color = 'blue';
	else
		document.getElementById('titulo').style.color = 'black';
}

function cambiarTamanoFuente(){
	console.log(document.getElementById('titulo').style.fontSize);
	if(document.getElementById('titulo').style.fontSize != '5em')
		document.getElementById('titulo').style.fontSize = '5em';
	else
		document.getElementById('titulo').style.fontSize = '2em';
}