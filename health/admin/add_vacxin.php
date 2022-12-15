<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_add_vacxin = new c_depart();
    $c_add_vacxin->add_vacxin();
} else {
    header("location:login.php");
}
?>