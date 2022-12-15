<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_health_record.php");
    $c_home = new c_health_record();
    $c_home->show_health_before();
} else {
    header("location:login.php");
}
?>