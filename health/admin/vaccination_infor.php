<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_vaccination_infor.php");
    $c_home = new c_vaccination_infor();
    $c_home->show_vaccination_infor();
} else {
    header("location:login.php");
}
?>