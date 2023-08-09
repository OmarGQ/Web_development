var script = document.createElement('script');
script.src = 'jQuery.js';
script.type = 'text/javascript';
document.getElementsByTagName('head')[0].appendChild(script);

var sesionValida;
var contraseñaValida = false;
var correoValido = false;
var condiciones = false;
function color(id){
	celda = document.getElementById("c"+id+"");
	if (id<=3 && id>0) {
		celda.style.backgroundColor="#ffe144";
	}else if (id<=8 && id>3) {
		celda.style.backgroundColor="#0090ff";
	}
}
function colorout(id){
	celda = document.getElementById("c"+id+"");
	if (id<=3 && id>0) {
		celda.style.backgroundColor="#fffcec";
	}else if (id<=8 && id>3) {
		celda.style.backgroundColor="blue";
	}
}
function condiciones(){
	if(document.getElementById('acept').checked){
		contraseñaValida = true;
	}else {
		contraseñaValida = false;
	}
	registroValido(sesionValida, contraseñaValida, condiciones);
}
function medirFuerzaContraseña(pass){
	if(pass.length < 6){
		contraseñaValida = false;
		alert("Su contraseña es demasiado debil");
	}else{
		contraseñaValida = true;
	}
	registroValido(sesionValida, contraseñaValida, condiciones);
}
function registroValido(uno, dos, tres){
	var boton = document.getElementById("subir");
	if(uno && dos && tres){
		boton.disabled = true;
		boton.style.backgroundColor="#534949";
	}else{
		boton.disabled = false;
		boton.style.backgroundColor="green";
	}
}
function medirValidezCorreo(correo){
	if(esValidoElCorreo(correo)){
		correoValido = true;
	}else{
		correoValido = false;
	}
	registroValido(sesionValida, contraseñaValida, condiciones);
}

function esValidoElCorreo(dirCorreo){
	if(dirCorreo.endsWith("@gmail.com") ||
		dirCorreo.endsWith("@hotmail.com") ||
		dirCorreo.endsWith("@outlook.com") ||
		dirCorreo.endsWith("@yahoo.com")
		){
		return true;
	}else{
		alert("Ingrese una direccion de correo valida");
		return false;
	}
}
