/* Criando Banner */

function slide1(){
	document.getElementById('imagem').src="bn_1.jpg";
	setTimeout("slide2()",2400)	
}

function slide2(){
	document.getElementById('imagem').src="bn_2.jpg";
	setTimeout("slide3()",2400)	
}

function slide3(){
	document.getElementById('imagem').src="bn_3.jpg";
	setTimeout("slide1()",2400)	
}