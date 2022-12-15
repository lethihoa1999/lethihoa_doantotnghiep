<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once("controllers/c_update_information_user.php");
    $patient_details = new c_update_information_user();
    $patient_details->patient_details();
} else {
    header("location:login.php");
}
?>
