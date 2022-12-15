<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_health_record.php");
    $c_add_health = new c_health_record();
    $c_add_health->add_health();
} else {
    header("location:login.php");
}
?>