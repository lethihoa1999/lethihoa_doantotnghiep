<?php
@session_start();
    include_once ("controllers/c_depart.php");
    $c_delete_vacxin= new c_depart();
    $c_delete_vacxin->delete_vacxin();
    $id=$_SESSION['id_cs'];
    header('location:manage_vacxin.php?id='.$id);
?>
