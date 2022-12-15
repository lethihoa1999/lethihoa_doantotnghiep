<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once("controllers/c_information_adress.php");
    $information_adress = new c_information_adress();
    $information_adress->information_adress();
} else {
    header("location:login.php");
}
?>
