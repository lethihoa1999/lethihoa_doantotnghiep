<?php
error_reporting(0);
include_once ("controllers/c_register_user.php");
$register = new c_register_user();
$register->register_user();
?>