<?php
include_once("models/m_information_user.php");
class c_information_user {
    public function __construct()
    {
    }

    public function information() {
        $error = [];
        if (isset($_POST['btnsubmit'])) {
            $id = NULL;
            $ho_ten = $_POST['ho_ten'];
            $gioi_tinh = $_POST['gioi_tinh'];
            $ngay_sinh = $_POST['ngay_sinh'];          
            $so_dien_thoai_lien_lac = $_POST['so_dien_thoai_lien_lac'];
            $dia_chi = $_POST['dia_chi'];
            // $tinh = $_POST['tinh'];
            // $quan = $_POST['quan'];
            // $phuong = $_POST['phuong'];
            // $dia_chi = $_POST['dia_chi']. ", " . $phuong. ", " . $quan. ", " . $tinh;
            // $quoc_gia = $_POST['quoc_gia'];
            // $ghi_chu = $_POST['ghi_chu'];
            // $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES['hinh_anh']['name'] : "";
            $info = new m_information_user();
            $trang_thai = 1;
            $result = $info->information_user($id,$ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$trang_thai);
            if($result) {
                // if ($hinh_anh != "") {
                //     //di chuyển ảnh vào thư mục
                //     move_uploaded_file($_FILES['hinh_anh']['tmp_name'],"public/layout/imageinfo/".$hinh_anh);
                // }
                $done[] = "Cập nhật thông tin thành công!!!";
            } else {
                $error[] = "Cập nhật thông tin không thành công!!!";
            }
        }
        $view = "views/information-user/v_information_user.php";
        include_once ("templates/font-end/layout.php");
    }
}
?>
