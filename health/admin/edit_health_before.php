<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_health_record.php");
    $c_health_before = new c_health_record();
    $c_health_before->edit_health_before();
} else {
    header("location:login.php");
}
?>