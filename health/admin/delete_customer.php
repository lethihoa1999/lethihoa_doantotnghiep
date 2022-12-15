<?php
@session_start();
    include_once ("controllers/c_customer.php");
    $c_delete_customer = new c_customer();
    $c_delete_customer->delete_customer();
?>
