<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_customer.php");
    $c_home = new c_customer();
    $c_home->show_details_customer();
} else {
    header("location:login.php");
}
?>