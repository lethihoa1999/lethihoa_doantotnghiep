<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin cơ sở tiêm chủng</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Tên cơ sở tiêm chủng: </lable>
                                <input class="form-control edit_form" type="text" name="ten_co_so" value="<?php echo $facility->ten_co_so; ?>">
                            </div>
                            <div>
                                <lable>Địa chỉ: </lable>
                                <input class="form-control edit_form" type="text" name="dia_chi" value="<?php echo $facility->dia_chi; ?>">
                            </div>
                            <div>
                                <lable>Số hotline: </lable>
                                <input class="form-control edit_form" type="text" name="so_dien_thoai" value="<?php echo $facility->so_dien_thoai ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='manage_facility.php'>Quay lại</a>
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
