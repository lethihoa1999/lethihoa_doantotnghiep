<?php
@session_start();
include_once ("controllers/c_user_login.php");
if ($_GET['func']) {
    $c_user = new c_user_login();
    $c_user->logout();
}