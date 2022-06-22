<?php
    define('server', 'localhost:3306');
    define('user', 'root');
    define('pass', '');
    define('db', 'clinica_health_home');

    $conectar = mysqli_connect(server, user, pass, db);
    if($conectar === false){
        die("Hay error en los datos de conexión: ".mysqli_connect_error());
    }/*else{
        echo "Los datos de acceso son correctos.";
        <i class="fa-solid fa-arrow-right-to-bracket fa-2x">
    }*/
?>