<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_package_vacxin_mature = new c_update_information_user();
    $c_package_vacxin_mature->package_vacxin_mature();
?>