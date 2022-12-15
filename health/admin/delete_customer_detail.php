<?php
@session_start();
    include_once ("controllers/c_customer.php");
    $c_delete_customer = new c_customer();
    $c_delete_customer->delete_customer_detail();
    $id=$_SESSION['kh'];
    header('location:manage_customer_detail.php?id='.$id);
?>
