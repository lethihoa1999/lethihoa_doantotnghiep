<?php
include_once ("models/m_health_record.php");
include_once ("models/m_customer.php");
class c_health_record {
    public function show_all_health_record()
    {
        $m_health_record = new m_health_record();
            if (isset($_POST['btnsearch'])) {
                $ho_ten = $_POST['ho_ten'];
                $ngay_kham = $_POST['ngay_kham'];
                $health_record = $m_health_record->search_health_record_customer($ho_ten,$ngay_kham);
            } else {
                $health_record = $m_health_record->read_health_record_with_name_customer();
            }

        $view = "views/health_record/v_health_record.php";
        include("templates/font-end/layout.php");
    }

    public function update_health_record()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_health_customer = new m_customer();
            $m_record = new m_health_record();
            $id_customer = $m_health_customer->read_id($id);
            $id_nd = $id_customer->id_khach_hang;
            $health_record_customer = $m_health_customer->read_health_record_with_name_customer($id_nd);
            $error = [];
            if (isset($_POST['btnsubmit'])) {
                $chieu_cao = $_POST['chieu_cao'];
                $can_nang = $_POST['can_nang'];
                $huyet_ap = $_POST['huyet_ap'];
                $nhip_tim = $_POST['nhip_tim'];
                $nhiet_do = $_POST['nhiet_do'];
                $nhom_mau = $_POST['nhom_mau'];
                $ngay_kham = $_POST['ngay_kham'];
                $thong_tin_benh = $_POST['thong_tin_benh'];
                $trang_thai = 1;
                $result = $m_record->edit_health($huyet_ap,$nhip_tim,$nhiet_do,$chieu_cao,$can_nang,$nhom_mau,$thong_tin_benh,$ngay_kham,$trang_thai,$id_nd);
                if ($result) {
                    $done[] = "Cập nhật thông tin thành công!!!";
                } else {
                    $error[] = "Cập nhật thông tin không thành công!!!";
                }
            }
        }
        $view = "views/edit_health_record/v_edit_health_record.php";
        include("templates/font-end/layout.php");
    }

    public function show_health_before()
    {
        $m_health_before = new m_health_record();
            if (isset($_POST['btnsearch'])) {
                $ma_khach_hang = $_POST['ma_khach_hang'];
                $ngay_kham = $_POST['ngay_kham'];
                $ho_ten = $_POST['ho_ten'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $health_before = $m_health_before->search_health_record_before($ma_khach_hang,$ngay_kham,$ho_ten,$gioi_tinh);
            } else {
                $health_before = $m_health_before->read_health_record(1);
            }


        $view = "views/health_record/v_health_before.php";
        include("templates/font-end/layout.php");
    }

    public function edit_health_before() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_health_before = new m_health_record();
            if(isset($_POST['btnsubmit']))
            {
                $ma_khach_hang= $_POST['ma_khach_hang'];
                $ngay_kham= $_POST['ngay_kham'];
                $huyet_ap = $_POST['huyet_ap'];
                $nhip_tim = $_POST['nhip_tim'];
                $nhiet_do = $_POST['nhiet_do'];
                $ket_luan = $_POST['ket_luan'];
                $result = $m_health_before->edit_health($ma_khach_hang,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$id);
            }
            $customer = $m_health_before->read_customer();
            $khach_hang = $m_health_before->read_customer_by_id($id);
            $health_before = $m_health_before->read_health_record_before($id);
            }
        $view = "views/health_record/v_edit_health_before.php";
        include ("templates/font-end/layout.php");
    }

    public function edit_health_after() {
        
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $m_health_before = new m_health_record();
            if(isset($_POST['btnsubmit']))
            {
                $ma_khach_hang= $_POST['ma_khach_hang'];
                $ngay_kham= $_POST['ngay_kham'];
                $huyet_ap = $_POST['huyet_ap'];
                $nhip_tim = $_POST['nhip_tim'];
                $nhiet_do = $_POST['nhiet_do'];
                $ket_luan = $_POST['ket_luan'];
                $result = $m_health_before->edit_health($ma_khach_hang,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$id);
            }
            $customer = $m_health_before->read_customer();
            $khach_hang = $m_health_before->read_customer_by_id($id);
            $health_before = $m_health_before->read_health_record_before($id);
            }
        $view = "views/health_record/v_edit_health_after.php";
        include ("templates/font-end/layout.php");
    }

    public function show_health_after()
    {
        $m_health_after = new m_health_record();
            if (isset($_POST['btnsearch'])) {
                $ma_khach_hang = $_POST['ma_khach_hang'];
                $ngay_kham = $_POST['ngay_kham'];
                $ho_ten = $_POST['ho_ten'];
                $gioi_tinh = $_POST['gioi_tinh'];
                $health_after = $m_health_after->search_health_record_after($ma_khach_hang,$ngay_kham,$ho_ten,$gioi_tinh);
            } else {
                $health_after = $m_health_after->read_health_record(2);
            }

        $view = "views/health_record/v_health_after.php";
        include("templates/font-end/layout.php");
    }

    public function add_health() {
        
        if (isset($_GET['luot_tiem'])) {
            $luot_tiem = $_GET['luot_tiem'];
            $m_health = new m_health_record();
            if(isset($_POST['btnsubmit']))
            {
                $ma_khach_hang= $_POST['ma_khach_hang'];
                $ngay_kham= $_POST['ngay_kham'];
                $huyet_ap = $_POST['huyet_ap'];
                $nhip_tim = $_POST['nhip_tim'];
                $nhiet_do = $_POST['nhiet_do'];
                $ket_luan = $_POST['ket_luan'];
                $result = $m_health->add_health(null,$ma_khach_hang,$ngay_kham,$huyet_ap,$nhip_tim,$nhiet_do,$ket_luan,$luot_tiem,1);
            }
            $customer = $m_health->read_customer();
            }
        $view = "views/health_record/v_add_health.php";
        include ("templates/font-end/layout.php");
    }

    public function delete_health_before()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_health_before = new m_health_record();

            // $kq = $m_health_before->delete_customer($id);
            // $kq = $m_health_before->delete_customer_detail_by_id($id);
            $hs = $m_health_before->read_health_record_before($id);
            $id_khach_hang = $hs->id_khach_hang;
            $ngay_kham = $hs->ngay_kham;
            $kq = $m_health_before->delete_health_before($id_khach_hang,$ngay_kham);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='health_before.php'</script>";
            }
        }
    }

    public function  delete_health_after()
    {
        if(isset($_GET["id"]))
        {
            $id= $_GET["id"];
            $m_health_before = new m_health_record();
            // $kq = $m_health_before->delete_customer($id);
            // $kq = $m_health_before->delete_customer_detail_by_id($id);
            $kq = $m_health_before-> delete_health_after($id);
            if($kq)
            {
                echo "<script>alert('Xóa thành công');window.location='health_after.php'</script>";
            }
        }
    }
}
