<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_vacxin_adult = new c_update_information_user();
    $c_vacxin_adult->vacxin_schedule_adult();
?>
