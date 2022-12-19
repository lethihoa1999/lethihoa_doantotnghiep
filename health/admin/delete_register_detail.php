<?php
@session_start();
    include_once ("controllers/c_customer.php");
    $c_delete_register_detail = new c_customer();
    $c_delete_register_detail->delete_register_detail();
    $id=$_SESSION['id_re'];
    header('location:manage_register_detail.php?id='.$id);
?>
