<?php
include_once ("models/m_register.php");
class c_register_user {
    function register_user() {
        $error_1 = [];
        $m_register = new m_register();
        if (isset($_POST["btnsubmit"])) {

            $id = NULL;
            $id_loai_nguoi_dung = 1;
            $ho_ten = $_POST["ho_ten"];
            $so_dien_thoai = $_POST["so_dien_thoai"];
            $password = md5($_POST["password"]);
            $confirm_password = md5($_POST["confirm_password"]);
            $email = $_POST["email"];
            $trang_thai = 1;
            $kq_1 = $m_register->return_user_by_email($email);
            if ($kq_1->KQ == 1) {
                $error_1[] = "Email đã tồn tại";
            }

            if($password != $confirm_password) {
                $error_1[] = "Mật khẩu và xác nhận mật khẩu phải khớp với nhau";
            }

            if (empty($error_1)) {
                $kq = $m_register->register_user($id,$id_loai_nguoi_dung,$ho_ten,$so_dien_thoai,$password,$email,$trang_thai);
                $ks = $m_register->customer_user($email,$ho_ten);
                $rep_user = $m_register->read_user($email);
                $id_rep = $rep_user->id;
                $success_id = $m_register->health_user($id_rep);
                if($kq) {
                    $success[] = "Đăng kí tài khoản thành công";
                    header("Location: /health/login.php");
                } else {
                    echo "<script>alert('Thêm không thành công')</script>";
                }
            }
        }
        $view = "views/auth_register/v_auth_register.php";
        include_once ("templates/course/layout.php");
    }
}
?>
