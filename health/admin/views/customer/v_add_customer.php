<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm khách hàng</h3>
                        </div>
                        <?php if(isset($_SESSION['kq'])){
                            echo '<div class="alert alert-success d-flex align-items-center" style="width: 15%; margin: 1%;">Thêm thành công</div>';
                        } ?>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Mã khách hàng</lable>
                                <input class="form-control edit_form" type="text" name="ma_khach_hang" value="">
                            </div>
                            <div>
                                <lable>Tên khách hàng</lable>
                                <input class="form-control edit_form" type="text" name="ho_ten" value="">
                            </div>
                            <div>
                                <lable>Giới tính</lable>
                                <select class="form-select edit_form" name="gioi_tinh">
                                <option value="">---Chọn---</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div>
                                <lable>Ngày sinh</lable>
                                <input class="form-control edit_form" type="date" name="ngay_sinh" value="">
                            </div>
                            <div>
                                <lable>Số điện thoại liên lạc</lable>
                                <input class="form-control edit_form" type="text" name="so_dien_thoai_lien_lac" value="">
                            </div>
                            <div>
                                <lable>Địa chỉ </lable>
                                <input class="form-control edit_form" type="text" name="dia_chi" value="">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Thêm khách hàng</button> <a class="btn btn-danger" href='manage_customer.php'>Quay lại</a>
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
