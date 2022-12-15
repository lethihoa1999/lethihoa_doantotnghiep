<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin vacxin</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <!-- <div>
                                <lable>Tên cơ sở: </lable>
                                <input type="text" name="ten_co_so" value="<?php echo $vacxin->ten_co_so; ?>">
                            </div> -->
                            <div>
                                <lable>Tên vacxin: </lable>
                                <input class="form-control edit_form" type="text" name="ten_vacxin" value="<?php echo $vacxin->ten_vacxin; ?>">
                            </div>
                            <div>
                                <lable>Nước sản xuất: </lable>
                                <input class="form-control edit_form" type="text" name="nuoc_san_xuat" value="<?php echo $vacxin->nuoc_san_xuat; ?>">
                            </div>
                            <div>
                                <lable>Giá thành: </lable>
                                <input class="form-control edit_form" type="text" name="gia_thanh" value="<?php echo $vacxin->gia_thanh ?>">
                            </div>
                            <div>
                                <lable>Số lượng: </lable>
                                <input class="form-control edit_form" type="text" name="so_luong" value="<?php echo $sl->so_luong ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button>
                                <a class="btn btn-danger" href='manage_vacxin.php?id=<?php echo $sl->id_co_so_tiem ?>'>Quay lại</a>

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
