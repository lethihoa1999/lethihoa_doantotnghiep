<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_add_facility = new c_depart();
    $c_add_facility->add_facility();
} else {
    header("location:login.php");
}
?>