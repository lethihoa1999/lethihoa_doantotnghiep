<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_vacxin_detail = new c_update_information_user();
    $c_vacxin_detail->vacxin_detail();

?>