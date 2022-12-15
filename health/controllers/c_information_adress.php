<?php
include_once ("models/m_information_adress.php");
class c_information_adress {

    public function information_adress() {
        $error = [];
        $m_add_adress = new m_information_adress();
        $m_province = $m_add_adress->read_province();
        if (isset($_SESSION['id'])) {
            $id_user = $_SESSION['id'];
        $read_email = $m_add_adress->read_email_user($id_user);
            if (isset($_POST['btnsubmit'])) {
                $id = Null;
                $phuong_tien = $_POST['phuong_tien'];
                $so_hieu = $_POST['so_xe'];
                $ngay_khoi_hanh = $_POST['ngay_di'];
                $tinh_di = $_POST['tinh_di'];
                $quan_di = $_POST['quan_di'];
                $phuong_di = $_POST['phuong_di'];
                $t_di = $m_add_adress->show_province($tinh_di);
                $q_di = $m_add_adress->show_dictricts($quan_di);
                $p_di = $m_add_adress->show_wards($phuong_di);
                $dia_chi_di = $_POST['dia_chi_di'];
                $diem_di = $dia_chi_di . ", ". $p_di[0]->ten_xa_phuong. ", ". $q_di[0]->ten_quan_huyen. ", ". $t_di[0]->ten_tinh_thanh_pho;
                $tinh_den = $_POST['tinh_den'];
                $quan_den = $_POST['quan_den'];
                $phuong_den = $_POST['phuong_den'];
                $t_den = $m_add_adress->show_province($tinh_den);
                $q_den = $m_add_adress->show_dictricts($quan_den);
                $p_den = $m_add_adress->show_wards($phuong_den);
                $dia_chi_den = $_POST['dia_chi_den'];
                $diem_den = $dia_chi_den . ", ". $p_den[0]->ten_xa_phuong. ", ". $q_den[0]->ten_quan_huyen. ", ". $t_den[0]->ten_tinh_thanh_pho;
                $cau_1 = $_POST['cau_hoi_1'];
                $cau_2 = $_POST['cau_hoi_2'];
                $cau_3 = $_POST['cau_hoi_3'];
                $trang_thai = 1;
                if (empty($error)) {
                    $add_adress = $m_add_adress->add_adress($id,$id_user,$phuong_tien,$so_hieu,$diem_di,$diem_den,$ngay_khoi_hanh,$cau_1,$cau_2,$cau_3,$trang_thai);
                    if ($add_adress) {
                        $done[] = "Gửi khai báo thông tin lịch trình di chuyển thành công";
                    }
                } else {
                    $error[] = "Gửi khai báo thông tin lịch trình di chuyển không thành công";
                }
            }
        }

        $view = "views/information-adress/v_information_adress.php";
        include_once ("templates/font-end/layout.php");
    }
}
?>
