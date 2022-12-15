<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_register = new c_customer();
    $c_register->manage_register();
} else {
    header("location:login.php");
}
?>
