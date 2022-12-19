<?php
include_once ("models/m_user.php");
@session_start();
class c_user_login {

    public function login() {
        if (isset($_POST["btnlogin"])) {
            $email =  isset($_POST['email']) ? $_POST['email'] : "không có";
            $password =  isset($_POST['password']) ? $_POST['password'] : "Không có";
            $this->saveLoginSession($email, $password);
            if (isset($_SESSION['user'])) {
                header("location:index.php");
            } else {
                $_SESSION['error_login'] = "Sai thông tin";
                 header("location:login.php");
            }
        }
    }

    public function logout() {
        unset($_SESSION['user']);
        unset($_SESSION['email']);
        unset($_SESSION['error_login']);
        unset($_SESSION['id']);
        header("location:login.php");
    }

    public function saveLoginSession($email, $password) {
        $m_user = new m_user();
        $user = $m_user->read_user_by_id_pass($email, $password);
        if (!empty($user) && isset($user->id_loai_nguoi_dung) && $user->id_loai_nguoi_dung == 1) {
            $_SESSION['user'] = $user->ho_ten;
            $_SESSION['email'] = $user->email;
            $_SESSION['id_user'] = $user->id;
        }
    }

}
