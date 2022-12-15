<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_edit_customer = new c_customer();
    $c_edit_customer->edit_manage_customer();
} else {
    header("location:login.php");
}
?>
