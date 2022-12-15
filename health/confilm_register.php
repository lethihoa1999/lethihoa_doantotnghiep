<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once("controllers/c_registered_vaccin.php");
    $confilm_register = new c_registered_vaccin();
    $confilm_register->confilm_register();
} else {
    header("location:login.php");
}

?>