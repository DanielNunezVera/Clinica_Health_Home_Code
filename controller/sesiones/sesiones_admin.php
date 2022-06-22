<?php
session_start();
if (!isset($_SESSION['user'])){
    header('Location: ../../view/Login/Login.php');
} 
    if(($_SESSION['rol'] == 1)){
        header('Location: ../../view/Login/Login.php');
    }
    if(($_SESSION['rol'] == 2)){
        header('Location: ../../view/Login/Login.php');
    }
    if(($_SESSION['rol'] == 3)){
        header('Location: ../../view/Login/Login.php');
    }
?>
