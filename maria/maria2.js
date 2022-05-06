window.onload=inicio;
function inicio(){
	document.formulario.onsubmit=validar;
}

function validar(){
	let enviar=true;
	let nombr=document.getElementById("nombre").value;
	if (nombr=="maria")
		alert("Hola Maria")
	else {
		alert("No eres María");
		enviar=false;
	}
	return enviar;
}
