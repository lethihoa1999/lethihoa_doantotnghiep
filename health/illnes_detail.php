<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_illnes_detail = new c_update_information_user();
    $c_illnes_detail->illnes_detail();

?>