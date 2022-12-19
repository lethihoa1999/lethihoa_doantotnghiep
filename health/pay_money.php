<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once("controllers/c_registered_vaccin.php");
    $pay_money = new c_registered_vaccin();
    $pay_money->pay_money();
} else {
    header("location:login.php");
}

?>