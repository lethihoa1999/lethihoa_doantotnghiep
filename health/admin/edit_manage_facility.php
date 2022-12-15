<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_edit_facility = new c_depart();
    $c_edit_facility->edit_facility();
} else {
    header("location:login.php");
}
?>