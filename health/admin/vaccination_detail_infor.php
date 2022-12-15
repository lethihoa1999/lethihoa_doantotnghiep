<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once ("controllers/c_vaccination_infor.php");
    $c_home = new c_vaccination_infor();
    $c_home->vaccination_deail_infor();
} else {
    header("location:login.php");
}
?>