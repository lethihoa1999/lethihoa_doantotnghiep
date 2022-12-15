<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_vacxin_child = new c_update_information_user();
    $c_vacxin_child->vacxin_schedule_child();
?>
