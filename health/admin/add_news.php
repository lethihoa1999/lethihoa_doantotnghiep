<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_add_news = new c_depart();
    $c_add_news->add_news();
} else {
    header("location:login.php");
}
?>