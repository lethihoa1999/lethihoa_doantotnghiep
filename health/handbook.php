<?php
@session_start();
// if (isset($_SESSION['user'])) {
    include_once ("controllers/c_update_information_user.php");
    $c_handbook = new c_update_information_user();
    $c_handbook->handbook();
// } else {
//     header("location:login.php");
// }
?>