jQuery(document).ready(init);

function init(){
	jQuery("#boton1").click(resaltar);
}

function resaltar(){
	jQuery(".resaltado").css("background-color", "dodgerblue");
}