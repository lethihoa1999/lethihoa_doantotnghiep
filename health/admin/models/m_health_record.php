<?php
require_once ("database.php");
class m_health_record extends database {
    public function read_health_record_with_name_customer() {
        $sql = "select hs.*,ho_ten from ho_so_suc_khoe hs,khach_hang kh where hs.id_khach_hang=kh.id";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search_health_record_customer($ho_ten,$ngay_kham) {
        $sql = "select * from ho_so_suc_khoe";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function search_health_record_before($ma_khach_hang,$ngay_kham,$ho_ten,$gioi_tinh) {
        $sql = "select hs.*,kh.ma_khach_hang,kh.ho_ten,kh.gioi_tinh from ho_so_suc_khoe hs,khach_hang kh where luot_tiem=1 AND hs.id_khach_hang=kh.id AND kh.ma_khach_hang LIKE '%$ma_khach_hang%' AND kh.ho_ten LIKE '%$ho_ten%' AND kh.gioi_tinh LIKE '%$gioi_tinh%' AND hs.ngay_kham LIKE '%$ngay_kham%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    
    public function search_health_record_after($ma_khach_hang,$ngay_kham,$ho_ten,$gioi_tinh) {
        $sql = "select hs.*,kh.ma_khach_hang,kh.ho_ten,kh.gioi_tinh from ho_so_suc_khoe hs,khach_hang kh where luot_tiem=2 AND hs.id_khach_hang=kh.id AND kh.ma_khach_hang LIKE '%$ma_khach_hang%' AND kh.ho_ten LIKE '%$ho_ten%' AND kh.gioi_tinh LIKE '%$gioi_tinh%' AND hs.ngay_kham LIKE '%$ngay_kham%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_health_record($luot_tiem)
    {
        $sql = "select * from ho_so_suc_khoe where luot_tiem = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($luot_tiem));
    }

    public function read_customer_by_id($id) {
        $sql = "select * from khach_hang where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_customer()
    {
        $sql = "select * from khach_hang ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_health_record_before($id) {
        $sql = "select * from ho_so_suc_khoe where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_health($id_khach_hang,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$id) {
        $sql = "update ho_so_suc_khoe set id_khach_hang = ?, ngay_kham = ?, huyet_ap = ?,nhip_tim = ?,nhiet_do = ?,ket_luan = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_khach_hang,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$id));
    }

    public function add_health($id,$id_chi_tiet_khach_hang,$id_nguoi_kham,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$luot_tiem,$trang_thai) {
        $sql = "insert into ho_so_suc_khoe values(?,?,?,?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_chi_tiet_khach_hang,$id_nguoi_kham,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$luot_tiem,$trang_thai));
    }

    public function delete_health_before($id_khach_hang,$ngay_kham){
        $sql = "delete from ho_so_suc_khoe where id_khach_hang = ? AND ngay_kham = ? ";
        $this->setQuery($sql);
        return $this->execute(array($id_khach_hang,$ngay_kham));
    }

    public function delete_health_after($id){
        $sql = "delete from ho_so_suc_khoe where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

}
?>