<?php
include "../../controller/sesiones/sesiones_prof.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesional</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/profesional-css/estilos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="index_prof.php" >Inicio</a></li>
                        <li><a href="../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover"> 
                <div class="caja1">
                    <div class="row">
                        <h1>Bienvenido - <?php echo $_SESSION['p_nombre_pers'], $_SESSION['p_apellido_pers']?></h1>
                        <a href="" class="boton">Gestión Usuarios</a>
                        <br>
                        <a href="" class="boton">Gestión Especialidades</a>
                        <br>
                        <a href="" class="boton">Gestión Consultorios</a>
                        <br>
                        <a href="" class="boton">Gestión Agenda</a>
                        <br>
                        <a href="" class="boton">Gestionamiento</a>
                        <br>
                    </div>
                </div>
                <div class="caja2">
                    <img src="../assets/images/pngwing.com.png" alt="">
                </div> 
            </div> 
        </div>
    </main>
    <script src="../assets/js-general/menu-responsive.js"></script>
</body>
</html>