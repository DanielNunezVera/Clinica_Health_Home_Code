<?php
session_start();
if (!isset($_SESSION['num_doc_pers'])){
    header('Location: ../../view/Login/Login.php');
} 
    if(($_SESSION['rol'] == 3 )){
        header('Location: ../../view/Login/Login.php');
    }
    if(($_SESSION['rol'] == 2 )){
        header('Location: ../../view/Login/Login.php');
    }
    if(($_SESSION['rol'] == 3 )){
        header('Location: ../../view/Login/Login.php');
    }
?>
