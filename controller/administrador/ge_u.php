<?php
    include "../conexion-db/db_connect.php";
    session_start();

    if ($_SESSION['estado_new'] == 1){
        $_SESSION['estado_new'] == 2;
        if($_SESSION['rol_new'] == 3){
            header('Location: ../../view/administrador/gestion_usuarios/new_pac.php');
        }
        if($_SESSION['rol_new'] == 1){
            header('Location: ../../view/administrador/gestion_usuarios/new_prof.php');
        }
        if($_SESSION['rol_new'] == 2){
            header('Location: ../../view/administrador/gestion_usuarios/new_aux.php');
        }
    }

    if(isset($_POST['consultar'])){
        $t_rol = $_REQUEST['tipo_rol'];
        $t_doc_pers = $_REQUEST['tipo_doc'];
        $num_doc_pers = $_REQUEST['num_doc_pers'];

        $t_rol =       mysqli_real_escape_string($conectar, $_POST['tipo_rol']);
        $t_doc_pers =       mysqli_real_escape_string($conectar, $_POST['tipo_doc']);
        $num_doc_pers  =       mysqli_real_escape_string($conectar, $_POST['num_doc_pers']);

        //CREAR UNA CONSULTA PARA SABER SI LOS DATOS SON CORRECTOS:

        $consulta = "SELECT * FROM personas WHERE t_doc_pers='$t_doc_pers' AND num_doc_pers='$num_doc_pers'
                     AND rol='$t_rol'";

        $resultado = mysqli_query($conectar, $consulta) or die(mysqli_error);

        $fila = mysqli_fetch_assoc($resultado);

        $filas = mysqli_num_rows($resultado);
        
        /*var_dump($filas);
        echo "<br>";
        print_r($filas);
        echo "<br>"; */
       
        if($filas==1){
            $_SESSION['t_doc_pers'] = $fila['t_doc_pers'];
            $_SESSION['num_doc_pers'] = $fila['num_doc_pers'];
            $_SESSION['p_nombre_pers'] = $fila['p_nombre_pers'];
            $_SESSION['rol_u'] = $fila['rol'];
            $_SESSION['s_nombre_pers'] = $fila['s_nombre_pers'];
            $_SESSION['p_apellido_pers'] = $fila['p_apellido_pers'];
            $_SESSION['s_apellido_pers'] = $fila['s_apellido_pers'];
            $_SESSION['tel_pers'] = $fila['tel_pers'];
            $_SESSION['correo_pers'] = $fila['correo_pers'];
            $_SESSION['estado_pers'] = $fila['estado_pers'];
            $_SESSION['creacion'] = $fila['creacion'];
            $_SESSION['actualizacion'] = $fila['actualizacion'];
            $_SESSION['delete'] = $fila['delete'];
            if($t_rol == 1){
                header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta1.php');
            }
            elseif($t_rol == 2){
                header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta1.php');
            }
            elseif($t_rol == 3){
                header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta1.php');
            }
        }else{
            $_SESSION['rol_new'] = $t_rol;
            $_SESSION['doc_new'] = $t_doc_pers;
            $_SESSION['num_doc_new'] = $num_doc_pers;
            $_SESSION['estado_new'] = 1;
            header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta2.php');
        }
    };
?>