<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Sửa thông tin hồ sơ sức khỏe sau tiêm</h3>
                        </div>
                        <!-- /.box-header -->
                        <form style="width: 45%; margin: 23px; color: floralwhite; " class="form-horizontal" enctype="multipart/form-data" method="POST">
                            <div>
                                <lable>Mã khách hàng</lable>
                                <!-- <input type="text" name="ma_khach_hang" value="<?php echo $khach_hang->ma_khach_hang; ?>"> -->
                                <select class="form-select edit_form" name="ma_khach_hang">
                                    <option value="<?php echo $health_before->id_khach_hang?>"><?php echo $m_health_before->read_customer_by_id($health_before->id_khach_hang)->ma_khach_hang; ?></option>
                                    <?php foreach($customer as $value) {?>
                                        <option value="<?php echo $value->id ?>"><?php echo $value->ma_khach_hang ?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div>
                            <div>
                                <lable>Ngày khám</lable>
                                <input class="form-control edit_form" type="date" name="ngay_kham" value="<?php echo $health_before->ngay_kham; ?>">
                            </div>
                            <div>
                                <lable>Huyết áp</lable>
                                <input class="form-control edit_form" type="text" name="huyet_ap" value="<?php echo $health_before->huyet_ap; ?>">
                            </div>
                            <div>
                                <lable>Nhịp tim</lable>
                                <input class="form-control edit_form" type="text" name="nhip_tim" value="<?php echo $health_before->nhip_tim; ?>">
                            </div>
                            <div>
                                <lable>Nhiệt độ</lable>
                                <input class="form-control edit_form" type="text" name="nhiet_do" value="<?php echo $health_before->nhiet_do; ?>">
                            </div>
                            <div>
                                <lable>Kết luận</lable>
                                <input class="form-control edit_form" type="text" name="ket_luan" value="<?php echo $health_before->ket_luan; ?>">
                            </div>
                            <div style="margin-top: 3%; margin-left: 5%; ">
                                <button class="btn btn-success" type="submit" name="btnsubmit">Sửa</button> <a class="btn btn-danger" href='health_before.php'>Quay lại</a>
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
