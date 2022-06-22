
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inicio de sesion tienda virtual</title>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="assets/css/estilos.css">
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://kit.fontawesome.com/2d830bca63.js" crossorigin="anonymous"></script>

</head>
<body>
	<main>
		<div class="contenedor__todo">
			<div class="caja__trasera">
				<div class="caja__trasera-login">
					<h3>Portal funcionarios</h3>
					<p>Aqui podras iniciar sesion como funcionario</p>
					<button id="btn__iniciar-sesion">Iniciar Sesión</button>
				</div>
				<div class="caja__trasera-register">
					<h3>Portal usuarios</h3>
					<p>Aqui podras iniciar sesion como paciente</p>
					<button id="btn__registrarse">Iniciar sesion</button>
				</div>
			</div>

			<!--Formulario de funcionarios-->
			<div class="contenedor__login-register">
				<!--Login-->
				<form action="../../controller/verificar-usuarios/verify_fun.php" class="formulario__login" method="POST">
					<h2>Iniciar sesion funcionarios</h2>
					<select class="Selectordoc" name="tipo_rol" id="tipo_rol">
						<option >Rol</option>
							<option value=1>Profesional</option>
							<option value=2>Auxiliar administrativo</option>
							<option value=4>Administrador</option>
						</select>
					<select class="Selectordoc" name="tipo_doc" id="tipo_doc">
					    <option >Elige el tipo de documento</option>
						<option value="CC">Cedula de ciudadania</option>
						<option value="TI">Tarjeta de identidad</option>
						<option value="PAP">Pasaporte</option>
						<option value="CE">Cedula de extranjeria</option>
					</select>
					<input type="text" placeholder="Numero de documento" id="numerodedocuemto" name="num_doc_pers" class="contenedor1"> 
					<input type="password" placeholder="Contraseña" id="password" name="pass" class="contenedor1">
					<input type="submit" name="login" class="boton" placeholder="Iniciar sesion"></input>
					<br>
					<br>
					<input onclick="recuperarcontraseña()" type="button"  value="Recuperar contraseña" class="boton1"></input>
				</form>

				<!--Formulario de pacientes-->
				<form action="../../controller/verificar-usuarios/verify_pac.php" class="formulario__register" method="POST">
					<h2>Iniciar sesion pacientes</h2>
					<select class="Selectordoc" name="tipo_doc">
					<option >Elige el tipo de documento</option>
						<option value="CC">Cedula de ciudadania</option>
						<option value="TI">Tarjeta de identidad</option>
						<option value="PAP">Pasaporte</option>
						<option value="CE">Cedula de extranjeria</option>
					</select>
					<input type="text" placeholder="Numero de documento" id="numerodedocuemto" name="num_doc_pers" class="contenedor1"> 
					<input type="password" placeholder="Contraseña" id="password" name="pass" class="contenedor1">
					<input type="submit" name="login" class="boton" placeholder="Iniciar sesion"></input>
					<br>
					<br>
					<input onclick="recuperarcontraseña()" type="button"  value="Recuperar contraseña" class="boton1"></input>
					<div id="dvTabla"></div>
				</form>
			</div>
		</div>
	</main>
	<script type="text/javascript" src = "assets/js/login.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="assets/js/sweetAlert2.js"></script>
	<script type="text/javascript">
		$("#tipo_rol").change(function() {
			  if($("#tipo_rol").val() == "4"){
				$('#tipo_doc').prop('disabled', 'disabled');
			  }else{
				$('#tipo_doc').prop('disabled', false);
			  }
			});
	</script>
</body>
<br>
<br>
<br>
<br>
<footer class="pie-pagina">
        <div class="grupo-1">
            <div class="box">
                <figure>
                    <a href="#">
                        <img src="assets/css/Logo2.png" alt="Logo de SLee Dw">
                    </a>
                </figure>
            </div>
            <div class="box">
                <h2>SOBRE NOSOTROS</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni, laboriosam? Quia mollitia reprehenderit necessitatibus possimus earum quasi vel, consequatur dicta iusto, in magni accusamus optio ad nisi fuga autem aperiam.</p>
            </div>
            <div class="box">
                <h2>SIGUENOS</h2>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>
        </div>
        <div class="grupo-2">
            <small>&copy; 2021 <b>Clinica Healt Home</b> - Todos los Derechos Reservados.</small>
        </div>
</footer>
</html>