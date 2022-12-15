<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin đăng ký</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Mã đăng ký</lable>
                                <input class="form-control edit_form" name="ma_dang_ky" value="<?php echo $dang_ky->ma_dang_ky; ?>">
                            </div>
                            <div>
                                <lable>Tên người đăng ký</lable>
                                <input class="form-control edit_form" name="ho_ten" value="<?php echo $dang_ky->ho_ten; ?>">
                            </div>
                            <div>
                                <lable>Số điện thoại</lable>
                                <input class="form-control edit_form" name="so_dien_thoai" value="<?php echo $dang_ky->so_dien_thoai ?>">
                            </div>
                            <div>
                                <lable>Ngày đăng ký</lable>
                                <input class="form-control edit_form" name="ngay_dang_ky" value="<?php echo $dang_ky->ngay_dang_ky; ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='manage_register.php'>Quay lại</a>
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
