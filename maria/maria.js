window.addEventListener("load",inicio);
function inicio(){
	let formu=document.getElementById("formulario");
	formu.addEventListener("submit",validar);
}

function validar(evento){
	let nombr=document.getElementById("nombre").value;
	if (nombr=="maria")
		alert("Hola Maria")
	else {
		alert("No eres María");
		evento.preventDefault();
	}
}
