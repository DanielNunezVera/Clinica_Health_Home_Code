<?php
include "../../../controller/sesiones/sesiones_admin.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Agenda</title>

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
                    <h1 class="titulo1">Actualizar agenda</h1>
                    <div class="contact-wrapper animated bounceInUp">
                        <div class="contact-form">
                            <form action="gestion_agenda_alerta2.php" method="POST">
                                <p>
                                    <label>Nombres</label>
                                    <input type="text" name="t_doc" value=" Andres Felipe"disabled>
                                </p>
                                <p>
                                    <label>Apellidos</label>
                                    <input type="text" name="num_doc" value="Sanchez Restrepo" disabled>
                                </p>
                                <p>
                                    <label>Especialidad</label>
                                    <input type="text" name="p_nombre" value="Medicina general" disabled>
                                </p>
                                <p>
                                    <label>Consultorio</label>
                                    <input type="text" name="p_apellido" value="C01" disabled>
                                </p>
                                <p>
                                    <label>Dia</label>
                                    <input type="date" name="email" required>
                                </p>
                                <p>
                                    <label>Franja</label>
                                    <select class="Selectorconsult" name="espec" id="espec" required>
                                      <option value="">Seleccione</option>
                                        <option value="">6 a.m - 2 p.m</option>
                                        <option value="">8 a.m - 5 p.m</option>
                                        <option value="">12 a.p - 8 p.m</option>
                                    </select>
                                </p>
                                <p>
                                    <label>Estado agenda</label>
                                    <select class="Selectorconsult" name="tipo_doc" id="tipo_doc">
                                      <option >Seleccione</option>
                                      <option value="ac">Activo</option>
                                      <option value="dx">Inactivo</option>
                                    </select>
                                </p>
                                <p class="block">
                                    <button name="registrar" type="submit">
                                        Actualizar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src = "../assets/js/sweetAlert4.js"></script>
    <script src="../../assets/js-general/menu-responsive.js"></script>
</body>
</html>