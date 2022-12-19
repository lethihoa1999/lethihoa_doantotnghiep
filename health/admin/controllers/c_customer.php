<?php
include_once ("models/m_customer.php");
class c_customer {
    public function show_details_customer() {
        if(isset($_GET['id'])) {
            $id_customer = $_GET['id'];
            $m_detail_customer = new m_customer();
            $customer = $m_detail_customer->read_customer_by_id($id_customer);
            $detail_customer = $m_detail_customer->read_customer_by_id($id_customer);
            $health_record_customer = $m_detail_customer->read_health_record_with_name_customer($id_customer);
            $id_kh = $detail_customer->id_nguoi_dung;
            $move = $m_detail_customer->log_move($id_kh);
        }
        $view = "views/customer_details/v_customer_details.php";
        include ("templates/font-end/layout.php");
    }

    // public function manage_money() {
    //     $m_manage_money = new m_customer();
    //     if (isset($_POST['btnsearch'])) {
    //         $ho_ten =$_POST['ho_ten'];
    //         $so_dien_thoai = $_POST['so_dien_thoai'];
    //         $nghe_nghiep = $_POST['nghe_nghiep'];
    //         $ngay_sinh = $_POST['ngay_sinh'];
    //         $dia_chi = $_POST['dia_chi'];
    //         $manage_money = $m_manage_money->search_customer($ho_ten,$so_dien_thoai,$nghe_nghiep,$ngay_sinh,$dia_chi);
    //     } else {
    //         $manage_money = $m_manage_money->read_customer();
    //     }

    //     $view = "views/manage_money/v_manage_money.php";
    //     include ("templates/font-end/layout.php");
    // }

    public function manage_register() {
        $m_manage_register = new m_customer();
        if (isset($_POST['btnsearch'])) {
            $ma_dang_ky =$_POST['ma_dang_ky'];
            $ho_ten =$_POST['ho_ten'];
            $ngay_dang_ky= $_POST['ngay_dang_ky'];
            $so_dien_thoai = $_POST['so_dien_thoai'];
            $register = $m_manage_register->search_register($ma_dang_ky,$ho_ten,$ngay_dang_ky,$so_dien_thoai);
        } else {
            $register = $m_manage_register->read_register();
        }
        $view = "views/customer/v_manage_register.php";
        include ("templates/font-end/layout.php");
    }

    public function edit_manage_register() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_register = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                $ma_dang_ky = $_POST['ma_dang_ky'];
                $ho_ten = $_POST['ho_ten'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $ngay_dang_ky = $_POST['ngay_dang_ky'];
                $result = $m_manage_register->edit_register($ma_dang_ky,$ho_ten,$so_dien_thoai,$ngay_dang_ky,$id);
            }
             
        $dang_ky = $m_manage_register->read_dang_ky_id($id);
    }
        $view = "views/customer/v_edit_manage_register.php";
        include ("templates/font-end/layout.php");
    }

    public function delete_register()
    {
        if(isset($_GET["id"]))
        {         
            $id= $_GET["id"];
            $m_register = new m_customer();
            $kq = $m_register->delete_register($id);
            $kq = $m_register->delete_register_detail_by_id($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='manage_register.php'</script>";
            }
        }
    }
    public function delete_register_detail()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_register_detail = new m_customer();
            $kq = $m_register_detail->delete_register_detail($id);
            $q = $m_register_detail->read_dang_ky_id($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');</script>";
            }

        }
    }

    public function delete_customer()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_customer = new m_customer();
            $kq = $m_customer->delete_customer($id);
            $kq = $m_customer->delete_customer_detail_by_id($id);
            $kq = $m_customer->delete_customer_health_by_id($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='manage_customer.php'</script>";
            }
        }
    }   

    public function delete_customer_detail()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_customer_detail = new m_customer();
            // $kq = $m_customer_detail->delete_customer($id);
            // $kq = $m_customer_detail->delete_customer_detail_by_id($id);
            $kq = $m_customer_detail->delete_customer_detail($id);

            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='manage_customer_detail.php?id=$id'</script>";
            }
        }
    } 


    public function manage_register_detail() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $_SESSION['id_re']=$id;
        $m_manage_register = new m_customer();
        $chi_tiet_dang_ky = $m_manage_register->read_dang_ky_id($id);
        $ho_ten=$chi_tiet_dang_ky->ho_ten;
        $dang_ky_vacxin = $m_manage_register->read_tiem_vacxin_id($id);
    }
        $view = "views/customer/v_manage_register_detail.php";
        include ("templates/font-end/layout.php");
    }

    public function edit_manage_register_detail() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_register = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                $ten_vacxin= $_POST['ten_vacxin'];
                $don_gia= $m_manage_register->read_by_id_vacxin($ten_vacxin)->gia_thanh;
                $ten_co_so = $_POST['ten_co_so'];
                $id_quan_ly_vacxin=$m_manage_register->read_cs_vx($ten_vacxin,$ten_co_so)->id;
                $so_luong = $_POST['so_luong'];
                $gia_tien = $so_luong*$don_gia;

                $ngay_du_kien_tiem = $_POST['ngay_du_kien_tiem'];
                $result = $m_manage_register->edit_register_detail($id_quan_ly_vacxin,$so_luong,$gia_tien,$ngay_du_kien_tiem,$id);
                $quan_ly_vacxin = $m_manage_register->read_tiem_vacxin_id($_SESSION['id_re']);
                $tong_tien =0;
                foreach($quan_ly_vacxin as $value){
                    $tong_tien += $value->gia_tien;
                }
                
                $result_tongtien = $m_manage_register->edit_tong_tien($tong_tien,$_SESSION['id_re']);
            }
            $dang_ky_vacxin = $m_manage_register->read_register_vacxin_id($id);

            $all_vacxin = $m_manage_register->read_vacxin();   
            $all_facility = $m_manage_register->read_facility();
        }

        $view = "views/customer/v_edit_manage_register_detail.php";
        include ("templates/font-end/layout.php");
    }

    public function manage_customer() {
        $m_manage_customer = new m_customer();
        if (isset($_POST['btnsearch'])) {
            $ma_khach_hang =$_POST['ma_khach_hang'];
            $ho_ten =$_POST['ho_ten'];
            $so_dien_thoai_lien_lac = $_POST['so_dien_thoai_lien_lac'];
            $customer = $m_manage_customer->search_customer($ma_khach_hang,$ho_ten,$so_dien_thoai_lien_lac,);
        } else {
            $customer = $m_manage_customer->read_customer();
        }

        $view = "views/customer/v_manage_customer.php";
        include ("templates/font-end/layout.php");
    }

    public function edit_manage_customer() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_customer = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                $ma_khach_hang= $_POST['ma_khach_hang'];
                $ho_ten = $_POST['ho_ten'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $so_dien_thoai_lien_lac = $_POST['so_dien_thoai_lien_lac'];
                $dia_chi = $_POST['dia_chi'];
                $result = $m_manage_customer->edit_customer($ma_khach_hang,$ho_ten,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$id);
            }
             
        $khach_hang = $m_manage_customer->read_customer_by_id($id);
    }
        $view = "views/customer/v_edit_manage_customer.php";
        include ("templates/font-end/layout.php");
    }
    
    public function add_customer() {
        
            $m_manage_customer = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                $id = null;
                $ma_khach_hang= $_POST['ma_khach_hang'];
                $ho_ten = $_POST['ho_ten'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $ngay_sinh = $_POST['ngay_sinh'];
                $so_dien_thoai_lien_lac = $_POST['so_dien_thoai_lien_lac'];
                $dia_chi = $_POST['dia_chi'];
                $trang_thai = 1;
                $result = $m_manage_customer->add_customer($id,$ho_ten,$ma_khach_hang,$gioi_tinh,$ngay_sinh,$so_dien_thoai_lien_lac,$dia_chi,$trang_thai);
            }
            if(isset($result)) {
                $_SESSION['kq'] = "Thêm khách hàng thành công";
            }
             
        $view = "views/customer/v_add_customer.php";
        include ("templates/font-end/layout.php");
    }

    public function manage_customer_detail() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];         
            $_SESSION['kh']=$id;
        $m_manage_register = new m_customer();
        $chi_tiet_khach_hang = $m_manage_register->read_khach_hang_by_id($id);
    }
        // $hoa = $dang_ky_vacxin;
        $view = "views/customer/v_manage_customer_detail.php";
        include ("templates/font-end/layout.php");
    }

    public function add_manage_customer_detail() {
            $m_manage_customer = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                
                $ten_co_so= $_POST['ten_co_so'];
                $ten_vacxin = $_POST['ten_vacxin'];
                $ngay_tiem = $_POST['ngay_tiem'];
                $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
                $result = $m_manage_customer->add_manage_customer_detail(null,$_SESSION['kh'],$ten_vacxin,$ten_co_so,$ngay_tiem,$trang_thai_thanh_toan,1);
            }
                
        $all_vacxin = $m_manage_customer->read_vacxin();   
        $all_facility = $m_manage_customer->read_facility();

        $view = "views/customer/v_add_customer_detail.php";
        include ("templates/font-end/layout.php");
    }
    public function edit_manage_customer_detail() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_customer = new m_customer();
            if(isset($_POST['btnsubmit']))
            {
                $ten_co_so= $_POST['ten_co_so'];
                $ten_vacxin = $_POST['ten_vacxin'];
                $ngay_tiem = $_POST['ngay_tiem'];
                $trang_thai_thanh_toan = $_POST['trang_thai_thanh_toan'];
                $result = $m_manage_customer->edit_manage_customer_detail($ten_co_so,$ten_vacxin,$ngay_tiem,$trang_thai_thanh_toan,$id);
            }
                
        $customer = $m_manage_customer->read_customer_detail_by_id($id);
        $all_vacxin = $m_manage_customer->read_vacxin();   
        $all_facility = $m_manage_customer->read_facility();

        

    }
        $view = "views/customer/v_edit_manage_customer_detail.php";
        include ("templates/font-end/layout.php");
    }



}
?>