<?php
@session_start();
    include_once ("controllers/c_health_record.php");
    $c_delete_health_after= new c_health_record();
    $c_delete_health_after->delete_health_after();
?>
