<?php
@session_start();
    include_once ("controllers/c_customer.php");
    $c_delete_register = new c_customer();
    $c_delete_register->delete_register();
?>
