<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_register_detail = new c_customer();
    $c_register_detail->edit_manage_register_detail();
} else {
    header("location:login.php");
}
?>
