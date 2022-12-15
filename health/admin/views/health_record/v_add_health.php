<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thêm hồ sơ sức khỏe</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Mã khách hàng</lable>
                                <!-- <input type="text" name="ma_khach_hang" value="<?php echo $khach_hang->ma_khach_hang; ?>"> -->
                                <select class="form-select edit_form" name="ma_khach_hang">
                                    <option>---Chọn---</option>
                                    <?php foreach($customer as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ma_khach_hang ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div>
                            <div>
                                <lable>Ngày khám</lable>
                                <input class="form-control edit_form" type="date" name="ngay_kham">
                            </div>
                            <div>
                                <lable>Huyết áp</lable>
                                <input class="form-control edit_form" type="text" name="huyet_ap">
                            </div>
                            <div>
                                <lable>Nhịp tim</lable>
                                <input class="form-control edit_form" type="text" name="nhip_tim">
                            </div>
                            <div>
                                <lable>Nhiệt độ</lable>
                                <input class="form-control edit_form" type="text" name="nhiet_do">
                            </div>
                            <div>
                                <lable>Kết luận</lable>
                                <input class="form-control edit_form" type="text" name="ket_luan">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Thêm</button> 
                                <?php if($luot_tiem==1){
                                    echo '<a class="btn btn-danger" href="health_before.php">Quay lại</a>';
                                } if($luot_tiem==2){
                                    echo '<a class="btn btn-danger" href="health_after.php">Quay lại</a>';
                                } ?>
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
