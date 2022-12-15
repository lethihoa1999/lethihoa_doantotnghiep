<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin khách hàng</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Mã khách hàng</lable>
                                <input class="form-control" type="text" name="ma_khach_hang" value="<?php echo $khach_hang->ma_khach_hang; ?>">
                            </div>
                            <div>
                                <lable>Tên khách hàng</lable>
                                <input class="form-control" type="text" name="ho_ten" value="<?php echo $khach_hang->ho_ten; ?>">
                            </div>
                            <div>
                                <lable>Giới tính</lable>
                                <!-- <input name="gioi_tinh" value="<?php echo $khach_hang->gioi_tinh; ?>"> -->

                                <select class="form-select" name="gioi_tinh">
                                <option value="<?php echo $khach_hang->gioi_tinh; ?>">---Chọn---</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div>
                                <lable>Ngày sinh</lable>
                                <input class="form-control" type="date" name="ngay_sinh" value="<?php echo $khach_hang->ngay_sinh; ?>">
                            </div>
                            <div>
                                <lable>Số điện thoại liên lạc</lable>
                                <input class="form-control" type="text" name="so_dien_thoai_lien_lac" value="<?php echo $khach_hang->so_dien_thoai_lien_lac ?>">
                            </div>
                            <div>
                                <lable>Địa chỉ </lable>
                                <input class="form-control" type="text" name="dia_chi" value="<?php echo $khach_hang->dia_chi; ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='manage_customer.php'>Quay lại</a>
                            </div>
                        </form>

                        <!-- /.box-body -->
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
</div>
