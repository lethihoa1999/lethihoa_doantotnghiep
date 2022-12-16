<?php
include_once ("database.php");
class m_information_user extends database {

    public function read_user() {
        $sql = "select * from khach_hang";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // public function information_user($ho_ten, $id_nguoi_dung, $ngay_sinh, $gioi_tinh, $so_dien_thoai, $can_cuoc_cong_dan, $so_the_bao_hiem, $hinh_anh, $dia_chi, $quoc_tich, $nghe_nghiep, $ghi_chu,$email) {
        //     $sql = "update khach_hang set ho_ten = ?, id_nguoi_dung = ?,ngay_sinh = ?,gioi_tinh = ?,so_dien_thoai = ?,can_cuoc_cong_dan = ?,so_the_bao_hiem = ?,hinh_anh = ?,dia_chi = ?,quoc_tich = ?,nghe_nghiep = ?,ghi_chu = ? where email = ?";
        //     $this->setQuery($sql);
        //     return $this->execute(array($ho_ten, $id_nguoi_dung, $ngay_sinh, $gioi_tinh, $so_dien_thoai, $can_cuoc_cong_dan, $so_the_bao_hiem, $hinh_anh, $dia_chi, $quoc_tich, $nghe_nghiep, $ghi_chu,$email));
        // }

    public function information_user($ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi) {
        $sql = "update khach_hang set ho_ten = ?,gioi_tinh = ?,ngay_sinh = ?,so_dien_thoai_lien_lac = ?,dia_chi = ? where email = ?";
        $this->setQuery($sql);
        return $this->execute(array($ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi));
    }

    public function id_ceftidication($id_khach_hang) {
        $sql = "select * from dang_ky_tiem where id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_khach_hang));
    }

    public function read_email_user($email) {
        $sql = "select * from nguoi_dung where email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function read_file($id_khach_hang) {
        $sql = "select * from ho_so_suc_khoe where id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_khach_hang));
    }

    public function log_move($id_khach_hang) {
        $sql = "select * from log_khai_bao_y_te where id_khach_hang = ? ORDER BY ngay_khoi_hanh DESC;";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_khach_hang));
    }

    public function show_illnes(){        
        // $sql = " SELECT * FROM benh_hoc WHERE id ORDER BY id DESC LIMIT 3";
        $sql = " SELECT * FROM benh_hoc WHERE id ORDER BY id ASC LIMIT 3";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function illnes() {
        $sql = "select * from benh_hoc";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function illnes_detail($id) {
        $sql = "select * from benh_hoc where id= ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function show_vacxin(){        
        // $sql = " SELECT * FROM benh_hoc WHERE id ORDER BY id DESC LIMIT 3";
        $sql = " SELECT * FROM vacxin WHERE id ORDER BY id ASC LIMIT 8";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function vacxin_detail($id) {
        $sql = "select * from vacxin where id= ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

}