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

    public function load_ceftidication($id_khach_hang) {
        $sql = "select * from dang_ky_tiem dk,cau_hoi_dang_ky_tiem ch where dk.id_khach_hang=ch.id_dang_ky_tiem and dk.thoi_gian_mong_muon_tiem=ch.ngay_tao and dk.trang_thai_tiem=1 and dk.id_khach_hang = ? ORDER BY dk.ngay_tiem DESC";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_khach_hang));
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

    public function read_province() {
        $sql = "select * from tinh_thanh_pho";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function show_province($id) {
        $sql = "select ten_tinh_thanh_pho from tinh_thanh_pho where id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_dictricts($id_tinh_thanh_pho) {
        $sql = "select * from quan_huyen where id_tinh_thanh_pho = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_tinh_thanh_pho));
    }

    public function show_dictricts($id) {
        $sql = "select ten_quan_huyen from quan_huyen where id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function read_wards($id_quan_huyen) {
        $sql = "select * from xa_phuong where id_quan_huyen = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_quan_huyen));
    }

    public function show_wards($id) {
        $sql = "select ten_xa_phuong from xa_phuong where id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function log_move($id_khach_hang) {
        $sql = "select * from log_khai_bao_y_te where id_khach_hang = ? ORDER BY ngay_khoi_hanh DESC;";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_khach_hang));
    }
}