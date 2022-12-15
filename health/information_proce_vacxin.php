
<?php
@session_start();
    include_once ("controllers/c_update_information_user.php");
    $c_information_proce_vacxin = new c_update_information_user();
    $c_information_proce_vacxin->proce_vacxin();
?>
