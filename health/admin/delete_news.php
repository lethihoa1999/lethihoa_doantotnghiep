<?php
@session_start();
    include_once ("controllers/c_depart.php");
    $c_news= new c_depart();
    $c_news->delete_news();
    
?>
