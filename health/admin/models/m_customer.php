<?php
include_once ("database.php");
class m_customer extends database {
    public function read_customer()
    {
        $sql = "select * from khach_hang ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_customer_by_id($id) {
        $sql = "select * from khach_hang where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_customer($ma_khach_hang,$ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$id) {
        $sql = "update khach_hang set ma_khach_hang = ?,ho_ten = ?,gioi_tinh = ?,ngay_sinh = ?,so_dien_thoai_lien_lac = ?,dia_chi = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_khach_hang,$ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$id));
    }

    public function read_khach_hang_by_id($id_khach_hang) {
        $sql = "select * from chi_tiet_khach_hang where id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_khach_hang));
    }

    public function read_customer_detail_by_id($id) {
        $sql = "select * from chi_tiet_khach_hang where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }
    
    public function search_customer($ma_khach_hang,$ho_ten,$so_dien_thoai_lien_lac,) {
        $sql = "select * from khach_hang where ma_khach_hang LIKE '%$ma_khach_hang%' AND ho_ten LIKE '%$ho_ten%' AND so_dien_thoai_lien_lac LIKE '%$so_dien_thoai_lien_lac%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function add_customer($id,$ho_ten,$ma_khach_hang,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$trang_thai) {
        $sql = "insert into khach_hang values(?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ho_ten,$ma_khach_hang,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$trang_thai));
    }

    public function add_manage_customer_detail($id,$id_khach_hang,$id_vacxin,$id_co_so_tiem,$ngay_tiem,$trang_thai_thanh_toan,$trang_thai) {
        $sql = "insert into chi_tiet_khach_hang values(?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_khach_hang,$id_vacxin,$id_co_so_tiem,$ngay_tiem,$trang_thai_thanh_toan,$trang_thai));
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

    public function read_register_vacxin_id($id) {
        $sql = "select * from dang_ky_tiem_vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_by_id_co_so_tiem($id) {
        $sql = "select * from co_so_tiem_chung where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_facility()
    {
        $sql = "select * from co_so_tiem_chung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_by_id_vacxin($id) {
        $sql = "select * from vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_vacxin()
    {
        $sql = "select * from vacxin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    

    public function read_co_so_tiem_id($id) {
        $sql = "select * from quan_ly_vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_id($id) {
        $sql = "select * from ho_so_suc_khoe where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_health_record_with_name_customer($id) {
        $sql = "select hs.*,kh.ho_ten,kh.id,kh.id_nguoi_dung from ho_so_suc_khoe hs,khach_hang kh where hs.id_khach_hang=kh.id and kh.id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function log_move($id_khach_hang) {
        $sql = "select * from log_khai_bao_y_te where id_khach_hang = ? ORDER BY ngay_khoi_hanh DESC;";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_khach_hang));
    }

    public function count_user() {
        $sql = "select count(*) as CT from khach_hang";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function count_registered() {
        $sql = "select count(*) as CT from dang_ky_tiem";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function count_file() {
        $sql = "select count(*) as CT from ho_so_suc_khoe";
        $this->setQuery($sql);
        return $this->loadRow();
    }

    public function read_register()
    {
        $sql = "select * from dang_ky_tiem";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search_register($ma_dang_ky,$ho_ten,$ngay_dang_ky,$so_dien_thoai) {
        $sql = "select * from dang_ky_tiem where ma_dang_ky LIKE '%$ma_dang_ky%' AND ho_ten LIKE '%$ho_ten%' AND ngay_dang_ky LIKE '%$ngay_dang_ky%' AND so_dien_thoai LIKE '%$so_dien_thoai%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function edit_register($ma_dang_ky,$ho_ten,$so_dien_thoai,$ngay_dang_ky,$id) {
        $sql = "update dang_ky_tiem set ma_dang_ky = ?, ho_ten = ?,so_dien_thoai = ?,ngay_dang_ky = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ma_dang_ky,$ho_ten,$so_dien_thoai,$ngay_dang_ky,$id));
    }

    public function delete_register($id){
        $sql = "delete from dang_ky_tiem where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function delete_register_detail_by_id($id_dang_ky_tiem){
        $sql = "delete from dang_ky_tiem_vacxin where id_dang_ky_tiem = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_dang_ky_tiem));
    }

    public function delete_register_detail($id){
        $sql = "delete from dang_ky_tiem_vacxin where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function delete_customer($id){
        $sql = "delete from khach_hang where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function delete_customer_detail_by_id($id_khach_hang){
        $sql = "delete from chi_tiet_khach_hang where id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_khach_hang));
    }

    public function delete_customer_health_by_id($id_khach_hang){
        $sql = "delete from ho_so_suc_khoe where id_khach_hang = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_khach_hang));
    }

    public function delete_customer_detail($id){
        $sql = "delete from chi_tiet_khach_hang where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function edit_register_detail($id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,$id) {
        $sql = "update dang_ky_tiem_vacxin set id_quan_ly_vacxin = ?, so_luong = ?,gia_tien = ?,ngay_du_kien_tiem = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,$id));
    }
    public function read_cs_vx($id_vacxin,$id_co_so_tiem) {
        $sql = "select * from quan_ly_vacxin where id_vacxin = ? AND id_co_so_tiem = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id_vacxin,$id_co_so_tiem));
    }

    public function edit_manage_customer_detail($id_co_so_tiem,$id_vacxin,$ngay_tiem,$trang_thai_thanh_toan,$id) {
        $sql = "update chi_tiet_khach_hang set id_co_so_tiem = ?, id_vacxin = ?, ngay_tiem = ?,trang_thai_thanh_toan = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_co_so_tiem,$id_vacxin,$ngay_tiem,$trang_thai_thanh_toan,$id));
    }

    public function edit_tong_tien($tong_tien,$id) {
        $sql = "update dang_ky_tiem set tong_tien = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($tong_tien,$id));
    }

    

}
?>