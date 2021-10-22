/* Criando Banner */

function slide1(){
	document.getElementById('imagem').src="img/banner1.jpg";
	setTimeout("slide2()",2200)	
}

function slide2(){
	document.getElementById('imagem').src="img/banner2.jpg";
	setTimeout("slide3()",2200)	
}

function slide3(){
	document.getElementById('imagem').src="img/banner3.jpg";
	setTimeout("slide1()",2200)	
}