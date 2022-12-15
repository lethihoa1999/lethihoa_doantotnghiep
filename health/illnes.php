<?php
@session_start();
// if (isset($_SESSION['user'])) {
    include_once ("controllers/c_update_information_user.php");
    $c_illnes = new c_update_information_user();
    $c_illnes->illnes();
// } else {
//     header("location:login.php");
// }
?>