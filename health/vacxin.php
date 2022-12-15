<?php
@session_start();
if (isset($_SESSION['user'])) {
    // error_reporting(0);
    include_once("controllers/c_registered_vaccin.php");
    $registered_vacxin = new c_registered_vaccin();
    $registered_vacxin->vacxin();
} else {
    header("location:login.php");
}
?>