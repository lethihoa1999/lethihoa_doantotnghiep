<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_package_vacxin_pre_child = new c_update_information_user();
    $c_package_vacxin_pre_child->package_vacxin_pre_child();
?>
