<?php
include "../../../controller/sesiones/sesiones_admin.php";
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión Usuarios</title>

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
                    <h1 class="titulo1">Nuevo profesional</h1>
                    <div class="contact-wrapper animated bounceInUp">
                        <div class="contact-form">
                            <form action="../../../controller/administrador/new_users.php" method="POST">
                                <p>
                                    <label>Tipo de documento</label>
                                    <input type="text" name="t_doc" value=<?php if($_SESSION['doc_new'] == 'CC'){
                                        echo 'Cedula&nbsp;de&nbsp;Ciudadania';
                                    }elseif ($_SESSION['doc_new'] == 'TI') {
                                        echo 'Tarjeta&nbsp;de&nbsp;Identidad';
                                    }elseif ($_SESSION['doc_new'] == 'PAP') {
                                        echo 'Pasaporte';
                                    }elseif ($_SESSION['doc_new'] == 'CE') {
                                        echo 'Cedula&nbsp;de&nbsp;Extranjeria';
                                    }?> disabled>
                                </p>
                                <p>
                                    <label>N° documento</label>
                                    <input type="number" name="num_doc" value=<?php echo intval($_SESSION['num_doc_new'])?> disabled>
                                </p>
                                <p>
                                    <label>Primer nombre</label>
                                    <input type="text" name="p_nombre" required>
                                </p>
                                <p>
                                    <label>Segundo nombre</label>
                                    <input type="text" name="s_nombre">
                                </p>
                                <p>
                                    <label>Primer apellido</label>
                                    <input type="text" name="p_apellido" required>
                                </p>
                                <p>
                                    <label>Segundo apellido</label>
                                    <input type="text" name="s_apellido">
                                </p>
                                <p>
                                    <label>Teléfono</label>
                                    <input type="tel" name="tel" required>
                                </p>
                                <p>
                                    <label>Email</label>
                                    <input type="email" name="email" required>
                                </p>
                                <p>
                                    <label>Especialidad</label>
                                    <select class="Selectorconsult" name="espec" id="espec" required>
                                      <option value="">Seleccione</option>
                                      <?php 
                                        include "../../../controller/conexion-db/db_connect.php";
                                            $consulta = "SELECT * FROM especialidades";
                                            $resultado = mysqli_query($conectar, $consulta);
                                            while($fila = $resultado->fetch_array()){ ?>
                                                <option value="<?php echo $fila['id_espec']; ?>"><?php echo $fila['descrip_espec']; ?></option>
                                            <?php } ?>
                                    </select>
                                </p>
                                <p>
                                    <label>Consultorio</label>
                                    <select class="Selectorconsult" name="cons" id="cons" required>
                                      <option value="">Seleccione</option>
                                      <?php 
                                        include "../../../controller/conexion-db/db_connect.php";
                                            $consulta = "SELECT * FROM consultorios";
                                            $resultado = mysqli_query($conectar, $consulta);
                                            while($fila = $resultado->fetch_array()){ ?>
                                                <option value="<?php echo $fila['id_consult']; ?>"><?php echo $fila['id_consult']; ?></option>
                                            <?php } ?>
                                    </select>
                                </p>
                                <p class="block">
                                    <button name="registrar" type="submit">
                                        Registrar
                                    </button>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </main>
    <script src="../../assets/js-general/menu-responsive.js"></script>
</body>
</html>