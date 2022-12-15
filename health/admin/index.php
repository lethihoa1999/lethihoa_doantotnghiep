<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_home.php");
    $c_home = new c_home();
    $c_home->home();
} else {
    header("location:login.php");
}
?>