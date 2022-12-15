<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_manage_facility = new c_depart();
    $c_manage_facility->manage_facility();
} else {
    header("location:login.php");
}
?>