/* Criando Banner Animado na págna de Contato */

function slide1() {
	document.getElementById('imagem').src = "img/Braies_Italy_2.jpg";
	setTimeout("slide2()", 2200)
}

function slide2() {
	document.getElementById('imagem').src = "img/Braies_Italy_4.jpg";
	setTimeout("slide3()", 2200)
}

function slide3() {
	document.getElementById('imagem').src = "img/Braies_Italy_5.jpg";
	setTimeout("slide1()", 2200)
}