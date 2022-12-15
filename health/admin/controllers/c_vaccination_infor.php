<?php
include_once ("models/m_vaccintion_info.php");
class c_vaccination_infor {
    public function show_vaccination_infor() {
        $m_info = new m_vaccintion_info();
        if (isset($_POST['btnsubmit'])) {
            $ho_ten = $_POST['ho_ten'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $nghe_nghiep = $_POST['nghe_nghiep'];
            $ma_the_bao_hiem = $_POST['ma_the_bao_hiem'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $dia_chi = $_POST['dia_chi'];
            $thoi_gian_mong_muon = $_POST['thoi_gian_mong_muon'];
            $trang_thai_tiem = $_POST['trang_thai_tiem'];
            $show_table = $m_info->search_inforvaccin($ho_ten,$so_dien_thoai,$nghe_nghiep,$ma_the_bao_hiem,$ngay_sinh,$dia_chi,$thoi_gian_mong_muon,$trang_thai_tiem);
        } else {
            $show_table = $m_info->read_table_inforvaccin();
        }

        $view = "views/vaccination_infor/v_vaccination_infor.php";
        include ("templates/font-end/layout.php");
    }

    public function vaccination_deail_infor() {
        $m_info = new m_vaccintion_info();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $user_id = $_SESSION['user'];
            $id_check = $m_info->read_inforvaccin($id);
            $check = $id_check->id_khach_hang;
            $show_vaccin = $m_info->read_inforvaccin_by_id($id);
            $error = [];
            if (isset($_POST['btnsubmit'])) {
                $loai_vaccin = $_POST['loai_vaccin'];
                $noi_tiem = $_POST['noi_tiem'];
                $ngay_tiem = $_POST['ngay_tiem'];
                $trang_thai_tiem = $_POST['trang_thai'];
                $result = $m_info->update_vaccinnation($loai_vaccin,$ngay_tiem,$noi_tiem,$trang_thai_tiem,$user_id,$id);
                $m_info->update_status($trang_thai_tiem,$check);
                if ($result) {
                    $done[] = "Cập nhật thông tin thành công!!!";
                } else {
                    $error[] = "Cập nhật thông tin không thành công!!!";
                }
            }
        }
        $view = "views/v_vaccination_detail/v_vaccination_detail_infor.php";
        include ("templates/font-end/layout.php");
    }
}