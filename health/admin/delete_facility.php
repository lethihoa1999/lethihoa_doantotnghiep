<?php
@session_start();
    include_once ("controllers/c_depart.php");
    $c_facility= new c_depart();
    $c_facility->delete_facility();
    
?>
