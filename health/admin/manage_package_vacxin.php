<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_manage.php");
    $c_manage_package_vacxin = new c_manage();
    $c_manage_package_vacxin->manage_package_vacxin();
} else {
    header("location:login.php");
}
?>