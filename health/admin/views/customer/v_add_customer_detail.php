<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm thông tin chi tiết khách hàng</h3>
                        </div>
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">

                            <!-- <div>
                                <lable>Cơ sở tiêm</lable>
                                <select class="form-select edit_form" name="ten_co_so">
                                    <option>---Chọn---</option>
                                    <?php foreach($all_facility as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_co_so ?></option>
                                    <?php }?>
                                </select>
                            </div>   -->

                            <div>
                                <lable>Tên vacxin tiêm</lable>
                                <select class="form-select edit_form" name="ten_vacxin">
                                    <option>---Chọn---</option>
                                    <?php foreach($all_vacxin as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ten_vacxin ?></option>
                                    <?php }?>
                                </select>
                            </div>    
                            <div>
                                <lable>Tên người tiêm</lable>
                                <select class="form-select edit_form" name="nguoi_tiem">
                                    <option>---Chọn---</option>
                                    <?php foreach($nguoi_tiem as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ho_ten ?></option>
                                    <?php }?>
                                </select>
                            </div>
                                                
                            <div>
                                <lable>Ngày tiêm</lable>
                                <input class="form-control edit_form" type="date" name="ngay_tiem">
                            </div>
                            <div>
                                <lable>Trạng thái thanh toán</lable>
                                <select class="form-select edit_form" name="trang_thai_thanh_toan">
                                    <option value="0">Chưa thanh toán</option>
                                    <option value="1">Đã thanh toán</option>
                                    <option value="2">Hoàn tiền</option>
                                    <option value="3">Đã hoàn tiền</option>
                                </select>
                            </div>
                            <div>
                                <lable>Trạng thái tiêm</lable>
                                <select class="form-select edit_form" name="trang_thai_tiem">
                                    <option value="0">Chưa tiêm</option>
                                    <option value="1">Đã tiêm</option>
                                    <option value="2">Hủy tiêm</option>
                                </select>
                            </div>
                            <div>
                                <lable>Loại đăng ký</lable>
                                <select class="form-select edit_form" name="loai_dang_ky">
                                    <option value="0">Đăng ký trực tuyến</option>
                                    <option value="1">Đăng ký trực tiếp</option>
                                </select>
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Thêm</button> <a class="btn btn-danger" href='manage_customer_detail.php?id=<?php echo $_SESSION['kh']; ?>'>Quay lại</a>
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
