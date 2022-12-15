<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_add_customer = new c_customer();
    $c_add_customer->add_customer();
} else {
    header("location:login.php");
}
?>
