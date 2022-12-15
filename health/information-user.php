<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once("controllers/c_information_user.php");
    $c_information = new c_information_user();
    $c_information->information();
} else {
    header("location:login.php");
}
?>
