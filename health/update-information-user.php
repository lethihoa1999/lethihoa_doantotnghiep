<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once("controllers/c_update_information_user.php");
    $update_information = new c_update_information_user();
    $update_information->update_information();
} else {
    header("location:login.php");
}
?>
