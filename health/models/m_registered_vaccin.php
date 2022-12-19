<?php
include_once ("database.php");
class m_registered_vaccin extends database {

    public function read_email_user($email) {
        $sql = "select * from nguoi_dung where email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function read_province() {
        $sql = "select * from tinh_thanh_pho";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    // public function add_registered($id,$id_khach_hang,$ho_ten,$ngay_sinh,$gioi_tinh,$can_cuoc_cong_dan,$so_the_bao_hiem,$thoi_gian_mong_muon,$nghe_nghiep,$so_dien_thoai,$dia_chi,$nguoi_tao) {
    //     $sql = "insert into dang_ky_tiem (id,id_khach_hang,ho_ten,ngay_sinh,gioi_tinh,can_cuoc_cong_dan,so_the_bao_hiem,thoi_gian_mong_muon_tiem,nghe_nghiep,so_dien_thoai,dia_chi,nguoi_tao) values(?,?,?,?,?,?,?,?,?,?,?,?)";
    //     $this->setQuery($sql);
    //     return $this->execute(array($id,$id_khach_hang,$ho_ten,$ngay_sinh,$gioi_tinh,$can_cuoc_cong_dan,$so_the_bao_hiem,$thoi_gian_mong_muon,$nghe_nghiep,$so_dien_thoai,$dia_chi,$nguoi_tao));
    // }

    public function read_facility() {
        $sql = "select * from co_so_tiem_chung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_vacxin() {
        $sql = "select * from vacxin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_register()
    {
        $sql = "select * from dang_ky_tiem";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_dang_ky_id($id) {
        $sql = "select * from dang_ky_tiem where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_tiem_vacxin_id($id_dang_ky_tiem) {
        $sql = "select * from dang_ky_tiem_vacxin where id_dang_ky_tiem = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_dang_ky_tiem));
    }

    public function read_vacxin_by_id($id) {
        $sql = "select * from vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_facility_by_id($id) {
        $sql = "select * from co_so_tiem_chung where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function add_register_vacxin($id,$ma_dang_ky,$ho_ten,$id_nguoi_dung,$so_dien_thoai,$ngay_dang_ky,$tong_tien,$trang_thai_thanh_toan,$trang_thai) {
        $sql = "insert into dang_ky_tiem values (?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ma_dang_ky,$ho_ten,$id_nguoi_dung,$so_dien_thoai,$ngay_dang_ky,$tong_tien,$trang_thai_thanh_toan,$trang_thai));
    }

    public function add_register_detail($id,$id_dang_ky_tiem,$id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,$trang_thai) {
        $sql = "insert into dang_ky_tiem values (?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_dang_ky_tiem,$id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,$trang_thai));
    }

    public function read_id_by_ma_dk($ma_dang_ky) {
        $sql = "select * from dang_ky_tiem where ma_dang_ky = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_dang_ky));
    }

    public function read_qlcs_by_vacxin_cs($id_vacxin,$id_co_so_tiem) {
        $sql = "select * from quan_ly_vacxin where id_vacxin = ? AND id_vacxin = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_vacxin,$id_co_so_tiem));
    }


    


}
?>