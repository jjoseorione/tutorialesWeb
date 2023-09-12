$(document).ready(init);

function init(){
	$("#menu").hover(mostrarMenu,ocultarMenu);
}

function mostrarMenu(){
	$("#menu_list").show();
}

function ocultarMenu(){
	$("#menu_list").hide();
}