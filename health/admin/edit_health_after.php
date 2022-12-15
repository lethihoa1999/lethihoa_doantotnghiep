<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_health_record.php");
    $c_health_after = new c_health_record();
    $c_health_after->edit_health_after();
} else {
    header("location:login.php");
}
?>