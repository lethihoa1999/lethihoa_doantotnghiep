<?php
include_once ("database.php");
class m_register extends database {

    public function register_user($id, $id_loai_nguoi_dung, $ho_ten, $so_dien_thoai, $mat_khau, $email, $trang_thai) {
        $sql = "insert into nguoi_dung values(?,?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_loai_nguoi_dung, $ho_ten, $so_dien_thoai, $mat_khau, $email, $trang_thai));
    }

    public function return_user_by_email($email) {
        $sql = "SELECT COUNT(*) as KQ FROM nguoi_dung WHERE email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function customer_user($email,$ho_ten) {
        $sql = "insert into khach_hang(email,ho_ten) values (?,?)";
        $this->setQuery($sql);
        return $this->execute(array($email,$ho_ten));
    }

    public function read_user($email) {
        $sql = "select * from khach_hang where email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function health_user($id) {
        $sql = "insert into ho_so_suc_khoe(id_khach_hang) values (?)";
        $this->setQuery($sql);
        return $this->execute(array($id));
    }

    public function customer($email) {
        $sql = "select * from nguoi_dung where email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
    }

    public function change_pass($mat_khau,$email) {
        $sql = "update nguoi_dung set mat_khau = ? where email = ?";
        $this->setQuery($sql);
        return $this->execute(array($mat_khau,$email));
    }

    public function read_vacxin_by_id($id) {
        $sql = "select * from vacxin where id = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($id));
    }

}
?>