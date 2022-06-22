<?php
session_start();

session_destroy();

header ("Location: ../../view/Login/Login.php");

exit();

?>