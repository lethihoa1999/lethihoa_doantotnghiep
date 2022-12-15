<?php
include_once ("database.php");
class m_information_adress extends database {

    public function add_adress($id,$id_khach_hang,$phuong_tien,$so_hieu_phuong_tien,$diem_di,$diem_den,$ngay_khoi_hanh,$cau_1,$cau2,$cau3,$trang_thai) {
        $sql = "insert into log_khai_bao_y_te values(?,?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_khach_hang,$phuong_tien,$so_hieu_phuong_tien,$diem_di,$diem_den,$ngay_khoi_hanh,$cau_1,$cau2,$cau3,$trang_thai));
    }

    public function read_email_user($id_nguoi_dung) {
        $sql = "select * from khach_hang where id_nguoi_dung = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_nguoi_dung));
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

    public function show_dictricts($id) {
        $sql = "select ten_quan_huyen from quan_huyen where id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }

    public function show_wards($id) {
        $sql = "select ten_xa_phuong from xa_phuong where id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id));
    }
}
?>
