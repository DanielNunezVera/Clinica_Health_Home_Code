<?php
session_start();
if (isset($_SESSION['num_doc_pers'])){
	session_destroy();
    header('Location: ../../view/Login/Login_cerrado_de_sesion.php');
	exit();
} 
if (isset($_SESSION['user'])){
	session_destroy();
    header('Location: ../../view/Login/Login_cerrado_de_sesion.php');
	exit();
} 
?>