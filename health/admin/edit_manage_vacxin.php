<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_edit_manage_vacxin = new c_depart();
    $c_edit_manage_vacxin->edit_manage_vacxin();
} else {
    header("location:login.php");
}
?>