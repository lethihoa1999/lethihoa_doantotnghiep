<?php
include_once ("models/m_register.php");
$m_register = new m_register();
$vacxin = $m_register->read_vacxin_by_id($_GET['q']);
echo $vacxin->gia_thanh;
?>
