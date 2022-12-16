<?php
// include_once ("models/m_health_record.php");
// include_once ("models/m_customer.php");
include_once ("models/m_depart.php");
class c_depart {
    public function manage_facility()
    {
        $m_manage_facility = new m_depart();
            if (isset($_POST['btnsearch'])) {
                $ten_co_so = $_POST['ten_co_so'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $dia_chi = $_POST['dia_chi'];
                $manage_facility = $m_manage_facility->search_facility($ten_co_so,$so_dien_thoai,$dia_chi);
            } else {
                $manage_facility = $m_manage_facility->read_facility();
            }

        $view = "views/manage_depart/v_manage_facility.php";
        include("templates/font-end/layout.php");
    }

    public function edit_facility() {      
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_facility = new m_depart();
            if(isset($_POST['btnsubmit']))
            {
                $ten_co_so = $_POST['ten_co_so'];
                $dia_chi = $_POST['dia_chi'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $result = $m_manage_facility->edit_facility($ten_co_so,$dia_chi,$so_dien_thoai,$id);
            }
             
        $facility = $m_manage_facility->read_facility_by_id($id);
    }
        $view = "views/manage_depart/v_edit_manage_facility.php";
        include ("templates/font-end/layout.php");
    }

    public function add_facility() {      
            $m_manage_facility = new m_depart();
            $manage_vacxin = $m_manage_facility->read_vacxin(); 
            if(isset($_POST['btnsubmit']))
            {
                $ten_co_so = $_POST['ten_co_so'];
                $dia_chi = $_POST['dia_chi'];
                $so_dien_thoai = $_POST['so_dien_thoai'];
                $result = $m_manage_facility->add_facility(null,$ten_co_so,$dia_chi,$so_dien_thoai,1);
                $id_co_so_tiem = $m_manage_facility->read_facility_by_name($ten_co_so)->id;
                foreach($manage_vacxin as $value)
                {
                    $id_vacxin=$value->id;
                    $so_luong=0;
                    $result_2 = $m_manage_facility->add_amount_vacxin(null,$id_vacxin,$id_co_so_tiem,$so_luong);
                }
            }
             
        // $facility = $m_manage_facility->read_facility_by_id($id);
    
        $view = "views/manage_depart/v_add_facility.php";
        include ("templates/font-end/layout.php");
    }

    public function manage_vacxin()
    {
        $m_manage_vacxin = new m_depart();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $_SESSION['id_cs'] = $id;
            $manage_vacxin = $m_manage_vacxin->read_quan_ly_vacxin_by_id_co_so_tiem($id);
        }
        // $manage_vacxin = $m_manage_vacxin->read_quan_ly_vacxin();
        $manage_facility = $m_manage_vacxin->read_facility();
        $view = "views/manage_depart/v_manage_vacxin.php";
        include("templates/font-end/layout.php");
    }

    public function edit_manage_vacxin() {      
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_vacxin = new m_depart();
            if(isset($_POST['btnsubmit']))
            {
                $ten_vacxin = $_POST['ten_vacxin'];
                $nuoc_san_xuat = $_POST['nuoc_san_xuat'];
                $gia_thanh = $_POST['gia_thanh'];
                $so_luong = $_POST['so_luong'];
                $result_1 = $m_manage_vacxin->edit_vacxin($ten_vacxin,$nuoc_san_xuat,$gia_thanh,$id);
                $result_2 = $m_manage_vacxin->edit_amount_vacxin($so_luong,$id);
            }         
            $vacxin = $m_manage_vacxin->read_vacxin_by_id($id);   
            $sl = $m_manage_vacxin->read_quan_ly_vacxin_by_id($id);
            $manage_facility = $m_manage_vacxin->read_facility_by_id($id);
        }
        $view = "views/manage_depart/v_edit_manage_vacxin.php";
        include ("templates/font-end/layout.php");
    }
    public function add_vacxin() {
            $m_manage_vacxin = new m_depart();
            $manage_facility = $m_manage_vacxin->read_facility(); 
            if(isset($_POST['btnsubmit']))
            {
                $ten_vacxin = $_POST['ten_vacxin'];
                $nuoc_san_xuat = $_POST['nuoc_san_xuat'];
                $gia_thanh = $_POST['gia_thanh'];
                $anh=null;
                $result_1 = $m_manage_vacxin->add_vacxin(null,$ten_vacxin,$nuoc_san_xuat,$gia_thanh,$anh,1);
                $id_vacxin = $m_manage_vacxin->read_vacxin_by_name($ten_vacxin)->id;
                // $sl = $m_manage_vacxin->read_quan_ly_vacxin_by_id($id);
                foreach($manage_facility as $value)
                {
                    $id_co_so_tiem=$value->id;
                    $so_luong = $_POST['so_luong'.$value->id];
                    $result_2 = $m_manage_vacxin->add_amount_vacxin(null,$id_vacxin,$id_co_so_tiem,$so_luong);
                }
                
            } 

        $view = "views/manage_depart/v_add_vacxin.php";
        include ("templates/font-end/layout.php");
    }

    function delete_facility()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_facility = new m_depart();
            $kq = $m_facility->delete_facility($id);
            $kq = $m_facility->delete_facility_vacxin($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='manage_facility.php'</script>";
            }
        }
    }

    function delete_vacxin()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_vacxin = new m_depart();
            $id_ql_vacxin = $m_vacxin->read_quan_ly_vacxin_by_id($id);
            $id_vacxin= $id_ql_vacxin->id_vacxin;
            $kq = $m_vacxin->delete_vacxin($id_vacxin);
            $kq = $m_vacxin->delete_vacxin_id_vacxin($id_vacxin);        
            $sl = $m_vacxin->read_quan_ly_vacxin_by_id($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');</script>";
            }
        }
    }

    public function manage_package_vacxin()
    {
        $m_manage_package_vacxin = new m_health_record();
            if (isset($_POST['btnsearch'])) {
                $ho_ten = $_POST['ho_ten'];
                $ngay_kham = $_POST['ngay_kham'];
                $manage_package_vacxin = $m_manage_package_vacxin->search_health_record_customer($ho_ten,$ngay_kham);
            } else {
                $manage_package_vacxin = $m_manage_package_vacxin->read_health_record_with_name_customer();
            }

        $view = "views/manage_depart/v_manage_package_vacxin.php";
        include("templates/font-end/layout.php");
    }

    public function manage_news()
    {
        // $m_manage_news = new m_health_record();
        //     if (isset($_POST['btnsearch'])) {
        //         $ho_ten = $_POST['ho_ten'];
        //         $ngay_kham = $_POST['ngay_kham'];
        //         $manage_news = $m_manage_news->search_health_record_customer($ho_ten,$ngay_kham);
        //     } else {
        //         $manage_news = $m_manage_news->read_health_record_with_name_customer();
        //     }

        $m_manage_news = new m_depart();       
        $manage_news  = $m_manage_news->read_news();

        $view = "views/manage_depart/v_manage_news.php";
        include("templates/font-end/layout.php");
    }

    public function edit_news() {      
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_manage_news = new m_depart();
            if(isset($_POST['btnsubmit']))
            {
                $tieu_de = $_POST['tieu_de'];
                $noi_dung = $_POST['noi_dung'];
                $anh = $_POST['anh'];
                $nguoi_dang = $_POST['nguoi_dang'];
                $thoi_gian_dang = $_POST['thoi_gian_dang'];
                $result = $m_manage_news->edit_news($tieu_de,$noi_dung,$anh,$nguoi_dang,$thoi_gian_dang,$id);
            }
             
        $read_new = $m_manage_news->read_news_by_id($id);
    }
        $view = "views/manage_depart/v_edit_news.php";
        include ("templates/font-end/layout.php");
    }

    public function add_news() {      
            $m_manage_news = new m_depart();
            $manage_vacxin = $m_manage_news->read_vacxin(); 
            if(isset($_POST['btnsubmit']))
            {
                $tieu_de = $_POST['tieu_de'];
                $anh = $_POST['anh'];
                $nguoi_dang = $_POST['nguoi_dang'];
                $thoi_gian_dang = $_POST['thoi_gian_dang'];
                $result = $m_manage_news->add_news(null,$tieu_de,null,$anh,$nguoi_dang,$thoi_gian_dang,1);
            }
    
        $view = "views/manage_depart/v_add_news.php";
        include ("templates/font-end/layout.php");
    }

    function delete_news()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_news = new m_depart();
            $kq = $m_news->delete_news($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='manage_news.php'</script>";
            }
        }
    }



}
