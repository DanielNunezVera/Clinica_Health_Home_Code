document.getElementById("btn__iniciar-sesion").addEventListener(
	"click", iniciarSesion);
document.getElementById("btn__registrarse").addEventListener("click",
	register);
window.addEventListener("resize", anchoPage);

//Declarando variables
var formulario_login = document.querySelector(".formulario__login");
var formulario_register = document
	.querySelector(".formulario__register");
var contenedor_login_register = document
	.querySelector(".contenedor__login-register");
var caja_trasera_login = document.querySelector(".caja__trasera-login");
var caja_trasera_register = document
	.querySelector(".caja__trasera-register");
var Usuario = 0;
//FUNCIONES

function anchoPage() {

	if (window.innerWidth > 850) {
		caja_trasera_register.style.display = "block";
		caja_trasera_login.style.display = "block";
	} else {
		caja_trasera_register.style.display = "block";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.display = "none";
		formulario_login.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_register.style.display = "none";
	}
}

anchoPage();

function iniciarSesion() {
	if (window.innerWidth > 850) {
		formulario_login.style.display = "block";
		contenedor_login_register.style.left = "10px";
		formulario_register.style.display = "none";
		caja_trasera_register.style.opacity = "1";
		caja_trasera_login.style.opacity = "0";
	} else {
		formulario_login.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_register.style.display = "none";
		caja_trasera_register.style.display = "block";
		caja_trasera_login.style.display = "none";
	}
}

function register() {
	if (window.innerWidth > 850) {
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "410px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.opacity = "0";
		caja_trasera_login.style.opacity = "1";
	} else {
		formulario_register.style.display = "block";
		contenedor_login_register.style.left = "0px";
		formulario_login.style.display = "none";
		caja_trasera_register.style.display = "none";
		caja_trasera_login.style.display = "block";
		caja_trasera_login.style.opacity = "1";
	}
}

function validar() {
	var txtC = document.getElementById("txtCedula");
	var txtN = document.getElementById("txtNombre");
	var txtCO = document.getElementById("txtCorreo");
	var txtU = document.getElementById("txtUsuario");
	var txtCON = document.getElementById("txtClave");
	if (txtC.value.trim().length == 0) {
		alert("La cedula no puede estar vacia");
		return false;
	} else if (txtN.value.trim().length == 0) {
		alert("El nombre no debe estar vacio");
		return false;
	} else if (txtCO.value.trim().length == 0) {
		alert("El correo electronico no puede estar vacio");
		return false;
	} else if (txtU.value.trim().length == 0) {
		alert("El usuario no puede estar vacio");
		return false;
	} else if (txtCON.value.trim().length == 0) {
		alert("La contraseña no puede estar vacia");
		return false;
	} else {
		return true;
	}
}

function recuperarcontraseña() {
	Swal.fire({
		title: 'Ingrese correo electronico',
		input: 'text',
		inputAttributes: {
		  autocapitalize: 'off'
		},
		showCancelButton: true,
		confirmButtonText: 'Recuperar contraseña',
		showLoaderOnConfirm: true,
	  }).then((result) => {
		if (result.isConfirmed) {
		  Swal.fire({
			title: `Se ha enviado un correo electronico`,
		  })
		}
	  })


}