<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once("controllers/c_update_information_user.php");
    $ceftidication_covid = new c_update_information_user();
    $ceftidication_covid->ceftidication();
} else {
    header("location:login.php");
}
?>
