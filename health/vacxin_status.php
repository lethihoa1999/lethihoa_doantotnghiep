<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once ("controllers/c_update_information_user.php");
    $c_vacxin_status = new c_update_information_user();
    $c_vacxin_status->vacxin_status();
} else {
    header("location:login.php");
}
?>

