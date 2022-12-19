<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin chi tiết khách hàng</h3>
                        </div>
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">

                            <!-- <div>
                                <lable>Cơ sở tiêm</lable>
                                <select class="form-select edit_form" name="ten_co_so">
                                <option value="<?php echo $customer->id_co_so_tiem ?>"><?php echo $m_manage_customer->read_by_id_co_so_tiem($customer->id_co_so_tiem)->ten_co_so ?></option>
                                    <?php foreach($all_facility as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_co_so ?></option>
                                    <?php }?>
                                </select>
                            </div>   -->

                            <div>
                                <lable>Tên vacxin tiêm</lable>
                                <select class="form-select edit_form" name="ten_vacxin">
                                <option value="<?php echo $customer->id_vacxin ?>"><?php echo $m_manage_customer->read_by_id_vacxin($customer->id_vacxin)->ten_vacxin ?></option>
                                    <?php foreach($all_vacxin as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_vacxin ?></option>
                                    <?php }?>
                                </select>
                            </div>    
                                                
                            <div>
                                <lable>Ngày tiêm</lable>
                                <input type="date" class="form-control edit_form" name="ngay_tiem" value="<?php echo $customer->ngay_tiem; ?>">
                            </div>

                            <div>
                                <lable>Trạng thái thanh toán</lable>
                                <select class="form-select edit_form" name="trang_thai_thanh_toan">
                                    <option value="<?php echo $customer->trang_thai_thanh_toan;?>"><?php 
                                    if($customer->trang_thai_thanh_toan==0){
                                        echo "Chưa thanh toán";
                                    } else if($customer->trang_thai_thanh_toan==1){
                                        echo "Đã thanh toán";
                                    } else if($customer->trang_thai_thanh_toan==2){
                                        echo "Hoàn tiền";
                                    }else if($customer->trang_thai_thanh_toan==3){
                                        echo "Đã hoàn tiền";
                                    } 
                                    ?></option>
                                    <option value="0">Chưa thanh toán</option>
                                    <option value="1">Đã thanh toán</option>
                                    <option value="2">Hoàn tiền</option>
                                    <option value="3">Đã hoàn tiền</option>
                                </select>
                            </div>

                            <div>
                                <lable>Trạng thái tiêm</lable>
                                <select class="form-select edit_form" name="trang_thai_tiem">
                                    <option value="<?php echo $customer->trang_thai_tiem;?>"><?php 
                                    if($customer->trang_thai_tiem==0){
                                        echo "Chưa tiêm";
                                    } else if($customer->trang_thai_tiem==1){
                                        echo "Đã tiêm";
                                    } else if($customer->trang_thai_tiem==2){
                                        echo "Hủy tiêm";
                                    }
                                    ?></option>
                                    <option value="0">Chưa tiêm</option>
                                    <option value="1">Đã tiêm</option>
                                    <option value="2">Hủy tiêm</option>
                                </select>
                            </div>

                            <div>
                                <label>Nhân viên y tế</label>
                                <input class="form-control edit_form" type="text" name="nhan_vien_y_te">
                            </div>

                            <div>
                                <lable>Loại đăng ký</lable>
                                <select class="form-select edit_form" name="loai_dang_ky">
                                    <option value="<?php echo $customer->loai_dang_ky;?>"><?php 
                                    if($customer->loai_dang_ky==0){
                                        echo "Đăng ký trực tuyến";
                                    } else if($customer->loai_dang_ky==1){
                                        echo "Đăng ký trực tiếp";
                                    }
                                    ?></option>
                                    <option value="0">Đăng ký trực tuyến</option>
                                    <option value="1">Đăng ký trực tiếp</option>
                                </select>
                            </div>

                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='manage_customer_detail.php?id=<?php echo $customer->id_khach_hang; ?>'>Quay lại</a>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
