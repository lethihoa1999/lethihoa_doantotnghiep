<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_information_before_vacxin = new c_update_information_user();
    $c_information_before_vacxin->info_before_vacxin();
?>
