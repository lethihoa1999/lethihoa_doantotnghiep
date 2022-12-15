<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_information_after_vacxin = new c_update_information_user();
    $c_information_after_vacxin->info_after_vacxin();
?>
