<?php
include_once ("database.php");
class m_vaccintion_info extends  database {
    public function read_table_inforvaccin() {
        $sql = "select * from dang_ky_tiem ORDER BY trang_thai_tiem ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search_inforvaccin($ho_ten,$so_dien_thoai,$nghe_nghiep,$ma_the_bao_hiem,$ngay_sinh,$dia_chi,$thoi_gian_mong_muon,$trang_thai) {
        $sql = "select * from dang_ky_tiem where ho_ten LIKE '%$ho_ten%' AND so_dien_thoai LIKE '%$so_dien_thoai%' AND nghe_nghiep LIKE '%$nghe_nghiep%' AND so_the_bao_hiem LIKE '%$ma_the_bao_hiem%' AND ngay_sinh LIKE '%$ngay_sinh%' AND dia_chi LIKE '%$dia_chi%' AND thoi_gian_mong_muon_tiem LIKE '%$thoi_gian_mong_muon%' AND trang_thai_tiem LIKE '%$trang_thai%' ORDER BY trang_thai_tiem ASC";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_inforvaccin($id) {
        $sql = "select * from dang_ky_tiem where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_inforvaccin_by_id($id) {
        $sql = "select dk.ho_ten,dk.ngay_sinh,dk.gioi_tinh,dk.can_cuoc_cong_dan,dk.so_the_bao_hiem,dk.thoi_gian_mong_muon_tiem,dk.nghe_nghiep,dk.so_dien_thoai,dk.dia_chi,ch.cau_1,ch.cau_2,ch.cau_3,ch.cau_4,ch.cau_5,ch.cau_6,ch.cau_7,ch.cau_8,ch.cau_9,ch.cau_10 from dang_ky_tiem dk, cau_hoi_dang_ky_tiem ch where dk.id_khach_hang = ch.id_dang_ky_tiem and dk.thoi_gian_mong_muon_tiem = ch.ngay_tao and dk.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function update_vaccinnation($loai_vaccin,$ngay_tiem,$noi_tiem,$trang_thai_tiem,$nguoi_cap_nhat,$id) {
        $sql = "update dang_ky_tiem set loai_vaccin = ?, ngay_tiem = ?,noi_tiem = ?, trang_thai_tiem = ?, nguoi_cap_nhat = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($loai_vaccin,$ngay_tiem,$noi_tiem,$trang_thai_tiem,$nguoi_cap_nhat,$id));
    }

    public function update_status($trang_thai,$id) {
        $sql = "update khach_hang kh, dang_ky_tiem dk set kh.trang_thai = ? where dk.id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($trang_thai,$id));
    }
}
?>