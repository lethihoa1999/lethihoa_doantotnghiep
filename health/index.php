<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_home = new c_update_information_user();
    $c_home->home();
?>