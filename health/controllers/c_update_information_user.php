<?php
include_once ("models/m_information_user.php");
class c_update_information_user {

    // public function update_information () {
    //     $m_update = new m_information_user();
    //     $m_province = $m_update->read_province();
    //     if (isset($_SESSION['email'])) {
    //         $id = $_SESSION['email'];
    //         $read_email = $m_update->read_email_user($id);
    //         $error = [];
    //         if (isset($_POST['btnupdate'])) {
    //             $id_nguoi_dung = $_SESSION['id'];
    //             $ho_ten = $_POST['ho_ten'];
    //             $ngay_sinh = $_POST['ngay_sinh'];
    //             $gioi_tinh = $_POST['gioi_tinh'];
    //             $can_cuoc_cong_dan = $_POST['can_cuoc_cong_dan'];
    //             $nghe_nghiep = $_POST['nghe_nghiep'];
    //             $so_dien_thoai = $_POST['so_dien_thoai'];
    //             $so_the_bao_hiem = $_POST['so_the_bao_hiem'];
    //             $tinh = $_POST['tinh'];
    //             $quan = $_POST['quan'];
    //             $phuong = $_POST['phuong'];
    //             $t = $m_update->show_province($tinh);
    //             $q = $m_update->show_dictricts($quan);
    //             $p = $m_update->show_wards($phuong);
    //             $dia_chi = $_POST['dia_chi']. ", ". $p[0]->ten_xa_phuong. ", ". $q[0]->ten_quan_huyen. ", ". $t[0]->ten_tinh_thanh_pho;
    //             $quoc_gia = $_POST['quoc_gia'];
    //             $ghi_chu = $_POST['ghi_chu'];
    //             $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES['hinh_anh']['name'] : "";
    //             $folder_path = 'public/layout/imageinfo/';
    //             $file_path = $folder_path.$_FILES['hinh_anh']['name'];
    //             $ex = array('jpg','png','jpeg','gif');
    //             $file_type = strtolower(pathinfo($file_path,PATHINFO_EXTENSION));
    //             $result = $m_update->information_user($ho_ten,$id_nguoi_dung,$ngay_sinh,$gioi_tinh,$so_dien_thoai,$can_cuoc_cong_dan,$so_the_bao_hiem,$hinh_anh,$dia_chi,$quoc_gia,$nghe_nghiep,$ghi_chu,$id);
    //             if ($result) {
    //                 if ($hinh_anh != "") {
    //                     //di chuyển ảnh vào thư mục
    //                     if (!in_array($file_type,$ex)) {
    //                         $error[] = "Loại file không hợp lệ!!";
    //                         move_uploaded_file($_FILES['hinh_anh']['tmp_name'],NULL);
    //                     } elseif ($_FILES['hinh_anh']['size'] > 500000) {
    //                         $error[] = "Dung lượng file quá lớn!!!";
    //                         move_uploaded_file($_FILES['hinh_anh']['tmp_name'],NULL);
    //                     } else {
    //                         move_uploaded_file($_FILES['hinh_anh']['tmp_name'],$file_path);
    //                         $done[] = "Cập nhật thông tin thành công!!!";
    //                     }
    //                 }
    //             } else {
    //                 $error[] = "Cập nhật thông tin không thành công!!!";
    //             }
    //         }
    //     }

    //     $view = "views/update-information-user/v_update_information_user.php";
    //     include_once ("templates/font-end/layout.php");
    // }

    // public function patient_details() {
    //     $m_information_user = new m_information_user();
    //     $information_user = $m_information_user->read_user();
    //     if (isset($_SESSION['email'])) {
    //         $id = $_SESSION['email'];
    //         $id_user = $_SESSION['id'];
    //         $move = $m_information_user->log_move($id_user);
    //         $read_email = $m_information_user->read_email_user($id);
    //         $id_ho_so = $read_email->id;
    //         $id_profile = $m_information_user->read_file($id_ho_so);
    //     }

    //     $view = "views/patient-details/v_patient_details.php";
    //     include_once ("templates/font-end/layout.php");
    // }

        // public function ceftidication() {
    //     $m_information_user = new m_information_user();
    //     $information_user = $m_information_user->read_user();
    //     if (isset($_SESSION['email'])) {
    //         $id = $_SESSION['email'];
    //         $read_email = $m_information_user->read_email_user($id);
    //         $id_khach_hang = $read_email->id;
    //         $log_di_chuyen = $m_information_user->load_ceftidication($id_khach_hang);
    //     }

    //     $view = "views/ceftidication-covid/v_ceftidication_covid.php";
    //     include_once ("templates/font-end/layout.php");
    // }

    public function home() {
        $m_information_user = new m_information_user();
        $show_vacxin = $m_information_user->show_vacxin();
        $show_illness = $m_information_user->show_illnes();

        $view = "views/home/v_home.php";
        include_once ("templates/font-end/layout.php");
    }

    public function introduce() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/introduce/v_introduce.php";
        include_once ("templates/font-end/layout.php");
    }

    public function handbook() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/handbook/v_handbook.php";
        include_once ("templates/font-end/layout.php");
    }

    public function illnes() {
        $m_information_user = new m_information_user();
        $illnes = $m_information_user->illnes();

        $view = "views/illnesses/v_illnes.php";
        include_once ("templates/font-end/layout.php");
    }

    public function illnes_detail() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_GET['id'])) {
            $id = $_GET['id']; 
        }

        $view = "views/illnesses/v_illnes_detail.php";
        include_once ("templates/font-end/layout.php");
    }

    public function vacxin_detail() {
        $m_vacxin_detail = new m_information_user();
        if (isset($_GET['id'])) {
            $id = $_GET['id']; 
      
        }

        $view = "views/home/v_vacxin_detail.php";
        include_once ("templates/font-end/layout.php");
    }

    public function vacxin_status() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_status/v_vacxin_status.php";
        include_once ("templates/font-end/layout.php");
    }

    public function vacxin_schedule_child() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_child/v_vacxin_schedule_child.php";
        include_once ("templates/font-end/layout.php");
    }

    public function vacxin_schedule_adult() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_adult/v_vacxin_schedule_adult.php";
        include_once ("templates/font-end/layout.php");
    }
    
    public function package_vacxin_child() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_child/v_package_vacxin_child.php";
        include_once ("templates/font-end/layout.php");
    }
    
    public function package_vacxin_pre_child() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_child/v_package_vacxin_pre_child.php";
        include_once ("templates/font-end/layout.php");
    }

    public function package_vacxin_adult() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_adult/v_package_vacxin_adult.php";
        include_once ("templates/font-end/layout.php");
    }
    
    public function package_vacxin_mature() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_adult/v_package_vacxin_mature.php";
        include_once ("templates/font-end/layout.php");
    }
    
    public function package_vacxin_pregnant() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_adult/v_package_vacxin_pregnant.php";
        include_once ("templates/font-end/layout.php");
    }

    public function info_before_vacxin() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_handbook/v_info_before_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }

    public function info_after_vacxin() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_handbook/v_info_after_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }

    public function proce_vacxin() {
        $m_information_user = new m_information_user();
        $information_user = $m_information_user->read_user();
        if (isset($_SESSION['email'])) {
            $id = $_SESSION['email'];
            $id_user = $_SESSION['id'];
            $move = $m_information_user->log_move($id_user);
            $read_email = $m_information_user->read_email_user($id);
        }

        $view = "views/vacxin_handbook/v_proce_vacxin.php";
        include_once ("templates/font-end/layout.php");
    }
}
?>
