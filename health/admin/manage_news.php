<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_manage.php");
    $c_manage_news = new c_manage();
    $c_manage_news->manage_news();
} else {
    header("location:login.php");
}
?>