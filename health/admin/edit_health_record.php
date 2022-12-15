<?php
@session_start();
if (isset($_SESSION['user'])) {
    error_reporting(0);
    include_once ("controllers/c_health_record.php");
    $c_home = new c_health_record();
    $c_home->update_health_record();
} else {
    header("location:login.php");
}
?>