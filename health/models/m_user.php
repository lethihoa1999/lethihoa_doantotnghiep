<?php
require_once ("database.php");
class m_user extends database {
    public function read_user_by_id_pass($email,$password) {
        $sql = "select * from nguoi_dung where email = ? and mat_khau = ?";
        $this->setQuery($sql);
        return $this->loadRow(array($email,md5($password)));
    }

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
}
?>