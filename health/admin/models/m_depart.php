<?php
include_once ("database.php");
class m_depart extends database {
    public function read_facility()
    {
        $sql = "select * from co_so_tiem_chung";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function read_vacxin()
    {
        $sql = "select * from vacxin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_facility_by_id($id) {
        $sql = "select * from co_so_tiem_chung where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    
    public function edit_facility($ten_co_so,$dia_chi,$so_dien_thoai,$id) {
        $sql = "update co_so_tiem_chung set ten_co_so = ?,dia_chi = ?,so_dien_thoai = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_co_so,$dia_chi,$so_dien_thoai,$id));
    }

    public function search_facility($ten_co_so,$so_dien_thoai,$dia_chi) {
        $sql = "select * from co_so_tiem_chung where ten_co_so LIKE '%$ten_co_so%' AND so_dien_thoai LIKE '%$so_dien_thoai%' AND dia_chi LIKE '%$dia_chi%'";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_disease()
    {
        $sql = "select * from phong_benh";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_quan_ly_vacxin()
    {
        $sql = "select * from quan_ly_vacxin";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function read_quan_ly_vacxin_by_id($id) {
        $sql = "select * from quan_ly_vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_disease_by_id($id) {
        $sql = "select * from phong_benh where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function read_quan_ly_vacxin_by_id_co_so_tiem($id_co_so_tiem) {
        $sql = "select * from quan_ly_vacxin where id_co_so_tiem = ?";
        $this->setQuery($sql);
        return $this->loadAllRows(array($id_co_so_tiem));
    }

    public function read_vacxin_by_id($id) {
        $sql = "select * from vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

    public function edit_vacxin($ten_vacxin,$nuoc_san_xuat,$gia_thanh,$id) {
        $sql = "update vacxin set ten_vacxin = ?,nuoc_san_xuat = ?,gia_thanh = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_vacxin,$nuoc_san_xuat,$gia_thanh,$id));
    }

    public function edit_amount_vacxin($so_luong,$id) {
        $sql = "update quan_ly_vacxin set so_luong = ? where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($so_luong,$id));
    }

    public function add_vacxin($id,$ten_vacxin,$nuoc_san_xuat,$gia_thanh,$anh,$trang_thai) {
        $sql = "insert into vacxin values(?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_vacxin,$nuoc_san_xuat,$gia_thanh,$anh,$trang_thai));
    }

    public function read_vacxin_by_name($ten_vacxin) {
        $sql = "select * from vacxin where ten_vacxin = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_vacxin));
    }

    public function add_amount_vacxin($id,$id_vacxin,$id_co_so_tiem,$so_luong) {
        $sql = "insert into quan_ly_vacxin values(?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$id_vacxin,$id_co_so_tiem,$so_luong));
    }
    
    public function add_facility($id,$ten_co_so,$dia_chi,$so_dien_thoai,$trang_thai) {
        $sql = "insert into co_so_tiem_chung values(?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id,$ten_co_so,$dia_chi,$so_dien_thoai,$trang_thai));
    }

    public function delete_facility($id) {
        $sql = "delete from co_so_tiem_chung where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function delete_facility_vacxin($id_co_so_tiem) {
        $sql = "delete from quan_ly_vacxin where id_co_so_tiem = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_co_so_tiem));
    }

    public function read_facility_by_name($ten_co_so) {
        $sql = "select * from co_so_tiem_chung where ten_co_so = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($ten_co_so));
    }

    public function delete_vacxin($id) {
        $sql = "delete from vacxin where id = ?";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function delete_vacxin_id_vacxin($id_vacxin) {
        $sql = "delete from quan_ly_vacxin where id_vacxin = ?";
        $this->setQuery($sql);
        return $this->execute(array($id_vacxin));
    }

    // public function delete_vacxin_id_co_so($id_co_so_tiem) {
    //     $sql = "delete from co_so_tiem_chung where id_co_so_tiem = ?";
    //     $this->setQuery($sql);
    //     return $this->execute(array($id_co_so_tiem));
    // }

    


    // public function search_vacxin_facility($ten_vacxin,$nuoc_san_xuat) {
    //     $sql = "select * from vacxin where ten_vacxin LIKE '%$ten_vacxin%' AND nuoc_san_xuat LIKE '%$nuoc_san_xuat%'";
    //     $this->setQuery($sql);
    //     return $this->loadAllRows();
    // }
    

}
?>