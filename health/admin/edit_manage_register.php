<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_edit_register = new c_customer();
    $c_edit_register->edit_manage_register();
} else {
    header("location:login.php");
}
?>
