<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_edit_customer_detail = new c_customer();
    $c_edit_customer_detail->edit_manage_customer_detail();
} else {
    header("location:login.php");
}
?>
