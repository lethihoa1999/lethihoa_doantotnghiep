<?php
include_once ("database.php");
class m_register extends database {

    public function register_user($id, $id_loai_nguoi_dung, $ho_ten, $mat_khau, $email, $trang_thai) {
        $sql = "insert into nguoi_dung values(?,?,?,?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($id, $id_loai_nguoi_dung, $ho_ten, $mat_khau, $email, $trang_thai));
    }

    public function return_user_by_email($email) {
        $sql = "SELECT COUNT(*) as KQ FROM nguoi_dung WHERE email = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email));
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

}
?>