<?php
include "../../../controller/sesiones/sesiones_admin.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Agenda</title>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="../../assets/css/administrador-css/estilos.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@800&display=swap');
    </style>
</head>
<body>
    <header>
        <div class="container__menu">
            <div class="logo">
                <img src="../../assets/images/Logo2.png" alt="">
            </div>
            <div class="menu">
                <i class="fas fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
                <nav id="nav">
                    <img src="../../assets/images/ajustes.png" alt="">
                    <ul>
                        <li><a href="../index_admin.php">Inicio</a></li>
                        <li><a href="../../../controller/sesiones/cerrarsesion.php">Cerrar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main>
        <div class="container__cover">
            <div class="cover"> 
                <div class="caja3">
                    <h1>Gestión Agenda</h1>
                    <div class="contenedor__login-register">
                        <form action="" class="" method="POST">
                            <select class="Selectordoc" name="tipo_doc" id="tipo_doc" required>
                                <option value="">Elige el tipo de documento</option>
                                <option value="CC">Cedula de ciudadania</option>
                                <option value="PAP">Pasaporte</option>
                                <option value="CE">Cedula de extranjeria</option>
                            </select>
                            <input type="text" placeholder="Numero de documento" id="numerodedocuemto" name="num_doc_pers" class="contenedor1" required> 
                            <br>
                            <br>
                            <input onclick="agenda()" type="button" name="consultar" class="boton4" value="Consultar">
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script src="../../assets/js-general/menu-responsive.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src = "../assets/js/sweetAlert4.js"></script>
</body>
</html>