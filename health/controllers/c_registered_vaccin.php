<?php
include_once ("models/m_registered_vaccin.php");
class c_registered_vaccin {

    public function registered_vaccin () {
        $error = [];
        $m_registered_vaccin = new m_registered_vaccin();
        $m_facility = $m_registered_vaccin->read_facility();
        $m_vacxin = $m_registered_vaccin->read_vacxin();
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $read_email = $m_registered_vaccin->read_email_user($email);
            if (isset($_POST['btnsubmit'])) {
                $ho_ten = $_POST['ho_ten'];
                $_SESSION['ho_ten'] = $ho_ten;
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $_SESSION['so_dien_thoai'] = $so_dien_thoai;
                $co_so_tiem = $_POST['co_so_tiem'];
                $_SESSION['co_so_tiem'] = $co_so_tiem;
                $in = $_POST['index'];
                $index = 0;
                $tong_tien = 0;

                for ($i=1; $i <= $in; $i++) {
                    if(!empty($_POST['ten_vacxin'.$i]) && !empty($_POST['so_luong'.$i]) && !empty($_POST['ngay_du_kien_tiem'.$i]) && !empty($_POST['gia_tien'.$i])){
                        $index++;
                        $ten_vacxin[$i] = $_POST['ten_vacxin'.$i];
                        $_SESSION['ten_vacxin'][$i] = $ten_vacxin[$i];
                        
                        $so_luong[$i] = $_POST['so_luong'.$i];
                    $_SESSION['so_luong'][$i] = $so_luong[$i];

                    $ngay_du_kien_tiem[$i] = $_POST['ngay_du_kien_tiem'.$i];
                    $_SESSION['ngay_du_kien_tiem'][$i] = $ngay_du_kien_tiem[$i];

                    $gia_tien[$i] = $_POST['gia_tien'.$i];
                    $_SESSION['gia_tien'][$i] = $gia_tien[$i];
$tong_tien+=$gia_tien[$i];
                    }


                    
                    // var_dump($gia_tien[1]);
                    // die();
                }
$_SESSION['tong_tien'] = $tong_tien;
$_SESSION['index'] = $index;
                if (empty($error)) {
                        header("Location: /health/confilm_register.php");
                    }
                }  else {
                    $error[] = "Lỗi gửi đăng ký!!!";
                }
        }
        $view = "views/register_vacxin/v_register_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }

    public function confilm_register () {    
        $m_register_vaccin = new m_registered_vaccin();
        $view = "views/register_vacxin/v_confilm_register.php";
        include_once ("templates/font-end/layout.php");
    }


    public function pay_money () {
       
        function getRandomString($n)
            {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';

            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }

            return $randomString;
            }   
            
        $ran = getRandomString(8);
        $m_register_vaccin = new m_registered_vaccin();
        // var_dump(123);
        // die();
        if(isset($_POST['btnsubmit'])){
            $ho_ten = $_SESSION['ho_ten'];
            $so_dien_thoai = $_SESSION['so_dien_thoai'];
            $co_so_tiem = $_SESSION['co_so_tiem'];
            $tong_tien = $_SESSION['tong_tien'];
            $ngay_dang_ky = date("m/d/y", time());    
            $result = $m_register_vaccin->add_register_vacxin(null,$ran,$ho_ten,$_SESSION['id_user'],$so_dien_thoai,$ngay_dang_ky,$tong_tien,0,1);
            
            $id_dang_ky_tiem = $m_register_vaccin->read_id_by_ma_dk($ran)->id;

            for ($i=1; $i <= $_SESSION['index']; $i++) {
                $ten_vacxin = $_SESSION['ten_vacxin'.$i];
                $so_luong = $_SESSION['so_luong'.$i];
                $ngay_du_kien_tiem = $_SESSION['ngay_du_kien_tiem'.$i];
                $gia_tien = $_SESSION['gia_tien'.$i];
                $so_luong = $_SESSION['so_luong'.$i];
                $id_quan_ly_vacxin = $m_register_vaccin->read_qlcs_by_vacxin_cs($ten_vacxin,$co_so_tiem);
                $result_2 = $m_register_vaccin->add_register_detail(null,$id_dang_ky_tiem,$id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,1);
        }
    }
        $view = "views/register_vacxin/v_pay_money.php";
        include_once ("templates/font-end/layout.php");
        
    }

    public function vacxin () {
        
        $view = "views/register_vacxin/v_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }

    public function history_register_vacxin () {
        // if (isset($_GET['id'])) {
        //     $id = $_GET['id'];
        // $m_manage_register = new m_customer();
        // $register = $m_manage_register->read_register();
        // $chi_tiet_dang_ky = $m_manage_register->read_dang_ky_id($id);
        // $ho_ten=$chi_tiet_dang_ky->ho_ten;
        // // $so_dien_thoai=$chi_tiet_dang_ky->so_dien_thoai;
        // $dang_ky_vacxin = $m_manage_register->read_tiem_vacxin_id($id);
        
        $view = "views/register_vacxin/v_history_register_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }

























//     public function confilm_register () {
//         $error = [];
//         $m_registered_vaccin = new m_registered_vaccin();
//         $m_province = $m_registered_vaccin->read_province();
//         if (isset($_SESSION['email'])) {
//             $email = $_SESSION['email'];
//             $read_email = $m_registered_vaccin->read_email_user($email);
//             if (isset($_POST['btnsubmit'])) {
//                 $id_vaccin = Null;
//                 $creator = $_SESSION['user'];
//                 $id_khach_hang = $read_email->id;
//                 $ho_ten = $_POST['ho_ten'];
//                 $ngay_sinh = $_POST['ngay_sinh'];
//                 $gioi_tinh = $_POST['gioi_tinh'];
//                 $can_cuoc_cong_dan = $_POST['can_cuoc_cong_dan'];
//                 $so_the_bao_hiem = $_POST['so_the_bao_hiem'];
//                 $thoi_gian_tiem = $_POST['thoi_gian_tiem'];
//                 $nghe_nghiep = $_POST['nghe_nghiep'];
//                 $so_dien_thoai = $_POST['so_dien_thoai'];
//                 $tinh = $_POST['tinh'];
//                 $quan = $_POST['quan'];
//                 $phuong = $_POST['phuong'];
//                 $t = $m_registered_vaccin->show_province($tinh);
//                 $q = $m_registered_vaccin->show_dictricts($quan);
//                 $p = $m_registered_vaccin->show_wards($phuong);
//                 $dia_chi = $_POST['dia_chi']. ", ". $p[0]->ten_xa_phuong. ", ". $q[0]->ten_quan_huyen. ", ". $t[0]->ten_tinh_thanh_pho;

//                 if (empty($error)) {
//                     $result = $m_registered_vaccin->add_registered($id_vaccin,$id_khach_hang,$ho_ten,$ngay_sinh,$gioi_tinh,$can_cuoc_cong_dan,$so_the_bao_hiem,$thoi_gian_tiem,$nghe_nghiep,$so_dien_thoai,$dia_chi,$creator);
//                     $question = $m_registered_vaccin->question_registered($id_vaccin,$id_khach_hang,$cau_1,$cau_2,$cau_3,$cau_4,$cau_5,$cau_6,$cau_7,$cau_8,$cau_9,$cau_10,$thoi_gian_tiem);
//                     if ($result) {
//                         $done[] = "Đăng kí tiêm thành công!!!";
//                     }
//                 }  else {
//                     $error[] = "Đăng kí tiêm không thành công!!!";
//                 }
//             }
//         }
//         $view = "views/register_vacxin/v_confilm_register.php";
//         include_once ("templates/font-end/layout.php");
//     }



}
?>
