<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once ("controllers/c_change_pass.php");
    $chang_pass = new c_change_pass();
    $chang_pass->change_pass();
    } else {
        header("location:login.php");
}
?>