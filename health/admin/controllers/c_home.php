<?php
include_once ("models/m_customer.php");
class c_home {

    public function home() {
        $count = new m_customer();
        $check_count_user = $count->count_user();
        $check_count_regis = $count->count_registered();
        $check_count_file = $count->count_file();
        $view = "views/home/v_home.php";
        include ("templates/font-end/layout.php");
    }
}
?>