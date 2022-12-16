<?php
@session_start();
if (isset($_SESSION['user'])) {
    include_once ("controllers/c_depart.php");
    $c_edit_new = new c_depart();
    $c_edit_new->edit_news();
} else {
    header("location:login.php");
}
?> 