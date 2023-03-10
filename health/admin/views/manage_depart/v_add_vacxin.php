<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm thông tin vacxin</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <!-- <div>
                                <lable>Tên cơ sở: </lable>
                                <input type="text" name="ten_co_so">
                            </div> -->
                            <div>
                                <lable>Tên vacxin: </lable>
                                <input class="form-control edit_form" type="text" name="ten_vacxin">
                            </div>
                            <div>
                                <lable>Nước sản xuất: </lable>
                                <input class="form-control edit_form" type="text" name="nuoc_san_xuat">
                            </div>
                            <div>
                                <lable>Giá thành: </lable>
                                <input class="form-control edit_form" type="text" name="gia_thanh">
                            </div>
                            <div>
                                <lable>Số lượng: </lable><br>
                                <div class="row">
                                <?php foreach($manage_facility as $value){?>
                                    <div class="col-4">
                                        <lable><?php echo $value->ten_co_so ?> </lable>
                                        <input class="form-control edit_form" type="text" name="so_luong<?php echo $value->id ?>">
                                    </div>                       
                                <?php } ?>
                                </div>                              
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Thêm vacxin</button>
                                <a class="btn btn-danger" href='manage_vacxin.php?id=<?php echo $_SESSION['id_cs']; ?>'>Quay lại</a>
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