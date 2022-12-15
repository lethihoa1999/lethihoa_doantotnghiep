<?php
@session_start();
    include_once ("controllers/c_health_record.php");
    $c_delete_health_before= new c_health_record();
    $c_delete_health_before->delete_health_before();
?>
