<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_manage_disease= new c_depart();
    $c_manage_disease->manage_disease();
} else {
    header("location:login.php");
}
?>