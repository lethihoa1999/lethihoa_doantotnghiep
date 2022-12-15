<?php
include_once ("models/m_register.php");
class c_change_pass {
    public function change_pass () {
        $error = [];
        $change = new m_register();
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $change_user = $change->customer($email);
            $pass_old = md5($_POST['pass_old']);
            $pass_new = md5($_POST['pass_new']);
            $check_pass = md5($_POST['check_pass_new']);
            if ($pass_old == $change_user->mat_khau && $pass_new == $check_pass && $email == $change_user->email) {
                $result = $change->change_pass($pass_new,$email);
                if($result) {
                    if ($pass_old == $pass_new) {
                        $error[] = "Không nhập trùng mật khẩu cũ!!!";
                    } else {
                        $done[] = "Cập nhật thông tin thành công!!!";
                    }

                }
            }
            if ($pass_new != $check_pass) {
                $error[] = "Xác nhập mật khẩu không thành công!!!";
            }
        }
        $view = "views/change_pass/v_change_pass.php";
        include_once ("templates/course/layout.php");
    }
}
?>
