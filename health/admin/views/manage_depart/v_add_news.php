<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin bệnh học</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Tiêu đề: </lable>
                                <input class="form-control edit_form" type="text" name="tieu_de">
                            </div>
                            <!-- <div>
                                <lable>Nội dung: </lable>
                                <input class="form-control edit_form" type="text" name="noi_dung" value="<?php echo $read_new->noi_dung; ?>">
                            </div> -->
                            <div>
                                <lable>Ảnh: </lable>
                                <input class="form-control edit_form" type="text" name="anh">
                            </div>
                            <div>
                                <lable>Người chỉnh sửa: </lable>
                                <input class="form-control edit_form" type="text" name="nguoi_dang">
                            </div>
                            <div>
                                <lable>Thời gian sửa: </lable>
                                <input class="form-control edit_form" type="date" name="thoi_gian_dang">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Thêm tin tức</button> <a class="btn btn-danger" href='manage_news.php'>Quay lại</a>
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
type=""