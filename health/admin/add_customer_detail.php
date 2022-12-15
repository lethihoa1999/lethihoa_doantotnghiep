<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_add_customer_detail = new c_customer();
    $c_add_customer_detail->add_manage_customer_detail();
} else {
    header("location:login.php");
}
?>
