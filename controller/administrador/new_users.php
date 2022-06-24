<?php
    include "../conexion-db/db_connect.php";
    session_start();

    if(isset($_POST['registrar'])){
        if ($_SESSION['rol_new'] == 1) {
            $t_doc = $_SESSION['doc_new'];
            $num_doc = $_SESSION['num_doc_new'];
            $rol =  $_SESSION['rol_new'];
            $p_nombre = $_REQUEST['p_nombre'];
            $s_nombre = $_REQUEST['s_nombre'];
            $p_apellido = $_REQUEST['p_apellido'];
            $s_apelldio = $_REQUEST['s_apellido'];
            $tel = $_REQUEST['tel'];
            $email = $_REQUEST['email'];
            $espec = $_REQUEST['espec'];
            $consult = $_REQUEST['cons'];

            $p_nombre = mysqli_real_escape_string($conectar, $_POST['p_nombre']);
            $s_nombre = mysqli_real_escape_string($conectar, $_POST['s_nombre']);
            $p_apellido = mysqli_real_escape_string($conectar, $_POST['p_apellido']);
            $s_apelldio = mysqli_real_escape_string($conectar, $_POST['s_apellido']);
            $tel = mysqli_real_escape_string($conectar, $_POST['tel']);
            $email = mysqli_real_escape_string($conectar, $_POST['email']);
            $espec = mysqli_real_escape_string($conectar, $_POST['espec']);
            $consult = mysqli_real_escape_string($conectar, $_POST['cons']);

            //INSERTAR DATOS EN LA BASE DE DATOS
            $insertar_pers = "INSERT INTO personas (t_doc_pers, num_doc_pers, rol, p_nombre_pers, s_nombre_pers, 
             p_apellido_pers, s_apellido_pers, tel_pers, correo_pers, estado_pers, pass, creacion) VALUES ('$t_doc','$num_doc',
            '$rol','$p_nombre','$s_nombre','$p_apellido','$s_apelldio','$tel','$email','1','$num_doc',CURRENT_TIMESTAMP)";

            $resultado1 = mysqli_query($conectar, $insertar_pers);

            if($resultado1==1){

            //creo que esta mal esto 
                $consulta = "SELECT * FROM personas WHERE t_doc_pers='$t_doc' AND num_doc_pers='$num_doc'
                AND pass='$num_doc' AND rol='$rol'";

                $resultado3 = mysqli_query($conectar, $consulta);
                $fila = mysqli_fetch_assoc($resultado3);
                $filas = mysqli_num_rows($resultado3);
                if($filas==1){
                    $id_prof = $fila['id_pers'];
                    $insertar_profesional = "INSERT INTO profesionales (id_prof, dias_laborales, franja_horaria, id_consult, id_espec, creacion) VALUES ('$id_prof','lunes', 'martes', 
                    '$consult ', '$espec', CURRENT_TIMESTAMP)";
                    $resultado2 = mysqli_query($conectar, $insertar_profesional);
                    if ($resultado2 == 1) {
                        header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta3.php');
                    }
                }
            }
        }
        if ($_SESSION['rol_new'] == 2) {
            $t_doc = $_SESSION['doc_new'];
            $num_doc = $_SESSION['num_doc_new'];
            $rol =  $_SESSION['rol_new'];
            $p_nombre = $_REQUEST['p_nombre'];
            $s_nombre = $_REQUEST['s_nombre'];
            $p_apellido = $_REQUEST['p_apellido'];
            $s_apelldio = $_REQUEST['s_apellido'];
            $tel = $_REQUEST['tel'];
            $email = $_REQUEST['email'];

            $p_nombre = mysqli_real_escape_string($conectar, $_POST['p_nombre']);
            $s_nombre = mysqli_real_escape_string($conectar, $_POST['s_nombre']);
            $p_apellido = mysqli_real_escape_string($conectar, $_POST['p_apellido']);
            $s_apelldio = mysqli_real_escape_string($conectar, $_POST['s_apellido']);
            $tel = mysqli_real_escape_string($conectar, $_POST['tel']);
            $email = mysqli_real_escape_string($conectar, $_POST['email']);

            //INSERTAR DATOS EN LA BASE DE DATOS
            $insertar_pers = "INSERT INTO personas (t_doc_pers, num_doc_pers, rol, p_nombre_pers, s_nombre_pers, 
             p_apellido_pers, s_apellido_pers, tel_pers, correo_pers, estado_pers, pass, creacion) VALUES ('$t_doc','$num_doc',
            '$rol','$p_nombre','$s_nombre','$p_apellido','$s_apelldio','$tel','$email','1','$num_doc',CURRENT_TIMESTAMP)";

            $resultado1 = mysqli_query($conectar, $insertar_pers);

            if($resultado1==1){

            //creo que esta mal esto 
                $consulta = "SELECT * FROM personas WHERE t_doc_pers='$t_doc' AND num_doc_pers='$num_doc'
                AND pass='$num_doc' AND rol='$rol'";

                $resultado3 = mysqli_query($conectar, $consulta);
                $fila = mysqli_fetch_assoc($resultado3);
                $filas = mysqli_num_rows($resultado3);
                if($filas==1){
                    $id_aux = $fila['id_pers'];
                    $insertar_auxiliar = "INSERT INTO auxiliares_admin (id_aux, creacion) VALUES ('$id_aux', CURRENT_TIMESTAMP)";
                    $resultado2 = mysqli_query($conectar, $insertar_auxiliar);
                    if ($resultado2 == 1) {
                        header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta3.php');
                    }
                }
            }
        }
        if ($_SESSION['rol_new'] == 3) {
            $t_doc = $_SESSION['doc_new'];
            $num_doc = $_SESSION['num_doc_new'];
            $rol =  $_SESSION['rol_new'];
            $p_nombre = $_REQUEST['p_nombre'];
            $s_nombre = $_REQUEST['s_nombre'];
            $p_apellido = $_REQUEST['p_apellido'];
            $s_apelldio = $_REQUEST['s_apellido'];
            $tel = $_REQUEST['tel'];
            $email = $_REQUEST['email'];
            $f_nacimiento = $_REQUEST['f_nacimiento'];
            $genero = $_REQUEST['genero'];

            $p_nombre = mysqli_real_escape_string($conectar, $_POST['p_nombre']);
            $s_nombre = mysqli_real_escape_string($conectar, $_POST['s_nombre']);
            $p_apellido = mysqli_real_escape_string($conectar, $_POST['p_apellido']);
            $s_apelldio = mysqli_real_escape_string($conectar, $_POST['s_apellido']);
            $tel = mysqli_real_escape_string($conectar, $_POST['tel']);
            $email = mysqli_real_escape_string($conectar, $_POST['email']);
            $f_nacimiento = mysqli_real_escape_string($conectar, $_POST['f_nacimiento']);
            $genero = mysqli_real_escape_string($conectar, $_POST['genero']);

            //INSERTAR DATOS EN LA BASE DE DATOS
            $insertar_pers = "INSERT INTO personas (t_doc_pers, num_doc_pers, rol, p_nombre_pers, s_nombre_pers, 
             p_apellido_pers, s_apellido_pers, tel_pers, correo_pers, estado_pers, pass, creacion) VALUES ('$t_doc','$num_doc',
            '$rol','$p_nombre','$s_nombre','$p_apellido','$s_apelldio','$tel','$email','1','$num_doc',CURRENT_TIMESTAMP)";

            $resultado1 = mysqli_query($conectar, $insertar_pers);

            if($resultado1==1){

            //creo que esta mal esto 
                $consulta = "SELECT * FROM personas WHERE t_doc_pers='$t_doc' AND num_doc_pers='$num_doc'
                AND pass='$num_doc' AND rol='$rol'";

                $resultado3 = mysqli_query($conectar, $consulta);
                $fila = mysqli_fetch_assoc($resultado3);
                $filas = mysqli_num_rows($resultado3);
                if($filas==1){
                    $id_pac = $fila['id_pers'];
                    $insertar_paciente = "INSERT INTO pacientes (id_pac, genero, fecha_nacimiento, creacion) VALUES ('$id_pac','$genero', '$f_nacimiento'
                    , CURRENT_TIMESTAMP)";
                    $resultado2 = mysqli_query($conectar, $insertar_paciente);
                    if ($resultado2 == 1) {
                        header('Location: ../../view/administrador/gestion_usuarios/gestion_usuarios_alerta3.php');
                    }
                }
            }
        }
    }
?>